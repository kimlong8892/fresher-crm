{strip}
    <div class="summaryView">
        <div class="summaryViewHeader" style="margin-bottom: 15px;">
            <h4 class="display-inline-block">{vtranslate('LBL_KEY_METRICS', $MODULE_NAME)}</h4>
        </div>
        <div class="summaryViewFields">
            <div class="row textAlignCenter roundedCorners">
                <div class="col-lg-3">
                    <div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;">
                        <div><label class="font-x-small">{vtranslate('LBL_TITLE_COUNT_EMAIL', $MODULE_NAME)}</label></div>
                        <div><label class="font-x-x-large">{$COUNT_EMAIL}</label></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;">
                        <div><label class="font-x-small">{vtranslate('LBL_TITLE_COUNT_DOCS', $MODULE_NAME)}</label></div>
                        <div><label class="font-x-x-large">{$COUNT_DOCS}</label></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;">
                        <div><label class="font-x-small">{vtranslate('LBL_TITLE_COUNT_SP', $MODULE_NAME)}</label></div>
                        <div><label class="font-x-x-large">{$COUNT_SP}</label></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;">
                        <div><label class="font-x-small">{vtranslate('LBL_TITLE_COUNT_CALENDAR', $MODULE_NAME)}</label></div>
                        <div><label class="font-x-x-large">{$COUNT_CALENDAR}</label></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/strip}