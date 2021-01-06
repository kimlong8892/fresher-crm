<?php /* Smarty version Smarty-3.1.7, created on 2021-01-06 16:52:07
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Reminder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6641343475ff58847402531-19427539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13af8c1333041617873601447de542b60d662873' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Reminder.tpl',
      1 => 1593395090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6641343475ff58847402531-19427539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REMINDER_VALUES' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff588474435d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff588474435d')) {function content_5ff588474435d($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['REMINDER_VALUES']->value){?><?php $_smarty_tpl->tpl_vars['REMINDER_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value==''){?><?php $_smarty_tpl->tpl_vars['DAYS'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['HOURS'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars['MINUTES'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['DAY'] = new Smarty_variable($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value[0], null, 0);?><?php $_smarty_tpl->tpl_vars['HOUR'] = new Smarty_variable($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value[1], null, 0);?><?php $_smarty_tpl->tpl_vars['MINUTE'] = new Smarty_variable($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value[2], null, 0);?><?php }?><div id="js-reminder-controls"><div style="float:left;margin-top: 1%;"><input type=hidden name=set_reminder value=0 /><input type=checkbox name=set_reminder <?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value!=''){?>checked<?php }?> value=1 />&nbsp;&nbsp;</div><div id="js-reminder-selections" style="float:left;visibility:<?php if ($_smarty_tpl->tpl_vars['REMINDER_VALUES']->value!=''){?>visible<?php }else{ ?>collapse<?php }?>;"><?php echo $_smarty_tpl->getSubTemplate ("layouts/v7/modules/Vtiger/partials/ReminderFieldTimeSelector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="clearfix"></div></div><?php }} ?>