{strip}
    {* Added by Hieu Nguyen on 2019-10-22 to expose config into JS *}
    {assign var='VALIDATION_CONFIG' value=getGlobalVariable('validationConfig') scope='global'}

    <script>
        var _VALIDATION_CONFIG = {json_encode($VALIDATION_CONFIG)};
    </script>
    {* End Hieu Nguyen *}

    {* Added by Hieu Nguyen on 2020-02-24 to expose user calendar settings into JS *}
    {assign var='CALENDAR_USER_SETTINGS' value=Calendar_Settings_Model::getUserSettings() scope='global'}

    <script>
        var _CALENDAR_USER_SETTINGS = {json_encode($CALENDAR_USER_SETTINGS)};
    </script>
    {* End Hieu Nguyen *}

    {* Added by Phu Vo on 2019-04-03 *}
    {* moment helper *}
    <script type="text/javascript" src="{vresource_url('resources/libraries/Moment/MomentHelper.js')}"></script>
    {* End Phu Vo *}
    
    <script src="{vresource_url('resources/Numeric.js')}" async defer></script>
    <script src="{vresource_url('resources/libraries/jQuery/CursorPosition.js')}" async defer></script>
    <script src="{vresource_url('resources/libraries/jQuery/jquery.cookie.js')}" async defer></script>
    <script src="{vresource_url('resources/StringUtils.js')}" async defer></script>
    <script src="{vresource_url('resources/CustomPopover.js')}"></script> {* Added by Phu Vo on 2019.06.25 *}

    {* Added by Phu Vo on 2019.08.26 to add swipebox libraries *}
    <link type="text/css" rel="stylesheet" href="{vresource_url('resources/libraries/SwipeBox/swipebox.css')}">
    <script src="{vresource_url('resources/libraries/SwipeBox/jquery.swipebox.min.js')}"></script>
    <script src="{vresource_url('resources/libraries/SwipeBox/swipe.init.js')}"></script>
    {* End swipebox libraries *}

    {* Added by Phu Vo on 2020.01.06 *}
    <link type="text/css" rel="stylesheet" href="{vresource_url('resources/libraries/DataTables/css/dataTables.bootstrap4.min.css')}" />
    <script src="{vresource_url('resources/libraries/DataTables/js/jquery.dataTables.min.js')}"></script>
    <script src="{vresource_url('resources/libraries/DataTables/js/dataTables.bootstrap4.min.js')}"></script>
    {* End Phu Vo *}

    <script src="{vresource_url('resources/CustomOwnerField.js')}"></script> {* Moved by Phu Vo on 2019.09.19*}

    {* Added by Hieu Nguyen on 2018-08-30 *}
    <script>var googleApiKey = '{getGlobalVariable('googleApiKey')}';</script>
    <script src="https://maps.googleapis.com/maps/api/js?key={getGlobalVariable('googleApiKey')}&libraries=places"></script>
    <script src="{vresource_url('resources/GoogleMaps.js')}"></script>
    {* End Hieu Nguyen *}

    {* Added by Hieu Nguyen on 2018-10-03 *}
    <script>
        var _CURRENT_USER_META;

        {if $CURRENT_USER_MODEL}
            {assign var='USER_IMAGE' value=$CURRENT_USER_MODEL->getImageDetails()}

            _CURRENT_USER_META = { 
                'id': '{$CURRENT_USER_MODEL->get('id')}',
                'name': '{getFullNameFromArray('Users', $CURRENT_USER_MODEL->getData())}',
                'avatar' : '{if $USER_IMAGE[0]}{$USER_IMAGE[0]['path']}_{$USER_IMAGE[0]['name']}{/if}',
                'ext_number' : '{$CURRENT_USER_MODEL->get('phone_crm_extension')}',
            };
        {/if}
    </script>

    <script src="{vresource_url('resources/NotificationHelper.js')}"></script>

    {assign var='CALL_CENTER_CONFIG' value=getGlobalVariable('callCenterConfig') scope='global'}
    {* End Hieu Nguyen *}

    {* Added by Hieu Nguyen on 2019-07-16 *}
    {assign var="FB_ENABLED" value=CPSocialIntegration_Config_Helper::isFbEnabled()}
    {assign var="ZALO_ENABLED" value=CPSocialIntegration_Config_Helper::isZaloEnabled()}

    {if $FB_ENABLED eq true || $ZALO_ENABLED eq true}
        <script src="{vresource_url('resources/SocialHandler.js')}" async defer></script>
    {/if}
    {* End Hieu Nguyen *}

    {* Added by Hieu Nguyen on 2018-10-26 *}
    {assign var='VOICE_COMMAND_CONFIG' value=getGlobalVariable('voiceCommandConfig')}
    {assign var='VOICE_COMMAND_PROXY_SERVER_PROTOCOL' value="{if $VOICE_COMMAND_CONFIG.proxy_server_ssl}https{else}http{/if}"}
    {assign var='VOICE_COMMAND_PROXY_SERVER_URL' value="{$VOICE_COMMAND_PROXY_SERVER_PROTOCOL}://{$VOICE_COMMAND_CONFIG.proxy_server_name}:{$VOICE_COMMAND_CONFIG.proxy_server_port}"}

    {if $VOICE_COMMAND_CONFIG.enable eq true}
        <script>var _VOICE_COMMAND_PROXY_SERVER_URL = '{$VOICE_COMMAND_PROXY_SERVER_URL}';</script>

        <script src="{vresource_url('resources/libraries/SocketIO/socket.io.js')}"></script>
        <script src="{vresource_url('resources/VoiceCommand.js')}" async defer></script>
    {/if}
    {* End Hieu Nguyen *}

    {* Added by Hieu Nguyen on 2019-12-31 to load Google Chart *}
    <script type="text/javascript" src="{vresource_url("resources/libraries/GoogleChart/loader.js")}"></script>
    {* End Hieu Nguyen *}
{/strip}