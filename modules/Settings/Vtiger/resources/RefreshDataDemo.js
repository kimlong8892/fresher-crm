CustomView_BaseController_Js('Settings_Vtiger_RefreshDataDemo_Js', {}, {
    registerEvents: function() {
        this._super();
        this.registerEventFormInit();
    },

    registerEventFormInit: function() {
        let form = $('form[name="settings"]');

        // add day for refresh data
        $("#interval-day").on("change", function(){
            let intervalDay = parseInt($("#interval-day").val());
            let minDate = $("#current-min-timestamp").val();
            let maxDate = $("#current-max-timestamp").val();

            minDate = app.helper.getDateInstance(minDate, app.getDateFormat());
            maxDate = app.helper.getDateInstance(maxDate, app.getDateFormat());
            let newMinDate = MomentHelper.getDisplayDate(minDate.setDate(minDate.getDate() + intervalDay));
            let newMaxDate = MomentHelper.getDisplayDate(maxDate.setDate(maxDate.getDate() + intervalDay));

            $("#new-min-timestamp").val(newMinDate);
            $("#new-max-timestamp").val(newMaxDate);
            $("#lbl-new-min-timestamp").html(newMinDate);
            $("#lbl-new-max-timestamp").html(newMaxDate);
        });
        //$("#interval-day").trigger("change");
        

        form.on('submit', e => {
            e.preventDefault();

            if (confirm(app.vtranslate('JS_CONFIRM_REFRESH_DATA'))) {
                let target = $(e.target);

                let formData = target.serializeFormData();

                let params = {
                    module: 'Vtiger',
                    parent: 'Settings',
                    action: 'SubmitRefreshDataDemo',
                    intervalDay: parseInt($("#interval-day").val())
                }

                app.helper.showProgress();
                app.request.post({data: params}).then((err, res) => {
                    app.helper.hideProgress();
                    
                    if (err) {
                        app.helper.showErrorNotification({message: app.vtranslate('JS_REFRESH_DATA_ERROR')});
                        location.reload();
                    }

                    app.helper.showSuccessNotification({message: app.vtranslate('JS_REFRESH_DATA_SUCCESS')});
                    location.reload();
                });
            }
            else {
                return false;
            }
        });
    }
});
