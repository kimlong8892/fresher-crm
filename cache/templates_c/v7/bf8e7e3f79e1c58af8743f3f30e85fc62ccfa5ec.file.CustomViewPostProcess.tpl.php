<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 16:57:35
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/CustomViewPostProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12596073645fe3148f38d053-79756397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf8e7e3f79e1c58af8743f3f30e85fc62ccfa5ec' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/CustomViewPostProcess.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12596073645fe3148f38d053-79756397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELDS_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe3148f3a4e1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe3148f3a4e1')) {function content_5fe3148f3a4e1($_smarty_tpl) {?>

</div></div><script type="text/javascript">var extraFieldsInfo = {};var uimeta = (function() {var fieldInfo = <?php echo $_smarty_tpl->tpl_vars['FIELDS_INFO']->value;?>
;return {field: {get: function(name, property) {if (name && property === undefined) {return fieldInfo[name] ? fieldInfo[name] : extraFieldsInfo[name];}if (name && property) {if(fieldInfo[name] && fieldInfo[name][property]) {return fieldInfo[name][property];}else if(extraFieldsInfo[name] && extraFieldsInfo[name][property]) {return extraFieldsInfo[name][property];}}},isMandatory: function(name) {if (fieldInfo[name]) {return fieldInfo[name].mandatory;}if (extraFieldsInfo[name]) {return extraFieldsInfo[name].mandatory;}return false;},getType: function(name) {if (fieldInfo[name]) {return fieldInfo[name].type;}if (extraFieldsInfo[name]) {return extraFieldsInfo[name].type;}return false;}},};})();</script><?php }} ?>