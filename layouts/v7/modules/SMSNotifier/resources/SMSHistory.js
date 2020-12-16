 /*
    Author: Phuc Lu
    Date: 2020.02.18
    Purpose: handle sms notifier list
*/

jQuery(function($) {
    initDataTable();
});

function initDataTable() {
    recordId = app.getRecordId();
    moduleName = app.getModuleName();

    $('#SMSTableDetail').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 5,
        order     : [[ 2, "DESC" ]],
        lengthMenu: [5, 10, 15, 20],
        ajax: {
            url: "index.php?module=SMSNotifier&action=SMSHistoryAjax&recordId=" + recordId + "&moduleName=" + moduleName,
            type: "POST",
            data: function (data) {
                return $.extend({}, data);
            },
            columns: [
                {data: 'message', name: 'message'},
                {data: 'phone_number', name: 'phone_number'},
                {data: 'created_time', name: 'created_time'},
                {data: 'status', name: 'status'},
                {data: 'statusmessage', name: 'statusmessage'}
            ]
        },
        language: {
            emptyTable:     app.vtranslate('JS_DATATABLES_NO_RECORD'),
            info:           app.vtranslate('JS_DATATABLES_FOOTER_INFO'),
            infoEmpty:      app.vtranslate('JS_DATATABLES_FOOTER_INFO_NO_ENTRY'),
            lengthMenu:     app.vtranslate('JS_DATATABLES_LENGTH_MENU'),
            loadingRecords: app.vtranslate('JS_DATATABLES_LOADING_RECORD'),
            processing:     app.vtranslate('JS_DATATABLES_PROCESSING'),
            search:         app.vtranslate('JS_DATATABLES_SEARCH'),
            zeroRecords:    app.vtranslate('JS_DATATABLES_NO_RECORD'),
            paginate: {
                first:      app.vtranslate('JS_DATATABLES_FIRST'),
                last:       app.vtranslate('JS_DATATABLES_LAST'),
                next:       app.vtranslate('JS_DATATABLES_PAGINATE_NEXT_PAGE'),
                previous:   app.vtranslate('JS_DATATABLES_PAGINATE_PREVIOUS_PAGE')
            }
        }
    });
}
