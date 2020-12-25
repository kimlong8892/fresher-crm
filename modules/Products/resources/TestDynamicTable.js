CustomView_BaseController_Js('Products_TestDynamicTable_Js', {}, {
    registerEvents: function () {
        this._super();
        this.registerEventFormInit();
    },
    registerEventFormInit: function () {
        // Init form
        jQuery(function ($) {
            $('#tblDemo').dynamicTable({
                delAction: 'hide',
                preAddCallback: function () {
                    console.log('Adding new row!');

                    if ($('#tblDemo').find('tbody').find('tr:visible').length == 10) {
                        alert('Max is 10 row!');
                        return false;
                    }
                },
                postAddCallback: function (insertedRow) {
                    // Handle logic after adding
                    console.log('Inserted row:', insertedRow);
                },
                preDelCallback: function (selectedRow) {
                    // Handle logic before deleting
                    console.log('Selected row:', selectedRow);

                    if ($('#tblDemo').find('tbody').find('tr:visible').length == 5) {
                        alert('At least 5 rows are required!');
                        return false;
                    }
                },
                postDelCallback: function () {
                    // Handle logic after deleting
                    console.log('Row deleted');
                },
            });
        });
    }
});