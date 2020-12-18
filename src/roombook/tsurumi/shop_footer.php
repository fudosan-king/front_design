<div id="footer">
	<div id="global-links">
		<ul>
			<li><a href="/tsurumi/">トップ</a></li>
			<li><a href="http://www.propolife.co.jp/company/">運営会社概要</a></li>
			<li><a href="https://www.propolife.co.jp/form/" target="_blank">お問い合わせ</a></li>
			<li><a href="http://www.propolife.co.jp/company/praivacy.html">プライバシーポリシー</a></li>
		</ul>
	</div>

	<?php include(dirname(dirname(__FILE__)) . '/site_footer.php'); ?>
</div>

<?php if (preg_match('|^/tsu[^/]*/$|', $_SERVER['REQUEST_URI']) ||preg_match('|^/tsu[^/]*/index.php$|', $_SERVER['REQUEST_URI'])): ?>
	<script type="text/javascript">
		//<![CDATA[
		$(function () {
			$('.photolist a').lightBox(LIGHTBOX_DEFAULTS);

			var location = new google.maps.LatLng(lat,lng);

			// set center at shop location
			var map = new google.maps.Map(document.getElementById('map-half'), {
				zoom: 17,
				center: location,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false
			});

			new google.maps.Marker({
				position: location,
				map: map
			});
		});
		//]]>
	</script>
<?php elseif (preg_match('|/re[0-9]+/|', $_SERVER['REQUEST_URI'])): ?>
	<script type="text/javascript">
		//<![CDATA[
		$(function () {
			$('.photolist a').lightBox(LIGHTBOX_DEFAULTS);

			var location = new google.maps.LatLng(lat,lng);

			// set center at shop location
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 17,
				center: location,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false
			});

			new google.maps.Marker({
				position: location,
				map: map
			});
		});
		//]]>
	</script>
<?php elseif (preg_match('|/staff|', $_SERVER['REQUEST_URI'])): ?>
	<script type="text/javascript">
		//<![CDATA[
		$(function() {initialize_image_list($('#shop-image .container'), $('#shop-image ul'))
		});
		//]]>
	</script>
<?php endif; ?>

