/*
    File: CallCenterConfig.js
    Author: Phu Vo
    Date: 2019.03.22
    Purpose: System notification ui handler
*/

CustomView_BaseController_Js('Settings_Vtiger_CallCenterConfig_Js', {}, {

    getForm: function() {
        if (!this.form) this.form = $('form[name="config"]');
        return this.form;
    },

    /**
     * Method to process User select with ajax (Options may include User and Group)
     * @author Phu Vo (2019.08.01)
     * @param {jQuery} dom 
     * Example:
     *  <input 
            type="text" autocomplete="off" class="inputElement select-users" style="width: 100%"
            placeholder="Chọn một người dùng"
            name="missed_call_alert_no_main_owner_specific_user" 
            data-user-only="true"
            data-selected-tags='{ZEND_JSON::encode(Vtiger_Owner_UIType::getCurrentOwners($CONFIG->missed_call_alert_no_main_owner_specific_user))}'
        />
     */
    initSelectUsers(dom) {
        // Make sure input dom is a jQuery object
        if (! (dom instanceof jQuery)) dom = $(dom);
        
        // It may pass in a jquery list of dom
        dom.each((index, target) => {
            target = $(target); // Alternative for $(this);

            // Init some options
            let multiple = target.data('multiple') ? target.data('multiple') : target.prop('multiple'); // Use this param to control multiple select logic
            let userOnly = target.data('user-only') ? true : false; // Set to false to include group in option list
            let params = {}; // Params to work with jquery select2
            let useType = target.data('use-type') ? true : false; // Set to True to include owner type (Users|Groups) in select value
            let selectedTags = target.data('selectedTags');
            let placeholder = target.data('placeholder') || target.attr('placeholder') || '';

            // Ajax data process method, use specific method to apply with recursive solution (Don't bother it now)
            let resultProcessor = (results) => {
                results = results.map((result, index) => {// May use to peform other logic process, we will refactor it later
                    // It may contain sub level
                    if (result.children) resultProcessor(result.children);
                    
                    // Prety sure that ajax handler will alway return data with owner type at id, so we can process it here to remove with condition
                    if (!useType && result.id) result.id = result.id.replace(/Users\:|Groups\:/g, '').trim();

                    return result;
                });
            }

            // Init default params
            params = {
                minimumInputLength: 3, // trigger search
                ajax: {
                    type: 'POST',
                    dataType: 'json',
                    cache: true,
                    data: (term, page) => {
                        let data = {
                            module: 'Vtiger',
                            action: 'HandleOwnerFieldAjax',
                            mode: 'loadOwnerList',
                            assignable_users_only: false, // It get all user|group without privilege
                            keyword: term, // String to search
                        };

                        if (userOnly) data['user_only'] = true; // Receive only user list or include group list

                        return data;
                    },
                    results: (data) => {
                        let results = data.result || []; // Make sure it will have something to return

                        // Process logic hook start from here to modify result output data
                        resultProcessor(results);
                        
                        return { results };
                    },
                    transport: (params) => {
                        return jQuery.ajax(params);
                    },
                },
            };

            // Extra params for multiple select
            if (multiple) {
                params.closeOnSelect = false;
                params.tags = [];
                params.tokenSeparators = [','];

                // Manual format item
                params.formatSelection = (object, container) => {
                    if (object.id) {
                        let params = object.id.split(':');
                        let template =  `<div>${object.text}</div>`;
    
                        // Process item type
                        if (useType) container
                            .closest('.select2-search-choice')
                            .attr('data-type', params[0])

                        return template;
                    }

                    return object.text;
                }
            }

            // Process selected tag before apply
            if (!useType && selectedTags) resultProcessor(selectedTags);
            if (!multiple && selectedTags) selectedTags = selectedTags[0];
            
            // Apply select2 with ajax
            target.select2(params);

            // Apply and trigger data
            if (selectedTags) target.select2('data', selectedTags).trigger('change');

            // Process Single select clear
            // [Todo] Refactor to peform this action after select2 was fully applied to void async problem
            if (!multiple) {
                target.select2('container').closest('.fieldValue').addClass('select-users-wraper');

                // Create clear button next to select2 container
                let clearusers = target
                    .select2('container')
                    .after('<span class="clearUsers fa fa-times"></span>')
                    .next('.clearUsers');
                
                // And then bind it with click event
                clearusers.on('click', e => {
                    // Replace display value with placeholder text
                    target.select2('data', {id: '', text: placeholder}).trigger('change');
                });
            }
        });
    },

    registerEvents: function() {
        this._super();

        // Select users input element
        this.initSelectUsers($('.inputElement.select-users'));
        
        // Register submit form
        this.getForm().vtValidate({
            submitHandler: form => {
                form = $(form);

                let config = form.serializeFormData();

                // Process to remove specific user if missed call no main owner aim to group members
                if (config.existing_customer_missed_call_alert_no_main_owner !== 'specific_user') {
                    delete config.missed_call_alert_no_main_owner_specific_user;
                }

                if (config.external_report_allowed_roles && !(config.external_report_allowed_roles instanceof Array)) {
                    config.external_report_allowed_roles = [ config.external_report_allowed_roles ];
                }

                let data = {
                    module: 'Vtiger',
                    parent: 'Settings',
                    action: 'SaveCallCenterConfig',
                    config: config,
                };

                // Need to peform form data procession here
                app.helper.showProgress();

                app.request.post({data}).then((err, res) => {
                    app.helper.hideProgress();
                    
                    // handle error
                    if (err) {
                        app.helper.showErrorNotification({message: err.message});
                        return;
                    }
                    
                    // handle saving error
                    if (res !== true && !res.result) {
                        app.helper.showErrorNotification({message: app.vtranslate('JS_CALL_CENTER_CONFIG_SAVE_SETTINGS_ERROR_MSG')});
                        return;
                    }
                    
                    // Process res here
                    app.helper.showSuccessNotification({message: app.vtranslate('JS_CALL_CENTER_CONFIG_SAVE_SETTINGS_SUCCESS_MSG')});
                });

                return;
            }
        });
        
        // Event listener for existing customer no main owner missed call
        this.getForm().find('[name="existing_customer_missed_call_alert_no_main_owner"]').on('change', e => {
            let target = $(e.target);
            
            if (target.val() === 'group_members') {
                this.getForm().find('.noMainOwnerSpecificOwner').hide();
            }
            else if (target.val() === 'specific_user') {
                this.getForm().find('.noMainOwnerSpecificOwner').show();
            }
            else {
                this.getForm().find('.noMainOwnerSpecificOwner').hide();
            }
        }).trigger('change');

        // Event listener for selecting missed call email template
        this.getForm().find('.entitySelect').on('click', e => {
            let element = $(e.target).closest('.entity-selector');
            if (element[0] == null) return;

            let moduleName = element.data('module');
            if (!moduleName) return;

            let params = {
                module: moduleName,
                view: 'Popup',
            };

            Vtiger_Popup_Js.getInstance().showPopup(params, 'Entity.Popup.Selection');

            // Handle email list select event
            app.event.off('Entity.Popup.Selection');
            app.event.on('Entity.Popup.Selection', (e, data) => {
                data = JSON.parse(data);

                let id;
                const input = element.find('.entity-selector-input');
                const display = element.find('.entity-selector-display');
                const entityReview = element.find('.entityReview');

                // Extract data info
                for (key in data) {
                    id = key;
                    data = data[id];
                    break;
                }
                
                input.val(id).trigger('change');
                if (display.is('input, selector')) display.val(data.name).trigger('change');
                else display.html(data.name).trigger('change');

                // Update email template review data
                const href = `index.php?module=EmailTemplates&view=Detail&record=${id}`;
                entityReview.attr('href', href);
            });
        });

        this.getForm().find('.entityDeselect').on('click', e => {
            let element = $(e.target).closest('.entity-selector');
            let input = element.find('.entity-selector-input');
            let display = element.find('.entity-selector-display');
                
            input.val('').trigger('change');
            if (display.is('input, selector')) display.val('').trigger('change');
            else display.html('').trigger('change');
        });

        // Event listener handle show/hide email template review logic
        this.getForm().find('[name="missed_call_alert_email_template"]').on('change', event => {
            this.getForm().find('.entityReview').toggleClass('active', Boolean($(event.target).val()));
        }).trigger('change');
    }
});