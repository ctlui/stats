<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @author    ctlui
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      https://github.com/ctlui/stats
 */
$settings = new OssnComponents;
$settings = $settings->getComSettings('stats');
$domain = $settings->domain;
$id = $settings->id;

?>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//<?php echo $domain?>/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', <?php echo $id?>]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//<?php echo $domain?>/piwik.php?idsite=<?php echo $id?>" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
