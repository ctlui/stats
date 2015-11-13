<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @author    ctlui
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      https://github.com/ctlui/stats
 */
 
echo ossn_view_form('administrator/settings', array(
    'action' => ossn_site_url() . 'action/admin/stats/settings',
    'component' => 'stats',
	'params' => $params,
    'class' => 'ossn-admin-form'	
), false);
