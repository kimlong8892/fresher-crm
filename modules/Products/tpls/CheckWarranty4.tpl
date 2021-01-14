{strip}
    <link rel="stylesheet"
          href="{vresource_url('libraries/jquery/bootstrapswitch/css/bootstrap3/bootstrap-switch.min.css')}"/>
    <script src="{vresource_url('libraries/jquery/bootstrapswitch/js/bootstrap-switch.min.js')}"></script>
    <div id="checkWarranty">
        <h4>{vtranslate('LBL_CHECK_WARRANTY_TITLE', 'Products')}</h4>

        <form id="checkWarrantyForm" method="post" action="">
            <input type="text"
                   name="serial"
                   value="{$smarty.post.seral}"
                   placeholder="{vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER', 'Products')}">
            &nbsp;
            <button id="btnCheck" class="btn btn-primary">
                {vtranslate('LBL_CHECK_WARRANTY_SUBMIT_BTN', 'Products')}
            </button>
            &nbsp;
            <button id="btnDeclare" class="btn btn-primary">
                {vtranslate('LBL_CHECK_MODAL_PRODUCT_SUBMIT_BTN', 'Products')}
            </button>
        </form>

        <div id="result" style="display: none;">
            <table>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_PRODUCT_NAME', 'Products')}</th>
                    <td id="productName"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_SERIAL_NO', 'Products')}</th>
                    <td id="serialNo"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_START_DATE', 'Products')}</th>
                    <td id="warrantyStartDate"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_END_DATE', 'Products')}</th>
                    <td id="warrantyEndDate"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_STATUS', 'Products')}</th>
                    <td><span class="label" id="warrantyStatus"></span></td>
                </tr>
            </table>
        </div>

        <div id="declareProductModal" class="modal-dialog modal-content hide">
            {assign var=HEADER_TITLE value={vtranslate('LBL_DECLARE_PRODUCT_MODAL_TITLE', 'Products')}}
            {include file='ModalHeader.tpl'|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
            <form class="form-horizontal declareProductForm" method="POST" id="declareProductForm">
                <input type="hidden" name="leftSideModule" value="{$SELECTED_MODULE_NAME}"/>
                <div class="form-group">
                    <label class="control-label fieldLabel col-sm-5">
                        <span>{vtranslate('LBL_PRODUCT_NAME', 'Products')}</span>
                        &nbsp;
                        <span class="redColor">*</span>
                    </label>
                    <div class="controls col-sm-6">
                        <input type="text" name="product_name" class="form-control" data-rule-required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label fieldLabel col-sm-5">
                        <span>{vtranslate('LBL_SERIAL_NO', 'Products')}</span>
                        &nbsp;
                        <span class="redColor">*</span>
                    </label>
                    <div class="controls col-sm-6">
                        <input type="text" name="serial_no" class="form-control" data-rule-required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label fieldLabel col-sm-5">
                        <span>{vtranslate('LBL_WARRANTY_START_DATE', 'Products')}</span>
                        &nbsp;
                        <span class="redColor">*</span>
                    </label>
                    <div class="controls col-sm-6">
                        <div class="input-group inputElement">
                            <input type="text" name="warranty_start_date"
                                   data-fieldtype="date"
                                   data-date-format="{$USER_MODEL->get('date_format')}"
                                   class="form-control datePicker"
                                   autocomplete="off"
                                   data-rule-required="true"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label fieldLabel col-sm-5">
                        <span>{vtranslate('LBL_WARRANTY_END_DATE', 'Products')}</span>
                        <span class="redColor">*</span>
                    </label>
                    <div class="controls col-sm-6">
                        <div class="input-group inputElement">
                            <input type="text" name="warranty_end_date"
                                   data-fieldtype="date"
                                   data-date-format="{$USER_MODEL->get('date_format')}"
                                   class="form-control datePicker"
                                   autocomplete="off"
                                   data-rule-required="true"/>
                        </div>
                    </div>
                </div>
                {include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
            </form>
        </div>
    </div>
{/strip}