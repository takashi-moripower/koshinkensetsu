<?php
$navi_items = [
	'トップページ' => '',
	'会社案内' => '',
	'業務内容' => '',
	'採用情報' => '',
];
?>
<div class="footer">
	<div class="container text-xs-center">
		<div class="footer-nav col-xs-24 col-md-18 offset-md-3 col-lg-12 offset-lg-6">
			<?php foreach ($navi_items as $label => $url): ?>
				<div class="col-xs-12 col-sm-6">
					<a href="<?= $url ?>"><?= $label ?></a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="container text-xs-center">

		<div class="name">
			株式会社興信建設
		</div>
		<div class="address">
			東京都杉並区成田西3丁目2番4号<br>
			TEL:03-3313-3307
		</div>
	</div>
</div>

</body>
</html>