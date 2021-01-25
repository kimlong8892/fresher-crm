<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 16:01:37
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2128253948600e88f1144f76-00605932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20986d1f45f488f5f31e8217653640ea6378dee2' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/HelpDesk/DetailViewSummaryContents.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2128253948600e88f1144f76-00605932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e88f115381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e88f115381')) {function content_600e88f115381($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>