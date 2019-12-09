<?php
/**
*
* SEO Sitemap
* @copyright (c) 2016 Jeff Cocking
* @copyright (c) 2019 Paul Norman (WelshPaul)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace welshpaul\sitemap\migrations;

class m3_update_config extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['welshpaul_sitemap_versions']) && version_compare($this->config['welshpaul_sitemap_versions'], '1.0.0', '>=');
	}
	static public function depends_on()
	{
		return array('\welshpaul\sitemap\migrations\v32x\m1_initial_config');
	}
	public function update_data()
	{
		return array(
			array('config.update', array('welshpaul_sitemap_versions', '1.0.1')),
		);
	}
}
