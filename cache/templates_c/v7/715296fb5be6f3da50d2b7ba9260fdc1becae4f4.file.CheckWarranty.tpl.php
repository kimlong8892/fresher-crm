<?php /* Smarty version Smarty-3.1.7, created on 2020-12-24 10:16:09
         compiled from "modules/Products/tpls/CheckWarranty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1820546425fe3148f35ea64-73200817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '715296fb5be6f3da50d2b7ba9260fdc1becae4f4' => 
    array (
      0 => 'modules/Products/tpls/CheckWarranty.tpl',
      1 => 1608779721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1820546425fe3148f35ea64-73200817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe3148f37e6c',
  'variables' => 
  array (
    'RESULT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe3148f37e6c')) {function content_5fe3148f37e6c($_smarty_tpl) {?><div id="checkWarranty"><h4><?php echo vtranslate('LBL_CHECK_WARRANTY_TITLE','Products');?>
</h4><form id="checkWarrantyForm" method="post" action=""><input type="text"name="serial"value="<?php echo $_POST['seral'];?>
"placeholder="<?php echo vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER');?>
">&nbsp<button id="btnCheck" class="btn btn-primary"><?php echo vtranslate('LBL_CHECK_WARRANTY_SUBMIT_BTN','Products');?>
</button></form><div id="result"><?php echo $_smarty_tpl->tpl_vars['RESULT']->value;?>
</div></div><?php }} ?>