<?php /* Smarty version Smarty-3.1.7, created on 2021-01-06 08:35:15
         compiled from "modules/PBXManager/tpls/PhoneSelectorTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9608197725ff513d33dd375-73820605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8439be6bd6028ab32661540447ede571684c3b42' => 
    array (
      0 => 'modules/PBXManager/tpls/PhoneSelectorTemplate.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9608197725ff513d33dd375-73820605',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ff513d33ea98',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff513d33ea98')) {function content_5ff513d33ea98($_smarty_tpl) {?>

<div id="phone-selector-template" data-title="<?php echo vtranslate('LBL_PLANNED_CALL_WIDGET_PHONE_SELECTOR_TITLE','PBXManager');?>
" data-hint="<?php echo vtranslate('LBL_PLANNED_CALL_WIDGET_PHONE_SELECTOR_HINT','PBXManager');?>
" class="hide">
    <table style="width: 100%">
        <thead>
            <th><?php echo vtranslate('LBL_WIDGET_FIELD','PBXManager');?>
</th>
            <th><?php echo vtranslate('LBL_WIDGET_PHONE_NUMBER','PBXManager');?>
</th>
            <th width="100" class="text-center"><?php echo vtranslate('LBL_ACTIONS','Events');?>
</th>
        </thead>
        <tbody></tbody>
    </table>
</div><?php }} ?>