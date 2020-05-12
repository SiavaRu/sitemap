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
	'WELSHPAUL_SITEMAP_TITLE'			=> 'SEO Sitemap',
	'WELSHPAUL_SITEMAP_EXPLAIN'			=> 'This extension creates the necassery sitemaps required by various search engines. SEO sitemap balances the need for performace with data by creating multiple sitemaps. These Sitemaps are:<br />'
													.'<ul><li>sitemap.xml - Sitemap index file. Lists all sitemaps. Never cached, dynamically created.</li>'
													.'<li>current.xml - Lists all topics modified within the last 30 days. Never cached, dynamically created.</li>'
													.'<li>topics-{id}.xml - Lists all topics by forum id modified greater than 30 days. Cached for 24 hours.</li>'
													.'<li>forums-{id}.xml - Lists all summary pages of a forum by forum id. Cached for 24 hours.</li></ul>',

	'WELSHPAUL_SITEMAP_LOCATION'				=> 'Sitemap Index',
	'WELSHPAUL_SITEMAP_IMAGES'					=> 'Image Attachments',
	'WELSHPAUL_SITEMAP_IMAGES_EXPLAIN'			=> 'Sitemap will include links for image attachements',
	'WELSHPAUL_SITEMAP_ADDITIONALS'				=> 'Extend this Extension',
	'WELSHPAUL_SITEMAP_ADDITIONAL'				=> 'Additional Sitemap',
	'WELSHPAUL_SITEMAP_ADDITIONAL_EXPLAIN'		=> 'This sitemap should only be turned on if you have another extension sending data via this extension.',

	'WELSHPAUL_SITEMAP_PRIORITY'					=> 'Priority Settings',
	'WELSHPAUL_SITEMAP_STICKY_PRIORITY'				=> 'Sticky Topic Priority',
	'WELSHPAUL_SITEMAP_STICKY_PRIORITY_EXPLAIN'		=> 'Sticky Topic priority for URLs listed in sitemaps. Must be a number between 0.0 and 1.0.',
	'WELSHPAUL_SITEMAP_GLOBAL_PRIORITY'				=> 'Global Topic Priority',
	'WELSHPAUL_SITEMAP_GLOBAL_PRIORITY_EXPLAIN'		=> 'Global Topic priority for URLs listed in sitemaps. Must be a number between 0.0 and 1.0.',
	'WELSHPAUL_SITEMAP_ANNOUNCE_PRIORITY'			=> 'Announcement Topic Priority',
	'WELSHPAUL_SITEMAP_ANNOUNCE_PRIORITY_EXPLAIN'	=> 'Announcement Topic priority for URLs listed in sitemaps. Must be a number between 0.0 and 1.0.',
	'WELSHPAUL_SITEMAP_FORUM_EXCLUDE'				=> 'Forum Exclusions',
	'WELSHPAUL_SITEMAP_FORUM_EXCLUDE_EXPLAIN'		=> 'Select one or more forums to exclude from the sitemap listing. If this field is left empty all forums will be included.',
	'WELSHPAUL_SITEMAP_FORUM_THRESHOLD'				=> 'Sitemap Threshold',
	'WELSHPAUL_SITEMAP_FORUM_THRESHOLD_EXPLAIN'		=> 'Minimum number of URLs required to display a sitemap. Only forums with more than this threshold number of topics will have a sitemap.',
	'WELSHPAUL_SITEMAP_LINKS'						=> 'Forum Linking',
	'WELSHPAUL_SITEMAP_LINK'						=> 'Sitemap Link in Footer',
	'WELSHPAUL_SITEMAP_LINK_EXPLAIN'				=> 'Display sitemap link in footer.',
	'WELSHPAUL_SITEMAP_INVALID_PRIORITY_VALUE'		=> 'Priority Value must be between 0.0 and 1.0.',
	'WELSHPAUL_SITEMAP_INVALID_THRESHOLD_VALUE'		=> 'Threshold Value must be a number.',
	'WELSHPAUL_SITEMAP_SETTINGS_SAVED'				=> 'Settings Saved',
]);
