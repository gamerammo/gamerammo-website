<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:03:23
         compiled from "/home/gamerammo/public_html/wiki/templates/canonical.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3014166855a7f7a3b44f095-10152108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d6fe06e327ca44dcb9847299b4f06c7244a3cee' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/canonical.tpl',
      1 => 1490351219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3014166855a7f7a3b44f095-10152108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mid' => 0,
    'base_url_canonical' => 0,
    'page' => 0,
    'canonical_ending' => 0,
    'itemId' => 0,
    'forumId' => 0,
    'comments_parentId' => 0,
    'blogId' => 0,
    'postId' => 0,
    'articleId' => 0,
    'parentId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7a3b473852_55686949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7a3b473852_55686949')) {function content_5a7f7a3b473852_55686949($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/modifier.sefurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url']=='y'&&isset($_smarty_tpl->tpl_vars['mid']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-index_p.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page_raw.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-all_languages.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-show_content.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='extends:layouts/internal/layout_view.tpl|tiki-show_page.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);
if (!empty($_smarty_tpl->tpl_vars['canonical_ending']->value)) {
echo $_smarty_tpl->tpl_vars['canonical_ending']->value;
}?>" property="og:url"> 
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_tracker_item.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum_thread.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-print_forum_thread.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
" property="og:url">	
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog_post.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-read_article.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
" property="og:url">
	<?php } elseif ($_smarty_tpl->tpl_vars['mid']->value=='tiki-browse_categories.tpl') {?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
">
		<meta content="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
" property="og:url">
	<?php }?>
<?php }?>
<?php }} ?>
