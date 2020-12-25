{strip}
    <label>
        <input type="radio" name="accounts_type" value="B2B" {if ($RECORD && $RECORD->get('accounts_type') == "B2B") || ($RECORD->get('accounts_type') == "")}checked{/if}>
        <span>{vtranslate("LBL_ACCOUNTS_TYPE_B2B", $QUALIFIED_MODULE)}</span>
    </label>
    &nbsp;
    <label>
        <input type="radio" name="accounts_type" value="B2C" {if $RECORD && $RECORD->get('accounts_type') == "B2C"}checked{/if}>
        <span>{vtranslate("LBL_ACCOUNTS_TYPE_B2C", $QUALIFIED_MODULE)}</span>
    </label>
{/strip}