<?php /* Smarty version Smarty-3.1.21, created on 2018-02-10 18:05:40
         compiled from "/home/gamerammo/public_html/wiki/templates/wizard/profiles_useful_changes_in_display.tpl" */ ?>
<?php /*%%SmartyHeaderCode:995760195a7f7ac4a21790-00101298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ebf2219cf7c911e77a3c23ca518c4c2fcb9687d' => 
    array (
      0 => '/home/gamerammo/public_html/wiki/templates/wizard/profiles_useful_changes_in_display.tpl',
      1 => 1490265336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995760195a7f7ac4a21790-00101298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a7f7ac4a52d37_01430288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7f7ac4a52d37_01430288')) {function content_5a7f7ac4a52d37_01430288($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/home/gamerammo/public_html/wiki/lib/smarty_tiki/function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Check out some useful profiles that involve changing the display mode of content in your site. </br></br></br>
	<div class="media-body">
		<fieldset>
			<legend>Profiles:</legend>
			<div class="row">
				<div class="col-md-6">
					<h4>Slideshow demo</h4>
					(<a href="tiki-admin.php?profile=Slideshow_demo&show_details_for=Slideshow_demo&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
					<br/>
					This profile sets up a slideshow from a simple wiki page, which you can use to learn the basics of how easily the JqueryS5 slideshow system in Tiki works.
					<br/>
					<a href="https://doc.tiki.org/Slideshow" target="tikihelp" class="tikihelp" title="Slideshow demo:
						More details:
						<ul>
							<li>All content is in a wiki page, which can be printed to your audience in just a few sheets of paper</li>
							<li>Headers of different levels are used as markers of ‘new slide’ and used as titles</li>
							<li>Many settings can be predefined as parameters of a call to PluginSlideshow</li>
							<li>Allows slide notes in a separate window for dual monitor setups, slide numbers in footer, timer, style with background images, navigation bar with all slides listed to jump to</li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<a href="http://tiki.org/display541" class="thumbnail internal" data-box="box" title="Click to expand">
								<img src="img/profiles/profile_thumb_slideshow_demo.png" alt="Click to expand" class="regImage pluginImg" title="Click to expand" />
							</a>
							<div class="mini text-center">
								<div class="thumbcaption text-center">Click to expand</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					&nbsp;
				</div>
				<div class="col-md-6">
					&nbsp;
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php }} ?>
