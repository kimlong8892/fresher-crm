{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
<!-- Modified By Kelvin Thang -- Date: 2018-06-27 -->
{strip}
<style>
	.app-footer p {
		position: fixed;
		left: 0;
		bottom: 0;
		background: #FBFBFB;
		margin-bottom: 0;
		padding: 4px 0;
		border-top: 1px solid #DDDDDD;
	}
</style>
{/strip}
<footer class="app-footer">
	<p>
		<a href="http://www.cloudpro.vn/" target="_blank">
			{if $CHECK_ACTION == Login}
                {php} echo $GLOBALS['slogans']['login']; {/php}
			{else}
                {php} echo $GLOBALS['slogans']['default']; {/php}
			{/if}
		</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint">{Zend_Json::encode($LANGUAGE_STRINGS)}</div>
<div class="modal myModal fade"></div>
{include file='JSResources.tpl'|@vtemplate_path}

{* Added by Hieu Nguyen on 2018-10-02 *}
{if $CURRENT_USER_MODEL && $CURRENT_USER_MODEL->get('id')} {* [Core] Modified by Phu Vo on 2020.03.24 check current user before use it *}
    {include file="modules/PBXManager/tpls/CallPopup.tpl"}
    {* {include file="modules/CPSocialIntegration/tpls/SocialMessagePopup.tpl"} *}

    {* Added by Hieu Nguyen on 2019-07-22 *}
	<div style="display: none">
        <!-- Small-Size Modal Template -->
        <div class="modal-dialog modal-sm modal-content modal-template-sm">
			{include file='ModalHeader.tpl'|vtemplate_path:$MODULE}
            <form class="form-horizontal" method="POST">
                <div class="modal-body margin10"></div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-success" type="submit">OK</button>
                        <a href="#" class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', 'Vtiger')}</a>
                    </center>
                </div>
            </form>
		</div>

        <!-- Medium-Size Modal Template -->
		<div class="modal-dialog modal-md modal-content modal-template-md">
			{include file='ModalHeader.tpl'|vtemplate_path:$MODULE}
			<form class="form-horizontal" method="POST">
                <div class="modal-body margin10"></div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-success" type="submit">OK</button>
                        <a href="#" class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', 'Vtiger')}</a>
                    </center>
                </div>
            </form>
		</div>

		{* Added by Phu vo on 2019.03.26 *}
		<!-- Large-Size Modal Template -->
		<div class="modal-dialog modal-lg modal-content modal-template-lg">
			{include file='ModalHeader.tpl'|vtemplate_path:$MODULE}
			<form class="form-horizontal" method="POST">
                <div class="modal-body margin10"></div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-success" type="submit">OK</button>
                        <a href="#" class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', 'Vtiger')}</a>
                    </center>
                </div>
            </form>
		</div>
		{* End Phu Vo *}
	</div>
	{* End Hieu Nguyen *}
{/if}
{* End Hieu Nguyen *}
</body>

</html>
