{strip}
    <div id="checkWarranty">
        <h4>{vtranslate('LBL_CHECK_WARRANTY_TITLE', 'Products')}</h4>

        <form id="checkWarrantyForm" method="post" action="">
            <input type="text"
                   name="serial"
                   value="{$smarty.post.seral}"
                   placeholder="{vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER')}">
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
                    <td>
                        <span class="label" id="warrantyStatus"></span>
                        <input type="hidden" name="product_id" id="product_id">
                        <button id="btn-warranty-extend" type="button" style="display: none;">{vtranslate(LBL_WARRANTY_BTN_EXTEND, 'Products')}</button>
                    </td>
                </tr>
            </table>
        </div>

        <div id="declareProductModal" class="modal-dialog modal-content hide">
            {assign var=HEADER_TITLE value={vtranslate('LBL_DECLARE_PRODUCT_MODAL_TITLE', 'Products')}}
            {include file='ModalHeader.tpl'|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}
            <form class="form-horizontal declareProductForm" method="POST">
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
                        <input type="text" name="warranty_start_date" class="form-control" data-rule-required="true"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label fieldLabel col-sm-5">
                        <span>{vtranslate('LBL_WARRANTY_END_DATE', 'Products')}</span>
                        &nbsp;
                        <span class="redColor">*</span>
                    </label>
                    <div class="controls col-sm-6">
                        <input type="text" name="warranty_end_date" class="form-control" data-rule-required="true"/>
                    </div>
                </div>
                {include file='ModalFooter.tpl'|@vtemplate_path:'Vtiger'}
            </form>
        </div>
    </div>
{/strip}