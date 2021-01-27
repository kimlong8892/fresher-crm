<?php /* Smarty version Smarty-3.1.7, created on 2021-01-26 10:09:36
         compiled from "modules/Vtiger/tpls/CustomOwnerFieldListView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2010200976600f87f0aeeb96-77076116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c2c3983bc9b83bc3f447df5a1d5232edb7e9e3' => 
    array (
      0 => 'modules/Vtiger/tpls/CustomOwnerFieldListView.tpl',
      1 => 1608711078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2010200976600f87f0aeeb96-77076116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'OWNER_COUNT' => 0,
    'FIRST_OWNER' => 0,
    'OWNERS' => 0,
    'type' => 0,
    'owners' => 0,
    'owner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600f87f0b2585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600f87f0b2585')) {function content_600f87f0b2585($_smarty_tpl) {?>

<span class="owners custom-popover-wrapper"><?php if ($_smarty_tpl->tpl_vars['OWNER_COUNT']->value==0){?><a class="no-owner" href="javascript: void(0)"></a><?php }elseif($_smarty_tpl->tpl_vars['OWNER_COUNT']->value==1){?><span class="stand-owner" href="javascript: void(0)"><a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['FIRST_OWNER']->value['type'];?>
&parent=Settings&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['FIRST_OWNER']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['FIRST_OWNER']->value['text'];?>
</a></span><?php }else{ ?><a class="stand-owner-plus custom-popover" title="<?php echo vtranslate('Assigned To');?>
" data-title="<?php echo vtranslate('Assigned To');?>
"><span class="stand-owner-plus-text"><?php echo $_smarty_tpl->tpl_vars['FIRST_OWNER']->value['text'];?>
</span><span class="stand-owner-plus-icon"> +<?php echo $_smarty_tpl->tpl_vars['OWNER_COUNT']->value-1;?>
</span></a><div class="custom-popover-content" style="display: none"><?php  $_smarty_tpl->tpl_vars['owners'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['owners']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OWNERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['owners']->key => $_smarty_tpl->tpl_vars['owners']->value){
$_smarty_tpl->tpl_vars['owners']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['owners']->key;
?><?php if (sizeof('owners')>0){?><p class="owners-detail_title"><?php echo vtranslate(("SINGLE_").($_smarty_tpl->tpl_vars['type']->value));?>
:</p><ul class="owners-detail_owners"><?php  $_smarty_tpl->tpl_vars['owner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['owner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['owners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['owner']->key => $_smarty_tpl->tpl_vars['owner']->value){
$_smarty_tpl->tpl_vars['owner']->_loop = true;
?><li class="owners-detail_owner"><a target="_blank" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&parent=Settings&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['owner']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['owner']->value['text'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['owner']->value['email']!=null){?>(<?php echo $_smarty_tpl->tpl_vars['owner']->value['email'];?>
)<?php }?></li><?php } ?></ul><?php }?><?php } ?></div><?php }?></span><?php }} ?>