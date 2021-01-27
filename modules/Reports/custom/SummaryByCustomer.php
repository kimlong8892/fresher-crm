<?php
require_once('modules/Reports/custom/CustomReportHandler.php');
require_once('include/fields/DateTimeField.php');

class SummaryByCustomer extends CustomReportHandler {
    function prepare() {
        // Fetch column list
        $this->getQueryColumnsList($this->reportid, 'HTML');
    }


    function renderReportResult($filterSql, $showReportName = false, $print = false){
        $mainViewer = new Vtiger_Viewer();
        $user = Users::getActiveAdminUser();
        $mainViewer->assign('DATE_FORMAT', $user->date_format);

        if ($showReportName) {
            $mainViewer->assign('REPORT_NAME', $this->reportname);
        }
        $result = "";
        if (isset($_REQUEST['btn-report'])) {
            // set default start date
            $startDate = Accounts_Record_Model::getCreatedFirst();
            $startDate = new DateTimeField($startDate);
            $startDate = $startDate->getDisplayDate();

            if (!empty($_REQUEST['start_date'])) {
                $startDate = $_REQUEST['start_date'];
            }

            // set default end date
            $endDate = new DateTimeField(date("Y-m-d"));
            $endDate = $endDate->getDisplayDate();

            if (!empty($_REQUEST['end_date'])) {
                $endDate = $_REQUEST['end_date'];
            }

            $mainViewer->assign('START_DATE', $startDate);
            $mainViewer->assign('END_DATE', $endDate);
            $startDate = new DateTimeField($startDate);
            $endDate = new DateTimeField($endDate);
            $startDateValue = $startDate->getDBInsertDateValue();
            $endDateValue = $endDate->getDBInsertDateValue();

            // query data
            $Accounts = Accounts_Record_Model::getReportSumaryAccount($startDateValue, $endDateValue);
            $isEmpty = true;
            if (count($Accounts) != 0) {
                foreach ($Accounts as $item) {
                    $rowViewer = new Vtiger_Viewer();
                    $listProductByAccount = $item['products'];
                    unset($item['id']);
                    unset($item['products']);

                    if (count($listProductByAccount) != 0) {
                        unset($item['accountid']);
                        $rowViewer->assign('ROW_DATA', $item);
                        $rowViewer->assign('LIST_PRODUCT', $listProductByAccount);
                        $result .= $rowViewer->fetch('modules/Reports/tpls/CustomReportRowTemplateSummaryByCustomer.tpl');
                        $isEmpty = false;
                    }

                }
            }
            if ($isEmpty) {
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