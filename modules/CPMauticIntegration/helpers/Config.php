<?php

/*
	Config.php
	Author: Phuc Lu
	Date: 2020.02.24
	Purpose: to provide util functions for mautic integration config
*/

require_once 'include/utils/MauticUtils.php';

class CPMauticIntegration_Config_Helper {
    
    static function loadConfig() {
        // Load config from db
        $currentConfig = Settings_Vtiger_Config_Model::loadConfig('mautic_integration_config');
        
        if(empty($currentConfig)) {
            $currentConfig = array(
                'api_url' => '',
                'username' => '',
                'password' => '',
                'batch_limit' => '500'
            );
        }
        else {
            $currentConfig = json_decode(html_entity_decode($currentConfig), true);

            // Set default 500 for batch limit
            if(!isset($currentConfig['batch_limit']) || empty($currentConfig['batch_limit'])){
                $currentConfig['batch_limit'] = 500;
            }
        }
        
        return $currentConfig;
	}
	
	static function hasConfig($module = ''){
        if (isForbiddenFeature('MauticIntegration'))
            return false;

		$config = self::loadConfig();

		if (empty($config['api_url']) || empty($config['username']) || empty($config['password'])) {
			return false;
		}

        if (!empty($module)) {
            return self::isActiveModule($module);
        }

		return true;
    }

    static function isActiveModule($module) {
        if (isForbiddenFeature('MauticIntegration'))
            return false;

        $config = self::loadConfig();

        if (!isset($config['mapping_fields']))
            return false;

        if (!is_array($module)) {
            $modules = [$module];
        }

        foreach($modules as $module) {
            $lowerModule = strtolower($module);
            
            if (empty($config['mapping_fields'][$lowerModule]) || count($config['mapping_fields'][$lowerModule]) == 0)
                return false;
        }
        
        return true;
    }

    static function isDeletable() {
        $config = self::loadConfig();

        if (!isset($config['delete_contact_on_mautic_when_delete_on_crm']) || $config['delete_contact_on_mautic_when_delete_on_crm'] == 1) {
            return true;
        }
        
        return false;
    }

    static function checkConnection() {
        if (!self::hasConfig()) 
            return false;
        
        $userInstance = MauticUtils::getApiInstance('users');
        
        try {
            $users = $userInstance->getSelf();

            if (isset($users['errors'])) {
                return false;
            }

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    static function getSyncedFieldSMapping($module, $fromScheduler = false) {
        $config = self::loadConfig();
        $module = strtolower($module);

        if (!isset($config['mapping_fields']) || !isset($config['mapping_fields'][$module])) {

            if ($fromScheduler) {
                $config = CPMauticIntegration_Data_Helper::getContactMappingRequiredFields();
                return $config[$module];
            }

            return false;
        }

        return $config['mapping_fields'][$module];
    }
}