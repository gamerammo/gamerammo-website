<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:03:23
         compiled from "/home/gamerammo/public_html/wiki/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15003498955a7f7a3b5bfc07-93410214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe88b0b6b13152fc7268d83a5c2da573ab19882' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/credits.tpl',
      1 => 1421685541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15003498955a7f7a3b5bfc07-93410214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7a3b5c3063_13725833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7a3b5c3063_13725833')) {function content_5a7f7a3b5c3063_13725833($_smarty_tpl) {?>
Theme: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
