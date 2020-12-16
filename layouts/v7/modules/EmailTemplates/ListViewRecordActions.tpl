{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{strip}
<!--LIST VIEW RECORD ACTIONS-->

<div class="table-actions">
    {if !$SEARCH_MODE_RESULTS}
    <span class="input" >
        <input type="checkbox" value="{$LISTVIEW_ENTRY->getId()}" class="listViewEntriesCheckBox"/>
    </span>
    {/if}

    {* Added by Hieu Nguyen on 2019-11-05 to load module custom listview row actions *}
    {assign var="CUSTOM_ROW_ACTIONS" value="modules/$MODULE/tpls/ListViewCustomRowActions.tpl"}

    {if file_exists($CUSTOM_ROW_ACTIONS)}
        {include file=$CUSTOM_ROW_ACTIONS}
    {/if}
    {* End Hieu Nguyen *}

    <span class="more dropdown action">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></a>
        <ul class="dropdown-menu">
            <li><a data-id="{$LISTVIEW_ENTRY->getId()}" href="{$LISTVIEW_ENTRY->getFullDetailViewUrl()}">{vtranslate('LBL_DETAILS', $MODULE)}</a></li>
            <li><a data-id="{$LISTVIEW_ENTRY->getId()}" href="{$LISTVIEW_ENTRY->getEditViewUrl()}" name="editlink">{vtranslate('LBL_EDIT', $MODULE)}</a></li>    {* Modified by Hieu Nguyen on 2020-05-28 to fix edit record button *}
            <li><a data-id="{$LISTVIEW_ENTRY->getId()}" class="deleteRecordButton">{vtranslate('LBL_DELETE', $MODULE)}</a></li>

            {* Added by Hieu Nguyen on 2019-11-05 to load module custom listview row advanced actions *}
            {assign var="CUSTOM_ROW_ADVANCED_ACTIONS" value="modules/$MODULE/tpls/ListViewCustomRowAdvancedActions.tpl"}

            {if file_exists($CUSTOM_ROW_ADVANCED_ACTIONS)}
                {include file=$CUSTOM_ROW_ADVANCED_ACTIONS}
            {/if}
            {* End Hieu Nguyen *}
        </ul>
    </span>
            
    <div class="btn-group inline-save hide">
        <button class="button btn-success btn-small save" name="save"><i class="fa fa-check"></i></button>
        <button class="button btn-danger btn-small cancel" name="Cancel"><i class="fa fa-close"></i></button>
    </div>
</div>
{/strip}
