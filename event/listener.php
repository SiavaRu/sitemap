<?php
/**
*
* SEO Sitemap
* @copyright (c) 2016 Jeff Cocking
* @copyright (c) 2019 Paul Norman (WelshPaul)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace welshpaul\sitemap\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\controller\helper */
	protected $helper;

	/**
	* Constructor
	*
	* @param \phpbb\config\config        $config          Config object
	* @param \phpbb\template\template    $template        Template object
	* @param \phpbb\user                 $user            User object
	* @param \phpbb\request\request      $request         Request object
	* @param \phpbb\controller\helper    $helper          Controller helper object
	* @access public
	*/
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, \phpbb\request\request $request, \phpbb\controller\helper $helper)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
		$this->request = $request;
		$this->helper = $helper;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 * @static
	 * @access public
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'	=> 'welshpaul_sitemap_set_tpl_data',
		);
	}

	/**
	 * Set Sitemap template data
	 *
	 * @return null
	 * @access public
	 */
	public function welshpaul_sitemap_set_tpl_data()
	{

		if ($this->config['welshpaul_sitemap_link'])
		{
			$this->user->add_lang_ext('welshpaul/sitemap', 'common');
			$this->template->assign_var('S_WELSHPAUL_SITEMAP_LINK', $this->config['welshpaul_sitemap_link']);
			$this->template->assign_var('WELSHPAUL_SITEMAP_URL', $this->helper->route('welshpaul_sitemap_sitemapindex', array(), true, '', \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL));
		}
	}
}
