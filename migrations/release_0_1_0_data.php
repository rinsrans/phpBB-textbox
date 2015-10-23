<?php
/**
*
* @package phpBB Extension - Textbox
* @copyright (c) 2015 rinsrans <karl.rinser@gmail.com>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rinsrans\textbox\migrations;

class release_0_1_0_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['textbox_version']) && version_compare($this->config['textbox_version'], '0.1.0', '>=');
	}
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('textbox_content', '')),

			// Add ACP module
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_TEXTBOX_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_TEXTBOX_TITLE',
				array(
					'module_basename'	=> '\rinsrans\textbox\acp\textbox_module',
					'modes'				=> array('settings'),
				),
			)),
			// Keep track of version in the database
			array('config.add', array('textbox_version', '0.1.0')),
		);
	}
}
