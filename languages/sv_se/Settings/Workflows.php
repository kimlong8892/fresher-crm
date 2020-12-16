<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
$languageStrings = array(
	//Basic Fält Namns
	'LBL_NEW' => 'Nytt',
	'LBL_WORKFLOW' => 'Arbetsflöde',
	'LBL_CREATING_WORKFLOW' => 'Skapa Arbetsflöde',
	'LBL_NEXT' => 'Nästa',

	//Edit view
	'LBL_STEP_1' => 'Steg 1',
	'LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW' => 'Skriv in basala uppgifter om Arbetsflödet',
	'LBL_SPECIFY_WHEN_TO_EXECUTE' => 'Ange när du vill utföra detta arbetsflöde',
	'ON_FIRST_SAVE' => 'Bara efter första sparningen',
	'ONCE' => 'Fram till första gången villkoret är sant',
	'ON_EVERY_SAVE' => 'Varje gång posten sparas',
	'ON_MODIFY' => ' gång en post ändras',
	'MANUAL' => 'System',
	'SCHEDULE_WORKFLOW' => 'Schemalägg Arbetsflöde',
	'ADD_CONDITIONS' => 'Lägg till Villkor',
	'ADD_TASKS'                    => 'Lägg Åtgärder'            ,
	
	//Step2 edit view
	'LBL_EXPRESSION' => 'Uttryck',
	'LBL_FIELD_NAME' => 'Fält',
	'LBL_SET_VALUE' => 'Ange Belopp',
	'LBL_USE_FIELD' => 'Använd Fält',
	'LBL_USE_FUNCTION' => 'Använd Funktion',
	'LBL_RAW_TEXT' => 'Rå text',
	'LBL_ENABLE_TO_CREATE_FILTERS' => 'Aktivera för att skapa filter',
	'LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED' => 'Denna arbetsflödet skapades i äldre utseende. Villkor som skapats i äldre utseende kan inte redigeras. Du kan välja tills återskapa förutsättningar, eller använd de befintliga förhållanden utan att ändra dem.',
	'LBL_USE_EXISTING_CONDITIONS' => 'Använd befintliga villkor',
	'LBL_RECREATE_CONDITIONS' => 'Återskapa Villkor',
	'LBL_SAVE_AND_CONTINUE' => 'Spara & Fortsätt',
	
	//Step3 edit view
	'LBL_ACTIVE' => 'Aktiv',
	'LBL_TASK_TYPE'                => 'Åtgärd Typ'                ,
	'LBL_TASK_TITLE'               => 'Åtgärd Titel'              ,
	'LBL_ADD_TASKS_FOR_WORKFLOW'   => 'Lägg till åtgärd för Workflow',
	'LBL_EXECUTE_TASK'             => 'Execute Åtgärd'            ,
	'LBL_SELECT_OPTIONS' => 'Välj Alternativ',
	'LBL_ADD_FIELD' => 'Lägg till fält',
	'LBL_ADD_TIME' => 'Lägg till tid',
	'LBL_TITLE' => 'Titel',
	'LBL_PRIORITY' => 'Prioritet',
	'LBL_ASSIGNED_TO' => 'Tilldelad',
	'LBL_TIME' => 'Tid',
	'LBL_DUE_DATE' => 'Förfallodatum',
	'LBL_THE_SAME_VALUE_IS_USED_FOR_START_DATE' => 'Samma värde används för startdatum',
	'LBL_EVENT_NAME' => 'Händelsenamn',
	'LBL_TYPE' => 'Typ',
	'LBL_METHOD_NAME' => 'Metodnamn',
	'LBL_RECEPIENTS' => 'Mottagare',
	'LBL_ADD_FIELDS' => 'Lägg till Fält',
	'LBL_SMS_TEXT' => 'Sms Text',
	'LBL_SET_FIELD_VALUES' => 'Set Fältvärden',
	'LBL_ADD_FIELD' => 'Lägg till Fält',
	'LBL_IN_ACTIVE' => 'Inaktiv',
	'LBL_SEND_NOTIFICATION' => 'Skicka Notifikation',
	'LBL_START_TIME' => 'Starttid',
	'LBL_START_DATE' => 'Startdatum',
	'LBL_END_TIME' => 'Sluttid',
	'LBL_END_DATE' => 'Slutdatum',
	'LBL_ENABLE_REPEAT' => 'Aktivera Upprepa',
	'LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE' => 'Ingen metod är tillgänglig för denna modul',
	'LBL_FINISH' => 'Avsluta',
	'LBL_NO_TASKS_ADDED'           => 'Inga åtgärder'             ,
	'LBL_CANNOT_DELETE_DEFAULT_WORKFLOW' => 'Du kan inte radera förvalda arbetsflöde',
	'LBL_MODULES_TO_CREATE_RECORD' => 'Skapa en post i'             ,
	'LBL_EXAMPLE_EXPRESSION' => 'Uttryck',
	'LBL_EXAMPLE_RAWTEXT' => 'Råtext',
	'LBL_VTIGER' => 'Vtiger',
	'LBL_EXAMPLE_FIELD_NAME' => 'Fält',
	'LBL_NOTIFY_OWNER' => 'notifierings_ägare',
	'LBL_ANNUAL_REVENUE' => 'årlig_inkomst',
	'LBL_EXPRESSION_EXAMPLE2' => "Om E-postland == 'Indien' och sedan concat (förnamn, '', efternamn) annars concat (efternamn, '', förnamn) slut",
	'LBL_FROM' => 'Från',
	'Optional' => 'Valfritt',
	'LBL_ADD_TASK'                 => 'Lägg till åtgärd'         ,
    'Portal Pdf Url' =>'Kundportal Pdf länk',
    'LBL_ADD_TEMPLATE' => 'Lägg Mall',
	'LBL_LINEITEM_BLOCK_GROUP' => 'LineItems Block för gruppen skatt',
    'LBL_LINEITEM_BLOCK_INDIVIDUAL' => 'LineItems Block för individuell skatt',
    'LBL_ADD_PDF' => 'Lägg till pdf',
	
	
	//Translation for module
	'Calendar' => 'Att göra',
	'Send Mail'					   => 'Skicka Mail',
	'Invoke Custom Function'	   => 'Åkalla anpassade funktioner',
	'Create Todo'				   => 'Skapa Todo',
	'Create Event'				   => 'Skapa Händelse',
	'Update Fields'				   => 'Uppdatera Fält',
	'Create Entity'                => 'Skapa Record'                ,
	'SMS Task'					   => 'SMS Task',
	'Mobile Push Notification'	   => 'Mobil Push Notification',
	'LBL_ACTION_TYPE' => 'Action Typ (Active Count)',
	'LBL_VTEmailTask' => 'E-post',
    'LBL_VTEntityMethodTask' => 'Vlastné funkcie',
    'LBL_VTCreateTodoTask' => 'Uppgift',
    'LBL_VTCreateEventTask' => 'Händelse',
    'LBL_VTUpdateFieldsTask' => 'Fält Uppdatera',
    'LBL_VTSMSTask' => 'SMS', 
    'LBL_VTPushNotificationTask' => 'Mobil Anmälan',
    'LBL_VTCreateEntityTask' => 'Skapa Spela',
	'LBL_MAX_SCHEDULED_WORKFLOWS_EXCEEDED' => 'Maximalt antal (%s) av regelbunden arbetsflöden har överskridits',

  'LBL_EDITING_WORKFLOW' => 'Redigering Arbetsflöde',
  'LBL_ADD_RECORD' => 'Nytt Arbetsflöde',
  'ON_SCHEDULE' => 'Schema',
  'LBL_RUN_WORKFLOW' => 'Kör Arbetsflödet',
  'LBL_AT_TIME' => 'På Gång',
  'LBL_HOURLY' => 'Tim',
  'ENTER_FROM_EMAIL_ADDRESS' => 'Ange e-postadress',
  'LBL_DAILY' => 'Dagligen',
  'LBL_WEEKLY' => 'Vecka',
  'LBL_ON_THESE_DAYS' => 'På dessa dagar',
  'LBL_MONTHLY_BY_DATE' => 'Månadsvis (Datum',
  'LBL_MONTHLY_BY_WEEKDAY' => 'Månadsvis (Vardag',
  'LBL_YEARLY' => 'Årliga',
  'LBL_SPECIFIC_DATE' => 'På Specifikt Datum',
  'LBL_CHOOSE_DATE' => 'Välj Datum',
  'LBL_SELECT_MONTH_AND_DAY' => 'Välj Månad och Datum',
  'LBL_SELECTED_DATES' => 'Valda Datum',
  'LBL_EXCEEDING_MAXIMUM_LIMIT' => 'Gränsvärdet överskrids',
  'LBL_NEXT_TRIGGER_TIME' => 'Nästa trigger tid på',
  'LBL_MESSAGE' => 'Meddelande',
  'LBL_WORKFLOW_NAME' => 'Arbetsflöde Namn',
  'LBL_TARGET_MODULE' => 'Målet Modulen',
  'LBL_WORKFLOW_TRIGGER' => 'Arbetsflöde Trigger',
  'LBL_TRIGGER_WORKFLOW_ON' => 'Trigger Arbetsflöde På',
  'LBL_RECORD_CREATION' => 'Posten Skapas',
  'LBL_RECORD_UPDATE' => 'Skiva Uppdatering',
  'LBL_TIME_INTERVAL' => 'Tidsintervall',
  'LBL_RECURRENCE' => 'Återfall',
  'LBL_FIRST_TIME_CONDITION_MET' => 'Endast första gången villkor är uppfyllda',
  'LBL_EVERY_TIME_CONDITION_MET' => 'Varje gång villkor är uppfyllda',
  'LBL_WORKFLOW_CONDITION' => 'Arbetsflöde Skick',
  'LBL_WORKFLOW_ACTIONS' => 'Arbetsflödesåtgärder',
  'LBL_DELAY_ACTION' => 'Fördröja Åtgärder',
  'LBL_FREQUENCY' => 'Frekvens',
  'LBL_SELECT_FIELDS' => 'Välj Fält',
  'LBL_INCLUDES_CREATION' => 'Omfattar Skapande',
  'LBL_ACTION_FOR_WORKFLOW' => 'Åtgärder för Arbetsflöde',
  'LBL_WORKFLOW_SEARCH' => 'Sök på Namn',

);

$jsLanguageStrings = array(
	'JS_STATUS_CHANGED_SUCCESSFULLY' => 'Status har ändrats Framgångsrikt',
	'JS_TASK_DELETED_SUCCESSFULLY' => 'Åtgärd utgår Framgångsrikt',
	'JS_SAME_FIELDS_SELECTED_MORE_THAN_ONCE' => 'Samma fält markerat mer än en gång',
	'JS_WORKFLOW_SAVED_SUCCESSFULLY' => 'Arbetsflöde sparats Framgångsrikt',
    'JS_CHECK_START_AND_END_DATE'=>'Slutdatum och tid ska vara större än eller lika med Startdatum och tid',

  'JS_TASK_STATUS_CHANGED' => 'Uppgift status ändrats.',
  'JS_WORKFLOWS_STATUS_CHANGED' => 'Arbetsflöde ändrats.',
  'VTEmailTask' => 'Skicka E-Post',
  'VTEntityMethodTask' => 'Anropa Anpassade Funktioner',
  'VTCreateTodoTask' => 'Skapa En Uppgift',
  'VTCreateEventTask' => 'Skapa Händelse',
  'VTUpdateFieldsTask' => 'Uppdatera Fält',
  'VTSMSTask' => 'SMS Uppgift',
  'VTPushNotificationTask' => 'Mobil Push Notification',
  'VTCreateEntityTask' => 'Skapa Post',
  'LBL_EXPRESSION_INVALID' => 'Uttryck Ogiltig',

);