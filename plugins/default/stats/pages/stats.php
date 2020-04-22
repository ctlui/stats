<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @author    ctlui, laventin85
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      https://github.com/ctlui/stats
 */
$settings = new OssnComponents;
$settings = $settings->getComSettings('stats');
$domain = $settings->domain;
$id = $settings->id;

?>
<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="<?php echo $domain?>";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '<?php echo $id?>']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- Matomo Image Tracker -->
<img src="<?php echo $domain?>/matomo.php?idsite=<?php echo $id?>&amp;rec=1" style="border:0" alt="" />
<!-- End Matomo Image Tracker -->
<!-- End Matomo Code -->
