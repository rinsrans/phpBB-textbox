<?php
/**
*
* @package phpBB Extension - Textbox
* @copyright (c) 2015 rinsrans <karl.rinser@gmail.com>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace rinsrans\textbox\event;

/**
* @ignore
*/

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'						=> 'page_header',
		);
	}

	/* @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\template\template */
	protected $template;

	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config		Config object
	* @param \phpbb\template			$template	Template object
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->template = $template;
	}

	public function page_header($event)
	{
		$this->template->assign_vars(array(
			'TEXTBOX_CONTENT'	=> $this->config['textbox_content'],
		));
	}
}
