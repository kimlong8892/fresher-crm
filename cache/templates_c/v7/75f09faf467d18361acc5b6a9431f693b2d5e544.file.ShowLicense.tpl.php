<?php /* Smarty version Smarty-3.1.7, created on 2021-01-07 11:06:42
         compiled from "modules/Settings/Vtiger/tpls/ShowLicense.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16450288025ff688d29bbc26-07302182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f09faf467d18361acc5b6a9431f693b2d5e544' => 
    array (
      0 => 'modules/Settings/Vtiger/tpls/ShowLicense.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16450288025ff688d29bbc26-07302182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff688d2b110a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff688d2b110a')) {function content_5ff688d2b110a($_smarty_tpl) {?><div class="editViewBody"><div class="editViewContents"><div class="fieldBlockContainer"><h4 class="fieldBlockHeader"><?php echo vtranslate('LBL_LICENSE_SYSTEM',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><hr/><table class="configDetails" style="width: 100%"><tbody><tr><td class="fieldLabel alignTop"><?php echo vtranslate('LBL_LICENSE_PRODUCT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td><td class="fieldValue alignTop"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['base'];?>
</td><td class="fieldValue alignTop"></td></tr><tr><td class="fieldLabel alignTop"><?php echo vtranslate('LBL_LICENSE_PACKAGE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td><td class="fieldValue alignTop"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['package'];?>
</td><td class="fieldValue alignTop"></td></tr><tr><td class="fieldLabel alignTop"><?php echo vtranslate('LBL_LICENSE_LIMIT_USER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td><td class="fieldValue alignTop"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['user_limit'];?>
</td><td class="fieldValue alignTop"></td></tr><tr><td class="fieldLabel alignTop"><?php echo vtranslate('LBL_LICENSE_EXPIRE_DATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td><td class="fieldValue alignTop"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['expire_date'];?>
</td><td class="fieldValue alignTop"></td></tr></tbody></table></div></div></div><?php }} ?>