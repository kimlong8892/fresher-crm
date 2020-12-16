{* Added by Hieu Nguyen on 2019-10-09 *}
{strip}
    {if in_array($SELECTED_MODULE_NAME, ['PriceBooks'])}
        <br />{vtranslate('LBL_POPUP_AND_RELATION_LIST_LAYOUT_UNSUPPORTED_MODULE_HINT', $QUALIFIED_MODULE)}
    {else}
        <script type="text/javascript" src="{vresource_url('layouts/v7/modules/Settings/LayoutEditor/resources/PopupAndRelationListEditor.js')}"></script>
        <script type="text/javascript">
            var moduleFields = {ZEND_JSON::encode($SELECT2_MODULE_FIELDS)};
        </script>

        <form id="popupAndRelationListLayoutForm" class="form-horizontal">
            <div id="actions" class="row" style="padding: 10px 20px">
                <button type="button" class="btn btn-primary btnSaveLayout">
                    <i class="fa fa-save"></i>&nbsp; {vtranslate('LBL_SAVE_LAYOUT', $QUALIFIED_MODULE)}
                </button>
            </div>

            <br />

            <div class="row">
                <div class="col-sm-3">
                    <strong>{vtranslate('LBL_POPUP_AND_RELATION_LIST_LAYOUT_POPUP_LAYOUT', $QUALIFIED_MODULE)}</strong>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="popup_layout" style="width: 100%" data-rule-required="true" data-rule-minlength="5" {if $SELECT2_SELECTED_POPUP_FIELDS} data-selected-tags='{ZEND_JSON::encode($SELECT2_SELECTED_POPUP_FIELDS)}' {/if}>
                </div>
            </div>

            <br />

            <div class="row">
                <div class="col-sm-3">
                    <strong>{vtranslate('LBL_POPUP_AND_RELATION_LIST_LAYOUT_RELATION_LIST_LAYOUT', $QUALIFIED_MODULE)}</strong>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="relation_list_layout" style="width: 100%" data-rule-required="true" data-rule-minlength="5" {if $SELECT2_SELECTED_RELATION_LIST_FIELDS} data-selected-tags='{ZEND_JSON::encode($SELECT2_SELECTED_RELATION_LIST_FIELDS)}' {/if}>
                </div>
            </div>
        </form>
    {/if}
{/strip}
{* End Hieu Nguyen *}