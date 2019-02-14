<?php
/**
*
* SEO Sitemap
* @copyright (c) 2016 Jeff Cocking
* @copyright (c) 2019 Paul Norman (WelshPaul)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace welshpaul\sitemap\migrations\v32x;

class m1_initial_config extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('welshpaul_sitemap_images', 1)),
			array('config.add', array('welshpaul_sitemap_sticky_priority', 0.8)),
			array('config.add', array('welshpaul_sitemap_announce_priority', 0.8)),
			array('config.add', array('welshpaul_sitemap_global_priority', 0.8)),
			array('config.add', array('welshpaul_sitemap_forum_exclude', 'a:0:{}')),
			array('config.add', array('welshpaul_sitemap_forum_threshold', 0)),
			array('config.add', array('welshpaul_sitemap_link', 1)),
			array('config.add', array('welshpaul_sitemap_versions', '1.0.0')),
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SITEMAP_TITLE'
			)),
		);
	}
}
