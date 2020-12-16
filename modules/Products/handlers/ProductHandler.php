<?php

/*
*	ProductHandler.php
*	Author: Hieu Nguyen
*	Date: 2019-08-15
*   Purpose: provide handler function for Products
*/

class ProductHandler extends VTEventHandler {

	function handleEvent($eventName, $entityData) {
        if($entityData->getModuleName() != 'Products') return;

		if ($eventName === 'vtiger.entity.beforesave') {
			// Add handler functions here
		}

		if ($eventName === 'vtiger.entity.aftersave') {
			$this->deleteSocialImageMapping($entityData);
		}

		if ($eventName === 'vtiger.entity.beforedelete') {
			// Add handler functions here
		}

		if ($eventName === 'vtiger.entity.afterdelete') {
			$this->deleteSocialImageMapping($entityData, true);
		}
	}

    function deleteSocialImageMapping($entityData, bool $productDeleted = false) {
        // Delete all product image mapping if the product is deleted
        if ($productDeleted == true) {
            CPSocialIntegration_Data_Model::deleteAllProductImageMapping($entityData->entityId, 'Zalo');
            return;
        }

        // Delete product image mapping if they are removed in this product
        if (isset($_REQUEST['imgDeleted']) && !empty($_REQUEST['imageid'])) {
            $deletedImageIds = json_decode($_REQUEST['imageid']);
            CPSocialIntegration_Data_Model::deleteProductImageMapping($entityData->get('id'), 'Zalo', $deletedImageIds);
        }
    }

}

