<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 10:09:40
         compiled from "layouts/v7/modules/SMSNotifier/SMSHistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914383939600f87f4dec870-66064697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1f93862302ae51f837d7b6148983a2f64ad4b54' => 
    array (
      0 => 'layouts/v7/modules/SMSNotifier/SMSHistory.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914383939600f87f4dec870-66064697',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f87f4e0231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f87f4e0231')) {function content_600f87f4e0231($_smarty_tpl) {?> 

<link type="text/css" rel="stylesheet" href="<?php echo vresource_url("layouts/v7/modules/SMSNotifier/resources/SMSHistory.css");?>
"><script type="text/javascript" src="<?php echo vresource_url("layouts/v7/modules/SMSNotifier/resources/SMSHistory.js");?>
"></script><div class="summaryView"><div class="summaryViewHeader" style="margin-bottom: 15px"><h4 class="display-inline-block"><?php echo vtranslate('LBL_SMS_HISTORY_SUMMARY_VIEW','SMSNotifier');?>
</h4></div><div class="summaryViewFields"><table id="SMSTableDetail" class='table table-bordered dataTable no-footer'><thead><tr><th width="35%"><?php echo vtranslate('LBL_SMS_HISTORY_MESSAGE','SMSNotifier');?>
</th><th width="15%"><?php echo vtranslate('LBL_SMS_HISTORY_PHONE_NUMBER','SMSNotifier');?>
</th><th width="20%"><?php echo vtranslate('LBL_SMS_HISTORY_DATE_CREATED','SMSNotifier');?>
</th><th width="15%"><?php echo vtranslate('LBL_SMS_HISTORY_STATUS','SMSNotifier');?>
</th><th width="15%"><?php echo vtranslate('LBL_SMS_HISTORY_STATUS_MESSAGE','SMSNotifier');?>
</th></tr></thead><tbody></tbody></table></div></div><?php }} ?>