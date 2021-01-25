<?php

/* System auto-generated on 2021-01-25 04:38:24 pm.  */

$relationships = array(
    array(
        'leftSideModule' => 'Leads',
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
        'leftSideModule' => 'Leads',
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
        'leftSideModule' => 'Leads',
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
        'leftSideModule' => 'Leads',
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
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
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
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead_id'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'lead_id'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
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
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_id_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'CPDemo',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_CPDEMO_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list_ticket',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_id_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    ),
    array(
        'leftSideModule' => 'Leads',
        'rightSideModule' => 'HelpDesk',
        'relationshipType' => '1:N',
        'relationshipName' => 'LBL_HELPDESK_LIST',
        'enabledActions' => array(
            'ADD'
        ),
        'listingFunctionName' => 'get_dependents_list',
        'leftSideReferenceFieldName' => null,
        'rightSideReferenceFieldName' => 'related_lead'
    )
);

