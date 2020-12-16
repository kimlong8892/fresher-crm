{* Added by Hieu Nguyen on 2019-11-22 to customize user invitees field *}

{strip}
    <input type="text" autocomplete="off" class="inputElement select2" style="width: 100%"
        data-fieldtype="text" data-fieldname="user_invitees" data-name="user_invitees" name="user_invitees"
        {if $RECORD->get('user_invitees')} data-selected-tags='{ZEND_JSON::encode(Vtiger_Owner_UIType::getCurrentOwners($RECORD->get('user_invitees')))}' {/if}
    />
{/strip}