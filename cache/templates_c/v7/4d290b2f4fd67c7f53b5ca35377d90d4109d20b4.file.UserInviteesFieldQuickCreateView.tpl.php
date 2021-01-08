<?php /* Smarty version Smarty-3.1.7, created on 2021-01-06 16:52:07
         compiled from "modules/Calendar/tpls/UserInviteesFieldQuickCreateView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6938301095ff588474dae26-46333796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d290b2f4fd67c7f53b5ca35377d90d4109d20b4' => 
    array (
      0 => 'modules/Calendar/tpls/UserInviteesFieldQuickCreateView.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6938301095ff588474dae26-46333796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff588474e700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff588474e700')) {function content_5ff588474e700($_smarty_tpl) {?>

<input type="text" autocomplete="off" class="inputElement select2" style="width: 100%"data-fieldtype="text" data-fieldname="user_invitees" data-name="user_invitees" name="user_invitees"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')){?> data-selected-tags='<?php echo ZEND_JSON::encode(Vtiger_Owner_UIType::getCurrentOwners($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));?>
' <?php }?>/><?php }} ?>