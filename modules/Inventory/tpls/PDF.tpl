{*
    Author: Phu Vo
    Date: 2019.05.13
    Last Update: 2019.05.13
    Purpose: Template for Inventory modules export PDF
*}

{strip}
    <table>
        <tr>
            <td>{if !empty($COMPANY_MODEL->getLogoPath())}<img src="{$COMPANY_MODEL->getLogoPath()}" width="200px"/>{/if}</td>
            <td>
                <table style="font-size: 26px; text-align: right">
                    {if !empty($COMPANY_MODEL->get('organizationname'))}<tr><td><b>{$COMPANY_MODEL->get('organizationname')}</b></td></tr>{/if}
                    {if !empty($COMPANY_MODEL->get('address'))}<tr><td>{$COMPANY_MODEL->get('address')}</td></tr>{/if}
                    {if !empty($COMPANY_MODEL->get('city'))}<tr><td>{$COMPANY_MODEL->get('city')}, {$COMPANY_MODEL->get('state')}, {$COMPANY_MODEL->get('country')}</td></tr>{/if}
                    {if !empty($COMPANY_MODEL->get('phone'))}<tr><td>{vtranslate('Phone', $MODULE_NAME)}: {$COMPANY_MODEL->get('phone')}</td></tr>{/if}
                    {if !empty($COMPANY_MODEL->get('fax'))}<tr><td>{vtranslate('Fax: ', $MODULE_NAME)}{$COMPANY_MODEL->get('fax')}</td></tr>{/if}
                    {if !empty($COMPANY_MODEL->get('website'))}<tr><td>{vtranslate('Website: ', $MODULE_NAME)}{$COMPANY_MODEL->get('website')}</td></tr>{/if}
                </table>
            </td>
        </tr>
    </table>
    
    <h1 style="text-align: center; font-size: 60px">{vtranslate('LBL_PDF_TITLE', $MODULE_NAME)}</h1>

    <br/>

    {if $MODULE_NAME neq 'PurchaseOrder'}
        <div class="content" style="font-size: 30px; line-height: 1.2em">
            {if !empty($RECORD_MODEL->get('contact_id'))}
                <div><b>{vtranslate('LBL_INVENTORY_PDF_DEAR_PERSON', $MODULE_NAME)}: {getParentName($RECORD_MODEL->get('contact_id'))}</b></div>
                <div><b>{vtranslate('SINGLE_Accounts', $MODULE_NAME)}: {getParentName($RECORD_MODEL->get('account_id'))}</b></div>
            {else}
                <div><b>{vtranslate('LBL_INVENTORY_PDF_DEAR', $MODULE_NAME)}: {getParentName($RECORD_MODEL->get('account_id'))}</b></div>
            {/if}
            <div><b>{vtranslate('LBL_INVENTORY_PDF_PURPOSE', $MODULE_NAME)}: {vtranslate("SINGLE_`$MODULE_NAME`", $MODULE_NAME)} - {$RECORD_MODEL->get('label')}</b></div>
            <div><b>{$COMPANY_MODEL->get('organizationname')}</b> {vtranslate('LBL_INVENTORY_PDF_DEALING', $MODULE_NAME)}</div>
            <div>{$TXT_OPENNING}:</div>
        </div>

        <br/>
    {else}
        <div class="content" style="font-size: 30px; line-height: 1.2em">
            <div><b>{vtranslate("SINGLE_`$MODULE_NAME`", $MODULE_NAME)} - {$RECORD_MODEL->get('label')}</b></div>
        </div>
    {/if}

    <table cellpadding="4px" style="width: 100%; font-size: 28px; border: 1px solid black">
        <tr style="font-weight: bold; background-color: #ccc">
            <th width="80px">{vtranslate('Product Code', $MODULE_NAME)}</th>
            <th width="155px">{vtranslate('Product Name', $MODULE_NAME)}</th>
            <th width="50px">{vtranslate('Quantity', $MODULE_NAME)}</th>
            <th width="80px">{vtranslate('LBL_LIST_PRICE', $MODULE_NAME)}</th>
            <th width="60px">{vtranslate('Discount', $MODULE_NAME)}</th>
            <th width="77px">{vtranslate('Total', $MODULE_NAME)}</th>
        </tr>
        {foreach item=PRODUCT from=$PRODUCTS_DETAILS}
            <tr>
                <td width="80px">{$PRODUCT.product_code}</td>
                <td width="155px">{$PRODUCT.product_name}</td>
                <td width="50px" style="text-align: right">{$PRODUCT.quantity}</td>
                <td width="80px" style="text-align: right">₫ {$PRODUCT.price}</td>
                <td width="60px" style="text-align: right">₫ {$PRODUCT.discount}</td>
                <td width="77px" style="text-align: right">₫ {$PRODUCT.total}</td>
            </tr>
        {/foreach}
        <tr>
            <td rowspan="7" colspan="2" width="235px"></td>
            <td colspan="4" width="267px">
                <tr>
                    <td width="182px">{vtranslate('Net Total', $MODULE_NAME)}</td>
                    <td width="77px" style="text-align: right">₫ {$SUMMARY_DETAILS.net_total}</td>
                </tr>
                <tr>
                    <td width="182px">{vtranslate('Discount', $MODULE_NAME)}: ({$SUMMARY_DETAILS.discount_final_percent}%)</td>
                    <td width="77px" style="text-align: right">₫ {$SUMMARY_DETAILS.discount}</td>
                </tr>
                <tr>
                    <td width="182px">{vtranslate('Tax', $MODULE_NAME)}: ({$SUMMARY_DETAILS.group_total_tax_percent}%)</td>
                    <td width="77px" style="text-align: right">₫ {$SUMMARY_DETAILS.tax}</td>
                </tr>
                <tr>
                    <td width="182px">{vtranslate('Shipping & Handling Charges', $MODULE_NAME)}</td>
                    <td width="77px" style="text-align: right">₫ {$SUMMARY_DETAILS.shipping_charges}</td>
                </tr>
                <tr>
                    <td width="182px">{vtranslate('Shipping & Handling Tax:', $MODULE_NAME)} ({$SUMMARY_DETAILS.sh_tax_percent}%)</td>
                    <td width="77px" style="text-align: right">₫ {$SUMMARY_DETAILS.shipping_tax}</td>
                </tr>
                <tr>
                    <td width="182px">{vtranslate('Adjustment', $MODULE_NAME)}</td>
                    <td width="77px" style="text-align: right">₫ {$SUMMARY_DETAILS.adjustment}</td>
                </tr>
                <tr>
                    <td width="182px">{vtranslate('LBL_GRAND_TOTAL', $MODULE_NAME)}</td>
                    <td width="77px" style="text-align: right">₫ {$SUMMARY_DETAILS.grand_total}</td>
                </tr>  
                {* Added by Phuc on 2020.01.20 *}
                {if $MODULE_NAME == 'Invoice'}        
                    <tr>
                        <td width="182px">{vtranslate('LBL_RECEIVED', $MODULE_NAME)}</td>
                        <td width="77px" style="text-align: right">₫ {$EXT_SUMMARY_DETAILS.received}</td>
                    </tr>                
                    <tr>
                        <td width="182px">{vtranslate('LBL_REMAINING', $MODULE_NAME)}</td>
                        <td width="77px" style="text-align: right">₫ {$EXT_SUMMARY_DETAILS.balance}</td>
                    </tr>
                {/if}
                {* Ended by Phuc *}
            </td>
        </tr>
    </table>

    <br />

    <table cellpadding="4px" style="width: 100%; font-size: 28px; border: 1px solid black">
        <tr style="font-weight: bold; background-color: #ccc"><th>{vtranslate('Terms & Conditions', $MODULE_NAME)}</th></tr>
        <tr>
            <td>{$RECORD_MODEL->getDisplayValue('terms_conditions')}</td>
        </tr>
    </table>

    <br />

    <table cellpadding="4px" style="width: 100%; font-size: 28px; border: 1px solid black">
        <tr style="font-weight: bold; background-color: #ccc"><th>{vtranslate('LBL_DESCRIPTION_INFORMATION', $MODULE_NAME)}</th></tr>
        <tr>
            <td>{$RECORD_MODEL->getDisplayValue('description')}</td>
        </tr>
    </table>

    <br />

    {if !empty($ASSIGNED_USER_MODEL->get('last_name'))}
        <div style="font-size: 30px; line-height: 1.2em">
            <div>{$TXT_ENDING}:</div>
            <div style="font-size: 28px">
                <div><i>{trim(getUserFullName($ASSIGNED_USER_MODEL->getId()))}</i></div>
                {if !empty($ASSIGNED_USER_MODEL->get('phone_mobile'))}<div><i>{vtranslate('Phone', $MODULE_NAME)}: {$ASSIGNED_USER_MODEL->get('phone_mobile')}</i></div>{/if}
                {if !empty($ASSIGNED_USER_MODEL->get('email1'))}<div><i>{vtranslate('Email', $MODULE_NAME)}: {$ASSIGNED_USER_MODEL->get('email1')}</i></div>{/if}
            </div>
        </div>
    {/if}

    <br />

    <div style="font-size: 30px">{vtranslate('LBL_INVENTORY_PDF_KINDY_FAREWELL', $MODULE_NAME)}</div>
{/strip}