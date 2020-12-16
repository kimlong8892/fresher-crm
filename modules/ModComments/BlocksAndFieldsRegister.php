<?php

/* System auto-generated on 2019-08-23 08:56:44 am. DANGER! DO NOT EDIT THIS FILE!!!! */

$editViewBlocks = array(
    'LBL_MODCOMMENTS_INFORMATION' => array(
        'blocklabel' => 'LBL_MODCOMMENTS_INFORMATION',
        'sequence' => '1',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_OTHER_INFORMATION' => array(
        'blocklabel' => 'LBL_OTHER_INFORMATION',
        'sequence' => '2',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_CUSTOM_INFORMATION' => array(
        'blocklabel' => 'LBL_CUSTOM_INFORMATION',
        'sequence' => '3',
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
    'LBL_MODCOMMENTS_INFORMATION' => array(
        'blocklabel' => 'LBL_MODCOMMENTS_INFORMATION',
        'sequence' => '1',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_OTHER_INFORMATION' => array(
        'blocklabel' => 'LBL_OTHER_INFORMATION',
        'sequence' => '2',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_CUSTOM_INFORMATION' => array(
        'blocklabel' => 'LBL_CUSTOM_INFORMATION',
        'sequence' => '3',
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
    'commentcontent' => array(
        'columnname' => 'commentcontent',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '19',
        'fieldname' => 'commentcontent',
        'fieldlabel' => 'Comment',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '4',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '0',
        'quickcreatesequence' => '4',
        'info_type' => 'BAS',
        'masseditable' => '2',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '4',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'assigned_user_id' => array(
        'columnname' => 'smownerid',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '53',
        'fieldname' => 'assigned_user_id',
        'fieldlabel' => 'Assigned To',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '1',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '0',
        'quickcreatesequence' => '1',
        'info_type' => 'BAS',
        'masseditable' => '2',
        'helpinfo' => '',
        'summaryfield' => '1',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '1',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OTHER_INFORMATION',
        'detailview_block_name' => 'LBL_OTHER_INFORMATION'
    ),
    'createdtime' => array(
        'columnname' => 'createdtime',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '70',
        'fieldname' => 'createdtime',
        'fieldlabel' => 'Created Time',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '5',
        'displaytype' => '2',
        'typeofdata' => 'DT~O',
        'quickcreate' => '0',
        'quickcreatesequence' => '2',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '5',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OTHER_INFORMATION',
        'detailview_block_name' => 'LBL_OTHER_INFORMATION'
    ),
    'modifiedtime' => array(
        'columnname' => 'modifiedtime',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '70',
        'fieldname' => 'modifiedtime',
        'fieldlabel' => 'Modified Time',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '6',
        'displaytype' => '2',
        'typeofdata' => 'DT~O',
        'quickcreate' => '0',
        'quickcreatesequence' => '3',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '6',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OTHER_INFORMATION',
        'detailview_block_name' => 'LBL_OTHER_INFORMATION'
    ),
    'related_to' => array(
        'columnname' => 'related_to',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'related_to',
        'fieldlabel' => 'Related To',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '2',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '2',
        'quickcreatesequence' => '5',
        'info_type' => 'BAS',
        'masseditable' => '2',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '2',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OTHER_INFORMATION',
        'detailview_block_name' => 'LBL_OTHER_INFORMATION'
    ),
    'creator' => array(
        'columnname' => 'smcreatorid',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '52',
        'fieldname' => 'creator',
        'fieldlabel' => 'Creator',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '4',
        'displaytype' => '2',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '4',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OTHER_INFORMATION',
        'detailview_block_name' => 'LBL_OTHER_INFORMATION'
    ),
    'parent_comments' => array(
        'columnname' => 'parent_comments',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'parent_comments',
        'fieldlabel' => 'Related To Comments',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '7',
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
        'editview_sequence' => '7',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OTHER_INFORMATION',
        'detailview_block_name' => 'LBL_OTHER_INFORMATION'
    ),
    'source' => array(
        'columnname' => 'source',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'source',
        'fieldlabel' => 'Source',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '5',
        'displaytype' => '2',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '6',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '5',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'customer' => array(
        'columnname' => 'customer',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'customer',
        'fieldlabel' => 'Customer',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '6',
        'displaytype' => '3',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '6',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'userid' => array(
        'columnname' => 'userid',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'userid',
        'fieldlabel' => 'UserId',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '7',
        'displaytype' => '3',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '7',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'reasontoedit' => array(
        'columnname' => 'reasontoedit',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '19',
        'fieldname' => 'reasontoedit',
        'fieldlabel' => 'ReasonToEdit',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '8',
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
        'editview_sequence' => '8',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'is_private' => array(
        'columnname' => 'is_private',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '7',
        'fieldname' => 'is_private',
        'fieldlabel' => 'Is Private',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '9',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '9',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'filename' => array(
        'columnname' => 'filename',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '61',
        'fieldname' => 'filename',
        'fieldlabel' => 'Attachment',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '10',
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
        'editview_sequence' => '10',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'related_email_id' => array(
        'columnname' => 'related_email_id',
        'tablename' => 'vtiger_modcomments',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'related_email_id',
        'fieldlabel' => 'Related Email Id',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '0',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '11',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'createdby' => array(
        'columnname' => 'smcreatorid',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '52',
        'fieldname' => 'createdby',
        'fieldlabel' => 'LBL_CREATED_BY',
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
        'editview_presence' => '1',
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    ),
    'main_owner_id' => array(
        'columnname' => 'main_owner_id',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '53',
        'fieldname' => 'main_owner_id',
        'fieldlabel' => 'LBL_MAIN_OWNER_ID',
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
        'editview_block_name' => 'LBL_MODCOMMENTS_INFORMATION',
        'detailview_block_name' => 'LBL_MODCOMMENTS_INFORMATION'
    )
);

