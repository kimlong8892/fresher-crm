/*
    DetailView.js
    Author: Phuc Lu
    Date: 2019.11.25
    Purpose: to handle logic on the UI
*/

jQuery(function($) {
    
    // Added by Phuc on 2019.11.25 to remove action quick edit when status is Converted
    if ($('[data-name="leadstatus"]').data('value') == 'Converted') {
        $('.fieldValue.leadstatus').find('.action.pull-right').remove();
    }
    // Ended by Phuc
})