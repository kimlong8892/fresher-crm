<?php

/* System auto-generated on 2021-01-25 04:06:12 pm.  */

$relationships = array(
    array(
        'leftSideModule' => 'CPDemo',
        'rightSideModule' => 'Accounts',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_ACCOUNT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_cpdemo'
    ),
    array(
        'leftSideModule' => 'CPDemo',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => 'N:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD',
            'SELECT'
        ),
        'listingFunctionName' => 'get_related_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => null
    )
);

