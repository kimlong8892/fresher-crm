<?php /* Smarty version Smarty-3.1.7, created on 2021-01-14 11:21:05
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Reports/Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14974458995fffc6b1f2c985-91051542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fed11446322a5a97ff2514793bae3c56b4dd5f74' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Reports/Step1.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14974458995fffc6b1f2c985-91051542',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPORT_TYPE' => 0,
    'MODULE' => 0,
    'VIEW' => 0,
    'IS_DUPLICATE' => 0,
    'RECORD_ID' => 0,
    'RELATED_MODULES' => 0,
    'REPORT_MODEL' => 0,
    'REPORT_FOLDERS' => 0,
    'REPORT_FOLDER' => 0,
    'MODULELIST' => 0,
    'RELATED_MODULE_KEY' => 0,
    'PRIMARY_MODULE' => 0,
    'PARENT' => 0,
    'PRIMARY_RELATED_MODULES' => 0,
    'PRIMARY_RELATED_MODULE' => 0,
    'SECONDARY_MODULES_ARR' => 0,
    'PRIMARY_RELATED_MODULE_LABEL' => 0,
    'SELECTED_MEMBERS_GROUP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fffc6b2123b2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fffc6b2123b2')) {function content_5fffc6b2123b2($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['REPORT_TYPE']->value=='ChartEdit'){?>
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditChartHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<div class="reportContents">
    <form class="form-horizontal recordEditView" id="report_step1" method="post" action="index.php">
		<input type="hidden" name="mode" value="step2" />
        <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
        <input type="hidden" name="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" />
        <input type="hidden" class="step" value="1" />
        <input type="hidden" name="isDuplicate" value="<?php echo $_smarty_tpl->tpl_vars['IS_DUPLICATE']->value;?>
" />
        <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" />
        <input type=hidden id="relatedModules" data-value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['RELATED_MODULES']->value);?>
' />
        <div style="border:1px solid #ccc;padding:4%;">
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label textAlignLeft"><?php echo vtranslate('LBL_REPORT_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label>
                    <div class="col-lg-4">
                        <input type="text" class="inputElement" data-rule-required="true" name="reportname" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('reportname');?>
"/>
                    </div>
                </div>
            </div>
            <div class="row">		
                <div class="form-group">
                    <label class="col-lg-3 control-label textAlignLeft"><?php echo vtranslate('LBL_REPORT_FOLDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label>
                    <div class="col-lg-4">
                        <select class="select2 col-lg-12 inputElement" name="folderid" data-rule-required="true">
                            <?php  $_smarty_tpl->tpl_vars['REPORT_FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['REPORT_FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REPORT_FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['REPORT_FOLDER']->key => $_smarty_tpl->tpl_vars['REPORT_FOLDER']->value){
$_smarty_tpl->tpl_vars['REPORT_FOLDER']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['REPORT_FOLDER']->value->getId();?>
" 
                                        <?php if ($_smarty_tpl->tpl_vars['REPORT_FOLDER']->value->getId()==$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('folderid')){?>
                                            selected=""
                                        <?php }?>
                                        ><?php echo vtranslate($_smarty_tpl->tpl_vars['REPORT_FOLDER']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label textAlignLeft"><?php echo vtranslate('PRIMARY_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label>
                    <div class="col-lg-4">
                        <select class="select2-container select2 col-lg-12 inputElement" id="primary_module" name="primary_module" data-rule-required="true"
                                <?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value&&$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getPrimaryModule()&&$_smarty_tpl->tpl_vars['IS_DUPLICATE']->value!=true&&$_smarty_tpl->tpl_vars['REPORT_TYPE']->value=="ChartEdit"){?> disabled="disabled"<?php }?>>
                            <?php  $_smarty_tpl->tpl_vars['RELATED_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_MODULE']->_loop = false;
 $_smarty_tpl->tpl_vars['RELATED_MODULE_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULELIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_MODULE']->key => $_smarty_tpl->tpl_vars['RELATED_MODULE']->value){
$_smarty_tpl->tpl_vars['RELATED_MODULE']->_loop = true;
 $_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value = $_smarty_tpl->tpl_vars['RELATED_MODULE']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getPrimaryModule()==$_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value){?> selected="selected" <?php }?>>
                                    <?php echo vtranslate($_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_KEY']->value);?>

                                </option>
                            <?php } ?>
                        </select>
                        <?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value&&$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getPrimaryModule()&&$_smarty_tpl->tpl_vars['IS_DUPLICATE']->value!=true&&$_smarty_tpl->tpl_vars['REPORT_TYPE']->value=="ChartEdit"){?>
                            <input type="hidden" name="primary_module" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getPrimaryModule();?>
" />
                        <?php }?>
                    </div>
                </div>	
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label textAlignLeft"><?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<?php echo vtranslate('LBL_MAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;2)</label>
                    <div class="col-lg-4">
                        <?php $_smarty_tpl->tpl_vars['SECONDARY_MODULES_ARR'] = new Smarty_variable(explode(':',$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getSecondaryModules()), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['PRIMARY_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getPrimaryModule(), null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value==''){?>
                            <?php  $_smarty_tpl->tpl_vars['RELATED'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED']->_loop = false;
 $_smarty_tpl->tpl_vars['PARENT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['relatedlist']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED']->key => $_smarty_tpl->tpl_vars['RELATED']->value){
$_smarty_tpl->tpl_vars['RELATED']->_loop = true;
 $_smarty_tpl->tpl_vars['PARENT']->value = $_smarty_tpl->tpl_vars['RELATED']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['relatedlist']['index']++;
?>
                                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['relatedlist']['index']==0){?>
                                    <?php $_smarty_tpl->tpl_vars['PRIMARY_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['PARENT']->value, null, 0);?>
                                <?php }?>
                            <?php } ?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULES'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['PRIMARY_MODULE']->value], null, 0);?>
                        <select class="select2-container col-lg-12 inputElement" id="secondary_module" multiple name="secondary_modules[]" data-placeholder="<?php echo vtranslate('LBL_SELECT_RELATED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"
                                <?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value&&$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getSecondaryModules()&&$_smarty_tpl->tpl_vars['IS_DUPLICATE']->value!=true&&$_smarty_tpl->tpl_vars['REPORT_TYPE']->value=="ChartEdit"){?> disabled="disabled"<?php }?>>
                            <?php  $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->key => $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->value){
$_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE']->value = $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->key;
?>
                                <option <?php if (in_array($_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE']->value,$_smarty_tpl->tpl_vars['SECONDARY_MODULES_ARR']->value)){?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PRIMARY_RELATED_MODULE_LABEL']->value;?>
</option>
                            <?php } ?>
                        </select>
                        <?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value&&$_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getSecondaryModules()&&$_smarty_tpl->tpl_vars['IS_DUPLICATE']->value!=true&&$_smarty_tpl->tpl_vars['REPORT_TYPE']->value=="ChartEdit"){?>
                            <input type="hidden" name="secondary_modules[]" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->getSecondaryModules();?>
" />
                        <?php }?>
                    </div>
                </div>	
            </div>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label textAlignLeft"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
                    <div class="col-lg-4">
                        <textarea type="text" cols="50" rows="3" class="inputElement" name="description"><?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('description');?>
</textarea>
                    </div>
                </div>	
            </div>
            <div class='row'>
                <div class='form-group'>
                    <label class='col-lg-3 control-label textAlignLeft'><?php echo vtranslate('LBL_SHARE_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
                    <div class='col-lg-4'>
                        
                        

                        <input type="text" autocomplete="off" class="inputElement select2" style="width: 100%" data-fieldtype="owner" data-fieldname="members" data-name="members" name="members" 
                            <?php if ($_smarty_tpl->tpl_vars['SELECTED_MEMBERS_GROUP']->value){?> data-selected-tags='<?php echo ZEND_JSON::encode(Vtiger_Owner_UIType::getSelectedOwnersFromOwnersString($_smarty_tpl->tpl_vars['SELECTED_MEMBERS_GROUP']->value));?>
' <?php }?>
                        />
                        
                    </div>
                </div>
            </div>	

            
            <?php if ($_smarty_tpl->tpl_vars['VIEW']->value=='Edit'){?>
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label textAlignLeft"><?php echo vtranslate('LBL_CUSTOM_HANDLER_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
                        <div class="col-lg-4">
                            <input type="text" class="inputElement" data-rule-required="false" name="custom_handler_file" value="<?php echo $_smarty_tpl->tpl_vars['REPORT_MODEL']->value->get('custom_handler_file');?>
"/>
                        </div>
                    </div>
                </div>
            <?php }?>
            

            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ScheduleReport.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
        </div>
        <div class="border1px modal-overlay-footer clearfix">
            <div class="row clearfix">
                <div class="textAlignCenter col-lg-12 col-md-12 col-lg-12 ">
                    <button class="btn btn-success nextStep" type="submit"><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;
                    <a type="reset" onclick='window.history.back();' class="cancelLink cursorPointer"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                </div>
            </div>
        </div>
    </form><?php }} ?>