jQuery(function ($) {
    var form = $("#form-filter-date");
    vtUtils.initDatePickerFields(form);

    $("input[data-fieldtype='date']").focusout(function () {
        var dateRegex = /^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/;
        value = $(this).val();
        if (!dateRegex.test(value)) {
            $(this).val("");
        }
    });

    $("form#form-filter-date").submit(function (event){
        start_date = $(this).find("input[name='start_date']").val();
        end_date = $(this).find("input[name='end_date']").val();
        is_go = true;
        if(start_date == "" && end_date == ""){
            var errorMsg = app.vtranslate('JS_FORM_FILTER_DATE_EMPTY');
            app.helper.showErrorNotification({'message': errorMsg});
            is_go = false;
            event.preventDefault();
        }
        if(compareDates(start_date, end_date)){
            var errorMsg = app.vtranslate('JS_FORM_FILTER_DATE_COMPARE_ERROR');
            app.helper.showErrorNotification({'message': errorMsg});
            is_go = false;
            event.preventDefault();
        }
        if(is_go){
            app.helper.showProgress();
        }
    });

    $("button#btn-export-excel").click(function (){
        start_date = $("form#form-filter-date input[name='start_date']").val();
        end_date = $("form#form-filter-date input[name='end_date']").val();
        if(start_date == "" && end_date == ""){
            var errorMsg = app.vtranslate('JS_FORM_FILTER_DATE_EMPTY');
            app.helper.showErrorNotification({'message': errorMsg});
            return false;
        }
        if(compareDates(start_date, end_date)){
            var errorMsg = app.vtranslate('JS_FORM_FILTER_DATE_COMPARE_ERROR');
            app.helper.showErrorNotification({'message': errorMsg});
            return false;
        }
        url_open = "?module=Reports&action=ExportExcelSummaryByCustomer&start_date="+start_date+"&end_date="+end_date;
        window.open(url_open);
    });

    function compareDates(start, end) {
        //Generate an array where the first element is the year, second is month and third is day
        var splitFrom = start.split('/');
        var splitTo = end.split('/');

        //Create a date object from the arrays
        var fromDate = Date.parse(splitFrom[0], splitFrom[1] - 1, splitFrom[2]);
        var toDate = Date.parse(splitTo[0], splitTo[1] - 1, splitTo[2]);

        //Return the result of the comparison
        return fromDate < toDate;
    }
});