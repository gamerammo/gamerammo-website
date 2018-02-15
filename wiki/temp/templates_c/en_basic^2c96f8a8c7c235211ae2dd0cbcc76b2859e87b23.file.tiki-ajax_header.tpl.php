<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:03:23
         compiled from "/home/gamerammo/public_html/wiki/templates/tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13214790475a7f7a3b481ff2-01577686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c96f8a8c7c235211ae2dd0cbcc76b2859e87b23' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/tiki-ajax_header.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13214790475a7f7a3b481ff2-01577686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7a3b483ba1_63694525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7a3b483ba1_63694525')) {function content_5a7f7a3b483ba1_63694525($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>
