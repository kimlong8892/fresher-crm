<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:33:11
         compiled from "modules/CPNotifications/tpls/Notifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16263857595fe300c76c5896-29843488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c002f40d50cc47d6e04c6d9b3466616957f65046' => 
    array (
      0 => 'modules/CPNotifications/tpls/Notifications.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16263857595fe300c76c5896-29843488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULES_TRANSLATED_SINGLE_LABEL' => 0,
    'USER_NOTIFICATIONS_PREFERENCE' => 0,
    'FIREBASE_CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe300c772d39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe300c772d39')) {function content_5fe300c772d39($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['USER_NOTIFICATIONS_PREFERENCE'] = new Smarty_variable(CPNotifications_Data_Model::loadUserConfig('notification_config'), null, 0);?><?php $_smarty_tpl->tpl_vars['MODULES_TRANSLATED_SINGLE_LABEL'] = new Smarty_variable(getModulesTranslatedSingleLabel(), null, 0);?><script>window._RELATED_TABS_INFO = {modules: JSON.parse('<?php echo json_encode($_smarty_tpl->tpl_vars['MODULES_TRANSLATED_SINGLE_LABEL']->value);?>
'),tabs: {detail: '<?php echo vtranslate("LBL_DETAILS","Vtiger");?>
',update: '<?php echo vtranslate("LBL_UPDATES","Vtiger");?>
'}}</script><?php if ($_smarty_tpl->tpl_vars['USER_NOTIFICATIONS_PREFERENCE']->value!=null&&$_smarty_tpl->tpl_vars['USER_NOTIFICATIONS_PREFERENCE']->value->receive_notifications==1){?><div id="notification" class="notification rel"><a href="javascript: void(0)" id="notification_popover-tigger" class="fa fa-bell notification_popover-tigger rel" data-for="#notification_popover" aria-hidden="true" title="Notifications"><div id="notification_counter" class="inline counter notification_counter" style="display: none"></div></a><div id="notification_popover" class="popover fade bottom in" role="tooltip" style="display: none"><div class="arrow" style="left: auto;"></div><div class="popover-content"><div class="notification_container notify-tabs"><ul class="nav nav-tabs tabs-type notification_tabs" role="tablist"><li class="nav-item rel" title="<?php echo vtranslate('LBL_TITLE_NOTIFICATION','CPNotifications');?>
" data-for="div#notify-tabs_notify-pane" data-group="notify-navs"><a class="nav-link"><i class="fa fa-clock-o" aria-hidden="true"></i></a><div id="notification_counter-notify" class="inline counter notification_sub-counter" style="display: none"></div></li><?php if ($_smarty_tpl->tpl_vars['USER_NOTIFICATIONS_PREFERENCE']->value->show_activity_reminders==1){?><li class="nav-item rel" title="<?php echo vtranslate('LBL_TITLE_ACTIVITY','CPNotifications');?>
" data-for="div#notify-tabs_tasks-pane" data-group="notify-navs" data-sub="tasks-navs"><a class="nav-link"><i class="fa fa-tasks" aria-hidden="true"></i></a><div id="notification_counter-task" class="inline counter notification_sub-counter" style="display: none"></div></li><?php }?><?php if ($_smarty_tpl->tpl_vars['USER_NOTIFICATIONS_PREFERENCE']->value->show_customer_birthday_reminders==1){?><li class="nav-item rel" title="<?php echo vtranslate('LBL_TITLE_BIRTHDAY','CPNotifications');?>
" data-for="div#notify-tabs_birthday-pane" data-group="notify-navs" data-sub="birthday-navs"><a class="nav-link"><i class="fa fa-birthday-cake" aria-hidden="true"></i></a><div id="notification_counter-birthday" class="inline counter notification_sub-counter" style="display: none"></div></li><?php }?></ul><div class="tab-content"><div id="notify-tabs_notify-pane" class="notify-tab-pane" rel="notify-navs" role="notify-tab-pane"><div class="notification_list fancyScrollbar" data-status="empty" data-tab="notification" data-offset="0" rel="notification"><div class="notification_items"></div><div class="notification_list-footer"><div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div><div class="notification_empty-list"><?php echo vtranslate('LBL_NOTIFICATION_LIST_EMPTY','CPNotifications');?>
</div></div></div><div class="notification_footer"><a class="footer-item" href="javascript:Notifications.markAsRead('all')"><?php echo vtranslate('LBL_READ_ALL','CPNotifications');?>
</a><a class="footer-item" target="black" href="index.php?module=Vtiger&parent=Settings&view=UserNotifications"><?php echo vtranslate('LBL_CONFIGS','CPNotifications');?>
</a></div></div><div id="notify-tabs_tasks-pane" class="notify-tab-pane" rel="notify-navs" role="notify-tab-pane"><ul class="nav nav-tabs notification_subtabs"><li class="nav-item active" title="<?php echo vtranslate('LBL_TASK_GOING_TO_OVERDUE','CPNotifications');?>
" data-for="div#notify-activity_coming" data-group="tasks-navs"><a class="nav-link rel"><span><?php echo vtranslate('LBL_TASK_GOING_TO_OVERDUE','CPNotifications');?>
<span><span id="notification_counter-activity-coming" class="notification_inline-counter" style="display: none"></span></a></li><li class="nav-item" title="<?php echo vtranslate('LBL_TASK_OVERDUE','CPNotifications');?>
" data-for="div#notify-activity_overdue" data-group="tasks-navs"><a class="nav-link rel"><span><?php echo vtranslate('LBL_TASK_OVERDUE','CPNotifications');?>
</span><span id="notification_counter-activity-overdue" class="notification_inline-counter" style="display: none"></span></a></li></ul><div class="tab-content"><div id="notify-activity_coming" class="notify-tab-pane active" rel="tasks-navs" role="notify-tab-pane"><div class="notification_list fancyScrollbar" data-status="empty" data-tab="activity" data-sub="coming" data-offset="0" rel="activity_coming"><div class="notification_items"></div><div class="notification_list-footer"><div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div><div class="notification_empty-list"><?php echo vtranslate('LBL_REMINDER_LIST_EMPTY','CPNotifications');?>
</div></div></div></div><div id="notify-activity_overdue" class="notify-tab-pane" rel="tasks-navs" role="notify-tab-pane"><div class="notification_list fancyScrollbar" data-status="empty" data-tab="activity" data-sub="overdue" data-offset="0" rel="activity_overdue"><div class="notification_items"></div><div class="notification_list-footer"><div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div><div class="notification_empty-list"><?php echo vtranslate('LBL_REMINDER_LIST_EMPTY','CPNotifications');?>
</div></div></div></div></div></div><div id="notify-tabs_birthday-pane" class="notify-tab-pane" rel="notify-navs" role="notify-tab-pane"><ul class="nav nav-tabs notification_subtabs"><li class="nav-item active" title="<?php echo vtranslate('LBL_BIRTHDAY_TODAY','CPNotifications');?>
" data-for="div#notify-birthday_today" data-group="birthday-navs" data-list=""><a class="nav-link rel"><span><?php echo vtranslate('LBL_BIRTHDAY_TODAY','CPNotifications');?>
</span><span id="notification_counter-birthday-today" class="notification_inline-counter" style="display: none"></span></a></li><li class="nav-item" title="<?php echo vtranslate('LBL_BIRTHDAY_COMING','CPNotifications');?>
" data-for="div#notify-birthday_coming" data-group="birthday-navs"><a class="nav-link rel"><span><?php echo vtranslate('LBL_BIRTHDAY_COMING','CPNotifications');?>
</span><span id="notification_counter-birthday-coming" class="notification_inline-counter" style="display: none"></span></a></li></ul><div class="tab-content"><div id="notify-birthday_today" class="notify-tab-pane active" rel="birthday-navs" role="notify-tab-pane"><div class="notification_list fancyScrollbar" data-status="empty" data-tab="birthday" data-sub="today" data-offset="0" rel="birthday_today"><div class="notification_items"></div><div class="notification_list-footer"><div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div><div class="notification_empty-list"><?php echo vtranslate('LBL_REMINDER_LIST_EMPTY','CPNotifications');?>
</div></div></div></div><div id="notify-birthday_coming" class="notify-tab-pane" rel="birthday-navs" role="notify-tab-pane"><div class="notification_list fancyScrollbar" data-status="empty" data-tab="birthday" data-sub="coming" data-offset="0" rel="birthday_coming"><div class="notification_items"></div><div class="notification_list-footer"><div class="notification_loader"><i class="fa fa-refresh fa-spin"></i></div><div class="notification_empty-list"><?php echo vtranslate('LBL_REMINDER_LIST_EMPTY','CPNotifications');?>
</div></div></div></div></div></div></div></div></div></div><div id="notification_templates" class="hide"><div class="notify-item"><div class="notify-item_avatar left"><div class="avatar-container"></div></div><div class="notify-item_container right"><div class="notify-item_content"><div class="notify-item_message"></div></div><div class="notify-item_createdtime"></div></div></div><div class="notify-popup" data-rel="notify-popup"><form name="notify_popup"><div class="notify-popup_title"><div class="notify-popup_title-wraper"><span class="notify-popup_title-content"></span></div></div><div class="notify-popup_content content-wraper"></div><div class="notify-popup_tips"><?php echo vtranslate('LBL_NOTIFY_POPUP_TIPS','CPNotifications');?>
</div><div class="notify-popup_footer"><div class="center"><a href="javascript:void(0)" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_BTN_DISMISS','CPNotifications');?>
</a><button class="btn btn-success" type="submit" name="submit"><strong><?php echo vtranslate('LBL_BTN_VIEW','CPNotifications');?>
</strong></button></div></div></form></div></div><div id="notifications_container"><div id="notifications_poup-container"></div></div></div><?php $_smarty_tpl->tpl_vars['FIREBASE_CONFIG'] = new Smarty_variable(getGlobalVariable('firebaseConfig'), null, 0);?><script>const _FCM_SENDER_ID = '<?php echo $_smarty_tpl->tpl_vars['FIREBASE_CONFIG']->value['fcm_sender_id'];?>
';</script><link type="text/css" rel="stylesheet" href="<?php echo vresource_url('modules/CPNotifications/resources/Notifications.css');?>
" /><script async defer src="<?php echo vresource_url('modules/CPNotifications/resources/Notifications.js');?>
"></script><script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script><script src="https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js"></script><script async defer src="<?php echo vresource_url('modules/CPNotifications/resources/PushClient.js');?>
"></script><?php }?><?php }} ?>