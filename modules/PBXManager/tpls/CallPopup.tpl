{* Added by Phu Vo on 2019.12.31 *}

{strip}
    {assign var='CALL_CENTER_CONFIG' value=getGlobalVariable('callCenterConfig')}
    {assign var='CALL_CENTER_BRIDGE_SERVER_PROTOCOL' value="{if $CALL_CENTER_CONFIG.bridge_server_ssl}https{else}http{/if}"}
    {assign var='CALL_CENTER_BRIDGE_SERVER_URL' value="{$CALL_CENTER_BRIDGE_SERVER_PROTOCOL}://{$CALL_CENTER_CONFIG.bridge_server_name}:{$CALL_CENTER_CONFIG.bridge_server_port}"}

    {if !isForbiddenFeature('CallCenterIntegration') && $CALL_CENTER_CONFIG.enable eq true}
        {assign var=CURRENT_USER value=vglobal('current_user')}
        {assign var=CURRENT_USER_ID value=$CURRENT_USER->id}
        <div id="callCenterPackage">
            <div id="callCenterTemplate" style="display: none">

                <div id="callTemplate" class="call-popup">
                    <div class="call-header">
                        <div class="customer-avatar">
                            <img class="cir-ava fa-ava fa-to-phone fa-fix" src="resources/images/no_ava.png" data-ui="customer_avatar"/>
                            <div class="abs-animate"><i class="cc-animate border-bound animate-cir"></i></div>
                        </div>
                        <div class="customer-summary">
                            <h3 class="info-name" data-ui="customer_name" data-ui-title="true"></h3>
                            <h4 class="info-company close-stage" data-ui="account_name" data-ui-title="true"></h4> 
                            <h3 class="info-title" data-ui="subject" data-parser="callTitleParser" data-ui-title="true"></h3>
                            <h4 class="info-number" data-ui="customer_number" data-ui-title="true"></h4>
                            <h5 class="info-call-direction" data-ui="direction"></h5>
                            <h4 class="info-company" data-ui="account_name" data-ui-title="true"></h4> 
                            <div class="assign">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span> </span>
                                <span class="assign-name" data-ui="assigned_user_name" data-ui-title="true"></span>
                                <span> </span>
                                <span class="ext-num" data-ui="assigned_user_ext"></span>
                            </div>
                        </div>
                        <div class="call-status">
                            <div class="popup-actions">
                                <button name="restore"><i class="fa fa-external-link-square" aria-hidden="true"></i></button>
                                <button name="minimize"><i class="fa fa-window-minimize" aria-hidden="true"></i></button>
                                <button name="maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i></button>
                                <button name="normalmize"><i class="fa fa-window-restore" aria-hidden="true"></i></button>
                                <button name="close"><i class="fa fa-times" aria-hidden="true"></i></button>
                            </div>
                            <div class="call-direction-wraper">
                                <h4 class="call-direction" data-ui="direction"></h4>
                            </div>
                            <div class="timer">
                                <div class="time">
                                    <div class="durHour" data-ui="duration" data-parser="callDurationHours">00</div>
                                    <div class="durMin" data-ui="duration" data-parser="callDurationMinutes">00</div>
                                    <div class="durSec" data-ui="duration" data-parser="callDurationSeconds">00</div>
                                </div>
                                <div class="time-description">
                                    <div class="hour">{vtranslate('LBL_CALL_POPUP_HOURS', 'PBXManager')}</div>
                                    <div class="min">{vtranslate('LBL_CALL_POPUP_MINUTES', 'PBXManager')}</div>
                                    <div class="sec">{vtranslate('LBL_CALL_POPUP_SECONDS', 'PBXManager')}</div>
                                </div>
                            </div>
                            <div class="connection-status"><i class="fa fa-circle" aria-hidden="true"></i> <span data-ui="state" data-parser="callStateMapping"></span></div>
                        </div>
                    </div>
                    <div class="call-body">
                        <ul class="call-tabs fancyScrollbar" data-tabs="call">
                            <li class="call-tab active" data-tab="call-log">{vtranslate('LBL_CALL_POPUP_LOG_CALL', 'PBXManager')}</li>
                            <li class="call-tab" data-tab="call-list" data-trigger="ajax-view">
                                <span>{vtranslate('LBL_CALL_POPUP_CALL', 'PBXManager')}</span>
                                <span class="counter" data-ui="call_list_count" data-parser="counterParser"></span>
                            </li>
                            <li class="call-tab contactsOnly" data-tab="salesorder-list" data-trigger="ajax-view">
                                <span>{vtranslate('LBL_CALL_POPUP_SALES_ORDER', 'PBXManager')}</span>
                                <span class="counter" data-ui="salesorder_list_count" data-parser="counterParser"></span>
                            </li>
                            <li class="call-tab contactsOnly" data-tab="ticket-list" data-trigger="ajax-view">
                                <span>{vtranslate('LBL_CALL_POPUP_TICKET', 'PBXManager')}</span>
                                <span class="counter" data-ui="ticket_list_count" data-parser="counterParser"></span>
                            </li>
                            <li class="call-tab" data-tab="faq-list">{vtranslate('LBL_CALL_POPUP_FAQS', 'PBXManager')}</li>
                        </ul>
                        <div class="call-tab-content main-form-container" data-tabs="call">
                            <div class="call-tab-pane main-form fancyScrollbar" data-tab="call-log">
                                <form class="form-horizontal callLog" name="call_log" data-fetch-customer-info="false">
                                    <input type="hidden" name="module" value="PBXManager" />
                                    <input type="hidden" name="action" value="CallPopupAjax" />
                                    <input type="hidden" name="mode" value="saveCallLog" />
                                    <input type="hidden" name="pbx_call_id" data-ui="call_id" />
                                    <input type="hidden" name="call_log_id" data-ui="call_log_id" />
                                    <input type="hidden" name="start_time" data-ui="start_time" />
                                    <input type="hidden" name="end_time" data-ui="end_time" />
                                    <input type="hidden" name="customer_id" data-ui="customer_id" />
                                    <input type="hidden" name="customer_type" data-ui="customer_type" />
                                    <input type="hidden" name="direction" data-ui="direction" data-parser="raw"/>
                                    <input type="hidden" name="account_id" data-ui="account_id" />
                                    <input type="hidden" name="account_id_raw" data-ui="account_id" />
                                    <section class="wraper note">
                                        <input name="subject" data-ui="subject" data-parser="raw" data-onchange="subject" class="call-center-title" placeholder="{vtranslate('LBL_CALL_POPUP_SUBJECT', 'PBXManager')} *" spellcheck="false" autocomplete="off" data-rule-required="true" />
                                        <textarea name="description" class="call-center-note" placeholder="{vtranslate('LBL_CALL_POPUP_DESCRIPTION', 'PBXManager')}" spellcheck="false" autocomplete="off" data-ui="description" data-onchange="description"></textarea>
                                    </section>
                                    <table class="table no-border fieldBlockContainer">
                                        <tr>
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_SAVING_MODE', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue">
                                                {assign var=VISIBILITY value=Calendar_Module_Model::getSharedType($CURRENT_USER_ID)}
                                                <label><input type="radio" name="visibility" value="Public" {if $VISIBILITY neq 'private'}checked{/if} /> <span>{vtranslate('LBL_CALL_POPUP_SAVING_PUBLIC', 'PBXManager')}</span></label>
                                                <span>&nbsp&nbsp</span>
                                                <label><input type="radio" name="visibility" value="Private" {if $VISIBILITY eq 'private'}checked{/if} /> <span>{vtranslate('LBL_CALL_POPUP_SAVING_PRIVATE', 'PBXManager')}</span></label>
                                            </td>
                                        </tr>
                                        <tr class="forInbound">
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_INBOUND_CALL_PURPOSE', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue inputGroup">
                                                {assign var=EVENTS_INBOUND_CALL_PURPOSE value=Vtiger_Util_Helper::getPickListValues('events_inbound_call_purpose')}
                                                <select name="events_inbound_call_purpose" class="inputElement select2">
                                                    <option value="">{vtranslate('LBL_CALL_POPUP_DROPDOWN_SELECT_AN_OPTION', 'PBXManager')}</option>
                                                    {foreach from=$EVENTS_INBOUND_CALL_PURPOSE item=purpose}
                                                        <option value="{$purpose}">{vtranslate($purpose, 'Events')}</option>
                                                    {/foreach}
                                                </select>
                                                <input type="text" name="events_inbound_call_purpose_other" data-other-purpose="true" class="inputElement toggleOnInboundPurposeOther" placeholder="{vtranslate('LBL_EVENTS_INBOUND_CALL_PURPOSE_OTHER', 'Events')}" data-rule-required="true" />
                                            </td>
                                        </tr>
                                        <tr class="forOutbound">
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_CALL_OUTBOUND_PURPOSE', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue inputGroup">
                                                {assign var=EVENTS_CALL_PURPOSE value=Vtiger_Util_Helper::getPickListValues('events_call_purpose')}
                                                <select name="events_call_purpose" class="inputElement select2">
                                                    <option value="">{vtranslate('LBL_CALL_POPUP_DROPDOWN_SELECT_AN_OPTION', 'PBXManager')}</option>
                                                    {foreach from=$EVENTS_CALL_PURPOSE item=purpose}
                                                        <option value="{$purpose}">{vtranslate($purpose, 'Events')}</option>
                                                    {/foreach}
                                                </select>
                                                <input type="text" name="events_call_purpose_other" data-other-purpose="true" class="inputElement toggleOnPurposeOther" placeholder="{vtranslate('LBL_EVENTS_CALL_PURPOSE_OTHER', 'Events')}" data-rule-required="true" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_CALL_RESULT', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue">
                                                {assign var=EVENTS_CALL_RESULT value=Vtiger_Util_Helper::getPickListValues('events_call_result')}
                                                <select name="events_call_result" class="inputElement select2" data-onchange="events_call_result">
                                                    <option value="">{vtranslate('LBL_CALL_POPUP_DROPDOWN_SELECT_AN_OPTION', 'PBXManager')}</option>
                                                    {foreach from=$EVENTS_CALL_RESULT item=result}
                                                        <option value="{$result}">{vtranslate($result, 'Events')}</option>
                                                    {/foreach}
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="toggleCallResultCallBack">
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_CALL_BACK_TIME', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue">
                                                <div class="call-back-time disableBaseOnTimeOther">
                                                    <div class="input-group select-time inputElement">
                                                        <input name="select_time" class="inputElement" />
                                                        <span class="input-group-addon" style="width: 30px;"><i class="fa fa-clock-o"></i></span>
                                                    </div>
                                                    <div class="input-wraper select-moment">
                                                        <input name="select_moment" class="inputElement" />
                                                    </div>
                                                </div>
                                                <div class="call-back-time-other">
                                                    <div class="call-back-time-other-toggle">
                                                        <label><input type="checkbox" name="call_back_time_other" /> {vtranslate('LBL_CALL_POPUP_CALL_BACK_OTHER_TIME', 'PBXManager')}</label>
                                                    </div>
                                                    <div class="call-back-time-other-content activeBaseOnTimeOther">
                                                        <div class="inlineOnLarge">
                                                            <div class="input-group input-wraper date-start inputElement" style="margin-bottom: 3px">
                                                                <input type="text" class="dateField form-control" name="date_start" data-rule-required="true" data-date-format="{$CURRENT_USER->date_format}" />
                                                                <span class="input-group-addon"><i class="fa fa-calendar "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="inlineOnLarge">
                                                            <div class="input-group input-wraper time-start inputElement time">
                                                                <input type="text" class="timepicker-default form-control ui-timepicker-input" name="time_start" data-rule-required="true" />
                                                                <span class="input-group-addon" style="width: 30px;"><i class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="toggleCallResultCustomerInterested">
                                            <td class="fieldLabel name">
                                                <label>{vtranslate('LBL_CALL_POPUP_NAME', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue name">
                                                {assign var=SALUTATIONTYPES value=Vtiger_Util_Helper::getPickListValues('salutationtype')}
                                                <select name="salutationtype" class="inputElement select2">
                                                    <option value="">{vtranslate('LBL_CALL_POPUP_SALUTATION_TYPE_PLACEHOLDER', 'PBXManager')}</option>
                                                    {foreach from=$SALUTATIONTYPES item=salutationtype}
                                                        <option value="{$salutationtype}">{vtranslate($salutationtype, 'Contacts')}</option>
                                                    {/foreach}
                                                </select>
                                                <input type="text" name="firstname" class="inputElement" placeholder="{vtranslate('LBL_CALL_POPUP_CUSTOMER_FIRST_NAME', 'PBXManager')}" />
                                                <input type="text" name="lastname" class="inputElement" data-rule-required="true" placeholder="{vtranslate('LBL_CALL_POPUP_CUSTOMER_LAST_NAME', 'PBXManager')} *" />
                                            </td>
                                        </tr>
                                        <tr class="toggleCallResultCustomerInterested">
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_PHONE_NUMBER', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue">
                                                <input type="text" name="mobile_phone" data-ui="customer_number" class="inputElement" />
                                            </td>
                                        </tr>
                                        <tr class="toggleCallResultCustomerInterested">
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_EMAIL', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue">
                                                <input type="text" class="inputElement" name="email" data-rule-email="true" />
                                            </td>
                                        </tr>
                                        <tr class="toggleCallResultCustomerInterested account_id">
                                            <td class="fieldLabel">
                                                <input class="hidden" type="hidden" name="module" value="Contacts" />
                                                <label>{vtranslate('LBL_CALL_POPUP_ACCOUNT_NAME', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue controls">
                                                <div class="referencefield-wrapper forContacts">
                                                    <input name="popupReferenceModule" type="hidden" value="Accounts">
                                                    <div class="input-group account_id">
                                                        <input name="account_id" type="hidden" value="" class="sourceField" data-displayvalue="" required>
                                                        <input name="account_id_display" 
                                                            data-fieldname="account_id" data-fieldtype="reference" type="text" 
                                                            class="marginLeftZero autoComplete inputElement ui-autocomplete-input" value="" 
                                                            placeholder="{vtranslate('LBL_TYPE_SEARCH')}" autocomplete="off"
                                                        >
                                                        <a href="#" class="clearReferenceSelection hide"> x </a>
                                                        <span class="input-group-addon relatedPopup cursorPointer" title="Select"><i id="Contacts_editView_fieldName_account_id_select" class="fa fa-search"></i></span>
                                                    </div>
                                                    <span class="createReferenceRecord cursorPointer clearfix" title="Thêm mới"><i id="Contacts_editView_fieldName_account_id_create" class="fa fa-plus"></i></span>
                                                </div>
                                                <div class="forLeads forDefault">
                                                    <input type="text" name="company" class="inputElement" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="toggleCallResultCustomerInterested">
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_SELECT_PRODUCTS', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue product_ids">
                                                <input type="hidden" name="product_ids" class="inputElement select2"/>
                                            </td>
                                        </tr>
                                        <tr class="toggleCallResultCustomerInterested">
                                            <td class="fieldLabel">
                                                <label>{vtranslate('LBL_CALL_POPUP_SELECT_SERVICES', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue service_ids">
                                                <input type="hidden" name="service_ids" class="inputElement select2"/>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                            <div class="call-tab-pane related-tab" data-tab="call-list" data-module="Calendar" data-activity-type="Call">
                                <div class="call-tab-content fancyScrollbar"></div>
                                <div class="call-tab-empty"><div class="content">{vtranslate('LBL_CALL_POPUP_ON_POPUP_ERROR_MESSAGE', 'PBXManager')}</div></div>
                                <div class="call-tab-loading"><i class="fa fa-refresh fa-spin"></i></div>
                            </div>
                            <div class="call-tab-pane related-tab" data-tab="salesorder-list" data-module="SalesOrder">
                                <div class="call-tab-content fancyScrollbar"></div>
                                <div class="call-tab-empty"><div class="content">{vtranslate('LBL_CALL_POPUP_ON_POPUP_ERROR_MESSAGE', 'PBXManager')}</div></div>
                                <div class="call-tab-loading"><i class="fa fa-refresh fa-spin"></i></div>
                            </div>
                            <div class="call-tab-pane related-tab" data-tab="ticket-list" data-module="HelpDesk">
                                <div class="call-tab-content fancyScrollbar"></div>
                                <div class="call-tab-empty"><div class="content">{vtranslate('LBL_CALL_POPUP_ON_POPUP_ERROR_MESSAGE', 'PBXManager')}</div></div>
                                <div class="call-tab-loading"><i class="fa fa-refresh fa-spin"></i></div>
                            </div>
                            <div class="call-tab-pane faq-tab" data-tab="faq-list" data-module="Faq">
                                <div class="faq-tab-content fancyScrollbar">
                                    <form class="filter-form">
                                        <table class="table no-border">
                                            <tr>
                                                <td class="fieldValue col-lg-12">
                                                    <div class="input-group">
                                                        <input type="text" name="keyword" class="inputElement" placeholder="{vtranslate('LBL_CALL_POPUP_SEARCH_FAQ_PLACEHOLDER', 'PBXManager')}" data-onchange="faq_keyword" />
                                                        <span class="input-group-addon searchButton cursorPointer" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <div class="faq-result-display">
                                        <div class="faq-tab-result-content fancyScrollbar"></div>
                                        <div class="faq-tab-empty"><div class="content">{vtranslate('LBL_CALL_POPUP_ON_POPUP_ERROR_MESSAGE', 'PBXManager')}</div></div>
                                        <div class="faq-tab-loading"><i class="fa fa-refresh fa-spin"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="call-footer">
                        <div class="quickcreate-btns">
                            <div class="quickcreate-customer">
                                <button class="btn btn-default createCustomer">{vtranslate('LBL_CALL_POPUP_CREATE_CUSTOMER', 'PBXManager')}</button>
                            </div>
                            <div class="btn-group dropup quickcreate-related">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">{vtranslate('LBL_CALL_POPUP_QUICK_CREATE', 'PBXManager')} <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0)" class="quickCreateBtn" data-module="Events" data-activity="Call">{vtranslate('Call', 'Calendar')}</a>
                                    </li>
                                    <li class="dropdown-item" data-module="Events" data-activity="Meeting">
                                        <a href="javascript:void(0)" class="quickCreateBtn" data-module="Events" data-activity="Meeting">{vtranslate('Meeting', 'Calendar')}</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0)" class="quickCreateBtn" data-module="Calendar">{vtranslate('Task', 'Calendar')}</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0)" class="quickCreateBtn" data-module="Potentials">{vtranslate('SINGLE_Potentials', 'Potentials')}</a>
                                    </li>
                                    <li class="dropdown-item contactsOnly">
                                        <a href="javascript:void(0)" class="quickCreateBtn" data-module="Quotes">{vtranslate('SINGLE_Quotes', 'Quotes')}</a>
                                    </li>
                                    <li class="dropdown-item contactsOnly">
                                        <a href="javascript:void(0)" class="quickCreateBtn" data-module="SalesOrder">{vtranslate('SINGLE_SalesOrder', 'SalesOrder')}</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="javascript:void(0)" class="quickCreateBtn" data-module="HelpDesk">{vtranslate('SINGLE_HelpDesk', 'HelpDesk')}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="action-btns">
                            <button name="close" class="urgent-close"><i class="fa fa-times"></i></button>
                            <button name="close" class="btn btn-danger" disabled style="display: none"><i class="fa fa-close"></i> {vtranslate('LBL_CLOSE')}</button>
                            <button name="save_call_log_with_ticket" class="btn btn-success saveLogBtn">{vtranslate('LBL_CALL_POPUP_SAVE_AND_CREATE_TICKET', 'PBXManager')}</button>
                            <button name="save_call_log" class="btn btn-success saveLogBtn">{vtranslate('LBL_SAVE')}</button>
                            <button class="openFaqFullSearchPopup btn btn-default">{vtranslate('LBL_CALL_POPUP_FAQ_FULL_SEARCH_BUTTON', 'PBXManager')}</button>
                        </div>
                    </div>
                </div>

                <div id="syncCustomerInfo" class="modal-dialog modal-lg modal-content syncCustomerPopup">
                    {assign var=HEADER_TITLE value={vtranslate('LBL_CALL_POPUP_SYNC_CUSTOMER_INFO_TITLE', 'PBXManager')}}
                    {include file='ModalHeader.tpl'|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
                    <ul class="call-tabs fancyScrollbar" data-tabs="create-customer">
                        <li class="call-tab active" data-tab="new-customer">{vtranslate('LBL_CALL_POPUP_QUICK_CREATE_CUSTOMER', 'PBXManager')}</li>
                        <li class="call-tab" data-tab="exist-customer">{vtranslate('LBL_CALL_POPUP_SEARCH_CUSTOMER', 'PBXManager')}</li>
                    </ul>
                    <div class="call-tab-content create-customer-container" data-tabs="create-customer">
                        <div class="call-tab-pane active fancyScrollbar new-customer" data-tab="new-customer">
                            <form name="quick_create" class="form-horiontal">
                                <input type="hidden" name="module" value="PBXManager" />
                                <input type="hidden" name="action" value="CallPopupAjax" />
                                <input type="hidden" name="mode" value="saveCustomer" />
                                <input type="hidden" name="pbx_call_id" />
                                <div class="form-content fancyScrollbar">
                                    <table class="table no-border fieldBlockContainer">
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_RELATED_TO', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <label><input type="radio" name="customer_type" value="Leads" checked> {vtranslate('Leads', 'Leads')}</label>
                                                <span>&nbsp&nbsp&nbsp</span>
                                                <label><input type="radio" name="customer_type" value="Contacts"> {vtranslate('Contacts', 'Contacts')}</label>
                                            </td>
                                            <td class="fieldLabel salutationtype col-lg-3">
                                                <label>{vtranslate('LBL_CALL_POPUP_NAME', 'PBXManager')}</label>
                                                {assign var=SALUTATIONTYPES value=Vtiger_Util_Helper::getPickListValues('salutationtype')}
                                                <select name="salutationtype" class="inputElement select2">
                                                    <option value="">{vtranslate('LBL_CALL_POPUP_SALUTATION_TYPE_PLACEHOLDER', 'PBXManager')}</option>
                                                    {foreach from=$SALUTATIONTYPES item=salutationtype}
                                                        <option value="{$salutationtype}">{vtranslate($salutationtype, 'Contacts')}</option>
                                                    {/foreach}
                                                </select>
                                            </td>
                                            <td class="fieldValue name col-lg-3">
                                                <input type="text" name="firstname" class="inputElement" placeholder="{vtranslate('LBL_CALL_POPUP_CUSTOMER_FIRST_NAME', 'PBXManager')}" />
                                                <input type="text" name="lastname" class="inputElement" data-rule-required="true" placeholder="{vtranslate('LBL_CALL_POPUP_CUSTOMER_LAST_NAME', 'PBXManager')} *" />
                                            </td>
                                        </tr>
                                        <tr class="toggleBaseOnContact">
                                            <td class="fieldLabel col-lg-2">
                                                <input class="hidden" type="hidden" name="module" value="Contacts" />
                                                <label>{vtranslate('LBL_CALL_POPUP_ACCOUNT_NAME', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4 controls">
                                                <div class="referencefield-wrapper">
                                                    <input name="popupReferenceModule" type="hidden" value="Accounts">
                                                    <div class="input-group">
                                                        <input name="account_id" data-ui="account_id" type="hidden" value="" class="sourceField" data-displayvalue="" required>
                                                        <input name="account_id_display" 
                                                            data-fieldname="account_id" data-fieldtype="reference" type="text" 
                                                            class="marginLeftZero autoComplete inputElement ui-autocomplete-input" value="" 
                                                            placeholder="{vtranslate('LBL_TYPE_SEARCH')}" autocomplete="off"
                                                        >
                                                        <a href="#" class="clearReferenceSelection hide"> x </a>
                                                        <span class="input-group-addon relatedPopup cursorPointer" title="Select"><i id="Contacts_editView_fieldName_account_id_select" class="fa fa-search"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_BIRTHDAY', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4 controls field-datepicker">
                                                <div class="input-group inputElement" style="margin-bottom: 3px">
                                                    <input type="text" name="birthday" class="form-control datePicker dateField" autocomplete="off"  data-date-format="{$CURRENT_USER->date_format}" data-rule-lessThanToday="true" />
                                                    <span class="input-group-addon"><i class="fa fa-calendar "></i></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_PHONE_NUMBER', 'PBXManager')} <span class="redColor">*</span></label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" name="mobile" data-rule-required="true" class="inputElement" readonly required />
                                            </td>
                                            <td class="fieldLabel col-lg-2"></td>
                                            <td class="fieldValue col-lg-4"></td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_CUSTOMER_TITLE', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" class="inputElement" name="title" />
                                            </td>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_EMAIL', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" class="inputElement" name="email" data-rule-email="true" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_ADDRESS_STREET', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" class="inputElement" name="primary_address_street" />
                                            </td>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_ADDRESS_CITY', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" class="inputElement" name="primary_address_city" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_ADDRESS_STATE', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" class="inputElement" name="primary_address_state" />
                                            </td>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_ADDRESS_COUNTRY', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" class="inputElement" name="primary_address_country" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_DESCRIPTION', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-10" colspan="3">
                                                <textarea name="description" class="inputElement textAreaElement" style="width: 100%"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                {include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
                            </form>
                        </div>
                        <div class="call-tab-pane fancyScrollbar" data-tab="exist-customer">
                            <form name="search_customer" class="form-horiontal">
                                <input type="hidden" name="module" value="PBXManager" />
                                <input type="hidden" name="action" value="CallPopupAjax" />
                                <input type="hidden" name="mode" value="searchCustomer" />
                                <div class="form-content fancyScrollbar">
                                    <table class="table no-border fieldBlockContainer">
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_NAME', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" name="customer_name" class="inputElement" data-rule-optional-min-length="3" />
                                            </td>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_PHONE_NUMBER', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" name="customer_number" class="inputElement" data-rule-optional-min-length="3" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_EMAIL', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" name="customer_email" class="inputElement" data-rule-optional-min-length="3" />
                                            </td>
                                            <td class="fieldLabel col-lg-2">
                                                <label>{vtranslate('LBL_CALL_POPUP_ADDRESS_STREET', 'PBXManager')}</label>
                                            </td>
                                            <td class="fieldValue col-lg-4">
                                                <input type="text" name="customer_address" class="inputElement" data-rule-optional-min-length="3" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="col-lg-12" style="text-align: center">
                                                <button type="submit" name="search" class="btn btn-success">{vtranslate('LBL_SEARCH')}</button>
                                            </td>
                                        </tr>
                                    </table>
                                    <table class="customerSearchResult table table-striped table-bordered" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>{vtranslate('LBL_CALL_POPUP_CUSTOMER_TYPE', 'PBXManager')}</th>
                                                <th>{vtranslate('LBL_CALL_POPUP_CUSTOMER_NAME', 'PBXManager')}</th>
                                                <th>{vtranslate('LBL_CALL_POPUP_ASSIGNED_USER_NAME', 'PBXManager')}</th>
                                                <th>{vtranslate('LBL_CALL_POPUP_ACCOUNT', 'PBXManager')}</th>
                                                <th>{vtranslate('LBL_CALL_POPUP_CUSTOMER_NUMBER', 'PBXManager')}</th>
                                                <th>{vtranslate('LBL_CALL_POPUP_SEARCH_CUSTOMER_ACTION', 'PBXManager')}</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div id="callCenterContainer">
                <div class="call-popups fancyScrollbar"></div>
            </div>
        </div>
        
        <link type="text/css" rel="stylesheet" href="{vresource_url('modules/PBXManager/resources/CallPopup.css')}"/>

        {assign var='CALL_CENTER_BRIDGE_SERVER_PROTOCOL' value="{if $CALL_CENTER_CONFIG.bridge_server_ssl}https{else}http{/if}"}
        {assign var='CALL_CENTER_BRIDGE_SERVER_URL' value="{$CALL_CENTER_BRIDGE_SERVER_PROTOCOL}://{$CALL_CENTER_CONFIG.bridge_server_name}:{$CALL_CENTER_CONFIG.bridge_server_port}"}
        {assign var='PERSONAL_CUSTOMER_ID' value="{Accounts_Data_Helper::getPersonalAccountId()}"}

        <script>var _CALL_CENTER_BRIDGE_SERVER_URL = '{$CALL_CENTER_BRIDGE_SERVER_URL}';</script>
        <script>var _PERSONAL_CUSTOMER_ID = '{$PERSONAL_CUSTOMER_ID}';</script>

        <script src="{vresource_url('resources/libraries/SocketIO/socket.io.js')}"></script>

        {* [CallCenterHandler] Added by Hieu Nguyen on 2020-05-15 *}
        {if !isForbiddenFeature('CallCenterIntegration') && $CALL_CENTER_CONFIG.enable eq true}
            <script src="{vresource_url('resources/CallCenterHandler.js')}" async defer></script>
        {/if}
        {* End Hieu Nguyen *}
        
        <script src="{vresource_url('modules/PBXManager/resources/CallPopup.js')}" async defer></script>
    {/if}
{/strip}