<?php
/**
*
* SEO Sitemap
* @copyright (c) 2020 Paul Norman (WelshPaul)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'WELSHPAUL_DISPLAY_TITLE'	=> 'Sitemap',
	'WELSHPAUL_SITEMAP_NODATA'	=> 'Forum has no data.',
]);
