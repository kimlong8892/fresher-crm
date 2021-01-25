<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 15:36:20
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1764031348600e8304c74c52-86953247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c04b62b813b116b91a5efeec53737c479af58308' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Contacts/ModuleSummaryView.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1764031348600e8304c74c52-86953247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e8304c844e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e8304c844e')) {function content_600e8304c844e($_smarty_tpl) {?>

<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>