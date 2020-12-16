{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{* modules/Settings/ModuleManager/views/List.php *}

{strip}
	{* Added by Hieu Nguyen on 2018-07-31 *}
	<script type="text/javascript" src="{vresource_url('layouts/v7/modules/Settings/ModuleManager/resources/ModuleBuilder.js')}"></script>

	<div id="moduleBuilderModal" class="modal-dialog modal-content hide">
		{assign var=HEADER_TITLE value={vtranslate('LBL_MODULE_BUILDER_MODAL_TITLE', $QUALIFIED_MODULE)}}
		{include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
		
		<form class="form-horizontal moduleBuilderForm">
			<input type="hidden" name="blockid" /> 

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_MODULE_BUILDER_MODULE_NAME', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="moduleName" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_MODULE_BUILDER_MODULE_DISPLAY_NAME_EN', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="displayNameEn" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_MODULE_BUILDER_MODULE_DISPLAY_NAME_VN', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="displayNameVn" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_MODULE_BUILDER_MODULE_MENU_GROUP', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<select name="menuGroup" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%'>
						{assign var=MENU_GROUPS value=Vtiger_MenuStructure_Model::getAppMenuList()}
						{foreach key=INDEX item=GROUP_NAME from=$MENU_GROUPS}
							<option value="{$GROUP_NAME}">{vtranslate("LBL_$GROUP_NAME")}</option>
						{/foreach}
					</select>
				</div>
			</div>

            {*--BEGIN: Added by Kelin Thang on 2019-11-25 -- Enable Activity for module new, Apply module is Extension*}
            <div class="form-group">
                <label class="control-label fieldLabel col-sm-5">
                    <span>{vtranslate('LBL_MODULE_BUILDER_MODULE_HAS_RELATED_ACTIVITIES_LIST', $QUALIFIED_MODULE)}</span>
                    &nbsp;
                </label>
                <div class="controls col-sm-6">
                    <input type="checkbox" value="1" checked onclick="$(this).attr('value', this.checked? 1 : 0);" name="hasActivities" class="col-sm-3 inputElement" style=" margin-top: 8px;"/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label fieldLabel col-sm-5">
                    <span>{vtranslate('LBL_MODULE_BUILDER_MODULE_IS_EXTENSION', $QUALIFIED_MODULE)}</span>
                    &nbsp;
                </label>
                <div class="controls col-sm-6">
                    <input type="checkbox" value="0" onclick="$(this).attr('value', this.checked? 1 : 0);" name="isExtension" class="col-sm-3 inputElement" style=" margin-top: 8px;"/>
                </div>
            </div>
            {*--END: Added by Kelin Thang on 2019-11-25 -- Enable Activity for module new, Apply module is Extension*}

			{include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
		</form>
	</div>
	{* End Hieu Nguyen *}

	<div class="listViewPageDiv detailViewContainer" id="moduleManagerContents">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
			<div id="listview-actions" class="listview-actions-container">
				<div class="clearfix">
					<h4 class="pull-left">{vtranslate('LBL_MODULE_MANAGER', $QUALIFIED_MODULE)}</h4>

					{* Modified by Hieu Nguyen on 2018-12-24 *}
					{if isDeveloperMode()}
						<div class="pull-right">
							{* Added by Hieu Nguyen on 2018-08-08 *}
							<div class="btn-group">
								<button type="button" id="btnCreateModule" class="btn btn-primary">
									{vtranslate('LBL_MODULE_BUILDER_BTN_CREATE_NEW_MODULE', $QUALIFIED_MODULE)}
								</button>
							</div>&nbsp;
							{* End Hieu Nguyen *}

							<div class="btn-group">
								<button class="btn btn-default" type="button" onclick='window.location.href="{$IMPORT_USER_MODULE_FROM_FILE_URL}"'>
									{vtranslate('LBL_IMPORT_MODULE_FROM_ZIP', $QUALIFIED_MODULE)}
								</button>
							</div>&nbsp;
							<div class="btn-group">
								<button class="btn btn-default" type="button" onclick='window.location.href = "{$IMPORT_MODULE_URL}"'>
									{vtranslate('LBL_EXTENSION_STORE', 'Settings:ExtensionStore')}
								</button>
							</div>
						</div>
					{/if}
					{* End Hieu Nguyen *}
				</div>
				<br>
				<div class="contents">
					{assign var=COUNTER value=0}
					<table class="table table-bordered modulesTable">
						<tr>
							{foreach item=MODULE_MODEL key=MODULE_ID from=$ALL_MODULES}
								{assign var=MODULE_NAME value=$MODULE_MODEL->get('name')}
								{assign var=MODULE_ACTIVE value=$MODULE_MODEL->isActive()}
								{assign var=MODULE_LABEL value=vtranslate($MODULE_MODEL->get('label'), $MODULE_MODEL->get('name'))}
								{if $COUNTER eq 2}
								</tr><tr>
									{assign var=COUNTER value=0}
								{/if}
								<td class="ModulemanagerSettings">
									<div class="moduleManagerBlock">
										<span class="col-lg-1" style="line-height: 2.5;">
											<input type="checkbox" value="" name="moduleStatus" data-module="{$MODULE_NAME}" data-module-translation="{$MODULE_LABEL}" {if $MODULE_MODEL->isActive()}checked{/if} />
										</span>
										<span class="col-lg-1 moduleImage {if !$MODULE_ACTIVE}dull {/if}">
											{if vimage_path($MODULE_NAME|cat:'.png') != false}
												<img class="alignMiddle" src="{vimage_path($MODULE_NAME|cat:'.png')}" alt="{$MODULE_LABEL}" title="{$MODULE_LABEL}"/>
											{else}
												<img class="alignMiddle" src="{vimage_path('DefaultModule.png')}" alt="{$MODULE_LABEL}" title="{$MODULE_LABEL}"/>
											{/if}	
										</span>
										<span class="col-lg-7 moduleName {if !$MODULE_ACTIVE} dull {/if}"><h5 style="line-height: 0.5;">{$MODULE_LABEL}</h5></span>
											{assign var=SETTINGS_LINKS value=$MODULE_MODEL->getSettingLinks()}
											{if !in_array($MODULE_NAME, $RESTRICTED_MODULES_LIST) && (count($SETTINGS_LINKS) > 0)}
											<span class="col-lg-3 moduleblock">
												<span class="btn-group pull-right actions {if !$MODULE_ACTIVE}hide{/if}">
													<button class="btn btn-default btn-sm dropdown-toggle unpin hiden " data-toggle="dropdown">
														{vtranslate('LBL_SETTINGS', $QUALIFIED_MODULE)}&nbsp;<i class="caret"></i>
													</button>
													<ul class="dropdown-menu pull-right dropdownfields">
														{foreach item=SETTINGS_LINK from=$SETTINGS_LINKS}
															{if $MODULE_NAME eq 'Calendar'}
																{if $SETTINGS_LINK['linklabel'] eq 'LBL_EDIT_FIELDS'}
																	<li><a href="{$SETTINGS_LINK['linkurl']}&sourceModule=Events">{vtranslate($SETTINGS_LINK['linklabel'], $MODULE_NAME, vtranslate('LBL_EVENTS',$MODULE_NAME))}</a></li>
																	<li><a href="{$SETTINGS_LINK['linkurl']}&sourceModule=Calendar">{vtranslate($SETTINGS_LINK['linklabel'], $MODULE_NAME, vtranslate('LBL_TASKS','Calendar'))}</a></li>
																{else if $SETTINGS_LINK['linklabel'] eq 'LBL_EDIT_WORKFLOWS'} 
																	<li><a href="{$SETTINGS_LINK['linkurl']}&sourceModule=Events">{vtranslate('LBL_EVENTS', $MODULE_NAME)} {vtranslate('LBL_WORKFLOWS',$MODULE_NAME)}</a></li>	
																	<li><a href="{$SETTINGS_LINK['linkurl']}&sourceModule=Calendar">{vtranslate('LBL_TASKS', 'Calendar')} {vtranslate('LBL_WORKFLOWS',$MODULE_NAME)}</a></li>
																{else}
																	<li><a href={$SETTINGS_LINK['linkurl']}>{vtranslate($SETTINGS_LINK['linklabel'], $MODULE_NAME, vtranslate($MODULE_NAME, $MODULE_NAME))}</a></li>
																{/if}
															{else}
																<li>
																	<a	{if stripos($SETTINGS_LINK['linkurl'], 'javascript:')===0}
																			onclick='{$SETTINGS_LINK['linkurl']|substr:strlen("javascript:")};'
																		{else}
																			onclick='window.location.href = "{$SETTINGS_LINK['linkurl']}"'
																		{/if}>
																		{vtranslate($SETTINGS_LINK['linklabel'], $MODULE_NAME, vtranslate("SINGLE_$MODULE_NAME", $MODULE_NAME))}
																	</a>
																</li>
															{/if}
														{/foreach}
													</ul>
												</span>
											</span>
										{/if}
									</div>
									{assign var=COUNTER value=$COUNTER+1}
								</td>
							{/foreach}
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
{/strip}
