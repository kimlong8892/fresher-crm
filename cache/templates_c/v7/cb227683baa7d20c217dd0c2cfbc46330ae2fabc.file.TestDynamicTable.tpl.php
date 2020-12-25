<?php /* Smarty version Smarty-3.1.7, created on 2020-12-25 09:59:05
         compiled from "modules/Products/tpls/TestDynamicTable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14143621475fe552ea70b811-18198765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb227683baa7d20c217dd0c2cfbc46330ae2fabc' => 
    array (
      0 => 'modules/Products/tpls/TestDynamicTable.tpl',
      1 => 1608865002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14143621475fe552ea70b811-18198765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe552ea75808',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe552ea75808')) {function content_5fe552ea75808($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo vresource_url('resources/libraries/DynamicTable/DynamicTable.css');?>
"><script src="<?php echo vresource_url('resources/libraries/DynamicTable/DynamicTable.js');?>
"></script><table id="tblDemo" class="dynamicTable" width="60%"><thead><th>Col1</th><th>Col2</th><th>Col3</th><th>Col4</th><th>Col5</th><th><button type="button"class="btnAddRow btn-primary"><i class="fa fa-plus"></i></button></th></thead><tbody></tbody><tfoot class="template" style="display: none;"><tr><td><input type="text" name="field1[]" class="form-control"><input type="hidden" name="deleted[]"></td><td><input type="text" name="field2[]" class="form-control"></td><td><input type="text" name="field3[]" class="form-control"></td><td><input type="text" name="field4[]" class="form-control"></td><td><input type="text" name="field5[]" class="form-control"></td><td><button type="button" class="btnDelRow btn-danger"><i class="fa fa-minus"></i></button></td></tr></tfoot></table><?php }} ?>