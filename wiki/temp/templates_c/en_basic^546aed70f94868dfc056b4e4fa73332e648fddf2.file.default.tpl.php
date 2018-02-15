<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:03:23
         compiled from "/home/gamerammo/public_html/wiki/templates/feedback/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19686758405a7f7a3b5798d0-12210600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546aed70f94868dfc056b4e4fa73332e648fddf2' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/feedback/default.tpl',
      1 => 1474669646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19686758405a7f7a3b5798d0-12210600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikifeedback' => 0,
    'tpl' => 0,
    'fb' => 0,
    'item' => 0,
    'mes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7a3b584cf8_98516614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7a3b584cf8_98516614')) {function content_5a7f7a3b584cf8_98516614($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.remarksbox.php';
?>

<div id="tikifeedback">
	<?php if (!empty($_smarty_tpl->tpl_vars['tikifeedback']->value)) {?>
		<?php  $_smarty_tpl->tpl_vars['fb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fb']->_loop = false;
 $_smarty_tpl->tpl_vars['tpl'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tikifeedback']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fb']->key => $_smarty_tpl->tpl_vars['fb']->value) {
$_smarty_tpl->tpl_vars['fb']->_loop = true;
 $_smarty_tpl->tpl_vars['tpl']->value = $_smarty_tpl->tpl_vars['fb']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['tpl']->value==='default') {?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>$_smarty_tpl->tpl_vars['item']->value['type'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title'],'icon'=>$_smarty_tpl->tpl_vars['item']->value['icon'])); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['item']->value['type'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title'],'icon'=>$_smarty_tpl->tpl_vars['item']->value['icon']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if (count($_smarty_tpl->tpl_vars['item']->value['mes'])==1) {?>
							<ul class="list-unstyled">
						<?php } else { ?>
							<ul>
						<?php }?>
							<?php  $_smarty_tpl->tpl_vars['mes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['mes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mes']->key => $_smarty_tpl->tpl_vars['mes']->value) {
$_smarty_tpl->tpl_vars['mes']->_loop = true;
?>
								<li>
									<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>

								</li>
							<?php } ?>
						</ul>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['item']->value['type'],'title'=>$_smarty_tpl->tpl_vars['item']->value['title'],'icon'=>$_smarty_tpl->tpl_vars['item']->value['icon']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php } ?>
			<?php } elseif ($_smarty_tpl->tpl_vars['tpl']->value) {?>
				<?php echo $_smarty_tpl->getSubTemplate ((('feedback/').($_smarty_tpl->tpl_vars['tpl']->value)).('.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		<?php } ?>
	<?php }?>
</div>
<?php }} ?>
