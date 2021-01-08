<?php


class Accounts_ShowAccountCompetior_View extends Vtiger_View_Controller
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
        $listAccount = Accounts_Record_Model::queryListAccountCompetior();
        foreach($listAccount as $item){
            echo $item->get('accountname').'<br>';
        }
    }

    public function postProcess(Vtiger_Request $request)
    {

    }
}