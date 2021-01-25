<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 15:21:38
         compiled from "modules/Contacts/tpls/RelatedListCustomRowActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1693020199600e7f924c2d32-72513648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb4df8dcfaef32c6f740e0832d8c9acd9cc67d03' => 
    array (
      0 => 'modules/Contacts/tpls/RelatedListCustomRowActions.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1693020199600e7f924c2d32-72513648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_MODULE_NAME' => 0,
    'RELATED_RECORD' => 0,
    'CALL_CENTER_CONFIG' => 0,
    'CAN_MAKE_CALL' => 0,
    'CALL_INFO' => 0,
    'HAS_RECORDING' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e7f925257b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e7f925257b')) {function content_600e7f925257b($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value=='Calendar'){?><?php $_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG'] = new Smarty_variable(getGlobalVariable('callCenterConfig'), null, 0);?><?php $_smarty_tpl->tpl_vars["CAN_MAKE_CALL"] = new Smarty_variable(PBXManager_CallLog_Model::canMakeCall($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId()), null, 0);?><?php if ($_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG']->value['enable']==true&&$_smarty_tpl->tpl_vars['CAN_MAKE_CALL']->value==true){?><?php $_smarty_tpl->tpl_vars["CALL_INFO"] = new Smarty_variable(PBXManager_CallLog_Model::getCallInfoToMakeCall($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId()), null, 0);?><a class="make-call" onclick='Vtiger_PBXManager_Js.makeCallWithPhoneSelector(<?php echo $_smarty_tpl->tpl_vars['CALL_INFO']->value['customer_id'];?>
, "<?php echo $_smarty_tpl->tpl_vars['CALL_INFO']->value['customer_name'];?>
", <?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['CALL_INFO']->value['phone_numbers']);?>
, "<?php echo $_smarty_tpl->tpl_vars['CALL_INFO']->value['activity_id'];?>
");'><i title="<?php echo vtranslate('LBL_MAKE_CALL','PBXManager');?>
" class="fa fa-phone"></i></a><?php }?><?php $_smarty_tpl->tpl_vars["HAS_RECORDING"] = new Smarty_variable(PBXManager_CallLog_Model::hasRecording($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId()), null, 0);?><?php if ($_smarty_tpl->tpl_vars['HAS_RECORDING']->value==true){?><a class="play-recording" data-call-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" data-popup-title="<?php echo vtranslate('LBL_RECORDING_POPUP_TITLE','PBXManager',array('%call_subject'=>$_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('subject')));?>
"><i title="<?php echo vtranslate('LBL_RECORDING_POPUP_PLAY_RECORDING','PBXManager');?>
" class="fa fa-play"></i></a><?php }?><?php }?><?php }} ?>