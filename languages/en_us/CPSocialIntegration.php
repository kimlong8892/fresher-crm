<?php

$languageStrings = array(
    'LBL_SOCIAL_MESSAGE_MODAL_HINT' => 'Select a predefined message from Message Template, or write a new message content below',
    'LBL_SOCIAL_MESSAGE_MODAL_SENDER' => 'Send From',
    'LBL_SOCIAL_MESSAGE_MODAL_MESSAGE_TEMPLATE' => 'Message Template',
    'LBL_SOCIAL_MESSAGE_MODAL_CREATE_TEMPLATE' => 'Create',
    'LBL_SOCIAL_MESSAGE_MODAL_VARIABLE' => 'Merge Variable',
    'LBL_SOCIAL_MESSAGE_MODAL_INSERT_VARIABLE' => 'Insert',
    'LBL_SOCIAL_MESSAGE_MODAL_MESSAGE_CONTENT' => 'Message Content',

    // Added by Hieu Nguyen on 2020-01-15
    'LBL_SOCIAL_CONFIG_ADD_FB_FANPAGE_MODAL_TITLE' => 'Add Facebook Fanpage',
    'LBL_SOCIAL_CONFIG_ADD_FB_FANPAGE_MODAL_HINT' => 'Enter Facebook App ID and Facebook App Secret in the Facebook App that you are an administrator',
    'LBL_SOCIAL_CONFIG_FACEBOOK_APP_ID' => 'Facebook App ID',
    'LBL_SOCIAL_CONFIG_FACEBOOK_APP_SECRET' => 'Facebook App Secret',
    'LBL_SOCIAL_CONFIG_CLICK_HERE_TO_CONTINUE' => 'Click here to continue',
    'LBL_SOCIAL_CONFIG_FB_FANPAGE_SELECTOR_HINT' => 'Please select Facebook fanpage to connect with CRM',
    'LBL_SOCIAL_CONFIG_FB_FANPAGE_SELECTOR_CONNECT_BUTTON' => 'Connect',
    'LBL_SOCIAL_CONFIG_FB_FANPAGE_SELECTOR_NO_FANPAGE_SELECTED_ERROR_MSG' => 'You must select at least 1 fanpage to connect!'
    // End Hieu Nguyen
);

$jsLanguageStrings = array(
    // Added by Hieu Nguyen on 2020-01-15
    'JS_SOCIAL_CONFIG_SAVE_SETTINGS_SUCCESS_MSG' => 'Saved settings successfully.',
	'JS_SOCIAL_CONFIG_SAVE_SETTINGS_ERROR_MSG' => 'Error saving settings, please try again!',
    'JS_SOCIAL_CONFIG_CONNECT_FB_FANPAGE_SUCCESS_MSG' => 'Connected to Facebook fanpage successfully.',
    'JS_SOCIAL_CONFIG_CONNECT_FB_FANPAGE_ERROR_MSG' => 'Error connecting to Facebook fanpage, please try again!',
    'JS_SOCIAL_CONFIG_CONNECT_ZALO_OA_SUCCESS_MSG' => 'Connected to Zalo OA successfully.',
	'JS_SOCIAL_CONFIG_CONNECT_ZALO_OA_ERROR_MSG' => 'Error connecting to Zalo OA, please try again!',
	'JS_SOCIAL_CONFIG_SAVE_SETTINGS_SUCCESS_MSG' => 'Saved settings successfully.',
	'JS_SOCIAL_CONFIG_ZALO_DISCONNECT_OA_CONFIRM' => 'Do you want to disconnect this OA?',
	'JS_SOCIAL_CONFIG_ZALO_DISCONNECT_OA_SUCCESS_MSG' => 'Disconnected Zalo OA successfully.',
	'JS_SOCIAL_CONFIG_ZALO_DISCONNECT_OA_ERROR_MSG' => 'Error disconnecting Zalo OA, please try again!',
	'JS_SOCIAL_SYNC_ZALO_FOLLOWER_IDS_SUCCESS_MSG' => 'This action has been queued to be done automatically in the background.',
	'JS_SOCIAL_SYNC_ZALO_FOLLOWER_IDS_ERROR_MSG' => 'Error synchronizing follower ids, please try again!',
	'JS_SOCIAL_CONFIG_ZALO_OA_EXPIRED_ERROR_MSG' => 'Could not perform action. This OA has Expired!',
    'JS_SOCIAL_INTEGRATION_UNKOWN_ERROR_MSG' => 'An error has occured, please try again!',
    'JS_SOCIAL_INTEGRATION_NO_FACEBOOK_PAGE_CONNECTED_ERROR_MSG' => 'No connected Facebook Page. Please contact the administrator!',
    'JS_SOCIAL_INTEGRATION_NO_ZALO_OA_CONNECTED_ERROR_MSG' => 'No connected Zalo Official Account. Please contact the administrator!',
    'JS_SOCIAL_INTEGRATION_NO_ZALO_SHOP_OA_CONNECTED_ERROR_MSG' => 'No connected Zalo Shop Official Account. Please contact the administrator!',
    'JS_SOCIAL_MESSAGE_EMPTY_TARGER_LIST_ERROR_MSG' => 'Marketing List should contain more than 1 customers to send social message!',
    'JS_SOCIAL_MESSAGE_MODAL_TITLE' => '%s Message',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MESSAGE_CONFIRM_MSG' => 'Are you sure to send this message?',
    'JS_SOCIAL_MESSAGE_MODAL_LOAD_METADATA_ERROR_MSG' => 'Error loading metadata, please try again!',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MESSAGE_FOLLOWER_ID_NOT_SYNCED_WITH_ZALO_OA_ERROR_MSG' => 'Can not send message as this customer\'s Social ID is not synced or not followed the selected Zalo Official Account yet!',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MESSAGE_SOCIAL_ID_NOT_FOLLOWED_TO_ZALO_OA_ERROR_MSG' => 'Can not send message as this customer is not followed the selected Zalo Official Account yet!',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MESSAGE_ERROR_AND_QUEUED_MSG' => 'Error sending %s message right now. The message has been queued to be sent automatically in the background',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MESSAGE_UNKNOWN_ERROR_MSG' => 'Error sending %s message right now. Please check the message log or try again later!',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MESSAGE_SUCCESS_MSG' => '%s message sent successfully!',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MESSAGE_QUEUED_MSG' => '%s message has been queued to be sent automatically in the background.',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MASS_MESSAGE_ERROR_AND_QUEUED_MSG' => 'Some %s messages can not be sent right now. These messages has been queued to be sent automatically in the background.',
    'JS_SOCIAL_MESSAGE_MODAL_SEND_MASS_MESSAGE_UNKNOWN_ERROR_MSG' => 'Some %s messages can not be sent right now. Please check for message log or try again later!',
    'JS_SYNC_ZALO_ARTICLES_HINT' => 'Select an Official Account to sync Article from',
    'JS_SYNC_SOCIAL_ARTICLES_ERROR_MSG' => 'Error syncing articles. Please try again or contact the administrator!',
    'JS_SYNC_ZALO_ARTICLES_SUCCESS_MSG' => 'Articles synced successfully!',
    'JS_ZALO_OA_API_OUT_OF_RATE_LIMIT_ERROR_MSG' => 'Can not send message right now as the Zalo Official Account API has reached the request limit per minutes. The request has been queued to be sent automatically in the background.',
    'JS_ZALO_ARTICLE_API_OUT_OF_RATE_LIMIT_ERROR_MSG' => 'Can not send article right now as the Zalo Article API has reached the request limit per minutes. The request has been queued to be sent automatically in the background.',
    'JS_ZALO_ARTICLE_SEND_OUT_OF_QUOTA_ERROR_MSG' => 'Can not send Zalo Article right now as it reaches the sending quota per month. Please try again next month!',
    'JS_ZALO_REQUEST_SHARE_CONTACT_INFO_TITLE' => 'Request share contact info from Zalo',
    'JS_ZALO_REQUEST_SHARE_CONTACT_INFO_HINT' => 'Select an Official Account to request sharing contact info from Zalo follower(s).',
    'JS_ZALO_REQUEST_SHARE_CONTACT_INFO_FOLLOWER_ID_NOT_SYNCED_WITH_ZALO_OA_ERROR_MSG' => 'Can not send request as this customer\'s Social ID is not synced or not followed the selected Zalo Official Account yet!',
    'JS_ZALO_REQUEST_SHARE_CONTACT_INFO_SOCIAL_ID_NOT_FOLLOWED_TO_ZALO_OA_ERROR_MSG' => 'Can not send request as this customer is not followed the selected Zalo Official Account yet!',
    'JS_ZALO_REQUEST_SHARE_CONTACT_INFO_UNKNOWN_ERROR_MSG' => 'Error sending request right now. The request has been queued to be sent automatically in the background.',
    'JS_ZALO_REQUEST_SHARE_CONTACT_INFO_SUCCESS_MSG' => 'Sent request successfully!',
    'JS_ZALO_REQUEST_SHARE_CONTACT_INFO_QUEUED_MSG' => 'The request has been queued to be sent automatically in the background.',
    'JS_SYNC_PRODUCTS_TO_ZALO_SHOP_HINT' => 'Select an Official Account to sync products from CRM to that Zalo SHOP',
    'JS_SYNC_PRODUCTS_TO_ZALO_SHOP_SELECTED_PRODUCTS_COUNT' => 'Selected products to sync: ',
    'JS_SYNC_PRODUCTS_TO_ZALO_SHOP_CREATE_NEW_AND_UPDATE_EXISTING_PRODUCTS' => 'Create new & Update existing products',
    'JS_SYNC_PRODUCTS_TO_ZALO_SHOP_CREATE_NEW_PRODUCTS_ONLY' => 'Create new products only',
    'JS_SYNC_PRODUCTS_TO_ZALO_SHOP_ERROR_MSG' => 'Error syncing these products to Zalo Shop: [%s]. Please try again or contact the administrator!',
    'JS_SYNC_PRODUCTS_TO_ZALO_SHOP_SUCCESS_MSG' => 'Products synced successfully!',
    // End Hieu Nguyen

    // Added by Phu Vo
    'JS_REMOVE_KEYWORD' => 'Remove keyword',
    'JS_SOCIAL_CONFIG_FACEBOOK_FANPAGE_EXPIRED_ERROR_MSG' => 'Could not perform action. This Fanpage has Expired!',
    'JS_SOCIAL_SYNC_FACEBOOK_FOLLOWER_IDS_ERROR_MSG' => 'Error synchronizing follower ids, please try again!',
    'JS_SOCIAL_SYNC_FACEBOOK_FOLLOWER_IDS_SUCCESS_MSG' => 'This action has been queued to be done automatically in the background.',
    'JS_SOCIAL_CONFIG_FACEBOOK_DISCONNECT_FANPAGE_CONFIRM' => 'Do you want to disconnect this Fanpage?',
    'JS_SOCIAL_CONFIG_FACEBOOK_DISCONNECT_FANPAGE_ERROR_MSG' => 'Error disconnecting Facebook Fanpage, please try again!',
    'JS_SOCIAL_CONFIG_FACEBOOK_DISCONNECT_FANPAGE_SUCCESS_MSG' => 'Disconnected Facebook Fanpage successfully.',
    // End Phu Vo
);
