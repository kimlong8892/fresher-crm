{*
    CallsSummaryThisWeekWidgetContents.tpl
    Author: Hieu Nguyen
    Date: 2019-10-01
*}

{strip}
    {if count($DATA) > 0}
        <div class="row item">
            <div class="row main-data">
                <span class="value">{number_format($DATA['this_week']['calls_count'])}</span>
                {vtranslate('LBL_WIDGET_CALLS', $MODULE_NAME)}
            </div>
            <div class="row sub-data {if !$SHOW_COMPARE}invisible{/if}">
                <span class="value {if $DATA['compare_count_ratio'] >= 0} good {else} bad {/if}">
                    {if $DATA['compare_count_ratio'] >= 0} <i class="fa fa-sort-up"></i> {else} <i class="fa fa-sort-down"></i> {/if}
                    {number_format(abs($DATA['compare_count_ratio']))} %
                </span>
                {vtranslate('LBL_WIDGET_FROM_LAST_WEEK', $MODULE_NAME)} ({number_format($DATA['last_week']['calls_count'])})
            </div>
        </div>
        <div class="row item">
            <div class="row main-data">
                <span class="value">{number_format($DATA['this_week']['total_duration'], 1)}</span>
                {vtranslate('LBL_WIDGET_MINUTES', $MODULE_NAME)}
            </div>
            <div class="row sub-data {if !$SHOW_COMPARE}invisible{/if}">
                <span class="value {if $DATA['compare_duration_ratio'] >= 0} good {else} bad {/if}">
                    {if $DATA['compare_duration_ratio'] >= 0} <i class="fa fa-sort-up"></i> {else} <i class="fa fa-sort-down"></i> {/if}
                    {number_format(abs($DATA['compare_duration_ratio']), 1)} %
                </span>
                {vtranslate('LBL_WIDGET_FROM_LAST_WEEK', $MODULE_NAME)} ({number_format($DATA['last_week']['total_duration'], 1)})
            </div>
        </div>
        <div class="row item">
            <div class="row main-data">
                <span class="value">{number_format($DATA['this_week']['duration_per_call'], 1)}</span>
                {vtranslate('LBL_WIDGET_MINUTES', $MODULE_NAME)} / {vtranslate('LBL_WIDGET_CALLS', $MODULE_NAME)}
            </div>
            <div class="row sub-data {if !$SHOW_COMPARE}invisible{/if}">
                <span class="value {if $DATA['compare_duration_per_call_ratio'] >= 0} good {else} bad {/if}">
                    {if $DATA['compare_duration_per_call_ratio'] >= 0} <i class="fa fa-sort-up"></i> {else} <i class="fa fa-sort-down"></i> {/if}
                    {number_format(abs($DATA['compare_duration_per_call_ratio']), 1)} %
                </span>
                {vtranslate('LBL_WIDGET_FROM_LAST_WEEK', $MODULE_NAME)} ({number_format($DATA['last_week']['duration_per_call'], 1)})
            </div>
        </div>
    {else}
        <span class="noDataMsg">
            {vtranslate('LBL_NO')} {vtranslate($MODULE_NAME, $MODULE_NAME)} {vtranslate('LBL_MATCHED_THIS_CRITERIA')}
        </span>
    {/if}
{/strip}