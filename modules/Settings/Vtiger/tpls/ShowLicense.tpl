{strip}
    <div class="editViewBody">
        <div class="editViewContents">
            <div class="fieldBlockContainer">
                <h4 class="fieldBlockHeader">{vtranslate('LBL_LICENSE_SYSTEM', $MODULE_NAME)}</h4>
                <hr/>
                <table class="configDetails" style="width: 100%">
                    <tbody>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_LICENSE_PRODUCT', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">{$CONFIG.base}</td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_LICENSE_PACKAGE', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">{$CONFIG.package}</td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_LICENSE_LIMIT_USER', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">{$CONFIG.user_limit}</td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_LICENSE_EXPIRE_DATE', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">{$CONFIG.expire_date}</td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/strip}