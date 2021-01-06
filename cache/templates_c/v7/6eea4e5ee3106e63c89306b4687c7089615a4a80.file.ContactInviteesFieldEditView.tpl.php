<?php /* Smarty version Smarty-3.1.7, created on 2021-01-06 16:52:07
         compiled from "modules/Calendar/tpls/ContactInviteesFieldEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2043768295ff588474f2638-31018927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eea4e5ee3106e63c89306b4687c7089615a4a80' => 
    array (
      0 => 'modules/Calendar/tpls/ContactInviteesFieldEditView.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043768295ff588474f2638-31018927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
    'RECORD_ID' => 0,
    'FIELD_NAME' => 0,
    'FIELD_INFO' => 0,
    'MODULE' => 0,
    'SELECTED_CONTACT_INVITEES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff5884753e77',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff5884753e77')) {function content_5ff5884753e77($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_variable($_REQUEST['record'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['RECORD']->value&&$_smarty_tpl->tpl_vars['RECORD']->value->get('id')!=''){?><?php $_smarty_tpl->tpl_vars['RECORD_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('id'), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars["SELECTED_CONTACT_INVITEES"] = new Smarty_variable(Events_Invitation_Helper::getInviteesForEdit($_smarty_tpl->tpl_vars['RECORD_ID']->value,'Contacts'), null, 0);?><div class="referencefield-wrapper"><input name="popupReferenceModule" type="hidden" value="Contacts" /><div class="input-group"><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="contact_invitees" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"data-fieldtype="reference" type="text" class="marginLeftZero autoComplete inputElement sourceField"data-fieldinfo='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' data-fieldtype="multireference"placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-multiple="true"<?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required="true" <?php }?><?php if ($_smarty_tpl->tpl_vars['SELECTED_CONTACT_INVITEES']->value){?> data-selected-tags='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SELECTED_CONTACT_INVITEES']->value);?>
' <?php }?>/><span class="input-group-addon relatedPopup cursorPointer" title="<?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="width:30px; height:auto;"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fa fa-search"></i></span></div><!-- Show the add button only if it is edit view  --><?php if ($_REQUEST['view']=='Edit'){?><span class="createReferenceRecord cursorPointer clearfix" title="<?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_create" class="fa fa-plus"></i></span><?php }?></div><?php }} ?>