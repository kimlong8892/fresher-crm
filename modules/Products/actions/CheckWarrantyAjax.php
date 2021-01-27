<?php

class Products_CheckWarrantyAjax_Action extends Vtiger_Action_Controller {
    public function checkPermission(Vtiger_Request $request) {
        $moduleName = $request->getModule();
        $moduleModel = Vtiger_Module_Model::getInstance($moduleName);
        $currentUserPriviligesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();

        // Write your own logic to check for access permission
        $allowAccess = $currentUserPriviligesModel->hasModulePermission($moduleModel->getId());

        if (!$allowAccess) {
            throw new AppException(vtranslate($moduleName, $moduleName) . ' ' . vtranslate('LBL_NOT_ACCESSIBLE'));
        }
    }

    public function process(Vtiger_Request $request) {
        $matchedProduct = Products_Record_Model::getInstanceBySerial($request->get('serial'));
        $productInfo = $matchedProduct->getData();

        // Populate additional info
        if ($productInfo) {
            $warrantyStatus = (strtotime($productInfo['expiry_date']) > strtotime(date('Y-m-d'))) ? 'valid' : 'ended';
            $warrantyStatusLabelKey = $warrantyStatus == 'valid' ? 'LBL_WARRANTY_STATUS_VALID' : 'LBL_WARRANTY_STATUS_ENDED';

            $productInfo['warranty_status'] = $warrantyStatus;
            $productInfo['warranty_status_label'] = vtranslate($warrantyStatusLabelKey, 'Products');
            $productInfo['productname'] = html_entity_decode($productInfo['productname']);
            $productInfo['start_date'] = date("d-m-Y", strtotime($productInfo['start_date']));
            $productInfo['expiry_date'] = date("d-m-Y", strtotime($productInfo['expiry_date']));
        }
        
        // response
        $result = array('matched_product' => $productInfo);
        $response = new Vtiger_Response();
        $response->setResult($result);
        $response->emit();
    }
}