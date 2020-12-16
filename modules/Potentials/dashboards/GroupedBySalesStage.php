<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Potentials_GroupedBySalesStage_Dashboard extends Vtiger_IndexAjax_View {

	/**
	 * Retrieves css styles that need to loaded in the page
	 * @param Vtiger_Request $request - request model
	 * @return <array> - array of Vtiger_CssScript_Model
	 */
	function getHeaderCss(Vtiger_Request $request){
		$cssFileNames = array(
			//Place your widget specific css files here
		);
		$headerCssScriptInstances = $this->checkAndConvertCssStyles($cssFileNames);
		return $headerCssScriptInstances;
	}
    
    function getSearchParams($stage,$assignedto,$dates) {
        $listSearchParams = array();
        $conditions = array();
        array_push($conditions,array("sales_stage","e",decode_html(urlencode(escapeSlashes($stage)))));
        if($assignedto == ''){
            $currenUserModel = Users_Record_Model::getCurrentUserModel();
			$assignedto = $currenUserModel->getId();
		}
		
		// Updated by on 2020.02.04
        if ($assignedto != 'all' && !empty($assignedto)) {
			if (strpos($assignedto, ':')) {
				$assignedto = explode(':', $assignedto);
				$assignedto = $assignedto[1];			
			}

			$ownerType = vtws_getOwnerType($assignedto);

            // Modified by Hieu Nguyen on 2020-03-26 to get the correct drill down params
            if ($ownerType == 'Users') {
				array_push($conditions, ['main_owner_id', 'c', 'Users:' . $assignedto]);
            }
            else {
                array_push($conditions, ['main_owner_id', 'c', 'Groups:' . $assignedto]);
            }
            // End Hieu Nguyen
		}
		// Ended by Phuc

        if(!empty($dates)) {
            array_push($conditions,array("closingdate","bw",$dates['start'].','.$dates['end']));
        }
        $listSearchParams[] = $conditions;
        return '&search_params='. json_encode($listSearchParams);
    }
    
	public function process(Vtiger_Request $request) {
		$currentUser = Users_Record_Model::getCurrentUserModel();
		$viewer = $this->getViewer($request);
		$moduleName = $request->getModule();

		$linkId = $request->get('linkid');
		
		// Modified by Phu Vo on 2019.06.19 to process ownerid from request
		$owner = $request->get('assigned_user_id');
		if ($owner) $owner = Vtiger_CustomOwnerField_Helper::getOwnerIdFromRequest($owner);
		// End Phu Vo

		$dates = $request->get('expectedclosedate');

		//Date conversion from user to database format
		if(!empty($dates)) {
			$dates['start'] = Vtiger_Date_UIType::getDBInsertedValue($dates['start']);
			$dates['end'] = Vtiger_Date_UIType::getDBInsertedValue($dates['end']);
		}
		
		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);
		$data = $moduleModel->getPotentialsCountBySalesStage($owner, $dates);
        $listViewUrl = $moduleModel->getListViewUrlWithAllFilter();
        for($i = 0;$i<count($data);$i++){
            $data[$i][] = $listViewUrl.$this->getSearchParams($data[$i]['link'],$owner,$dates).'&nolistcache=1';
        }
        
		$widget = Vtiger_Widget_Model::getInstance($linkId, $currentUser->getId());

		$viewer->assign('WIDGET', $widget);
		$viewer->assign('MODULE_NAME', $moduleName);
		$viewer->assign('DATA', $data);

		//Include special script and css needed for this widget
		$viewer->assign('STYLES',$this->getHeaderCss($request));
		$viewer->assign('CURRENTUSER', $currentUser);

		$content = $request->get('content');
		if(!empty($content)) {
			$viewer->view('dashboards/DashBoardWidgetContents.tpl', $moduleName);
		} else {
			$viewer->view('dashboards/GroupBySalesStage.tpl', $moduleName);
		}
	}
}