<?php

class Products_CheckWarranty_View extends CustomView_Base_View {
    public function __construct() {
        parent::__construct($isFullView = true);
    }

    public function checkPermission(Vtiger_Request $request) {
        $moduleName = $request->getModule();
        // Write your own logic to check for access permission
        $allowAccess = true; // set this to false if user's role is not permission
        if (!$allowAccess) {
            throw new AppException(vtranslate($moduleName, $moduleName) . ' ' . vtranslate('LBL_NOT_ACCESSIBLE'));
        }
    }

    public function process(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);

        if (!empty($_POST)) {
            $matchedProduct = Products_Record_Model::getInstanceBySerial($request->get('serial'));
            $viewer->assign('RESULT', $this->renderResult($matchedProduct));
        }

        $viewer->display('modules/Products/tpls/CheckWarranty.tpl');
    }

    public function renderResult($matchedProduct) {
        if ($matchedProduct == null || $matchedProduct->get('productid') == '') {
            return vtranslate('LBL_WARRANTY_SERIAL_NOT_FOUND', 'Products');
        }

        $warrantyStatus = vtranslate('LBL_WARRANTY_STATUS_VALID', 'Products');
        $statusLabel = 'label-success';

        // Warranty is ended if the expiry date is passed
        if (strtotime($matchedProduct->get('expiry_date')) < strtotime(date('Y-m-d'))) {
            $warrantyStatus = vtranslate('LBL_WARRANTY_STATUS_ENDED', 'Products');
            $statusLabel = 'label-danger';
        }

        $viewer = new Vtiger_Viewer();
        $viewer->assign('PRODUCT_RECORD', $matchedProduct);
        $viewer->assign('WARRANTY_STATUS', $warrantyStatus);
        $viewer->assign('STATUS_LABEL', $statusLabel);
        $result = $viewer->fetch('modules/Products/tpls/CheckWarrantyResult.tpl');

        return $result;
    }
}