<?php

/*
*	SalesOrderHandler.php
*	Author: Phuc Lu
*	Date: 2020.03.05
*   Purpose: provide handler events for SalesOrder
*/

class SalesOrderHandler extends VTEventHandler {

	function handleEvent($eventName, $entityData) {
		if ($entityData->getModuleName() != 'SalesOrder') return;

		if ($eventName === 'vtiger.entity.beforesave') {
		}

		if ($eventName === 'vtiger.entity.aftersave') {
			$this->updateMauticContactStage($entityData);
			if($entityData->get('sostatus') == "Delivered"){
                $this->updateAnnualRevenueAccount($entityData);
            }
		}

		if ($eventName === 'vtiger.entity.beforedelete') {
		}

		if ($eventName === 'vtiger.entity.afterdelete') {	
		}
	}

	private function updateMauticContactStage($entityData) {
		if (CPMauticIntegration_Config_Helper::hasConfig('Contacts') && !empty($entityData->get('contact_id'))) {
			CPMauticIntegration_Data_Helper::updateContactStageSegmentByStatus('SalesOrder', $entityData, $entityData->get('contact_id'));
		}
	}
	// Ended by Phuc

    private function updateAnnualRevenueAccount($entityData){
        $totalOrder = $entityData->get('hdnGrandTotal');
        Accounts_Record_Model::updateAnnualRevenue($totalOrder, $entityData->get('contact_id'));
    }
}

