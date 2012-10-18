<?php global $options;
foreach ($options as $value) {
if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_option( $value['id'] ); } }
?>
<?php if ($pov_disubfooter== "true") { } else { ?>
<?php include(TEMPLATEPATH."/sidebar.php");?>
<?php } ?>
<div id="footer"  >
<h1 class="right">
<a href="http://kkddpp.com/about" > 关于作者 </a> - <a href="http://kkddpp.com/myui"> 本站主题 </a> - <a href="http://kkddpp.com/sitemap"> 网站地图 </a>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F25130c555d76b68e14cbc41b6df61248' type='text/javascript'%3E%3C/script%3E"));
</script>
<?php if ($pov_discredit== "true") { } else { ?>
Design by: <a href="http://www.llow.it">llowit</a>
<?php } ?>
</h1>
<h1>
<?php $footer_license="" ?>
<?php if (get_option('pov_footer_license')) { $footer_license = get_option('pov_footer_license') ; } ?>
<a href="http://kkddpp.com/">©<?php echo date("Y"); ?>
AIZIU
</a> <?php echo $footer_license; ?> </h1>
</div>
</div>
</div>
</body>
</html>