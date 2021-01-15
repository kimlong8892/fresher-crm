<?php /* Smarty version Smarty-3.1.7, created on 2021-01-15 08:34:15
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Reports/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6814302596000f11795dff0-53447877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c60a2c171942e7391fc1348f6f42d17ef6c8823' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Reports/ListViewRecordActions.tpl',
      1 => 1593395090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6814302596000f11795dff0-53447877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SEARCH_MODE_RESULTS' => 0,
    'LISTVIEW_ENTRY' => 0,
    'REPORT_TYPE' => 0,
    'MODULE' => 0,
    'CUSTOM_ROW_ACTIONS' => 0,
    'PINNED' => 0,
    'PIN_CLASS' => 0,
    'DASHBOARD_TABS' => 0,
    'TAB_INFO' => 0,
    'CUSTOM_ROW_ADVANCED_ACTIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6000f117a62dc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6000f117a62dc')) {function content_6000f117a62dc($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div class="table-actions reportListActions"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }?><?php $_smarty_tpl->tpl_vars["REPORT_TYPE"] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('reporttype'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['REPORT_TYPE']->value=='chart'){?><span><a class="quickView fa fa-eye icon action" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }?><?php $_smarty_tpl->tpl_vars["CUSTOM_ROW_ACTIONS"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/ListViewCustomRowActions.tpl", null, 0);?><?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_ROW_ACTIONS']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_ROW_ACTIONS']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php $_smarty_tpl->tpl_vars["PINNED"] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('pinned'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['PINNED']->value!=null&&$_smarty_tpl->tpl_vars['REPORT_TYPE']->value=='chart'){?><?php $_smarty_tpl->tpl_vars['PIN_CLASS'] = new Smarty_variable('vicon-unpin', null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['REPORT_TYPE']->value=='chart'){?><?php $_smarty_tpl->tpl_vars['PIN_CLASS'] = new Smarty_variable('vicon-pin', null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['REPORT_TYPE']->value=='chart'){?><span class="dropdown"><a style="font-size:13px;" title="<?php if ($_smarty_tpl->tpl_vars['PIN_CLASS']->value=='vicon-pin'){?><?php echo vtranslate('LBL_PIN_CHART_TO_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_UNPIN_CHART_FROM_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?>"class="fa icon action <?php echo $_smarty_tpl->tpl_vars['PIN_CLASS']->value;?>
 pinToDashboard "  data-recordid="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('reportid');?>
"data-primemodule="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('primarymodule');?>
" <?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value)>1&&$_smarty_tpl->tpl_vars['PIN_CLASS']->value=='vicon-pin'){?> data-toggle='dropdown'<?php }?>data-dashboard-tab-count='<?php echo count($_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value);?>
'></a><ul class='dropdown-menu dashBoardTabMenu'><li class="dropdown-header popover-title"><?php echo vtranslate('LBL_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</li><?php  $_smarty_tpl->tpl_vars['TAB_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB_INFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB_INFO']->key => $_smarty_tpl->tpl_vars['TAB_INFO']->value){
$_smarty_tpl->tpl_vars['TAB_INFO']->_loop = true;
?><li class='dashBoardTab' data-tab-id='<?php echo $_smarty_tpl->tpl_vars['TAB_INFO']->value['id'];?>
'><a href='javascript:void(0);'><?php echo $_smarty_tpl->tpl_vars['TAB_INFO']->value['tabname'];?>
</a></li><?php } ?></ul></span><?php }?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isEditableBySharing()){?><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li>   <li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="deleteRecordButton" href="javascript:void(0);"><?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php $_smarty_tpl->tpl_vars["CUSTOM_ROW_ADVANCED_ACTIONS"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/ListViewCustomRowAdvancedActions.tpl", null, 0);?><?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_ROW_ADVANCED_ACTIONS']->value)){?><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_ROW_ADVANCED_ACTIONS']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></ul></span><?php }?><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" name="Cancel"><i class="fa fa-close"></i></button></div></div><?php }} ?>