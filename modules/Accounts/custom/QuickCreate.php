<?php
/*
*   CustomCode Structure
*   Author: Hieu Nguyen
*   Date: 2018-08-23
*   Purpose: customize the layout easily with configurable display params
*/

$displayParams = array(
    'scripts' => '
        <script src="{vresource_url("modules/Accounts/resources/QuickCreate.js")}"></script>
    ',
    'form' => array(),
    'fields' => array(
        'accounts_type' => array(
            'customTemplate' => '{include file="modules/Accounts/tpls/AccountsTypeQuickCreate.tpl"}',
        )
    ),
);