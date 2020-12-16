/*
    SocialIntegrationConfig.js
    Author: Hieu Nguyen
    Date: 2019-07-03
    Purpose: handle saving social config
*/

CustomView_BaseController_Js('Settings_Vtiger_SocialIntegrationConfig_Js', {}, {
    registerEvents: function() {
        this._super();
        this.registerEventFormInit();
    },
    registerEventFormInit: function() {
		var form = jQuery('form[name="settings"]');

        form.find('.bootstrap-switch').bootstrapSwitch();

        // Modified by Phu Vo on 2019.07.16 => init select2 using class
        this.getForm().find('select.select2').select2();
        // End Phu Vo

        // Handle click event for add facebook fanpage button
        form.find('#add-fb-fanpage').on('click', function() {
            alert('Under construction!');
        });

		// Handle click event for add zalo oa button
        form.find('#add-zalo-oa').on('click', function() {
            var connectZaloOAModal = $('#connectZaloOAModal').clone(true, true);

            var callBackFunction = function(data) {
                data.find('#connectZaloOAModal').removeClass('hide');
                var form = data.find('.connectZaloOAForm');
                var zaloAppIdInput = form.find('[name="zalo_app_id"]');

                // Init modal form
                var controller = Vtiger_Edit_Js.getInstance();
                controller.registerBasicEvents(form);
                vtUtils.applyFieldElementsView(form);

                // Form validation
                var params = {
                    submitHandler: function(form) {
                        var form = jQuery(form);

                        var siteUrl = window.location.origin + window.location.pathname.replace('index.php', '');
                        var zaloAppId = zaloAppIdInput.val();
                        var zaloConnectUrl = 'https://oauth.zaloapp.com/v3/oa/permission?app_id='+ zaloAppId;
                        zaloConnectUrl += '&redirect_uri='+ siteUrl +'webhook.php?name=ZaloConnector&state=OauthCallback';
                        
                        form.find('.cancelLink').trigger('click');  // Dismiss modal
                        var popup = popupCenter(zaloConnectUrl, 'ConnectZaloOA', 800, 780);    // Open connect url in new popup
                        
                    }
                };

                form.vtValidate(params);
            };

            var modalParams = {
                cb: callBackFunction
            };

            app.helper.showModal(connectZaloOAModal, modalParams);

            return false;
        });

        // Added by Phu Vo on 2019.07.12 to handle form submit
        this.getForm().vtValidate({
            submitHandler: (form) => {
                app.helper.showProgress();

                let data = {
                    module: 'Vtiger',
                    parent: 'Settings',
                    action: 'SaveSocialIntegrationConfig',
                    mode: 'saveSettings'
                };

                data = Object.assign(data, this.getFormSerialize(form));

                // Need to peform form data procession here

                app.request.post({data}).then((err, res) => {
                    app.helper.hideProgress();
                    
                    // handle error
                    if (err) {
                        app.helper.showErrorNotification({message: err.message});
                        return;
                    }
                    
                    // handle saving error
                    if (res !== true && !res.result) {
                        app.helper.showErrorNotification({message: app.vtranslate('JS_SOCIAL_CONFIG_SAVE_SETTINGS_ERROR_MSG')});
                        return;
                    }
                    
                    // Process res here
                    app.helper.showSuccessNotification({message: app.vtranslate('JS_SOCIAL_CONFIG_SAVE_SETTINGS_SUCCESS_MSG')});
                });

                return;
            }
        });
        // End form submit

        // Added by Phu Vo on 2019.07.12 to handle disconnect Zalo OA
        this.getForm().on('click', 'a.disconnect.disconnect-zalo-oa', e => {
            let target = $(e.target);
            let id = this.getRowOaInfo(target, 'id');

            app.helper.showConfirmationBox({
                message: app.vtranslate('JS_SOCIAL_CONFIG_ZALO_DISCONNECT_OA_CONFIRM'),
            }).then(() => {
                app.helper.showProgress();

                return app.request.post({
                    data: {
                        module: 'Vtiger',
                        parent: 'Settings',
                        action: 'SaveSocialIntegrationConfig',
                        mode: 'disconnectZaloOA',
                        id: id,
                    }
                });
            }).then((err, res) => {
                app.helper.hideProgress();

                // handle error
                if (err) {
                    app.helper.showErrorNotification({message: err.message});
                    return;
                }

                // handle saving error
                if (res !== true && !res.result) {
                    bootbox.alert({message: app.vtranslate('JS_SOCIAL_CONFIG_ZALO_DISCONNECT_OA_ERROR_MSG')});
                    return;
                }

                // Process res here
                target.closest('.channel-item').remove();
                
                bootbox.alert({
                    message: app.vtranslate('JS_SOCIAL_CONFIG_ZALO_DISCONNECT_OA_SUCCESS_MSG'),
                    callback: () => {
                        app.event.trigger('post.zaloOa.disconnect', target);
                    }
                });
            });
        });
        // End handle disconnect Zalo OA

        // Added by Phu Vo on 2019.07.16 to handle zalo oa disconnected event
        app.event.on('post.zaloOa.disconnect', (event, data) => {
            let count = $('#zalo-oa-list').find('.channel-item').length;

            if (count == 0) {
                app.helper.showProgress();

                app.request.post({
                    data: {
                        module: 'Vtiger',
                        parent: 'Settings',
                        action: 'SaveSocialIntegrationConfig',
                        mode: 'toggleZaloEnabled',
                        value: null,
                    }
                }).then((err, res) => {
                    app.helper.hideProgress();

                    // handle error
                    if (err) {
                        app.helper.showErrorNotification({message: err.message});
                        return;
                    }
                    
                    // handle saving error
                    if (res !== true && !res.result) {
                        app.helper.showErrorNotification({message: app.vtranslate('JS_SOCIAL_CONFIG_SAVE_SETTINGS_ERROR_MSG')});
                        return;
                    }
                    
                    location.reload();
                });
            }
        });
        // End zalo oa connected event

        this.getForm().on('click', 'a.syncZaloFollowerIds', e => {
            let id = this.getRowOaInfo(e.target, 'id');
            let status = this.getRowOaInfo(e.target, 'token_issue_status');

            // Check if OA is valid to sync or not
            if (status == 'expired' || status == 'not_connected') {
                app.helper.showErrorNotification({message: app.vtranslate('JS_SOCIAL_CONFIG_ZALO_OA_EXPIRED_ERROR_MSG')});
                return;
            }
            
            app.helper.showProgress();

            app.request.post({
                data: {
                    module: 'CPSocialIntegration',
                    action: 'SyncAjax',
                    mode: 'triggerSyncZaloOAFollowersIds',
                    oa_id: id,
                }
            }).then((err, res) => {
                app.helper.hideProgress();

                // handle error
                if (err) {
                    app.helper.showErrorNotification({message: err.message});
                    return;
                }
                
                if (res !== true && !res.result) {
                    app.helper.showErrorNotification({message: app.vtranslate('JS_SOCIAL_SYNC_ZALO_FOLLOWER_IDS_ERROR_MSG')});
                    return;
                }

                // Process res here
                app.helper.showSuccessNotification({message: app.vtranslate('JS_SOCIAL_SYNC_ZALO_FOLLOWER_IDS_SUCCESS_MSG')});
            });
        });

        $('.add-keyword').on('click', function() {
            bootbox.alert('Under construction!');
        });
    },

    /**
     * Method to get main form
     * @author Phu Vo (2019.07.12)
     */
    getForm: function() {
        if (!this.form) this.form = $('form[name="settings"]');
        return this.form;
    },

    /**
     * Method to get Zalo OA row info
     * @param {*} dom 
     * @param {String} infoName
     * @author Phu Vo (2019.07.12) 
     */
    getRowOaInfo: function(dom, infoName = '') {
        if (!(dom instanceof jQuery)) dom = $(dom);
        if(!dom.is('.row.info')) dom = dom.closest('.row.info');
        if(!dom.is('.row.info')) dom = dom.find('.row.info');

        let data = dom.data('oa-info');

        if (infoName && data) return data[infoName];
        return data;
    },

    /**
     * Method to process form data for submission
     * @param {*} form 
     * @author Phu Vo (2019.07.12) 
     */
    getFormSerialize: function(form) {
        if (!(form instanceof jQuery)) form = $(form);
        let data = form.serializeFormData();

        for (let name in data) {
            let selector = `[name="${name}"]`;

            // Process checkbox case to save 1 value for on
            if (
                this.getForm().find(selector).attr('type') == 'checkbox'
                && data[name] == 'on'
            ) {
                data[name] = '1';
            }

            // Walk around in case select multiple save with only one value

            if (this.getForm().find(selector).is('select')) {
                data[name] = this.getForm().find(selector).val();
            }
        }

        return data;
    },
});

function handleConnectZaloOAResult(popup, success) {
    popup.close();

    setTimeout(() => {
        if(success) {
            bootbox.alert({
                message: app.vtranslate('JS_SOCIAL_CONFIG_CONNECT_ZALO_OA_SUCCESS_MSG'),
                callback: () => {
                    let count = $('#zalo-oa-list').find('.channel-item').length;

                    if (count == 0) {
                        app.helper.showProgress();

                        app.request.post({
                            data: {
                                module: 'Vtiger',
                                parent: 'Settings',
                                action: 'SaveSocialIntegrationConfig',
                                mode: 'toggleZaloEnabled',
                                value: 1,
                            }
                        }).then((err, res) => {
                            app.helper.hideProgress();

                            // handle error
                            if (err) {
                                app.helper.showErrorNotification({message: err.message});
                                return;
                            }

                            // handle saving error
                            if (res !== true && !res.result) {
                                app.helper.showErrorNotification({message: app.vtranslate('JS_SOCIAL_CONFIG_SAVE_SETTINGS_ERROR_MSG')});
                                return;
                            }
                            
                            location.reload();
                        });
                    }
                    else {
                        location.reload();
                    }
                }
            });
        }
        else {
            bootbox.alert(app.vtranslate('JS_SOCIAL_CONFIG_CONNECT_ZALO_OA_ERROR_MSG'));
        }
    }, 100);
}

// Copied from https://stackoverflow.com/questions/4068373/center-a-popup-window-on-screen and modified by Hieu Nguyen on 2019-07-10
function popupCenter(url, title, width, height) {
    // Fixes dual-screen position                         Most browsers      Firefox
    var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

    var screenWidth = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var screenHeight = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var systemZoom = screenWidth / window.screen.availWidth;
    var left = (screenWidth - width) / 2 / systemZoom + dualScreenLeft;
    var top = (screenHeight - height) / 2 / systemZoom + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + width / systemZoom + ', height=' + height / systemZoom + ', top=' + top + ', left=' + left);

    // Puts focus on the newWindow
    if (window.focus) newWindow.focus();

    return newWindow;
}