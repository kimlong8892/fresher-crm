<?php

/* System auto-generated on 2021-01-15 11:01:17 am.  */

$relationships = array(
    array(
        'leftSideModule' => 'Accounts',
        'rightSideModule' => 'CPReceipt',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPRECEIPT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'account_id'
    ),
    array(
        'leftSideModule' => 'Accounts',
        'rightSideModule' => 'CPPayment',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPPAYMENT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'account_id'
    ),
    array(
        'leftSideModule' => 'Accounts',
        'rightSideModule' => 'SalesOrder',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_SALESORDER_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_account'
    )
);

