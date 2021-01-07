<?php /* Smarty version Smarty-3.1.7, created on 2021-01-07 10:55:46
         compiled from "modules/Settings/Vtiger/tpls/UserNotifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20014731665ff68642b49e91-99099028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60dc9d4c4ec9d1e8a245545482eadb67f7639584' => 
    array (
      0 => 'modules/Settings/Vtiger/tpls/UserNotifications.tpl',
      1 => 1609991743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20014731665ff68642b49e91-99099028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff68642bf936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff68642bf936')) {function content_5ff68642bf936($_smarty_tpl) {?><form autocomplete="off" name="settings">
    <div class="editViewBody">
        <div class="editViewContents">
            <div class="fieldBlockContainer">
                <h4 class="fieldBlockHeader"><?php echo vtranslate('LBL_CONFIG_NOTIFICAITON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4>
                <hr/>
                <table class="configDetails" style="width: 100%">
                    <tbody>
                    <tr>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_RECEIVE_NOTIFICATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td>
                        <td class="fieldValue alignTop"><input type="checkbox" class="inputElement"
                                                               name="receive_notifications"
                                                               <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->receive_notifications==1){?>checked<?php }?>/>
                        </td>
                        <td class="fieldLabel alignTop"></td>
                        <td class="fieldValue alignTop"></td>
                    </tr>
                    <tr class="showOnAccept" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->receive_notifications!=1){?>style="display: none"<?php }?>>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_NOTIFY_METHOD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td>
                        <td class="fieldValue alignTop">
                            <select multiple name="receive_notifications_method" class="inputElement select2">
                                <option value="popup" <?php if (in_array('popup',$_smarty_tpl->tpl_vars['CONFIG']->value->receive_notifications_method)){?>selected<?php }?>><?php echo vtranslate('LBL_NOTIFY_BY_POPUP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="app" <?php if (in_array('app',$_smarty_tpl->tpl_vars['CONFIG']->value->receive_notifications_method)){?>selected<?php }?>><?php echo vtranslate('LBL_NOTIFY_BY_APP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="showOnAccept" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->receive_notifications!=1){?>style="display: none"<?php }?>>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_NOTIFY_ASSIGN_TASK',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td>
                        <td class="fieldValue alignTop"><input type="checkbox" class="inputElement"
                                                               name="receive_assignment_notifications"
                                                               <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->receive_assignment_notifications==1){?>checked<?php }?>/>
                        </td>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_NOTIFY_UPDATE_PROFILE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td>
                        <td class="fieldValue alignTop"><input type="checkbox" class="inputElement"
                                                               name="receive_record_update_notifications"
                                                               <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->receive_record_update_notifications==1){?>checked<?php }?>/>
                        </td>
                    </tr>
                    <tr class="showOnAccept" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->receive_notifications!=1){?>style="display: none"<?php }?>>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_NOTIFY_OVERDUE_TASK',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td>
                        <td class="fieldValue alignTop"><input type="checkbox" class="inputElement"
                                                               name="show_activity_reminders"
                                                               <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->show_activity_reminders==1){?>checked<?php }?>/>
                        </td>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_NOTIFY_CUSTOMER_BIRTHDAY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</td>
                        <td class="fieldValue alignTop"><input type="checkbox" class="inputElement"
                                                               name="show_customer_birthday_reminders"
                                                               <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->show_customer_birthday_reminders==1){?>checked<?php }?>/>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal-overlay-footer clearfix">
        <div class="row clear-fix">
            <div class="textAlignCenter col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-success saveButton"><?php echo vtranslate('LBL_SAVE');?>
</button>
            </div>
        </div>
    </div>
</form><?php }} ?>