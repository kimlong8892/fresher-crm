<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 12:30:26
         compiled from "modules/Vtiger/tpls/CustomUserReferenceFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2131902862600fa8f2ea6029-62878979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e35ec869f72ba599dd38fbb9eedada737eee089' => 
    array (
      0 => 'modules/Vtiger/tpls/CustomUserReferenceFieldSearchView.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2131902862600fa8f2ea6029-62878979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'SEARCH_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600fa8f300817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600fa8f300817')) {function content_600fa8f300817($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['FIELD_INFO'] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><script type="text/javascript">jQuery(function($) {CustomOwnerField.initCustomOwnerFields($('input[name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"]'));});</script><div class="select2_search_div"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="select2 form-control listSearchContributor <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" multiple="true"data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
"<?php if ($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']){?> data-selected-tags='<?php echo ZEND_JSON::encode(Vtiger_Owner_UIType::getSelectedOwnersForSearchView($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));?>
' <?php }?>/></div><?php }} ?>