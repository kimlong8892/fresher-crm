<?php
require_once('modules/Reports/custom/CustomReportHandler.php');

class BestsellersHandler extends CustomReportHandler{
    function prepare(){
        parent::prepare();
    }

    function renderReportResult($filterSql, $showReportName = false, $print = false){
        $processor = function(&$rowViewer, &$result, $row) {
            $rowViewer->assign('ROW_DATA', $row);
            $result .= $rowViewer->fetch('modules/Reports/tpls/CustomReportRowTemplateBestsellers.tpl');
        };
        // Init viewer for main report
        $mainViewer = new Vtiger_Viewer();
        if($showReportName) {
            $mainViewer->assign('REPORT_NAME', $this->reportname);
        }
        $mainViewer->assign('REPORT_HEADERS', $this->getReportHeaders());
        $mainViewer->assign('REPORT_RESULT', $this->getReportResult($processor, $filterSql, false, $print));
        $mainViewer->assign('PRIMARY_MODULE', $this->primarymodule);
        $mainViewer->assign('PRINT', $print);

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