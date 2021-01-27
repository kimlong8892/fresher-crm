<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 09:59:20
         compiled from "modules/Reports/tpls/CustomReportCustom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:718140022600f8588df29f1-07809154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a62cfd3c74a430a98a2798e9c7c7ced8ee2d95' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportCustom.tpl',
      1 => 1611223044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718140022600f8588df29f1-07809154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRINT' => 0,
    'REPORT_NAME' => 0,
    'REPORT_HEADERS' => 0,
    'HEADER_NAME' => 0,
    'PRIMARY_MODULE' => 0,
    'REPORT_RESULT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f8588e1514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f8588e1514')) {function content_600f8588e1514($_smarty_tpl) {?><div <?php if ($_smarty_tpl->tpl_vars['PRINT']->value){?>style="width:80%; margin:auto"<?php }?>><h2><?php echo $_smarty_tpl->tpl_vars['REPORT_NAME']->value;?>
</h2><table cellpadding="5" cellpadding="0" class="<?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>table table-bordered<?php }else{ ?>printReport reportPrintData<?php }?>"><thead><tr class="blockHeader"><?php  $_smarty_tpl->tpl_vars['HEADER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REPORT_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_NAME']->key => $_smarty_tpl->tpl_vars['HEADER_NAME']->value){
$_smarty_tpl->tpl_vars['HEADER_NAME']->_loop = true;
?><th style="color: white;" <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo $_smarty_tpl->tpl_vars['HEADER_NAME']->value;?>
</th><?php } ?><th style="color: white;" <?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>nowrap<?php }?>><?php echo vtranslate('LBL_AGE',$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value);?>
</th><?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?><th nowrap><?php echo vtranslate('LBL_ACTION');?>
</th><?php }?></tr></thead><tbody><?php echo $_smarty_tpl->tpl_vars['REPORT_RESULT']->value;?>
</tbody></table></div><?php }} ?>