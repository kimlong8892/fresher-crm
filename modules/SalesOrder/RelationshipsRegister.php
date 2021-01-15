<?php

/* System auto-generated on 2021-01-15 11:03:29 am.  */

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
    ),
    array(
        'leftSideModule' => 'SalesOrder',
        'rightSideModule' => 'Products',
        'relationshipType' => 'N:N',
        'relationshipName' => 'LBL_PRODUCT_LIST',
        'enabledActions' => array(
            'ADD',
            'SELECT'
        ),
        'listingFunctionName' => 'get_related_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => null
    )
);

