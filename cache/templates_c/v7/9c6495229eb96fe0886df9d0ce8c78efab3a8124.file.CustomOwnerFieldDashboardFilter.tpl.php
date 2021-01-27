<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 09:54:59
         compiled from "modules/Vtiger/tpls/CustomOwnerFieldDashboardFilter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:564820862600f8483dc8557-42598376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c6495229eb96fe0886df9d0ce8c78efab3a8124' => 
    array (
      0 => 'modules/Vtiger/tpls/CustomOwnerFieldDashboardFilter.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '564820862600f8483dc8557-42598376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_ONLY' => 0,
    'OPTIONAL_FILTER' => 0,
    'FIELD_NAME' => 0,
    'VALIDATE' => 0,
    'FIELD_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f8483e2659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f8483e2659')) {function content_600f8483e2659($_smarty_tpl) {?>

<?php if (!isset($_smarty_tpl->tpl_vars['USER_ONLY']->value)){?> <?php $_smarty_tpl->tpl_vars['USER_ONLY'] = new Smarty_variable(false, null, 0);?> <?php }?><?php if (!isset($_smarty_tpl->tpl_vars['OPTIONAL_FILTER']->value)){?> <?php $_smarty_tpl->tpl_vars['OPTIONAL_FILTER'] = new Smarty_variable(false, null, 0);?> <?php }?><?php if (!isset($_smarty_tpl->tpl_vars['FIELD_NAME']->value)){?> <?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable("assigned_user_id", null, 0);?> <?php }?><?php if (!isset($_smarty_tpl->tpl_vars['VALIDATE']->value)){?> <?php $_smarty_tpl->tpl_vars['VALIDATE'] = new Smarty_variable(false, null, 0);?> <?php }?><div class="user-list"><?php if ($_smarty_tpl->tpl_vars['OPTIONAL_FILTER']->value){?> <div class="user-list_optional"><label><?php echo vtranslate('LBL_MINE','Vtiger');?>
 <input type="checkbox" name="optional_filter_mine" rel="optional_filter" value="mine" checked/></label><label><?php echo vtranslate('LBL_ALL','Vtiger');?>
 <input type="checkbox" name="optional_filter_all" rel="optional_filter" value="all"/></label></div><?php }?><div class="user-list_input"><input type="text"name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['FIELD_ID']->value)){?>id="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"<?php }?>class="select2 <?php if ($_smarty_tpl->tpl_vars['OPTIONAL_FILTER']->value){?>widgetFilter reloadOnChange<?php }?>" multiple="false" data-user-only="<?php echo $_smarty_tpl->tpl_vars['USER_ONLY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['VALIDATE']->value){?> data-rule-required="true" data-rule-main-owner="true" <?php }?> data-assignable-users-only="true"/></div></div><?php }} ?>