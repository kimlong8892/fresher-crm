/*
*   CallCenterHandler.js
*   Author: Hieu Nguyen
*   Date: 2018-10-05
*   Purpose: To handle events from Call Center
*/

var CallCenterHandler = {
    socket: null,
    user: null,

    init: function () {
        // Init socket client only if user is logged in
        if (!NotificationHelper.isAtLoginPage()) {
            // Check if socket.io is ready
            if (typeof io !== 'undefined') {
                this.user = NotificationHelper.getUserInfo();

                // User with empty ext number is not valid
                if (this.user.ext_number == null || this.user.ext_number == '') {
                    return false;
                }

                // Init notification when pushServerUrl is available
                if (_CALL_CENTER_BRIDGE_SERVER_URL != '') {
                    this.initSocketClient(_CALL_CENTER_BRIDGE_SERVER_URL);
                }
            }
        }
    },

    // Init the real-time client.
    initSocketClient: function (serverUrl) {
        var ssl = serverUrl.indexOf('wss') >= 0;
        this.socket = io.connect(serverUrl, {path: '/socket.io', transports: ['websocket'], secure: ssl, reconnect: true, rejectUnauthorized: false});

        this.socket.on('connect', (msg) => {
            this.log('Socket is connected.');

            // Send login request
            this.socket.emit('login', {
                user_id: this.user.id,
                user_name: this.user.name,
                user_avatar: this.user.avatar,
                user_ext_number: this.user.ext_number
            });
        });

        this.socket.on('error', (msg) => {
            this.log('Socket is error!');
        });

        this.socket.on('reconnecting', (msg) => {
            this.log('Socket is reconnecting!');
        });

        // When a message is comming
        this.socket.on('message', (msg) => {
            this.log(msg);

            if (msg.state == 'CALL_LOG_SAVED') {
                this.handleCallLogSavedEvent(msg);
                return;
            }

            // Pass the new state to Call Popup
            CallPopup.newState(msg);
        });

        this.socket.on('disconnect', () => {
            this.log('Socket is disconnected.');
        });
    },

    handleCallLogSavedEvent: function (data) {
        // An outbound call log saved
        if (data.direction == 'Outbound') {
            // Refresh the planned calls widget as the corresponding call in this list may already held
            if ($('.planned-calls-widget')[0] != null) {
                $('.planned-calls-widget').closest('.dashboardWidget').find('[name="drefresh"]').trigger('click');
            }

            // Refresh the missed calls widget as the call may linked to one of the customers in this list
            if ($('.missed-calls-widget')[0] != null) {
                $('.missed-calls-widget').closest('.dashboardWidget').find('[name="drefresh"]').trigger('click');
            }

            // Refresh the activities related list if user is forcus on the corresponding customer detailview
            if ((app.getModuleName() == 'Contacts' || app.getModuleName() == 'Leads') && app.getViewName() == 'Detail') {
                if (data.customer_id == app.getRecordId() && $('.tab-item.active').data('module') == 'Calendar') {
                    $('.tab-item.active').trigger('click');
                }
            }
        }
    },

    notifyCompletedCall: function (callId) {
        if (this.socket) {
            // Notify other tabs for the completed call
            this.socket.emit('message', {
                call_id: callId,
                receiver_id: this.user.id,
                state: 'COMPLETED'
            });
        }
    },

    log: function (message) {
        console.log(new Date().toLocaleString(), ': ', message);
    }
}

jQuery(function ($) {
    CallCenterHandler.init();
});