<?php

/*
*	SampleHandler structure
*	Author: Hieu Nguyen
*	Date: 2018-07-19
*	Usage: Copy this file into a new file named AccountHandler.php to handle events for Account. 
		After that add a function to handle the corresponding event to handle the business logic.
		Do that the same for other modules (DON'T FORGET to rename the file name and class name to match with that module. Ex: ContactHandler)
	Note: REMOVE this comment on the file you create youself to avoid messing comments
*/

class AccountHandler extends VTEventHandler {

	function handleEvent($eventName, $entityData) {
		if($entityData->getModuleName() != 'Accounts') return;
		
		if($eventName === 'vtiger.entity.beforesave') {
			// Add handler functions here
		
		}

		if($eventName === 'vtiger.entity.aftersave') {
			// Add handler functions here
			$this->removeDocs($entityData);
		}

		if($eventName === 'vtiger.entity.beforedelete') {
			// Add handler functions here
			$this->updateContactBeforeDelete($entityData);
		}

		if($eventName === 'vtiger.entity.afterdelete') {
			// Add handler functions here
			$this->updateContactToCompany($entityData);
		}
	}

	private function removeDocs($entityData) {
		if($entityData->get('accounttype') == "Competitor"){
			Accounts_Record_Model::removeDocsForCompetitor($entityData);
		}
	}
	
	private function updateContactBeforeDelete($entityData) {
		Accounts_Record_Model::updateContactBeforeDelete($entityData);
	}
	
	private function updateContactToCompany($entityData) {
		Accounts_Record_Model::updateContactToCompany($entityData);
	}
}