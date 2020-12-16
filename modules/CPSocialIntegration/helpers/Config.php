<?php

/*
	Config_Helper
	Author: Hieu Nguyen
	Date: 2019-07-17
	Purpose: to provide util functions for social integration config
*/

class CPSocialIntegration_Config_Helper {

	static function getConfig() {
        $config = Settings_Vtiger_Config_Model::loadConfig('social_config', true);
        return $config;
    }

    static function isFbEnabled() {
        if (isForbiddenFeature('FacebookIntegration')) return false; // Prevent using Facebook features if this feature is not available in current CRM package

        $config = self::getConfig();
        if (empty($config)) return false;

        return $config['channels']['facebook']['enabled'];
    }

    static function isFbMessageAllowed() {
        global $current_user;
        $config = self::getConfig();
        if (empty($config)) return false;
        
        if (!empty($config['channels']) && !empty($config['channels']['zalo']) && $config['channels']['facebook']['enabled']) {
            if (!empty($config['permissions']) && !empty($config['permissions']['facebook']) && in_array($current_user->roleid, $config['permissions']['facebook']['message_allowed_roles'] ?? []) !== false) {
                return true;
            }
        }

        return false;
    }

    static function isZaloEnabled() {
        if (isForbiddenFeature('ZaloIntegration')) return false; // Prevent using Zalo features if this feature is not available in current CRM package
        
        $config = self::getConfig();
        if (empty($config)) return false;

        return $config['channels']['zalo']['enabled'];
    }

    static function isZaloMessageAllowed() {
        global $current_user;
        $config = self::getConfig();
        if (empty($config)) return false;
        
        if (!empty($config['channels']) && !empty($config['channels']['zalo']) && $config['channels']['zalo']['enabled']) {
            if (!empty($config['permissions']) && !empty($config['permissions']['zalo']) && in_array($current_user->roleid, $config['permissions']['zalo']['message_allowed_roles'] ?? []) !== false) {
                return true;
            }
        }

        return false;
    }

    static function isZaloBroadcastAllowed() {
        global $current_user;
        $config = self::getConfig();
        if (empty($config)) return false;
        
        if (!empty($config['channels']) && !empty($config['channels']['zalo']) && $config['channels']['zalo']['enabled']) {
            if (!empty($config['permissions']) && !empty($config['permissions']['zalo']) && in_array($current_user->roleid, $config['permissions']['zalo']['broadcast_allowed_roles'] ?? []) !== false) {
                return true;
            }
        }

        return false;
    }
}