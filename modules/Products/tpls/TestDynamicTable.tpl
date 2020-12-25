{strip}
    <link rel="stylesheet" href="{vresource_url('resources/libraries/DynamicTable/DynamicTable.css')}">
    <script src="{vresource_url('resources/libraries/DynamicTable/DynamicTable.js')}"></script>

    <table id="tblDemo" class="dynamicTable" width="60%">
        <thead>
            <th>Col1</th>
            <th>Col2</th>
            <th>Col3</th>
            <th>Col4</th>
            <th>Col5</th>
            <th>
                <button type="button"
                        class="btnAddRow btn-primary">
                    <i class="fa fa-plus"></i>
                </button>
            </th>
        </thead>
        <tbody></tbody>
        <tfoot class="template" style="display: none;">
            <tr>
                <td>
                    <input type="text" name="field1[]" class="form-control">
                    <input type="hidden" name="deleted[]">
                </td>
                <td>
                    <input type="text" name="field2[]" class="form-control">
                </td>
                <td>
                    <input type="text" name="field3[]" class="form-control">
                </td>
                <td>
                    <input type="text" name="field4[]" class="form-control">
                </td>
                <td>
                    <input type="text" name="field5[]" class="form-control">
                </td>
                <td>
                    <button type="button" class="btnDelRow btn-danger">
                        <i class="fa fa-minus"></i>
                    </button>
                </td>
            </tr>
        </tfoot>
    </table>
{/strip}