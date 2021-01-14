CustomView_BaseController_Js('Products_TestUiComponent_Js', {}, {
    registerEvents: function () {
        this._super();
        this.registerEventFormInit();
    },
    registerEventFormInit: function () {
        // Init form
        jQuery(function ($) {
            console.log(app);
            $('#btnDeclare').click(function () {
                var declareProductModal = $('#declareProductModal').clone(true, true);
                var callBackFunction = function (data) {
                    data.find('#declareProductModal').removeClass('hide');
                    var form = data.find('.declareProductForm');
                    // init modal
                    vtUtils.initDatePickerFields(form);
                    var controller = Vtiger_Edit_Js.getInstance();
                    controller.registerBasicEvents(form);
                    vtUtils.applyFieldElementsView(form);
                    form.find('[name="leadsource"]').select2();
                    form.find('.bootstrap-switch').bootstrapSwitch();
                    form.find('[name="enable_notification"]').bootstrapSwitch();
                };
                var modalParams = {
                    cb: callBackFunction
                };
                app.helper.showModal(declareProductModal, modalParams);
                return false;
            });
        });
    }
});