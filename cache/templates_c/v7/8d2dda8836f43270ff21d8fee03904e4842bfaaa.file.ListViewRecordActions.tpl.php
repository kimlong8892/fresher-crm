<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:36:17
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4212670055fe30181ae5b26-38661533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d2dda8836f43270ff21d8fee03904e4842bfaaa' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewRecordActions.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4212670055fe30181ae5b26-38661533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SEARCH_MODE_RESULTS' => 0,
    'LISTVIEW_ENTRY' => 0,
    'QUICK_PREVIEW_ENABLED' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
    'MODULE_MODEL' => 0,
    'STARRED' => 0,
    'RECORD_ACTIONS' => 0,
    'CUSTOM_ROW_ACTIONS' => 0,
    'CUSTOM_ROW_ADVANCED_ACTIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe30181b6d1e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe30181b6d1e')) {function content_5fe30181b6d1e($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions" style="width: 160px;"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }?><?php ob_start();?><?php echo vtranslate('LBL_YES');?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred')==$_tmp1){?> <?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(true, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable(false, null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['QUICK_PREVIEW_ENABLED']->value=='true'){?><span><a class="quickView fa fa-eye icon action" data-app="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()){?><span><a class="markStar fa icon action <?php if ($_smarty_tpl->tpl_vars['STARRED']->value){?> fa-star active <?php }else{ ?> fa-star-o<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['STARRED']->value){?> <?php echo vtranslate('LBL_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php }else{ ?> <?php echo vtranslate('LBL_NOT_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?>"></a></span><?php }?><!-- Added by Kelvin Thang -- Date: 2018-07-27--><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value){?><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isEditable()){?> <span><a class="fa icon edit fa-edit" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" name="editlink" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }?><?php }?><?php $_smarty_tpl->tpl_vars["CUSTOM_ROW_ACTIONS"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/ListViewCustomRowActions.tpl", null, 0);?><?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_ROW_ACTIONS']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_ROW_ACTIONS']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value){?><!--<?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isEditable()){?> <li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" data-url="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?>--><?php if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['delete']&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isDeletable()){?> <li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" class="deleteRecordButton"><?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }?><?php $_smarty_tpl->tpl_vars["CUSTOM_ROW_ADVANCED_ACTIONS"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/ListViewCustomRowAdvancedActions.tpl", null, 0);?><?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_ROW_ADVANCED_ACTIONS']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_ROW_ADVANCED_ACTIONS']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }?></ul></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" type="button" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" type="button" name="Cancel"><i class="fa fa-close"></i></button></div></div>
<?php }} ?>