<?php /* Smarty version Smarty-3.1.7, created on 2020-12-24 10:15:24
         compiled from "modules/Products/tpls/CheckWarranty3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13092549845fe3fb65ac5936-13196082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df22b047f85e67da01a48a2dc0edc2ab8b71cf72' => 
    array (
      0 => 'modules/Products/tpls/CheckWarranty3.tpl',
      1 => 1608779716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13092549845fe3fb65ac5936-13196082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe3fb65bba9c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe3fb65bba9c')) {function content_5fe3fb65bba9c($_smarty_tpl) {?><div id="checkWarranty"><h4><?php echo vtranslate('LBL_CHECK_WARRANTY_TITLE','Products');?>
</h4><form id="checkWarrantyForm" method="post" action=""><input type="text"name="serial"value="<?php echo $_POST['seral'];?>
"placeholder="<?php echo vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER');?>
">&nbsp<button id="btnCheck" class="btn btn-primary"><?php echo vtranslate('LBL_CHECK_WARRANTY_SUBMIT_BTN','Products');?>
</button></form><div id="result" style="display: none;"><table><tr><th><?php echo vtranslate('LBL_WARRANTY_PRODUCT_NAME','Products');?>
</th><td id="productName"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_SERIAL_NO','Products');?>
</th><td id="serialNo"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_START_DATE','Products');?>
</th><td id="warrantyStartDate"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_END_DATE','Products');?>
</th><td id="warrantyEndDate"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_STATUS','Products');?>
</th><td><span class="label" id="warrantyStatus"></span></td></tr></table></div></div><?php }} ?>