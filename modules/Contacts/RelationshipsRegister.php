<?php

/* System auto-generated on 2021-01-25 04:39:29 pm.  */

$relationships = array(
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'CPSocialMessageLog',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPSOCIALMESSAGELOG_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_customer'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'CPSocialArticleLog',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPSOCIALARTICLELOG_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_customer'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'CPSocialFeedback',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPSOCIALFEEDBACK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_customer'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'CPReceipt',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPRECEIPT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'contact_id'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'CPPayment',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPPAYMENT_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'contact_id'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'CPMauticContactHistory',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPMAUTICCONTACTHISTORY_LIST',
        'enabledActions' => array(

        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_id'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_contact'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_contact'
    ),
    array(
        'leftSideModule' => 'Contacts',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_contact'
    )
);

