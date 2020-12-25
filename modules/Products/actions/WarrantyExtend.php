<?php

class Products_WarrantyExtend_Action extends Vtiger_Action_Controller
{
    public function checkPermission(Vtiger_Request $request)
    {
        $moduleName = $request->getModule();
        $moduleModel = Vtiger_Module_Model::getInstance($moduleName);
        $currentUserPriviligesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();

        // Write your own logic to check for access permission
        $allowAccess = $currentUserPriviligesModel->hasModulePermission($moduleModel->getId());

        if (!$allowAccess) {
            throw new AppException(vtranslate($moduleName, $moduleName) . ' ' . vtranslate('LBL_NOT_ACCESSIBLE'));
        }
    }

    public function process(Vtiger_Request $request)
    {
        $productId = $request->get('product_id');
        $dateExtend = $request->get('date_extend');
        $statusUpdate = Products_Record_Model::extendExpiryDateProduct($productId, $dateExtend);
        if($statusUpdate){
            return json_encode([
                'success' => true,
            ]);
        }
        return json_encode([
            'success' => false,
        ]);
    }
}