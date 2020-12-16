/*
*   EditView.js
*   Author: Phuc Lu
*   Date: 2019.08.01
*   Purpose: customize the layout
*/

jQuery(function($) {
    $('[name="invoice_type"]').change(function(e, deleteOldValue = 1) {

        if ($(this).val() == 'buy') {            
            $('.fieldLabel.salesorder_id').html(app.vtranslate('JS_PURCHASE_ORDER', 'Invoice'));
            $('.fieldLabel.account_id').html(app.vtranslate('JS_VENDOR', 'Invoice'));
            
            // Update for Order
            var parentTd =  $('.fieldValue.salesorder_id');

            if (deleteOldValue) parentTd. find('.clearReferenceSelection').trigger('click');

            parentTd. find('[name="popupReferenceModule"]').val('PurchaseOrder');
            parentTd.find('[type="hidden"].sourceField').attr('name', 'related_purchaseorder');
            parentTd.find('[data-fieldtype="reference"]').attr('name', 'related_purchaseorder_display');
            parentTd.find('[data-fieldtype="reference"]').attr('id', 'related_purchaseorder_display');
            parentTd.find('[data-fieldtype="reference"]').attr('data-fieldname', 'related_purchaseorder');    
            
            // Update for vendor/customer
            var parentTd =  $('.fieldValue.account_id');

            if (deleteOldValue) parentTd. find('.clearReferenceSelection').trigger('click');

            parentTd. find('[name="popupReferenceModule"]').val('Vendors');
            parentTd.find('[type="hidden"].sourceField').attr('name', 'related_vendor');
            parentTd.find('[data-fieldtype="reference"]').attr('name', 'related_vendor_display');
            parentTd.find('[data-fieldtype="reference"]').attr('id', 'related_vendor_display');
            parentTd.find('[data-fieldtype="reference"]').attr('data-fieldname', 'related_vendor');   
        }
        else {
            $('.fieldLabel.salesorder_id').html(app.vtranslate('JS_SALE_ORDER', 'Invoice'));
            $('.fieldLabel.account_id').html(app.vtranslate('JS_ACCOUNT', 'Invoice'));

            // Update for Order
            var parentTd =  $('.fieldValue.salesorder_id');

            if (deleteOldValue) parentTd. find('.clearReferenceSelection').trigger('click');

            parentTd. find('[name="popupReferenceModule"]').val('SalesOrder');            
            parentTd.find('[type="hidden"].sourceField').attr('name', 'salesorder_id');
            parentTd.find('[data-fieldtype="reference"]').attr('name', 'salesorder_id_display');
            parentTd.find('[data-fieldtype="reference"]').attr('id', 'salesorder_id_display');
            parentTd.find('[data-fieldtype="reference"]').attr('data-fieldname', 'salesorder_id'); 
            
            // Update for vendor/customer
            var parentTd =  $('.fieldValue.account_id');

            if (deleteOldValue) parentTd. find('.clearReferenceSelection').trigger('click');

            parentTd. find('[name="popupReferenceModule"]').val('Accounts');            
            parentTd.find('[type="hidden"].sourceField').attr('name', 'account_id');
            parentTd.find('[data-fieldtype="reference"]').attr('name', 'account_id_display');
            parentTd.find('[data-fieldtype="reference"]').attr('id', 'account_id_display');
            parentTd.find('[data-fieldtype="reference"]').attr('data-fieldname', 'account_id'); 
        }
    })

    $('[name="invoice_type"]').trigger('change', 0);

    // Hide field purchase order and vendor
    $('.fieldLabel.related_purchaseorder').html('');
    $('.fieldValue.related_purchaseorder').html('');

    if ($('.fieldLabel.related_purchaseorder').parent().find('.fieldLabel:visible').length < 1)
        $('.fieldLabel.related_purchaseorder').parent().remove();

    $('.fieldLabel.related_vendor').html('');
    $('.fieldValue.related_vendor').html('');
    
    if ($('.fieldLabel.related_vendor').parent().find('.fieldLabel:visible').length < 1)
        $('.fieldLabel.related_vendor').parent().remove();
})

