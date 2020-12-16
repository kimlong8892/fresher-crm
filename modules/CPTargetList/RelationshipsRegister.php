<?php

/* System auto-generated on 2019-08-01 11:37:51 am.  */

$relationships = array(
    array(
        'leftSideModule' => 'CPTargetList',
        'rightSideModule' => 'Leads',
        'relationshipType' => 'N:N',
        'relationshipName' => 'LBL_LEAD_LIST',
        'enabledActions' => array(
            'ADD',
            'SELECT'
        ),
        'listingFunctionName' => 'get_related_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => null
    ),
    array(
        'leftSideModule' => 'CPTargetList',
        'rightSideModule' => 'Contacts',
        'relationshipType' => 'N:N',
        'relationshipName' => 'LBL_CONTACT_LIST',
        'enabledActions' => array(
            'ADD',
            'SELECT'
        ),
        'listingFunctionName' => 'get_related_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => null
    ),
    array(
        'leftSideModule' => 'CPTargetList',
        'rightSideModule' => 'CPTarget',
        'relationshipType' => 'N:N',
        'relationshipName' => 'LBL_CPTARGET_LIST',
        'enabledActions' => array(
            'ADD',
            'SELECT'
        ),
        'listingFunctionName' => 'get_related_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => null
    ),
    array(
        'leftSideModule' => 'CPTargetList',
        'rightSideModule' => 'CPSocialArticleLog',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPSOCIALARTICLELOG_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_target_list'
    )
);

