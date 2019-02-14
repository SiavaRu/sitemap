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

/**
* Migration stage 2: Initial module
*/
class m2_initial_module extends \phpbb\db\migration\migration
{
	/**
	 * Assign migration file dependencies for this migration
	 *
	 * @return array Array of migration files
	 * @static
	 * @access public
	 */
	static public function depends_on()
	{
		return array('\welshpaul\sitemap\migrations\v32x\m1_initial_config');
	}

	/**
	 * Add or update data in the database
	 *
	 * @return array Array of table data
	 * @access public
	 */
	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp', 'ACP_SITEMAP_TITLE', array(
					'module_basename'	=> '\welshpaul\sitemap\acp\sitemap_module',
					'auth'				=> 'ext_welshpaul\sitemap && acl_a_board',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
