<?php

/* System auto-generated on 2019-09-19 11:55:38 am. DANGER! DO NOT EDIT THIS FILE!!!! */

$editViewBlocks = array(
    'LBL_CAMPAIGN_INFORMATION' => array(
        'blocklabel' => 'LBL_CAMPAIGN_INFORMATION',
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
    'LBL_EXPECTATIONS_AND_ACTUALS' => array(
        'blocklabel' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'sequence' => '3',
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
        'sequence' => '4',
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
    'LBL_CAMPAIGN_INFORMATION' => array(
        'blocklabel' => 'LBL_CAMPAIGN_INFORMATION',
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
    'LBL_EXPECTATIONS_AND_ACTUALS' => array(
        'blocklabel' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'sequence' => '3',
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
        'sequence' => '4',
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
    'campaignname' => array(
        'columnname' => 'campaignname',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '2',
        'fieldname' => 'campaignname',
        'fieldlabel' => 'Campaign Name',
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
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'campaign_no' => array(
        'columnname' => 'campaign_no',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '4',
        'fieldname' => 'campaign_no',
        'fieldlabel' => 'Campaign No',
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
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'campaigntype' => array(
        'columnname' => 'campaigntype',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'campaigntype',
        'fieldlabel' => 'Campaign Type',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '5',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '2',
        'quickcreatesequence' => '3',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '5',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'product_id' => array(
        'columnname' => 'product_id',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '59',
        'fieldname' => 'product_id',
        'fieldlabel' => 'Product',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '6',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
        'quickcreate' => '2',
        'quickcreatesequence' => '5',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '6',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'campaignstatus' => array(
        'columnname' => 'campaignstatus',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'campaignstatus',
        'fieldlabel' => 'Campaign Status',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '4',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '2',
        'quickcreatesequence' => '6',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '4',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'closingdate' => array(
        'columnname' => 'closingdate',
        'tablename' => 'vtiger_campaign',
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
        'quickcreatesequence' => '2',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '8',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
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
        'sequence' => '3',
        'displaytype' => '1',
        'typeofdata' => 'V~M',
        'quickcreate' => '0',
        'quickcreatesequence' => '7',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '3',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'numsent' => array(
        'columnname' => 'numsent',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '9',
        'fieldname' => 'numsent',
        'fieldlabel' => 'Num Sent',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '12',
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
        'editview_sequence' => '12',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'sponsor' => array(
        'columnname' => 'sponsor',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'sponsor',
        'fieldlabel' => 'Sponsor',
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
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'targetaudience' => array(
        'columnname' => 'targetaudience',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'targetaudience',
        'fieldlabel' => 'Target Audience',
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
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'targetsize' => array(
        'columnname' => 'targetsize',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'targetsize',
        'fieldlabel' => 'TargetSize',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '10',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
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
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
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
        'sequence' => '11',
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
        'editview_sequence' => '11',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
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
        'sequence' => '13',
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
        'editview_sequence' => '13',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
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
        'sequence' => '16',
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
        'editview_sequence' => '16',
        'editview_presence' => '0',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'expectedresponse' => array(
        'columnname' => 'expectedresponse',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '15',
        'fieldname' => 'expectedresponse',
        'fieldlabel' => 'Expected Response',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '3',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '2',
        'quickcreatesequence' => '4',
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '3',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'expectedrevenue' => array(
        'columnname' => 'expectedrevenue',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '71',
        'fieldname' => 'expectedrevenue',
        'fieldlabel' => 'Expected Revenue',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '4',
        'displaytype' => '1',
        'typeofdata' => 'N~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '1',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '4',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'budgetcost' => array(
        'columnname' => 'budgetcost',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '71',
        'fieldname' => 'budgetcost',
        'fieldlabel' => 'Budget Cost',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '1',
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
        'editview_sequence' => '1',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'actualcost' => array(
        'columnname' => 'actualcost',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '71',
        'fieldname' => 'actualcost',
        'fieldlabel' => 'Actual Cost',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '2',
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
        'editview_sequence' => '2',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'expectedresponsecount' => array(
        'columnname' => 'expectedresponsecount',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'expectedresponsecount',
        'fieldlabel' => 'Expected Response Count',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '7',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
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
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'expectedsalescount' => array(
        'columnname' => 'expectedsalescount',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'expectedsalescount',
        'fieldlabel' => 'Expected Sales Count',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '5',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '5',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'expectedroi' => array(
        'columnname' => 'expectedroi',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '71',
        'fieldname' => 'expectedroi',
        'fieldlabel' => 'Expected ROI',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '9',
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
        'editview_sequence' => '9',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'actualresponsecount' => array(
        'columnname' => 'actualresponsecount',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'actualresponsecount',
        'fieldlabel' => 'Actual Response Count',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '8',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '8',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'actualsalescount' => array(
        'columnname' => 'actualsalescount',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'actualsalescount',
        'fieldlabel' => 'Actual Sales Count',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '6',
        'displaytype' => '1',
        'typeofdata' => 'I~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '1',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '6',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
    ),
    'actualroi' => array(
        'columnname' => 'actualroi',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '71',
        'fieldname' => 'actualroi',
        'fieldlabel' => 'Actual ROI',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '10',
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
        'editview_sequence' => '10',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS',
        'detailview_block_name' => 'LBL_EXPECTATIONS_AND_ACTUALS'
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
    'campaignrelstatus' => array(
        'columnname' => 'campaignrelstatus',
        'tablename' => 'vtiger_campaignrelstatus',
        'generatedtype' => '1',
        'uitype' => '16',
        'fieldname' => 'campaignrelstatus',
        'fieldlabel' => 'Status',
        'readonly' => '1',
        'presence' => '0',
        'defaultvalue' => '0',
        'maximumlength' => '100',
        'sequence' => '1',
        'displaytype' => '1',
        'typeofdata' => 'V~O',
        'quickcreate' => '1',
        'quickcreatesequence' => null,
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => null,
        'summaryfield' => '0',
        'headerfield' => '0',
        'isunique' => '0',
        'editview_sequence' => '1',
        'editview_presence' => '0',
        'editview_block_name' => null,
        'detailview_block_name' => null
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
        'sequence' => '17',
        'displaytype' => '2',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '8',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '17',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
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
        'sequence' => '18',
        'displaytype' => '6',
        'typeofdata' => 'C~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '9',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '18',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    ),
    'tags' => array(
        'columnname' => 'tags',
        'tablename' => 'vtiger_campaign',
        'generatedtype' => '1',
        'uitype' => '1',
        'fieldname' => 'tags',
        'fieldlabel' => 'tags',
        'readonly' => '1',
        'presence' => '2',
        'defaultvalue' => '',
        'maximumlength' => '100',
        'sequence' => '19',
        'displaytype' => '6',
        'typeofdata' => 'V~O',
        'quickcreate' => '3',
        'quickcreatesequence' => '10',
        'info_type' => 'BAS',
        'masseditable' => '0',
        'helpinfo' => '',
        'summaryfield' => '0',
        'headerfield' => null,
        'isunique' => '0',
        'editview_sequence' => '19',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
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
        'editview_presence' => '1',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
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
        'sequence' => '21',
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
        'editview_sequence' => '21',
        'editview_presence' => '2',
        'editview_block_name' => 'LBL_CAMPAIGN_INFORMATION',
        'detailview_block_name' => 'LBL_CAMPAIGN_INFORMATION'
    )
);

