<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: storedsearch.php 62023 2017-04-02 07:10:43Z lindonb $

function prefs_storedsearch_list()
{
	return array(
		'storedsearch_enabled' => array(
			'name' => tr('Stored searches'),
			'description' => tr('Allow users to store search queries.'),
			'type' => 'flag',
			'default' => 'n',
		),
	);
}

