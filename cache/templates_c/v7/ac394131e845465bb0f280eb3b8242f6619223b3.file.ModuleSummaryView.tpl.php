<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 11:19:25
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Leads/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1953023474600e46cd011729-06176351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac394131e845465bb0f280eb3b8242f6619223b3' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Leads/ModuleSummaryView.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1953023474600e46cd011729-06176351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e46cd021bf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e46cd021bf')) {function content_600e46cd021bf($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>