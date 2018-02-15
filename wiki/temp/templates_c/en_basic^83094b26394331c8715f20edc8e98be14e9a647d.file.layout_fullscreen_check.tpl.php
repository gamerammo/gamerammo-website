<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:03:23
         compiled from "/home/gamerammo/public_html/wiki/templates/layout_fullscreen_check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9499221055a7f7a3b476e20-47339738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83094b26394331c8715f20edc8e98be14e9a647d' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/layout_fullscreen_check.tpl',
      1 => 1491804112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9499221055a7f7a3b476e20-47339738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'filegals_manager' => 0,
    'print_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7a3b4804a8_66694087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7a3b4804a8_66694087')) {function content_5a7f7a3b4804a8_66694087($_smarty_tpl) {?><?php if (!is_callable('smarty_block_self_link')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.self_link.php';
?>



<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fullscreen']=='y'&&$_smarty_tpl->tpl_vars['filegals_manager']->value==''&&$_smarty_tpl->tpl_vars['print_page']->value!='y') {?>
	<div id="fullscreenbutton">
		<?php if ($_SESSION['fullscreen']=='n') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen")); $_block_repeat=true; echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen")); $_block_repeat=true; echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	</div>
<?php }?>
<?php }} ?>
