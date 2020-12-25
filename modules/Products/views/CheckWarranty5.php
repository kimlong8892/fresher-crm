<?php

class Products_CheckWarranty5_View extends CustomView_Base_View
{

    public function __construct()
    {
        parent::__construct($isFullView = true);
    }

    function checkPermission(Vtiger_Request $request)
    {
        $moduleName = $request->getModule();
        // Write your own logic to check for access permission
        $allowAccess = true; // set this to false if user's role is not permission
        if (!$allowAccess) {
            throw new AppException(vtranslate($moduleName, $moduleName) . ' ' . vtranslate('LBL_NOT_ACCESSIBLE'));
        }
    }

    function process(Vtiger_Request $request)
    {
        $viewer = $this->getViewer($request);
        $viewer->display('modules/Products/tpls/CheckWarranty5.tpl');
    }
}