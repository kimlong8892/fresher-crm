<?php /* Smarty version Smarty-3.1.7, created on 2021-01-07 11:33:08
         compiled from "modules/Settings/Vtiger/tpls/SystemNotifications.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9925699015ff68f04228b56-61295930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd10aed9107361cdd860fa7f057030516f670b8f2' => 
    array (
      0 => 'modules/Settings/Vtiger/tpls/SystemNotifications.tpl',
      1 => 1609993985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9925699015ff68f04228b56-61295930',
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
  'unifunc' => 'content_5ff68f04354af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff68f04354af')) {function content_5ff68f04354af($_smarty_tpl) {?><form name="settings">
    <div class="editViewBody">
        <div class="editViewContents">
            <div class="fieldBlockContainer">
                <h4 class="fieldBlockHeader"><?php echo vtranslate('LBL_CONFIG_SYSTEM_NOTIFICAITON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4>
                <hr/>
                <table class="configDetails" style="width: 100%">
                    <tbody>
                    <tr>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_NOTIFY_CONFIG_DUEDAY_COMMING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:
                        </td>
                        <td class="fieldValue alignTop">
                            <select class="inputElement select2" name="days_to_remind_comming_activities"
                                    value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value->days_to_remind_comming_activities;?>
">
                                <option></option>
                                <option value="5" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->days_to_remind_comming_activities=='5'){?>selected<?php }?>>5
                                    <?php echo vtranslate('LBL_REMIND_COMMING_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="10" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->days_to_remind_comming_activities=='10'){?>selected<?php }?>>
                                    10
                                    <?php echo vtranslate('LBL_REMIND_COMMING_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="15" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->days_to_remind_comming_activities=='15'){?>selected<?php }?>>
                                    15
                                    <?php echo vtranslate('LBL_REMIND_COMMING_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="30" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->days_to_remind_comming_activities=='30'){?>selected<?php }?>>
                                    30
                                    <?php echo vtranslate('LBL_REMIND_COMMING_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="45" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->days_to_remind_comming_activities=='45'){?>selected<?php }?>>
                                    45
                                    <?php echo vtranslate('LBL_REMIND_COMMING_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="60" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->days_to_remind_comming_activities=='60'){?>selected<?php }?>>
                                    45
                                    <?php echo vtranslate('LBL_REMIND_COMMING_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                            </select>
                        </td>
                        <td class="fieldLabel alignTop"><?php echo vtranslate('LBL_REFRESH_TASK_NOTIFY_INTERVAL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:
                        </td>
                        <td class="fieldValue alignTop">
                            <select class="inputElement select2" name="minutes_to_notify_activitites_before_start_time"
                                    value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time;?>
">
                                <option></option>
                                <option value="5"
                                        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='5'){?>selected<?php }?>>
                                    5
                                    <?php echo vtranslate('LBL_REMIND_COMMING_MINUTES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="10"
                                        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='10'){?>selected<?php }?>>
                                    10
                                    <?php echo vtranslate('LBL_REMIND_COMMING_MINUTES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="15"
                                        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='15'){?>selected<?php }?>>
                                    15
                                    <?php echo vtranslate('LBL_REMIND_COMMING_MINUTES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="30"
                                        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='30'){?>selected<?php }?>>
                                    30
                                    <?php echo vtranslate('LBL_REMIND_COMMING_MINUTES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="45"
                                        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='45'){?>selected<?php }?>>
                                    45
                                    <?php echo vtranslate('LBL_REMIND_COMMING_MINUTES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="60"
                                        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='60'){?>selected<?php }?>>
                                    1
                                    <?php echo vtranslate('LBL_REMIND_COMMING_HOUR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="120" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='120'){?>selected<?php }?>>2 <?php echo vtranslate('LBL_REMIND_COMMING_HOURS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                                <option value="1440" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value->minutes_to_notify_activitites_before_start_time=='1440'){?>selected<?php }?>>1 <?php echo vtranslate('LBL_REMIND_COMMING_DAY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option>
                            </select>
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