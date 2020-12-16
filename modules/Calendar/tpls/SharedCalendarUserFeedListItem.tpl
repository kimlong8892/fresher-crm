{* Added by Hieu Nguyen on 2019-10-30 to render a single user feed item *}

{strip}
    {assign var=USER_ID value=$USER_FEED_INFO['id']}
    {assign var=USER_NAME value=$USER_FEED_INFO['name']}

    {if $USER_ID == $CURRENT_USER->id}
        {assign var=USER_NAME value={vtranslate('LBL_MINE', $MODULE)}}
    {/if}

    <li class="activitytype-indicator calendar-feed-indicator {if $IS_TEMPLATE}feed-indicator-template{/if}" style="background-color: {$USER_FEED_INFO['color']}">
        <span class="userName textOverflowEllipsis" title="{$USER_NAME}">{$USER_NAME}</span>
        <span class="activitytype-actions pull-right">
            <input type="checkbox" {if $USER_FEED_INFO['visible'] == '1'}checked{/if} class="toggleCalendarFeed cursorPointer" data-calendar-sourcekey="Events_{$USER_ID}" 
                data-calendar-feed="Events" data-calendar-feed-color="{$USER_FEED_INFO['color']}" data-calendar-fieldlabel="{$USER_NAME}" 
                data-calendar-userid="{$USER_ID}" data-calendar-group="false" data-calendar-feed-textcolor="white" 
            />&nbsp;&nbsp;
            <i class="fa fa-pencil editCalendarFeedColor cursorPointer"></i>&nbsp;&nbsp;

            {if $USER_ID != $CURRENT_USER->id}
                <i class="fa fa-trash deleteCalendarFeed cursorPointer"></i>
            {/if}
        </span>
    </li>
{/strip}