<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 10:09:40
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1191420248600f87f4595fe3-26806437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1173dbcc226ab6bc85eae42817a692376d40a61' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191420248600f87f4595fe3-26806437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'DISPLAY_PARAMS' => 0,
    'MODULE' => 0,
    'NAVIGATION_DATA' => 0,
    'CUSTOM_NAVIGATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f87f460397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f87f460397')) {function content_600f87f460397($_smarty_tpl) {?>
<input type="hidden" name="main_owner_id" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value){?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->fetchedRow['main_owner_id'];?>
<?php }?>"/><?php if ($_smarty_tpl->tpl_vars['DISPLAY_PARAMS']->value['form']&&$_smarty_tpl->tpl_vars['DISPLAY_PARAMS']->value['form']['hiddenFields']!=null){?><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['DISPLAY_PARAMS']->value['form']['hiddenFields'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><?php }?><?php if ($_smarty_tpl->tpl_vars['DISPLAY_PARAMS']->value['scripts']!=null){?><?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['DISPLAY_PARAMS']->value['scripts'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?><?php }?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php if ($_smarty_tpl->tpl_vars['NAVIGATION_DATA']->value){?><?php $_smarty_tpl->tpl_vars["CUSTOM_NAVIGATION"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/CustomNavigation.tpl", null, 0);?><?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_NAVIGATION']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_NAVIGATION']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/tpls/Navigation/Navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }?></div><?php }} ?>