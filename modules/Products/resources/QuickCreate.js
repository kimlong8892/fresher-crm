jQuery(function ($) {
    $("form#QuickCreate input[name='serial_no']").on("focusout", function (event) {
        var serial_no = $(this).val();
        var params = {
            module: 'Products',
            action: 'CheckSerialAjax',
            serial: serial_no
        };
        // Submit form via ajax
        app.helper.showProgress();
        app.request.post({data: params})
            .then(function (error, data) {
                app.helper.hideProgress();
                if (data.is_exists) {
                    var mgs = app.vtranslate('JS_LBL_ERROR_SERIAL');
                    app.helper.showErrorNotification({'message': mgs});
                }
            });
        event.preventDefault();
    });
    $("form#QuickCreate button[type='submit']").click(function (event) {
        var serial_no = $("form#QuickCreate input[name='serial_no']").val();
        var params = {
            module: 'Products',
            action: 'CheckSerialAjax',
            serial: serial_no
        };
        // Submit form via ajax
        event.preventDefault();
        app.request.post({data: params})
            .then(function (error, data) {
                if (data.is_exists) {
                    var mgs = app.vtranslate('JS_LBL_ERROR_SERIAL');
                    app.helper.showErrorNotification({'message': mgs});
                } else {
                    $("form#QuickCreate").submit();
                }
            });
    });
});