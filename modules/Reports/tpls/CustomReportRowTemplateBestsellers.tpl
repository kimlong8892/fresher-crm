{strip}
    <tr>
        {foreach key=KEY item=VALUE from=$ROW_DATA}
            {if strpos($KEY, 'lbl_action') === false}
                <td {if $KEY != "productcategory"}style="text-align: right;"{/if} {if !$PRINT}nowrap{/if}>{$VALUE}</td>
            {/if}
        {/foreach}
    </tr>
{/strip}