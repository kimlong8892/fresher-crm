<?php

class Products_DeclareAjax_Action extends Vtiger_Action_Controller
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
        if ($request->isAjax()) {
            // Handle request
            $productName = $request->get('product_name');
            $serialNo = $request->get('serial_no');
            $warrantyStartDate = $request->get('warranty_start_date');
            $warrantyEndDate = $request->get('warranty_end_date');
            $productId = Products_Record_Model::declareProduct($productName, $serialNo, $warrantyStartDate, $warrantyEndDate);

            // Respond
            $result = array('success' => $productId ? true : false);
            $response = new Vtiger_Response();
            $response->setResult($result);
            $response->emit();
        }
    }
}