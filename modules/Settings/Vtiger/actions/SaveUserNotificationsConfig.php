<?php


class Settings_Vtiger_SaveUserNotificationsConfig_Action extends Settings_Vtiger_Basic_Action {
    function checkPermission(Vtiger_Request $request) {
        return true;
    }
    function validateRequest(Vtiger_Request $request) {
        $request->validateWriteAccess();
    }
    function process(Vtiger_Request $request) {
        global $current_user;
        $config = $request->get('config');
        if(empty($config)) {
            return;
        }

        Users_Preferences_Model::savePreferences($current_user->id, 'notification_config', $config);

        // Respond
        $result = array('success' => true);
        $response = new Vtiger_Response();
        $response->setResult($result);
        $response->emit();
    }
}