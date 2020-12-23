/*
	UIUtils
	Author: Hieu Nguyen
	Date: 2020-07-22
	Purpose: to provide util functions for the UI
*/

var UIUtils = {
    // Insert value at selected cursor of an input
    insertAtCursor: function(value, input) {
        var cursorPos = input.prop('selectionStart');
        var text = input.val();
        var head = text.substring(0, cursorPos);
        var tail = text.substring(cursorPos, text.length);

        input.val(head + value + tail);
    }
}