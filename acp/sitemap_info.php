<?php
/**
*
* SEO Sitemap
* @copyright (c) 2016 Jeff Cocking
* @copyright (c) 2019 Paul Norman (WelshPaul)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace welshpaul\sitemap\acp;

class sitemap_info
{
	public function module()
	{
		return array(
			'filename'	=> '\welshpaul\sitemap\acp\sitemap_module',
			'title'		=> 'ACP_SITEMAP_TITLE',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_SITEMAP_SETTINGS', 'auth' => 'ext_welshpaul/sitemap && acl_a_board', 'cat' => array('ACP_SITEMAP_TITLE')),
			),
		);
	}
}
