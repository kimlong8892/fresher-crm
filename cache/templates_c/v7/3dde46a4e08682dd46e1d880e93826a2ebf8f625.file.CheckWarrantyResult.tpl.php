<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 17:47:45
         compiled from "modules/Products/tpls/CheckWarrantyResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8953050425fe316353f1521-66164095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dde46a4e08682dd46e1d880e93826a2ebf8f625' => 
    array (
      0 => 'modules/Products/tpls/CheckWarrantyResult.tpl',
      1 => 1608720452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8953050425fe316353f1521-66164095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe31635467d5',
  'variables' => 
  array (
    'PRODUCT_RECORD' => 0,
    'STATUS_LABEL' => 0,
    'WARRANTY_STATUS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe31635467d5')) {function content_5fe31635467d5($_smarty_tpl) {?><table><tr><th><?php echo vtranslate('LBL_WARRANTY_PRODUCT_NAME','Products');?>
</th><td><?php echo $_smarty_tpl->tpl_vars['PRODUCT_RECORD']->value->get('productname');?>
</td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_SERIAL_NO','Products');?>
</th><td><?php echo $_smarty_tpl->tpl_vars['PRODUCT_RECORD']->value->get('serialno');?>
</td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_START_DATE','Products');?>
</th><td><?php echo $_smarty_tpl->tpl_vars['PRODUCT_RECORD']->value->get('start_date');?>
</td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_END_DATE','Products');?>
</th><td><?php echo $_smarty_tpl->tpl_vars['PRODUCT_RECORD']->value->get('expiry_date');?>
</td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_STATUS','Products');?>
</th><td><span class="label <?php echo $_smarty_tpl->tpl_vars['STATUS_LABEL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['WARRANTY_STATUS']->value;?>
</span></td></tr></table><?php }} ?>