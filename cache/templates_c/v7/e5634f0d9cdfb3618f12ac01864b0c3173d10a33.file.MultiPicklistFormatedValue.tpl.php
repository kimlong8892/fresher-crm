<?php /* Smarty version Smarty-3.1.7, created on 2021-01-15 17:52:14
         compiled from "layouts/v7/modules/Vtiger/uitypes/MultiPicklistFormatedValue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1157718293600173dee21ff4-35079498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5634f0d9cdfb3618f12ac01864b0c3173d10a33' => 
    array (
      0 => 'layouts/v7/modules/Vtiger/uitypes/MultiPicklistFormatedValue.tpl',
      1 => 1593395090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1157718293600173dee21ff4-35079498',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RAW_VALUES_STRING' => 0,
    'PICKLIST_VALUES' => 0,
    'FIELD_MODEL' => 0,
    'VALUE' => 0,
    'PICKLIST_COLOR' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600173deee6a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600173deee6a6')) {function content_600173deee6a6($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable(array_values(array_filter(explode(' |##| ',$_smarty_tpl->tpl_vars['RAW_VALUES_STRING']->value))), null, 0);?><?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?><?php $_smarty_tpl->tpl_vars['PICKLIST_COLOR'] = new Smarty_variable(Settings_Picklist_Module_Model::getPicklistColorByValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),trim($_smarty_tpl->tpl_vars['VALUE']->value)), null, 0);?><span class="picklist-color" <?php if (!empty($_smarty_tpl->tpl_vars['PICKLIST_COLOR']->value)){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['PICKLIST_COLOR']->value;?>
; color: <?php echo Settings_Picklist_Module_Model::getTextColor($_smarty_tpl->tpl_vars['PICKLIST_COLOR']->value);?>
;" <?php }?>><?php echo vtranslate(trim($_smarty_tpl->tpl_vars['VALUE']->value),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><?php } ?><?php }} ?>