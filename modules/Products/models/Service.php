<?php

class Products_Service_Model {
    static function updateWarrantyStatus() {
        Products_Record_Model::updateStatusWarranty();
    }
}