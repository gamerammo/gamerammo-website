<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:07:18
         compiled from "/home/gamerammo/public_html/wiki/templates/access/include_ticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9716796005a7f7b266834e2-79200017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33b9f6899c3b4ecbf1edc49f701e1437d57a70f8' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/access/include_ticket.tpl',
      1 => 1488763121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9716796005a7f7b266834e2-79200017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7b26684884_65209679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7b26684884_65209679')) {function content_5a7f7b26684884_65209679($_smarty_tpl) {?><input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
<input type="hidden" name="daconfirm" value="y"><?php }} ?>
