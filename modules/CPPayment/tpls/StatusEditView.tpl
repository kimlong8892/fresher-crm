{*
    StatusEditView.tpl
    Author: Phuc Lu
    Date: 2019.08.15
*}

{strip}
    {if (isset($IS_DUPLICATE) && $IS_DUPLICATE == 1) || $RECORD->get('cppayment_status') == 'not_completed' || $RECORD->get('cppayment_status') == ''}
        <span class="span-status not_completed">{vtranslate("not_completed", $MODULE_NAME)}</span>
    {else}
        <span class="span-status {$RECORD->get('cppayment_status')}">{vtranslate($RECORD->get('cppayment_status'), $MODULE_NAME)}</span>
    {/if}
    <span style="display:none">{include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(), $MODULE_NAME)}</span>
{/strip}