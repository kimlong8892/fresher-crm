<?php /* Smarty version Smarty-3.1.7, created on 2020-12-25 17:11:21
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/PopupAndRelationListLayout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2714885015fe5bac9ecf048-58912397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b50e04c87a0145b8f5b2170c10d11b779b481f5' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/PopupAndRelationListLayout.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2714885015fe5bac9ecf048-58912397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MODULE_NAME' => 0,
    'QUALIFIED_MODULE' => 0,
    'SELECT2_MODULE_FIELDS' => 0,
    'SELECT2_SELECTED_POPUP_FIELDS' => 0,
    'SELECT2_SELECTED_RELATION_LIST_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe5baca03c56',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe5baca03c56')) {function content_5fe5baca03c56($_smarty_tpl) {?>
<?php if (in_array($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,array('PriceBooks'))){?><br /><?php echo vtranslate('LBL_POPUP_AND_RELATION_LIST_LAYOUT_UNSUPPORTED_MODULE_HINT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><script type="text/javascript" src="<?php echo vresource_url('layouts/v7/modules/Settings/LayoutEditor/resources/PopupAndRelationListEditor.js');?>
"></script><script type="text/javascript">var moduleFields = <?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECT2_MODULE_FIELDS']->value);?>
;</script><form id="popupAndRelationListLayoutForm" class="form-horizontal"><div id="actions" class="row" style="padding: 10px 20px"><button type="button" class="btn btn-primary btnSaveLayout"><i class="fa fa-save"></i>&nbsp; <?php echo vtranslate('LBL_SAVE_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><br /><div class="row"><div class="col-sm-3"><strong><?php echo vtranslate('LBL_POPUP_AND_RELATION_LIST_LAYOUT_POPUP_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="col-sm-9"><input type="text" name="popup_layout" style="width: 100%" data-rule-required="true" data-rule-minlength="5" <?php if ($_smarty_tpl->tpl_vars['SELECT2_SELECTED_POPUP_FIELDS']->value){?> data-selected-tags='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECT2_SELECTED_POPUP_FIELDS']->value);?>
' <?php }?>></div></div><br /><div class="row"><div class="col-sm-3"><strong><?php echo vtranslate('LBL_POPUP_AND_RELATION_LIST_LAYOUT_RELATION_LIST_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="col-sm-9"><input type="text" name="relation_list_layout" style="width: 100%" data-rule-required="true" data-rule-minlength="5" <?php if ($_smarty_tpl->tpl_vars['SELECT2_SELECTED_RELATION_LIST_FIELDS']->value){?> data-selected-tags='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECT2_SELECTED_RELATION_LIST_FIELDS']->value);?>
' <?php }?>></div></div></form><?php }?>
<?php }} ?>