{strip}
    <script src="{vresource_url('layouts/v7/lib/jquery/jquery.min.js')}"></script>
    <script src="{vresource_url('resources/CheckWarranty.js')}"></script>
    <title>{vtranslate('LBL_CHECK_WARRANTY_TITLE', 'Products')}</title>
    <link rel="stylesheet" href="{vresource_url('resources/CheckWarranty.css')}">
    <div id="checkWarranty">
        <h4>{vtranslate('LBL_CHECK_WARRANTY_TITLE', 'Products')}</h4>

        <form id="checkWarrantyForm" method="post" action="">
            <input type="text"
                   name="serial"
                   value="{$smarty.post.seral}"
                   placeholder="{vtranslate('LBL_CHECK_WARRANTY_SERIAL_PLACEHOLDER')}">
            &nbsp;
            <button id="btnCheck" class="btn btn-primary">
                {vtranslate('LBL_CHECK_WARRANTY_SUBMIT_BTN', 'Products')}
            </button>
        </form>

        <div id="result" style="display: none;">
            <table>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_PRODUCT_NAME', 'Products')}</th>
                    <td id="productName"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_SERIAL_NO', 'Products')}</th>
                    <td id="serialNo"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_START_DATE', 'Products')}</th>
                    <td id="warrantyStartDate"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_END_DATE', 'Products')}</th>
                    <td id="warrantyEndDate"></td>
                </tr>
                <tr>
                    <th>{vtranslate('LBL_WARRANTY_STATUS', 'Products')}</th>
                    <td><span class="label" id="warrantyStatus"></span></td>
                </tr>
            </table>
        </div>
    </div>
{/strip}