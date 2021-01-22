<?php /* Smarty version Smarty-3.1.7, created on 2021-01-22 15:29:56
         compiled from "modules/Reports/tpls/CustomReportSummaryByCustomer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1237880572600a7e3d6f8956-01621004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95b0692f325a045e91f3cfc5481a5a25a0d926bc' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportSummaryByCustomer.tpl',
      1 => 1611304193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1237880572600a7e3d6f8956-01621004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600a7e3d78c38',
  'variables' => 
  array (
    'PRINT' => 0,
    'REPORT_NAME' => 0,
    'START_DATE' => 0,
    'END_DATE' => 0,
    'IS_EMPTY_REPORT_RESULT' => 0,
    'REPORT_RESULT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600a7e3d78c38')) {function content_600a7e3d78c38($_smarty_tpl) {?><style>form#detailView{display: none !important;}</style><script src="<?php echo vresource_url('modules/Reports/resources/SummaryByCustomer.js');?>
"></script><div <?php if ($_smarty_tpl->tpl_vars['PRINT']->value){?>style="width:80%; margin:auto"<?php }?>><h2 style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['REPORT_NAME']->value;?>
</h2><form id="form-filter-date" action="" method="post"><div class="form-group" style="display: flex;"><div class="input-group inputElement col-sm-4" style="width: 30%;"><input type="text" name="start_date"data-fieldtype="date"class="form-control datePicker"autocomplete="off"placeholder="<?php echo vtranslate('PLACEHOLDER_START_DATE_BEST_SELLERS','Reports');?>
"value="<?php if (!empty($_smarty_tpl->tpl_vars['START_DATE']->value)){?><?php echo $_smarty_tpl->tpl_vars['START_DATE']->value;?>
<?php }?>"data-rule-required="true"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div><div class="input-group inputElement col-sm-4" style="width: 30%; margin-left: 5px;"><input type="text" name="end_date"data-fieldtype="date"class="form-control datePicker"autocomplete="off"placeholder="<?php echo vtranslate('PLACEHOLDER_END_DATE_BEST_SELLERS','Reports');?>
"value="<?php if (!empty($_smarty_tpl->tpl_vars['END_DATE']->value)){?><?php echo $_smarty_tpl->tpl_vars['END_DATE']->value;?>
<?php }?>"data-rule-required="true"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div><div class="col-sm-4" style="width: 15%"><button class="btn btn-primary"><?php echo vtranslate('LBL_BTN_REPORT','Reports');?>
</button></div></div></form><?php if ($_smarty_tpl->tpl_vars['IS_EMPTY_REPORT_RESULT']->value){?><h1 style="color: #cb2134; text-align: center;"><?php echo vtranslate('LBL_RESULT_EMPTY','Reports');?>
</h1><?php }elseif(!empty($_smarty_tpl->tpl_vars['REPORT_RESULT']->value)){?><div style="text-align: right;"><button class="btn btn-primary"id="btn-export-excel"name="export_excel"type="button"style="margin-bottom: 10px;"><?php echo vtranslate('LBL_EXPORT_EXCEL','Reports');?>
</button></div><?php }?><table <?php if (empty($_smarty_tpl->tpl_vars['REPORT_RESULT']->value)){?>style="display: none;" <?php }?> cellpadding="5" cellpadding="0" class="<?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>table table-bordered<?php }else{ ?>printReport reportPrintData<?php }?>"><thead><tr class="blockHeader" style="background: blue; color: white;"><th style="text-align: left !important;"><?php echo vtranslate('LBL_SERIAL_NO','Products');?>
</th><th style="text-align: left !important;"><?php echo vtranslate('LBL_PRODUCT_NAME','Products');?>
</th><th style="text-align: right !important;"><?php echo vtranslate('LBL_DATE_SELL','Products');?>
</th><th style="text-align: right !important;"><?php echo vtranslate('LBL_MONEY_SELL','Products');?>
</th></tr></thead><tbody><?php echo $_smarty_tpl->tpl_vars['REPORT_RESULT']->value;?>
</tbody></table></div><?php }} ?>