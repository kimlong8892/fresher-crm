<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:33:12
         compiled from "modules/Vtiger/tpls/CustomOwnerField.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15837063415fe300c81e8b45-55799854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc25cd28012d6a79fb337699cf5ece8de4b9739f' => 
    array (
      0 => 'modules/Vtiger/tpls/CustomOwnerField.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15837063415fe300c81e8b45-55799854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_VALUE' => 0,
    'FIELD_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe300c82035a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe300c82035a')) {function content_5fe300c82035a($_smarty_tpl) {?>

<input type="hidden" name="current_owner_id" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"/><input type="hidden" name="current_assignees_hash" value="<?php echo Vtiger_Owner_UIType::getOwnerIdsHash($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
"/><input type="text" autocomplete="off" class="inputElement select2" style="width: 100%" data-rule-required="true" data-rule-main-owner="true"data-fieldtype="owner" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-assignable-users-only="true"<?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value){?><?php if (is_array($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)){?>data-selected-tags='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
'<?php }else{ ?>data-selected-tags='<?php echo ZEND_JSON::encode(Vtiger_Owner_UIType::getCurrentOwners($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));?>
'<?php }?><?php }?>/><?php }} ?>