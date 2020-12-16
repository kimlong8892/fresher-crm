/*
    EditView.js
    Author: Hieu Nguyen
    Date: 2018-11-29
    Purpose: to handle logic on the UI
*/

jQuery(function($) {
    // Init auto complete address
    GoogleMaps.initAutocomplete($(':input[name="bill_street"]'), {
        city: $(':input[name="bill_city"]'), 
        state: $(':input[name="bill_state"]'), 
        zip: $(':input[name="bill_zip"]'), 
        country: $(':input[name="bill_country"]')
    });

    GoogleMaps.initAutocomplete($(':input[name="ship_street"]'), {
        city: $(':input[name="ship_city"]'), 
        state: $(':input[name="ship_state"]'), 
        zip: $(':input[name="ship_zip"]'), 
        country: $(':input[name="ship_country"]')
    });
});