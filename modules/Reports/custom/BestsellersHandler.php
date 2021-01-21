<?php
require_once('modules/Reports/custom/CustomReportHandler.php');

class BestsellersHandler extends CustomReportHandler {
    function prepare() {
        // Fetch column list
        $this->getQueryColumnsList($this->reportid, 'HTML');
        $this->_columnslist = array_insert_before(
            'vtiger_crmentity:crmid:LBL_ACTION:crmid:I',
            $this->_columnslist,
            'margin',
            "SUM(vtiger_inventoryproductreltmpSalesOrder.margin) AS Sales_Order_margin"
        );
    }

    function renderReportResult($filterSql, $showReportName = true, $print = false){
        var_dump($this);
        die;
        $processor = function(&$rowViewer, &$result, $row) {
            $rowViewer->assign('ROW_DATA', $row);
            $result .= $rowViewer->fetch('modules/Reports/tpls/CustomReportRowTemplateBestsellers.tpl');
        };
        // Init viewer for main report
        $mainViewer = new Vtiger_Viewer();
        if($showReportName) {
            $mainViewer->assign('REPORT_NAME', $this->reportname);
        }
        $reportHeader = $this->getReportHeaders();
        $reportHeader[1] = vtranslate('LBL_TOTAL_AMOUNT', 'SalesOrder');
        $reportHeader[2] = vtranslate('LBL_TOTAL_MONEY', 'SalesOrder');
        unset($reportHeader[3]);
        $mainViewer->assign('REPORT_HEADERS', $reportHeader);
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