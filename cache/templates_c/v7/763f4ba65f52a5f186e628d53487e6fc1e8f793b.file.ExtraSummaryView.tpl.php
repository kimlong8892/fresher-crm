<?php /* Smarty version Smarty-3.1.7, created on 2020-12-30 11:00:19
         compiled from "modules/Accounts/tpls/ExtraSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331995705febed30822577-39595343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '763f4ba65f52a5f186e628d53487e6fc1e8f793b' => 
    array (
      0 => 'modules/Accounts/tpls/ExtraSummaryView.tpl',
      1 => 1609300782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331995705febed30822577-39595343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5febed3082446',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'COUNT_EMAIL_1' => 0,
    'COUNT_EMAIL_2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5febed3082446')) {function content_5febed3082446($_smarty_tpl) {?><div class="summaryView"><div class="summaryViewHeader" style="margin-bottom: 15px;"><h4 class="display-inline-block"><?php echo vtranslate('LBL_KEY_METRICS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></div><div class="summaryViewFields"><div class="row textAlignCenter roundedCorners"><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small"><?php echo vtranslate('LBL_TITLE_COUNT_EMAIL_1',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['COUNT_EMAIL_1']->value;?>
</label></div></div></div><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small"><?php echo vtranslate('LBL_TITLE_COUNT_EMAIL_2',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['COUNT_EMAIL_2']->value;?>
</label></div></div></div><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small">CV trễ hạn</label></div><div><label class="font-x-x-large">12</label></div></div></div><div class="col-lg-3"><div class="well" style="min-height: 125px; padding-left: 0px; padding-right: 0px;"><div><label class="font-x-small">CV đã xong</label></div><div><label class="font-x-x-large">2</label></div></div></div></div></div></div><?php }} ?>