<?php
    /*
    *   CustomCode Structure
    *   Author: Hieu Nguyen
    *   Date: 2018-08-23
    *   Purpose: customize the layout easily with configurable display params
    */

    $displayParams = array(
        'scripts' => '
            <link type="text/css" rel="stylesheet" href="modules/Accounts/resources/DetailView.css">
			<script type="text/javascript" src="modules/Accounts/resources/DetailView.js"></script>
        ',
        'form' => array(
            'hiddenFields' => '
                <input type="hidden" name="is_draft" value=""/>
                <input type="hidden" name="is_awesome" value=""/>
            ',
        ),
        'fields' => array(
            'notes' => array(
                // Simple template can be defined here
                'customTemplate' => '<textarea name="notes"></textarea>',
            ),
            'interests' => array(
                // But complicated or multi-lines template PLEASE link to external file
                'customTemplate' => '{include file="modules/Accounts/tpls/interests_editview.tpl"}',
            ),
        ),
    );