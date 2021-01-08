<?php /* Smarty version Smarty-3.1.7, created on 2021-01-06 08:34:29
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19508038795ff513a54a0581-85945612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44708fb93d968dc2ca78df3d7d71a6c80ff8fa45' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/History.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19508038795ff513a54a0581-85945612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'MODULE_NAME' => 0,
    'CURRENT_USER' => 0,
    'COMMENTS_MODULE_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff513a553830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff513a553830')) {function content_5ff513a553830($_smarty_tpl) {?>
<div class="dashboardWidgetHeader clearfix">
    <div class="title">
        <div class="dashboardTitle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><b>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle());?>
</b></div>
    </div>
    <div class="userList">
        <?php $_smarty_tpl->tpl_vars['CURRENT_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getId(), null, 0);?>

        
        <?php echo $_smarty_tpl->getSubTemplate (Vtiger_Owner_UIType::getDashboardFilterTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('OPTIONAL_FILTER'=>true), 0);?>

        

        
        
        

    </div>
</div>
<div class="dashboardWidgetContent" style="padding-top:15px;">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/HistoryContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="widgeticons dashBoardWidgetFooter">
    <div class="filterContainer boxSizingBorderBox">
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-sm-12">
                <div class="col-lg-4">
                    <span><strong><?php echo vtranslate('LBL_SHOW',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></span>
                </div>
                <div class="col-lg-7">
                        <?php if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('DetailView')){?>
                            <label class="radio-group cursorPointer">
                                <input type="radio" name="historyType" class="widgetFilter reloadOnChange cursorPointer" value="comments" /> <?php echo vtranslate('LBL_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

                            </label><br>
                        <?php }?>
                        <label class="radio-group cursorPointer">
                            <input type="radio" name="historyType" class="widgetFilter reloadOnChange cursorPointer" value="updates" /> 
                            <span><?php echo vtranslate('LBL_UPDATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>
                        </label><br>
                        <label class="radio-group cursorPointer">
                            <input type="radio" name="historyType" class="widgetFilter reloadOnChange cursorPointer" value="all" checked="" /> <?php echo vtranslate('LBL_BOTH',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

                        </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <span class="col-lg-4">
                        <span>
                            <strong><?php echo vtranslate('LBL_SELECT_DATE_RANGE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong>
                        </span>
                </span>
                <span class="col-lg-7">
                    <div class="input-daterange input-group dateRange widgetFilter" id="datepicker" name="modifiedtime">
                        <input type="text" class="input-sm form-control" name="start" style="height:30px;"/>
                        <span class="input-group-addon">to</span>
                        <input type="text" class="input-sm form-control" name="end" style="height:30px;"/>
                    </div>
                </span>
            </div>
        </div>
    </div>
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SETTING_EXIST'=>true), 0);?>

    </div>
</div><?php }} ?>