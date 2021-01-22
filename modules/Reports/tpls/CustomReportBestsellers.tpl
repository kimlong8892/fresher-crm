{strip}
    <style>
        form#detailView{
            display: none !important;
        }
    </style>
    <script src="{vresource_url('modules/Reports/resources/BestsellersHandler.js')}"></script>
    <div {if $PRINT}style="width:80%; margin:auto"{/if}>
        <h2 style="text-align: center;">{$REPORT_NAME}</h2>
        <form id="form-filter-date" action="" method="post">
            <div class="form-group" style="display: flex;">
                <div class="input-group inputElement col-sm-4" style="width: 30%;">
                    <input type="text" name="start_date"
                           data-fieldtype="date"
                           class="form-control datePicker"
                           autocomplete="off"
                           placeholder="{vtranslate('PLACEHOLDER_START_DATE_BEST_SELLERS', 'Reports')}"
                           data-rule-required="true"/>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
                <div class="input-group inputElement col-sm-4" style="width: 30%; margin-left: 5px;">
                    <input type="text" name="end_date"
                           data-fieldtype="date"
                           class="form-control datePicker"
                           autocomplete="off"
                           placeholder="{vtranslate('PLACEHOLDER_END_DATE_BEST_SELLERS', 'Reports')}"
                           data-rule-required="true"/>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
                <div class="col-sm-4" style="width: 15%">
                    <button class="btn btn-primary">{vtranslate('LBL_BTN_REPORT', 'Reports')}</button>
                </div>
            </div>
        </form>
        {if $IS_EMPTY_REPORT_RESULT}
            <h1 style="color: #cb2134; text-align: center;">{vtranslate('LBL_RESULT_EMPTY', 'Reports')}</h1>
        {/if}
        <table {if empty($REPORT_RESULT)}style="display: none;" {/if} cellpadding="5" cellpadding="0" class="{if !$PRINT}table table-bordered{else}printReport reportPrintData{/if}">
            <thead>
                <tr class="blockHeader" style="background: blue; color: white;">
                    <th>
                        {vtranslate('LBL_PRODUCT_CATEGORY_NAME', 'Reports')}
                    </th>
                    <th>
                        {vtranslate('LBL_TOTAL_AMOUNT_NAME', 'Reports')}
                    </th>
                    <th>
                        {vtranslate('LBL_TOTAL_MONEY_NAME', 'Reports')}
                    </th>
                </tr>
            </thead>
            <tbody>
            {$REPORT_RESULT}
            </tbody>
        </table>
    </div>
{/strip}