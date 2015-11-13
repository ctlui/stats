<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @author    ctlui
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      https://github.com/ctlui/stats
 */

$OssnComponents = new OssnComponents;

$domain = input('domain');
$id = input('id');

$array = array('domain'=>$domain,'id'=>$id);
foreach ($array as $key=>$value){
$success = $OssnComponents->setComSETTINGS('stats', $key, $value);
}
if($success){
    ossn_trigger_message('Settings saved');
    redirect(REF);
} else {
    ossn_trigger_message('Cannot save settings', 'error');
    redirect(REF);
}



