<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:12:48
         compiled from "/home/gamerammo/public_html/wiki/templates/prefs/selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12425426125a7f7c70182cb4-40907719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9877e901c79ab4ba299940ef7b723a1c8ba39b38' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/prefs/selector.tpl',
      1 => 1489358353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12425426125a7f7c70182cb4-40907719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7c70190ee5_10107927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7c70190ee5_10107927')) {function content_5a7f7c70190ee5_10107927($_smarty_tpl) {?><?php if (!is_callable('smarty_function_object_selector')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/function.object_selector.php';
if (!is_callable('smarty_modifier_simplewiki')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="form-group adminoptionbox preference clearfix form-group <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<label class="control-label col-sm-4" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label>
	<div class="col-sm-8">
		<?php echo smarty_function_object_selector(array('_simplename'=>$_smarty_tpl->tpl_vars['p']->value['preference'],'_simpleid'=>$_smarty_tpl->tpl_vars['p']->value['id'],'_simplevalue'=>$_smarty_tpl->tpl_vars['p']->value['value'],'type'=>$_smarty_tpl->tpl_vars['p']->value['selector_type'],'_format'=>(($tmp = @$_smarty_tpl->tpl_vars['p']->value['format'])===null||$tmp==='' ? null : $tmp)),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</div>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>
</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div>
		<?php }?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<?php }} ?>
