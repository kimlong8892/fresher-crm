<?php

/*
    EntryPoint structure
    Author: Long Nguyen
    Date: 2020-12-25
    Purpose: provide an entry point structure similar to SugarCRM
*/

class CheckWarranty extends Vtiger_EntryPoint
{
    public function process(Vtiger_Request $request)
    {
        if ($request->get('serial') != '' && $request->get('serial') != null) {
            $matchedProduct = Products_Record_Model::getInstanceBySerial($request->get('serial'));
            $productInfo = $matchedProduct->getData();

            // Populate additional info
            $msgError = null;
            if ($productInfo) {
                $warrantyStatus = (strtotime($productInfo['expiry_date']) > strtotime($productInfo['expiry_date'])) ? 'valid' : 'ended';
                $warrantyStatusLabelKey = $warrantyStatus == 'valid' ? 'LBL_WARRANTY_STATUS_VALID' : 'LBL_WARRANTY_STATUS_ENDED';

                $productInfo['warranty_status'] = $warrantyStatus;
                $productInfo['warranty_status_label'] = vtranslate($warrantyStatusLabelKey, 'Products');
            } else {
                $msgError = vtranslate('LBL_CHECK_WARRANTY_NO_PRODUCT_MATCH_ERROR_MSG', 'Products');
            }

            // response
            $result = array('matched_product' => $productInfo, 'mgs_error' => $msgError);
            $response = new Vtiger_Response();
            $response->setResult($result);
            $response->emit();

        } else {
            $customView = new CustomView_Base_View($isFullView = true);
            $viewer = $customView->getViewer($request);
            $viewer->display('include/EntryPoints/tpls/check_warranty.tpl');
        }
    }
}