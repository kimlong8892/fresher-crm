<?php

class FormRegister extends Vtiger_EntryPoint{
    public function process(Vtiger_Request $request){
        if($request->has('data')){
            $fullName = $request->get('data')['full_name'];
            $phone = $request->get('data')['phone'];
            $email = $request->get('data')['email'];
            $description = $request->get('data')['description'] ?? '';

            // get id lead by request
            global $adb;
            $sql = 'SELECT vtiger_leaddetails.leadid FROM vtiger_leaddetails
                    INNER JOIN vtiger_crmentity vc ON vc.crmid = vtiger_leaddetails.leadid
                    AND vc.deleted = 0
                    INNER JOIN vtiger_leadaddress vl on vtiger_leaddetails.leadid = vl.leadaddressid
                    WHERE email = ? OR vl.mobile = ?;';
            $idLead = $adb->getOne($sql, [$email, $phone]);

            // get id contact by request
            $sqlCheckContact = 'SELECT vtiger_contactdetails.contactid FROM vtiger_contactdetails
                                INNER JOIN vtiger_crmentity vc on vtiger_contactdetails.contactid = vc.crmid
                                AND vc.deleted = 0
                                WHERE email = ? AND mobile = ?;';
            $idContact = $adb->getOne($sqlCheckContact, [$email, $phone]);

            // check exists lead and contact
            $existsLead = !empty($idLead) ? true : false;
            $existsContact = !empty($idContact) ? true : false;

            // create new lead
            if(!$existsLead && !$existsContact){
                $recordModel = Leads_Record_Model::getCleanInstance('Leads');
                $recordModel->set('firstname', $fullName);
                $recordModel->set('mobile', $phone);
                $recordModel->set('email', $email);
                $recordModel->save();
                $idLead = $recordModel->getId();
            }

            // create ticket
            $recordModelTicket = HelpDesk_Record_Model::getCleanInstance('HelpDesk');
            $recordModelTicket->set('ticket_title', 'Đăng ký lead');
            $recordModelTicket->set('ticketpriorities', 'Low');
            $recordModelTicket->set('ticketstatus', 'Open');
            $recordModelTicket->set('description', $description);
            $recordModelTicket->set('related_lead', $idLead);
            $recordModelTicket->set('assigned_user_id', 'Users:1');
            if($existsContact){
                $recordModelTicket->set('contact_id', $idContact);
                $recordModelTicket->set('related_contact', $idContact);
            }
            $recordModelTicket->save();
            echo json_encode([
                'success' => true
            ]);
        } else {
            $customView = new CustomView_Base_View($isFullView = true);
            $viewer = $customView->getViewer($request);
            $viewer->display('include/EntryPoints/tpls/FormRegister.tpl');
        }
    }
}