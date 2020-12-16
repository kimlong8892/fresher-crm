<?php

/* System auto-generated on 2019-08-08 11:27:43 am.  */

$relationships = array(
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'CPTargetList',
        'relationshipType' => 'N:N',
        'relationshipName' => 'LBL_CPTARGETLIST_LIST',
        'enabledActions' => array(
            'ADD',
            'SELECT'
        ),
        'listingFunctionName' => 'get_related_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => null
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'CPSocialMessageLog',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPSOCIALMESSAGELOG_LIST',
        'enabledActions' => array(),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'CPSocialArticle',
        'relationshipType' => 'N:N',
        'relationshipName' => 'LBL_CPSOCIALARTICLE_LIST',
        'enabledActions' => array(
            'ADD',
            'SELECT'
        ),
        'listingFunctionName' => 'get_related_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => null
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'CPSocialArticleLog',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPSOCIALARTICLELOG_LIST',
        'enabledActions' => array(),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'CPSocialFeedback',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPSOCIALFEEDBACK_LIST',
        'enabledActions' => array(),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'CPTarget',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPTARGET_LIST',
        'enabledActions' => array(

        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'Invoice',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_INVOICE_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'SalesOrder',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_SALESORDER_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'Quotes',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_QUOTE_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    // Added by Phuc on 2019.10.04 to custom relationship between campaign, leads, contacts, target
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'Leads',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_LEADS_LIST',
        'enabledActions' => array(
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    ),
    array(
        'leftSideModule' => 'Campaigns',
        'rightSideModule' => 'Contacts',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CONTACT_LIST',
        'enabledActions' => array(
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_campaign'
    )
);

