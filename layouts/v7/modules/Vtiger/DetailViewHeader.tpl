{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}

{* Added by Hieu Nguyen on 2019-06-11 to show hidden input for main_owner_id *}
    <input type="hidden" name="main_owner_id" value="{if $RECORD}{$RECORD->fetchedRow['main_owner_id']}{/if}"/>
{* End Hieu Nguyen *}

{* Modified by Hieu Nguyen on 2018-07-16 to load custom code *}
{if $DISPLAY_PARAMS['form'] && $DISPLAY_PARAMS['form']['hiddenFields'] neq null}
    {eval var=$DISPLAY_PARAMS['form']['hiddenFields']}
{/if}

{if $DISPLAY_PARAMS['scripts'] neq null}
    {eval var=$DISPLAY_PARAMS['scripts']}
{/if}
{* End Hieu Nguyen *}
    
<div class=" detailview-header-block">
    <div class="detailview-header">
        <div class="row">
            {include file="DetailViewHeaderTitle.tpl"|vtemplate_path:$MODULE}
            {include file="DetailViewActions.tpl"|vtemplate_path:$MODULE}
        </div>
        
        {* Added by Kelvin Thang on 2018-12-13 to load Navigation custom *}
        {if $NAVIGATION_DATA}
            {* Modified by Hieu Nguyen on 2019-11-05 to load module custom navigation if exists *}
            {assign var="CUSTOM_NAVIGATION" value="modules/$MODULE/tpls/CustomNavigation.tpl"}

            {if file_exists($CUSTOM_NAVIGATION)}
                {include file=$CUSTOM_NAVIGATION}
            {else}
                {include file="modules/Vtiger/tpls/Navigation/Navigation.tpl"}
            {/if}
            {* End Hieu Nguyen *}
        {/if}
        {* End Kelvin Thang *}
</div>
    
