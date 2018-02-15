<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:13:06
         compiled from "/home/gamerammo/public_html/wiki/templates/feedback/pref.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13680500675a7f7c82e15609-55913488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc9f18665cf691ee1491a32150c233e404a6896d' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/feedback/pref.tpl',
      1 => 1491804112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13680500675a7f7c82e15609-55913488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7c82e61030_45829809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7c82e61030_45829809')) {function content_5a7f7c82e61030_45829809($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tr')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_stringfix')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/modifier.stringfix.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['fb']->value)>0) {?>
	<?php if (count($_smarty_tpl->tpl_vars['fb']->value)==1) {?>
		<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("The following change has been applied", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("The following changes have been applied", null, 0);?>
	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['title']->value))); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul class="list-unstyled">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['st']==0) {?>
						<?php echo smarty_function_icon(array('name'=>'disable'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['st']==1) {?>
						<?php echo smarty_function_icon(array('name'=>'ok'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['st']==2) {?>
						<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

					<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['st']==4) {?>
						<?php echo smarty_function_icon(array('name'=>'undo'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['st']!=3) {?>Preference <?php }?><strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['item']->value['mes'][0]);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['st']!=3) {?>(<small>Preference name: <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
)</small><?php }?>
				</li>
			<?php } ?>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
