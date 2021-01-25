<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 11:19:25
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1888553895600e46cd10cdc8-44594330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b175914fd47ba0e58493c9f7cdd759387e3319' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1888553895600e46cd10cdc8-44594330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e46cd116e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e46cd116e0')) {function content_600e46cd116e0($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>