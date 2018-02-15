<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: https.php 63679 2017-08-28 01:13:12Z drsassafras $

function prefs_https_list()
{
	return array(
		'https_external_links_for_users' => array(
			'name' => tra('Use HTTPS when building user-specific links'),
			'description' => tra('When building notification emails, RSS feeds or other externally available links, use HTTPS when the content applies to a specific user. HTTPS must be configured on the server.'),
			'type' => 'flag',
			'default' => 'n',
			'keywords' => 'SSL secure', 
		),
		'https_port' => array(
			'name' => tra('HTTPS port'),
			'description' => tra('the HTTPS port for this server.'),
			'type' => 'text',
			'size' => 5,
			'filter' => 'digits',
			'default' => '443',
			'keywords' => 'SSL secure',
		),
		'https_login' => array(
			'name' => tra('Use HTTPS login'),
			'description' => tra('Increase security by allowing to transmit authentication credentials over SSL. Certificates must be configured on the server.'),
			'type' => 'list',
			'options' => array(
				'disabled' => tra('Disabled'),
				'allowed' => tra('Allow secure (HTTPS) login'),
				'encouraged' => tra('Encourage secure (HTTPS) login'),
				'force_nocheck' => tra('Consider we are always in HTTPS, but do not check'),
				'required' => tra('Require secure (HTTPS) login'),
			),
			'default' => 'allowed',
			'warning' => tra('Do not require HTTPS until the connection has been set up and tested; otherwise, the website will be inaccessible'),
			'keywords' => 'SSL secure', 
		),
	);
}