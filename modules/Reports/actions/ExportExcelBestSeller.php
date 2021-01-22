<?php
require_once('libraries/PHPExcel/PHPExcel.php');

class Reports_ExportExcelBestSeller_Action extends Vtiger_Action_Controller {
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
        $excel = new PHPExcel();
        $excel->setActiveSheetIndex(0);
        // get data
        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');
        $startDate = new DateTimeField($startDate);
        $endDate = new DateTimeField($endDate);
        $data = Products_Record_Model::getReportBestSellers($startDate->getDBInsertDateValue(), $endDate->getDBInsertDateValue());
        // set value for cell
        $excel->getActiveSheet()->setCellValue('A1', vtranslate('LBL_PRODUCT_CATEGORY_NAME', 'Reports'));
        $excel->getActiveSheet()->setCellValue('B1', vtranslate('LBL_TOTAL_AMOUNT_NAME', 'Reports'));
        $excel->getActiveSheet()->setCellValue('C1', vtranslate('LBL_TOTAL_MONEY_NAME', 'Reports'));
        $index = 2;
        foreach($data as $item){
            $excel->getActiveSheet()->setCellValue('A'.$index, $item['productcategory']);
            $excel->getActiveSheet()->setCellValue('B'.$index, $item['total_quantity']);
            $excel->getActiveSheet()->setCellValue('C'.$index, $item['total_money']);
            ++$index;
        }
        // end set value for cell

        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="Bestsellers.xls"');
        return PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
    }
}