<?php

/* System auto-generated on 2019-09-19 02:58:12 pm.  */

$relationships = array(
    array(
        'leftSideModule' => 'SalesOrder',
        'rightSideModule' => 'CPReceipt',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPRECEIPT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_salesorder'
    ),
    array(
        'leftSideModule' => 'SalesOrder',
        'rightSideModule' => 'CPPayment',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPPAYMENT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_salesorder'
    )
);

