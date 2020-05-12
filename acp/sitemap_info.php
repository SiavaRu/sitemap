<?php
/**
*
* SEO Sitemap
* @copyright (c) 2020 Paul Norman (WelshPaul)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace welshpaul\sitemap\acp;

class sitemap_info
{
	public function module()
	{
		return [
			'filename'	=> '\welshpaul\sitemap\acp\sitemap_module',
			'title'		=> 'ACP_SITEMAP_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title' => 'ACP_SITEMAP_SETTINGS',
					'auth' => 'ext_welshpaul/sitemap && acl_a_board',
					'cat' => ['ACP_SITEMAP_TITLE'],
				],
			],
		];
	}
}
