/*
    Missed Calls Widget
    Author: Hieu Nguyen
    Date: 2019-12-24
    Purpose: to handle logic in the UI for missed calls widget on the dashboard
*/

var MissedCallsWidget = {
    init: function () {
        var thisInstance = this;

        // Init DataTable on widget load
        this.initDataTable();

        // Init DataTable on widget refresh
        $('.missed-calls-widget:visible').closest('.dashboardWidget').on(Vtiger_Widget_Js.widgetPostRefereshEvent, function(e) { 
			thisInstance.initDataTable();
		});
    },
    initDataTable: function () {
        $('.tbl-missed-calls:visible').dataTable({
            ordering: false,
            searching: false,
            pageLength: 5,
            lengthChange: false,
            language: {
                emptyTable: app.vtranslate('JS_DATATABLES_NO_DATA_AVAILABLE'),
                info: app.vtranslate('JS_DATATABLES_FOOTER_INFO'),
                infoEmpty: app.vtranslate('JS_DATATABLES_FOOTER_INFO_NO_ENTRY'),
                zeroRecords: app.vtranslate('JS_DATATABLES_NO_RECORD'),
                paginate: {
                    next: app.vtranslate('JS_DATATABLES_PAGINATE_NEXT_PAGE'),
                    previous: app.vtranslate('JS_DATATABLES_PAGINATE_PREVIOUS_PAGE')
                },
            }
        });
    },
    makeCall: function (customerId, phoneNumber) {
        Vtiger_PBXManager_Js.registerPBXOutboundCall(phoneNumber, customerId);
        return false;
    }
};

jQuery(function ($) {
    MissedCallsWidget.init();
});