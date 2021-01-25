{strip}
    <tr style="background: black; color: white;">
        {foreach key=KEY item=VALUE from=$ROW_DATA}
            {if $KEY != "list_product"}
                <td colspan="4" {if !$PRINT}nowrap{/if}>{$VALUE}</td>
            {/if}
        {/foreach}
    </tr>

    {foreach key=KEY_PRODUCT item=VALUE_PRODUCT from=$LIST_PRODUCT}
        <tr>
            <td {if !$PRINT}nowrap{/if}>{$VALUE_PRODUCT['serialno']}</td>
            <td {if !$PRINT}nowrap{/if}>{$VALUE_PRODUCT['productname']}</td>
            <td style="text-align: right !important;" {if !$PRINT}nowrap{/if}>{$VALUE_PRODUCT['createdtime']}</td>
            <td style="text-align: right !important;" {if !$PRINT}nowrap{/if}>{number_format($VALUE_PRODUCT['unit_price'], 0, '', ',')}</td>
        </tr>
    {/foreach}

{/strip}