{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{* modules/Settings/LayoutEditor/views/Index.php *}

{strip}
	{* Added by Hieu Nguyen on 2018-07-31 *}
	<script type="text/javascript" src="{vresource_url('layouts/v7/modules/Settings/LayoutEditor/resources/RelationshipEditor.js')}"></script>

	<div class="btn-group">
		<button type="button" id="btnAddRelationship" class="btn btn-primary">
			{vtranslate('LBL_BTN_ADD_RELATIONSHIP', $QUALIFIED_MODULE)}
		</button>
	</div>

	<div id="relationshipEditorModal" class="modal-dialog modal-content hide">
		{assign var=HEADER_TITLE value={vtranslate('LBL_RELATIONSHIP_EDITOR_MODAL_TITLE', $QUALIFIED_MODULE)}}
		{include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
		
		<form class="form-horizontal relationshipEditorForm" method="POST">
			<input type="hidden" name="leftSideModule" value="{$SELECTED_MODULE_NAME}"/> 

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_LEFT_SIDE_MODULE', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6" style="margin-top: 7px">
					<span class="label label-primary" style="font-size: 110%">{vtranslate($SELECTED_MODULE_NAME)}</span>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_RIGHT_SIDE_MODULE', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<select name="rightSideModule" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%'>
						<option value="">--</option>
						{foreach key=INDEX item=MODULE_NAME from=$MODULE_LIST}
							<option value="{$MODULE_NAME}">{vtranslate($MODULE_NAME)}</option>
						{/foreach}
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_RELATE_TYPE', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<select name="relationType" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%'>
						<option value="">--</option>	
						<option value="1:1" disabled>1:1</option>
						<option value="1:N">1:N</option>
						<option value="N:N">N:N</option>
					</select>
				</div>
			</div>

			<div class="form-group" style="display: none">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_LISTING_FUNCTION_NAME', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="listingFunctionName" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>
			
			<div class="form-group" style="display: none">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_LEFT_SIDE_MODULE_REFERENCE_FIELD', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="leftSideReferenceField" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			<div class="form-group" style="display: none">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_RIGHT_SIDE_MODULE_REFERENCE_FIELD', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="rightSideReferenceField" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_RELATION_LABEL_KEY', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="relationLabelKey" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_RELATION_LABEL_DISPLAY_EN', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="relationLabelDisplayEn" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			<div class="form-group">
				<label class="control-label fieldLabel col-sm-5">
					<span>{vtranslate('LBL_RELATIONSHIP_EDITOR_RELATION_LABEL_DISPLAY_VN', $QUALIFIED_MODULE)}</span>
					&nbsp;
					<span class="redColor">*</span>
				</label>
				<div class="controls col-sm-6">
					<input type="text" name="relationLabelDisplayVn" class="col-sm-3 inputElement" data-rule-required='true' style='width: 75%' />
				</div>
			</div>

			{include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
		</form>
	</div>
	{* End Hieu Nguyen *}

	{assign var=ModulesList value=[]}
	{assign var=removedModuleIds value=array()}
	<div class="relatedTabModulesList" style="padding:1% 0">
		<div>
			{if empty($RELATED_MODULES) && empty($RELATION_FIELDS)} 
				<div class="emptyRelatedTabs" style="margin-top:100px;">
					<div class="recordDetails">
						<div class="textAlignCenter" style="font-size:20px;opacity:0.7">{vtranslate('LBL_NO_RELATED_INFO',$QUALIFIED_MODULE)}.</div>
					</div>
				</div>
			{else}
				<div class="relatedListContainer" style="margin-top:20px;">
					<div class="row">
						<div class="col-sm-5" id="ONE_ONE_AND_MANY_ONE_RELATIONSHIP">
							<div style="padding-bottom:15px;">
								<h6>{vtranslate('ONE_ONE_AND_MANY_ONE_RELATIONSHIP',$QUALIFIED_MODULE)}</h6>
							</div>
							<div style="list-style: none;">
								{if count($RELATION_FIELDS) eq 0}
									<div class="well" style="height:72px;opacity:0.6;text-align:center;padding-top: 30px;"> 
										<div>{vtranslate('LBL_NO_RELATION_TYPE',$QUALIFIED_MODULE)}.</div>
									</div>
								{/if}

								{foreach item=RELATION_FIELD key=FIELD_NAME from=$RELATION_FIELDS}
									{assign var=REFERENCE_LIST value=$RELATION_FIELD->getReferenceList()}
									{foreach item=REFERENCE_MODULE from=$REFERENCE_LIST}
										<div class="contentsBackground border1px ONE_TO_ONE" 
											 data-relation-type="{$RELATION_FIELD->get('_relationType')}" data-field-name="{$FIELD_NAME}" 
											 data-module="{$REFERENCE_MODULE}">
											<div class="row" style="margin-bottom: 5px;">
												<div class="col-sm-5" style="margin-top:5px;">
													<div class="textOverflowEllipsis" style="font-size:15px;" title="{vtranslate($RELATION_FIELD->get('label'),$SELECTED_MODULE_NAME)}">{vtranslate($RELATION_FIELD->get('label'),$SELECTED_MODULE_NAME)}</div>
													<span class="referenceModule">{vtranslate($REFERENCE_MODULE,$REFERENCE_MODULE)}</span>
												</div>
												<div class="col-sm-5" style="margin-top: 5px;">
													<div class="pull-right">
														{if $RELATION_FIELD->get('_relationType') eq Settings_LayoutEditor_Module_Model::MANY_TO_ONE}
															<img src="{vimage_path('N-1.png')}" width="100" height="50" />
														{else}
															<img src="{vimage_path('1-1.png')}" width="100" height="50" />
														{/if}
													</div>
												</div>
											</div>
										</div>
									{/foreach}
								{/foreach}
							</div>
						</div>
						<div class="col-sm-7" id="ONE_MANY_RELATIONSHIP">
							<div class="row"  style="padding-bottom:15px;">
								<span class="col-sm-6">
									<h6>{vtranslate('ONE_MANY_RELATIONSHIP',$QUALIFIED_MODULE)}</h6>
								</span>
								<span class="col-sm-5">
									&nbsp;
								</span>
							</div>
							<div class="row">
								{if count($RELATED_MODULES) eq 0}
									<div class="well" style="height:72px;opacity:0.6;text-align:center;padding-top: 30px;"> 
										<div> {vtranslate('LBL_NO_RELATION_TYPE',$QUALIFIED_MODULE)}.</div>
									</div>
								{else}
									<div class="col-sm-6">
										<ul class="relatedModulesList" style="list-style: none;margin:0px;padding-left:0px;">
											{foreach item=MODULE_MODEL from=$RELATED_MODULES}
												{if $MODULE_MODEL->isActive()}
													{assign var=RELATION_FIELD_MODEL value=$MODULE_MODEL->getRelationField()}
													<li class="relatedModule module_{$MODULE_MODEL->getId()} border1px ONE_TO_MANY"  
														data-relation-id="{$MODULE_MODEL->getId()}" data-module="{$MODULE_MODEL->getRelationModuleName()}" 
														data-relation-type="{$MODULE_MODEL->get('relationtype')}"
														{if $RELATION_FIELD_MODEL} data-field-name="{$RELATION_FIELD_MODEL->getName()}"{/if}>

														{* Modified by Hieu Nguyen on 2018-09-06 *}
														<div class="row">
															<span class="col-sm-1" style="margin-top:18px;">
																<img class="cursorPointerMove" src="{vimage_path('drag.png')}" title="{vtranslate('LBL_DRAG',$QUALIFIED_MODULE)}"/>&nbsp;&nbsp;
															</span>
															<div class="col-sm-5" style="margin-top:4px;">
																<div class="textOverflowEllipsis">
																	<span class="moduleLabel" style="font-size:15px;" title="{vtranslate($MODULE_MODEL->get('label'), $QUALIFIED_MODULE)}">{vtranslate($MODULE_MODEL->get('label'), $SELECTED_MODULE_NAME)}</span>
																</div>
																<span class="moduletranslatedLabel">{vtranslate($MODULE_MODEL->get('label'), $SELECTED_MODULE_NAME)}</span>
															</div>
															<div class="col-sm-4" style="margin-top: 4px;">
																<div class="pull-right">
																	{if $MODULE_MODEL->get('relationtype') eq '1:N' and $MODULE_MODEL->getRelationModuleName() neq 'Calendar'}
																		<img src="{vimage_path('1-N.png')}" width="100" height="30" />
																	{else}
																		<img src="{vimage_path('N-N.png')}" width="100" height="30" />
																	{/if}
																</div>
															</div>
															<div class="col-sm-1 deleteButton" style="padding-right: 0px;" data-relation="1">
																<div class="pull-right">
																	<button class="close" data-dismiss="modal" title="{vtranslate('LBL_CLOSE')}">x</button>
																</div>
															</div>
														</div>
														<div style="margin-top: -7px; margin-left: 30px">
															{$MODULE_MODEL->get('name')}&nbsp;{if $RELATION_FIELD_MODEL}({$RELATION_FIELD_MODEL->getName()}){/if}
														</div>
														{* End Hieu Nguyen *}
													</li>
												{/if}
											{/foreach}
										</ul>
									</div>
									<div class="col-sm-6">
										<div>
											<div class="pull-right" style="margin-bottom:20px;">
												<span class="col-sm-6" style="width:100%">
													<img src="{vimage_path('Square.png')}" />&nbsp;&nbsp;&nbsp;
													{vtranslate($SELECTED_MODULE_NAME,$SELECTED_MODULE_NAME)}
												</span>
												<span class="col-sm-6" style="width:100%">
													<img src="{vimage_path('Circle.png')}" />&nbsp;&nbsp;&nbsp;
													{vtranslate('LBL_RELATED_MODULE',$QUALIFIED_MODULE)}
												</span>
											</div>
										</div>
										<div class="relationListInfoWrapper">
											<div class="col-sm-10 relationListInfo" style="margin-left: 40px;">
												{if count($RELATED_MODULES) neq 0}
													<div style="margin: 5px 0px;">
														<div class="relatedListInfoHeader"><i class="fa fa-info-circle"></i>&nbsp;{vtranslate('LBL_INFO', $QUALIFIED_MODULE)}</div><br>
														<div>{vtranslate('LBL_RELATED_LIST_INFO', $QUALIFIED_MODULE)}.</div><br>
													</div>
												{/if}
											</div>
										</div>
									</div>
								{/if}
							</div>
							<br>
							<div class="row hiddenModulesContainer {if !$HIDDEN_TAB_EXISTS}hide{/if}">
								<div class="col-lg-6" style="padding-right: 0px;">
									<select class="select2 inputElement" multiple name="addToList" placeholder="{vtranslate('LBL_SELECT_HIDDEN_MODULE', $QUALIFIED_MODULE)}">
										{foreach item=MODULE_MODEL from=$RELATED_MODULES}
											{$ModulesList[$MODULE_MODEL->getId()] = vtranslate($MODULE_MODEL->get('label'), $MODULE_MODEL->getRelationModuleName())}
											{if !$MODULE_MODEL->isActive()}
												{array_push($removedModuleIds, $MODULE_MODEL->getId())}
												<option value="{$MODULE_MODEL->getId()}" data-module-translated-label="{vtranslate($MODULE_MODEL->getRelationModuleName(),$MODULE_MODEL->getRelationModuleName())}">
													{vtranslate($MODULE_MODEL->get('label'), $MODULE_MODEL->getRelationModuleName())}
												</option>
											{/if}
										{/foreach}
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class='modal-overlay-footer clearfix saveRelatedListContainer hide'>
						<div class="row clearfix">
							<div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
								<button type='submit' class='btn btn-success saveButton saveRelatedList' >{vtranslate('LBL_SAVE', $MODULE)}</button>&nbsp;&nbsp;
							</div>
						</div>
					</div>

                    {* Added condition check for $MODULE_MODEL by Hieu Nguyen on 2020-0519 to prevent null pointer error *}
                    {if $MODULE_MODEL}
                        <li class="moduleCopy hide border1px" style="width: 300px; padding: 5px;">
                            <div class="row">
                                <span class="col-sm-1" style="margin-top: 18px;">
                                    <img class="cursorPointerMove" src="{vimage_path('drag.png')}" title="{vtranslate('LBL_DRAG', $QUALIFIED_MODULE)}"/>&nbsp;&nbsp;
                                </span>
                                <div class="col-sm-5" style="margin-top: 4px;">
                                    <div class="textOverflowEllipsis">
                                        <span class="moduleLabel" style="font-size: 15px;"></span>
                                    </div>
                                    <span class="moduletranslatedLabel"></span>
                                </div>
                                <div class="col-sm-4" style="margin-top: 4px;">
                                    <div class="pull-right">
                                        {if $MODULE_MODEL->get('relationtype') eq '1:N' and $MODULE_MODEL->getRelationModuleName() neq 'Calendar'}
                                            <img src="{vimage_path('1-N.png')}" width="100" height="50" />
                                        {else}
                                            <img src="{vimage_path('N-N.png')}" width="100" height="50" />
                                        {/if}
                                    </div>
                                </div>
                                <div class="col-sm-1 deleteButton" style="padding-right: 0px;" data-relation="1">
                                    <div class="pull-right">
                                        <button class="close" data-dismiss="modal" title="{vtranslate('LBL_CLOSE')}">x</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    {/if}
                    {* End Hieu Nguyen *}
				</div>
			{/if}
			<input type="hidden" class="ModulesListArray" value='{ZEND_JSON::encode($ModulesList)}' />
			<input type="hidden" class="RemovedModulesListArray" value='{ZEND_JSON::encode($removedModuleIds)}' />
		</div>
	</div>
{/strip}