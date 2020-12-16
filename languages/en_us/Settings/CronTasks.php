<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
$languageStrings = array(
	'CronTasks' => 'Scheduler',

	//Basic Field Names
	'Id' => 'Id',
	'Cron Job' => 'Cron Job',
	'Frequency' => 'Frequency',
	'Status' => 'Status',
	'Last Start' => 'Last scan started',
	'Last End' => 'Last scan ended',
	'Sequence' => 'Sequence',

	//Actions
	'LBL_COMPLETED' => 'Completed',
	'LBL_RUNNING' => 'Running',
	'LBL_ACTIVE' => 'Active',
	'LBL_INACTIVE' => 'In Active',

	// Added by Hieu Nguyen on 2018-08-18
	'LBL_BTN_RESET_TITLE' => 'Reset'
	// End Hieu Nguyen
);

$jsLanguageStrings = array(
	'JS_RESET_CONFIRM_MSG' => "This action will reset this Cron Task so that it can run again from begining.\nCaution: use this action only when the Cron Task is stuck, or you will face with the issue of re-running logic!",
	'JS_RESET_SUCCESS_MSG' => 'Reset Cron Task successfully!',
	'JS_RESET_ERROR_MSG' => 'Can not reset Cron Task. Please try again!',
);
