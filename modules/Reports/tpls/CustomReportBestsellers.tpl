{strip}
    <style>

    </style>

    <div {if $PRINT}style="width:80%; margin:auto"{/if}>
        <h2>{$REPORT_NAME}</h2>

        <table cellpadding="5" cellpadding="0" class="{if !$PRINT}table table-bordered{else}printReport reportPrintData{/if}">
            <thead>
            <tr class="blockHeader" style="background: blue; color: white;">
                {foreach item=HEADER_NAME from=$REPORT_HEADERS}
                    <th {if !$PRINT}nowrap{/if}>{$HEADER_NAME}</th>
                {/foreach}
            </tr>
            </thead>
            <tbody>
            {$REPORT_RESULT}
            </tbody>
        </table>
    </div>
{/strip}