$(function() {
    let queryConvert = function(string) {
        string = string || window.location.href;

        var queryStr = string,
        queryArr = queryStr.replace("?", "").split("&"),
        queryParams = [];

        for (var q = 0, qArrLength = queryArr.length; q < qArrLength; q++) {
            var qArr = queryArr[q].split("=");
            queryParams[qArr[0]] = qArr[1];
        }

        return queryParams;
    }

    let initPhoneCRMExtension = function() {
        let ext = $("[name=phone_crm_extension]");
        let urlParams = queryConvert();

        ext.on('blur', function() {
            let params = {
                module: 'Users',
                action: 'CheckExtNumber',
                user_id: urlParams.record,
                user_ext: ext.val()
            };
            app.request.post({data: params}).then(function(err, res) {
                if(err || !res) {
                    console.error(err);
                    return false;
                }

                if(res && res.success) res = res.result;

                if(res.duplicated) {
                    app.helper.showErrorNotification({ message: app.vtranslate('JS_ERROR_PHONE_CRM_EXTENSION_DUPLICATED')});
                    ext.val('');
                }
            });
        });
    }

    initPhoneCRMExtension();
});