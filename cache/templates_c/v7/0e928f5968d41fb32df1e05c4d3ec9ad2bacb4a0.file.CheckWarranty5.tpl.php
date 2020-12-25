<?php /* Smarty version Smarty-3.1.7, created on 2020-12-25 14:16:45
         compiled from "modules/Products/tpls/CheckWarranty5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17329645735fe56d3f2e7d71-82067071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e928f5968d41fb32df1e05c4d3ec9ad2bacb4a0' => 
    array (
      0 => 'modules/Products/tpls/CheckWarranty5.tpl',
      1 => 1608880601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17329645735fe56d3f2e7d71-82067071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe56d3f39c81',
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'SELECTED_MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe56d3f39c81')) {function content_5fe56d3f39c81($_smarty_tpl) {?><div id="checkWarranty"><h4><?php echo vtranslate('LBL_CHECK_WARRANTY_TITLE','Products');?>
</h4><form id="checkWarrantyForm" method="post" action=""><input type="text"name="serial"value="<?php echo $_POST['seral'];?>
"placeholder="<?php echo vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER');?>
">&nbsp;<button id="btnCheck" class="btn btn-primary"><?php echo vtranslate('LBL_CHECK_WARRANTY_SUBMIT_BTN','Products');?>
</button>&nbsp;<button id="btnDeclare" class="btn btn-primary"><?php echo vtranslate('LBL_CHECK_MODAL_PRODUCT_SUBMIT_BTN','Products');?>
</button></form><div id="result" style="display: none;"><table><tr><th><?php echo vtranslate('LBL_WARRANTY_PRODUCT_NAME','Products');?>
</th><td id="productName"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_SERIAL_NO','Products');?>
</th><td id="serialNo"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_START_DATE','Products');?>
</th><td id="warrantyStartDate"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_END_DATE','Products');?>
</th><td id="warrantyEndDate"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_STATUS','Products');?>
</th><td><span class="label" id="warrantyStatus"></span><input type="hidden" name="product_id" id="product_id"><button id="btn-warranty-extend" type="button" style="display: none;"><?php echo vtranslate('LBL_WARRANTY_BTN_EXTEND','Products');?>
</button></td></tr></table></div><div id="declareProductModal" class="modal-dialog modal-content hide"><?php ob_start();?><?php echo vtranslate('LBL_DECLARE_PRODUCT_MODAL_TITLE','Products');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal declareProductForm" method="POST"><input type="hidden" name="leftSideModule" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"/><div class="form-group"><label class="control-label fieldLabel col-sm-5"><span><?php echo vtranslate('LBL_PRODUCT_NAME','Products');?>
</span>&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-6"><input type="text" name="product_name" class="form-control" data-rule-required="true"/></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><span><?php echo vtranslate('LBL_SERIAL_NO','Products');?>
</span>&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-6"><input type="text" name="serial_no" class="form-control" data-rule-required="true"/></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><span><?php echo vtranslate('LBL_WARRANTY_START_DATE','Products');?>
</span>&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-6"><input type="text" name="warranty_start_date" class="form-control" data-rule-required="true"/></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><span><?php echo vtranslate('LBL_WARRANTY_END_DATE','Products');?>
</span>&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-6"><input type="text" name="warranty_end_date" class="form-control" data-rule-required="true"/></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><?php }} ?>