<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:07:18
         compiled from "/home/gamerammo/public_html/wiki/templates/tiki-admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5847779025a7f7b2650b363-93002128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a018f05a0ba69d1514718fc753bf9dddb98b844' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/tiki-admin.tpl',
      1 => 1490351219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5847779025a7f7b2650b363-93002128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'admintitle' => 0,
    'description' => 0,
    'db_requires_update' => 0,
    'tikidomain' => 0,
    'installer_not_locked' => 0,
    'search_index_outdated' => 0,
    'upgrade_messages' => 0,
    'title' => 0,
    'um' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7b26562cd0_68566207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7b26562cd0_68566207')) {function content_5a7f7b26562cd0_68566207($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_title')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_modifier_replace')) include '/home/gamerammo/public_html/wiki/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/admin_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['sender_email']=='') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Warning",'close'=>"y")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning",'close'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-admin.php?page=general&highlight=sender_email")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=general&highlight=sender_email"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your sender email is not set. You can set it <a href="%0" class="alert-link">in the general admin panel.</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=general&highlight=sender_email"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning",'close'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<div class="page-header">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>((string)$_smarty_tpl->tpl_vars['helpUrl']->value))); $_block_repeat=true; echo smarty_block_title(array('help'=>((string)$_smarty_tpl->tpl_vars['helpUrl']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['admintitle']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>((string)$_smarty_tpl->tpl_vars['helpUrl']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</span>
</div>

<div id="pageheader">
	
	
	<?php if ($_smarty_tpl->tpl_vars['db_requires_update']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"error",'title'=>"Database Version Problem")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Database Version Problem"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Your database requires an update to match the current Tiki version. Please proceed to <a class="alert-link" href="tiki-install.php">the installer</a>. Using Tiki with an incorrect database version usually provokes errors.
			If you have shell (SSH) access, you can also use the following, on the command line, from the root of your Tiki installation:
			<kbd>php console.php<?php if (!empty($_smarty_tpl->tpl_vars['tikidomain']->value)) {?> --site=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tikidomain']->value,'/','');
}?> database:update</kbd>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Database Version Problem"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['installer_not_locked']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"error",'title'=>"Installer not locked")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Installer not locked"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			 The installer allows a user to change or destroy the site’s database through the browser so it is very important to keep it locked. 
			<br />You can re-run the installer (tiki-install.php), skip to the last step and select <strong>LOCK THE INSTALLER</strong>. Alternatively, you can simply <strong>add a lock file</strong> (file without any extension) in your db/ folder.

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Installer not locked"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['search_index_outdated']->value) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"error",'title'=>"Search Index outdated")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Search Index outdated"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		The search index might be outdated. It is recommended to rebuild the search index.
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Search Index outdated"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	
</div>

<?php if (count($_smarty_tpl->tpl_vars['upgrade_messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['upgrade_messages']->value)==1) {?>
		<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("Upgrade Available", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("Upgrades Available", null, 0);?>
	<?php }?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>$_smarty_tpl->tpl_vars['title']->value,'icon'=>"announce")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>$_smarty_tpl->tpl_vars['title']->value,'icon'=>"announce"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['um'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['um']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['upgrade_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['um']->key => $_smarty_tpl->tpl_vars['um']->value) {
$_smarty_tpl->tpl_vars['um']->_loop = true;
?>
			<p><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['um']->value);?>
</p>
		<?php } ?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>$_smarty_tpl->tpl_vars['title']->value,'icon'=>"announce"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/include_".((string)$_smarty_tpl->tpl_vars['include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
