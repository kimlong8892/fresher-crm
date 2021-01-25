<?php

/* System auto-generated on 2021-01-25 05:50:55 pm.  */

$relationships = array(
    array(
        'leftSideModule' => 'CPTicker',
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
    ),
    array(
        'leftSideModule' => 'CPTicker',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_cpticker'
    ),
    array(
        'leftSideModule' => 'CPTicker',
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

