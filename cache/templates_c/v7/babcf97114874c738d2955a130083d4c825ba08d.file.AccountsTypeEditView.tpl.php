<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:33:12
         compiled from "modules/Accounts/tpls/AccountsTypeEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14298494785fe300c821fe87-46512145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'babcf97114874c738d2955a130083d4c825ba08d' => 
    array (
      0 => 'modules/Accounts/tpls/AccountsTypeEditView.tpl',
      1 => 1608699488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14298494785fe300c821fe87-46512145',
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
  'unifunc' => 'content_5fe300c8238e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe300c8238e0')) {function content_5fe300c8238e0($_smarty_tpl) {?><label><input type="radio" name="accounts_type" value="B2B" <?php if (($_smarty_tpl->tpl_vars['RECORD']->value&&$_smarty_tpl->tpl_vars['RECORD']->value->get('accounts_type')=="B2B")||($_smarty_tpl->tpl_vars['RECORD']->value->get('accounts_type')=='')){?>checked<?php }?>><span><?php echo vtranslate("LBL_ACCOUNTS_TYPE_B2B",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;<label><input type="radio" name="accounts_type" value="B2C" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value&&$_smarty_tpl->tpl_vars['RECORD']->value->get('accounts_type')=="B2C"){?>checked<?php }?>><span><?php echo vtranslate("LBL_ACCOUNTS_TYPE_B2C",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><?php }} ?>