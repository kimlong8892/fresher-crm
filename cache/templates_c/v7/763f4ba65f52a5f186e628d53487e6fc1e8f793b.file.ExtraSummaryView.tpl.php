<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 11:47:02
         compiled from "modules/Accounts/tpls/ExtraSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:876642087600f9ec685a039-06715954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '763f4ba65f52a5f186e628d53487e6fc1e8f793b' => 
    array (
      0 => 'modules/Accounts/tpls/ExtraSummaryView.tpl',
      1 => 1611199354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '876642087600f9ec685a039-06715954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'COUNT_EMAIL' => 0,
    'COUNT_DOCS' => 0,
    'COUNT_SP' => 0,
    'COUNT_CALENDAR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f9ec6871ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f9ec6871ab')) {function content_600f9ec6871ab($_smarty_tpl) {?><div class="summaryView"><div class="summaryViewHeader" style="margin-bottom: 15px;"><h4 class="display-inline-block"><?php echo vtranslate('LBL_KEY_METRICS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></div><div class="summaryViewFields"><div class="row textAlignCenter roundedCorners"><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small"><?php echo vtranslate('LBL_TITLE_COUNT_EMAIL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['COUNT_EMAIL']->value;?>
</label></div></div></div><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small"><?php echo vtranslate('LBL_TITLE_COUNT_DOCS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['COUNT_DOCS']->value;?>
</label></div></div></div><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small"><?php echo vtranslate('LBL_TITLE_COUNT_SP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['COUNT_SP']->value;?>
</label></div></div></div><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small"><?php echo vtranslate('LBL_TITLE_COUNT_CALENDAR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['COUNT_CALENDAR']->value;?>
</label></div></div></div></div></div></div><?php }} ?>