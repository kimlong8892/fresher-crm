<?php

/*
*	HandlerRegister.php
*	Author: Phuc Lu
*	Date: 2019.07.18
*   Purpose: provide handler register for module Transfer Money
*/

$registeredEvents = array(
    'vtiger.entity.beforesave',
    'vtiger.entity.aftersave',
    'vtiger.entity.beforedelete',
    'vtiger.entity.afterdelete',
    'vtiger.batchevent.save',
    'vtiger.batchevent.beforedelete',
    'vtiger.batchevent.afterdelete',
    'vtiger.batchevent.beforerestore',
    'vtiger.batchevent.afterrestore',
);

$handlerName = 'CPTransferMoneyHandler';
$batchHandlerName = 'CPTransferMoneyBatchHandler';