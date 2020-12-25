<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:33:50
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/BlockFormFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14738075275fe300ee2d0c89-40889637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '14738075275fe300ee2d0c89-40889637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe300ee2dc9c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe300ee2dc9c')) {function content_5fe300ee2dc9c($_smarty_tpl) {?>
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