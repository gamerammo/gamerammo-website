<?php

// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: 20130730_wiki_para_format_default_change_tiki.php 62176 2017-04-10 06:01:52Z drsassafras $

if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
	header("location: index.php");
	exit;
}

/**
 * default for feature_wiki_paragraph_formatting changed between tiki 11 and 12 - this maintains previous default setting
 *
 * @param $installer
 */
function upgrade_20130730_wiki_para_format_default_change_tiki($installer)
{
	$value = $installer->getOne("SELECT `value` FROM `tiki_preferences` WHERE `name` = 'feature_wiki_paragraph_formatting'");

	if ($value !== 'y') {	// default values can be empty
		$preferences = $installer->table('tiki_preferences');
		$preferences->insertOrUpdate(array('value' => 'n'), array('name' => 'feature_wiki_paragraph_formatting'));
	}
}
