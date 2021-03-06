CustomView_BaseController_Js('Products_CheckWarranty4_Js', {}, {
    registerEvents: function () {
        this._super();
        this.registerEventFormInit();
    },
    registerEventFormInit: function () {
        // Init form
        jQuery(function ($) {
            // Handle click event for button check
            $('#btnCheck').click(function () {
                var serial = $('#checkWarrantyForm input[name="serial"]').val();
                app.helper.showProgress();
                $('#result').hide();

                var params = {
                    module: 'Products',
                    action: 'CheckWarrantyAjax',
                    serial: serial
                };
                // Submit form via ajax
                app.request.post({data: params})
                    .then(function (error, data) {
                        console.log(error);
                        app.helper.hideProgress();
                        // Handle errors
                        if (error) {
                            var errorMsg = app.vtranslate('JS_CHECK_WARRANTY_ERROR_MSG');
                            app.helper.showErrorNotification({message: errorMsg});
                            return;
                        }
                        if (data.matched_product == null) {
                            var errorMsg = app.vtranslate('JS_CHECK_WARRANTY_NO_PRODUCT_MATCH_ERROR_MSG');
                            app.helper.showErrorNotification({message: errorMsg});
                            return;
                        }
                        // Show result
                        var productInfo = data.matched_product;
                        var warrantyStatusClass = (productInfo.warranty_status == 'valid') ? 'label-success' : 'label-danger';
                        $('#productName').text(productInfo.productname);
                        $('#serialNo').text(productInfo.serialno);
                        $('#warrantyStartDate').text(productInfo.start_date);
                        $('#warrantyEndDate').text(productInfo.expiry_date);
                        $('#warrantyStatus').text(productInfo.warranty_status_label);
                        $('#warrantyStatus').removeClass('label-success label-danger').addClass(warrantyStatusClass);
                        $('#result').show();
                    });
                return false; // Prevent submit button to reload the page
            });

            // Handle click event for button declare product
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
                    var productName = form.find('[name="product_name"]');
                    var serialNo = form.find('[name="serial_no"]');
                    var warrantyStartDate = form.find('[name="warranty_start_date"]');
                    var warrantyEndDate = form.find('[name="warranty_end_date"]');
                    // Form validation
                    var params = {
                        submitHandler: function (form) {
                            var form = $(form);
                            var params = form.serializeFormData();
                            params['module'] = 'Products';
                            params['action'] = 'DeclareAjax';
                            // Submit form
                            app.request.post({data: params})
                                .then(function (error, data) {
                                    app.helper.hideProgress();
                                    if (error) {
                                        var errorMsg = app.vtranslate('JS_DECLARE_PRODUCT_ERROR_MSG');
                                        app.helper.showErrorNotification({'message': errorMsg});
                                        return;
                                    }
                                    if (error == null && data.success != '1') {
                                        var errorMsg = app.vtranslate('JS_DECLARE_PRODUCT_ERROR_MSG');
                                        app.helper.showErrorNotification({'message': errorMsg});
                                        return;
                                    }
                                    app.helper.hideModal();
                                    var message = app.vtranslate('JS_DECLARE_PRODUCT_SUCCESS_MSG');
                                    app.helper.showSuccessNotification({'message': message});
                                });
                        }
                    };
                    form.vtValidate(params);
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