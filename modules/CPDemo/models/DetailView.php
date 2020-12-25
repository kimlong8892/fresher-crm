<?php

class CPDemo_DetailView_Model extends Vtiger_DetailView_Model
{
    public function getDetailViewLinks($linkParams)
    {
        $linkModelList = parent::getDetailViewLinks($linkParams);
        $currentUserModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
        $moduleModel = $this->getModule();

        for($i = 0; $i < count($linkModelList); ++$i){
            // Modify a basic button
            if($linkModelList['DETAILVIEWBASIC'][$i]->linklabel == 'LBL_EDIT'){
                $linkModelList['DETAILVIEWBASIC'][$i]->linkurl = 'javascript:alert("Modify Basic Button")';
            }
        }

        if($currentUserModel->hasModulePermission($moduleModel->getId())){
            // Show additional basic button
            $button = array(
                'linktype' => 'DETAILVIEWBASIC',
                'linklabel' => 'LBL_DEMO_DETAILVIEW_BASIC_BUTTON',
                'linkurl' => 'javascript:alert("Hello World!")'
            );

            $linkModelList['DETAILVIEW'][] = Vtiger_Link_Model::getInstanceFromValues($button);
        }

        return $linkModelList;
    }
}