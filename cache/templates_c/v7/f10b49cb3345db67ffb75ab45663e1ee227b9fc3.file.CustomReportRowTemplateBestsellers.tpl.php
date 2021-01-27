<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 10:11:38
         compiled from "modules/Reports/tpls/CustomReportRowTemplateBestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:573972568600f886a48a555-06355981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10b49cb3345db67ffb75ab45663e1ee227b9fc3' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportRowTemplateBestsellers.tpl',
      1 => 1611628156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '573972568600f886a48a555-06355981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROW_DATA' => 0,
    'KEY' => 0,
    'PRINT' => 0,
    'VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f886a53c68',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f886a53c68')) {function content_600f886a53c68($_smarty_tpl) {?><tr><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROW_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><?php if ($_smarty_tpl->tpl_vars['KEY']->value=="total_money"){?><td <?php if ($_smarty_tpl->tpl_vars['KEY']->value!="productcategory"){?>style="text-align: right;"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php ob_start();?><?php echo number_format($_smarty_tpl->tpl_vars['VALUE']->value,0,'',',');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</td><?php }else{ ?><td <?php if ($_smarty_tpl->tpl_vars['KEY']->value!="productcategory"){?>style="text-align: right;"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</td><?php }?><?php } ?></tr><?php }} ?>