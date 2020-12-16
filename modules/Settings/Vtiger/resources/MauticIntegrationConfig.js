/*
    File: MauticIntegrationConfig.js
    Author:Phuc Lu
    Date: 2019.06.25
    Purpose: Save config for Mautic
*/

CustomView_BaseController_Js('Settings_Vtiger_MauticIntegrationConfig_Js', {}, {
    registerEvents: function() {
        this._super();
        this.registerEventFormInit();
    },
    registerEventFormInit: function() {

		jQuery('#mapping-field-settings select.no-required').select2();
		jQuery('#mapping-stage-settings select.no-required').select2();
		jQuery('#mapping-stage-segment-settings select.no-required').select2();
		jQuery('#sync_history_when_converted').select2();

		var form = jQuery('form[name="settings"]');

        form.find('.change_password').on('click',function(e) {
			jQuery(this).addClass('hide');
			jQuery(this).next().removeClass('hide');
			jQuery(this).next().attr('data-rule-required', 'true');
			jQuery(this).next().next().removeClass('hide');
			jQuery(this).next().next().next().removeClass('hide');
			jQuery(this).next().next().next().next().val('1');
		});

		// Click event for undo changing password link
		form.find('.undo_password').on('click',function(e) {
			jQuery(this).addClass('hide');
			jQuery(this).prev().addClass('hide');
			jQuery(this).prev().attr('data-rule-required', 'true');
			jQuery(this).prev().prev().addClass('hide');
			jQuery(this).prev().prev().prev().removeClass('hide');
			jQuery(this).next().val('0');
		});

		// Click event for view password on editing
		form.find('.view_password').on('click',function(e) {
			
			if(jQuery(this).hasClass('fa-eye')) {
				jQuery(this).prev().attr('type', 'text');
			}
			else{
				jQuery(this).prev().attr('type', 'password');
			}

			jQuery(this).toggleClass('fa-eye');
			jQuery(this).toggleClass('fa-eye-slash');
		});
		
		// Remove error class
		form.find('input').on('focus', function() {
			jQuery(this).removeClass('input-error');
		});

		form.find('.headerblock').on('click', function() {
			jQuery(this).find('.indicator').toggleClass('fa-chevron-down fa-chevron-right');
		})

		// Submit event
        form.on('submit', function(e) {
            e.preventDefault();
            
            let target = jQuery(e.target);
            
            let formData = target.serializeFormData();

			// Validate form
			let error = false;

            if(formData.api_url == '') {
				form.find('[name="api_url"]').addClass('input-error');
                error = true;
			}
			
            if(formData.username == '') {
				form.find('[name="username"]').addClass('input-error');
				error = true;
			}
			
			
            if(formData.change_password == 1 && formData.password == '') {
				form.find('[name="password"]').addClass('input-error');
				error = true;
            }

			// Handle for mapping fields
			jQuery('.field-module').each(function(){
				var module = jQuery(this).val();
				var mappingFields = [];

				if (jQuery(this).is(':checked')) {
					jQuery('#mapping-field-' +  module).find('.form-group').each(function(){
						let required = 1;

						if (!jQuery(this).find('select:first').hasClass('required')){
							required = 0;
						}

						if (jQuery(this).find('select:first').val() != null && jQuery(this).find('select:last').val() != null) {
							let field = {crm: jQuery(this).find('select:first').val(), mautic: jQuery(this).find('select:last').val(), required: required};
							mappingFields.push(field);
						}
					})
				}
				
				formData['mapping_field_' + module] = mappingFields;
			})

			// Handle for mapping stages
			formData.mapping_stages = [];

			jQuery('.mapping-stage').each(function(){
				let stages = [];

				if (!jQuery(this).hasClass('hide')) {
					jQuery(this).find('.form-group').each(function(){
						let stage = {crm: jQuery(this).find('select:first option:selected').val(), mautic: jQuery(this).find('select:last option:selected').val()};
						stages.push(stage);
					})
				}
				
				formData.mapping_stages.push({module: jQuery(this).data('module-lower'), stages: stages});
			})

			// Handle for mapping stages stages
			let stagesSegments = [];

			jQuery('#mapping-stage-segment-settings').find('.form-group:not(".hide")').each(function(){
				let stage = jQuery(this).find('select:first option:selected').val();
				let segment = jQuery(this).find('select:last option:selected').val();

				if (stage != '' && segment != '') stagesSegments.push({stage: stage, segment: segment});
			})

			formData.mapping_stages_segments = stagesSegments;

			if(error) {
				app.helper.showErrorNotification({message: app.vtranslate('JS_MAUTIC_INTEGRATION_CONFIG_MISSING_REQUIRED_FIELD', 'Settings:Vtiger')});
				return false;
			}

            let params = {
                module: 'Vtiger',
                parent: 'Settings',
                action: 'SaveMauticIntegrationConfig',
                config: formData
            }

            app.helper.showProgress();

            app.request.post({data: params}).then((err, res) => {
                if (err) {					
					app.helper.hideProgress();
                    app.helper.showErrorNotification({message: app.vtranslate('JS_MAUTIC_INTEGRATION_CONFIG_SAVE_ERROR_MSG', 'Settings:Vtiger')});
                    return;
                }

				app.helper.showSuccessNotification({message: app.vtranslate('JS_MAUTIC_INTEGRATION_CONFIG_SAVE_SUCCESS_MSG', 'Settings:Vtiger')});
				
				if (jQuery('.nav-tabs').find('li').length < 2) {
					window.location = window.location;
				}
				else {
					app.helper.hideProgress();
				}
				
                return;
            });
		});
		
		form.find('.checkButton').on('click', function() {
			app.helper.showProgress();

			var form = jQuery(form);
			var formData = form.serializeFormData();  
			formData['module'] = 'CPMauticIntegration';
			formData['action'] = 'MauticAjax';
			formData['mode'] = 'checkConnection';
			formData['username'] = jQuery('[name="username"]').val();
			formData['password'] = jQuery('[name="password"]').val();
			formData['change_password'] = jQuery('[name="change_password"]').val();
			formData['api_url'] = jQuery('[name="api_url"]').val();

			app.request.post({'data':formData}).then(
				function (error,data) {
					app.helper.hideProgress();

					if (error || !data.success) {
						app.helper.showErrorNotification({message: data.message});
						return;
					}

					app.helper.showSuccessNotification({message: data.message});
					app.helper.hideModal();
				}
			);
		})

		form.on('click', '.close-group', function() {
			jQuery(this).closest('.form-group').remove();
		})

		form.find('.add-mapping').on('click', function() {
			var clone = jQuery(this).closest('.form-group-footer').parent().find('.form-group').eq(0).clone();
			jQuery(clone).find('span').remove();
			jQuery(clone).find('select').attr('style', 'min-width:200px');
			jQuery(clone).find('select').val('');
			jQuery(clone).find('select').select2();
			jQuery(clone).find('select').removeClass('required');
			jQuery(clone).find('select').addClass('no-required');
			jQuery(clone).find('a').removeClass('hide');
			jQuery(clone).removeClass('hide');

			jQuery(clone).insertBefore(jQuery(this).closest('.form-group-footer'));
			jQuery('<br/>').insertBefore(jQuery(this).closest('.form-group-footer'));
		})

		form.find('.block-checkbox').on('click', function(e) {
			var _this = jQuery(this);
			var targetModule = _this.find('input[type="checkbox"]').val();

			setTimeout(function() {
				if (_this.hasClass('collapsed')) {
					_this.find('input[type="checkbox"]').attr('checked', false);

					if (targetModule == 'leads') {
						jQuery('#mapping-stage-leads').addClass('hide');
						jQuery('#block-mapping-stage-leads').addClass('hide');
					}
					
					if (targetModule == 'contacts') {
						jQuery('#mapping-stage-quotes').addClass('hide');
						jQuery('#block-mapping-stage-quotes').addClass('hide');
						
						jQuery('#mapping-stage-potentials').addClass('hide');
						jQuery('#block-mapping-stage-potentials').addClass('hide');
						
						jQuery('#mapping-stage-salesorder').addClass('hide');
						jQuery('#block-mapping-stage-salesorder').addClass('hide');
						
						jQuery('#mapping-stage-salesorder').addClass('hide');
						jQuery('#block-mapping-stage-salesorder').addClass('hide');
						
						jQuery('#mapping-stage-servicecontracts').addClass('hide');
						jQuery('#block-mapping-stage-servicecontracts').addClass('hide');
					}
				}
				else {
					_this.find('input[type="checkbox"]').attr('checked', true);

					if (targetModule == 'leads') {
						jQuery('#mapping-stage-leads').removeClass('hide');
						jQuery('#block-mapping-stage-leads').removeClass('hide');
					}
					
					if (targetModule == 'contacts') {
						jQuery('#mapping-stage-quotes').removeClass('hide');
						jQuery('#block-mapping-stage-quotes').removeClass('hide');
						
						jQuery('#mapping-stage-potentials').removeClass('hide');
						jQuery('#block-mapping-stage-potentials').removeClass('hide');
						
						jQuery('#mapping-stage-salesorder').removeClass('hide');
						jQuery('#block-mapping-stage-salesorder').removeClass('hide');
						
						jQuery('#mapping-stage-salesorder').removeClass('hide');
						jQuery('#block-mapping-stage-salesorder').removeClass('hide');
						
						jQuery('#mapping-stage-servicecontracts').removeClass('hide');
						jQuery('#block-mapping-stage-servicecontracts').removeClass('hide');
					}
				}
			}, 10);
		})
    }
});