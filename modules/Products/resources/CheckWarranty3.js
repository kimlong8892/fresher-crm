CustomView_BaseController_Js('Products_CheckWarranty3_Js', {}, {
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
        });
    }
});