<?php /* Smarty version Smarty-3.1.7, created on 2021-01-21 16:38:11
         compiled from "modules/Reports/tpls/CustomReportBestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206635621060024475ea30e9-06947396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d5c06754ddf48050d146d1b47eb9c80c0b4899' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportBestsellers.tpl',
      1 => 1611221877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206635621060024475ea30e9-06947396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60024475efa16',
  'variables' => 
  array (
    'PRINT' => 0,
    'REPORT_NAME' => 0,
    'REPORT_HEADERS' => 0,
    'HEADER_NAME' => 0,
    'REPORT_RESULT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60024475efa16')) {function content_60024475efa16($_smarty_tpl) {?><style></style><div <?php if ($_smarty_tpl->tpl_vars['PRINT']->value){?>style="width:80%; margin:auto"<?php }?>><h2><?php echo $_smarty_tpl->tpl_vars['REPORT_NAME']->value;?>
</h2><table cellpadding="5" cellpadding="0" class="<?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>table table-bordered<?php }else{ ?>printReport reportPrintData<?php }?>"><thead><tr class="blockHeader" style="background: blue; color: white;"><?php  $_smarty_tpl->tpl_vars['HEADER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REPORT_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_NAME']->key => $_smarty_tpl->tpl_vars['HEADER_NAME']->value){
$_smarty_tpl->tpl_vars['HEADER_NAME']->_loop = true;
?><th <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['HEADER_NAME']->value;?>
</th><?php } ?></tr></thead><tbody><?php echo $_smarty_tpl->tpl_vars['REPORT_RESULT']->value;?>
</tbody></table></div><?php }} ?>