<?php

class Accounts_Data_Helper {
    static function getPersonalAccountId() {
        global $adb;

        $sql = "SELECT accountid
            FROM vtiger_account AS a
            INNER JOIN vtiger_crmentity AS e ON (e.crmid = a.accountid AND e.deleted = 0)
            WHERE account_no = ?";

        return $adb->getOne($sql, ['PACC']);
    }

    static function getPersonalAccount() {
        return Vtiger_Record_Model::getInstanceByConditions('Accounts', ['account_no' => 'PACC']);
    }
}