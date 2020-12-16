/**
 * Name: SMSNotifierHelper.js
 * Description: A helper class to handle send SMS form logic
 * Author: Phu Vo
 * Date: 2020.02.12
 */

if (typeof window.SMSNotifierHelper === 'undefined') {
    (function() {
        window.SMSNotifierHelper = new class {

            constructor() {
                this.domVars = {
                    message: false,
                    countLimit: false,
                    countRemain: false,
                    countDownContainer: false,
                    template: false,
                }
            }

            initSMSValidator() {
                this.updatedomVars();
                this.initSMSLimitValidator();
                this.initSMSTemplateSelector();
                this.initSMSOnlyASCIIValidator();
            }

            updatedomVars() {
                this.domVars.message = $('#message');
                this.domVars.countLimit = $('#smsCountLimit');
                this.domVars.countRemain = $('#smsCountRemain');
                this.domVars.countDownContainer = $('#smsCountDownContainer');
                this.domVars.template = $('#smsTemplate');
            }

            initSMSLimitValidator() {
                let limit = this.domVars.message.attr('maxlength');

                this.domVars.countLimit.text(limit);
                this.domVars.countRemain.text(limit - this.domVars.message.val().length);

                this.domVars.message.on('input propertychange', (e) => {
                    let str = this.domVars.message.val();

                    this.domVars.countRemain.text(limit - str.length); // Update character remain
                    this.domVars.countDownContainer.toggleClass('text-danger', str.length >= limit); // toggle error flag
                });
            }

            initSMSTemplateSelector() {
                // Modified by Phu Vo on 2019.09.20 to fix could not fill message from template
                this.domVars.template.on('change', e => {
                    this.domVars.message.val($(e.target).val()).trigger('propertychange');
                });
                // End Phu Vo
            }

            initSMSOnlyASCIIValidator() {
                this.domVars.message.on('blur', e => {
                    this.validateSMSOnlyASCII(e.target);
                });

                this.domVars.message.on('focus', e => {
                    this.domVars.message.toggleClass('input-error', false);
                });
            }

            validateSMSOnlyASCII(element) {
                let str = element.value;

                if (!this._IsASCIIValid(str)) {
                    this.domVars.message.toggleClass('input-error', true);
                    app.helper.showErrorNotification({message: app.vtranslate('JS_SMS_ERROR_ASCII_ONLY')});
                    return false;
                }

                return true;
            }

            _IsASCIIValid (string) {
                if (!string.length) return true;
                if (!/^[\u0000-\u007f]*$/.test(string)) return false;
                return true;
            }
        }
    })();
}
