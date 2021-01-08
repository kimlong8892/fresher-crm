<?php /* Smarty version Smarty-3.1.7, created on 2020-12-25 17:11:24
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/TranslationEditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5949753305fe5bacc67ec34-89083246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '739df28ff8b84f817c4d20bdad017dff3bd7ba90' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Settings/LayoutEditor/TranslationEditor.tpl',
      1 => 1585899536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5949753305fe5bacc67ec34-89083246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'UI_ENGLISH_STRINGS' => 0,
    'LABEL_KEY' => 0,
    'LABEL_DISPLAY' => 0,
    'UI_VIETNAMESE_STRINGS' => 0,
    'JS_ENGLISH_STRINGS' => 0,
    'JS_VIETNAMESE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe5bacc70a0d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe5bacc70a0d')) {function content_5fe5bacc70a0d($_smarty_tpl) {?>
<form id="translationEditorForm" class="form-horizontal"><div id="actions" class="row" style="padding: 10px 20px"><button type="button" class="btn btn-primary btnSaveTranslation" data-lang="all"><i class="fa fa-save"></i>&nbsp; <?php echo vtranslate('LBL_TRANSLATION_EDITOR_SAVE_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&nbsp;<button type="button" class="btn btn-primary btnSaveTranslation" data-lang="en_us"><i class="fa fa-save"></i>&nbsp; <?php echo vtranslate('LBL_TRANSLATION_EDITOR_SAVE_ENGLISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&nbsp;<button type="button" class="btn btn-primary btnSaveTranslation" data-lang="vn_vn"><i class="fa fa-save"></i>&nbsp; <?php echo vtranslate('LBL_TRANSLATION_EDITOR_SAVE_VIETNAMESE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><div class="row" style="padding: 10px"><div class="col-sm-4"><strong><?php echo vtranslate('LBL_TRANSLATION_EDITOR_LABEL_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="col-sm-4"><strong><?php echo vtranslate('LBL_TRANSLATION_EDITOR_ENGLISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="col-sm-4"><strong><?php echo vtranslate('LBL_TRANSLATION_EDITOR_VIETNAMESE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div></div><div id="labelList" class="overflowVisible" style="max-height: 500px; overflow: scroll !important"><?php  $_smarty_tpl->tpl_vars['LABEL_DISPLAY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->_loop = false;
 $_smarty_tpl->tpl_vars['LABEL_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['UI_ENGLISH_STRINGS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->key => $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->value){
$_smarty_tpl->tpl_vars['LABEL_DISPLAY']->_loop = true;
 $_smarty_tpl->tpl_vars['LABEL_KEY']->value = $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->key;
?><div class="row" style="padding: 2px"><div class="col-sm-4"><span><?php echo $_smarty_tpl->tpl_vars['LABEL_KEY']->value;?>
</span></div><div class="col-sm-4"><textarea name="labels[en_us][ui][<?php echo $_smarty_tpl->tpl_vars['LABEL_KEY']->value;?>
]" class="inputElement"><?php echo $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->value;?>
</textarea></div><div class="col-sm-4"><textarea name="labels[vn_vn][ui][<?php echo $_smarty_tpl->tpl_vars['LABEL_KEY']->value;?>
]" class="inputElement"><?php echo $_smarty_tpl->tpl_vars['UI_VIETNAMESE_STRINGS']->value[$_smarty_tpl->tpl_vars['LABEL_KEY']->value];?>
</textarea></div></div><?php } ?><?php  $_smarty_tpl->tpl_vars['LABEL_DISPLAY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->_loop = false;
 $_smarty_tpl->tpl_vars['LABEL_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['JS_ENGLISH_STRINGS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->key => $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->value){
$_smarty_tpl->tpl_vars['LABEL_DISPLAY']->_loop = true;
 $_smarty_tpl->tpl_vars['LABEL_KEY']->value = $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->key;
?><div class="row" style="padding: 2px"><div class="col-sm-4"><span><?php echo $_smarty_tpl->tpl_vars['LABEL_KEY']->value;?>
</span></div><div class="col-sm-4"><textarea name="labels[en_us][js][<?php echo $_smarty_tpl->tpl_vars['LABEL_KEY']->value;?>
]" class="inputElement"><?php echo $_smarty_tpl->tpl_vars['LABEL_DISPLAY']->value;?>
</textarea></div><div class="col-sm-4"><textarea name="labels[vn_vn][js][<?php echo $_smarty_tpl->tpl_vars['LABEL_KEY']->value;?>
]" class="inputElement"><?php echo $_smarty_tpl->tpl_vars['JS_VIETNAMESE_STRINGS']->value[$_smarty_tpl->tpl_vars['LABEL_KEY']->value];?>
</textarea></div></div><?php } ?></div></form>
<?php }} ?>