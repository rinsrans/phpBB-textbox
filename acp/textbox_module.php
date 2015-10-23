<?php
/**
*
* @package phpBB Extension - Textbox
* @copyright (c) 2015 rinsrans <karl.rinser@gmail.com>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rinsrans\textbox\acp;

class textbox_module
{
	public $u_action;
	public function main($id, $mode)
	{
		global $config, $user, $template, $request;
		$user->add_lang_ext('rinsrans/textbox', 'common');
		$this->tpl_name = 'acp_textbox_body';
		$this->page_title = $user->lang('ACP_TEXTBOX_TITLE');
		add_form_key('acp_textbox');
		// Form is submitted
		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_textbox'))
			{
				trigger_error($user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}
			// Set the new settings to config
			$config->set('textbox_content', $request->variable('textbox_content', '', true));

			trigger_error($user->lang('ACP_TEXTBOX_SAVED') . adm_back_link($this->u_action));
		}
		// Send the curent settings to template
		$template->assign_vars(array(
			'U_ACTION'			=> $this->u_action,
			'TEXTBOX_CONTENT'	=> $config['textbox_content'],
		));
	}
}
