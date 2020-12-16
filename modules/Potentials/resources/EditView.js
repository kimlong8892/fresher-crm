/*
    EditView.js
    Author: Hieu Nguyen
    Date: 2020-04-09
    Purpose: to handle logic on the UI
*/

jQuery(function ($) {
    // Fill Account when a Contact is selected
    $('.fieldValue.contact_id').find('[name="contact_id"]').on('Vtiger.PostReference.Selection Vtiger.PostReference.QuickCreateSave', function (e, res) {
        var contactId = $(this).val();
        if (contactId == '') return;

        // Get data from selected Contact
        var editViewController = Vtiger_Edit_Js.getInstance();
        var params = { 'source_module': 'Contacts', 'record': contactId };
        
        editViewController.getRecordDetails(params).then(function (res) {
            var contactAccountId = res.data.account_id;
            if (contactAccountId == '' || contactAccountId == '0') return;
            var accountInput = $('.fieldValue.related_to').find('[name="related_to"]');

            // In case related Account is not selected yet
            if (accountInput.val() == '' || accountInput.val() == '0') {
                // Get data from Contact's Account
                var params = { 'source_module': 'Accounts', 'record': contactAccountId };

                editViewController.getRecordDetails(params).then(function (res) {
                    var contactAccountName = res.data.accountname;
                    if (contactAccountName == '') return;

                    // Fill Account id and name into the related Account field
                    accountInput.val(contactAccountId);
                    accountInput.closest('td').find('[name="related_to_display"]').val(contactAccountName).attr('readonly', true);
                    accountInput.closest('td').find('.clearReferenceSelection').removeClass('hide');
                });
            }
        });
    });

    // Added by Phuc on 2020.03.18 to init lost reason field
    $('.potentiallostreason.fieldLabel').append(' <span class="redColor">*</span>');

    $('[name="potentialresult"]').change(function () {
        var element = $('.potentiallostreason');

        if ($(this).val() == 'Closed Lost') {
            element.closest('tr').removeClass('hide');
            element.removeClass('hide');
            element.find('select').attr('data-rule-required', true);
        }
        else {
            element.find('select').select2('val', '');
            element.find('select').removeAttr('data-rule-required');
            element.addClass('hide');                

            // Hide tr if this row only have 1 field
            if (element.closest('tr').find('td:visible').html() == '') {
                element.closest('tr').addClass('hide');
            }
        }
    })

    $('[name="potentialresult"]').trigger('change');
    // Ended by Phuc
});