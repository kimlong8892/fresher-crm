<?php /* Smarty version Smarty-3.1.7, created on 2021-01-15 08:53:11
         compiled from "modules/Reports/tpls/CustomReportRowTemplateCustom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19068393896000f439943ca8-21432365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a7a05fd19d6e433d23ba807eba88f60b0b700b' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportRowTemplateCustom.tpl',
      1 => 1610675585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19068393896000f439943ca8-21432365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6000f4399d226',
  'variables' => 
  array (
    'ROW_DATA' => 0,
    'KEY' => 0,
    'PRINT' => 0,
    'VALUE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6000f4399d226')) {function content_6000f4399d226($_smarty_tpl) {?><tr><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROW_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><?php if (strpos($_smarty_tpl->tpl_vars['KEY']->value,'lbl_action')===false){?><td style="color: red;" <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</td><?php }elseif(!$_smarty_tpl->tpl_vars['PRINT']->value){?><td style="color: red;" valign="middle"><a target="_BLANK" href="index.php?module=Contacts&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php echo vtranslate('LBL_VIEW_DETAILS');?>
</a></td><?php }?><?php } ?></tr><?php }} ?>