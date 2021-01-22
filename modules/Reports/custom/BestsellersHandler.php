<?php
require_once('modules/Reports/custom/CustomReportHandler.php');

class BestsellersHandler extends CustomReportHandler {
    function prepare() {
        // Fetch column list
        $this->getQueryColumnsList($this->reportid, 'HTML');
        $this->_columnslist = array_insert_before(
            'vtiger_inventoryproductreltmpSalesOrder:total_quantity:SalesOrder_Total_Quantity:total_quantity:V',
            $this->_columnslist,
            'total_quantity',
            "sum(vtiger_inventoryproductreltmpSalesOrder.quantity) AS SalesOrder_Total_Quantity"
        );
    }

    function renderReportResult($filterSql, $showReportName = true, $print = false){
        $mainViewer = new Vtiger_Viewer();
        if($showReportName) {
            $mainViewer->assign('REPORT_NAME', $this->reportname);
        }
        // check report after btn report click
        $result = "";
        if(isset($_REQUEST['start_date']) || isset($_REQUEST['end_date'])){
            $startDate = $_REQUEST['start_date'];
            $startDate = new DateTimeField($startDate);
            $endDate = $_REQUEST['end_date'];
            $endDate = new DateTimeField($endDate);
            $data = Products_Record_Model::getReportBestSellers($startDate->getDBInsertDateValue(), $endDate->getDBInsertDateValue());
            if(count($data) != 0){
                foreach($data as $item){
                    $rowViewer = new Vtiger_Viewer();
                    $rowViewer->assign('ROW_DATA', $item);
                    $result .= $rowViewer->fetch('modules/Reports/tpls/CustomReportRowTemplateBestsellers.tpl');
                }
            } else {
                $mainViewer->assign('IS_EMPTY_REPORT_RESULT', true);
            }
        }
        $mainViewer->assign('REPORT_RESULT', $result);
        $reportResult = $mainViewer->fetch('modules/Reports/tpls/CustomReportBestsellers.tpl');

        return $reportResult;
    }

    function writeReportToCSVFile($tempFileName, $advanceFilterSql){
        $this->prepare();
        parent::writeReportToCSVFile($tempFileName, $advanceFilterSql);
    }

    function writeReportToExcelFile($tempFileName, $advanceFilterSql){
        $this->prepare();
        parent::writeReportToExcelFile($tempFileName, $advanceFilterSql);
    }
}