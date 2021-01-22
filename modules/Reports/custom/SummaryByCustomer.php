<?php
require_once('modules/Reports/custom/CustomReportHandler.php');

class SummaryByCustomer extends CustomReportHandler{
    function prepare() {
        // Fetch column list
        $this->getQueryColumnsList($this->reportid, 'HTML');
    }


    function renderReportResult($filterSql, $showReportName = false, $print = false){
        $mainViewer = new Vtiger_Viewer();
        if($showReportName) {
            $mainViewer->assign('REPORT_NAME', $this->reportname);
        }
        $result = "";
        if(isset($_REQUEST['start_date']) || isset($_REQUEST['end_date'])){
            $startDate = $_REQUEST['start_date'];
            $endDate = $_REQUEST['end_date'];
            $mainViewer->assign('START_DATE', $startDate);
            $mainViewer->assign('END_DATE', $endDate);
            $startDate = new DateTimeField($startDate);
            $endDate = new DateTimeField($endDate);
            $Accounts = Accounts_Record_Model::getAllAccount();
            $startDateValue = $startDate->getDBInsertDateValue();
            $endDateValue = $endDate->getDBInsertDateValue();
            if(count($Accounts) != 0){
                foreach($Accounts as $item){
                    $rowViewer = new Vtiger_Viewer();
                    $listProductByAccount = Products_Record_Model::getProductInOrderByAccountId($item['accountid'], $startDateValue, $endDateValue);
                    if(count($listProductByAccount) != 0){
                        unset($item['accountid']);
                        $rowViewer->assign('ROW_DATA', $item);
                        $rowViewer->assign('LIST_PRODUCT', $listProductByAccount);
                        $result .= $rowViewer->fetch('modules/Reports/tpls/CustomReportRowTemplateSummaryByCustomer.tpl');
                    }
                }
            } else {
                $mainViewer->assign('IS_EMPTY_REPORT_RESULT', true);
            }
        }
        $mainViewer->assign('REPORT_RESULT', $result);

        $reportResult = $mainViewer->fetch('modules/Reports/tpls/CustomReportSummaryByCustomer.tpl');

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