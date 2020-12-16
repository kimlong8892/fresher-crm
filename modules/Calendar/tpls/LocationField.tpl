{* Added by Hieu Nguyen on 2019-10-29 to customize location field *}

{strip}
    {if $RECORD->get('location') != ''}
        <span title="{vtranslate('LBL_SHOW_MAP')}">
            <i class="fa fa-map-marker"></i>&nbsp;
            <a href="#" onclick="GoogleMaps.showMaps('{$RECORD->get('location')}')">{$RECORD->get('location')}</a>
        </span>
    {/if}
{/strip}