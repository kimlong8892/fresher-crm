/*
    QuickCreate.js
    Author: Hieu Nguyen
    Date: 2019-11-21
    Purpose: to handle logic on the UI
*/

jQuery(function($) {
    var moduleName = 'Events';
    var form = $('form#QuickCreate');

    // Init auto complete address
    setTimeout(() => {
        // [Core] Bug #455: Added by Phu Vo on 2020.03.19 to fix js console issue when location field did't added on form
        if (form.find('input[name="location"]')[0] == undefined) return;
        // End Bug #455

        GoogleMaps.initAutocomplete(form.find('input[name="location"]'));
    }, 1000);

    // Fill customer address
    form.find('.fieldValue.parent_id').find('[name="parent_id"]').on('Vtiger.PostReference.Selection', function (e, res) {
        var selectedType = form.find('.fieldValue.parent_id').find('[name="popupReferenceModule"]').val();
        var selectedId = $(this).val();

        if (selectedId != '' && (selectedType == 'Accounts' || selectedType == 'Contacts' || selectedType == 'Leads')) {
            // Get data from selected customer
            var editViewController = Vtiger_Edit_Js.getInstance();
            var params = {'source_module': selectedType, 'record': selectedId};

            editViewController.getRecordDetails(params).then(function (res) {
                var address = '';

                if (selectedType == 'Accounts') {
                    address = res.data.bill_street;
                }

                if (selectedType == 'Contacts') {
                    address = res.data.mailingstreet;
                }

                if (selectedType == 'Leads') {
                    address = res.data.lane;
                }

                if (address.trim() != '') {
                    app.helper.showConfirmationBox({'message': app.vtranslate('Calendar.JS_FILL_CUSTOMER_ADDRESS_INTO_EVENT_LOCATION_CONFIRM_MSG', moduleName)}).then(function(e) {
                        form.find('[name="location"]').val(address);
                    });
                }
            });
        }
    });

    // Added by Phu Vo on 2019.12.20 Display form
    const callFields = [
        'missed_call',
        'events_call_direction',
        'pbx_call_id',
        'events_call_purpose',
        'events_call_result',
        'events_call_purpose_other',
        'events_inbound_call_purpose',
        'events_inbound_call_purpose_other',
    ];

    const toggleFields = (fields, show = true) => {
        fields.forEach((field) => {
            fieldElements = form.find(`.${field}`);

            fieldElements.toggle(show);
            form.find(`[name="${field}"]:input`).attr('disabled', !show);
        });
    }

    const toggleVisibilityFields = (fields, show = true) => {
        fields.forEach((field) => {
            fieldElements = form.find(`.${field}`);

            fieldElements.css('visibility', show ? 'visible' : 'hidden');
            form.find(`[name="${field}"]:input`).attr('disabled', true);
        });
    }

    const registerShowHideEventCallFields = () => {
        const activityTypeField = form.find('[name="activitytype"]');

        activityTypeField.on('change', (event) => {
            const activityType = $(event.target).val();
            const isCallType = activityType === 'Call' || activityType === 'Mobile Call';
            toggleFields(callFields, isCallType);
        }).trigger('change');
    }

    // Added by Phu Vo on 2020.01.20
    const registerShowHideCallPurposeOther = () => {
        const callPurposeField = form.find('[name="events_call_purpose"]');

        callPurposeField.on('change', (event) => {
            const purpose = $(event.target).val();
            const isOtherPurpose = purpose === 'call_purpose_other';

            toggleFields(['events_call_purpose_other'], isOtherPurpose);
        }).trigger('change');
    }

    // Added by Phu Vo on 2020.01.20
    const registerShowHideCallInboundPurposeOther = () => {
        const callInboundPurposeField = form.find('[name="events_inbound_call_purpose"]');

        callInboundPurposeField.on('change', (event) => {
            const purpose = $(event.target).val();
            const isOtherPurpose = purpose === 'inbound_call_purpose_other';

            toggleFields(['events_inbound_call_purpose_other'], isOtherPurpose);
        }).trigger('change');
    }

    registerShowHideEventCallFields();
    registerShowHideCallPurposeOther();
    registerShowHideCallInboundPurposeOther();
    // End Phu Vo

    // // [Calendar] Request #251: Added by Phu Vo on 2020.03.11 to handle reminder time default value
    function setDefaultReminderTime() {
        form.find('input[name="set_reminder"]').attr('checked', true).trigger('change');
        form.find('#js-reminder-selections').css('visibility', 'visible');
        var activityType = form.find('[name="activitytype"]').val();
        var defaultTime = null;

        if (activityType == 'Call') {
            defaultTime = _CALENDAR_USER_SETTINGS.default_call_reminder_time;
        }
        else if (activityType == 'Meeting') {
            defaultTime = _CALENDAR_USER_SETTINGS.default_meeting_reminder_time;
        }

        if (defaultTime) {
            form.find('[name="remdays"]').val(defaultTime.days).trigger('change');
            form.find('[name="remhrs"]').val(defaultTime.hours).trigger('change');
            form.find('[name="remmin"]').val(defaultTime.mins).trigger('change');
        }
    }

    function registerReminderTimeValidation() {
        form.find('[type="submit"]').on('click', function() {
            var form = $(this).closest('form');

            if (form.find('[name="set_reminder"]:checkbox').is(':checked')) {
                if (form.find('[name="remdays"]').val() == 0 && form.find('[name="remhrs"]').val() == 0 && form.find('[name="remmin"]').val() == 0) {
                    var message = app.vtranslate('Calendar.JS_REMINDER_TIME_TIME_MUST_GREATER_THAN_0_MINUTES_VALIDATE_MSG');
                    app.helper.showErrorNotification({ message: message });
                    form.find('[name="remmin"]').select2('open');
                    return false;
                }
            }
        });
    }

    // Set default event reminder time for new Event and Task
    if (!$('[name="record"]').val()) {
        setDefaultReminderTime();

        $('[name="activitytype"]').on('change', function () {
            setDefaultReminderTime();
        });
    }

    // Validate reminder time
    registerReminderTimeValidation();

    if (form.find('[name="contact_invitees"]')[0] != null) {    // Modified by Hieu Nguyen on 2020-03-26 to update input name
        form.find('.fieldValue.parent_id').find('[name="parent_id"]').on('Vtiger.PostReference.Selection Vtiger.PostReference.QuickCreateSave', function (e, res) {
            var selectedType = form.find('.fieldValue.parent_id').find('[name="popupReferenceModule"]').val();
            var selectedId = $(this).val();

            if (selectedId != '' && selectedType == 'Contacts') {
                app.helper.showConfirmationBox({ message: app.vtranslate('Calendar.JS_FILL_SELECTED_CONTACT_AS_INVITEE_CONFIRM_MSG') }).then(function (e) {
                    var selectedContactName = form.find('.fieldValue.parent_id').find('[name="parent_id_display"]').val();
                    var contactInviteesInput = form.find('[name="contact_invitees"]');  // Modified by Hieu Nguyen on 2020-03-24 to update input name
                    var currentContactInvitees = contactInviteesInput.select2('data');

                    contactInviteesInput.select2('data', currentContactInvitees.concat({id: selectedId, text: selectedContactName}));
                    form.find('[name="contact_invitees"]').val(selectedId).trigger('change');   // Modified by Hieu Nguyen on 2020-03-26 to update input name
                    $(document).scrollTop($(document).height());    // Scroll down to show the changes
                });
            }
        });
    }

    CustomOwnerField.initCustomOwnerFields($('[name="user_invitees"]'));
    // End Request #251
});
