<?php


class SummaryByCustomer {
    function prepare() {
        // Fetch column list
        $this->getQueryColumnsList($this->reportid, 'HTML');
    }


    function renderReportResult($filterSql, $showReportName = true, $print = false){
        $mainViewer = new Vtiger_Viewer();
        if($showReportName) {
            $mainViewer->assign('REPORT_NAME', $this->reportname);
        }
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