<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 10:26:29
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/HelpDesk/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:542743353600f8be5e69ee6-40040793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '542743353600f8be5e69ee6-40040793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f8be5e70a9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f8be5e70a9')) {function content_600f8be5e70a9($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>