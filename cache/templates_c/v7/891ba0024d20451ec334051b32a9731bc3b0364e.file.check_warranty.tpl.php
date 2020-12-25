<?php /* Smarty version Smarty-3.1.7, created on 2020-12-25 11:15:46
         compiled from "include/EntryPoints/tpls/check_warranty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1035266585fe55bc2be4718-36263728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '891ba0024d20451ec334051b32a9731bc3b0364e' => 
    array (
      0 => 'include/EntryPoints/tpls/check_warranty.tpl',
      1 => 1608869741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1035266585fe55bc2be4718-36263728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe55bc2f3fd3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe55bc2f3fd3')) {function content_5fe55bc2f3fd3($_smarty_tpl) {?><script src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery.min.js');?>
"></script><script src="<?php echo vresource_url('resources/CheckWarranty.js');?>
"></script><title><?php echo vtranslate('LBL_CHECK_WARRANTY_TITLE','Products');?>
</title><link rel="stylesheet" href="<?php echo vresource_url('resources/CheckWarranty.css');?>
"><div id="checkWarranty"><h4><?php echo vtranslate('LBL_CHECK_WARRANTY_TITLE','Products');?>
</h4><form id="checkWarrantyForm" method="post" action=""><input type="text"name="serial"value="<?php echo $_POST['seral'];?>
"placeholder="<?php echo vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER');?>
">&nbsp;<button id="btnCheck" class="btn btn-primary"><?php echo vtranslate('LBL_CHECK_WARRANTY_SUBMIT_BTN','Products');?>
</button></form><div id="result" style="display: none;"><table><tr><th><?php echo vtranslate('LBL_WARRANTY_PRODUCT_NAME','Products');?>
</th><td id="productName"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_SERIAL_NO','Products');?>
</th><td id="serialNo"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_START_DATE','Products');?>
</th><td id="warrantyStartDate"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_END_DATE','Products');?>
</th><td id="warrantyEndDate"></td></tr><tr><th><?php echo vtranslate('LBL_WARRANTY_STATUS','Products');?>
</th><td><span class="label" id="warrantyStatus"></span></td></tr></table></div></div><?php }} ?>