<?php /* Smarty version Smarty-3.1.7, created on 2021-01-06 09:29:28
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Users/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1468630015ff520880c8b58-29129919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84409f32960cffe8f2c69740a9962e5a354c188' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Users/ListViewRecordActions.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1468630015ff520880c8b58-29129919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CUSTOM_ROW_ACTIONS' => 0,
    'MODULE' => 0,
    'LISTVIEW_ENTRY' => 0,
    'IS_MODULE_EDITABLE' => 0,
    'IS_MODULE_DELETABLE' => 0,
    'USER_MODEL' => 0,
    'CUSTOM_ROW_ADVANCED_ACTIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff5208813d71',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff5208813d71')) {function content_5ff5208813d71($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["CUSTOM_ROW_ACTIONS"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/ListViewCustomRowActions.tpl", null, 0);?><?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_ROW_ACTIONS']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_ROW_ACTIONS']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><div class="table-actions"><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i title="<?php echo vtranslate("LBL_MORE_OPTIONS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')=='Active'){?><?php if (Users_Privileges_Model::isPermittedToChangeUsername($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId())){?><li><a onclick="Settings_Users_List_Js.triggerChangeUsername('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getChangeUsernameUrl();?>
');"><?php echo vtranslate('LBL_CHANGE_USERNAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><li><a onclick="Settings_Users_List_Js.triggerChangePassword('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getChangePwdUrl();?>
');"><?php echo vtranslate('LBL_CHANGE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')=='Active'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&parentblock=LBL_USER_MANAGEMENT" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['IS_MODULE_DELETABLE']->value&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId()!=$_smarty_tpl->tpl_vars['USER_MODEL']->value->getId()){?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')=='Active'){?><li><a href='javascript:Settings_Users_List_Js.triggerDeleteUser("<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDeleteUrl();?>
")'><?php echo vtranslate("LBL_REMOVE_USER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</i></a></li><?php }else{ ?><li><a onclick="Settings_Users_List_Js.restoreUser(<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
, event);"><?php echo vtranslate("LBL_RESTORE_USER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><li><a href='javascript:Settings_Users_List_Js.triggerDeleteUser("<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDeleteUrl();?>
", "true")'><?php echo vtranslate("LBL_REMOVE_USER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</i></a></li><?php }?><?php }?><?php $_smarty_tpl->tpl_vars["CUSTOM_ROW_ADVANCED_ACTIONS"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/ListViewCustomRowAdvancedActions.tpl", null, 0);?><?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_ROW_ADVANCED_ACTIONS']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_ROW_ADVANCED_ACTIONS']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></ul></span></div><?php }} ?>