{strip}
    {assign var=USER_NOTIFICATIONS_PREFERENCE value=CPNotifications_Data_Model::loadUserConfig('notification_config')}
    {assign var=MODULES_TRANSLATED_SINGLE_LABEL value=getModulesTranslatedSingleLabel()}

    <script>
        window._RELATED_TABS_INFO = {
            modules: JSON.parse('{$MODULES_TRANSLATED_SINGLE_LABEL|@json_encode nofilter}'),
            tabs: {
                detail: '{vtranslate("LBL_DETAILS", "Vtiger")}',
                update: '{vtranslate("LBL_UPDATES", "Vtiger")}'
            }
        }
    </script>

    {if $USER_NOTIFICATIONS_PREFERENCE != null && $USER_NOTIFICATIONS_PREFERENCE->receive_notifications == 1}
        <div id="notification" class="notification rel">
            <a href="javascript: void(0)" id="notification_popover-tigger" class="fa fa-bell notification_popover-tigger rel" data-for="#notification_popover" aria-hidden="true" title="Notifications">
                <div id="notification_counter" class="inline counter notification_counter" style="display: none"></div>
            </a>
            <div id="notification_popover" class="popover fade bottom in" role="tooltip" style="display: none">
                <div class="arrow" style="left: auto;"></div>
                <div class="popover-content">
                    <div class="notification_container notify-tabs">
                        <ul class="nav nav-tabs tabs-type notification_tabs" role="tablist">
                            <li class="nav-item rel" title="{vtranslate('LBL_TITLE_NOTIFICATION', 'CPNotifications')}" data-for="div#notify-tabs_notify-pane" data-group="notify-navs">
                                <a class="nav-link"><i class="fa fa-clock-o" aria-hidden="true"></i></a>
                                <div id="notification_counter-notify" class="inline counter notification_sub-counter" style="display: none"></div>
                            </li>
                            {if $USER_NOTIFICATIONS_PREFERENCE->show_activity_reminders == 1}
                                <li class="nav-item rel" title="{vtranslate('LBL_TITLE_ACTIVITY', 'CPNotifications')}" data-for="div#notify-tabs_tasks-pane" data-group="notify-navs" data-sub="tasks-navs">
                                    <a class="nav-link"><i class="fa fa-tasks" aria-hidden="true"></i></a>
                                    <div id="notification_counter-task" class="inline counter notification_sub-counter" style="display: none"></div>
                                </li>
                            {/if}
                            {if $USER_NOTIFICATIONS_PREFERENCE->show_customer_birthday_reminders == 1}
                                <li class="nav-item rel" title="{vtranslate('LBL_TITLE_BIRTHDAY', 'CPNotifications')}" data-for="div#notify-tabs_birthday-pane" data-group="notify-navs" data-sub="birthday-navs">
                                    <a class="nav-link"><i class="fa fa-birthday-cake" aria-hidden="true"></i></a>
                                    <div id="notification_counter-birthday" class="inline counter notification_sub-counter" style="display: none"></div>
                                </li>
                            {/if}
                        </ul>
                        <div class="tab-content">
                            <div id="notify-tabs_notify-pane" class="notify-tab-pane" rel="notify-navs" role="notify-tab-pane">
                                <div class="notification_list fancyScrollbar" data-status="empty" data-tab="notification" data-offset="0" rel="notification">
                                    <div class="notification_items"></div>
                                    <div class="notification_list-footer">
                                        <div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div>
                                        <div class="notification_empty-list">{vtranslate('LBL_NOTIFICATION_LIST_EMPTY', 'CPNotifications')}</div>
                                    </div>
                                </div>
                                <div class="notification_footer">
                                    <a class="footer-item" href="javascript:Notifications.markAsRead('all')">{vtranslate('LBL_READ_ALL', 'CPNotifications')}</a>
                                    <a class="footer-item" target="black" href="index.php?module=Vtiger&parent=Settings&view=UserNotifications">{vtranslate('LBL_CONFIGS', 'CPNotifications')}</a>
                                </div>
                            </div>
                            <div id="notify-tabs_tasks-pane" class="notify-tab-pane" rel="notify-navs" role="notify-tab-pane">
                                <ul class="nav nav-tabs notification_subtabs">
                                    <li class="nav-item active" title="{vtranslate('LBL_TASK_GOING_TO_OVERDUE', 'CPNotifications')}" data-for="div#notify-activity_coming" data-group="tasks-navs">
                                        <a class="nav-link rel">
                                            <span>{vtranslate('LBL_TASK_GOING_TO_OVERDUE', 'CPNotifications')}<span>
                                            <span id="notification_counter-activity-coming" class="notification_inline-counter" style="display: none"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item" title="{vtranslate('LBL_TASK_OVERDUE', 'CPNotifications')}" data-for="div#notify-activity_overdue" data-group="tasks-navs">
                                        <a class="nav-link rel">
                                            <span>{vtranslate('LBL_TASK_OVERDUE', 'CPNotifications')}</span>
                                            <span id="notification_counter-activity-overdue" class="notification_inline-counter" style="display: none"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="notify-activity_coming" class="notify-tab-pane active" rel="tasks-navs" role="notify-tab-pane">
                                        <div class="notification_list fancyScrollbar" data-status="empty" data-tab="activity" data-sub="coming" data-offset="0" rel="activity_coming">
                                            <div class="notification_items"></div>
                                            <div class="notification_list-footer">
                                                <div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div>
                                                <div class="notification_empty-list">{vtranslate('LBL_REMINDER_LIST_EMPTY', 'CPNotifications')}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="notify-activity_overdue" class="notify-tab-pane" rel="tasks-navs" role="notify-tab-pane">
                                        <div class="notification_list fancyScrollbar" data-status="empty" data-tab="activity" data-sub="overdue" data-offset="0" rel="activity_overdue">
                                            <div class="notification_items"></div>
                                            <div class="notification_list-footer">
                                                <div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div>
                                                <div class="notification_empty-list">{vtranslate('LBL_REMINDER_LIST_EMPTY', 'CPNotifications')}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="notify-tabs_birthday-pane" class="notify-tab-pane" rel="notify-navs" role="notify-tab-pane">
                                <ul class="nav nav-tabs notification_subtabs">
                                    <li class="nav-item active" title="{vtranslate('LBL_BIRTHDAY_TODAY', 'CPNotifications')}" data-for="div#notify-birthday_today" data-group="birthday-navs" data-list="">
                                        <a class="nav-link rel">
                                            <span>{vtranslate('LBL_BIRTHDAY_TODAY', 'CPNotifications')}</span>
                                            <span id="notification_counter-birthday-today" class="notification_inline-counter" style="display: none"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item" title="{vtranslate('LBL_BIRTHDAY_COMING', 'CPNotifications')}" data-for="div#notify-birthday_coming" data-group="birthday-navs">
                                        <a class="nav-link rel">
                                            <span>{vtranslate('LBL_BIRTHDAY_COMING', 'CPNotifications')}</span>
                                            <span id="notification_counter-birthday-coming" class="notification_inline-counter" style="display: none"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="notify-birthday_today" class="notify-tab-pane active" rel="birthday-navs" role="notify-tab-pane">
                                        <div class="notification_list fancyScrollbar" data-status="empty" data-tab="birthday" data-sub="today" data-offset="0" rel="birthday_today">
                                            <div class="notification_items"></div>
                                            <div class="notification_list-footer">
                                                <div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div>
                                                <div class="notification_empty-list">{vtranslate('LBL_REMINDER_LIST_EMPTY', 'CPNotifications')}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="notify-birthday_coming" class="notify-tab-pane" rel="birthday-navs" role="notify-tab-pane">
                                        <div class="notification_list fancyScrollbar" data-status="empty" data-tab="birthday" data-sub="coming" data-offset="0" rel="birthday_coming">
                                            <div class="notification_items"></div>
                                            <div class="notification_list-footer">
                                                <div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div>
                                                <div class="notification_empty-list">{vtranslate('LBL_REMINDER_LIST_EMPTY', 'CPNotifications')}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="notification_templates" class="hide">
                <div class="notify-item">
                    <div class="notify-item_avatar left">
                        <div class="avatar-container"></div>
                    </div>
                    <div class="notify-item_container right">
                        <div class="notify-item_content">
                            <div class="notify-item_message"></div>
                        </div>
                        <div class="notify-item_createdtime"></div>
                    </div>
                </div>

                <div class="notify-popup" data-rel="notify-popup">
                    <form name="notify_popup">
                        <div class="notify-popup_title">
                            <div class="notify-popup_title-wraper">
                                {* <span class="notify-popup_title-related-module"></span>: *}
                                <span class="notify-popup_title-content"></span>
                            </div>
                        </div>

                        <div class="notify-popup_content content-wraper"></div>

                        <div class="notify-popup_tips">{vtranslate('LBL_NOTIFY_POPUP_TIPS', 'CPNotifications')}</div>

                        <div class="notify-popup_footer">
                            <div class="center">
                                <a href="javascript:void(0)" class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_BTN_DISMISS', 'CPNotifications')}</a>
                                <button class="btn btn-success" type="submit" name="submit"><strong>{vtranslate('LBL_BTN_VIEW', 'CPNotifications')}</strong></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="notifications_container">
                <div id="notifications_poup-container">
                </div>
            </div>
        </div>

        {* Global constants *}
        {assign var='FIREBASE_CONFIG' value=getGlobalVariable('firebaseConfig')}
        <script>
            const _FCM_SENDER_ID = '{$FIREBASE_CONFIG['fcm_sender_id']}';
        </script>

        {* Notification sources *}
        <link type="text/css" rel="stylesheet" href="{vresource_url('modules/CPNotifications/resources/Notifications.css')}" />
        <script async defer src="{vresource_url('modules/CPNotifications/resources/Notifications.js')}"></script>

        {* Firebase push notification *}
        <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js"></script>
        <script async defer src="{vresource_url('modules/CPNotifications/resources/PushClient.js')}"></script>
    {/if}
{/strip}