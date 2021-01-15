{strip}
    <div {if $PRINT}style="width:80%; margin:auto"{/if}>
        <h2>{$REPORT_NAME}</h2>

        <table cellpadding="5" cellpadding="0" class="{if !$PRINT}table table-bordered{else}printReport reportPrintData{/if}">
            <thead>
            <tr class="blockHeader">
                {foreach item=HEADER_NAME from=$REPORT_HEADERS}
                    <th style="color: white;" {if !$PRINT}nowrap{/if}>{$HEADER_NAME}</th>
                {/foreach}
                <th style="color: white;" {if !$PRINT}nowrap{/if}>{vtranslate('LBL_AGE', $PRIMARY_MODULE)}</th>
                {if !$PRINT}<th nowrap>{vtranslate('LBL_ACTION')}</th>{/if}
            </tr>
            </thead>
            <tbody>
                {$REPORT_RESULT}
            </tbody>
        </table>
    </div>
{/strip}