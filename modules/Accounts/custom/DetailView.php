<?php
    /*
    *   CustomCode Structure
    *   Author: Hieu Nguyen
    *   Date: 2018-07-17
    *   Purpose: customize the layout easily with configurable display params
    */

    $displayParams = array(
        'scripts' => '
             <link type="text/css" rel="stylesheet" href="{vresource_url("modules/Accounts/resources/DetailView.css")}">
        ',
        'form' => array(

        ),
        'fields' => array(
            'accounts_type' => array(
                'customTemplate' => '{include file="modules/Accounts/tpls/AccountsTypeDetailView.tpl"}',
            )
        ),
    );