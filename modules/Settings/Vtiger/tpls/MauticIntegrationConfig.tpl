{strip}
    <form name="settings">
        <div class="editViewBody" style="margin-bottom: 70px;">
            <div class="editViewContents">
                <div class="fieldBlockContainer">
                    <h4 class="">{vtranslate('LBL_MAUTIC_INTEGRATION_CONFIG', $MODULE_NAME)}</h4>
                    <div class="connection_error {if $CONNECTION == true}hide{/if}" style="color:red !important;">{vtranslate('LBL_MAUTIC_INTEGRATION_ERROR_CONNECTION', $MODULE_NAME)}</div>
                    <hr style="clear:both">
                    <div class="contents tabbable">
                        <ul class="nav nav-tabs marginBottom10px">
                            <li class="common-settings active"><a data-toggle="tab" href="#common-settings"><strong>{vtranslate('LBL_MAUTIC_INTEGRATION_COMMON_SETTING', $MODULE_NAME)}</strong></a></li>
                            {if $CONNECTION == true}
                            <li class="mapping-field-settings"><a data-toggle="tab" href="#mapping-field-settings"><strong>{vtranslate('LBL_MAUTIC_INTEGRATION_MAPPING_FIELD_SETTING', $MODULE_NAME)}</strong></a></li>
                            <li class="mapping-stage-settings"><a data-toggle="tab" href="#mapping-stage-settings"><strong>{vtranslate('LBL_MAUTIC_INTEGRATION_MAPPING_STAGE_SETTING', $MODULE_NAME)}</strong></a></li>
                            <li class="mapping-stage-segment-settings"><a data-toggle="tab" href="#mapping-stage-segment-settings"><strong>{vtranslate('LBL_MAUTIC_INTEGRATION_MAPPING_STAGE_SEGMENT_SETTING', $MODULE_NAME)}</strong></a></li>
                            {/if}
                                    
                        </ul>
                        <div class="contents col-lg-12 tab-content overflowVisible">
                            <div id="common-settings" class="tabcontent tab-pane active">
                                <table class="configDetails" style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td class="fieldLabel alignTop">{vtranslate('LBL_MAUTIC_INTEGRATION_CONFIG_ENDPOINT', $MODULE_NAME)}</td>
                                            <td class="fieldValue alignTop"><input type="text" class="inputElement" name="api_url" data-rule-required="true" value="{$CONFIG['api_url']}"></td>
                                            <td class="fieldLabel alignTop"></td>
                                            <td class="fieldValue alignTop"></td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel alignTop">{vtranslate('LBL_MAUTIC_INTEGRATION_CONFIG_USERNAME', $MODULE_NAME)}</td>
                                            <td class="fieldValue alignTop"><input type="text" class="inputElement" name="username" data-rule-required="true" value="{$CONFIG['username']}"></td>
                                        </tr>     
                                        <tr>
                                            <td class="fieldLabel alignTop">{vtranslate('LBL_MAUTIC_INTEGRATION_CONFIG_PASSWORD', $MODULE_NAME)}</td>
                                            <td class="fieldValue alignTop inline">
                                                {if $CONFIG['password'] != ''}
                                                    <a class="change_password" href="javascript:void(0)">{vtranslate('LBL_MAUTIC_INTEGRATION_CONFIG_CHANGE_PASSWORD', $MODULE_NAME)}</a>
                                                    <input type="password" class="inputElement hide" data-rule-required="false" name="password" value="">
                                                    <i class="fa fa-eye view_password hide" style="font-size: 15px;margin-left: 10px;cursor: pointer;"></i>
                                                    <i class="fa fa-undo undo_password hide" style="font-size: 13px;margin-left: 5px;cursor: pointer;"></i>

                                                    <input type="hidden" class="inputElement" name="change_password" value="0">
                                                {else}
                                                    <input type="password" class="inputElement" name="password" data-rule-required="true" value="">
                                                    <i class="fa fa-eye view_password" style="font-size: 15px;margin-left: 10px;cursor: pointer;"></i>
                                                    <input type="hidden" class="inputElement" name="change_password" value="1">
                                                {/if}

                                                <a href="javascript:void(0)" class="checkButton">{vtranslate('LBL_MAUTIC_INTEGRATION_CHECK_CONNECTION', $MODULE_NAME)}</a>
                                            </td>
                                        </tr>                                                           
                                        <tr>
                                            <td class="fieldLabel alignTop">{vtranslate('LBL_MAUTIC_INTEGRATION_BATCH_LIMIT', $MODULE_NAME)}</td>
                                            <td class="fieldValue alignTop"><input type="text" class="inputElement" name="batch_limit" data-rule-required="true" value="{$CONFIG['batch_limit']}"></td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel alignTop">{vtranslate('LBL_MAUTIC_INTEGRATION_SYNC_HISTORY_WHEN_CONVERT', $MODULE_NAME)}</td>
                                            <td class="fieldValue alignTop inline">
                                                <select name="sync_history_when_converted" id="sync_history_when_converted" value={$CONFIG['sync_history_when_converted']}>
                                                    <option value='none' {if $CONFIG['sync_history_when_converted'] == 'none'}selected='selected'{/if}>{vtranslate('LBL_MAUTIC_INTEGRATION_DO_NOTHING', $MODULE_NAME)}</option>
                                                    <option value='move' {if $CONFIG['sync_history_when_converted'] == 'move'}selected='selected'{/if}>{vtranslate('LBL_MAUTIC_INTEGRATION_MOVE', $MODULE_NAME)}</option>
                                                    <option value='copy' {if $CONFIG['sync_history_when_converted'] == 'copy'}selected='selected'{/if}>{vtranslate('LBL_MAUTIC_INTEGRATION_COPY', $MODULE_NAME)}</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="fieldLabel alignTop">{vtranslate('LBL_MAUTIC_INTEGRATION_DELETE_CONTACT_ON_MAUTIC_WHEN_DELETE_ON_CRM', $MODULE_NAME)}</td>
                                            <td class="fieldValue alignTop"><input type="checkbox" class="listViewEntriesCheckBox" {if !isset($CONFIG['delete_contact_on_mautic_when_delete_on_crm']) || $CONFIG['delete_contact_on_mautic_when_delete_on_crm'] == 1} checked{/if} name="delete_contact_on_mautic_when_delete_on_crm" value="1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            {if $CONNECTION == true}
                            <div id="mapping-field-settings" class="tabcontent tab-pane">
                                {foreach from=$MAPPING_FIELDS item=MODULE_FIELDS key=MAPPING_MODULE}

                                {assign var=HAS_CONFIG value=$CONFIG['mapping_fields'][{$MAPPING_MODULE|lower}]|count}

                                <div style="clear:both"></div>
                                <div class="headerblock block-checkbox {if $HAS_CONFIG == 0}collapsed{/if}" data-toggle="collapse" data-target="#mapping-field-{$MAPPING_MODULE|lower}">
                                    <input type="checkbox" value="{$MAPPING_MODULE|lower}" class="listViewEntriesCheckBox field-module" id="chx-mapping-field-{$MAPPING_MODULE|lower}" {if $HAS_CONFIG > 0}checked{/if}/>
                                </div>
                                <div class="headerblock block-module">
                                    {vtranslate($MAPPING_MODULE, $MAPPING_MODULE)}
                                </div>
                                <div style="clear:both"></div>
                                <div id="mapping-field-{$MAPPING_MODULE|lower}" class="collapse mapping-header {if $HAS_CONFIG > 0}in{/if}" {if $HAS_CONFIG == 0}style="height:0px" aria-expanded="false"{/if}>
                                    <div class="form-group-header">
                                        <div class="control-label fieldLabel col-sm-4" style="font-weight: bold;">
                                            <span>{vtranslate('LBL_MAUTIC_INTEGRATION_CRM_FIELD', $MODULE_NAME)}</span>
                                        </div>

                                        <div class="control-label fieldLabel col-sm-4" style="font-weight: bold;">
                                            <span>{vtranslate('LBL_MAUTIC_INTEGRATION_MAUTIC_FIELD', $MODULE_NAME)}</span>
                                        </div>
                                    </div>

                                    {foreach  from=$MAPPING_REQUIRED_FIELDS[$MAPPING_MODULE] key=MAUTIC_FIELD item=CRM_FIELD}
                                    <div class="form-group">
                                        <div class="control-label fieldLabel col-sm-4">
                                            <span>{$MODULE_FIELDS[$CRM_FIELD]}</span>
                                            <select style="display:none" class="required inputElement">
                                                {html_options options=$MODULE_FIELDS selected=$CRM_FIELD value=$CRM_FIELD}
                                            </select>
                                        </div>

                                        <div class="control-label fieldLabel col-sm-4">
                                            <span>{$ALL_MAUTIC_FIELDS[$MAUTIC_FIELD]}</span>
                                            <select style="display:none" class="required inputElement">
                                                {html_options options=$ALL_MAUTIC_FIELDS selected=$MAUTIC_FIELD value=$MAUTIC_FIELD}
                                            </select>
                                            <a href="javacript:void();" class="hide close-group">✕</a>
                                        </div>
                                    </div>        
                                    {/foreach}

                                    {foreach  from=$CONFIG['mapping_fields'][{$MAPPING_MODULE|lower}] key=key item=FIELD}
                                    {if $FIELD.required eq 0}
                                    <div class="form-group">
                                        <div class="control-label fieldLabel col-sm-4">
                                            <select class="no-required inputElement">
                                                {html_options options=$MODULE_FIELDS selected=$FIELD.crm value=$CRM_FIELD}
                                            </select>
                                        </div>

                                        <div class="control-label fieldLabel col-sm-4">
                                            <select class="no-required inputElement">
                                                {html_options options=$ALL_MAUTIC_FIELDS selected=$FIELD.mautic value=$MAUTIC_FIELD}
                                            </select>
                                            <a href="javacript:void();" class="close-group">✕</a>
                                        </div>
                                    </div>   
                                    {/if}
                                    {/foreach}

                                    <div class="form-group-footer">
                                        <div class="control-label fieldLabel no-border col-sm-4">
                                        </div>
                                        
                                        <div class="control-label fieldLabel no-border col-sm-4" style="text-align:right">
                                            <a href="javacript:void();" class="add-mapping">+ {vtranslate('LBL_MAUTIC_INTEGRATION_ADD_CONFIG', $MODULE_NAME)}</a>
                                        </div>
                                    </div> 
                                </div>
                                {/foreach}
                            </div>
                            
                            <div id="mapping-stage-settings" class="tabcontent tab-pane">                        
                                {foreach  from=$MODULE_STAGE_FIELDS key=MODULE item=FIELD}

                                {if $MODULE == 'Leads'}
                                {assign var=HAS_CONFIG value=$CONFIG['mapping_fields']['leads']|count}
                                {/if}

                                {if $MODULE != 'Leads'}
                                {assign var=HAS_CONFIG value=$CONFIG['mapping_fields']['contacts']|count}
                                {/if}

                                <div id="block-mapping-stage-{$MODULE|lower}" class="headerblock {if !$HAS_CONFIG}hide{/if}" data-toggle="collapse" data-target="#mapping-stage-{$MODULE|lower}"><i class="indicator fa fa-chevron-down"></i>&nbsp;{vtranslate($MODULE, $MODULE)}</div>
                                <div id="mapping-stage-{$MODULE|lower}" data-module-lower="{$MODULE|lower}" class="collapse in mapping-header mapping-stage {if !$HAS_CONFIG}hide{/if}">
                                    <div class="form-group-header">
                                        <div class="control-label fieldLabel col-sm-4" style="font-weight: bold;">
                                            <span>{vtranslate('LBL_MAUTIC_INTEGRATION_CRM_STAGE', $MODULE_NAME)}</span>
                                        </div>
                                        
                                        <div class="control-label fieldLabel col-sm-4" style="font-weight: bold;">
                                            <span>{vtranslate('LBL_MAUTIC_INTEGRATION_MAUTIC_STAGE', $MODULE_NAME)}</span>
                                        </div>
                                    </div>
                                    

                                    {foreach  from=$FIELD['options'] key=stage item=label}
                                    <div class="form-group">
                                        <div class="control-label fieldLabel col-sm-4">
                                            <span>{$label}</span>
                                            <select style="display:none" class="required inputElement">
                                                {html_options options=$FIELD['options'] selected=$stage value=$stage}
                                            </select>
                                        </div>
                                        
                                        <div class="control-label fieldLabel col-sm-4">
                                            <select class="no-required inputElement">
                                                <option value=''>{vtranslate('LBL_MAUTIC_INTEGRATION_NO_CONFIG', $MODULE_NAME)}</option>
                                                {html_options options=$MAUTIC_STAGES selected=$CONFIG['mapping_stages'][$MODULE|lower][$stage]}
                                            </select>
                                        </div>
                                    </div>                                
                                    
                                    {/foreach}
                                </div>
                                {/foreach}
                            </div>

                            <div id="mapping-stage-segment-settings" class="tabcontent tab-pane">  
                                <div id="mapping-stage-segment-contents" class="in mapping-header mapping-stage-segment">   
                                    <div class="form-group-header">
                                        <div class="control-label fieldLabel col-sm-4" style="font-weight: bold;">
                                            <span>{vtranslate('LBL_MAUTIC_INTEGRATION_MAUTIC_STAGE', $MODULE_NAME)}</span>
                                        </div>
                                        
                                        <div class="control-label fieldLabel col-sm-4" style="font-weight: bold;">
                                            <span>{vtranslate('LBL_MAUTIC_INTEGRATION_MAUTIC_SEGMENT', $MODULE_NAME)}</span>
                                        </div>
                                    </div>

                                    <div class="form-group hide">
                                        <div class="control-label fieldLabel col-sm-4">
                                            <select class="required inputElement">
                                                {html_options options=$MAUTIC_STAGES}
                                            </select>
                                        </div>
                                        
                                        <div class="control-label fieldLabel col-sm-4">
                                            <select class="required inputElement">
                                                {html_options options=$MAUTIC_SEGMENTS}
                                            </select>
                                            <a href="javacript:void();" class="close-group">✕</a>
                                        </div>
                                    </div>      

                                    {foreach  from=$CONFIG['mapping_stages_segments'] key=key item=item}
                                    <div class="form-group">
                                        <div class="control-label fieldLabel col-sm-4">
                                            <select class="no-required inputElement">
                                                {html_options options=$MAUTIC_STAGES selected=$item.stage}
                                            </select>
                                        </div>
                                        
                                        <div class="control-label fieldLabel col-sm-4">
                                            <select class="no-required inputElement">
                                                {html_options options=$MAUTIC_SEGMENTS selected=$item.segment}
                                            </select>
                                            <a href="javacript:void();" class="close-group">✕</a>
                                        </div>
                                    </div>                                
                                    
                                    {/foreach}

                                    <div class="form-group-footer">
                                        <div class="control-label fieldLabel no-border col-sm-4">
                                        </div>
                                        
                                        <div class="control-label fieldLabel no-border col-sm-4" style="text-align:right">
                                            <a href="javacript:void();" class="add-mapping">+ {vtranslate('LBL_MAUTIC_INTEGRATION_ADD_CONFIG', $MODULE_NAME)}</a>
                                        </div>
                                    </div> 
                                <div>
                            </div>
                        </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-overlay-footer clearfix">
            <div class="row clear-fix">
                <div class="textAlignCenter col-lg-12 col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-success saveButton">{vtranslate('LBL_SAVE')}</button>
                    <a class="cancelLink" href="javascript:history.back()" type="reset">Hủy bỏ</a>
                </div>
            </div> 
        </div>
    </form>

    <link rel="stylesheet" href="{vresource_url('libraries/jquery/bootstrapswitch/css/bootstrap3/bootstrap-switch.min.css')}"/>
    <script src="{vresource_url('libraries/jquery/bootstrapswitch/js/bootstrap-switch.min.js')}"></script>
{strip}

