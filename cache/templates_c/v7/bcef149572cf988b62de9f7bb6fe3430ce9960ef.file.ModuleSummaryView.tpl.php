<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 16:01:37
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/HelpDesk/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:869176127600e88f1096e47-70324220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcef149572cf988b62de9f7bb6fe3430ce9960ef' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/HelpDesk/ModuleSummaryView.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '869176127600e88f1096e47-70324220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e88f10a0e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e88f10a0e5')) {function content_600e88f10a0e5($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>