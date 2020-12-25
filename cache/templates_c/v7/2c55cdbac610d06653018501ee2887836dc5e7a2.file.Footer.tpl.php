<?php /* Smarty version Smarty-3.1.7, created on 2020-12-23 15:33:12
         compiled from "/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1954661345fe300c82e4df7-41771648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c55cdbac610d06653018501ee2887836dc5e7a2' => 
    array (
      0 => '/var/www/html/crm-fresher/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1593395090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954661345fe300c82e4df7-41771648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CHECK_ACTION' => 0,
    'LANGUAGE_STRINGS' => 0,
    'CURRENT_USER_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fe300c83210d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe300c83210d')) {function content_5fe300c83210d($_smarty_tpl) {?>
<!-- Modified By Kelvin Thang -- Date: 2018-06-27 -->
<style>.app-footer p {position: fixed;left: 0;bottom: 0;background: #FBFBFB;margin-bottom: 0;padding: 4px 0;border-top: 1px solid #DDDDDD;}</style>
<footer class="app-footer">
	<p>
		<a href="http://www.cloudpro.vn/" target="_blank">
			<?php if ($_smarty_tpl->tpl_vars['CHECK_ACTION']->value=='Login'){?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 echo $GLOBALS['slogans']['login']; <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 echo $GLOBALS['slogans']['default']; <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</a>
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value&&$_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('id')){?> 
    <?php echo $_smarty_tpl->getSubTemplate ("modules/PBXManager/tpls/CallPopup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    

    
	<div style="display: none">
        <!-- Small-Size Modal Template -->
        <div class="modal-dialog modal-sm modal-content modal-template-sm">
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <form class="form-horizontal" method="POST">
                <div class="modal-body margin10"></div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-success" type="submit">OK</button>
                        <a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL','Vtiger');?>
</a>
                    </center>
                </div>
            </form>
		</div>

        <!-- Medium-Size Modal Template -->
		<div class="modal-dialog modal-md modal-content modal-template-md">
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<form class="form-horizontal" method="POST">
                <div class="modal-body margin10"></div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-success" type="submit">OK</button>
                        <a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL','Vtiger');?>
</a>
                    </center>
                </div>
            </form>
		</div>

		
		<!-- Large-Size Modal Template -->
		<div class="modal-dialog modal-lg modal-content modal-template-lg">
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<form class="form-horizontal" method="POST">
                <div class="modal-body margin10"></div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-success" type="submit">OK</button>
                        <a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL','Vtiger');?>
</a>
                    </center>
                </div>
            </form>
		</div>
		
	</div>
	
<?php }?>

</body>

</html>
<?php }} ?>