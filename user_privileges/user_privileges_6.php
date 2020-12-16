<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H4';

$current_user_parent_role_seq='H1::H2::H4';

$current_user_profiles=array(5,6,7,8,);

$profileGlobalPermission=array('1'=>1,'2'=>1,);

$profileTabsPermission=array('1'=>0,'2'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>1,'25'=>0,'26'=>0,'27'=>1,'31'=>0,'34'=>0,'35'=>0,'36'=>0,'38'=>0,'40'=>0,'41'=>0,'42'=>0,'43'=>1,'44'=>1,'45'=>1,'46'=>0,'47'=>0,'48'=>0,'50'=>0,'51'=>0,'52'=>0,'53'=>0,'54'=>1,'55'=>0,'56'=>0,'57'=>0,'58'=>0,'59'=>0,'60'=>0,'61'=>0,'62'=>1,'63'=>1,'64'=>1,'65'=>0,'66'=>0,'67'=>0,'68'=>0,'28'=>0,'3'=>0,);

$profileActionPermission=array(2=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),4=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),6=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),7=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,9=>0,10=>0,),8=>array(0=>0,1=>0,2=>0,4=>0,7=>0,6=>0,),9=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),13=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),14=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),15=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),16=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),18=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),19=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),20=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),21=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),22=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),23=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,),25=>array(0=>1,1=>0,2=>0,4=>0,7=>0,6=>0,13=>0,),26=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),34=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,11=>0,12=>0,),35=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),36=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),38=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),42=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),43=>array(0=>1,1=>1,2=>1,4=>1,7=>1,5=>0,6=>0,10=>0,),44=>array(0=>1,1=>1,2=>1,4=>1,7=>1,5=>0,6=>0,10=>0,),45=>array(0=>1,1=>1,2=>1,4=>1,7=>1,5=>0,6=>0,10=>0,),47=>array(0=>0,1=>0,2=>0,4=>0,7=>0,),53=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),55=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),56=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),57=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),58=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),59=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),60=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),61=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),62=>array(0=>1,1=>1,2=>1,4=>1,7=>1,5=>0,6=>0,8=>0,10=>0,),63=>array(0=>1,1=>1,2=>1,4=>1,7=>1,5=>0,6=>0,8=>0,10=>0,),64=>array(0=>1,1=>1,2=>1,4=>1,7=>1,5=>0,6=>0,8=>0,10=>0,),67=>array(0=>0,1=>0,2=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),68=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,),);

$current_user_groups=array(10,36,38,40,2,);

$subordinate_roles=array();

$parent_roles=array('H1','H2',);

$subordinate_roles_users=array();

$user_info=array('user_name'=>'salesman','is_admin'=>'off','user_password'=>'$1$sa000000$bm9WamYylRQAlt2fo3xZl0','confirm_password'=>'$1$sa000000$bm9WamYylRQAlt2fo3xZl0','first_name'=>'Sales Man','last_name'=>'','roleid'=>'H4','email1'=>'salesman@trialcrm.vn','status'=>'Active','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'12','end_hour'=>'','start_hour'=>'09:00','is_owner'=>'','title'=>'Nh&acirc;n vi&ecirc;n b&aacute;n h&agrave;ng','phone_work'=>'','department'=>'Sales','phone_mobile'=>'0368007292','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'','secondaryemail'=>'','phone_home'=>'','date_format'=>'dd-mm-yyyy','signature'=>'','description'=>'','address_street'=>'','address_city'=>'','address_state'=>'','address_postalcode'=>'','address_country'=>'','accesskey'=>'Q7cM1NZMopRdqsHt','time_zone'=>'Asia/Bangkok','currency_id'=>'1','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>',','currency_symbol_placement'=>'1.0$','imagename'=>'','internal_mailer'=>'0','theme'=>'softed','language'=>'vn_vn','reminder_interval'=>'','phone_crm_extension'=>'','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Sunday','callduration'=>'60','othereventduration'=>'60','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'Planned','defaultactivitytype'=>'Call','hidecompletedevents'=>'0','defaultcalendarview'=>'ListView','shared_calendar_activity_types'=>'Call,Meeting','default_call_reminder_time'=>'{&quot;days&quot;:&quot;0&quot;,&quot;hours&quot;:&quot;0&quot;,&quot;mins&quot;:&quot;30&quot;}','default_meeting_reminder_time'=>'{&quot;days&quot;:&quot;1&quot;,&quot;hours&quot;:&quot;0&quot;,&quot;mins&quot;:&quot;0&quot;}','default_task_reminder_time'=>'{&quot;days&quot;:&quot;1&quot;,&quot;hours&quot;:&quot;0&quot;,&quot;mins&quot;:&quot;0&quot;}','currency_name'=>'Vietnam, Dong','currency_code'=>'VND','currency_symbol'=>'₫','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'6');
?>