<?php /* Smarty version Smarty-3.1.7, created on 2021-01-14 11:36:38
         compiled from "modules/Reports/tpls/CustomReportRowTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12018517845fffca561d9516-39996093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b7d2c5f2b57481540af3b21bca3ebd42169491c' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportRowTemplate.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12018517845fffca561d9516-39996093',
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
  'unifunc' => 'content_5fffca5620bd3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fffca5620bd3')) {function content_5fffca5620bd3($_smarty_tpl) {?>

<tr><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROW_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><?php if (strpos($_smarty_tpl->tpl_vars['KEY']->value,'lbl_action')===false){?><td <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</td><?php }elseif(!$_smarty_tpl->tpl_vars['PRINT']->value){?><td><a target="_BLANK" href="index.php?module=Contacts&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php echo vtranslate('LBL_VIEW_DETAILS');?>
</a></td><?php }?><?php } ?></tr><?php }} ?>