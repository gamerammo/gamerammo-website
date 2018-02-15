<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:12:48
         compiled from "/home/gamerammo/public_html/wiki/templates/prefs/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15417620465a7f7c7012afd3-87200337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4e2355805c1eb393781f0827f7926f5ea8ef41' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/prefs/password.tpl',
      1 => 1489358353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15417620465a7f7c7012afd3-87200337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7c70136ae4_76101845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7c70136ae4_76101845')) {function content_5a7f7c70136ae4_76101845($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference clearfix form-group <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<label class="col-sm-4 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label>
	<div class="col-sm-8">
		<input name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['value']);?>
" class="form-control"  type="password" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['detail']);?>

		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
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
