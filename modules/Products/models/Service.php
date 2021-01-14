<?php
    
    
class Products_Service_Model {
    static function SendMsgWarrantyStatus() {
        global $adb;
        $db = PearDatabase::getInstance();
        $sql = "SELECT p.*, e.*
            FROM vtiger_products as p
            INNER JOIN vtiger_crmentity AS e ON (e.crmid = p.productid AND e.deleted = 0)";
        $result = $db->pquery($sql, []);
        while ($row = $adb->fetchByAssoc($result)) {
            $warrantyStatus = (strtotime($row['expiry_date']) > strtotime(date('Y-m-d'))) ? true : false;
            $strStatus = "";
            if($warrantyStatus){
                $strStatus = vtranslate('LBL_WARRANT_VALID', 'Products');
            } else {
                $strStatus = vtranslate('LBL_WARRANT_ENDED', 'Products');
            }
            $sqlUpdate = "UPDATE vtiger_products set status_warranty = ? WHERE productid = ?";
            $db->pquery($sqlUpdate, [$strStatus, $row['productid']]);
        }
    }
}