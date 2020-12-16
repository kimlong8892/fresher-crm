/*
    GoogleMaps
    Author: Hieu Nguyen
    Date: 2018-08-30
    Purpose: provide util functions to play with Google Maps
*/

GoogleMaps = {
    baseUrl: 'https://www.google.com/maps',

    showExternalMaps(address) {
        address = address.replace(/,/g, ' ');
        address = address.replace(/ /g, '+');
        
        var externalUrl = this.baseUrl + '?q=' + address + '&zoom=14&size=512x512&maptype=roadmap&sensor=false';
        window.open(externalUrl);
    },

    showMaps: function(address) {
        var modalTemplate = $('div.modal-dialog.modal-template-lg').clone(true, true);

        var modalTitle = app.vtranslate('JS_GOOGLE_MAPS');
        var modalContent = `<div id="customMapCanvas">
                <span id="address">${address}</a>
                <i id="customMapLink" class="fa fa-external-link cursorPointer"></i>
                <br/><br/>
                <iframe src="${this.baseUrl}/embed/v1/place?key=${googleApiKey}&q=${address}" allowfullscreen style="width: 100%; height: 400px; border: none"/>
            </div>`;

        modalTemplate.find('.modal-header').find('.pull-left').text(modalTitle);
        modalTemplate.find('.modal-body').html(modalContent);
        modalTemplate.find('.modal-footer').remove();

        app.helper.showModal(modalTemplate);
    },

    // Util function to init an address field
    initAutocomplete: function(addressField, componentFields) {
        // Convert textarea into input field
        if(addressField.is('textarea')) {
            var parentDOM = addressField.parent();
            var inputName = addressField.prop('name');
            var validationRule = addressField.data('validationEngine');
            var fieldInfo = addressField.data('fieldinfo');
            /*Added By Kelvin Thang -- on 2018-12-07 -- fix load data old when editView for google API */
            var value = addressField.val();
            var newInputDOM = '<input type="text" name="'+ inputName +'" class="inputElement" value="'+ value +'" data-validation-engine="'+ validationRule +'" data-field-info="'+ JSON.stringify(fieldInfo) +'"/>';
            addressField.replaceWith(newInputDOM);
            addressField = parentDOM.find('input[name="'+ inputName +'"]');
        }

        // Set wider space for address
        addressField.css('width', '100%');

        // Init auto complete
        var autocomplete = new google.maps.places.Autocomplete(addressField[0]);

        google.maps.event.addListener(autocomplete, 'place_changed', () => {
            var place = autocomplete.getPlace();
            
            // Fill data into the core fields first
            addressField.val(place.formatted_address);
            
            // Then fill component fields if any
            if(componentFields) {
                this.fillComponentFields(place, addressField, componentFields);
            }
        });
    },

    // Util function to fill the selected location into address fields in a group
    fillComponentFields: function(place, addressField, componentFields) {
        // Map of component name and field name
        var componentMapping = {
            administrative_area_level_1: componentFields.city,
            administrative_area_level_2: componentFields.state,
            postal_code: componentFields.zip,
            country: componentFields.country
        };

        // Clear component fields first
        Object.keys(componentFields).forEach(function(key) {
            componentFields[key].val('');
        });

        // Then fill data into component fields
        for(var i = 0; i < place.address_components.length; i++) {
            var component = place.address_components[i].types[0];

            if(componentMapping[component]) {
                var value = place.address_components[i]['long_name'];
                var field = componentMapping[component];

                if(field) field.val(value);
            }
        }
    }
};

jQuery(function ($) {
    // Open map in external tab
    $('body').on('click', '#customMapCanvas #customMapLink', function () {
        var address = $('#customMapCanvas').find('#address').text().trim();
        GoogleMaps.showExternalMaps(address);
    });
});
