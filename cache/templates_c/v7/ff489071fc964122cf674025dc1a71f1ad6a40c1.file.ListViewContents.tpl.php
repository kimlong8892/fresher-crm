<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 10:09:36
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121069466600f87f02cae02-10913237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff489071fc964122cf674025dc1a71f1ad6a40c1' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/ListViewContents.tpl',
      1 => 1608711077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121069466600f87f02cae02-10913237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CUSTOM_CSS_FILE' => 0,
    'CUSTOM_JS_FILE' => 0,
    'CUSTOM_HEADER' => 0,
    'SEARCH_MODE_RESULTS' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LEFTPANELHIDE' => 0,
    'VIEW' => 0,
    'VIEWID' => 0,
    'PAGING_MODEL' => 0,
    'MODULE_MODEL' => 0,
    'OPERATOR' => 0,
    'LISTVIEW_COUNT' => 0,
    'PAGE_NUMBER' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'SEARCH_DETAILS' => 0,
    'TAG_DETAILS' => 0,
    'NO_SEARCH_PARAMS_CACHE' => 0,
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'LIST_HEADER_FIELDS' => 0,
    'CURRENT_TAG' => 0,
    'FOLDER_ID' => 0,
    'FOLDER_VALUE' => 0,
    'VIEWTYPE' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'CURRENT_CV_MODEL' => 0,
    'CURRENT_CV_USER_ID' => 0,
    'KANBAN_CONFIG' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER' => 0,
    'COLUMN_NAME' => 0,
    'NO_SORTING' => 0,
    'NEXT_SORT_ORDER' => 0,
    'FASORT_IMAGE' => 0,
    'FIELD_UI_TYPE_MODEL' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'RELATED_TO' => 0,
    'DATA_ID' => 0,
    'DATA_URL' => 0,
    'IS_GOOGLE_DRIVE_ENABLED' => 0,
    'IS_DROPBOX_ENABLED' => 0,
    'LISTVIEW_HEADERNAME' => 0,
    'LISTVIEW_ENTRY_RAWVALUE' => 0,
    'CURRENCY_SYMBOL_PLACEMENT' => 0,
    'LISTVIEW_ENTRY_VALUE' => 0,
    'CURRENCY_SYMBOL' => 0,
    'EVENT_STATUS_FIELD_MODEL' => 0,
    'PICKLIST_FIELD_ID' => 0,
    'CALL_CENTER_CONFIG' => 0,
    'PHONE_NUMBER' => 0,
    'COLSPAN_WIDTH' => 0,
    'IS_CREATE_PERMITTED' => 0,
    'LIST_VIEW_MODEL' => 0,
    'SINGLE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f87f05dc48',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f87f05dc48')) {function content_600f87f05dc48($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/var/www/html/crm-fresher/libraries/Smarty/libs/plugins/modifier.regex_replace.php';
?>



<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PicklistColorMap.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php $_smarty_tpl->tpl_vars["CUSTOM_CSS_FILE"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/resources/ListView.css", null, 0);?>
<?php $_smarty_tpl->tpl_vars["CUSTOM_JS_FILE"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/resources/ListView.js", null, 0);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_CSS_FILE']->value)){?>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_CSS_FILE']->value;?>
"/>
<?php }?>

<?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_JS_FILE']->value)){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_JS_FILE']->value;?>
"></script> 
<?php }?>



<?php $_smarty_tpl->tpl_vars["CUSTOM_HEADER"] = new Smarty_variable("modules/".($_smarty_tpl->tpl_vars['MODULE']->value)."/tpls/ListViewCustomHeader.tpl", null, 0);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['CUSTOM_HEADER']->value)){?>
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['CUSTOM_HEADER']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>


<div class="col-sm-12 col-xs-12 ">
	<?php if ($_smarty_tpl->tpl_vars['MODULE']->value!='EmailTemplates'&&$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value!=true){?>
		<?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?>
		<div class="essentials-toggle" title="<?php echo vtranslate('LBL_LEFT_PANEL_SHOW_HIDE','Vtiger');?>
">
			<span class="essentials-toggle-marker fa <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value=='1'){?>fa-chevron-right<?php }else{ ?>fa-chevron-left<?php }?> cursorPointer"></span>
		</div>
	<?php }?>
	<input type="hidden" name="view" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" />
	<input type="hidden" name="cvid" value="<?php echo $_smarty_tpl->tpl_vars['VIEWID']->value;?>
" />
	<input type="hidden" name="pageStartRange" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" />
	<input type="hidden" name="pageEndRange" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" />
	<input type="hidden" name="previousPageExist" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" />
	<input type="hidden" name="nextPageExist" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" />
	<input type="hidden" name="alphabetSearchKey" id="alphabetSearchKey" value= "<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getAlphabetSearchField();?>
" />
	<input type="hidden" name="Operator" id="Operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" />
	<input type="hidden" name="totalCount" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" />
	<input type='hidden' name="pageNumber" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'>
	<input type='hidden' name="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'>
	<input type="hidden" name="noOfEntries" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries">
	<input type="hidden" name="currentSearchParams" value="<?php echo Vtiger_Util_Helper::toSafeHTML(Zend_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value));?>
" id="currentSearchParams" />
	<input type="hidden" name="currentTagParams" value="<?php echo Vtiger_Util_Helper::toSafeHTML(Zend_JSON::encode($_smarty_tpl->tpl_vars['TAG_DETAILS']->value));?>
" id="currentTagParams" />
	<input type="hidden" name="noFilterCache" value="<?php echo $_smarty_tpl->tpl_vars['NO_SEARCH_PARAMS_CACHE']->value;?>
" id="noFilterCache" >
	<input type="hidden" name="orderBy" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy">
	<input type="hidden" name="sortOrder" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder">
	<input type="hidden" name="list_headers" value='<?php echo $_smarty_tpl->tpl_vars['LIST_HEADER_FIELDS']->value;?>
'/>
	<input type="hidden" name="tag" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_TAG']->value;?>
" />
	<input type="hidden" name="folder_id" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER_ID']->value;?>
" />
	<input type="hidden" name="folder_value" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER_VALUE']->value;?>
" />
	<input type="hidden" name="viewType" value="<?php echo $_smarty_tpl->tpl_vars['VIEWTYPE']->value;?>
" />
	<input type="hidden" name="app" id="appName" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<input type="hidden" id="isListViewQuickEditSupported" value="<?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isListViewQuickEditAllowed()){?>yes<?php }else{ ?>no<?php }?>" />  
	<?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?>
		<input type="hidden" name="picklistDependency" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
' />
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>

	<div id="table-content" class="table-container">
		<form name='list' id='listedit' action='' onsubmit="return false;">
			<table id="listview-table" class="table <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'){?>listview-table-norecords <?php }?> listview-table ">
				<thead>
					<tr class="listViewContentHeader">
						<th>
							<?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?>
					<div class="table-actions">
						<div class="dropdown" style="float:left;">
							<span class="input dropdown-toggle" data-toggle="dropdown" title="<?php echo vtranslate('LBL_CLICK_HERE_TO_SELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
								<input class="listViewEntriesMainCheckBox" type="checkbox">
							</span>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isFilterColumnEnabled()){?>
							<div id="listColumnFilterContainer">
								<div class="listColumnFilter <?php if ($_smarty_tpl->tpl_vars['CURRENT_CV_MODEL']->value&&!($_smarty_tpl->tpl_vars['CURRENT_CV_MODEL']->value->isCvEditable())){?>disabled<?php }?>"  
									 <?php if ($_smarty_tpl->tpl_vars['CURRENT_CV_MODEL']->value->isCvEditable()){?>
										 title="<?php echo vtranslate('LBL_CLICK_HERE_TO_MANAGE_LIST_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"
									 <?php }else{ ?>
										 <?php if ($_smarty_tpl->tpl_vars['CURRENT_CV_MODEL']->value->get('viewname')=='All'&&!$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->isAdminUser()){?> 
											 title="<?php echo vtranslate('LBL_SHARED_LIST_NON_ADMIN_MESSAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"
										 <?php }elseif(!$_smarty_tpl->tpl_vars['CURRENT_CV_MODEL']->value->isMine()){?>
											 <?php $_smarty_tpl->tpl_vars['CURRENT_CV_USER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_CV_MODEL']->value->get('userid'), null, 0);?>
											 <?php if (!Vtiger_Functions::isUserExist($_smarty_tpl->tpl_vars['CURRENT_CV_USER_ID']->value)){?>
												 <?php $_smarty_tpl->tpl_vars['CURRENT_CV_USER_ID'] = new Smarty_variable(Users::getActiveAdminId(), null, 0);?>
											 <?php }?>
											 title="<?php echo vtranslate('LBL_SHARED_LIST_OWNER_MESSAGE',$_smarty_tpl->tpl_vars['MODULE']->value,getUserFullName($_smarty_tpl->tpl_vars['CURRENT_CV_USER_ID']->value));?>
"
										 <?php }?>
									 <?php }?>
									 <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Documents'){?>style="width: 10%;"<?php }?>
									 data-toggle="tooltip" data-placement="bottom" data-container="body">
									<i class="fa fa-th-large"></i>
								</div>
							</div>
						<?php }?>

                        
                        <?php $_smarty_tpl->tpl_vars["KANBAN_CONFIG"] = new Smarty_variable(getGlobalVariable('kanbanConfig'), null, 0);?>

                        <?php if (in_array($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['KANBAN_CONFIG']->value['enabled_modules'])){?>
                            <div class="kanban-shortcut">
                                <a href="index.php?module=CPKanban&view=List&source_module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" target="_blank" title="Kanban View">
                                    <i class="fa fa-columns"></i>
                                </a>
                            </div>
                        <?php }?>
                        
					</div>
				<?php }elseif($_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?>
					<?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

				<?php }?>
				</th>
				<?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value||($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='multipicklist')){?>
						<?php $_smarty_tpl->tpl_vars['NO_SORTING'] = new Smarty_variable(1, null, 0);?>
					<?php }else{ ?>
						<?php $_smarty_tpl->tpl_vars['NO_SORTING'] = new Smarty_variable(0, null, 0);?>
					<?php }?>
					<th <?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?> nowrap="nowrap" <?php }?>>
						<a href="#" class="<?php if ($_smarty_tpl->tpl_vars['NO_SORTING']->value){?>noSorting<?php }else{ ?>listViewContentHeaderValues<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['NO_SORTING']->value){?>data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
"<?php }?> data-field-id='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getId();?>
'>
							<?php if (!$_smarty_tpl->tpl_vars['NO_SORTING']->value){?>
								<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?>
									<i class="fa fa-sort <?php echo $_smarty_tpl->tpl_vars['FASORT_IMAGE']->value;?>
"></i>
								<?php }else{ ?>
									<i class="fa fa-sort customsort"></i>
								<?php }?>
							<?php }?>
							&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getModuleName());?>
&nbsp;
						</a>
						<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?>
							<a href="#" class="removeSorting"><i class="fa fa-remove"></i></a>
							<?php }?>
					</th>
				<?php } ?>
				</tr>

				<?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isQuickSearchEnabled()&&!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value){?>
					<tr class="searchRow">
						
						<th class="inline-search-btn">
							<div class="table-actions flex-actions">
								<button class="btn btn-success btn-sm" data-trigger="listSearch"><?php echo vtranslate("LBL_SEARCH",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
								<i class="fa fa-eraser clearFilters" onclick="Vtiger_List_Js.clearFilters()" aria-hidden="true" title="<?php echo vtranslate("LBL_CLEAR_FILTERS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>
							</div>
						</th>
						
					<?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
?>
						<th>
							<?php $_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel(), null, 0);?>
							<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()],'USER_MODEL'=>$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value), 0);?>

							<input type="hidden" class="operatorValue" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()]['comparator'];?>
">
						</th>
					<?php } ?>
					</tr>
				<?php }?>
				</thead>
				<tbody class="overflow-y">
					<?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']++;
?>
						<?php $_smarty_tpl->tpl_vars['DATA_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId(), null, 0);?>
						<?php $_smarty_tpl->tpl_vars['DATA_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl(), null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getModuleName()=="ModComments"){?>
							<?php $_smarty_tpl->tpl_vars['RELATED_TO'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('related_to_model'), null, 0);?>
							<?php $_smarty_tpl->tpl_vars['DATA_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_TO']->value->getId(), null, 0);?>
							<?php $_smarty_tpl->tpl_vars['DATA_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_TO']->value->getDetailViewUrl(), null, 0);?>
						<?php }?>
						<tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['DATA_ID']->value;?>
' data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['DATA_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
' id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listview']['index']+1;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Calendar'){?>data-recurring-enabled='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isRecurringEnabled();?>
'<?php }?>>
							<td class = "listViewRecordActions">
								<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewRecordActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							</td>
							<?php if (($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('document_source')=='Google Drive'&&$_smarty_tpl->tpl_vars['IS_GOOGLE_DRIVE_ENABLED']->value)||($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('document_source')=='Dropbox'&&$_smarty_tpl->tpl_vars['IS_DROPBOX_ENABLED']->value)){?>
                                <input type="hidden" name="document_source_type" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('document_source');?>
">
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name'), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_RAWVALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRaw($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('column')), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='currency'||$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='text'){?>
                                    <?php $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_RAWVALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getTitle($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value), null, 0);?>
                                <?php }?>

                                <?php $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value), null, 0);?>

                                <td class="listViewEntryValue" data-name="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
" title="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getTitle($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);?>
" data-rawvalue="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_RAWVALUE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType();?>
">
                                    <span class="fieldValue">
                                        <span class="value">
                                            <?php if (($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField()==true||$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('uitype')=='4')&&$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isListViewNameFieldNavigationEnabled()==true){?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
</a>
                                                <?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Products'&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isBundle()){?>
                                                    &nbsp;-&nbsp;<i class="mute"><?php echo vtranslate('LBL_PRODUCT_BUNDLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</i>
                                                <?php }?>
                                            <?php }elseif($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()=='Documents'&&$_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value=='document_source'){?>
                                                <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>

                                            <?php }else{ ?>
                                                <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('uitype')=='72'){?>
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_symbol_placement');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL_PLACEMENT'] = new Smarty_variable($_tmp1, null, 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['CURRENCY_SYMBOL_PLACEMENT']->value=='1.0$'){?>
                                                        <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>
<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('currencySymbol');?>

                                                    <?php }else{ ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('currencySymbol');?>
<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>

                                                    <?php }?>


                                                <?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('uitype')=='71'){?>
                                                    <?php $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('userCurrencySymbol'), null, 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value)!=null){?>
                                                        <?php echo CurrencyField::appendCurrencySymbol($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value),$_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value);?>

                                                    <?php }?>

                                                <?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='picklist'){?>
                                                    <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('activitytype')=='Task'){?>
                                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getId();?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ID'] = new Smarty_variable($_tmp2, null, 0);?>
                                                    <?php }else{ ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()=='taskstatus'){?>
                                                            <?php $_smarty_tpl->tpl_vars["EVENT_STATUS_FIELD_MODEL"] = new Smarty_variable(Vtiger_Field_Model::getInstance('eventstatus',Vtiger_Module_Model::getInstance('Events')), null, 0);?>
                                                            <?php if ($_smarty_tpl->tpl_vars['EVENT_STATUS_FIELD_MODEL']->value){?>
                                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['EVENT_STATUS_FIELD_MODEL']->value->getId();?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ID'] = new Smarty_variable($_tmp3, null, 0);?>
                                                            <?php }else{ ?> 
                                                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getId();?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ID'] = new Smarty_variable($_tmp4, null, 0);?>
                                                            <?php }?>
                                                        <?php }else{ ?>
                                                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getId();?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ID'] = new Smarty_variable($_tmp5, null, 0);?>
                                                        <?php }?>
                                                    <?php }?>
                                                    <span <?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value)){?> class="picklist-color picklist-<?php echo $_smarty_tpl->tpl_vars['PICKLIST_FIELD_ID']->value;?>
-<?php echo Vtiger_Util_Helper::convertSpaceToHyphen($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_RAWVALUE']->value);?>
" <?php }?>> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>
 </span>
                                                <?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='multipicklist'){?>
													<?php echo $_smarty_tpl->getSubTemplate ("layouts/v7/modules/Vtiger/uitypes/MultiPicklistFormatedValue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RAW_VALUES_STRING'=>$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRaw($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()),'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value), 0);?>

                                                
                                                <?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='owner'){?>
                                                    <?php echo Vtiger_Owner_UIType::getCurrentOwnersForDisplay($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_RAWVALUE']->value,false,true);?>

                                                

                                                
                                                <?php }elseif($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType()=='phone'){?>
                                                    <span class="value text-nowrap" data-field-type="phone">
                                                        <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>


                                                        <?php $_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG'] = new Smarty_variable(getGlobalVariable('callCenterConfig'), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['CALL_CENTER_CONFIG'] = clone $_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG']; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars['CALL_CENTER_CONFIG'] = clone $_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG'];?>
                                                        <?php if ($_smarty_tpl->tpl_vars['CALL_CENTER_CONFIG']->value['enable']==true&&!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value)){?>
                                                            <?php $_smarty_tpl->tpl_vars['PHONE_NUMBER'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value,"/[-()\s]/",''), null, 0);?>

                                                            <a class="btnCall" data-value="<?php echo $_smarty_tpl->tpl_vars['PHONE_NUMBER']->value;?>
" record="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" title="<?php echo vtranslate('LBL_MAKE_CALL','PBXManager');?>
"
                                                                onclick="Vtiger_PBXManager_Js.registerPBXOutboundCall('<?php echo $_smarty_tpl->tpl_vars['PHONE_NUMBER']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
');"
                                                            >
                                                                <i class="fa fa-phone"></i>
                                                            </a>
                                                        <?php }?>
                                                    </span>
                                                

												
												<?php }elseif(($_smarty_tpl->tpl_vars['MODULE']->value==='Calendar'||$_smarty_tpl->tpl_vars['MODULE']->value==='Events')&&$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')==='location'){?>
													<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value){?>
														<a href="javascript:void(0)" onclick="GoogleMaps.showMaps('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>
</a>
													<?php }?>
												

                                                <?php }else{ ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_VALUE']->value;?>

                                                <?php }?>
                                            <?php }?>
                                        </span>
                                    </span>
                                    <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isEditable()=='true'&&$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isAjaxEditable()=='true'){?>
                                        <span class="hide edit">
                                        </span>
                                    <?php }?>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'){?>
                        <tr class="emptyRecordsDiv">
                            <?php ob_start();?><?php echo count($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['COLSPAN_WIDTH'] = new Smarty_variable($_tmp6+1, null, 0);?>
                            <td colspan="<?php echo $_smarty_tpl->tpl_vars['COLSPAN_WIDTH']->value;?>
">
                                <div class="emptyRecordsContent">
                                    <?php $_smarty_tpl->tpl_vars['SINGLE_MODULE'] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?>
                                    <!-- Modified by Kelvin Thang -- Date: 2018-08-03-->
                                    <!--<?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND');?>
.-->
                                    <?php echo vtranslate('LBL_NO_RECORDS_FOUND');?>
.
                                    <?php if ($_smarty_tpl->tpl_vars['IS_CREATE_PERMITTED']->value){?>
                                        <a style="color:blue" href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"> <?php echo vtranslate('LBL_CREATE');?>
</a>
                                        <?php if (Users_Privileges_Model::isPermitted($_smarty_tpl->tpl_vars['MODULE']->value,'Import')&&$_smarty_tpl->tpl_vars['LIST_VIEW_MODEL']->value->isImportEnabled()){?>
                                            <?php echo vtranslate('LBL_OR',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                            <a style="color:blue" href="#" onclick="return Vtiger_Import_Js.triggerImportAction()"><?php echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                                            <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                        <?php }else{ ?>
                                            <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                        <?php }?>
                                    <?php }?>
                                </div>
                            </td>
                        </tr>
                    <?php }?>
				</tbody>
			</table>
		</form>
	</div>
	<div id="scroller_wrapper" class="bottom-fixed-scroll">
		<div id="scroller" class="scroller-div"></div>
	</div>
</div>
<?php }} ?>