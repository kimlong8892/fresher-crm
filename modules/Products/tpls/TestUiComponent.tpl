{strip}
    <script>
        var test_var = {json_encode(['a' => 1, 'b' => 2])};
        console.log(typeof (test_var));
        var test_date = '{$dateTime}';
    </script>
    <link rel="stylesheet"
          href="{vresource_url('libraries/jquery/bootstrapswitch/css/bootstrap3/bootstrap-switch.min.css')}"/>
    <script src="{vresource_url('libraries/jquery/bootstrapswitch/js/bootstrap-switch.min.js')}"></script>
    <button id="btnDeclare" class="btn btn-primary">
        {vtranslate('LBL_CHECK_MODAL_PRODUCT_SUBMIT_BTN', 'Products')}
    </button>
    <div class="contents tabbable">
        <ul class="nav nav-tabs marginBottom10px">
            <li class="tab1 active"><a data-toggle="tab" href="#tab1"><strong>Tab1</strong></a></li>
            <li class="tab2"><a data-toggle="tab" href="#tab2"><strong>Tab2</strong></a></li>
            <li class="tab3"><a data-toggle="tab" href="#tab3"><strong>Tab3</strong></a></li>
        </ul>
        <div class="tab-content overflowVisible">
            <div class="tab-pane active" id="tab1">
                Tab1 content
            </div>
            <div class="tab-pane" id="tab2">
                wsdfsdfsdfsdfsdf
            </div>
            <div class="tab-pane" id="tab3">
                tab333333333
            </div>
        </div>
    </div>
    <div id="declareProductModal" class="modal-dialog modal-content hide">
        {assign var=HEADER_TITLE value={vtranslate('LBL_DECLARE_PRODUCT_MODAL_TITLE', 'Products')}}
        {include file='ModalHeader.tpl'|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
        <form class="form-horizontal declareProductForm" method="POST" style="padding: 20px;">
            <div class="form-group">
                <div class="referencefield-wrapper">
                    <input name="popupReferenceModule" type="hidden" value="Accounts">
                    <div class="input-group">
                        <input name="account_id" type="hidden" value="" class="sourceField" data-displayvalue=""/>
                        <input id="account_id_display" name="account_id_display" data-fieldname="account_id"
                               data-fieldtype="reference"
                               type="text" class="marginLeftZero autoComplete inputElement ui-autocomplete-input"
                               value=""
                               placeholder="{vtranslate('LBL_TYPE_SEARCH', 'Vtiger')}" autocomplete="off"/>
                        <a href="#" class="clearReferenceSelection hide">&nbsp;x&nbsp;</a>
                        <span class="input-group-addon relatedPopup cursorPointer"
                              title="{vtranslate('LBL_SELECT', 'Vtiger')}"><i
                                    id="account_id_select" class="fa fa-search"></i></span>
                    </div>
                    <span class="createReferenceRecord cursorPointer clearfix"
                          title="{vtranslate('LBL_CREATE', 'Vtiger')}"><i id="account_id_create"
                                                                          class="fa fa-plus"></i></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label fieldLabel col-sm-5">
                    <select class="referenceModulesList select2" tabindex="-1" style="width: 140px; display: none;">
                        <option value="Accounts">Accounts</option>
                        <option value="Contacts">Contacts</option>
                        <option value="Leads">Leads</option>
                    </select>
                </label>
                <div class="controls fieldValue col-sm-6">
                    <div class="referencefield-wrapper">
                        <input name="popupReferenceModule" type="hidden" value="Accounts">
                        <div class="input-group">
                            <input name="parent_id" type="hidden" value="" class="sourceField" data-displayvalue=""/>
                            <input id="parent_id_display" name="parent_id_display" data-fieldname="parent_id"
                                   data-fieldtype="reference"
                                   type="text" class="marginLeftZero autoComplete inputElement ui-autocomplete-input"
                                   value=""
                                   placeholder="{vtranslate('LBL_TYPE_SEARCH', 'Vtiger')}" autocomplete="off"/>
                            <a href="#" class="clearReferenceSelection hide">&nbsp;x&nbsp;</a>
                            <span class="input-group-addon relatedPopup cursorPointer"
                                  title="{vtranslate('LBL_SELECT', 'Vtiger')}"><i
                                        id="parent_id_select" class="fa fa-search"></i></span>
                        </div>
                        <span class="createReferenceRecord cursorPointer clearfix"
                              title="{vtranslate('LBL_CREATE', 'Vtiger')}"><i
                                    id="parent_id_create" class="fa fa-plus"></i></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <select name="leadsource" class="inputElement select2" data-fieldtype="picklist" style="display: none">
                    <option value="">--</option>
                    <option value="value1">Option 1</option>
                    <option value="value2">Option 2</option>
                    <option value="value3">Option 3</option>
                </select>
            </div>

            <div class="form-group">
                <input type="checkbox" name="enable_notification" class="bootstrap-switch hide">
            </div>


            <div class="form-group">
                <div class="input-group inputElement p-4" style="margin-bottom: 3px">
                    <input type="text" name="date-field-test" class="form-control datePicker" data-fieldtype="date"
                           data-date-format="{$USER_MODEL->get('date_format')}"
                           data-rule-required="true"/>
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            {include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
        </form>
    </div>
{/strip}