<?php

/* System auto-generated on 2019-09-19 11:55:38 am. DANGER! DO NOT EDIT THIS FILE!!!! */

$editViewBlocks = array(
    'LBL_GENERAL_INFORMATION' => array(
        'blocklabel' => 'LBL_GENERAL_INFORMATION',
        'sequence' => '1',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_TRACKING_INFOMATION' => array(
        'blocklabel' => 'LBL_TRACKING_INFOMATION',
        'sequence' => '2',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    )
);

$detailViewBlocks = array(
    'LBL_GENERAL_INFORMATION' => array(
        'blocklabel' => 'LBL_GENERAL_INFORMATION',
        'sequence' => '1',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_TRACKING_INFOMATION' => array(
        'blocklabel' => 'LBL_TRACKING_INFOMATION',
        'sequence' => '2',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    )
);

$fields = array(
    'name' => array(
        'columnname' => 'name',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '1',
        'uitype' => '2',
        'fieldname' => 'name',
        'fieldlabel' => 'LBL_NAME',
        'readonly' => '1',
        'presence' => '1',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '1',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'description' => array(
        'columnname' => 'description',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '19',
        'fieldname' => 'description',
        'fieldlabel' => 'LBL_DESCRIPTION',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '1',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_TRACKING_INFOMATION',
        'detailview_block_name' => 'LBL_TRACKING_INFOMATION'
    ),
    'assigned_user_id' => array(
        'columnname' => 'smownerid',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '53',
        'fieldname' => 'assigned_user_id',
        'fieldlabel' => 'LBL_ASSIGNED_TO',
        'readonly' => '1',
        'presence' => '1',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '19',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '19',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'main_owner_id' => array(
        'columnname' => 'main_owner_id',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '53',
        'fieldname' => 'main_owner_id',
        'fieldlabel' => 'LBL_MAIN_OWNER_ID',
        'readonly' => '1',
        'presence' => '1',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '20',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '20',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'createdby' => array(
        'columnname' => 'smcreatorid',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '52',
        'fieldname' => 'createdby',
        'fieldlabel' => 'LBL_CREATED_BY',
        'readonly' => '1',
        'presence' => '1',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '3',
        'editview_presence' => '1',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'createdtime' => array(
        'columnname' => 'createdtime',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '70',
        'fieldname' => 'createdtime',
        'fieldlabel' => 'LBL_CREATED_TIME',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '17',
        'displaytype' => '2',
        'typeofdata' => 'DT~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '17',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'modifiedtime' => array(
        'columnname' => 'modifiedtime',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '70',
        'fieldname' => 'modifiedtime',
        'fieldlabel' => 'LBL_MODIFIED_TIME',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '18',
        'displaytype' => '2',
        'typeofdata' => 'DT~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '18',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'source' => array(
        'columnname' => 'source',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'source',
        'fieldlabel' => 'LBL_SOURCE_INPUT',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '16',
        'displaytype' => '2',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '1',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '16',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'starred' => array(
        'columnname' => 'starred',
        'tablename' => 'vtiger_crmentity_user_field',
        'generatedtype' => '1',
        'uitype' => '56',
        'fieldname' => 'starred',
        'fieldlabel' => 'LBL_STARRED',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '6',
        'typeofdata' => 'C~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '2',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '7',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'tags' => array(
        'columnname' => 'tags',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'tags',
        'fieldlabel' => 'LBL_TAGS',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '6',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '3',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '8',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'related_campaign' => array(
        'columnname' => 'related_campaign',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'related_campaign',
        'fieldlabel' => 'LBL_RELATED_CAMPAIGN',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '1',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '14',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'related_target_list' => array(
        'columnname' => 'related_target_list',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'related_target_list',
        'fieldlabel' => 'LBL_RELATED_TARGET_LIST',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '13',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '13',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'cpsocialarticlelog_social_channel' => array(
        'columnname' => 'cpsocialarticlelog_social_channel',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '16',
        'fieldname' => 'cpsocialarticlelog_social_channel',
        'fieldlabel' => 'LBL_CPSOCIALARTICLELOG_SOCIAL_CHANNEL',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => ' ',
        'maximumlength' => '100',
        'sequence' => '3',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '2',
        'quickcreatesequence' => '4',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '2',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'social_sender_id' => array(
        'columnname' => 'social_sender_id',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '1',
        'fieldname' => 'social_sender_id',
        'fieldlabel' => 'LBL_SOCIAL_SENDER_ID',
        'readonly' => '1',
        'presence' => '1',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'V~M~LE~36',
        'quickcreate' => '2',
        'quickcreatesequence' => '5',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '3',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'social_sender_name' => array(
        'columnname' => 'social_sender_name',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '1',
        'fieldname' => 'social_sender_name',
        'fieldlabel' => 'LBL_SOCIAL_SENDER_NAME',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '4',
        'displaytype' => '1',
        'typeofdata' => 'V~M~LE~36',
        'quickcreate' => '2',
        'quickcreatesequence' => '6',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '5',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'related_customer' => array(
        'columnname' => 'related_customer',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'related_customer',
        'fieldlabel' => 'LBL_RELATED_CUSTOMER',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '12',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '12',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'social_receiver_identifier' => array(
        'columnname' => 'social_receiver_identifier',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '1',
        'fieldname' => 'social_receiver_identifier',
        'fieldlabel' => 'LBL_SOCIAL_RECEIVER_IDENTIFIER',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'V~M~LE~100',
        'quickcreate' => '2',
        'quickcreatesequence' => '7',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '11',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'social_receiver_id' => array(
        'columnname' => 'social_receiver_id',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '1',
        'fieldname' => 'social_receiver_id',
        'fieldlabel' => 'LBL_SOCIAL_RECEIVER_ID',
        'readonly' => '1',
        'presence' => '1',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'V~M~LE~36',
        'quickcreate' => '2',
        'quickcreatesequence' => '8',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '4',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'target_filters' => array(
        'columnname' => 'target_filters',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '1',
        'fieldname' => 'target_filters',
        'fieldlabel' => 'LBL_TARGET_FILTERS',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '5',
        'displaytype' => '1',
        'typeofdata' => 'V~M~LE~36',
        'quickcreate' => '2',
        'quickcreatesequence' => '9',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '4',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'related_social_article' => array(
        'columnname' => 'related_social_article',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'related_social_article',
        'fieldlabel' => 'LBL_RELATED_SOCIAL_ARTICLE',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '2',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '15',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'scheduled_send_time' => array(
        'columnname' => 'scheduled_send_time',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '14',
        'fieldname' => 'scheduled_send_time',
        'fieldlabel' => 'LBL_SCHEDULED_SEND_TIME',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '7',
        'displaytype' => '1',
        'typeofdata' => 'T~M',
        'quickcreate' => '2',
        'quickcreatesequence' => '10',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '10',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'cpsocialarticlelog_status' => array(
        'columnname' => 'cpsocialarticlelog_status',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '16',
        'fieldname' => 'cpsocialarticlelog_status',
        'fieldlabel' => 'LBL_CPSOCIALARTICLELOG_STATUS',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => 'queued',
        'maximumlength' => '100',
        'sequence' => '10',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '2',
        'quickcreatesequence' => '11',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '6',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'attempt_count' => array(
        'columnname' => 'attempt_count',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '7',
        'fieldname' => 'attempt_count',
        'fieldlabel' => 'LBL_ATTEMPT_COUNT',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '0',
        'maximumlength' => '100',
        'sequence' => '8',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '8',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'last_attempt_time' => array(
        'columnname' => 'last_attempt_time',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '14',
        'fieldname' => 'last_attempt_time',
        'fieldlabel' => 'LBL_LAST_ATTEMPT_TIME',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '9',
        'displaytype' => '1',
        'typeofdata' => 'T~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '7',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'scheduled_send_date' => array(
        'columnname' => 'scheduled_send_date',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '5',
        'fieldname' => 'scheduled_send_date',
        'fieldlabel' => 'LBL_SCHEDULED_SEND_DATE',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '6',
        'displaytype' => '1',
        'typeofdata' => 'D~M',
        'quickcreate' => '2',
        'quickcreatesequence' => '12',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '9',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    ),
    'social_message_id' => array(
        'columnname' => 'social_message_id',
        'tablename' => 'vtiger_cpsocialarticlelog',
        'generatedtype' => '2',
        'uitype' => '1',
        'fieldname' => 'social_message_id',
        'fieldlabel' => 'LBL_SOCIAL_MESSAGE_ID',
        'readonly' => '1',
        'presence' => '1',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '21',
        'displaytype' => '1',
        'typeofdata' => 'V~O~LE~36',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '21',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_GENERAL_INFORMATION',
        'detailview_block_name' => 'LBL_GENERAL_INFORMATION'
    )
);

