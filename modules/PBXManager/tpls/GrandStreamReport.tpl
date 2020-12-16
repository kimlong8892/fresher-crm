{* 
    Author: Phu Vo
    Date: 2019.04.12
    Purpose: Cloudfone report template 
*}

{strip}
    <div class="reportContainer">
        <div class="reportTitle rel">
            <label class="title">{$REPORT_TITLE}</label>
        </div>
        <div class="reportContents">
            <form name="filters" class="filter">
                <table style="width: 100%">
                    <tr>
                        <td class="fieldLabel alignMiddle">{vtranslate('LBL_FILTER_FROM', $MODULE)}</td>
                        <td class="fieldValue alignMiddle"><input name="date_start" class="inputElement dateField" data-rule-date="true" placeholder="{vtranslate('LBL_DATE_START', $MODULE)}" value="" autocomplete="off"/></td>
                        <td class="fieldLabel alignMiddle">{vtranslate('LBL_FILTER_TO', $MODULE)}</td>
                        <td class="fieldValue alignMiddle"><input name="date_end" class="inputElement dateField" data-rule-date="true" placeholder="{vtranslate('LBL_DATE_END', $MODULE)}" value="" autocomplete="off"/></td>
                        <td class="fieldLabel alignMiddle">{vtranslate('LBL_CALLER_NUMBER', $MODULE)}</td>
                        <td class="fieldValue alignMiddle"><input name="source" class="inputElement" placeholder="{vtranslate('LBL_CALLER_NUMBER', $MODULE)}" value="" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td class="fieldLabel alignMiddle">{vtranslate('LBL_RECEIVER_NUMBER', $MODULE)}</td>
                        <td class="fieldValue alignMiddle"><input name="destination" class="inputElement" placeholder="{vtranslate('LBL_RECEIVER_NUMBER', $MODULE)}" value="" autocomplete="off"/></td>
                        <td class="fieldLabel alignMiddle">{vtranslate('LBL_MIN_DURATION', $MODULE)}</td>
                        <td class="fieldValue alignMiddle"><input name="min_duration" class="inputElement" placeholder="{vtranslate('LBL_MIN_DURATION', $MODULE)}" value="" autocomplete="off"/></td>
                        <td class="fieldLabel alignMiddle">{vtranslate('LBL_MAX_DURATION', $MODULE)}</td>
                        <td class="fieldValue alignMiddle"><input name="max_duration" class="inputElement" placeholder="{vtranslate('LBL_MAX_DURATION', $MODULE)}" value="" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td class="fieldLabel alignMiddle"></td>
                        <td class="fieldValue alignMiddle"></td>
                        <td class="fieldLabel alignMiddle"></td>
                        <td class="fieldValue alignMiddle"></td>
                        <td class="fieldLabel alignMiddle"></td>
                        <td class="fieldValue alignMiddle toRight">
                            <button type="button" id="clear" class="btn">{vtranslate('LBL_CLEAR', $MODULE)}</button>
                            <button type="submit" id="filter" class="btn-primary">{vtranslate('LBL_FILTER', $MODULE)}</button>
                        </td>  
                    </tr>
                </table>
            </form>
            <table id="listViewTable" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th style="width: 15%">{vtranslate('LBL_KEY', $MODULE)}</th>
                        <th style="width: 7.5%">{vtranslate('LBL_CALLER_NUMBER', $MODULE)}</th>
                        <th style="width: 7.5%">{vtranslate('LBL_RECEIVER_NUMBER', $MODULE)}</th>
                        <th style="width: 10%">{vtranslate('LBL_DATE_START', $MODULE)}</th>
                        <th style="width: 10%">{vtranslate('LBL_DATE_END', $MODULE)}</th>
                        <th style="width: 10%">{vtranslate('LBL_CALL_DURATION', $MODULE)}</th>
                        <th style="width: 10%">{vtranslate('LBL_CALL_REAL_DURATION', $MODULE)}</th>
                        <th style="width: 10%">{vtranslate('LBL_CALL_STATUS', $MODULE)}</th>
                        <th style="width: 20%">{vtranslate('LBL_RECORDING_FILE', $MODULE)}</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    
    <link type="text/css" rel="stylesheet" href="{vresource_url('resources/libraries/DataTables/css/CustomTable.css')}" />
    <link type="text/css" rel="stylesheet" href="{vresource_url('modules/PBXManager/resources/GrandStreamReport.css')}" />

    <script src="{vresource_url('resources/libraries/DataTables/js/dataTables.buttons.min.js')}"></script>
    <script src="{vresource_url('resources/libraries/DataTables/js/buttons.html5.min.js')}"></script>
    <script src="{vresource_url('resources/libraries/DataTables/js/jszip.min.js')}"></script>
    
    <script src="{vresource_url('modules/PBXManager/resources/GrandStreamReport.js')}"></script>
{strip}