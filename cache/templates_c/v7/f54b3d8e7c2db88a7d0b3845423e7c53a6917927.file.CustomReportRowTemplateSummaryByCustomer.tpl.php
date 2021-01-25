<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 10:35:19
         compiled from "modules/Reports/tpls/CustomReportRowTemplateSummaryByCustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1583729579600a80dc2eff53-44203554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f54b3d8e7c2db88a7d0b3845423e7c53a6917927' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportRowTemplateSummaryByCustomer.tpl',
      1 => 1611545684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1583729579600a80dc2eff53-44203554',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600a80dc37935',
  'variables' => 
  array (
    'ROW_DATA' => 0,
    'KEY' => 0,
    'PRINT' => 0,
    'VALUE' => 0,
    'LIST_PRODUCT' => 0,
    'VALUE_PRODUCT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600a80dc37935')) {function content_600a80dc37935($_smarty_tpl) {?><tr style="background: black; color: white;"><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROW_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><?php if ($_smarty_tpl->tpl_vars['KEY']->value!="list_product"){?><td colspan="4" <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</td><?php }?><?php } ?></tr><?php  $_smarty_tpl->tpl_vars['VALUE_PRODUCT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE_PRODUCT']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY_PRODUCT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LIST_PRODUCT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_PRODUCT']->key => $_smarty_tpl->tpl_vars['VALUE_PRODUCT']->value){
$_smarty_tpl->tpl_vars['VALUE_PRODUCT']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY_PRODUCT']->value = $_smarty_tpl->tpl_vars['VALUE_PRODUCT']->key;
?><tr><td <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE_PRODUCT']->value['serialno'];?>
</td><td <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE_PRODUCT']->value['productname'];?>
</td><td style="text-align: right !important;" <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE_PRODUCT']->value['createdtime'];?>
</td><td style="text-align: right !important;" <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo number_format($_smarty_tpl->tpl_vars['VALUE_PRODUCT']->value['unit_price'],0,'',',');?>
</td></tr><?php } ?><?php }} ?>