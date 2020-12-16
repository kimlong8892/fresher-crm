<?php

/* System auto-generated on 2019-09-19 02:58:58 pm.  */

$relationships = array(
    array(
        'leftSideModule' => 'PurchaseOrder',
        'rightSideModule' => 'Invoice',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_INVOICE_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_purchaseorder'
    ),
    array(
        'leftSideModule' => 'PurchaseOrder',
        'rightSideModule' => 'CPPayment',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPPAYMENT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_purchaseorder'
    ),
    array(
        'leftSideModule' => 'PurchaseOrder',
        'rightSideModule' => 'CPReceipt',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPRECEIPT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_purchaseorder'
    )
);

