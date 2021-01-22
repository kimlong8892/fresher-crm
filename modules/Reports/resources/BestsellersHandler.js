jQuery(function ($) {
    var form = $("#form-filter-date");
    vtUtils.initDatePickerFields(form);

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