<?php /* Smarty version Smarty-3.1.7, created on 2021-01-15 10:49:44
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Inventory/partials/LineItemsSectionContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:957177716600110d89e6ad3-65947952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '637edca862f1b02954a025e5789e367022a0a5dc' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Inventory/partials/LineItemsSectionContent.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '957177716600110d89e6ad3-65947952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'section_no' => 0,
    'sectionNumTabName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600110d89f511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600110d89f511')) {function content_600110d89f511($_smarty_tpl) {?><!--Added by Kelvin Thang -- OnlineCRM -- 2018-09-10 -->
<td colspan="7"><strong><span style="margin-right: 5px;"><?php echo vtranslate('LBL_SECTION_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></strong><input type="text" class="inputElement string nameField" name="section_name<?php echo $_smarty_tpl->tpl_vars['section_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['sectionNumTabName']->value[0];?>
" /><i class="fa fa-trash deleteSection cursorPointer pull-right" title="Delete"> </i></td><?php }} ?>