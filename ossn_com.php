<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @author    ctlui
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      https://github.com/ctlui/stats
 */

define('__stats_PATH__', ossn_route()->com . 'Stats/');

function stats_init() {
	ossn_register_com_panel('stats', 'settings');

	ossn_extend_view('ossn/site/head','stats/pages/stats');
	
	if(ossn_isAdminLoggedin()){
		ossn_register_action('admin/stats/settings', __stats_PATH__ . 'actions/save.php');		
	}	
	
}
ossn_register_callback('ossn', 'init', 'stats_init');