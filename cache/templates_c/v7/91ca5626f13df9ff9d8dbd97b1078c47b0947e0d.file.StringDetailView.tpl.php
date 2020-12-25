<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:37:16
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/StringDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:815576465fe301bc7d8967-34596896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91ca5626f13df9ff9d8dbd97b1078c47b0947e0d' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/StringDetailView.tpl',
      1 => 1593395090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '815576465fe301bc7d8967-34596896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'PICKLIST_COLOR' => 0,
    'RECORD' => 0,
    'CURRENT_USER_MODEL' => 0,
    'BASE_CURRENCY_SYMBOL' => 0,
    'CURRENCY_INFO' => 0,
    'SYMBOL_PLACEMENT' => 0,
    'CURRENCY_SYMBOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe301bc85a8a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe301bc85a8a')) {function content_5fe301bc85a8a($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='picklist'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Users'){?>
    <?php $_smarty_tpl->tpl_vars['PICKLIST_COLOR'] = new Smarty_variable(Settings_Picklist_Module_Model::getPicklistColorByValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')), null, 0);?>  
    <span <?php if (!empty($_smarty_tpl->tpl_vars['PICKLIST_COLOR']->value)){?> class="picklist-color" style="background-color: <?php echo $_smarty_tpl->tpl_vars['PICKLIST_COLOR']->value;?>
; line-height:15px; color: <?php echo Settings_Picklist_Module_Model::getTextColor($_smarty_tpl->tpl_vars['PICKLIST_COLOR']->value);?>
;" <?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

    </span>
<?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='multipicklist'&&$_smarty_tpl->tpl_vars['MODULE']->value!='Users'){?>
    <?php echo $_smarty_tpl->getSubTemplate ("layouts/v7/modules/Vtiger/uitypes/MultiPicklistFormatedValue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RAW_VALUES_STRING'=>$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName())), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType()=='currency'){?>
    <?php $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL'] = new Smarty_variable(Users_Record_Model::getCurrentUserModel(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_symbol_placement'), null, 0);?>
    <?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='72')&&($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='unit_price')){?>
        <?php $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL'] = new Smarty_variable($_smarty_tpl->tpl_vars['BASE_CURRENCY_SYMBOL']->value, null, 0);?>
    <?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='71'){?>
        <?php $_smarty_tpl->tpl_vars['CURRENCY_INFO'] = new Smarty_variable(getCurrencySymbolandCRate($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_id')), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENCY_INFO']->value['symbol'], null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value=='$1.0'){?>
        <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
&nbsp;<span class="currencyValue"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
</span>
    <?php }else{ ?>
        <span class="currencyValue"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
</span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>

    <?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name')=='signature'){?>
	<?php echo decode_html($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value));?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

<?php }?>
<?php }} ?>