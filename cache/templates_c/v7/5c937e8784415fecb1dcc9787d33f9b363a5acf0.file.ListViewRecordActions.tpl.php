<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 14:14:55
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/CronTasks/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:822583368600fc16fd7f107-45539851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c937e8784415fecb1dcc9787d33f9b363a5acf0' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/CronTasks/ListViewRecordActions.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '822583368600fc16fd7f107-45539851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LISTVIEW_ENTRY' => 0,
    'RECORD_LINK' => 0,
    'RECORD_LINK_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600fc16fe353e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600fc16fe353e')) {function content_600fc16fe353e($_smarty_tpl) {?>
<div class="table-actions"><span><img src="<?php echo vimage_path('drag.png');?>
" class="alignTop" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></span><span><?php  $_smarty_tpl->tpl_vars['RECORD_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['RECORD_LINK']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_LINK']->key => $_smarty_tpl->tpl_vars['RECORD_LINK']->value){
$_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = true;
 $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration++;
 $_smarty_tpl->tpl_vars['RECORD_LINK']->last = $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration === $_smarty_tpl->tpl_vars['RECORD_LINK']->total;
?><?php $_smarty_tpl->tpl_vars["RECORD_LINK_URL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getUrl(), null, 0);?><a <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:')===0){?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}" <?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>><i class="fa fa-pencil" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></a>&nbsp;<a class="btnReset" href="javascript:void(0)" data-record-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
"><i class="fa fa-refresh" title="<?php echo vtranslate('LBL_BTN_RESET_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></a><?php if (!$_smarty_tpl->tpl_vars['RECORD_LINK']->lastui-'sortable'){?>&nbsp;&nbsp;<?php }?><?php } ?></span></div>        <?php }} ?>