<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:33:25
         compiled from "modules/Accounts/tpls/AccountsTypeQuickCreate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13923507065fe300d58d8f94-09628004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '569712484ee4788e796c66aa2b11b8765abb3bf0' => 
    array (
      0 => 'modules/Accounts/tpls/AccountsTypeQuickCreate.tpl',
      1 => 1608707038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13923507065fe300d58d8f94-09628004',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe300d590373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe300d590373')) {function content_5fe300d590373($_smarty_tpl) {?><label><input type="radio" name="accounts_type" value="B2B" checked><span><?php echo vtranslate("LBL_ACCOUNTS_TYPE_B2B",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label>&nbsp;<label><input type="radio" name="accounts_type" value="B2C"><span><?php echo vtranslate("LBL_ACCOUNTS_TYPE_B2C",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></label><?php }} ?>