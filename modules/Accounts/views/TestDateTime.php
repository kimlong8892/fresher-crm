<?php


class Accounts_TestDateTime_View extends Vtiger_View_Controller
{
    public function checkPermission(Vtiger_Request $request)
    {
        return true;
    }

    public function preProcess(Vtiger_Request $request, $display = true)
    {

    }

    public function process(Vtiger_Request $request)
    {
        /*
        require_once('libraries/PHPExcel/PHPExcel.php');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()
            ->setCreator("Temporaris")
            ->setLastModifiedBy("Temporaris")
            ->setTitle("Template Relevé des heures intérimaires")
            ->setSubject("Template excel")
            ->setDescription("Template excel permettant la création d'un ou plusieurs relevés d'heures")
            ->setKeywords("Template excel");
        $objPHPExcel->setActiveSheetIndex(0);
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', "12");
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', "13");
    
        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="excel.xls"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        die;
        */
        require_once('include/fields/DateTimeField.php');
        echo '<head><meta charset="UTF-8"></head>';
        $admin = Users::getActiveAdminUser(); // Lấy ra user admin (có id = 1) dùng cho ví dụ bên dưới


        echo '<br/>Định dạng ngày tháng của người dùng: ' . $admin->date_format;

        // Giả lập kết quả nhận được từ form
        $_POST['datetime'] = '22-08-2018 11:11';
        $inputDateTime = $_POST['datetime'];
        echo '<br/>Ngày giờ người dùng nhập: ' . $inputDateTime;
        // Tạo đối tượng dateTime chứa ngày giờ người dùng nhập
        $dateTime = new DateTimeField($inputDateTime);
        echo '<br/>Ngày để lưu vào db: ' . $dateTime->getDBInsertDateValue($admin); // Nếu không truyền user thì mặc định lấy$current_user
        echo '<br/>Giờ để lưu vào db: ' . $dateTime->getDBInsertTimeValue($admin); // Nếu không truyền user thì mặc định lấy$current_user

        // Giả lập kết quả lấy ra từ db
        $dbDateTime = '2018-08-22 04:11:00';
        echo '<br/>Ngày giờ để lấy từ db lên: ' . $dbDateTime;
        // Tạo đối tượng dateTime chứa ngày giờ lấy từ db
        $dateTime = new DateTimeField($dbDateTime);
        $displayDate = $dateTime->getDisplayDate($admin); // Nếu không truyền user thì mặc định lấy $current_user
        $displayTime = $dateTime->getDisplayTime($admin); // Nếu không truyền user thì mặc định lấy $current_user
        echo '<br/>Giờ hiển thị lại cho người dùng: ' . $displayTime;
        echo '<br/>Ngày hiển thị lại cho người dùng: ' . $displayDate;

        $displayDateTime = $displayDate . ' ' . $displayTime;
        echo '<br/>Ngày giờ hiển thị lại cho người dùng: ' . $displayDateTime;
    }

    public function postProcess(Vtiger_Request $request)
    {

    }
}