<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 11:37:00
         compiled from "include/EntryPoints/tpls/FormRegister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:675503110600e39547c3db9-82272947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4725b318db08e9ae56fd1ce83d1e20b164bc6eff' => 
    array (
      0 => 'include/EntryPoints/tpls/FormRegister.tpl',
      1 => 1611548055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675503110600e39547c3db9-82272947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e395487794',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e395487794')) {function content_600e395487794($_smarty_tpl) {?><form action="entrypoint.php?name=FormRegister" method="POST">
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
    <input type="hidden" name="input_source" value="Website">
    <input type="hidden" name="simple_params" value="1">
    <button type="submit"><?php echo vtranslate('BTN_SUBMIT');?>
</button>
</form><?php }} ?>