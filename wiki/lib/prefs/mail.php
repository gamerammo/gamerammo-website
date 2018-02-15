<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: mail.php 63572 2017-08-17 06:01:40Z drsassafras $

function prefs_mail_list()
{
	return array(
		'mail_crlf' => array(
			'name' => tra('Mail end of line'),
			'description' => tra('Specify the end-of-line (EOL) character used by Tiki when sending mail notifications.'),
			'type' => 'list',
			'options' => array(
				'CRLF' => tra('CRLF (standard)'),
				'LF' => tra('LF (some Unix MTA)'),
			),
			'default' => 'LF',
		),
		'mail_template_custom_text' => array(
			'name' => tra('Text string used to customise mail templates'),
			'description' => tra('Text string used to customise mail templates and added as a pref reference in the appropriate mail tpl files'),
			'type' => 'text',
			'default' => '',
		),
	);
}
