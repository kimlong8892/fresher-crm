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
                <div style="width: 30%;">
                    <label for="start_date">{vtranslate('PLACEHOLDER_START_DATE_BEST_SELLERS', 'Reports')}</label>
                    <div class="input-group inputElement col-sm-4">
                        <input type="text" name="start_date"
                               data-fieldtype="date"
                               class="form-control datePicker"
                               autocomplete="off"
                               placeholder="{vtranslate('PLACEHOLDER_START_DATE_BEST_SELLERS', 'Reports')}"
                               value="{if !empty($START_DATE)}{$START_DATE}{/if}"
                               data-date-format="{$DATE_FORMAT}"
                               data-rule-required="true"/>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
                <div style="width: 30%; margin-left: 5px;">
                    <label for="start_date">{vtranslate('PLACEHOLDER_END_DATE_BEST_SELLERS', 'Reports')}</label>
                    <div class="input-group inputElement col-sm-4">
                        <input type="text" name="end_date"
                               data-fieldtype="date"
                               class="form-control datePicker"
                               autocomplete="off"
                               placeholder="{vtranslate('PLACEHOLDER_END_DATE_BEST_SELLERS', 'Reports')}"
                               value="{if !empty($END_DATE)}{$END_DATE}{/if}"
                               data-date-format="{$DATE_FORMAT}"
                               data-rule-required="true"/>
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                    <div style="text-align: right; padding-top: 15px;">
                        <button name="btn-report" class="btn btn-primary">{vtranslate('LBL_BTN_REPORT', 'Reports')}</button>
                    </div>
                </div>
            </div>
        </form>
        {if $IS_EMPTY_REPORT_RESULT}
            <h1 style="color: #cb2134; text-align: center;">{vtranslate('LBL_RESULT_EMPTY', 'Reports')}</h1>
        {elseif !empty($REPORT_RESULT)}
            <div style="text-align: right;">
                <button class="btn btn-primary"
                        id="btn-export-excel"
                        name="export_excel"
                        type="button"
                        style="margin-bottom: 10px;">{vtranslate('LBL_EXPORT_EXCEL', 'Reports')}</button>
            </div>
        {/if}
        {if !empty($REPORT_RESULT)}
            <table cellpadding="5" cellpadding="0" class="{if !$PRINT}table table-bordered{else}printReport reportPrintData{/if}">
                <thead>
                    <tr class="blockHeader" style="background: blue; color: white;">
                        <th style="text-align: left !important;">
                            {vtranslate('LBL_PRODUCT_CATEGORY_NAME', 'Reports')}
                        </th>
                        <th style="text-align: right !important;">
                            {vtranslate('LBL_TOTAL_AMOUNT_NAME', 'Reports')}
                        </th>
                        <th style="text-align: right !important;">
                            {vtranslate('LBL_TOTAL_MONEY_NAME', 'Reports')}
                        </th>
                    </tr>
                </thead>
                <tbody>
                {$REPORT_RESULT}
                </tbody>
            </table>
        {/if}
    </div>
{/strip}