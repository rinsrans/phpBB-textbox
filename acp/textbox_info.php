<?php
/**
*
* @package phpBB Extension - Textbox
* @copyright (c) 2015 rinsrans <karl.rinser@gmail.com>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rinsrans\textbox\acp;

class textbox_info
{
	function module()
	{
		return array(
			'filename'		=> '\rinsrans\textbox\textbox_module',
			'title'			=> 'ACP_TEXTBOX_TITLE',
			'version'		=> '0.1.0',
			'modes'		=> array(
				'settings'    => array(
					'title'		=> 'ACP_TEXTBOX_TITLE',
					'auth'	=> 'ext_rinsrans/textbox && acl_a_board',
					'cat'		=> array('ACP_TEXTBOX_TITLE')
				),
			),
		);
	}
}
