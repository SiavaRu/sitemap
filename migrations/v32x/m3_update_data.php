<?php
/**
*
* SEO Sitemap
* @copyright (c) 2020 Paul Norman (WelshPaul)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace welshpaul\sitemap\migrations\v32x;

class m3_update_data extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['welshpaul_sitemap_versions']) && version_compare($this->config['welshpaul_sitemap_versions'], '1.0.1', '>=');
	}
	static public function depends_on()
	{
		return ['\welshpaul\sitemap\migrations\v32x\m2_initial_module'];
	}
	public function update_data()
	{
		return [
			['config.update', ['welshpaul_sitemap_versions', '1.0.1']],
		];
	}
}
