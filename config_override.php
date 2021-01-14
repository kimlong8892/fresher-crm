<?php
/* +**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
* ***********************************************************************************/

// Secret key for public urls like webhooks or secure entrypoints
$secretKey = '';    // Use https://www.md5online.org/ to generate different key for each project!

// [Security] List username of users that are for API access only (using for 3rd integration)
$usersForApiOnly = array(
    'api.erp',
    'api.hr',
    'api.accounting',
    'api.warehouse',
    'api.retail',
    'api.mautic',
    'api.website',
);

$loggerConfig = array(	
    'ERROR' => false,
    'FATAL' => false,
    'INFO'  => true,
    'WARN'  => false,
    'DEBUG' => false,
);

//Maximum number of Mailboxes in mail converter
$max_mailboxes = 3;
$googleApiKey = 'AIzaSyBrvitTBwWFufaqsguag3L9vrWp_Re72lU';

$googleRecaptchaConfig = array(
    'site_key' => '6LdYWs0UAAAAAPjnXCQm4SH9GiNdKL8ATJM7Nsj5',
    'secret_key' => '6LdYWs0UAAAAAMpsqGq-J6RjBt6zhbFCI2Lp4t3b',
    'endpoint' => 'https://www.google.com/recaptcha/api/siteverify',
);

// Google Integration
$googleConfig = array(
    'debug' => array(
        'calendar' => array(
            'pull' => false,
            'push' => false
        ),
        'contacts' => array(
            'pull' => false,
            'push' => false
        ),
    ),
    'oauth' => array(
        'client_id' => '288569370-ktj1u18mqdar6gliag9jdd6am6b6riok.apps.googleusercontent.com',
	    'client_secret' => 'zG3wdwtcgaFcIQrSFX4GMnuJ',
    ),
);

$oauthCallbackAllowedModules = array(
    'Google',
);

$inventoryModules = array(
    'Invoice',
    'Quotes',
    'PurchaseOrder',
    'SalesOrder',
    //'ReturnOrder'
    'CPComboProducts', //-- Added by Kelvin Thang on 2020-02-29 set module CPComboProducts is inventory
);

$layoutEditorConfig = array(
    'allowed_system_modules' => array('Users', 'PBXManager', 'SMSNotifier'), // Allow system modules to show in LayoutEditor selection
    'prevent_custom_field' => array(
        'Calendar'		=> array('LBL_EVENT_INFORMATION', 'LBL_TASK_INFORMATION', 'LBL_DESCRIPTION_INFORMATION', 'LBL_CHECKIN', 'LBL_INVITEES'),
        'Events'		=> array('LBL_INVITEES'),
        'HelpDesk'      => array('LBL_TICKET_RESOLUTION', 'LBL_COMMENTS'),
        'Faq'           => array('LBL_COMMENT_INFORMATION'),
        'Invoice'       => array('LBL_ITEM_DETAILS'),
        'Quotes'        => array('LBL_ITEM_DETAILS'),
        'SalesOrder'    => array('LBL_ITEM_DETAILS'),
        'PurchaseOrder' => array('LBL_ITEM_DETAILS'),
        //'ReturnOrder' => array('LBL_ITEM_DETAILS'),
        'CPComboProducts'	=> array('LBL_ITEM_DETAILS'), //-- Added by Kelvin Thang on 2020-02-29 set module CPComboProducts to show in LayoutEditor selection
    )
);

//-- Added By Kelvin Thang on 2020-02-29 set Combo Products Ignore Modules
$comboProductsIgnoreModules = array(
    'PurchaseOrder',
    'CPComboProducts',
);

// Prevent user to edit these fields
$nonEditableFields = array(
    'isconvertedfrompotential', 
    'isconvertedfromlead', 
    'createdby', 
    'main_owner_id', 
    'mautic_id',
    'zalo_id_synced'
);

// Config full name order (need to Repair after change)
$fullNameConfig = array(
    'required_field' => 'firstname',                        // Only firstname or lastname can be required at the same time
    'full_name_order' => array('lastname', 'firstname'),    // Change the field order to get the expected full name display order
);

// Validation rules
$validationConfig = array(
    'prevent_redundant_spaces' => true,
    'autocomplete_min_length' => 3,
    'password' => array(
        'length' => 8,
        'lower_case_characters' => true,
        'upper_case_characters' => false,
        'digit_characters' => false,
        'special_characters' => false,
    ),
    'allow_uploaded_exts' => ['pdf', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'csv', 'ics', 'odt', 'ods', 'odp', 'png', 'jpg', 'gif', 'tiff', 'bmp', 'avi', 'flv', 'wmv', 'mp4', 'mov', 'mp3', 'wav', 'flac'] // Moved by Phuc on 2020.01.20 to add upload file ext
);

// Default preferences for new users
$defaultUserPreferences = array(
    'language' => 'vn_vn',
    'timezone' => 'Asia/Bangkok',
    'date_format' => 'dd-mm-yyyy',
    'currency_id' => '1',
    'currency_symbol_placement' => '1.0$',
);

$emailQueueConfig = array(
    'batch_limit' => 500,
    'max_attempts' => 5,
);

$voiceCommandConfig = array(
    'enable' => false,
    'proxy_server_name' => 'demo.cloudpro.vn',
    'proxy_server_port' => '2096',
    'proxy_server_ssl' => true,
    'socket_token' => 'c505eb1d7a28c72632465526453aa1a0',
);

$callCenterConfig = array(
    'enable' => false,
    'debug' => true,
    'bridge_server_name' => 'demo.cloudpro.vn',
    'bridge_server_port' => '2053',
    'bridge_server_ssl' => true,
    'socket_token' => 'c505eb1d7a28c72632465526453aa1a0',
    'inbound_routing' => array(
        '02862858702' => 'H6',    // ID parent role HCM
        '02836222701' => 'H7',    // ID parent role DN
    )
);

$socialConfig = array(
    'social_message_send_immediately_limit' => 20,
    'queue_process_batch_limit' => 500,
    'zalo' => array(
        'enable' => true,
        'debug' => true,
        'service_url' => 'https://openapi.zalo.me/v2.0/',
        'max_requests_per_min' => 4000,
        'max_articles_limit' => 10,
        'request_share_contact_info_image_url' => 'https://onlinecrm.vn/media/onlinecrm-logo-1326.png',
        'request_share_contact_info_msg' => 'Bạn hãy cung cấp thông tin liên hệ cho chúng tôi để được hỗ trợ tốt nhất từ bộ phận chăm sóc khách hàng',
    ),
);

$kanbanConfig = array(
    'enabled_modules' => array('Accounts', 'Contacts', 'Leads', 'Potentials', 'Project', 'HelpDesk'),
    'totaled_modules' => array('Potentials' => 'amount')
);

$firebaseConfig = array (
    'fcm_sender_id' => '195744590510',
    'fcm_server_key' => 'AAAALZNJaq4:APA91bEBVdbKJ1iIrYs1eVl3PXxtR5VhIGwA_SPhCznlbplEenlXdrENkPMy5tASGvr9cjK8P5br6yWMF6WHibFZs6DwbANeNyXPWNfE3MAlKGS5joiekUPVBk2hvgBr9aSSlqPd0ZEH'
);

$notificationConfig = array(
    'assign_ignore_modules' => array(
        'SMSNotifier',
        'PBXManager',
        'CPSocialFeedback', 
        'CPSocialArticle', 
        'CPSocialArticleLog', 
        'CPSocialMessageLog'
    ),
);

$notifyEmailConfig = array(
    'following_record_updated_notify_email_template' => '19',
    'reset_password_email_template_id' => '20',
    'import_result_email_template_id' => '21',
);

$mobileConfig = array(
    'api_key' => 'c505eb1d7a28c72632465526453aa1a0',
    'reset_password_email_template_id' => '21',
);

$portalConfig = array(
    'reset_password_email_template_id' => '21',
);

$batchSaveConfig = array(
    'trigger_entity_events' => true,    // Allow entity events (beforesave/aftersave/...) to run while running batch save (import/massupdate)
);

$ImportConfig = array(
    'importTypes' => array(
        'csv' => array('reader' => 'Import_CSVReader_Reader', 'classpath' => 'modules/Import/readers/CSVReader.php'),
        'vcf' => array('reader' => 'Import_VCardReader_Reader', 'classpath' => 'modules/Import/readers/VCardReader.php'),
        'ics' => array('reader' => 'Import_ICSReader_Reader', 'classpath' => 'modules/Import/readers/ICSReader.php'),
        'default' => array('reader' => 'Import_FileReader_Reader', 'classpath' => 'modules/Import/readers/FileReader.php')
    ),

    'userImportTablePrefix' => 'vtiger_import_',
    // Individual batch limit - Specified number of records will be imported at one shot and the cycle will repeat till all records are imported
    'importBatchLimit' => '250',
    // Threshold record limit for immediate import. If record count is more than this, then the import is scheduled through cron job
    //'immediateImportLimit' => '1000',
    'immediateImportLimit' => '1000',
    //'importPagingLimit' => '10000',
    'importPagingLimit' => '1000000',
    //'importPagingLimit' => '100',
);

$generateDemoData = array(
    'userId' => '21', //user handle task generate data, don't use this user to import other data via normal way
    'userName' => 'demodata', //user handle task generate data, don't use this user to import other data via normal way
    'modules' => array( // which module need to import?
        '2', //Potentials
        '20', //Quotes
        '22', //SalesOrder
    ),
    'userRandom' => array(
        'demodata',
        'tung.bui',
        'hoc.bui',
        'admin',
    )
);

//-- Added By Kelvin Thang -- date: 2019-01-14 -add config override set module Non visible
//$nonVisibleModulesList = array();

// Added by Hoang Duc 22-03-2019 to enable email access tracking
$email_tracking = "Yes";
// End Hoang Duc

$emailQueueConfig = array(
    'batch_limit' => 500,
    'max_attempts' => 5,
);


// Added by Phuc on 2019.09.26 to add id for DEBITS Menu
$debitReportFolderId = '1';
// Ended by Phuc

// Added by Phu Vo on 2020.02.06 to config sms feature
$smsConfig = [
    'max_characters' => 600,
];
// End Phu Vo

// Add by Dung Bui 2020.04.08 to config url api setup new instance
$urlApiSetupNewInstance = 'https://pms2019.onlinecrm.vn/api/DeploymentApi.php';
// End Dung Bui

// Add by Dung Bui 2020.04.09 to config params send request login site PMS
$deploymentApiInfo = array(
    'username' => 'deployment',
    'access_key' => 'nodADUh7zc6dy',
);
// End Dung Bui

// Added by Cong Thoai  09-08-2019 to check whitelist ip can call Api
$apiConfigs = array(
    'allow_ips' => array(
        '::1', 
        '103.48.194.146', 
        '115.79.57.97'
    ),
);
//End Cong Thoai

// Added by Phuc on 2019.10.25 to add upload file ext
$allowedUploadExts = ['pdf', 'xls', 'xlsx', 'ppt', 'pptx', 'txt', 'csv', 'ics', 'odt', 'ods', 'odp', 'png', 'jpg', 'gif', 'tiff', 'bmp', 'avi', 'flv', 'wmv', 'mp4', 'mov', 'mp3', 'wav', 'flac'];
// Ended by Phuc

$notifyEmailConfig = array(
   'following_record_updated_notify_email_template' => '18',
   'reset_password_email_template_id' => '19',
   'import_result_email_template_id' => '20',
);


// Added by Cong Thoai - 2020/03/03 - config user meeting booking auto accept
$meetingRoomUserIDs = array(
    '407',
);
//End

// Add by Dung Bui 2020.04.09
$defaultServerId = 25988; // to config server id default on module CPInstance
$apiLogin = array( // params send request login site trial
    'username' => 'admin',
    'access_key' => 'wbBP9ACJt6KrWpzq',
);
// End Dung Bui

// Add by Dung Bui 2020.04.10 to server auto setup new instance
$serverAutoSetup = '103.226.249.222';
// End Dung Bui

// Added by Phuc on 2020.04.14 for mautic
$mappingFromMauticStages = [
    '8' => [
        'value' => 'Sent',
        'exclude' => ['Logged in', 'Expired']
    ]
];

// Ignore role based check on picklist fields
$nonRoleBasedPicklists = array(
    'chat_app',
);

/* Added by Hoang Duc 2020-02-05 to for force search in allow module */
 $allowModulesForSearchAll = [
    'Leads',
    'Contacts',
    'Potentials',
    'Accounts',
    'CPInstance',
];

// Added by Tin Bui on 2020.04.17 for portal contact data
$contactUser = [
    'id' => '517',
    'username' => 'portal_api',
    'password' => 'crm12345'
];
// Ended by Tin Bui

// Added by Phu Vo on 2020.04.23
$countryCodes = array(
    '1' => array('name' => 'UNITED STATES', 'code' => '1', 'short_name' => 'US'),
    '7' => array('name' => 'RUSSIAN FEDERATION', 'code' => '7', 'short_name' => 'RU'),
    '20' => array('name' => 'EGYPT', 'code' => '20', 'short_name' => 'EG'),
    '27' => array('name' => 'SOUTH AFRICA', 'code' => '27', 'short_name' => 'ZA'),
    '30' => array('name' => 'GREECE', 'code' => '30', 'short_name' => 'GR'),
    '31' => array('name' => 'NETHERLANDS', 'code' => '31', 'short_name' => 'NL'),
    '32' => array('name' => 'BELGIUM', 'code' => '32', 'short_name' => 'BE'),
    '33' => array('name' => 'FRANCE', 'code' => '33', 'short_name' => 'FR'),
    '34' => array('name' => 'SPAIN', 'code' => '34', 'short_name' => 'ES'),
    '36' => array('name' => 'HUNGARY', 'code' => '36', 'short_name' => 'HU'),
    '39' => array('name' => 'HOLY SEE (VATICAN CITY STATE)', 'code' => '39', 'short_name' => 'VA'),
    '40' => array('name' => 'ROMANIA', 'code' => '40', 'short_name' => 'RO'),
    '41' => array('name' => 'SWITZERLAND', 'code' => '41', 'short_name' => 'CH'),
    '43' => array('name' => 'AUSTRIA', 'code' => '43', 'short_name' => 'AT'),
    '44' => array('name' => 'ISLE OF MAN', 'code' => '44', 'short_name' => 'IM'),
    '45' => array('name' => 'DENMARK', 'code' => '45', 'short_name' => 'DK'),
    '46' => array('name' => 'SWEDEN', 'code' => '46', 'short_name' => 'SE'),
    '47' => array('name' => 'NORWAY', 'code' => '47', 'short_name' => 'NO'),
    '48' => array('name' => 'POLAND', 'code' => '48', 'short_name' => 'PL'),
    '49' => array('name' => 'GERMANY', 'code' => '49', 'short_name' => 'DE'),
    '51' => array('name' => 'PERU', 'code' => '51', 'short_name' => 'PE'),
    '52' => array('name' => 'MEXICO', 'code' => '52', 'short_name' => 'MX'),
    '53' => array('name' => 'CUBA', 'code' => '53', 'short_name' => 'CU'),
    '54' => array('name' => 'ARGENTINA', 'code' => '54', 'short_name' => 'AR'),
    '55' => array('name' => 'BRAZIL', 'code' => '55', 'short_name' => 'BR'),
    '56' => array('name' => 'CHILE', 'code' => '56', 'short_name' => 'CL'),
    '57' => array('name' => 'COLOMBIA', 'code' => '57', 'short_name' => 'CO'),
    '58' => array('name' => 'VENEZUELA', 'code' => '58', 'short_name' => 'VE'),
    '60' => array('name' => 'MALAYSIA', 'code' => '60', 'short_name' => 'MY'),
    '61' => array('name' => 'CHRISTMAS ISLAND', 'code' => '61', 'short_name' => 'CX'),
    '62' => array('name' => 'INDONESIA', 'code' => '62', 'short_name' => 'ID'),
    '63' => array('name' => 'PHILIPPINES', 'code' => '63', 'short_name' => 'PH'),
    '64' => array('name' => 'NEW ZEALAND', 'code' => '64', 'short_name' => 'NZ'),
    '65' => array('name' => 'SINGAPORE', 'code' => '65', 'short_name' => 'SG'),
    '66' => array('name' => 'THAILAND', 'code' => '66', 'short_name' => 'TH'),
    '81' => array('name' => 'JAPAN', 'code' => '81', 'short_name' => 'JP'),
    '82' => array('name' => 'KOREA REPUBLIC OF', 'code' => '82', 'short_name' => 'KR'),
    '84' => array('name' => 'VIET NAM', 'code' => '84', 'short_name' => 'VN'),
    '86' => array('name' => 'CHINA', 'code' => '86', 'short_name' => 'CN'),
    '90' => array('name' => 'TURKEY', 'code' => '90', 'short_name' => 'TR'),
    '91' => array('name' => 'INDIA', 'code' => '91', 'short_name' => 'IN'),
    '92' => array('name' => 'PAKISTAN', 'code' => '92', 'short_name' => 'PK'),
    '93' => array('name' => 'AFGHANISTAN', 'code' => '93', 'short_name' => 'AF'),
    '94' => array('name' => 'SRI LANKA', 'code' => '94', 'short_name' => 'LK'),
    '95' => array('name' => 'MYANMAR', 'code' => '95', 'short_name' => 'MM'),
    '98' => array('name' => 'IRAN, ISLAMIC REPUBLIC OF', 'code' => '98', 'short_name' => 'IR'),
    '212' => array('name' => 'MOROCCO', 'code' => '212', 'short_name' => 'MA'),
    '213' => array('name' => 'ALGERIA', 'code' => '213', 'short_name' => 'DZ'),
    '216' => array('name' => 'TUNISIA', 'code' => '216', 'short_name' => 'TN'),
    '218' => array('name' => 'LIBYAN ARAB JAMAHIRIYA', 'code' => '218', 'short_name' => 'LY'),
    '220' => array('name' => 'GAMBIA', 'code' => '220', 'short_name' => 'GM'),
    '221' => array('name' => 'SENEGAL', 'code' => '221', 'short_name' => 'SN'),
    '222' => array('name' => 'MAURITANIA', 'code' => '222', 'short_name' => 'MR'),
    '223' => array('name' => 'MALI', 'code' => '223', 'short_name' => 'ML'),
    '224' => array('name' => 'GUINEA', 'code' => '224', 'short_name' => 'GN'),
    '225' => array('name' => 'COTE D IVOIRE', 'code' => '225', 'short_name' => 'CI'),
    '226' => array('name' => 'BURKINA FASO', 'code' => '226', 'short_name' => 'BF'),
    '227' => array('name' => 'NIGER', 'code' => '227', 'short_name' => 'NE'),
    '228' => array('name' => 'TOGO', 'code' => '228', 'short_name' => 'TG'),
    '229' => array('name' => 'BENIN', 'code' => '229', 'short_name' => 'BJ'),
    '230' => array('name' => 'MAURITIUS', 'code' => '230', 'short_name' => 'MU'),
    '231' => array('name' => 'LIBERIA', 'code' => '231', 'short_name' => 'LR'),
    '232' => array('name' => 'SIERRA LEONE', 'code' => '232', 'short_name' => 'SL'),
    '233' => array('name' => 'GHANA', 'code' => '233', 'short_name' => 'GH'),
    '234' => array('name' => 'NIGERIA', 'code' => '234', 'short_name' => 'NG'),
    '235' => array('name' => 'CHAD', 'code' => '235', 'short_name' => 'TD'),
    '236' => array('name' => 'CENTRAL AFRICAN REPUBLIC', 'code' => '236', 'short_name' => 'CF'),
    '237' => array('name' => 'CAMEROON', 'code' => '237', 'short_name' => 'CM'),
    '238' => array('name' => 'CAPE VERDE', 'code' => '238', 'short_name' => 'CV'),
    '239' => array('name' => 'SAO TOME AND PRINCIPE', 'code' => '239', 'short_name' => 'ST'),
    '240' => array('name' => 'EQUATORIAL GUINEA', 'code' => '240', 'short_name' => 'GQ'),
    '241' => array('name' => 'GABON', 'code' => '241', 'short_name' => 'GA'),
    '242' => array('name' => 'CONGO', 'code' => '242', 'short_name' => 'CG'),
    '243' => array('name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'code' => '243', 'short_name' => 'CD'),
    '244' => array('name' => 'ANGOLA', 'code' => '244', 'short_name' => 'AO'),
    '245' => array('name' => 'GUINEA-BISSAU', 'code' => '245', 'short_name' => 'GW'),
    '248' => array('name' => 'SEYCHELLES', 'code' => '248', 'short_name' => 'SC'),
    '249' => array('name' => 'SUDAN', 'code' => '249', 'short_name' => 'SD'),
    '250' => array('name' => 'RWANDA', 'code' => '250', 'short_name' => 'RW'),
    '251' => array('name' => 'ETHIOPIA', 'code' => '251', 'short_name' => 'ET'),
    '252' => array('name' => 'SOMALIA', 'code' => '252', 'short_name' => 'SO'),
    '253' => array('name' => 'DJIBOUTI', 'code' => '253', 'short_name' => 'DJ'),
    '254' => array('name' => 'KENYA', 'code' => '254', 'short_name' => 'KE'),
    '255' => array('name' => 'TANZANIA, UNITED REPUBLIC OF', 'code' => '255', 'short_name' => 'TZ'),
    '256' => array('name' => 'UGANDA', 'code' => '256', 'short_name' => 'UG'),
    '257' => array('name' => 'BURUNDI', 'code' => '257', 'short_name' => 'BI'),
    '258' => array('name' => 'MOZAMBIQUE', 'code' => '258', 'short_name' => 'MZ'),
    '260' => array('name' => 'ZAMBIA', 'code' => '260', 'short_name' => 'ZM'),
    '261' => array('name' => 'MADAGASCAR', 'code' => '261', 'short_name' => 'MG'),
    '262' => array('name' => 'MAYOTTE', 'code' => '262', 'short_name' => 'YT'),
    '263' => array('name' => 'ZIMBABWE', 'code' => '263', 'short_name' => 'ZW'),
    '264' => array('name' => 'NAMIBIA', 'code' => '264', 'short_name' => 'NA'),
    '265' => array('name' => 'MALAWI', 'code' => '265', 'short_name' => 'MW'),
    '266' => array('name' => 'LESOTHO', 'code' => '266', 'short_name' => 'LS'),
    '267' => array('name' => 'BOTSWANA', 'code' => '267', 'short_name' => 'BW'),
    '268' => array('name' => 'SWAZILAND', 'code' => '268', 'short_name' => 'SZ'),
    '269' => array('name' => 'COMOROS', 'code' => '269', 'short_name' => 'KM'),
    '290' => array('name' => 'SAINT HELENA', 'code' => '290', 'short_name' => 'SH'),
    '291' => array('name' => 'ERITREA', 'code' => '291', 'short_name' => 'ER'),
    '297' => array('name' => 'ARUBA', 'code' => '297', 'short_name' => 'AW'),
    '298' => array('name' => 'FAROE ISLANDS', 'code' => '298', 'short_name' => 'FO'),
    '299' => array('name' => 'GREENLAND', 'code' => '299', 'short_name' => 'GL'),
    '350' => array('name' => 'GIBRALTAR', 'code' => '350', 'short_name' => 'GI'),
    '351' => array('name' => 'PORTUGAL', 'code' => '351', 'short_name' => 'PT'),
    '352' => array('name' => 'LUXEMBOURG', 'code' => '352', 'short_name' => 'LU'),
    '353' => array('name' => 'IRELAND', 'code' => '353', 'short_name' => 'IE'),
    '354' => array('name' => 'ICELAND', 'code' => '354', 'short_name' => 'IS'),
    '355' => array('name' => 'ALBANIA', 'code' => '355', 'short_name' => 'AL'),
    '356' => array('name' => 'MALTA', 'code' => '356', 'short_name' => 'MT'),
    '357' => array('name' => 'CYPRUS', 'code' => '357', 'short_name' => 'CY'),
    '358' => array('name' => 'FINLAND', 'code' => '358', 'short_name' => 'FI'),
    '359' => array('name' => 'BULGARIA', 'code' => '359', 'short_name' => 'BG'),
    '370' => array('name' => 'LITHUANIA', 'code' => '370', 'short_name' => 'LT'),
    '371' => array('name' => 'LATVIA', 'code' => '371', 'short_name' => 'LV'),
    '372' => array('name' => 'ESTONIA', 'code' => '372', 'short_name' => 'EE'),
    '373' => array('name' => 'MOLDOVA, REPUBLIC OF', 'code' => '373', 'short_name' => 'MD'),
    '374' => array('name' => 'ARMENIA', 'code' => '374', 'short_name' => 'AM'),
    '375' => array('name' => 'BELARUS', 'code' => '375', 'short_name' => 'BY'),
    '376' => array('name' => 'ANDORRA', 'code' => '376', 'short_name' => 'AD'),
    '377' => array('name' => 'MONACO', 'code' => '377', 'short_name' => 'MC'),
    '378' => array('name' => 'SAN MARINO', 'code' => '378', 'short_name' => 'SM'),
    '380' => array('name' => 'UKRAINE', 'code' => '380', 'short_name' => 'UA'),
    '381' => array('name' => 'KOSOVO', 'code' => '381', 'short_name' => 'XK'),
    '382' => array('name' => 'MONTENEGRO', 'code' => '382', 'short_name' => 'ME'),
    '385' => array('name' => 'CROATIA', 'code' => '385', 'short_name' => 'HR'),
    '386' => array('name' => 'SLOVENIA', 'code' => '386', 'short_name' => 'SI'),
    '387' => array('name' => 'BOSNIA AND HERZEGOVINA', 'code' => '387', 'short_name' => 'BA'),
    '389' => array('name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'code' => '389', 'short_name' => 'MK'),
    '420' => array('name' => 'CZECH REPUBLIC', 'code' => '420', 'short_name' => 'CZ'),
    '421' => array('name' => 'SLOVAKIA', 'code' => '421', 'short_name' => 'SK'),
    '423' => array('name' => 'LIECHTENSTEIN', 'code' => '423', 'short_name' => 'LI'),
    '500' => array('name' => 'FALKLAND ISLANDS (MALVINAS)', 'code' => '500', 'short_name' => 'FK'),
    '501' => array('name' => 'BELIZE', 'code' => '501', 'short_name' => 'BZ'),
    '502' => array('name' => 'GUATEMALA', 'code' => '502', 'short_name' => 'GT'),
    '503' => array('name' => 'EL SALVADOR', 'code' => '503', 'short_name' => 'SV'),
    '504' => array('name' => 'HONDURAS', 'code' => '504', 'short_name' => 'HN'),
    '505' => array('name' => 'NICARAGUA', 'code' => '505', 'short_name' => 'NI'),
    '506' => array('name' => 'COSTA RICA', 'code' => '506', 'short_name' => 'CR'),
    '507' => array('name' => 'PANAMA', 'code' => '507', 'short_name' => 'PA'),
    '508' => array('name' => 'SAINT PIERRE AND MIQUELON', 'code' => '508', 'short_name' => 'PM'),
    '509' => array('name' => 'HAITI', 'code' => '509', 'short_name' => 'HT'),
    '590' => array('name' => 'SAINT BARTHELEMY', 'code' => '590', 'short_name' => 'BL'),
    '591' => array('name' => 'BOLIVIA', 'code' => '591', 'short_name' => 'BO'),
    '592' => array('name' => 'GUYANA', 'code' => '592', 'short_name' => 'GY'),
    '593' => array('name' => 'ECUADOR', 'code' => '593', 'short_name' => 'EC'),
    '595' => array('name' => 'PARAGUAY', 'code' => '595', 'short_name' => 'PY'),
    '597' => array('name' => 'SURINAME', 'code' => '597', 'short_name' => 'SR'),
    '598' => array('name' => 'URUGUAY', 'code' => '598', 'short_name' => 'UY'),
    '599' => array('name' => 'NETHERLANDS ANTILLES', 'code' => '599', 'short_name' => 'AN'),
    '670' => array('name' => 'TIMOR-LESTE', 'code' => '670', 'short_name' => 'TL'),
    '672' => array('name' => 'ANTARCTICA', 'code' => '672', 'short_name' => 'AQ'),
    '673' => array('name' => 'BRUNEI DARUSSALAM', 'code' => '673', 'short_name' => 'BN'),
    '674' => array('name' => 'NAURU', 'code' => '674', 'short_name' => 'NR'),
    '675' => array('name' => 'PAPUA NEW GUINEA', 'code' => '675', 'short_name' => 'PG'),
    '676' => array('name' => 'TONGA', 'code' => '676', 'short_name' => 'TO'),
    '677' => array('name' => 'SOLOMON ISLANDS', 'code' => '677', 'short_name' => 'SB'),
    '678' => array('name' => 'VANUATU', 'code' => '678', 'short_name' => 'VU'),
    '679' => array('name' => 'FIJI', 'code' => '679', 'short_name' => 'FJ'),
    '680' => array('name' => 'PALAU', 'code' => '680', 'short_name' => 'PW'),
    '681' => array('name' => 'WALLIS AND FUTUNA', 'code' => '681', 'short_name' => 'WF'),
    '682' => array('name' => 'COOK ISLANDS', 'code' => '682', 'short_name' => 'CK'),
    '683' => array('name' => 'NIUE', 'code' => '683', 'short_name' => 'NU'),
    '685' => array('name' => 'SAMOA', 'code' => '685', 'short_name' => 'WS'),
    '686' => array('name' => 'KIRIBATI', 'code' => '686', 'short_name' => 'KI'),
    '687' => array('name' => 'NEW CALEDONIA', 'code' => '687', 'short_name' => 'NC'),
    '688' => array('name' => 'TUVALU', 'code' => '688', 'short_name' => 'TV'),
    '689' => array('name' => 'FRENCH POLYNESIA', 'code' => '689', 'short_name' => 'PF'),
    '690' => array('name' => 'TOKELAU', 'code' => '690', 'short_name' => 'TK'),
    '691' => array('name' => 'MICRONESIA, FEDERATED STATES OF', 'code' => '691', 'short_name' => 'FM'),
    '692' => array('name' => 'MARSHALL ISLANDS', 'code' => '692', 'short_name' => 'MH'),
    '850' => array('name' => 'KOREA DEMOCRATIC PEOPLES REPUBLIC OF', 'code' => '850', 'short_name' => 'KP'),
    '852' => array('name' => 'HONG KONG', 'code' => '852', 'short_name' => 'HK'),
    '853' => array('name' => 'MACAU', 'code' => '853', 'short_name' => 'MO'),
    '855' => array('name' => 'CAMBODIA', 'code' => '855', 'short_name' => 'KH'),
    '856' => array('name' => 'LAO PEOPLES DEMOCRATIC REPUBLIC', 'code' => '856', 'short_name' => 'LA'),
    '870' => array('name' => 'PITCAIRN', 'code' => '870', 'short_name' => 'PN'),
    '880' => array('name' => 'BANGLADESH', 'code' => '880', 'short_name' => 'BD'),
    '886' => array('name' => 'TAIWAN, PROVINCE OF CHINA', 'code' => '886', 'short_name' => 'TW'),
    '960' => array('name' => 'MALDIVES', 'code' => '960', 'short_name' => 'MV'),
    '961' => array('name' => 'LEBANON', 'code' => '961', 'short_name' => 'LB'),
    '962' => array('name' => 'JORDAN', 'code' => '962', 'short_name' => 'JO'),
    '963' => array('name' => 'SYRIAN ARAB REPUBLIC', 'code' => '963', 'short_name' => 'SY'),
    '964' => array('name' => 'IRAQ', 'code' => '964', 'short_name' => 'IQ'),
    '965' => array('name' => 'KUWAIT', 'code' => '965', 'short_name' => 'KW'),
    '966' => array('name' => 'SAUDI ARABIA', 'code' => '966', 'short_name' => 'SA'),
    '967' => array('name' => 'YEMEN', 'code' => '967', 'short_name' => 'YE'),
    '968' => array('name' => 'OMAN', 'code' => '968', 'short_name' => 'OM'),
    '971' => array('name' => 'UNITED ARAB EMIRATES', 'code' => '971', 'short_name' => 'AE'),
    '972' => array('name' => 'ISRAEL', 'code' => '972', 'short_name' => 'IL'),
    '973' => array('name' => 'BAHRAIN', 'code' => '973', 'short_name' => 'BH'),
    '974' => array('name' => 'QATAR', 'code' => '974', 'short_name' => 'QA'),
    '975' => array('name' => 'BHUTAN', 'code' => '975', 'short_name' => 'BT'),
    '976' => array('name' => 'MONGOLIA', 'code' => '976', 'short_name' => 'MN'),
    '977' => array('name' => 'NEPAL', 'code' => '977', 'short_name' => 'NP'),
    '992' => array('name' => 'TAJIKISTAN', 'code' => '992', 'short_name' => 'TJ'),
    '993' => array('name' => 'TURKMENISTAN', 'code' => '993', 'short_name' => 'TM'),
    '994' => array('name' => 'AZERBAIJAN', 'code' => '994', 'short_name' => 'AZ'),
    '995' => array('name' => 'GEORGIA', 'code' => '995', 'short_name' => 'GE'),
    '996' => array('name' => 'KYRGYZSTAN', 'code' => '996', 'short_name' => 'KG'),
    '998' => array('name' => 'UZBEKISTAN', 'code' => '998', 'short_name' => 'UZ'),
    '1242' => array('name' => 'BAHAMAS', 'code' => '1242', 'short_name' => 'BS'),
    '1246' => array('name' => 'BARBADOS', 'code' => '1246', 'short_name' => 'BB'),
    '1264' => array('name' => 'ANGUILLA', 'code' => '1264', 'short_name' => 'AI'),
    '1268' => array('name' => 'ANTIGUA AND BARBUDA', 'code' => '1268', 'short_name' => 'AG'),
    '1284' => array('name' => 'VIRGIN ISLANDS, BRITISH', 'code' => '1284', 'short_name' => 'VG'),
    '1340' => array('name' => 'VIRGIN ISLANDS, U.S.', 'code' => '1340', 'short_name' => 'VI'),
    '1345' => array('name' => 'CAYMAN ISLANDS', 'code' => '1345', 'short_name' => 'KY'),
    '1441' => array('name' => 'BERMUDA', 'code' => '1441', 'short_name' => 'BM'),
    '1473' => array('name' => 'GRENADA', 'code' => '1473', 'short_name' => 'GD'),
    '1599' => array('name' => 'SAINT MARTIN', 'code' => '1599', 'short_name' => 'MF'),
    '1649' => array('name' => 'TURKS AND CAICOS ISLANDS', 'code' => '1649', 'short_name' => 'TC'),
    '1664' => array('name' => 'MONTSERRAT', 'code' => '1664', 'short_name' => 'MS'),
    '1670' => array('name' => 'NORTHERN MARIANA ISLANDS', 'code' => '1670', 'short_name' => 'MP'),
    '1671' => array('name' => 'GUAM', 'code' => '1671', 'short_name' => 'GU'),
    '1684' => array('name' => 'AMERICAN SAMOA', 'code' => '1684', 'short_name' => 'AS'),
    '1758' => array('name' => 'SAINT LUCIA', 'code' => '1758', 'short_name' => 'LC'),
    '1767' => array('name' => 'DOMINICA', 'code' => '1767', 'short_name' => 'DM'),
    '1784' => array('name' => 'SAINT VINCENT AND THE GRENADINES', 'code' => '1784', 'short_name' => 'VC'),
    '1809' => array('name' => 'DOMINICAN REPUBLIC', 'code' => '1809', 'short_name' => 'DO'),
    '1868' => array('name' => 'TRINIDAD AND TOBAGO', 'code' => '1868', 'short_name' => 'TT'),
    '1869' => array('name' => 'SAINT KITTS AND NEVIS', 'code' => '1869', 'short_name' => 'KN'),
    '1876' => array('name' => 'JAMAICA', 'code' => '1876', 'short_name' => 'JM'),
);
// End Phu Vo
// implement by Long Nguyen 14/01/2021
$happyBirthDayConfig = array(
    'contacts_sms_template_id' => 1784,
    'contacts_email_template_id' => 35,
);