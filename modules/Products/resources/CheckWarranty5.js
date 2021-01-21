CustomView_BaseController_Js('Products_CheckWarranty5_Js', {}, {
    registerEvents: function () {
        this._super();
        this.registerEventFormInit();
    },
    registerEventFormInit: function () {
        // Init form
        jQuery(function ($) {
            $("input[data-fieldtype='date']").focusout(function () {
                var dateRegex = /^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/;
                value = $(this).val();
                if (!dateRegex.test(value)) {
                    $(this).val("");
                }
            });
            // Handle click event for button check
            $('#btnCheck').click(function () {
                var serial = $('#checkWarrantyForm input[name="serial"]').val();
                if (serial.trim().length == 0) {
                    return false;
                }
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
                        if (productInfo.warranty_status === 'valid') {
                            $("#btn-warranty-extend").css({display: 'none'});
                        } else {
                            $("#btn-warranty-extend").css({display: 'inline'});
                        }

                        $('#productName').text(productInfo.productname);
                        $('#serialNo').text(productInfo.serialno);
                        $('#product_id').val(productInfo.productid);
                        $('#warrantyStartDate').text(productInfo.start_date);
                        $('#warrantyEndDate').text(productInfo.expiry_date);
                        $('#warrantyStatus').text(productInfo.warranty_status_label);
                        $('#warrantyStatus').removeClass('label-success label-danger').addClass(warrantyStatusClass);
                        // show for modal update
                        $("#updateProductModal input[name='product_id']").val(productInfo.productid);
                        $("#updateProductModal input[name='product_name']").val(productInfo.productname);
                        $("#updateProductModal input[name='serial_no']").val(productInfo.serialno);
                        $("#updateProductModal input[name='warranty_start_date']").val(productInfo.start_date);
                        $("#updateProductModal input[name='warranty_end_date']").val(productInfo.expiry_date);
                        $('#result').show();
                    });
                return false; // Prevent submit button to reload the page
            });

            // Handle click event for button declare product
            $('#btnDeclare').click(function () {
                var declareProductModal = $('#declareProductModal').clone(true, true);
                var callBackFunction = function (data) {
                    data.find('#declareProductModal').removeClass('hide');
                    $("#declareProductModal button[type='submit']").prop("disabled", false);
                    var form = data.find('.declareProductForm');
                    // init modal
                    vtUtils.initDatePickerFields(form);
                    var controller = Vtiger_Edit_Js.getInstance();
                    controller.registerBasicEvents(form);
                    vtUtils.applyFieldElementsView(form);
                    // Form validation
                    var params = {
                        submitHandler: function (form) {
                            var form = $(form);
                            var params = form.serializeFormData();
                            $("#declareProductModal button[type='submit']").prop("disabled", true);
                            params['module'] = 'Products';
                            params['action'] = 'DeclareAjax';
                            // Submit form
                            app.request.post({data: params})
                                .then(function (error, data) {
                                    app.helper.hideProgress();
                                    if (error) {
                                        var errorMsg = app.vtranslate('JS_DECLARE_PRODUCT_ERROR_MSG');
                                        app.helper.showErrorNotification({'message': errorMsg});
                                        setTimeout(function (){
                                            $("#declareProductModal button[type='submit']").prop("disabled", false);
                                        }, 1000);
                                        return;
                                    }
                                    if(error == null && data.exists_serial){
                                        var errorMsg = app.vtranslate('JS_LBL_ERROR_SERIAL');
                                        app.helper.showErrorNotification({'message': errorMsg});
                                        setTimeout(function (){
                                            $("#declareProductModal button[type='submit']").prop("disabled", false);
                                        }, 1000);
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

            // Handel click event for update
            $("#btnUpdateModal, #btn-warranty-extend").click(function () {
                var updateProductModal = $('#updateProductModal').clone(true, true);
                var callBackFunction = function (data) {
                    data.find('#updateProductModal').removeClass('hide');
                    $("#updateProductModal button[type='submit']").prop("disabled", false);
                    var form = data.find('.updateProductForm');
                    // init modal
                    vtUtils.initDatePickerFields(form);
                    var controller = Vtiger_Edit_Js.getInstance();
                    controller.registerBasicEvents(form);
                    vtUtils.applyFieldElementsView(form);
                    // Form validation
                    var params = {
                        submitHandler: function (form) {
                            var form = $(form);
                            var params = form.serializeFormData();
                            params['module'] = 'Products';
                            params['action'] = 'UpdateAjax';
                            // Submit form
                            $("#updateProductModal button[type='submit']").prop("disabled", true);
                            app.request.post({data: params})
                                .then(function (error, data) {
                                    app.helper.hideProgress();
                                    if (error) {
                                        var errorMsg = app.vtranslate('JS_DECLARE_PRODUCT_ERROR_MSG');
                                        app.helper.showErrorNotification({'message': errorMsg});
                                        $("#updateProductModal button[type='submit']").prop("disabled", false);
                                        return;
                                    }
                                    if (error == null && data.exists_serial) {
                                        var errorMsg = app.vtranslate('JS_LBL_ERROR_SERIAL');
                                        app.helper.showErrorNotification({'message': errorMsg});
                                        $("#updateProductModal button[type='submit']").prop("disabled", false);
                                        return;
                                    }
                                    app.helper.hideModal();
                                    var message = app.vtranslate('JS_UPDATE_PRODUCT_SUCCESS_MSG');
                                    app.helper.showSuccessNotification({'message': message});
                                    $("#checkWarrantyForm input[name='serial']").val(data.serial_no).ready(function () {
                                        $("#btnCheck").click();
                                    });
                                });

                        }
                    };
                    form.vtValidate(params);
                };
                var modalParams = {
                    cb: callBackFunction
                };
                app.helper.showModal(updateProductModal, modalParams);
                return false;
            });

        });
    }
});