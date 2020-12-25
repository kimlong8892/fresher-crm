jQuery(function ($) {
    // Handle click event for button check
    $('#btnCheck').click(function () {

        var serial = $('#checkWarrantyForm input[name="serial"]').val();

        $('#result').hide();

        // Submit form via ajax
        var url_action = window.location.origin + '/crm-fresher/entrypoint.php?name=CheckWarranty';
        $.ajax({
            url: url_action,
            data: {
                serial: serial
            },
            success: function (data){
                console.log(data);
                data = data.result;
                if (data.matched_product == null) {
                    var errorMsg = data.mgs_error;
                    alert(errorMsg);
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
            },

        });
        return false; // Prevent submit button to reload the page
    });
});