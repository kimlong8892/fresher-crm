<?php /* Smarty version Smarty-3.1.7, created on 2021-01-15 10:49:44
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Inventory/partials/lineItemTabContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54546833600110d88e78e9-52953845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b08be78f110122066ed1f9e472aee17ec0f62fe' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Inventory/partials/lineItemTabContent.tpl',
      1 => 1593395090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54546833600110d88e78e9-52953845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_PRODUCTS_SECTION' => 0,
    'template' => 0,
    'RELATED_PRODUCTS' => 0,
    'section_no' => 0,
    'create' => 0,
    'PRODUCT_ACTIVE' => 0,
    'SERVICE_ACTIVE' => 0,
    'MODULE' => 0,
    'IMAGE_EDITABLE' => 0,
    'LINEITEM_FIELDS' => 0,
    'PRODUCT_EDITABLE' => 0,
    'PURCHASE_COST_EDITABLE' => 0,
    'LIST_PRICE_EDITABLE' => 0,
    'MARGIN_EDITABLE' => 0,
    'row_no' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600110d89dd02',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600110d89dd02')) {function content_600110d89dd02($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["RELATED_PRODUCTS_SECTION"] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS_SECTION']->value, null, 0);?><table class="table table-bordered "><?php if ($_smarty_tpl->tpl_vars['template']->value==1){?> <tr id="row0" class="hide lineItemCloneCopy" data-row-num="0"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsContent.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('row_no'=>0,'data'=>array(),'IGNORE_UI_REGISTRATION'=>true), 0);?>
</tr><!--Added by Kelvin Thang -- OnlineCRM -- 2018-09-10 --><tr id="section0" class="hide lineItemsSectionCloneCopy" data-section-num="0"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsSectionContent.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('section_no'=>0,'data'=>array(),'IGNORE_UI_REGISTRATION'=>true), 0);?>
</tr><?php }?><?php if (count($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value)!=1&&$_smarty_tpl->tpl_vars['section_no']->value!=0){?><tr id="section<?php echo $_smarty_tpl->tpl_vars['section_no']->value;?>
"  class="lineItemsSection  <?php if (count($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value)==0){?>hide<?php }?>" data-section-num="<?php echo $_smarty_tpl->tpl_vars['section_no']->value;?>
"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsSectionContent.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('section_no'=>$_smarty_tpl->tpl_vars['section_no']->value,'sectionNumTabName'=>array_column($_smarty_tpl->tpl_vars['RELATED_PRODUCTS_SECTION']->value,'sectionNumTabName'),'IGNORE_UI_REGISTRATION'=>true), 0);?>
</tr><?php }?><?php if (((count($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value)==0&&$_smarty_tpl->tpl_vars['create']->value==1)||count($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value)==1)&&($_smarty_tpl->tpl_vars['template']->value!=1)&&($_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value=='true'||$_smarty_tpl->tpl_vars['SERVICE_ACTIVE']->value=='true')){?><tr id="section1"  class="lineItemsSection hide" data-section-num="1"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsSectionContent.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('section_no'=>1,'sectionNumTabName'=>array(),'IGNORE_UI_REGISTRATION'=>true), 0);?>
</tr><?php }?><tr class="lineItemHeaders"><td width="10%"><strong><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php if ($_smarty_tpl->tpl_vars['IMAGE_EDITABLE']->value){?><td width="10%"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['image']->get('label');?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate($_tmp1,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><?php if ($_smarty_tpl->tpl_vars['PRODUCT_EDITABLE']->value){?><td width="25%"><span class="redColor">*</span><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['productid']->get('label');?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_tmp2,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><td width="8%"><strong><?php echo vtranslate('LBL_QTY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php if ($_smarty_tpl->tpl_vars['PURCHASE_COST_EDITABLE']->value){?><td width="10%"><strong class="pull-right"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['purchase_cost']->get('label');?>
<?php $_tmp3=ob_get_clean();?><?php echo vtranslate($_tmp3,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><?php if ($_smarty_tpl->tpl_vars['LIST_PRICE_EDITABLE']->value){?><td width="15%"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['listprice']->get('label');?>
<?php $_tmp4=ob_get_clean();?><?php echo vtranslate($_tmp4,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td> <td width="10%"><strong class="pull-right"><?php echo vtranslate('LBL_TOTAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?> <?php if ($_smarty_tpl->tpl_vars['MARGIN_EDITABLE']->value&&$_smarty_tpl->tpl_vars['PURCHASE_COST_EDITABLE']->value){?><td width="10%"><strong class="pull-right"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LINEITEM_FIELDS']->value['margin']->get('label');?>
<?php $_tmp5=ob_get_clean();?><?php echo vtranslate($_tmp5,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?><?php if ($_smarty_tpl->tpl_vars['LIST_PRICE_EDITABLE']->value){?> <td width="10%"><strong class="pull-right"><?php echo vtranslate('LBL_NET_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td><?php }?></tr><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['row_no'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_PRODUCTS_SECTION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['row_no']->value = $_smarty_tpl->tpl_vars['data']->key;
?><tr id="row<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" data-row-num="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="lineItemRow" <?php if ($_smarty_tpl->tpl_vars['data']->value["entityType".($_smarty_tpl->tpl_vars['row_no']->value)]=='Products'){?>data-quantity-in-stock=<?php echo $_smarty_tpl->tpl_vars['data']->value["qtyInStock".($_smarty_tpl->tpl_vars['row_no']->value)];?>
<?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsContent.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('row_no'=>$_smarty_tpl->tpl_vars['row_no']->value,'section_no'=>$_smarty_tpl->tpl_vars['section_no']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value), 0);?>
</tr><?php } ?><?php if (count($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value)==0&&$_smarty_tpl->tpl_vars['create']->value==1&&($_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value=='true'||$_smarty_tpl->tpl_vars['SERVICE_ACTIVE']->value=='true')){?><tr id="row1" class="lineItemRow" data-row-num="1"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/LineItemsContent.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('row_no'=>1,'section_no'=>1,'data'=>array(),'IGNORE_UI_REGISTRATION'=>false), 0);?>
</tr><?php }?><!--Added by Kelvin Thang -- OnlineCRM -- 2018-09-10 --><tr class="p-t-16"><td colspan="7"><?php if ($_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value=='true'&&$_smarty_tpl->tpl_vars['SERVICE_ACTIVE']->value=='true'){?><div class="btn-toolbar"><span class="btn-group"><button type="button" class="btn btn-default addProduct" data-module-name="Products" ><i class="fa fa-plus"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_ADD_PRODUCT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span><span class="btn-group"><button type="button" class="btn btn-default addService" data-module-name="Services" ><i class="fa fa-plus"></i>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_ADD_SERVICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span></div><?php }elseif($_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value=='true'){?><div class="btn-group"><button type="button" class="btn btn-default addProduct" data-module-name="Products"><i class="fa fa-plus"></i><strong>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_PRODUCT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }elseif($_smarty_tpl->tpl_vars['SERVICE_ACTIVE']->value=='true'){?><div class="btn-group"><button type="button" class="btn btn-default addService" data-module-name="Services"><i class="fa fa-plus"></i><strong>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_SERVICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }?></td></tr></table>

<?php }} ?>