{strip}
    <tr>
        {foreach key=KEY item=VALUE from=$ROW_DATA}
            {if $KEY == "total_money"}
                <td {if $KEY != "productcategory"}style="text-align: right;"{/if} {if !$PRINT}nowrap{/if}>{{number_format($VALUE, 0, '', ',')}}</td>
            {else}
                <td {if $KEY != "productcategory"}style="text-align: right;"{/if} {if !$PRINT}nowrap{/if}>{$VALUE}</td>
            {/if}
        {/foreach}
    </tr>
{/strip}