<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:07:18
         compiled from "/home/gamerammo/public_html/wiki/templates/prefs/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13926301465a7f7b266cf4f8-23060763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f76883b207eb7939e33b17c6b9fa77764f18183f' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/prefs/textarea.tpl',
      1 => 1424977070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13926301465a7f7b266cf4f8-23060763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'syntax' => 0,
    'codemirror' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7b266dc632_51280213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7b266dc632_51280213')) {function content_5a7f7b266dc632_51280213($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference form-group clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>" style="text-align: left;"><label class="control-label col-sm-4" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label><div class="col-sm-8"><textarea name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['syntax']->value) {?> data-syntax="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['syntax']->value);?>
" data-codemirror="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['codemirror']->value);?>
" <?php }?> class="form-control" <?php if ($_smarty_tpl->tpl_vars['p']->value['size']) {?> rows="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['size']);?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['value']);?>
</textarea><?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?><div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div><?php }
echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div>
<?php }} ?>
