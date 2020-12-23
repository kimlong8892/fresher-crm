jQuery(function ($) {
    $("form#QuickCreate button[type='submit']").on("click", function (event) {
        var accountTypeValue = $("#QuickCreate select[name='accounttype']").val().trim();
        var employees = $("#QuickCreate input[name='employees']");
        var annuaRevenue = $("#QuickCreate input[name='annual_revenue']");

        if (accountTypeValue == 'Competitor') {
            let employeesValue = employees.val().trim();
            let annuaRevenueValue = annuaRevenue.val().trim();
            if (employeesValue == '' || employeesValue == '0' || annuaRevenueValue == '') {
                if (!confirm(app.vtranslate('JS_CONFIRM_SAVING_COMPETIOR_WITHOUT_ITS_REQUIRED_FIELDS'))) {
                    event.preventDefault();
                    if (annuaRevenueValue == '') {
                        annuaRevenue.focus();
                    } else {
                        employees.focus();
                    }
                }
            }
        }
    });
});