<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: StaticText.php 62028 2017-04-02 14:52:01Z jonnybradley $

/**
 * Handler class for Static text
 * 
 * Letter key: ~S~
 *
 */
class Tracker_Field_StaticText extends Tracker_Field_Abstract implements Tracker_Field_Synchronizable
{
	public static function getTypes()
	{
		return array(
			'S' => array(
				'name' => tr('Static Text'),
				'description' => tr('Displays the field description as static text that can be used to display notes or additional instructions.'),
				'readonly' => true,
				'help' => 'Static Text Tracker Field',				
				'prefs' => array('trackerfield_statictext'),
				'tags' => array('basic'),
				'default' => 'y',
				'params' => array(
					'wikiparse' => array(
						'name' => tr('Wiki Parse'),
						'description' => tr('Indicates if the description should be parsed as wiki syntax for formatting.'),
						'filter' => 'int',
						'options' => array(
							0 => tr('Handle line breaks as new lines only'),
							1 => tr('Wiki Parse'),
							2 => tr('Wiki Parse with Pretty Tracker replacements'),
						),
						'legacy_index' => 0,
					),
					'max' => array(
						'name' => tr('Maximum Length (List)'),
						'description' => tr('Maximum number of characters to be displayed in list mode'),
						'filter' => 'int',
						'legacy_index' => 1,
					),
				),
			),
		);
	}

	function getFieldData(array $requestData = array())
	{
		global $tikilib;
		
		$value = $this->getConfiguration('description');

		if ($this->getOption('wikiparse') == 1) {

			$value = TikiLib::lib('parser')->parse_data($value);

		} else if ($this->getOption('wikiparse') == 2) {	// do pretty tracker replacements

			$definition = Tracker_Definition::get($this->getConfiguration('trackerId'));
			$itemData = $this->getItemData();

			preg_match_all('/\{\$f_(\w+)\}/', $value, $matches);

			foreach ($matches[1] as $fieldIdOrName) {
				$field = $definition->getField($fieldIdOrName);
				$fieldId = $field['fieldId'];

				if (isset($itemData[$fieldId])) {
					$fieldValue = $itemData[$field['fieldId']];
					$value = str_replace(['{$f_' . $fieldId . '}', '{$f_' . $field['permName'] . '}'], $fieldValue, $value);
				}
			}

			$value = TikiLib::lib('parser')->parse_data($value);
		}
		
		return array('value' => $value);
	}
	
	function renderInput($context = array())
	{
		return $this->renderTemplate('trackerinput/statictext.tpl', $context);
	}

	function handleSave($value, $oldValue)
	{
		return array(
			'value' => false,
		);
	}

	function importRemote($value)
	{
		return '';
	}

	function exportRemote($value)
	{
		return '';
	}

	function importRemoteField(array $info, array $syncInfo)
	{
		return $info;
	}
}
