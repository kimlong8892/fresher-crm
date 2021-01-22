<?php /* Smarty version Smarty-3.1.7, created on 2021-01-22 11:05:54
         compiled from "modules/Reports/tpls/CustomReportRowTemplateBestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166941217060024475bf1329-13861088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10b49cb3345db67ffb75ab45663e1ee227b9fc3' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportRowTemplateBestsellers.tpl',
      1 => 1611288351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166941217060024475bf1329-13861088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60024475e4e96',
  'variables' => 
  array (
    'ROW_DATA' => 0,
    'KEY' => 0,
    'PRINT' => 0,
    'VALUE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60024475e4e96')) {function content_60024475e4e96($_smarty_tpl) {?><tr><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROW_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><?php if (strpos($_smarty_tpl->tpl_vars['KEY']->value,'lbl_action')===false){?><td <?php if ($_smarty_tpl->tpl_vars['KEY']->value!="productcategory"){?>style="text-align: right;"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</td><?php }?><?php } ?></tr><?php }} ?>