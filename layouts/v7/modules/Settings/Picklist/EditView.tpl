{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{* modules/Settings/Picklist/views/IndexAjax.php *}

{* START YOUR IMPLEMENTATION FROM BELOW. Use {debug} for information *}
{strip}
    <div class="modal-dialog">
        <div class='modal-content'>
            {assign var=HEADER_TITLE value={vtranslate('LBL_EDIT_PICKLIST_ITEM', $QUALIFIED_MODULE)}}
            {include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
            <form id="renameItemForm" class="form-horizontal" method="post" action="index.php">
                <input type="hidden" name="module" value="{$MODULE}" />
                <input type="hidden" name="parent" value="Settings" />
                <input type="hidden" name="source_module" value="{$SOURCE_MODULE}" />
                <input type="hidden" name="action" value="SaveAjax" />
                <input type="hidden" name="mode" value="edit" />
                <input type="hidden" name="picklistName" value="{$FIELD_MODEL->get('name')}" />
                <input type="hidden" name="pickListValues" value='{Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($SELECTED_PICKLISTFIELD_EDITABLE_VALUES))}' />
                <input type="hidden" name="picklistColorMap" value='{Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode(Settings_Picklist_Module_Model::getPicklistColorMap($FIELD_MODEL->get('name'))))}' />
                <div class="modal-body tabbable">
                    {* Modified by Hieu Nguyen on 2019-05-28 *}
                    <div class="form-group" style="display: none">
                        <div class="control-label col-sm-4 col-xs-4">{vtranslate('LBL_ITEM_TO_RENAME',$QUALIFIED_MODULE)}</div>
                        <div class="controls col-sm-5 col-xs-5">
                            {assign var=PICKLIST_VALUES value=$SELECTED_PICKLISTFIELD_EDITABLE_VALUES}
                            <select class="select2 form-control" name="oldValue">
                                {foreach from=$PICKLIST_VALUES key=PICKLIST_VALUE_KEY item=PICKLIST_VALUE}
                                    <option {if $FIELD_VALUE eq $PICKLIST_VALUE} selected="" {/if}value="{Vtiger_Util_Helper::toSafeHTML($PICKLIST_VALUE)}" data-id={$PICKLIST_VALUE_KEY}>{vtranslate($PICKLIST_VALUE,$SOURCE_MODULE)}</option>
                                {/foreach}
                                {if $SELECTED_PICKLISTFIELD_NON_EDITABLE_VALUES}
                                    {foreach from=$SELECTED_PICKLISTFIELD_NON_EDITABLE_VALUES key=NON_EDITABLE_VALUE_KEY item=NON_EDITABLE_VALUE}
                                        <option data-edit-disabled="true" {if $FIELD_VALUE eq $NON_EDITABLE_VALUE} selected="" {/if}value="{Vtiger_Util_Helper::toSafeHTML($NON_EDITABLE_VALUE)}" data-id={$NON_EDITABLE_VALUE_KEY}>{vtranslate($NON_EDITABLE_VALUE,$SOURCE_MODULE)}</option>
                                    {/foreach}
                                {/if}
                            </select>	
                        </div><br>
                    </div>

                    <div class="form-group">
                        <div class="control-label col-sm-4 col-xs-4">
                            {vtranslate('LBL_ITEM_VALUE', $QUALIFIED_MODULE)} &nbsp;
                            <span class="redColor">*</span>
                        </div>
                        <div class="controls col-sm-8 col-xs-8">
                            <input type="text" name="renamedValue" class="form-control" 
                                {if in_array($FIELD_VALUE, $SELECTED_PICKLISTFIELD_NON_EDITABLE_VALUES)} disabled='disabled' {/if} 
                                data-rule-required="true" value="{Vtiger_Util_Helper::toSafeHTML($FIELD_VALUE)}" style="max-width: 220px;"
                            >
                            <i>{vtranslate('LBL_ITEM_VALUE_INPUT_HINT', $QUALIFIED_MODULE)}</i>
                        </div>
                    </div>
                
					<div class="form-group">
						<label class="control-label col-sm-4 col-xs-4">
							{vtranslate('LBL_ITEM_LABEL_DISPLAY_EN', $QUALIFIED_MODULE)} &nbsp;
							<span class="redColor">*</span>
						</label>
						<div class="controls col-sm-8 col-xs-8">
							<input type="text" name="itemLabelDisplayEn" value="{$LABEL_DISPLAY_EN}" class="form-control" data-rule-required="true" style="max-width: 220px;"/>
						</div>
					</div>

                    <div class="form-group">
						<label class="control-label col-sm-4 col-xs-4">
							{vtranslate('LBL_ITEM_LABEL_DISPLAY_VN', $QUALIFIED_MODULE)} &nbsp;
							<span class="redColor">*</span>
						</label>
						<div class="controls col-sm-8 col-xs-8">
							<input type="text" name="itemLabelDisplayVn" value="{$LABEL_DISPLAY_VN}" class="form-control" data-rule-required="true" style="max-width: 220px;"/>
						</div>
					</div>
                    {* End Hieu Nguyen *}

                    <div class="form-group">
                        <div class="control-label col-sm-4 col-xs-4">{vtranslate('LBL_SELECT_COLOR', $QUALIFIED_MODULE)}</div>
                        <div class="controls col-sm-8 col-xs-8">
                            <input type="hidden" name="selectedColor" value="{Settings_Picklist_Module_Model::getPicklistColor($FIELD_MODEL->get('name'), $FIELD_VALUE_ID)}" />
                            <div class="colorPicker">
                            </div>
                        </div>
                    </div>
                </div>
                {include file='ModalFooter.tpl'|@vtemplate_path:$qualifiedName}
            </form>
        </div>
    </div>
{/strip}
