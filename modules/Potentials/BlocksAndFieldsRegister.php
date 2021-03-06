<?php

/* System auto-generated on 2019-12-24 05:06:10 pm. DANGER! DO NOT EDIT THIS FILE!!!! */

$editViewBlocks = array(
    'LBL_OPPORTUNITY_INFORMATION' => array(
        'blocklabel' => 'LBL_OPPORTUNITY_INFORMATION',
        'sequence' => '1',
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
        'sequence' => '2',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_DESCRIPTION_INFORMATION' => array(
        'blocklabel' => 'LBL_DESCRIPTION_INFORMATION',
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
    'LBL_OPPORTUNITY_INFORMATION' => array(
        'blocklabel' => 'LBL_OPPORTUNITY_INFORMATION',
        'sequence' => '1',
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
        'sequence' => '2',
        'show_title' => '0',
        'visible' => '0',
        'create_view' => '0',
        'edit_view' => '0',
        'detail_view' => '0',
        'display_status' => '1',
        'iscustom' => '0'
    ),
    'LBL_DESCRIPTION_INFORMATION' => array(
        'blocklabel' => 'LBL_DESCRIPTION_INFORMATION',
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
    'potentialname' => array(
        'columnname' => 'potentialname',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '2',
        'fieldname' => 'potentialname',
        'fieldlabel' => 'Potential Name',
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
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '1',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'potential_no' => array(
        'columnname' => 'potential_no',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '4',
        'fieldname' => 'potential_no',
        'fieldlabel' => 'Potential No',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '2',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '2',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'amount' => array(
        'columnname' => 'amount',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '71',
        'fieldname' => 'amount',
        'fieldlabel' => 'Amount',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '5',
        'displaytype' => '1',
        'typeofdata' => 'N~O',
        'quickcreate' => '2',
        'quickcreatesequence' => '5',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '1',
        'isunique' => '0',
        'editview_sequence' => '5',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'related_to' => array(
        'columnname' => 'related_to',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'related_to',
        'fieldlabel' => 'Related To',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '3',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '0',
        'quickcreatesequence' => '2',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '1',
        'isunique' => '0',
        'editview_sequence' => '3',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'closingdate' => array(
        'columnname' => 'closingdate',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '23',
        'fieldname' => 'closingdate',
        'fieldlabel' => 'Expected Close Date',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '8',
        'displaytype' => '1',
        'typeofdata' => 'D~M',
        'quickcreate' => '2',
        'quickcreatesequence' => '3',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '8',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'opportunity_type' => array(
        'columnname' => 'potentialtype',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'opportunity_type',
        'fieldlabel' => 'Type',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '7',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '7',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'nextstep' => array(
        'columnname' => 'nextstep',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'nextstep',
        'fieldlabel' => 'Next Step',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '10',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '10',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'leadsource' => array(
        'columnname' => 'leadsource',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'leadsource',
        'fieldlabel' => 'Lead Source',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '9',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '9',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'sales_stage' => array(
        'columnname' => 'sales_stage',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'sales_stage',
        'fieldlabel' => 'Sales Stage',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '12',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '2',
        'quickcreatesequence' => '4',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '1',
        'isunique' => '0',
        'editview_sequence' => '12',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'assigned_user_id' => array(
        'columnname' => 'smownerid',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '53',
        'fieldname' => 'assigned_user_id',
        'fieldlabel' => 'Assigned To',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '11',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '0',
        'quickcreatesequence' => '6',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '11',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'probability' => array(
        'columnname' => 'probability',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'probability',
        'fieldlabel' => 'Probability',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '14',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '14',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'campaignid' => array(
        'columnname' => 'campaignid',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '58',
        'fieldname' => 'campaignid',
        'fieldlabel' => 'Campaign Source',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '13',
        'displaytype' => '1',
        'typeofdata' => 'N~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '13',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
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
        'sequence' => '16',
        'displaytype' => '2',
        'typeofdata' => 'DT~O',
        'quickcreate' => '3',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '16',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
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
        'sequence' => '15',
        'displaytype' => '2',
        'typeofdata' => 'DT~O',
        'quickcreate' => '3',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '15',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'modifiedby' => array(
        'columnname' => 'modifiedby',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '52',
        'fieldname' => 'modifiedby',
        'fieldlabel' => 'Last Modified By',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '17',
        'displaytype' => '3',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '17',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'description' => array(
        'columnname' => 'description',
        'tablename' => 'vtiger_crmentity',
        'generatedtype' => '1',
        'uitype' => '19',
        'fieldname' => 'description',
        'fieldlabel' => 'Description',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '1',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '1',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_DESCRIPTION_INFORMATION',
        'detailview_block_name' => 'LBL_DESCRIPTION_INFORMATION'
    ),
    'forecast_amount' => array(
        'columnname' => 'forecast_amount',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '71',
        'fieldname' => 'forecast_amount',
        'fieldlabel' => 'Forecast Amount',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '18',
        'displaytype' => '1',
        'typeofdata' => 'N~O',
        'quickcreate' => '1',
        'quickcreatesequence' => '0',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '18',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'isconvertedfromlead' => array(
        'columnname' => 'isconvertedfromlead',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '56',
        'fieldname' => 'isconvertedfromlead',
        'fieldlabel' => 'Is Converted From Lead',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => 'no',
        'maximumlength' => '100',
        'sequence' => '19',
        'displaytype' => '1',
        'typeofdata' => 'C~O',
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
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'contact_id' => array(
        'columnname' => 'contact_id',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '10',
        'fieldname' => 'contact_id',
        'fieldlabel' => 'Contact Name',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '4',
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
        'editview_sequence' => '4',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
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
        'sequence' => '20',
        'displaytype' => '2',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '7',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '20',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'starred' => array(
        'columnname' => 'starred',
        'tablename' => 'vtiger_crmentity_user_field',
        'generatedtype' => '1',
        'uitype' => '56',
        'fieldname' => 'starred',
        'fieldlabel' => 'starred',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '21',
        'displaytype' => '6',
        'typeofdata' => 'C~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '8',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '21',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'tags' => array(
        'columnname' => 'tags',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'tags',
        'fieldlabel' => 'tags',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '22',
        'displaytype' => '6',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '9',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '22',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
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
        'sequence' => '23',
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
        'editview_sequence' => '23',
        'editview_presence' => '1',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
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
        'sequence' => '24',
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
        'editview_sequence' => '24',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'potentialresult' => array(
        'columnname' => 'potentialresult',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'potentialresult',
        'fieldlabel' => 'LBL_POTENTIAL_RESULT',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '18',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '18',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
    'potentiallostreason' => array(
        'columnname' => 'potentiallostreason',
        'tablename' => 'vtiger_potential',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'potentiallostreason',
        'fieldlabel' => 'LBL_POTENTIAL_LOST_REASON',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '20',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '20',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_OPPORTUNITY_INFORMATION',
        'detailview_block_name' => 'LBL_OPPORTUNITY_INFORMATION'
    ),
);

