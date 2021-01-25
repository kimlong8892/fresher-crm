<form action="entrypoint.php?name=FormRegister" method="POST">
    <label for="">{vtranslate('LBL_FULL_NAME')}</label>
    <input type="text" name="data[full_name]" required><br>
    <label for="">{vtranslate('LBL_PHONE')}</label>
    <input type="text" name="data[phone]" required><br>
    <label for="">{vtranslate('LBL_EMAIL')}</label>
    <input type="text" name="data[email]" required><br>
    <label for="">{vtranslate('LBL_DESCRIPTION')}</label>
    <input type="text" name="data[description]"><br>
    <input type="hidden" name="input_source" value="Website">
    <input type="hidden" name="simple_params" value="1">
    <button type="submit">{vtranslate('BTN_SUBMIT')}</button>
</form>