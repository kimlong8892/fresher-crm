{* Added by Hieu Nguyen on 2018-08-07 *}
{strip}
    <form id="translationEditorForm" class="form-horizontal">
        <div id="actions" class="row" style="padding: 10px 20px">
            <button type="button" class="btn btn-primary btnSaveTranslation" data-lang="all">
                <i class="fa fa-save"></i>&nbsp; {vtranslate('LBL_TRANSLATION_EDITOR_SAVE_ALL', $QUALIFIED_MODULE)}
            </button>
            &nbsp;
            <button type="button" class="btn btn-primary btnSaveTranslation" data-lang="en_us">
                <i class="fa fa-save"></i>&nbsp; {vtranslate('LBL_TRANSLATION_EDITOR_SAVE_ENGLISH', $QUALIFIED_MODULE)}
            </button>
            &nbsp;
            <button type="button" class="btn btn-primary btnSaveTranslation" data-lang="vn_vn">
                <i class="fa fa-save"></i>&nbsp; {vtranslate('LBL_TRANSLATION_EDITOR_SAVE_VIETNAMESE', $QUALIFIED_MODULE)}
            </button>
        </div>

        <div class="row" style="padding: 10px">
            <div class="col-sm-4">
                <strong>{vtranslate('LBL_TRANSLATION_EDITOR_LABEL_KEY', $QUALIFIED_MODULE)}</strong>
            </div>
            <div class="col-sm-4">
                <strong>{vtranslate('LBL_TRANSLATION_EDITOR_ENGLISH', $QUALIFIED_MODULE)}</strong>
            </div>
            <div class="col-sm-4">
                <strong>{vtranslate('LBL_TRANSLATION_EDITOR_VIETNAMESE', $QUALIFIED_MODULE)}</strong>
            </div>
        </div>

        <div id="labelList" class="overflowVisible" style="max-height: 500px; overflow: scroll !important">
            {foreach key=LABEL_KEY item=LABEL_DISPLAY from=$UI_ENGLISH_STRINGS}
                <div class="row" style="padding: 2px">
                    <div class="col-sm-4">
                        <span>{$LABEL_KEY}</span>
                    </div>
                    <div class="col-sm-4">
                        <textarea name="labels[en_us][ui][{$LABEL_KEY}]" class="inputElement">{$LABEL_DISPLAY}</textarea>
                    </div>
                    <div class="col-sm-4">
                        <textarea name="labels[vn_vn][ui][{$LABEL_KEY}]" class="inputElement">{$UI_VIETNAMESE_STRINGS[$LABEL_KEY]}</textarea>
                    </div>
                </div>
            {/foreach}

            {foreach key=LABEL_KEY item=LABEL_DISPLAY from=$JS_ENGLISH_STRINGS}
                <div class="row" style="padding: 2px">
                    <div class="col-sm-4">
                        <span>{$LABEL_KEY}</span>
                    </div>
                    <div class="col-sm-4">
                        <textarea name="labels[en_us][js][{$LABEL_KEY}]" class="inputElement">{$LABEL_DISPLAY}</textarea>
                    </div>
                    <div class="col-sm-4">
                        <textarea name="labels[vn_vn][js][{$LABEL_KEY}]" class="inputElement">{$JS_VIETNAMESE_STRINGS[$LABEL_KEY]}</textarea>
                    </div>
                </div>
            {/foreach}
        </div>
    </form>
{/strip}
{* End Hieu Nguyen *}