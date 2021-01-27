<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 09:55:13
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/BlockFormFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1969888287600f8491619e23-09945956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17c11b63ebda39cee0e9d54e1283788a694fe0e7' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/BlockFormFields.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969888287600f8491619e23-09945956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f84916279e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f84916279e')) {function content_600f84916279e($_smarty_tpl) {?>
<div class="form-group">
    <label class="control-label fieldLabel col-sm-5">
        <span><?php echo vtranslate('LBL_BLOCK_LABEL_DISPLAY_NAME_VN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
        <span class="redColor">*</span>
    </label>
    <div class="controls col-sm-6">
        <input type="text" name="labelDisplayVn" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
    </div>
</div>
<div class="form-group">
    <label class="control-label fieldLabel col-sm-5">
        <span><?php echo vtranslate('LBL_BLOCK_LABEL_DISPLAY_NAME_EN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
        <span class="redColor">*</span>
    </label>
    <div class="controls col-sm-6">
        <input type="text" name="labelDisplayEn" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
    </div>
</div>
<div class="form-group">
    <label class="control-label fieldLabel col-sm-5">
        <span><?php echo vtranslate('LBL_BLOCK_LABEL_KEY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
        <span class="redColor">*</span>
    </label>
    <div class="controls col-sm-6">
        <input type="text" name="label" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
    </div>
</div>
<?php }} ?>