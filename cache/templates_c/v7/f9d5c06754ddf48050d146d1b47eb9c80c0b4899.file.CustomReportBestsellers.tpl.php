<?php /* Smarty version Smarty-3.1.7, created on 2021-01-22 10:42:21
         compiled from "modules/Reports/tpls/CustomReportBestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206635621060024475ea30e9-06947396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d5c06754ddf48050d146d1b47eb9c80c0b4899' => 
    array (
      0 => 'modules/Reports/tpls/CustomReportBestsellers.tpl',
      1 => 1611286938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206635621060024475ea30e9-06947396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60024475efa16',
  'variables' => 
  array (
    'PRINT' => 0,
    'REPORT_NAME' => 0,
    'IS_EMPTY_REPORT_RESULT' => 0,
    'REPORT_RESULT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60024475efa16')) {function content_60024475efa16($_smarty_tpl) {?><style>form#detailView{display: none !important;}</style><script src="<?php echo vresource_url('modules/Reports/resources/BestsellersHandler.js');?>
"></script><div <?php if ($_smarty_tpl->tpl_vars['PRINT']->value){?>style="width:80%; margin:auto"<?php }?>><h2 style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['REPORT_NAME']->value;?>
</h2><form id="form-filter-date" action="" method="post"><div class="form-group" style="display: flex;"><div class="input-group inputElement col-sm-4" style="width: 30%;"><input type="text" name="start_date"data-fieldtype="date"class="form-control datePicker"autocomplete="off"placeholder="<?php echo vtranslate('PLACEHOLDER_START_DATE_BEST_SELLERS','Reports');?>
"data-rule-required="true"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div><div class="input-group inputElement col-sm-4" style="width: 30%; margin-left: 5px;"><input type="text" name="end_date"data-fieldtype="date"class="form-control datePicker"autocomplete="off"placeholder="<?php echo vtranslate('PLACEHOLDER_END_DATE_BEST_SELLERS','Reports');?>
"data-rule-required="true"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span></div><div class="col-sm-4" style="width: 15%"><button class="btn btn-primary"><?php echo vtranslate('LBL_BTN_REPORT','Reports');?>
</button></div></div></form><?php if ($_smarty_tpl->tpl_vars['IS_EMPTY_REPORT_RESULT']->value){?><h1 style="color: #cb2134; text-align: center;"><?php echo vtranslate('LBL_RESULT_EMPTY','Reports');?>
</h1><?php }?><table <?php if (empty($_smarty_tpl->tpl_vars['REPORT_RESULT']->value)){?>style="display: none;" <?php }?> cellpadding="5" cellpadding="0" class="<?php if (!$_smarty_tpl->tpl_vars['PRINT']->value){?>table table-bordered<?php }else{ ?>printReport reportPrintData<?php }?>"><thead><tr class="blockHeader" style="background: blue; color: white;"><th><?php echo vtranslate('LBL_PRODUCT_CATEGORY_NAME','Reports');?>
</th><th><?php echo vtranslate('LBL_TOTAL_AMOUNT_NAME','Reports');?>
</th><th><?php echo vtranslate('LBL_TOTAL_MONEY_NAME','Reports');?>
</th></tr></thead><tbody><?php echo $_smarty_tpl->tpl_vars['REPORT_RESULT']->value;?>
</tbody></table></div><?php }} ?>