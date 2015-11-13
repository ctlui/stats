<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @author    ctlui
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      https://github.com/ctlui/stats
 */
?>
<label><b><ins><?php echo ossn_print('piwik_title');?></ins></b></label><br>
<label><?php echo ossn_print('domain_name');?></label>
<input type="text" name="domain" value="<?php echo $params['settings']->domain;?>"/>
<label><?php echo ossn_print('site_id');?></label>
<input type="text" name="id" value="<?php echo $params['settings']->id;?>"/>
<input type="submit" class="ossn-admin-button button-dark-blue" value="<?php echo ossn_print('save'); ?>"/>