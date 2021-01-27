<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 11:20:57
         compiled from "include/EntryPoints/tpls/FormRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:760971350600f8cf9272ed8-08900686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4725b318db08e9ae56fd1ce83d1e20b164bc6eff' => 
    array (
      0 => 'include/EntryPoints/tpls/FormRegister.tpl',
      1 => 1611634852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '760971350600f8cf9272ed8-08900686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f8cf92bec6',
  'variables' => 
  array (
    'LIST_PRODUCT' => 0,
    'VALUE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f8cf92bec6')) {function content_600f8cf92bec6($_smarty_tpl) {?><form action="entrypoint.php?name=FormRegister" method="POST">
    <label for=""><?php echo vtranslate('LBL_FULL_NAME');?>
</label>
    <input type="text" name="data[full_name]" required><br>
    <label for=""><?php echo vtranslate('LBL_PHONE');?>
</label>
    <input type="text" name="data[phone]" required><br>
    <label for=""><?php echo vtranslate('LBL_EMAIL');?>
</label>
    <input type="text" name="data[email]" required><br>
    <label for=""><?php echo vtranslate('LBL_DESCRIPTION');?>
</label>
    <input type="text" name="data[description]"><br>
    <select name="data[product_id]" id="product_id" required>
        <option value="" disabled selected><?php echo vtranslate('LBL_PRODUCT_NAME');?>
</option>
        <?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LIST_PRODUCT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['productid'];?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value['productname'];?>
</option>
        <?php } ?>
    </select><br>
    <input type="hidden" name="input_source" value="Website">
    <input type="hidden" name="simple_params" value="1">
    <button type="submit"><?php echo vtranslate('BTN_SUBMIT');?>
</button>
</form><?php }} ?>