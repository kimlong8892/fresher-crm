<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 09:54:55
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/HeaderScripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16183764600f847f0ac671-76507650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adb4b816e3c1826a7ce73b4b55cb60d7b12d0f1e' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/HeaderScripts.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16183764600f847f0ac671-76507650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VALIDATION_CONFIG' => 0,
    'CALENDAR_USER_SETTINGS' => 0,
    'CURRENT_USER_MODEL' => 0,
    'USER_IMAGE' => 0,
    'FB_ENABLED' => 0,
    'ZALO_ENABLED' => 0,
    'VOICE_COMMAND_CONFIG' => 0,
    'VOICE_COMMAND_PROXY_SERVER_PROTOCOL' => 0,
    'VOICE_COMMAND_PROXY_SERVER_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f847f13b1f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f847f13b1f')) {function content_600f847f13b1f($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['VALIDATION_CONFIG'] = new Smarty_variable(getGlobalVariable('validationConfig'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['VALIDATION_CONFIG'] = clone $_smarty_tpl->tpl_vars['VALIDATION_CONFIG']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['VALIDATION_CONFIG'] = clone $_smarty_tpl->tpl_vars['VALIDATION_CONFIG'];?><script>var _VALIDATION_CONFIG = <?php echo json_encode($_smarty_tpl->tpl_vars['VALIDATION_CONFIG']->value);?>
;</script><?php $_smarty_tpl->tpl_vars['CALENDAR_USER_SETTINGS'] = new Smarty_variable(Calendar_Settings_Model::getUserSettings(), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['CALENDAR_USER_SETTINGS'] = clone $_smarty_tpl->tpl_vars['CALENDAR_USER_SETTINGS']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['CALENDAR_USER_SETTINGS'] = clone $_smarty_tpl->tpl_vars['CALENDAR_USER_SETTINGS'];?><script>var _CALENDAR_USER_SETTINGS = <?php echo json_encode($_smarty_tpl->tpl_vars['CALENDAR_USER_SETTINGS']->value);?>
;</script><script type="text/javascript" src="<?php echo vresource_url('resources/libraries/Moment/MomentHelper.js');?>
"></script><script src="<?php echo vresource_url('resources/Numeric.js');?>
" async defer></script><script src="<?php echo vresource_url('resources/libraries/jQuery/CursorPosition.js');?>
" async defer></script><script src="<?php echo vresource_url('resources/libraries/jQuery/jquery.cookie.js');?>
" async defer></script><script src="<?php echo vresource_url('resources/StringUtils.js');?>
" async defer></script><script src="<?php echo vresource_url('resources/CustomPopover.js');?>
"></script> <link type="text/css" rel="stylesheet" href="<?php echo vresource_url('resources/libraries/SwipeBox/swipebox.css');?>
"><script src="<?php echo vresource_url('resources/libraries/SwipeBox/jquery.swipebox.min.js');?>
"></script><script src="<?php echo vresource_url('resources/libraries/SwipeBox/swipe.init.js');?>
"></script><link type="text/css" rel="stylesheet" href="<?php echo vresource_url('resources/libraries/DataTables/css/dataTables.bootstrap4.min.css');?>
" /><script src="<?php echo vresource_url('resources/libraries/DataTables/js/jquery.dataTables.min.js');?>
"></script><script src="<?php echo vresource_url('resources/libraries/DataTables/js/dataTables.bootstrap4.min.js');?>
"></script><script src="<?php echo vresource_url('resources/CustomOwnerField.js');?>
"></script> <script>var googleApiKey = '<?php echo getGlobalVariable('googleApiKey');?>
';</script><script src="https://maps.googleapis.com/maps/api/js?key=<?php echo getGlobalVariable('googleApiKey');?>
&libraries=places"></script><script src="<?php echo vresource_url('resources/GoogleMaps.js');?>
"></script><script>var _CURRENT_USER_META;<?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value){?><?php $_smarty_tpl->tpl_vars['USER_IMAGE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getImageDetails(), null, 0);?>_CURRENT_USER_META = {'id': '<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('id');?>
','name': '<?php echo getFullNameFromArray('Users',$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getData());?>
','avatar' : '<?php if ($_smarty_tpl->tpl_vars['USER_IMAGE']->value[0]){?><?php echo $_smarty_tpl->tpl_vars['USER_IMAGE']->value[0]['path'];?>
_<?php echo $_smarty_tpl->tpl_vars['USER_IMAGE']->value[0]['name'];?>
<?php }?>','ext_number' : '<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('phone_crm_extension');?>
',};<?php }?></script><script src="<?php echo vresource_url('resources/NotificationHelper.js');?>
"></script><?php $_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG'] = new Smarty_variable(getGlobalVariable('callCenterConfig'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['CALL_CENTER_CONFIG'] = clone $_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['CALL_CENTER_CONFIG'] = clone $_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG'];?><?php $_smarty_tpl->tpl_vars["FB_ENABLED"] = new Smarty_variable(CPSocialIntegration_Config_Helper::isFbEnabled(), null, 0);?><?php $_smarty_tpl->tpl_vars["ZALO_ENABLED"] = new Smarty_variable(CPSocialIntegration_Config_Helper::isZaloEnabled(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FB_ENABLED']->value==true||$_smarty_tpl->tpl_vars['ZALO_ENABLED']->value==true){?><script src="<?php echo vresource_url('resources/SocialHandler.js');?>
" async defer></script><?php }?><?php $_smarty_tpl->tpl_vars['VOICE_COMMAND_CONFIG'] = new Smarty_variable(getGlobalVariable('voiceCommandConfig'), null, 0);?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['VOICE_COMMAND_CONFIG']->value['proxy_server_ssl']){?><?php echo "https";?><?php }else{ ?><?php echo "http";?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['VOICE_COMMAND_PROXY_SERVER_PROTOCOL'] = new Smarty_variable($_tmp1, null, 0);?><?php $_smarty_tpl->tpl_vars['VOICE_COMMAND_PROXY_SERVER_URL'] = new Smarty_variable(($_smarty_tpl->tpl_vars['VOICE_COMMAND_PROXY_SERVER_PROTOCOL']->value)."://".($_smarty_tpl->tpl_vars['VOICE_COMMAND_CONFIG']->value['proxy_server_name']).":".($_smarty_tpl->tpl_vars['VOICE_COMMAND_CONFIG']->value['proxy_server_port']), null, 0);?><?php if ($_smarty_tpl->tpl_vars['VOICE_COMMAND_CONFIG']->value['enable']==true){?><script>var _VOICE_COMMAND_PROXY_SERVER_URL = '<?php echo $_smarty_tpl->tpl_vars['VOICE_COMMAND_PROXY_SERVER_URL']->value;?>
';</script><script src="<?php echo vresource_url('resources/libraries/SocketIO/socket.io.js');?>
"></script><script src="<?php echo vresource_url('resources/VoiceCommand.js');?>
" async defer></script><?php }?><script type="text/javascript" src="<?php echo vresource_url("resources/libraries/GoogleChart/loader.js");?>
"></script><?php }} ?>