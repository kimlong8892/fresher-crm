jQuery(function ($) {
    $("form#EditView input[name='serial_no']").on("focusout", function (event) {
        var serial_no = $(this).val();
        var record_id = $("form#EditView input[name='record']").val();
        var params = {
            module: 'Products',
            action: 'CheckSerialAjax',
            serial: serial_no,
            record_id: record_id
        };
        // Submit form via ajax
        app.helper.showProgress();
        app.request.post({data: params})
            .then(function (error, data) {
                app.helper.hideProgress();
                if (data.is_exists) {
                    alert(app.vtranslate("LBL_ERROR_SERIAL"));
                }
            });
    });
    $("form#EditView .saveButton").click(function (event) {
        var serial_no = $("form#EditView input[name='serial_no']").val();
        var record_id = $("form#EditView input[name='record']").val();
        var params = {
            module: 'Products',
            action: 'CheckSerialAjax',
            serial: serial_no,
            record_id: record_id
        };
        event.preventDefault();
        // Submit form via ajax
        app.request.post({data: params})
            .then(function (error, data) {
                if (data.is_exists) {
                    alert(app.vtranslate("LBL_ERROR_SERIAL"));
                } else {
                    $("form#EditView").submit();
                }
            });
    });
});