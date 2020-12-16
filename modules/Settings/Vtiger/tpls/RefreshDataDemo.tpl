{strip}
<form autocomplete="off" name="settings">
    <div class="editViewBody">
        <div class="editViewContents">
            <div class="fieldBlockContainer">
                <h4 class="fieldBlockHeader">{vtranslate('LBL_REFRESH_DATA_DEMO_TITLE', $MODULE_NAME)}</h4>
                <hr />
                <table class="configDetails" style="width: 100%">
                    <tbody>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_MIN_TIMESTAMP', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <input type="hidden" id="current-min-timestamp" name="current-min-timestamp" value="{$MIN_TIMESTAMP}"/>
                                <label id="lbl-current-min-timestamp">{$MIN_TIMESTAMP}</label>
                            </td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_MAX_TIMESTAMP', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <input type="hidden" id="current-max-timestamp" name="current-max-timestamp" value="{$MAX_TIMESTAMP}"/>
                                <label id="lbl-current-max-timestamp">{$MAX_TIMESTAMP}</label>
                            </td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_INTERVAL_DAY_WANT_TO_CHANGE', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <input type="number" id="interval-day" name="interval-day" value="{$INTERVAL_DAY}"/>&nbsp;&nbsp;{vtranslate('LBL_DAYS', $MODULE_NAME)}
                            </td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_NEW_MIN_TIMESTAMP', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <input type="hidden" id="new-min-timestamp" name="new-min-timestamp" value="{$NEW_MIN_TIMESTAMP}"/>
                                <label id="lbl-new-min-timestamp">{$NEW_MIN_TIMESTAMP}</label>
                            </td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_NEW_MAX_TIMESTAMP', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <input type="hidden" id="new-max-timestamp" name="new-max-timestamp" value="{$NEW_MAX_TIMESTAMP}"/>
                                <label id="lbl-new-max-timestamp">{$NEW_MAX_TIMESTAMP}</label>
                            </td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="modal-overlay-footer clearfix">
        <div class="row clear-fix">
            <div class="textAlignCenter col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-success saveButton">{vtranslate('LBL_SAVE')}</button>
            </div>
        </div>
    </div>
</form>
{/strip}
