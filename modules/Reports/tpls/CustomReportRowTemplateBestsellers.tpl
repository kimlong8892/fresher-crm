{strip}
    <tr>
        {foreach key=KEY item=VALUE from=$ROW_DATA}
            {if strpos($KEY, 'lbl_action') === false}
                <td {if !$PRINT}nowrap{/if}>{$VALUE}</td>
            {else if !$PRINT}
                <td><a target="_BLANK" href="index.php?module=Contacts&view=Detail&record={$VALUE}">{vtranslate('LBL_VIEW_DETAILS')}</a></td>
            {/if}
        {/foreach}
    </tr>
{/strip}