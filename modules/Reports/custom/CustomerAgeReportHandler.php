<?php
require_once('modules/Reports/custom/CustomReportHandler.php');
    
class CustomerAgeReportHandler extends CustomReportHandler{
    function prepare(){
        // Fetch column list
        $this->getQueryColumnsList($this->reportid, 'HTML');
        // Add custom column in into the query
        $this->_columnslist = array_insert_before(
            'vtiger_crmentity:crmid:LBL_ACTION:crmid:I',
            $this->_columnslist,
            'contacts_age',
            "YEAR(NOW()) - YEAR(vtiger_contactsubdetails.birthday) AS Contacts_LBL_AGE"
        );
    }
    
    function renderReportResult($filterSql, $showReportName = false, $print = false){
        $processor = function(&$rowViewer, &$result, $row) {
            $rowViewer->assign('ROW_DATA', $row);
            $result .= $rowViewer->fetch('modules/Reports/tpls/CustomReportRowTemplate.tpl');
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
    
        $reportResult = $mainViewer->fetch('modules/Reports/tpls/CustomReport.tpl');
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