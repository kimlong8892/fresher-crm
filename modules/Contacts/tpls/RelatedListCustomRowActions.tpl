{*
    File RelatedListCustomRowActions.tpl
    Author: Hieu Nguyen
    Date: 2019-12-26
    Purpose: to add custom buttons in related list rows
*}

{strip}
    {if $RELATED_MODULE_NAME eq 'Calendar'}
        {* Click to Call *}
        {assign var='CALL_CENTER_CONFIG' value=getGlobalVariable('callCenterConfig')}
        {assign var="CAN_MAKE_CALL" value=PBXManager_CallLog_Model::canMakeCall($RELATED_RECORD->getId())}

        {if $CALL_CENTER_CONFIG['enable'] eq true && $CAN_MAKE_CALL eq true}
            {assign var="CALL_INFO" value=PBXManager_CallLog_Model::getCallInfoToMakeCall($RELATED_RECORD->getId())}

            <a class="make-call" onclick='Vtiger_PBXManager_Js.makeCallWithPhoneSelector({$CALL_INFO.customer_id}, "{$CALL_INFO.customer_name}", {Zend_Json::encode($CALL_INFO.phone_numbers)}, "{$CALL_INFO.activity_id}");'>
                <i title="{vtranslate('LBL_MAKE_CALL', 'PBXManager')}" class="fa fa-phone"></i>
            </a>
        {/if}

        {* Play Recording *}
        {assign var="HAS_RECORDING" value=PBXManager_CallLog_Model::hasRecording($RELATED_RECORD->getId())}

        {if $HAS_RECORDING eq true}
            <a class="play-recording" data-call-id="{$RELATED_RECORD->getId()}" data-popup-title="{vtranslate('LBL_RECORDING_POPUP_TITLE', 'PBXManager', ['%call_subject' => $RELATED_RECORD->get('subject')])}">
                <i title="{vtranslate('LBL_RECORDING_POPUP_PLAY_RECORDING', 'PBXManager')}" class="fa fa-play"></i>
            </a>
        {/if}
    {/if}
{/strip}