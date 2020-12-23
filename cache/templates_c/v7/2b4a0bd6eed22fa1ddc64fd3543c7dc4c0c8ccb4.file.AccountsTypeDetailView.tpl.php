<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:37:23
         compiled from "modules/Accounts/tpls/AccountsTypeDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8965695375fe301c3cc5de0-69584003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b4a0bd6eed22fa1ddc64fd3543c7dc4c0c8ccb4' => 
    array (
      0 => 'modules/Accounts/tpls/AccountsTypeDetailView.tpl',
      1 => 1608707176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8965695375fe301c3cc5de0-69584003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe301c3ce5de',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe301c3ce5de')) {function content_5fe301c3ce5de($_smarty_tpl) {?><label><input disabled type="radio" name="accounts_type" value="B2B" <?php if (($_smarty_tpl->tpl_vars['RECORD']->value&&$_smarty_tpl->tpl_vars['RECORD']->value->get('accounts_type')=="B2B")||($_smarty_tpl->tpl_vars['RECORD']->value->get('accounts_type')=='')){?>checked<?php }?>><span><?php echo vtranslate("LBL_ACCOUNTS_TYPE_B2B",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;<label><input disabled type="radio" name="accounts_type" value="B2C" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value&&$_smarty_tpl->tpl_vars['RECORD']->value->get('accounts_type')=="B2C"){?>checked<?php }?>><span><?php echo vtranslate("LBL_ACCOUNTS_TYPE_B2C",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><?php }} ?>