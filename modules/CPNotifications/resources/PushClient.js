/*
    PushClient.js
    Author: Hieu Nguyen
    Date: 2019-03-21
    Purpose: handle push notification at client side
*/

var PushClient = {
    init: function() {
        var self = this;

        const config = {
            messagingSenderId: _FCM_SENDER_ID
        };

        firebase.initializeApp(config);

        const messaging = firebase.messaging();

        navigator.serviceWorker.register('modules/CPNotifications/resources/PushServiceWorker.js')
        .then(function(registration) {
            messaging.useServiceWorker(registration);

            // Request for permission
            messaging.requestPermission()
            .then(function() {
                console.log('Notification permission granted.');

                // Retrieve client token
                messaging.getToken()
                .then(function(currentToken) {
                    if (currentToken) {
                        console.log('Token: ' + currentToken);
                        self.storeToken(currentToken);
                    }
                })
                .catch(function(err) {
                    console.log('An error occurred while retrieving token. ', err);
                });
            })
            .catch(function(err) {
                console.log('Unable to get permission to notify.', err);
            });
        });

        // Handle incoming messages
        messaging.onMessage(function(payload) {
            console.log('Notification received: ', payload);

            // Convert payload into common notification format
            var notification = {
                message: payload.data.raw_message,
                data: payload.data
            };

            notification.data.extra_data = JSON.parse(payload.data.extra_data);

            // Send notification to UI client
            if (notification.data.type == 'popup') {
                Notifications.openPopup(notification);
            }
            else {
                Notifications.insert(notification);
            }
        });

        // Callback fired if Instance ID token is updated.
        messaging.onTokenRefresh(function() {
            messaging.getToken()
            .then(function(refreshedToken) {
                console.log('Token refreshed.');

                self.storeToken(refreshedToken);
            })
            .catch(function(err) {
                console.log('Unable to retrieve refreshed token ', err);
            });
        });
    },
    storeToken: function(currentToken) {
        // Store in cookie
        document.cookie = `push_client_token=${currentToken}`;

        // Send to server
        var params = {
            module: 'CPNotifications',
            action: 'HandleAjax',
            mode: 'saveClientToken',
            token: currentToken,
        };

        app.request.post({'data': params})
        .then((err, res) => {
            if (!err) { 
                console.log('Token sent to server successfully.');
            }
            else {
                console.log('Error sending token to server:', err);
            }
        });
    }
};

$(function() {
    // Init push client
    PushClient.init();
});