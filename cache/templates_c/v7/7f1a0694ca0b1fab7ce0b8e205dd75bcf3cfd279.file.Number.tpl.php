<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 09:59:46
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87501361600f85a24d6778-77372635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1a0694ca0b1fab7ce0b8e205dd75bcf3cfd279' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Number.tpl',
      1 => 1593395090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87501361600f85a24d6778-77372635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'FIELD_NAME' => 0,
    'FIELD_TYPE_JS' => 0,
    'FIELD_INFO' => 0,
    'FIELD_TEST' => 0,
    'FIELD_VALUE' => 0,
    'SPECIAL_VALIDATOR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f85a2536b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f85a2536b8')) {function content_600f85a2536b8($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='days'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='hours')){?><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_TYPE_JS"] = new Smarty_variable('int', null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='double'){?><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_TYPE_JS"] = new Smarty_variable('float', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_TYPE_JS"] = new Smarty_variable('int', null, 0);?><?php }?><?php if ((!$_smarty_tpl->tpl_vars['FIELD_NAME']->value)){?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(), null, 0);?><?php }?><!-- Added By Kelvin Thang -- Date 2018-07-25--><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" <?php if (!empty($_smarty_tpl->tpl_vars['FIELD_TYPE_JS']->value)){?> onkeyup="formatNumber(this, '<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE_JS']->value;?>
')" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value['type'];?>
" maxlength="13" <?php }?> class="inputElement <?php echo $_smarty_tpl->tpl_vars['FIELD_TEST']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>/>
<?php }} ?>