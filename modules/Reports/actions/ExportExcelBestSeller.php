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
        $startDate = Products_Record_Model::getCreatedFirst();
        $startDate = new DateTimeField($startDate);
        $startDate = $startDate->getDisplayDate();
        if($request->has('start_date')){
            $startDate = $request->get('start_date');;
        }
        $endDate = new DateTimeField(date("Y-m-d"));
        $endDate = $endDate->getDisplayDate();
        if($request->has('end_date')){
            $endDate = $request->get('end_date');
        }
        $startDate = new DateTimeField($startDate);
        $endDate = new DateTimeField($endDate);

        // get data for report
        $data = Products_Record_Model::getReportBestSellers($startDate->getDBInsertDateValue(), $endDate->getDBInsertDateValue());

        // set value for cell
        $excel->getActiveSheet()->setCellValue('A1', vtranslate('LBL_PRODUCT_CATEGORY_NAME', 'Reports'));
        $excel->getActiveSheet()->setCellValue('B1', vtranslate('LBL_TOTAL_AMOUNT_NAME', 'Reports'));
        $excel->getActiveSheet()->setCellValue('C1', vtranslate('LBL_TOTAL_MONEY_NAME', 'Reports'));
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
        $index = 2;
        foreach($data as $item){
            $excel->getActiveSheet()->setCellValue('A'.$index, $item['productcategory']);
            $excel->getActiveSheet()->setCellValue('B'.$index, $item['total_quantity']);
            $excel->getActiveSheet()->setCellValue('C'.$index, $item['total_money']);
            $excel->getActiveSheet()->getStyle('C'.$index)->getNumberFormat()->setFormatCode("0,00");
            ++$index;
        }
        // end set value for cell

        // output excel download
        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="Bestsellers.xls"');
        return PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
    }
}