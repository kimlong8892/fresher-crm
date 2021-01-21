<?php

class Products_Service_Model {
    static function SendMsgWarrantyStatus() {
        Products_Record_Model::updateStatusWarranty();
    }
}