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
                    alert(app.vtranslate("JS_LBL_ERROR_SERIAL"));
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
                    alert(app.vtranslate("JS_LBL_ERROR_SERIAL"));
                } else {
                    $("form#QuickCreate").submit();
                }
            });
    });
});