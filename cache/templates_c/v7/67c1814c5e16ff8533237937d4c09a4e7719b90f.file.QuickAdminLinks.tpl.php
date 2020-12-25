<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:33:11
         compiled from "layouts/vlayout/modules/Vtiger/QuickAdminLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7909367705fe300c775d0c5-01302299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c1814c5e16ff8533237937d4c09a4e7719b90f' => 
    array (
      0 => 'layouts/vlayout/modules/Vtiger/QuickAdminLinks.tpl',
      1 => 1585899538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7909367705fe300c775d0c5-01302299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe300c777b13',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe300c777b13')) {function content_5fe300c777b13($_smarty_tpl) {?>

<li class="dropdown"><div style="margin-top: 15px;"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fa fa-cog" aria-hidden="true" title="Quick Admin Links"></i></a><div style="width: 250px; padding: 10px" class="dropdown-menu" role="menu"><div><i class="fa fa-refresh" aria-hidden="true" title="Quick Admin Links"></i><a href="index.php?module=Vtiger&action=QuickRepair"><?php echo vtranslate('LBL_ADMIN_QUICK_REPAIR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><hr style="margin: 10px 0 !important"><div><i class="fa fa-cog" aria-hidden="true"></i><a href="index.php?module=Vtiger&parent=Settings&view=Index"><?php echo vtranslate('LBL_ADMIN_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><hr style="margin: 10px 0 !important"><div><i class="fa fa-user" aria-hidden="true"></i><a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1"><?php echo vtranslate('LBL_ADMIN_USERS_MANAGEMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><hr style="margin: 10px 0 !important"><div><i class="fa fa-users" aria-hidden="true"></i><a href="index.php?module=Groups&parent=Settings&view=List&block=1&fieldid=4"><?php echo vtranslate('LBL_ADMIN_GROUPS_MANAGEMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><hr style="margin: 10px 0 !important"><div><i class="fa fa-cog" aria-hidden="true"></i><a href="index.php?module=Roles&parent=Settings&view=Index&block=1&fieldid=2"><?php echo vtranslate('LBL_ADMIN_ROLES_MANAGEMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><hr style="margin: 10px 0 !important"><div><i class="fa fa-lock" aria-hidden="true"></i><a href="index.php?module=Profiles&parent=Settings&view=List&block=1&fieldid=3"><?php echo vtranslate('LBL_ADMIN_PERMISSIONS_MANAGEMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><hr style="margin: 10px 0 !important"><div><i class="fa fa-cubes" aria-hidden="true"></i><a href="index.php?module=ModuleManager&parent=Settings&view=List&block=5&fieldid=8"><?php echo vtranslate('LBL_ADMIN_MODULES_MANAGEMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><hr style="margin: 10px 0 !important"><div><i class="fa fa-edit" aria-hidden="true"></i><a href="index.php?parent=Settings&module=Picklist&view=Index&block=8&fieldid=9"><?php echo vtranslate('LBL_ADMIN_DROPDOWN_EDITOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></li><?php }} ?>