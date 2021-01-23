<?php
require_once('modules/Reports/custom/CustomReportHandler.php');

class BestsellersHandler extends CustomReportHandler{
    function prepare() {
        // Fetch column list
        $this->getQueryColumnsList($this->reportid, 'HTML');
    }

    function renderReportResult($filterSql, $showReportName = false, $print = false){
        $mainViewer = new Vtiger_Viewer();
        $user = Users::getActiveAdminUser();
        $mainViewer->assign('DATE_FORMAT', $user->date_format);
        if($showReportName) {
            $mainViewer->assign('REPORT_NAME', $this->reportname);
        }
        // check report after btn report click
        $result = "";
        if(isset($_REQUEST['btn-report'])){
            $startDate = Products_Record_Model::getCreatedFirst();
            $startDate = new DateTimeField($startDate);
            $startDate = $startDate->getDisplayDate();
            if(!empty($_REQUEST['start_date'])){
                $startDate = $_REQUEST['start_date'];
            }
            $endDate = new DateTimeField(date("Y-m-d"));
            $endDate = $endDate->getDisplayDate();
            if(!empty($_REQUEST['end_date'])){
                $endDate = $_REQUEST['end_date'];
            }
            $mainViewer->assign('START_DATE', $startDate);
            $mainViewer->assign('END_DATE', $endDate);
            $startDate = new DateTimeField($startDate);
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