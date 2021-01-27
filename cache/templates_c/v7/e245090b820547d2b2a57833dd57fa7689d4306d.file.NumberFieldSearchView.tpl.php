<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 11:46:52
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/NumberFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236209690600f9ebca21383-49062246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e245090b820547d2b2a57833dd57fa7689d4306d' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/NumberFieldSearchView.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236209690600f9ebca21383-49062246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'FIELD_NAME' => 0,
    'FIELD_TYPE_JS' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f9ebcb3cd6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f9ebcb3cd6')) {function content_600f9ebcb3cd6($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='days'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='hours')){?><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_TYPE_JS"] = new Smarty_variable('int', null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='double'){?><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_TYPE_JS"] = new Smarty_variable('float', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["FIELD_VALUE"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_TYPE_JS"] = new Smarty_variable('int', null, 0);?><?php }?><?php if ((!$_smarty_tpl->tpl_vars['FIELD_NAME']->value)){?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(), null, 0);?><?php }?><div class="" ><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="listSearchContributor inputElement" onkeyup="formatNumber (this, '<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE_JS']->value;?>
')" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" maxlength="13" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/></div><?php }} ?>