<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:36:17
         compiled from "modules/Vtiger/tpls/CustomOwnerFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7234970785fe30181a93b40-78102679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '687acefd5e4e59dc2518b7fc9e97e3d231e0e73d' => 
    array (
      0 => 'modules/Vtiger/tpls/CustomOwnerFieldSearchView.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7234970785fe30181a93b40-78102679',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'ASSIGNED_USER_ID' => 0,
    'FIELD_INFO' => 0,
    'SEARCH_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe30181abbe8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe30181abbe8')) {function content_5fe30181abbe8($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><div class="select2_search_div"><?php $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST'] = new Smarty_variable(array(), null, 0);?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" class="select2 form-control listSearchContributor <?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" multiple="true"data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
"<?php if ($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']){?> data-selected-tags='<?php echo ZEND_JSON::encode(Vtiger_Owner_UIType::getSelectedOwnersForSearchView($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));?>
' <?php }?>/></div><?php }} ?>