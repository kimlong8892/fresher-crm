<?php

/*
    Webhook structure
    Author: Hieu Nguyen
    Date: 2018-10-04
    Purpose: provide a webhook entrypoint to integrate with 3rd systems that support webhook
    Usage: when you access /webhook.php?name=<Webhook-Name>, the webhook inside include/WebHooks/<Webhook-Name>.php will be activated
*/

require_once('config.php');
require_once('include/Webservices/Relation.php');
require_once('vtlib/Vtiger/Module.php');
checkSecretKey($_GET['secret_key']);  // Check secret key before doing anything

$webhookName = preg_replace('/[^a-zA-Z0-9]/', '', $_REQUEST['name']);
$webhookFile = 'include/Webhooks/' . $webhookName . '.php';

if (file_exists($webhookFile)) {
    require_once('includes/Loader.php');
    require_once('include/utils/VtlibUtils.php');
    require_once('includes/runtime/EntryPoint.php');
    require_once($webhookFile);
    global $current_user;

    if ($current_user == null) {
        $current_user = Users::getActiveAdminUser();    // Bypass permission check
    }
    
    if ($_REQUEST['test'] == 'true') {
        include_once('include/Webhooks/WebhookTestData.php');  // For testing
    }

    $webhook = new $webhookName();
    $webhook->process(new Vtiger_Request($_REQUEST, $_REQUEST));
}
else {
    echo 'Webhook not found!';
}