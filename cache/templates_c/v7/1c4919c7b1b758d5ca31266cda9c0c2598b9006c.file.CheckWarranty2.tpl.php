<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 17:48:36
         compiled from "modules/Products/tpls/CheckWarranty2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7026764335fe31b3e611d24-28400213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4919c7b1b758d5ca31266cda9c0c2598b9006c' => 
    array (
      0 => 'modules/Products/tpls/CheckWarranty2.tpl',
      1 => 1608720514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7026764335fe31b3e611d24-28400213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe31b3e6aa10',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe31b3e6aa10')) {function content_5fe31b3e6aa10($_smarty_tpl) {?><div id="checkWarranty"><h4><?php echo vtranslate('LBL_CHECK_WARRANTY_TITLE','Products');?>
</h4><form id="checkWarrantyForm" method="POST" action=""><input type="text" name="serial" value="<?php echo $_POST['serial'];?>
"placeholder="<?php echo vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER','Products');?>
" class="inputElement"style="width:200px"/><button id="btnCheck"class="btn btn-primary"><?php echo vtranslate('LBL_CHECK_WARRANTY_SUBMIT_BTN','Products');?>
</button></form><div id="result"></div></div><?php }} ?>