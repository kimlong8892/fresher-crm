<?php

class CPDemo_RelationListView_Model extends Vtiger_RelationListView_Model
{
    public function getLinks()
    {
        $parentModel = $this->getParentRecordModel();
        $relationModel = $this->getRelationModel();

        $relationModuleName = $relationModel->getRelationModuleModel()->getName();
        $headerLinks = parent::getLinks();


        if ($relationModuleName == 'Accounts') {
            unset($headerLinks[0]);
            unset($headerLinks[1]);

            $headerLinks = [];

            if (Users_Privileges_Model::isPermitted('SMSNotifier', 'CreateView')) {
                // Show additional button
                $newLink = array(
                    'linktype' => 'LISTVIEWBASIC',
                    'linklabel' => vtranslate('LBL_DEMO_RELATED_LIST_BASIC_BUTTON', 'Accounts'),
                    'linkurl' => 'javascript:alert("Hello World!")',
                    'linkicon' => ''
                );

                $headerLinks['LISTVIEWBASIC'][] = Vtiger_Link_Model::getInstanceFromValues($newLink);
            }
        }

        return $headerLinks;
    }
}