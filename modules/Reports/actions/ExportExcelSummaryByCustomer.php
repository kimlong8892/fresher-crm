<?php
require_once('libraries/PHPExcel/PHPExcel.php');

class Reports_ExportExcelSummaryByCustomer_Action extends Vtiger_Action_Controller {
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
        $startDate = Accounts_Record_Model::getCreatedFirst();
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
        $startDateValue = $startDate->getDBInsertDateValue();
        $endDateValue = $endDate->getDBInsertDateValue();
        $data = Accounts_Record_Model::getAllAccount($startDateValue, $endDateValue);

        // set value for cell
        $excel->getActiveSheet()->setCellValue('A1', vtranslate('LBL_SERIAL_NO', 'Products'));
        $excel->getActiveSheet()->setCellValue('B1', vtranslate('LBL_PRODUCT_NAME', 'Products'));
        $excel->getActiveSheet()->setCellValue('C1', vtranslate('LBL_DATE_SELL', 'Products'));
        $excel->getActiveSheet()->setCellValue('D1', vtranslate('LBL_MONEY_SELL', 'Products'));
        $index = 2;
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(40);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(80);
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
        foreach($data as $item){
            $listProductByAccount = Products_Record_Model::getProductInOrderByAccountId($item['accountid']);
            if(count($listProductByAccount) != 0){
                $excel->getActiveSheet()->mergeCells('A'.$index.':'.'D'.$index);
                $excel->getActiveSheet()->setCellValue('A'.$index, $item['accountname']);
                ++$index;
                foreach($listProductByAccount as $value){
                    $excel->getActiveSheet()->setCellValue('A'.$index, $value['serialno']);
                    $excel->getActiveSheet()->setCellValue('B'.$index, $value['productname']);
                    $excel->getActiveSheet()->setCellValue('C'.$index, $value['createdtime']);
                    $excel->getActiveSheet()->setCellValue('D'.$index, $value['unit_price']);
                    $excel->getActiveSheet()->getStyle('D'.$index)->getNumberFormat()->setFormatCode("0,00");
                    ++$index;
                }
            }
        }
        // end set value for cell

        // output excel download
        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="summary_by_customer.xls"');
        return PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
    }
}