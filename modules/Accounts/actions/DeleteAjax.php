<?php

/**
 * Account DeleteAjax Action
 * Author: Phu Vo
 * Date: 2019.09.16
 */

class Accounts_DeleteAjax_Action extends Vtiger_DeleteAjax_Action {

    public function checkPermission(Vtiger_Request $request) {
        // Prevent Delete Personal Account
        if (Accounts_Record_Model::isPersonalAccount($request->get('record'))) {
            throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
        }

        parent::checkPermission($request);
    }
}