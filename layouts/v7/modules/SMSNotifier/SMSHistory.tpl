 {*
    Author: Phuc Lu
    Date: 2020.02.18
*}

{strip}
    <link type="text/css" rel="stylesheet" href="{vresource_url("layouts/v7/modules/SMSNotifier/resources/SMSHistory.css")}">
    <script type="text/javascript" src="{vresource_url("layouts/v7/modules/SMSNotifier/resources/SMSHistory.js")}"></script>

	<div class="summaryView">
		<div class="summaryViewHeader" style="margin-bottom: 15px">
			<h4 class="display-inline-block">{vtranslate('LBL_SMS_HISTORY_SUMMARY_VIEW', 'SMSNotifier')}</h4>
		</div>
		<div class="summaryViewFields">
			<table id="SMSTableDetail" class='table table-bordered dataTable no-footer'>
                <thead>
                    <tr>
                        <th width="35%">{vtranslate('LBL_SMS_HISTORY_MESSAGE', 'SMSNotifier')}</th>
                        <th width="15%">{vtranslate('LBL_SMS_HISTORY_PHONE_NUMBER', 'SMSNotifier')}</th>
                        <th width="20%">{vtranslate('LBL_SMS_HISTORY_DATE_CREATED', 'SMSNotifier')}</th>
                        <th width="15%">{vtranslate('LBL_SMS_HISTORY_STATUS', 'SMSNotifier')}</th>
                        <th width="15%">{vtranslate('LBL_SMS_HISTORY_STATUS_MESSAGE', 'SMSNotifier')}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
		</div>
	</div>
{/strip}