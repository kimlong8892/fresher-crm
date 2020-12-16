<form autocomplete="off" name="config">
    <div class="editViewBody">
        <div class="editViewContents">
            <div class="fieldBlockContainer">
                <h4 class="fieldBlockHeader">{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_GENERAL_CONFIGURATION', $MODULE_NAME)}</h4>
                <hr />
                <table class="configDetails" style="width: 100%">
                    <tbody>
                        <tr>
                            <td class="fieldLabel outbound_prefix alignTop">
                                {vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_OUTBOUND_PREFIX', $MODULE_NAME)}:
                                <i class="fa fa-question-circle-o tooltip-helper" aria-hidden="true" data-toggle="tooltip" title="{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_OUTBOUND_PREFIX_TOOLTIP', $MODULE_NAME)}"></i>
                            </td>
                            <td class="fieldValue outbound_prefix alignTop"><input type="number" class="inputElement" name="outbound_prefix" value="{$CONFIG->outbound_prefix}"/></td>
                            <td class="fieldLabel alignTop"></td>
                            <td class="fieldValue alignTop"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_NEW_CUSTOMER_MISSED_CALL_ALERT', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <input type="text" autocomplete="off" class="inputElement select-users" style="width: 100%"
                                    placeholder="{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_MISSED_CALL_ALERT_RECEIVER_PLACEHOLDER', $MODULE_NAME)}"
                                    name="new_customer_missed_call_alert" 
                                    data-value="{$CONFIG->new_customer_missed_call_alert}"
                                    data-selected-tags='{ZEND_JSON::encode(Vtiger_Owner_UIType::getCurrentOwners($CONFIG->new_customer_missed_call_alert))}'
                                    data-user-only="true"
                                />
                            </td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_EXISTING_CUSTOMER_MISSED_CALL_ALERT_NO_MAIN_OWNER', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <select 
                                    class="inputElement select2"
                                    name="existing_customer_missed_call_alert_no_main_owner"
                                    style="width: 100%"
                                >
                                    <option>{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_MISSED_CALL_ALERT_RECEIVER_PLACEHOLDER', $MODULE_NAME)}</option>
                                    <option value="group_members" {if $CONFIG->existing_customer_missed_call_alert_no_main_owner eq 'group_members'}selected{/if}>{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_GROUP_MEMBERS', $MODULE_NAME)}</option>
                                    <option value="specific_user" {if $CONFIG->existing_customer_missed_call_alert_no_main_owner eq 'specific_user'}selected{/if}>{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_SPECIFIC_USER', $MODULE_NAME)}</option>
                                </select>
                            </td>
                            <td class="fieldValue alignTop">
                                <div class="fieldValue noMainOwnerSpecificOwner" style="display: {if $CONFIG->existing_customer_missed_call_alert_no_main_owner neq 'specific_user'}none{else}flex{/if}">
                                    <input 
                                        type="text" autocomplete="off" class="inputElement select-users" style="width: 100%"
                                        placeholder="Chọn một người dùng"
                                        name="missed_call_alert_no_main_owner_specific_user" 
                                        data-user-only="true"
                                        data-selected-tags='{ZEND_JSON::encode(Vtiger_Owner_UIType::getCurrentOwners($CONFIG->missed_call_alert_no_main_owner_specific_user))}'
                                    />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="entity-selector" data-module="EmailTemplates">
                        <tr>
                            <td class="fieldLabel alignTop">{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_MISSED_CALL_EMAIL_TEMPLATE', $MODULE_NAME)}:</td>
                            <td class="fieldValue alignTop">
                                <div class="entity-selector-wrapper">
                                    <input type="hidden" class="entity-selector-input" name="missed_call_alert_email_template" value="{$CONFIG->missed_call_alert_email_template}" />
                                    <input class="inputElement entity-selector-display disabled" disabled {if !empty($CONFIG->missed_call_alert_email_template)}value="{$EMAIL_TEMPLATE_RECORD->get('subject')}"{/if} />
                                    <span class="entitySelect cursorPointer"><i class="fa fa-search"></i></span>
                                    <span class="entityDeselect cursorPointer"><i class="fa fa-times"></i></span>
                                    <a class="entityReview cursorPointer" target="_blank" href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                            </td>
                            <td class="fieldLabel"></td>
                            <td class="fieldValue"></td>
                        </tr>
                        <tr>
                            <td class="fieldLabel alignTop">
                                {vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_ACCESS_EXTERNAL_REPORT_ROLES', $MODULE_NAME)}:
                                <i class="fa fa-question-circle-o tooltip-helper" aria-hidden="true" data-toggle="tooltip" title="{vtranslate('LBL_CALLCENTER_SYSTEM_CONFIG_ACCESS_EXTERNAL_REPORT_ROLES_TOOLTIP', $MODULE_NAME)}"></i>
                            </td>
                            <td class="fieldValue alignTop">
                                <select class="inputElement select2" name="external_report_allowed_roles" multiple="true"
                                    data-info='{Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($CONFIG->external_report_allowed_roles))}'
                                >
                                    {foreach from=$ROLE_LIST item=ROLE}
                                        {assign var=roleid value=$ROLE->get('roleid')}
                                        {assign var=rolename value=$ROLE->get('rolename')}
                                        <option value="{$roleid}" {if in_array($roleid, $CONFIG->external_report_allowed_roles)}selected{/if}>{$rolename}</option>
                                    {/foreach}
                                <select>
                            </td>
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