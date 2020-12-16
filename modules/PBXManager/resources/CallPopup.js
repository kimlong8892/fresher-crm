/**
 * Module: Call Center UI Controller version 2.0
 * Caution: Optimized for vtiger framework
 * and may consumes a huge effort if anyone tries to apply it to sugarcrm
 * Version: 2.1
 * Author: Phu Vo
 * Date: 2019.12.19
 * Update: 2020.02.17
 */

(function() {
    // Module variable
    const MODULE = 'PBXManager';

    /**
     * Utils method, data to handle datatable
     */
    const DataTableUtils = {
        languages: {
            emptyTable: app.vtranslate('JS_DATATABLES_NO_DATA_AVAILABLE'),
            info: app.vtranslate('JS_DATATABLES_FOOTER_INFO'),
            infoEmpty: app.vtranslate('JS_DATATABLES_FOOTER_INFO_NO_ENTRY'),
            lengthMenu: app.vtranslate('JS_DATATABLES_LENGTH_MENU'),
            loadingRecords: app.vtranslate('JS_DATATABLES_LOADING_RECORD'),
            processing: app.vtranslate('JS_DATATABLES_PROCESSING'),
            search: app.vtranslate('JS_DATATABLES_SEARCH'),
            zeroRecords: app.vtranslate('JS_DATATABLES_NO_RECORD'),
            sInfoFiltered: app.vtranslate('JS_DATATABLES_INFO_FILTERED'),
            paginate: {
                first: app.vtranslate('JS_DATATABLES_FIRST'),
                last: app.vtranslate('JS_DATATABLES_LAST'),
                next: app.vtranslate('JS_DATATABLES_PAGINATE_NEXT_PAGE'),
                previous: app.vtranslate('JS_DATATABLES_PAGINATE_PREVIOUS_PAGE')
            }
        }
    }

    /**
     * Include util method to handle tab on UI
     */
    const CallTabs = new class {
        init (element, params = {}) {
            element.each((index, target) => {
                $(target).find('.call-tab').each((index, tab) => {
                    $(tab).click(() => {
                        const key = $(tab).data('tab');
                        const group = $(tab).closest('.call-tabs').data('tabs');
                        const tabGroup = $(target).find(`.call-tabs[data-tabs="${group}"]`);
                        const contentGroup = $(target).find(`.call-tab-content[data-tabs="${group}"]`);

                        // Processing tab start
                        tabGroup
                            .find('.call-tab')
                            .not(`[data-tab="${key}"]`)
                            .toggleClass('active', false);

                        tabGroup
                            .find(`.call-tab[data-tab="${key}"]`)
                            .toggleClass('active', true);
                        // Processing tab end

                        // Processing content start
                        contentGroup
                            .find('.call-tab-pane')
                            .not(`[data-tab="${key}"]`)
                            .toggleClass('active', false);

                        contentGroup
                            .find(`.call-tab-pane[data-tab="${key}"]`)
                            .toggleClass('active', true);
                        // Processing content end

                        // Process side logic start
                        const data = {
                            element: $(target),
                            group: tabGroup,
                            tab: tabGroup.find(`.call-tab[data-tab="${key}"]`),
                            tabPane: contentGroup.find(`.call-tab-pane[data-tab="${key}"]`),
                            active: key,
                        };

                        if (typeof params.postUpdate === 'function') params.postUpdate(data);
                        // Process side logic end
                    });
                });

                // Trigger active
                $(target).find('.call-tab.active').trigger('click');
            });
        }
    }

    const AjaxSelect2 = new class {
        /**
         * Init Ajax select 2 method call to this module ajax action
         * @param {*} element `params.placeholder` `params.mode`
         * @param {*} params
         */
        init(element, params) {
            element.each((index, target) => {
                $(target).select2({
                    placeholder: params.placeholder,
                    minimumInputLength: _VALIDATION_CONFIG.autocomplete_min_length,
                    closeOnSelect: false,
                    tags: [],
                    tokenSeparators: [','],
                    ajax: {
                        type: 'POST',
                        url: 'index.php',
                        dataType: 'json',
                        data: function(term, page) {
                            term = term.trim();

                            // Skip ajax request when user enter only spaces
                            if (term.length == 0) {
                                $(target).select2('close');
                                $(target).select2('open');
                                return null;
                            }

                            const data = {
                                module: MODULE,
                                action: 'CallPopupAjax',
                                mode: params.mode,
                                targetModule: params.targetModule,
                                keyword: term
                            };

                            return data;
                        },
                        results: function(data) {
                            return { results: data.result };
                        },
                        transport: function(params) {
                            return jQuery.ajax(params);
                        }
                    }
                });
            });
        }
    }

    /**
     * Some Basic helper
     */
    const Utils = new class {
        /**
         * Remove HTML entity from string
         * @param {String} text
         */
        HTMLParse(text = ''){
            let parser = new DOMParser();
            let dom = parser.parseFromString(text, 'text/html');

            return dom.body.textContent;
        }

        /**
         * Update value if element is form element and update inner html if not
         * @param {jQuery} element
         * @param {String} value
         */
        updateValue (element, value) {
            // First, we will support update title within element if needs
            if (element.data('ui-title')) {
                element.attr('title', this.HTMLParse(value));
            }

            // Then update value base on what element type is
            if (this.isFormElement(element)) {
                return element.val(value);
            }

            // Process with case image
            if (element.is('img')) return element.attr('src', value);

            // Or default just update it inner html
            return element.html(value);
        }

        /**
         * Return true if element is a form element
         * @param {jQuery} element
         */
        isFormElement (element) {
            if (element.is('input')) return true;
            if (element.is('select')) return true;
            if (element.is('textarea')) return true;

            return false;
        }

        isResError(err, res) {
            // Process timeout session
            if (this.isLoginPage($(res)) || res === 'Invalid request') {
                window.onbeforeunload = null;
                window.location.reload();
                return true;
            }

            return err || !res;
        }

        /**
         * Simple pad helper
         * @param {*} n
         * @param {*} width
         * @param {*} z
         */
        pad (n, width, z) {
            z = z || '0';
            n = n + '';
            return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
        }

        /**
         * Vtiger Apply Field Element View Wrapper
         * @param {jQuery} element
         */
        applyFieldElementsView (element) {
            // Our template contain some form element class, so even it hidden from user
            // it still apply field element view and have some unpredictable bahavior
            // => We will remove these element before apply our own element when call popup was cloned
            element.find('.select2-container').remove();
            vtUtils.applyFieldElementsView(element);

            // Init Dom Controller
            Vtiger_Edit_Js.getInstance().registerBasicEvents(element.find('form'));
        }

        /**
         * Handle call ajax view request
         * @param {Object} params
         */
        ajaxView (params) {
            const defaultParams = {
                module: MODULE,
                view: 'CallPopupAjax',
                mode: 'relatedListView',
            }

            params = Object.assign(defaultParams, params);

            return app.request.post({ data: params });
        }

        /**
         * Return true if response is a login page (session timeout)
         * @param {jQuery} container
         */
        isLoginPage(container) {
            return Boolean(container.find('#loginFormDiv')[0]);
        }

        /**
         * Util method to update elements data and data attribute
         * @param {jQuery} element
         * @param {String} key
         * @param {String} value
         */
        updateData(element, key, value) {
            element.data(key, value);
            element.attr(`data-${key}`, value);
        }

        /**
         * Display an error notification
         * @param {Object} err
         */
        errorMessage(err) {
            const message = app.vtranslate('PBXManager.JS_CALL_POPUP_AJAX_ACTION_ERROR');
            return app.helper.showErrorNotification({ message: err ? (err.message ||  message) : message});
        }
    }

    /**
     * Call Popup UI Handler
     * DO NOT EDIT THIS CLASS UNLESS YOU ARE CREATOR OR MAINTAINER
     * CUSTOMIZE CODE PLACE IS AT THE END OF THE FILE
     */
    class BaseCallPopupHandler {
        /**
         * Invoke when CallCenter singleton created
         */
        constructor () {
            this.$list = {};
        }

        /**
         * This method is going to change some request data value with javascript pass by reference
         * @param {*} request
         * @return {void}
         */
        parseRequest (request) {
            // All request direction is upper case
            request.direction && (request.direction = request.direction.toUpperCase());

            // All request state is upper case
            request.state && (request.state = request.state.toUpperCase());
        }

        /**
         * Method to create or update call popup
         * @param {Object} request
         * @return {String} Call Id
         */
        newState (request) {
            // Clone to new Object before do anything
            request = Object.assign({}, request);
            const isNew = !this.$list[request.call_id];

            // Transfer to usable value
            this.parseRequest(request);

            // May perform side effect here
            this.preProcessRequest(request, isNew);

            // Validate request
            if (!this.validateRequest(request, isNew)) return;

            // Remove processing popup when we have a new popup with regular state
            if (isNew && request.call_id && this.$list['PROCESSING']) {
                this.$list['PROCESSING'].update({ state: 'COMPLETED' });
            }

            // Create or update call popup
            if (isNew) {
                if (request.state !== 'COMPLETED') {
                    this.$list[request.call_id] = new Popup(request);
                }
            }
            else if (request.state === 'COMPLETED') {
                this.removeCallPopup(request.call_id);
            }
            else { // Update
                this.$list[request.call_id].update(request);
            }

            // Return result
            return request.call_id;
        }

        /**
         * Method invoke every call request
         * @param {*} request
         * @param {Boolean} isNew
         */
        preProcessRequest (request, isNew = true) {
            // Default state ringing for new popup
            if (!request.state && isNew) request.state = 'RINGING';

            // Prevent update duration with empty value
            if (!request.duration) delete request.duration;

            // popup without call_id will tranform in to a special form of popup:
            // processing popup with difference behavior
            if (request.call_id === 'PROCESSING' && !request.state && isNew) request.state = 'PROCESSING';
        }

        /**
         * Method handle request validation, return `false` and call creating will stop
         * @param {*} request
         * @param {Boolean} isNew
         */
        validateRequest (request, isNew) {
            // NO ID = NO MORE PAIN
            if (!request.call_id) return;

            // NO direction = GET OUT
            if (isNew && !request.direction) return;

            // [START] Validate each direction creation
            if (!this.$list[request.call_id]) {
                if (typeof this.validateInboundRequest === 'function' && request.direction === 'INBOUND') {
                    if (!this.validateInboundRequest(request, isNew)) return;
                }
                if (typeof this.validateOutboundRequest === 'function' && request.direction === 'OUTBOUND') {
                    if (!this.validateOutboundRequest(request, isNew)) return;
                }
            }
            // [END] Validate each direction creation

            return true;
        }

        /**
         * This method will send completed signal to call center bridge and remove local call
         * @param {*} callId
         */
        notifyCompletedCall (callId) {
            window.CallCenterHandler && window.CallCenterHandler.notifyCompletedCall(callId);
            this.removeCallPopup(callId);
        }

        /**
         * This method will remove call with input callId
         * @param {*} callId
         */
        removeCallPopup (callId) {
            if (callId === 'all') {
                this.$list.forEach((call, id) => {
                    call.destruct();
                    delete this.$list[id];
                });
            }
            else {
                this.$list[callId] && this.$list[callId].destruct();
                delete this.$list[callId];
            }
        }

        /**
         * This method return true if call popup system has
         * @param {*} callId
         */
        has (callId) {
            return this.$list.hasOwnProperty(callId);
        }
    }

    /**
     * Bass class to all Popup
     * DO NOT MODIFY IT IF YOU WANT YOUR LIFE EASIER
     */
    class BasePopup {
        /**
         * Invoke every time new object created
         * @param {Object} props
         */
        constructor (props) {
            this.$el = this.getTemplate(props);

            // Save time out here to clear when destruct
            this.$timeouts = [];

            // Props may we have
            this.preProps = {}

            // Current props
            this.props = {}

            // Invoke process ui logic
            this.update(props);
            this.initEvents();
            this.render();
        }

        /**
         * Method that update data and ui
         * @param {Object} props
         * @return {void}
         */
        update (props) {
            // parse input
            this.parseProps(props);

            // Update into props
            this.props = Object.assign(this.props, props);

            // Compare change with preProps, end if no changed at all
            if (JSON.stringify(this.props) === JSON.stringify(this.preProps)) return;

            // Generate diff using shallow compare technique
            const diff = {};
            for (const key in props) {
                if (props[key] != this.preProps[key]) diff[key] = props[key];
            }

            // Update ui with diff
            for (const key in diff) {
                this.updateUi(key, diff[key]);
            }
        }

        /**
         * New props become preProps
         * @param {Object} newProps
         */
        updatePreProps (newProps) {
            this.preProps = Object.assign(this.preProps, newProps);
        }

        /**
         * Reset all resources, reset status and remove this call
         */
        destruct () {
            this.closeSyncCustomerInfoPopup();
            this.$el.remove();
            this.clearTimers(true);
            window.onbeforeunload = function() {};
            delete this;
        }

        /**
         * Trigger call render logic
         * @return {void}
         */
        render () {
            // Prepare event handler for call tabs
            const tabHandler = this.callTabEventHandler.bind(this);

            // Active call tabs
            CallTabs.init(this.$el, { postUpdate: tabHandler });

            // Apply Vtiger Form Field Element
            Utils.applyFieldElementsView(this.$el);

            this.registerCallBackLaterTimeFields();

            // Init call log basic validate rules
            this.$el.find('form[name="call_log"]').vtValidate();

            // Render UI
            $('#callCenterContainer .call-popups').append(this.$el);

            // Init Main form Ajax Select2
            this.initMainFormAjaxSelect2();

            // Prevent from refresh web
            window.onbeforeunload = function() {
                return false;
            };

            // Active UI ready for use (will trigger an animation though)
            setTimeout(() => this.$el.toggleClass('active', true), 1);
        }

        /**
         * Use to transform input data
         * @param {Object} props
         */
        parseProps (props) {
            // Tranfer to upper case
            props.stage && (props.stage = props.stage.toUpperCase());
            props.size && (props.size = props.size.toUpperCase());
        }

        /**
         * Return call template from html dom
         * @param {Object} props
         * @return {jQuery}
         */
        getTemplate (props) {
            return $('#callTemplate').clone().attr('id', `call-${props.call_id}`);
        }

        /**
         * Local method to update Ui, may use locally to force update some props binding
         * @return {void}
         */
        updateUi (key, value) {
            let rawValue = value;
            let update = true;
            value = this.parseValue(key, value);

            if (typeof this.propHooks[key] === 'function') {
                update = this.propHooks[key].bind(this)(value, rawValue);
            }
            if (this.$el.find(`[data-ui="${key}"]`)[0]) {
                update && this.updateElement(this.$el.find(`[data-ui="${key}"]`), value, rawValue);
            }

            this.updatePreProps({[key]: rawValue});
        }

        /**
         * Method use to handle prop display value
         * @param {*} key Prop key
         * @param {*} value Prop value
         * @return {*} Anything
         */
        parseValue (key, value) {
            if (typeof this.propValueConverters[key] === 'function') {
                return this.propValueConverters[key].bind(this)(value);
            }

            return value;
        }

        /**
         * Trigger basic Update element mechanism
         * @param {jQuery} element jQuery element
         * @param {*} value
         * @param {*} rawValue
         */
        updateElement (element, value, rawValue) {
            element.each((index, target) => {
                target = $(target);

                if (target.data('parser')) {
                    const parser = target.data('parser');

                    if (typeof this.parsers[parser] === 'function') {
                        value = this.parsers[parser].bind(this)(value, rawValue);
                    }
                }

                // Update value
                Utils.updateValue(target, value);
            });
        }

        /**
         * Local function to init event handler
         */
        initEvents () {
            // Call basic commands
            this.$el.find('button[name="close"]').on('click', () => {
                app.helper.showConfirmationBox({
                    message: app.vtranslate('PBXManager.JS_CALL_POPUP_CLOSE_CALL_POPUP_CONFIRM'),
                }).then(() => {
                    this.update({ state: 'COMPLETED'});
                });
            });

            this.$el.find('button[name="minimize"]').on('click', () => {
                this.update({ size: 'SMALL' });
            });

            this.$el.find('button[name="maximize"]').on('click', () => {
                this.update({ size: 'LARGE' });
            });

            this.$el.find('button[name="normalmize"]').on('click', () => {
                this.update({ size: 'MEDIUM' });
            });

            this.$el.find('button[name="restore"]').on('click', () => {
                this.update({ size: this.props.restoreSize });
            });

            // Init a timeout to check, if couldn't receive new status then active urgent close button
            this.$timeouts.push(setTimeout(() => {
                this.$el.find('button[name="close"]').toggleClass('active', true);
            }, 30000));

            // Init a timeout to automatically close "Processing" popup after 15s
            if (this.props.call_id === 'PROCESSING') this.$timeouts.push(setTimeout(() => {
                this.update({ state: 'COMPLETED'});
            }, 30000));

            // Save Call Log Actions
            this.$el.find('button[name="save_call_log"]').on('click', () => {
                this.saveCallLog();
            });

            this.$el.find('button[name="save_call_log_with_ticket"]').on('click', () => {
                this.saveCallLog(true);
            });

            // Handle Quick Create Button
            this.$el.find('.quickCreateBtn').on('click', event => {
                const module = $(event.target).data('module');
                const inventoryModules = JSON.parse($('#inventoryModules').val());

                if (inventoryModules.includes(module)) {
                    return this.openInventoryEditView(module);
                }

                if (this.props.customer_type === 'Leads' && module === 'Potentials') {
                    return this.openQuickCreatePotentialForLeadPopup();
                }

                return this.openQuickCreatePopup($(event.target));
            });
            // End Handle Quick Create Button

            // Toggle Call Back Time Other element
            this.$el.find('[name="call_back_time_other"]').on('change', event => {
                const value = $(event.target).is(':checked');
                this.$el.find('.activeBaseOnTimeOther').find('input').attr('disabled', !value);
                this.$el.find('.disableBaseOnTimeOther').find('input, select').attr('disabled', value);
            }).trigger('change');

            // Trigger Call Timmer

            // START Handle on change event
            this.$el.find('[data-onchange]').each((index, target) => {
                $(target).on('change', event => {
                    const key = $(event.target).data('onchange');
                    const value = $(event.target).val();
                    const data = { [key]: value };

                    this.update(data);
                });
            });
            // END Handle on change event

            // START Handle Create Customer Popup
            this.$el.find('.createCustomer').on('click', event => {
                this.openSyncCustomerInfoPopup();
            });
            // End Phu Vo

            // [START] Init event handler for faq tab
            this.initFaqTabEventHandlers();
            // [END] Init event handler for faq tab

            // Register click event for open faq full search modal
            this.$el.find('.openFaqFullSearchPopup').on('click', () => {
                this.openFaqFullSearchModal();
            });

            // Register handle show hide event call purpose other
            this.$el.find('[name="events_call_purpose"]').on('change', (e) => {
                this.$el.find('.toggleOnPurposeOther').toggle($(e.target).val() === 'call_purpose_other');
            }).trigger('change');

            // Register handle show hide event inbound call purpose other
            this.$el.find('[name="events_inbound_call_purpose"]').on('change', (e) => {
                this.$el.find('.toggleOnInboundPurposeOther').toggle($(e.target).val() === 'inbound_call_purpose_other');
            }).trigger('change');

            this.initCallTitleBaseOnCallPurpose();
        }

        // CALL POPUP EVENT HANDLER START FROM HERE

        saveCallLog(withTicket = false) {
            const form = this.$el.find('form[name="call_log"]');
            const formData = form.serializeFormData();

            // Validate form
            if (!form.valid()) return;

            // Force form data module direct to PBXManager
            formData.module = MODULE;

            app.helper.showProgress();
            this.$el.find('.saveLogBtn').attr('disabled', true);

            app.request.post({ data: formData }).then((err, res) => {
                this.$el.find('.saveLogBtn').attr('disabled', false);
                app.helper.hideProgress();

                if (Utils.isResError(err, res)) {
                    return Utils.errorMessage(err);
                }

                app.helper.showSuccessNotification({ message: app.vtranslate('PBXManager.JS_CALL_POPUP_SAVE_CALL_LOG_SUCCESS') });

                // Mark Save with ticket or not
                if (withTicket) {
                    const params = {
                        data: {
                            contact_id: this.props.customer_id,
                        },
                        preShowCb: popup => {
                            popup.find('#goToFullForm').remove();
                        },
                        postShowCb: popup => {
                            const relateTo = popup.find('[name="related_to_display"]');

                            // Disable input and hide search button
                            // relateTo.val(this.props.customerName).attr('readonly', true).addClass('form-control');
                            relateTo.closest('.fieldValue').find('.clearReferenceSelection').remove();
                            relateTo.closest('.fieldValue').find('.relatedPopup').remove();
                        }
                    };

                    if (this.props.account_id) params.data.parent_id = this.props.account_id;
                    params.data.ticketstatus = 'Open';

                    vtUtils.openQuickCreateModal('HelpDesk', params);
                }

                return this.update({ state: 'COMPLETED' });
            });
        }

        /**
         * Create or clear a timer for call popup
         * @param {Boolean} status Invoke with `true` to toggle on timer
         */
        toggleTimer(status) {
            if (status && !this.$timer) {
                this.$timer = setInterval(() => {
                    const duration = this.props.duration ? this.props.duration + 1 : 1;
                    this.update({duration});
                }, 1000);

                if (!this.props.start_time) this.update({ start_time: Date.parse(new Date()) });
            }
            else {
                this.clearTimers(true);
            }
        }

        /**
         * Clear call Popup timer interval, pass `true` to confirm action
         * @param {*} confirm
         */
        clearTimers(confirm = false) {
            if (!confirm) return;

            this.$timeouts.forEach((timerId) => clearTimeout(timerId));
            clearInterval(this.$timer);
            delete this.$timer;
        }

        /**
         * Event to handle call popup mains tab behavior
         * @param {*} data
         */
        callTabEventHandler(data) {
            // Update call data so that we'll all know which tab is active
            Utils.updateData(data.element, 'call-tab-active', data.active);

            // Handle ajax view loading
            if (data.tab.data('trigger') === 'ajax-view') {
                // Remove all old content
                data.tabPane.find('.call-tab-content').html('');

                // Display loading icon
                Utils.updateData(data.tabPane, 'status', 'LOADING');

                const params = {
                    tab: data.tab.data('tab'),
                    customer_id: this.props.customer_id,
                    customer_type: this.props.customer_type,
                }

                Utils.ajaxView(params).then((err, res) => {
                    if (Utils.isResError(err, res)) {
                        // Display error block
                        Utils.updateData(data.tabPane, 'status', 'ERROR');

                        // Show error message
                        return Utils.errorMessage(err);
                    }

                    // reset status
                    Utils.updateData(data.tabPane, 'status', 'SUCCESS');
                    data.tabPane.find('.call-tab-content').html(res);
                    this.initTabEventHandlers(data);

                    // Update counter
                    const count = data.tabPane.find('input.total-count').val();
                    const countKey = data.tab.data('tab').replace(/-/g, '_') + '_count';
                    this.update({ [countKey]: count });
                });
            }
        }

        initTabEventHandlers(data) {
            data.tabPane.find('.relatedListFull').on('click', event => {
                const targetModule = data.tabPane.data('module');
                const activityType = data.tabPane.data('activity-type');
                const titleMapping = {
                    'call-list': app.vtranslate('PBXManager.JS_CALL_POPUP_CALL'),
                    'salesorder-list': app.vtranslate('PBXManager.JS_CALL_POPUP_SALES_ORDER'),
                    'ticket-list': app.vtranslate('PBXManager.JS_CALL_POPUP_TICKET'),
                    'faq-list': app.vtranslate('PBXManager.JS_CALL_POPUP_FAQS'),
                }

                const params = {
                    data: {
                        module: this.props.customer_type,
                        record: this.props.customer_id,
                        relatedModule: targetModule,
                    },
                    title: titleMapping[data.active],
                }

                // Prepare query search params for module Calendar
                if (targetModule === 'Calendar') {
                    params.data.search_params = [[['activitytype', 'e', activityType]]];
                }

                vtUtils.openRelatedListModal(params);
            });
        }

        openQuickCreatePopup(target) {
            const module = target.data('module');

            const params = {
                parentModule: this.props.customer_type,
                parentId: this.props.customer_id,
                data: {},
                preShowCb: popup => {
                    popup.find('#goToFullForm').remove();
                },
                postShowCb: popup => {
                    const relateTo = popup.find('[name="related_to_display"]');

                    // Disable input and hide search button
                    // relateTo.val(this.props.customerName).attr('readonly', true).addClass('form-control');
                    relateTo.closest('.fieldValue').find('.clearReferenceSelection').remove();
                    relateTo.closest('.fieldValue').find('.relatedPopup').remove();
                }
            };

            if (module === 'Events') {
                params.data.activitytype = target.data('activity');
                params.data.visibility = 'Public';
            }
            if (module === 'Potentials' && this.props.customer_type) {
                params.data.related_to = this.props.account_id;
                params.data.contact_id = this.props.customer_id;
            }
            if (module === 'HelpDesk') params.data.ticketstatus = 'Open';

            app.helper.showProgress();

            vtUtils.openQuickCreateModal(module, params);
        }

        openQuickCreatePotentialForLeadPopup() {
            const params = {
                data: {},
                preShowCb: popup => {
                    popup.find('#goToFullForm').remove();

                    const appendFields = {
                        'mode' : 'savePotentialForLeads',
                        'lead_id': this.props.customer_id,
                    };

                    // Force change form element to handle submission
                    popup.find('[name="module"]:input:hidden').val('PBXManager');
                    popup.find('[name="action"]:input:hidden').val('CallPopupAjax');

                    for (let field in appendFields) {
                        if (!popup.find(`[name="${field}"]`)[0]) {
                            const inputElement = `<input type="hidden" name="${field}" value="${appendFields[field]}" />`;
                            popup.find('form').append(inputElement);
                        }
                        else {
                            popup.find(`[name="${field}"]`).val(appendFields[field]);
                        }
                    }
                },
                postSaveCb: data => {
                    // Update data for account + contact converted to use later
                    if (data.related_to && data.related_to.value) {
                        this.props.account_converted_id = data.related_to.value;
                        this.props.account_converted_name = HTMLParse(data.related_to.displayValue);
                    }
                }
            };

            if (this.props.account_converted_id) {
                params.data.related_to = this.props.account_converted_id;
            }

            app.helper.showProgress();

            vtUtils.openQuickCreateModal('Potentials', params);
        }

        openSyncCustomerInfoPopup() {
            // Prevent duplicate popup
            const idString = this.props.call_id.replace(/\./g, '');
            if ($(`#sync-customer-info-${idString}`)[0]) return;

            // Load modal template
            const modal = $('#syncCustomerInfo').clone().attr('id', `sync-customer-info-${idString}`);

            // Added 2019.05.20 to fix sometime saveButton is disabled
            modal.find('button[type="submit"]').attr('disabled', false);

            // Handle close behavior
            modal.find('.fa.fa-close, .cancelLink').on('click', () => {
                this.closeSyncCustomerInfoPopup();
            });

            // Init DOM Elements
            CallTabs.init(modal);
            Utils.applyFieldElementsView(modal);

            // Init number
            modal.find('[name="mobile"]').val(this.props.customer_number);
            modal.find('[name="customer_number"]').val(this.props.customer_number);
            modal.find('[name="pbx_call_id"]').val(this.props.call_id);

            const open = modal => {
                this.initCreateCustomerFormEvents(modal);
                this.initSearchCustomerFormEvents(modal);
            }

            const params = { cb: open }

            app.helper.showModal(modal, params);
        }

        closeSyncCustomerInfoPopup() {
            const idString = this.props.call_id.replace(/\./g, '');
            if (!$(`#sync-customer-info-${idString}`)[0]) return;
            app.helper.hideModal();

            // Prevent from refresh web
            setTimeout(function() {
                window.onbeforeunload = function() {
                    return false;
                }
            }, 1000);
        }

        initCreateCustomerFormEvents(modal) {
            const form = modal.find('form[name="quick_create"]');

            // Init Events on customer type
            form.find('[name="customer_type"]').on('change', event => {
                const status = $(event.target).val() === 'Contacts' && $(event.target).is(':checked');
                const toggleBaseOnContact = form.find('.toggleBaseOnContact');
                const toggleBaseOnContactInputs = toggleBaseOnContact.find('input, select, textarea');

                toggleBaseOnContact.toggleClass('active', status);
                toggleBaseOnContactInputs.attr('disabled', !status);
            }).trigger('change');

            // Form validation
            const validateParams = {
                submitHandler: form => {
                    const params = $(form).serializeFormData();

                    // Force params module to this module
                    params.module = MODULE;

                    app.helper.showProgress();

                    app.request.post({data: params}).then((err, res) => {
                        app.helper.hideProgress();

                        if (Utils.isResError(err, res)) {
                            return Utils.errorMessage(err);
                        }

                        this.update(res);

                        app.helper.hideModal();
                    });
                }
            }

            form.vtValidate(validateParams);
        }

        initSearchCustomerFormEvents(modal) {
            const form = modal.find('form[name="search_customer"]');

            const datatable = modal.find('.customerSearchResult').DataTable({
                ordering: false,
                searching: false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: 'index.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: function(data) {
                        return $.extend({}, data,
                            form.serializeFormData()
                        );
                    },
                },
                columns: [
                    { data: 'customer_type', name: 'customer_type' },
                    { data: 'customer_name', name: 'customer_name' },
                    { data: 'assigned_user_name', name: 'assigned_user_name' },
                    { data: 'account_name', name: 'account_name' },
                    { data: 'customer_number', name: 'customer_number' },
                    { data: 'action', name: 'action' },
                ],
                language: DataTableUtils.languages,
            });

            // Handle form submit and update datatable
            form.vtValidate({
                submitHandler: form => {
                    let valid = false;
                    const inputs = $(form).find('table.fieldBlockContainer').find(':input');

                    inputs.each((index, target) => {
                        if ($(target).val()) valid = true;
                    });

                    // Validate
                    if (!valid) {
                        const errorMessage = app.vtranslate('PBXManager.JS_CALL_POPUP_SEARCH_CUSTOMER_EMPTY_INPUT_ERROR_MESSAGE');
                        return app.helper.showErrorNotification({ message: errorMessage });
                    }

                    // Reload data table to fetch new data
                    datatable.ajax.reload();

                    // Prevent form submition
                    return false;
                }
            });

            // Handle each time data table update
            datatable.on('draw.dt', (a, b) => {
                // Register select customer event
                modal.find('.syncCustomerInfo').on('click', event => {
                    const target = $(event.target);
                    const customerInfo = target.data('info');
                    const customerType = app.vtranslate(`PBXManager.JS_CALL_POPUP_SINGLE_${customerInfo.customer_type}`);
                    const messageParams = { customer_type: customerType, customer_name: customerInfo.customer_name };
                    const confirmMessage = app.vtranslate('PBXManager.JS_CALL_POPUP_SYNC_CUSTOMER_INFO_CONFIRM', messageParams);

                    bootbox.confirm({
                        message: confirmMessage,
                        callback: (result) => {
                            if (!result) return;

                            // Prevent customer number is empty cause popup fail identifying
                            if (!customerInfo.customer_number) {
                                customerInfo.customer_number = this.props.customer_number;
                            }

                            this.update(customerInfo);

                            app.request.post({
                                data: Object.assign({
                                    module: MODULE,
                                    action: 'CallPopupAjax',
                                    mode: 'sendPopupCustomerInfo',
                                    pbx_call_id: this.props.call_id,
                                }, customerInfo)
                            });

                            app.helper.hideModal();
                        }
                    });
                });
            });
        }

        initFaqTabEventHandlers() {
            const tab = this.$el.find('.call-tab-pane.faq-tab');
            const form = tab.find('form.filter-form');
            const result = tab.find('.faq-result-display');

            // Force search button click event trigger form submit event
            form.find('.searchButton').on('click', () => {
                form.trigger('submit');
            });

            // Declare form submit event and call to ajax view with filter params (keyword for now)
            form.vtValidate({
                submitHandler: () => {
                    // Handle logic start from here
                    const formData = form.serializeFormData();
                    const params = {
                        module: MODULE,
                        view: 'CallPopupAjax',
                        mode: 'searchFaq'
                    }

                    // Prevent submit empty query and cause a confuse face
                    if (!formData.keyword) {
                        result.find('.faq-tab-result-content').html('');
                        return;
                    }

                    Utils.updateData(result, 'status', 'LOADING');

                    app.request.post({ data: Object.assign(params, formData) }).then((err, res) => {
                        // Handle Error
                        if (Utils.isResError(err, res)) {
                            // Update status data attribute
                            Utils.updateData(result, 'status', 'ERROR');

                            // Display error message
                            return Utils.errorMessage(err);
                        }

                        // Append res to DOM and add more event handlers
                        Utils.updateData(result, 'status', 'SUCCESS');
                        result.find('.faq-tab-result-content').html(res);

                        // Init events
                        this.initFaqContentEvents(result.find('.faq-tab-result-content'));

                        // Handle show faq full modal event
                        this.registerOpenFaqFullSearchModal(result.find('.faq-tab-result-content'));
                    });

                    // Prevent form submition
                    return false;
                }
            });
        }

        initFaqContentEvents(container) {
            container.find('.openFaqModel').off('click').on('click', event => {
                const target = $(event.target);
                const params = {
                    module: MODULE,
                    view: 'CallPopupAjax',
                    mode: 'faqPopup',
                    record: target.data('id'),
                    customer_id: this.props.customer_id,
                    customer_type: this.props.customer_type,
                    customer_email: this.props.customer_email,
                }

                app.helper.showProgress();

                app.request.post({ data: params }).then((err, res) => {
                    app.helper.hideProgress();

                    if (Utils.isResError(err, res)) {
                        return Utils.errorMessage();
                    }

                    app.helper.showModal($(res), {
                        preShowCb: modal => {
                            this.registerSendEmailFaqEvent(modal);
                        }
                    });
                });
            });
        }

        registerOpenFaqContentModelEvent(container, handler = '') {
            container.find('.openFaqModel').off('click').on('click', event => {
                const target = $(event.target);
                const params = {
                    module: MODULE,
                    view: 'CallPopupAjax',
                    mode: 'faqPopup',
                    record: target.data('id'),
                    customer_id: this.props.customer_id,
                    customer_type: this.props.customer_type,
                    customer_email: this.props.customer_email,
                }

                const data = target.data();

                app.helper.showProgress();

                app.request.post({ data: Object.assign(params, data) }).then((err, res) => {
                    app.helper.hideProgress();

                    if (Utils.isResError(err, res)) {
                        return Utils.errorMessage();
                    }

                    if (typeof handler === 'function') handler(res);
                });
            });
        }

        registerSendEmailFaqEvent(container) {
            container.find('button[name="send_email"]').on('click', () => {
                container.find('.displayOnEmail').toggle();
            });

            app.helper.showVerticalScroll(container.find('.modal-body'), {setMaxHeight: '400px'});

            container.find('form[name="faq"]').vtValidate({
                submitHandler: form => {
                    const formData = $(form).serializeFormData();
                    const params = {
                        module: MODULE,
                        action: 'CallPopupAjax',
                        mode: 'sendFaqEmail',
                    }

                    app.helper.showProgress();

                    app.request.post({ data: Object.assign(params, formData) }).then((err, res) => {
                        app.helper.hideProgress();

                        if (Utils.isResError(err, res)) {
                            return Utils.errorMessage();
                        }

                        app.helper.showSuccessNotification({ message: app.vtranslate('PBXManager.JS_CALL_POPUP_SEND_FAQ_EMAIL_SUCCESS') });
                        app.helper.hideModal();
                    });

                    // Prevent form default submition
                    return false;
                }
            });
        }

        openInventoryEditView(module) {
            const customerId = this.props.customer_id;
            const customerType = this.props.customer_type;
            let url = `index.php?view=Edit&returnmode=showRelatedList&returnview=Detail&app=SALES`;
            let customParams = `&module=${module}&returnrecord=${customerId}&returnmodule=${customerType}`;

            // Process with account
            if (this.props.account_id) customParams += `&account_id=${this.props.account_id}`;

            // Process with customerType
            if (customerType === 'Contacts') {
                customParams += `&contact_id=${customerId}`;
            }
            else if (!this.props.account_id) {
                customParams += `&account_id=${_PERSONAL_CUSTOMER_ID}`;
            }

            // Open new window with processed url
            window.open(url + customParams, '_blank');
        }

        registerOpenFaqFullSearchModal(container) {
            container.find('.openSearchFaqModel').on('click', () => {
                this.openFaqFullSearchModal();
            });
        }

        openFaqFullSearchModal() {
            const params = {
                module: MODULE,
                view: 'CallPopupAjax',
                mode: 'fullFaqSearchPopup',
            }

            app.request.post({ data: params }).then((err, res) => {
                if (Utils.isResError(err, res)) return Utils.errorMessage();

                app.helper.showModal(res, {
                    preShowCb: modal => {
                        const self = this;

                        // Init keyword value from call popup and trigger form submition
                        if (this.props.faq_keyword) modal.find('input[name="keyword"]').val(this.props.faq_keyword);

                        const datatable = modal.find('#faqListViewTable').DataTable({
                            ordering: false,
                            searching: false,
                            processing: true,
                            serverSide: true,
                            ajax: {
                                url: 'index.php',
                                type: 'POST',
                                dataType: 'JSON',
                                data: function(data) {
                                    return $.extend({}, data,
                                        {
                                            module: MODULE,
                                            action: 'CallPopupAjax',
                                            mode: 'searchFaqByKeyword',
                                            customer_id: self.props.customer_id,
                                            customer_type: self.props.customer_type,
                                        },
                                        modal.find('form[name="faq_search"]').serializeFormData()
                                    );
                                },
                            },
                            columns: [
                                { data: 'number', name: 'number' },
                                { data: 'question', name: 'question' },
                            ],
                            language: DataTableUtils.languages,
                        });

                        // Handle form submit and update datatable
                        modal.find('form[name="faq_search"]').vtValidate({
                            submitHandler: form => {
                                const params = $(form).serializeFormData()

                                // Stop submit form if keyword empty
                                if (!params.keyword) return;

                                // Update data table
                                datatable.ajax.reload();

                                // Prevent form submition
                                return false;
                            }
                        });

                        // Init search button click event
                        modal.find('.searchButton').on('click', () => {
                            modal.find('form[name="faq_search"]').trigger('submit');
                        });

                        // Handle each time data table update
                        datatable.on('draw.dt', () => {
                            this.registerOpenFaqContentModelEvent(modal.find('form[name="faq_search"]'), res => {
                                const content = $(res).find('form[name="faq"]');
                                const faqDetail = modal.find('.modal-content.faq-detail');
                                faqDetail.html(content);
                                this.registerSendEmailFaqEvent(faqDetail);
                                Utils.updateData(modal.find('.call-popup-search-faq-full'), 'mode', 'DETAIL');

                                // Handle back to search mode
                                faqDetail.find('.cancelLink').on('click', () => {
                                    Utils.updateData(modal.find('.call-popup-search-faq-full'), 'mode', 'SEARCH');
                                });
                            });
                        });
                    }
                });
            });
        }

        openFaqFullSearchModal() {
            const params = {
                module: MODULE,
                view: 'CallPopupAjax',
                mode: 'fullFaqSearchPopup',
            }

            app.request.post({ data: params }).then((err, res) => {
                if (Utils.isResError(err, res)) return Utils.errorMessage();

                app.helper.showModal(res, {
                    preShowCb: modal => {
                        const self = this;

                        // Init keyword value from call popup and trigger form submition
                        if (this.props.faq_keyword) modal.find('input[name="keyword"]').val(this.props.faq_keyword);

                        const datatable = modal.find('#faqListViewTable').DataTable({
                            ordering: false,
                            searching: false,
                            scrollY: '240px',
                            processing: true,
                            serverSide: true,
                            ajax: {
                                url: 'index.php',
                                type: 'POST',
                                dataType: 'JSON',
                                data: function(data) {
                                    return $.extend({}, data,
                                        {
                                            module: MODULE,
                                            action: 'CallPopupAjax',
                                            mode: 'searchFaqByKeyword',
                                            customer_id: self.props.customer_id,
                                            customer_type: self.props.customer_type,
                                        },
                                        modal.find('form[name="faq_search"]').serializeFormData()
                                    );
                                },
                            },
                            columns: [
                                { data: 'number', name: 'number' },
                                { data: 'question', name: 'question' },
                            ],
                            language: DataTableUtils.languages,
                        });

                        // Handle form submit and update datatable
                        modal.find('form[name="faq_search"]').vtValidate({
                            submitHandler: form => {
                                const params = $(form).serializeFormData()

                                // Stop submit form if keyword empty
                                if (!params.keyword) return;

                                // Update data table
                                datatable.ajax.reload();

                                // Prevent form submition
                                return false;
                            }
                        });

                        // Init search button click event
                        modal.find('.searchButton').on('click', () => {
                            modal.find('form[name="faq_search"]').trigger('submit');
                        });

                        // Handle each time data table update
                        datatable.on('draw.dt', () => {
                            this.registerOpenFaqContentModelEvent(modal.find('form[name="faq_search"]'), res => {
                                const content = $(res).find('form[name="faq"]');
                                const faqDetail = modal.find('.modal-content.faq-detail');
                                faqDetail.html(content);
                                this.registerSendEmailFaqEvent(faqDetail);
                                Utils.updateData(modal.find('.call-popup-search-faq-full'), 'mode', 'DETAIL');

                                // Handle back to search mode
                                faqDetail.find('.cancelLink').on('click', () => {
                                    Utils.updateData(modal.find('.call-popup-search-faq-full'), 'mode', 'SEARCH');
                                });
                            });
                        });
                    }
                });
            });
        }

        invokeUpdateCounters() {
            const mainForm = this.$el.find('form[name="call_log"]');

            app.helper.showProgress();

            app.request.post({
                data: {
                    module: MODULE,
                    action: 'CallPopupAjax',
                    mode: 'getInitCallPopupData',
                    customer_id: this.props.customer_id,
                    customer_type: this.props.customer_type,
                }
            }).then((err, res) => {
                app.helper.hideProgress();

                // Handle error
                if (Utils.isResError(err, res)) return Utils.errorMessage();

                // Handle response
                this.update({
                    call_list_count: res.counts.call || 0,
                    salesorder_list_count: res.counts.salesorder || 0,
                    ticket_list_count: res.counts.ticket || 0,
                });

                // Update form value
                mainForm.find('[name="salutationtype"]').val(res.customer.salutationtype).trigger('change');
                mainForm.find('[name="firstname"]').val(res.customer.firstname).trigger('change');
                mainForm.find('[name="lastname"]').val(res.customer.lastname).trigger('change');
                if (res.customer.mobile) mainForm.find('[name="mobile_phone"]').val(res.customer.mobile).trigger('change');
                mainForm.find('[name="email"]').val(res.customer.email).trigger('change');
                mainForm.find('[name="account_id"]').val(res.customer.account_id).trigger('change');
                mainForm.find('[name="account_id_display"]').val(res.customer.account_id_display).trigger('change');
                mainForm.find('[name="company"]').val(res.customer.company).trigger('change');

                // Show deselect account button if it has a value
                if (mainForm.find('[name="account_id_display"]').val()) {
                    mainForm.find('.clearReferenceSelection').removeClass('hide');
                }

                // Update product and service select2
                mainForm.find('[name="product_ids"]').select2('data', res.customer.product_ids).trigger('change');
                mainForm.find('[name="service_ids"]').select2('data', res.customer.services_ids).trigger('change');
            });
        }

        initMainFormAjaxSelect2() {
            if (this.$el.find('[name="product_ids"].select2-offscreen')[0]) return;
            AjaxSelect2.init(this.$el.find('[name="product_ids"]'), {
                placeholder: app.vtranslate('PBXManager.JS_CALL_POPUP_SELECT_PRODUCT_PLACEHOLDER'),
                mode: 'loadSelect2AjaxList',
                targetModule: 'Products',
            });
            AjaxSelect2.init(this.$el.find('[name="service_ids"]'), {
                placeholder: app.vtranslate('PBXManager.JS_CALL_POPUP_SELECT_SERVICE_PLACEHOLDER'),
                mode: 'loadSelect2AjaxList',
                targetModule: 'Services',
            });
        }

        /**
         * This method will toggle disabled attribute base on mode
         * to specific element class
         * @param {*} mode
         * @param {*} status
         * @param {*} revert
         */
        toggleFormControl(mode, status = true, revert = true) {
            // Prevent default element hide from undefined customer
            mode = mode || 'Default';

            const keySearch = `.for${mode}`;
            const targets = this.$el.find(keySearch);
            const modes = ['Contacts', 'Leads', 'Default'];

            // Apply all input
            targets.each((index, element) => {
                const target = $(element);

                if (Utils.isFormElement(target)) {
                    target.attr('disabled', !status);
                }
                else {
                    target.find(':input').attr('disabled', !status);
                }
            });

            // Condition to keep going
            if (!revert) return;

            // Revert effect for opposite modes input
            modes.filter((single) => single !== mode && single !== 'Default').forEach((opposite) => {
                this.toggleFormControl(opposite, !status, false);
            });
        }

        retrievePopupInfo() {
            const params = {
                module: 'Vtiger',
                action: 'GetData',
                source_module: 'Calendar',
                record: this.props.call_log_id,
            }

            app.helper.showProgress();

            app.request.post({ data: params }).then((err, res) => {
                app.helper.hideProgress();

                // Handle Error
                if (err || !res || !res.success || !res.data) {
                    const errorMessage = app.vtranslate('PBXManager.JS_CALL_POPUP_RETRIEVE_CALL_POPUP_INFO_ERROR');
                    return app.helper.showErrorNotification({ message: errorMessage });
                }

                const callLogData = res.data;

                this.update({
                    subject: callLogData['label'],
                    description: callLogData['description'],
                });
            });
        }

        registerCallBackLaterTimeFields() {
            const now = new Date();
            const isPM = now.getHours() >= 12;

            const defaultTime = isPM ? '08:00' : '02:00';
            const defaultMoment = isPM ? 'next_morning' : 'this_afternoon';

            const times = [];

            // Generate select time options
            for (let i = 1; i < 13; i++) {
                const value = `${Utils.pad(i, 2)}:00`;
                times.push({
                    id: value,
                    text: value,
                });
            }

            const moments = [
                {
                    id: 'this_afternoon',
                    text: app.vtranslate('PBXManager.JS_CALL_POPUP_THIS_AFTERNOON'),
                },
                {
                    id: 'next_morning',
                    text: app.vtranslate('PBXManager.JS_CALL_POPUP_NEXT_MORNING'),
                },
                {
                    id: 'next_afternoon',
                    text: app.vtranslate('PBXManager.JS_CALL_POPUP_NEXT_AFTERNOON'),
                }
            ];

            if (isPM) {
                moments.filter((moment) => {
                    return moment.id !== 'this_afternoon';
                });
            }

            this.$el.find('[name="select_time"]')
                .select2({ data: times })
                .val(defaultTime)
                .trigger('change');

            this.$el.find('[name="select_moment"]')
                .select2({ data: moments })
                .val(defaultMoment)
                .trigger('change');

            // Set default value for start date and start time field
            this.$el.find('[name="date_start"]').val(MomentHelper.getDisplayDate());
            this.$el.find('[name="time_start"]').val(MomentHelper.getDisplayTime());
        }

        initCallTitleBaseOnCallPurpose() {
            this.handleCallTitleWithEvents = this.handleCallTitleWithEvents.bind(this);
            this.$el.find('[name="events_call_purpose"]').on('change', this.handleCallTitleWithEvents);
            this.$el.find('[name="events_call_purpose_other"]').on('change', this.handleCallTitleWithEvents);
            this.$el.find('[name="events_inbound_call_purpose"]').on('change', this.handleCallTitleWithEvents);
            this.$el.find('[name="events_inbound_call_purpose_other"]').on('change', this.handleCallTitleWithEvents);
        }

        handleCallTitleWithEvents(event) {
            // For the first thing ever, we will ignore when it is a existed call (with call_log_id)
            if (this.props.call_log_id) return;

            const target = $(event.target);

            // For now, prevent logic trigger with empty value
            if (!target.val()) return this.update({ subject: '' });;

            // Base on field value we will have difference logic handle
            // Basically use will choosing options from normal purpose field or the other field
            // So if use choose value 'Other' we will just skip processing
            const otherValues = [
                'call_purpose_other',
                'inbound_call_purpose_other',
            ];

            if (otherValues.includes(target.val())) return this.update({ subject: '' });;

            // A little trick, we added custom attribute  data-other-purpose="true" to fields that use input value
            // directly to set call to popup title
            if (target.data('other-purpose')) {
                this.update({ subject: target.val()});
            }
            else {
                // It comes from select element, so we have to "translate" it to use display value
                const displayValue = this.$el.find(`[value="${target.val()}"]`).html();
                this.update({ subject: displayValue });
            }
        }
    }

    /**
     * Static object contains methods to convert prop to display value
     */
    BasePopup.prototype.propValueConverters = {
        customer_name: function(value) {
            if (!this.props.customer_number) return 'N/A';

            if (value && this.props.customer_id && this.props.customer_type) {
                return `<a target="_blank" href="index.php?module=${this.props.customer_type}&view=Detail&record=${this.props.customer_id}">${value}</a>`;
            }

            return value || app.vtranslate('PBXManager.JS_CALL_POPUP_UNDEFINED');
        },
        account_name: function(value) {
            if (this.props.account_id && this.props.account_id > 0) {
                return `<a target="_blank" href="index.php?module=Accounts&view=Detail&record=${this.props.account_id}">${value}</a>`;
            }

            return value;
        },
        direction: function(value) {
            // Processing popup case
            if (this.props.call_id === 'PROCESSING' && value === 'OUTBOUND') {
                return app.vtranslate('PBXManager.JS_CALL_POPUP_PROCESSING_OUTBOUND_ERROR_MSG');
            }

            const mapping = {
                INBOUND: app.vtranslate('PBXManager.JS_CALL_POPUP_INBOUND'),
                OUTBOUND: app.vtranslate('PBXManager.JS_CALL_POPUP_OUTBOUND'),
            }

            return mapping[value];
        },
        assigned_user_name: function(value) {
            // In case record assign to group
            if (this.props.assigned_user_id && this.props.assigned_user_type === 'Groups') {
                return `<a target="_blank" href="index.php?module=Groups&parent=Settings&view=Detail&record=${this.props.assigned_user_id}">${value}</a>`;
            }

            if (this.props.assigned_user_id) {
                return `<a target="_blank" href="index.php?module=Users&parent=Settings&view=Detail&record=${this.props.assigned_user_id}">${value}</a>`;
            }

            return app.vtranslate('PBXManager.JS_CALL_POPUP_UNDEFINED');
        },
        customer_avatar: function(value) {
            if (!value) {
                return 'resources/images/default-user-avatar.png';
            }

            return value;
        }
    }

    /**
     * Static object contain method to convert prop to specific display value
     */
    BasePopup.prototype.parsers = {
        raw: function(value, rawValue) {
            return rawValue;
        },
        callStateMapping: function(value, rawValue) {
            const mapping = {
                RINGING: app.vtranslate('PBXManager.JS_CALL_POPUP_RINGING'),
                ANSWERED: app.vtranslate('PBXManager.JS_CALL_POPUP_ANSWERED'),
                HANGUP: app.vtranslate('PBXManager.JS_CALL_POPUP_HANGUP'),
            };

            return mapping[rawValue];
        },
        callDurationHours: function(value, rawValue) {
            return Utils.pad(Math.floor(rawValue / 3600), 2);
        },
        callDurationMinutes: function(value, rawValue) {
            return Utils.pad(Math.floor(rawValue / 60) % 60, 2);
        },
        callDurationSeconds: function(value, rawValue) {
            return Utils.pad(rawValue % 60, 2);
        },
        callTitleParser: function(value, rawValue) {
            if (!this.props.subject) {
                const state = this.parsers.callStateMapping.bind(this)(this.props.state, this.props.state);

                if (this.props.customer_id && this.props.customer_name) {
                    const customerName = this.propValueConverters.customer_name.bind(this)(this.props.customer_name);
                    return `[${state}] ${customerName}`;
                }
                else {
                    return `[${state}] ${app.vtranslate('PBXManager.JS_CALL_POPUP_UNDEFINED')}`;
                }
            }

            return value;
        },
        counterParser: function(value, rawValue) {
            if (!rawValue || rawValue == 0) return '';
            return rawValue;
        }
    }

    /**
     * Contain logic method will trigger during prop update. Return `true` to continue render prop cycle
     */
    BasePopup.prototype.propHooks = {
        /**
         * propHooks for call_id
         * @param {*} value
         * @param {*} rawValue
         */
        call_id: function(value, rawValue) {
            // Init call title for the first time
            this.updateUi.bind(this)('subject', this.props.subject);

            // Invoke default value if it not pass to call for the first time
            if (!this.props.assigned_user_name) this.updateUi.bind(this)('assigned_user_name', '');
            if (!this.props.customer_name) this.updateUi.bind(this)('customer_name', '');
            if (!this.props.customer_avatar) this.updateUi.bind(this)('customer_avatar', '');

            // Invoke default logic if some data missing for the first time
            if (!this.props.customer_type) this.$el.find('.showDefault').show();

            return true;
        },

        /**
         * propHooks for state
         * @param {*} value
         * @param {*} rawValue
         */
        state: function(value, rawValue) {
            // End that pain
            if (rawValue === 'COMPLETED') {
                return Handler.notifyCompletedCall(this.props.call_id);
            }

            // Update call popup info first
            if (this.props.call_log_id) {
                this.retrievePopupInfo.bind(this)();
            }

            // Handle Sync Customer Info Popup Behavior base on state
            if (rawValue === 'ANSWERED' && this.props.identified === false && this.preProps.state === 'RINGING') {
                this.openSyncCustomerInfoPopup();
            }
            if (rawValue === 'HANGUP' && this.props.identified === false && this.preProps.state === 'RINGING') {
                this.openSyncCustomerInfoPopup();
            }

            // Invoke update title when state update
            this.updateUi('subject', this.props.subject);

            // Update Call Popup Status data
            Utils.updateData(this.$el, 'state', rawValue);

            // Handle timmer if this call hangup without answered
            if (rawValue === 'HANGUP' && this.preProps.state !== 'ANSWERED' && !this.$timer) {
                this.toggleTimer(true);
            }

            // Toggle timmer
            this.toggleTimer(rawValue === 'ANSWERED');

            // Handle connection status
            this.$el.find('.connection-status > i.fa-circle').toggleClass('active', rawValue === 'ANSWERED');

            // [Start] Update size props base on call status
            let size = this.props.size, preSize = this.preProps.size;

            switch (rawValue) {
                case 'RINGING': {
                    size = 'NORMAL';
                    break;
                }
                case 'ANSWERED': {
                    if (preSize === 'NORMAL' || !preSize) size = 'MEDIUM';
                    break;
                }
                case 'HANGUP': {
                    if (preSize === 'NORMAL' || !preSize) size = 'MEDIUM';
                    break;
                }
            }
            // [End] Update size props base on call status

            // [START] Switch stage between close and open
            let stage;

            switch (rawValue) {
                case 'PROCESSING': {
                    stage = 'CLOSE';
                    break;
                }
                case 'RINGING': {
                    stage = 'CLOSE';
                    break;
                }
                default : {
                    stage = 'OPEN';
                }
            }
            // [END] Switch stage between close and open

            this.update({ size, stage });

            // Handle save call log behavior
            const saveLogBtn = this.$el.find('.saveLogBtn');
            const isSaveLogBtnDisabled = rawValue !== 'HANGUP';
            saveLogBtn.attr('disabled', isSaveLogBtnDisabled);
            saveLogBtn.toggleClass('disabled', isSaveLogBtnDisabled);

            return true;
        },

        /**
         * propHooks for size
         * @param {*} value
         * @param {*} rawValue
         */
        size: function(value, rawValue) {
            // Ignore if user call small size with status ringing
            if (rawValue === 'SMALL' && this.props.state === 'RINGING') return;

            // Save Old size in case popup update to small size to restore later
            if (rawValue === 'SMALL') this.update({ 'restoreSize': this.preProps.size });

            // Handle form responsive
            const mainForm = this.$el.find('form[name="call_log"]');

            if (rawValue === 'MEDIUM') {
                mainForm.find('.inlineOnLarge').removeClass('active');
            }
            else if (rawValue === 'LARGE') {
                mainForm.find('.inlineOnLarge').addClass('active');
            }

            // Update Call Popup size
            Utils.updateData(this.$el, 'size', rawValue);
        },

        /**
         * propHooks for stage
         * @param {*} value
         * @param {*} rawValue
         */
        stage: function(value, rawValue) {
            // Update Call Popup stage
            Utils.updateData(this.$el, 'stage', rawValue);
        },

        /**
         * propHooks for direction
         * @param {*} value
         * @param {*} rawValue
         */
        direction: function(value, rawValue) {
            // Update Call Popup direction data
            Utils.updateData(this.$el, 'direction', rawValue);
            return true;
        },

        /**
         * propHooks for customer_id
         * @param {*} value
         * @param {*} rawValue
         */
        customer_id: function(value, rawValue) {
            this.updateUi.bind(this)('subject', this.props.subject);
            return true;
        },

        /**
         * propHooks for customer_number
         * @param {*} value
         * @param {*} rawValue
         */
        customer_number: function(value, rawValue) {
            this.updateUi.bind(this)('customer_name', this.props.customer_name);
            return true;
        },

        /**
         * propHooks for assigned_user_id
         * @param {*} value
         * @param {*} rawValue
         */
        assigned_user_id: function(value, rawValue) {
            this.updateUi.bind(this)('assigned_user_name', this.props.assigned_user_name);
            return true;
        },

        /**
         * propHooks for account_id
         * @param {*} value
         * @param {*} rawValue
         */
        account_id: function(value, rawValue) {
            this.updateUi.bind(this)('account_name', this.props.account_name);
            return true;
        },

        /**
         * propHooks for customer_name
         * @param {*} value
         * @param {*} rawValue
         */
        customer_name: function(value, rawValue) {
            let identified = false;

            if (!this.props.customer_number) {
                identified = 'undefined';
            }
            else if (this.props.customer_id && this.props.customer_type) {
                identified = true;
            }

            this.update({ identified });

            return true;
        },

        /**
         * propHooks for identified
         * @param {*} value
         * @param {*} rawValue
         */
        identified: function(value, rawValue) {
            if (rawValue === false && this.props.state !== 'RINGING') {
                this.openSyncCustomerInfoPopup();
            }
            else {
                this.closeSyncCustomerInfoPopup();
            }

            // Call request and get count update
            if (rawValue === true) this.invokeUpdateCounters();

            Utils.updateData(this.$el, 'identified', rawValue);
        },

        /**
         * propHooks for events_call_result
         * @param {*} value
         * @param {*} rawValue
         */
        events_call_result: function(value, rawValue) {
            Utils.updateData(this.$el, 'call-result', rawValue)
        },

        /**
         * propHooks for customer_type
         * @param {*} value
         * @param {*} rawValue
         */
        customer_type: function(value, rawValue) {
            // Update call on dom data
            Utils.updateData(this.$el, 'customer-type', rawValue);

            // Toggle input usage with customer type
            this.toggleFormControl(rawValue);

            return true;
        },

        /**
         * propHooks for duration
         * @param {*} value
         * @param {*} rawValue
         */
        duration: function(value, rawValue) {
            if (this.props.start_time) this.update({ end_time: this.props.start_time + rawValue * 1000 });
            return true;
        },
    }

    // [START] YOU CAN CUSTOM YOUR OWN CLASS FROM HERE

    // TO CUSTOM EXISTED METHOD, invoke super function with method params before do anything
    // See constructor or initEvents as an example

    class CallPopupHandler extends BaseCallPopupHandler {
        constructor() {
            super();
        }
    }

    class Popup extends BasePopup {
        constructor(props) {
            super(props);
        }

        initEvents() {
            super.initEvents();
        }
    }

    // [END] YOU CAN CUSTOM YOUR OWN CLASS FROM HERE

    // CREATE CALL POPUP HANDLER INSTANCE
    // KEEP THESE CODE FIXED AT BOTTOM OF CALL POPUP MODULE
    // TO MAKE SURE NOTHING GOING TO HAPPEN WITHOUT HANDLER IS READY
    const Handler = new CallPopupHandler();

    // Public only necessary  methods to environment via CallPopup
    window.CallPopup = {
        newState: function(props) {
            return Handler.newState(props);
        },

        has: function(callId) {
            return Handler.has(callId);
        },
    }
})();
