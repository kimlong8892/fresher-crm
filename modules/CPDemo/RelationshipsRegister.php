<?php

/* System auto-generated on 2020-12-25 05:11:46 pm.  */

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
    )
);

