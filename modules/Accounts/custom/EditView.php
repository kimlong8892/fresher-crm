<?php
    $displayParams = array(
        'scripts' => '
	        <link type="text/css" rel="stylesheet" href="{vresource_url("modules/Accounts/resources/EditView.css")}">
	        <script src="{vresource_url("modules/Accounts/resources/EditView.js")}"></script>
        ',
        'form' => array(
            'hiddenFields' => '

            ',
        ),
        'fields' => array(
            'accounts_type' => array(
                'customTemplate' => '{include file="modules/Accounts/tpls/AccountsTypeEditView.tpl"}',
            )
        ),
    );