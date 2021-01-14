<?php

class Products_TestUiComponent_View extends CustomView_Base_View
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

        // test date
        $admin = Users::getActiveAdminUser();
        $_POST['datetime'] = '22-08-2018 11:11';
        $inputDateTime = $_POST['datetime'];
        $dateTime = new DateTimeField($inputDateTime);
        $dateTime = $dateTime->getDBInsertDateValue($admin);

        $viewer->assign('dateTime', $dateTime);

        $viewer->display('modules/Products/tpls/TestUiComponent.tpl');
    }
}