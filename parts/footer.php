<?php
$navi_items = [
	[
		'label'=>'トップページ',
		'url'=>'',
	],
	[
		'label'=>'会社案内',
		'url'=>'guide',
	],
	[
		'label'=>'業務内容',
		'url'=>'business',
	],
	[
		'label'=>'採用情報',
		'url'=>'recruit',
	],
	[
		'label'=>'お問い合わせ',
		'url'=>'',
	],
	[
		'label'=>'プライバシーポリシー',
		'url'=>'privacy',
	],
];
?>
<div class="footer">
	<div class="footer-nav-wrap">
		<div class="container text-xs-center">
			<div class="footer-nav clearfix">
				<div class="footer-nav-item"><a href="<?= Html::url("") ?>">トップページ</a></div>
				<div class="footer-nav-item"><a href="<?= Html::url("guide") ?>">会社案内</a></div>
				<div class="footer-nav-item"><a href="<?= Html::url("business") ?>">業務案内</a></div>
				<br class="hidden-md-up"/>
				<div class="footer-nav-item"><a href="<?= Html::url("recruit") ?>">採用情報</a></div>
				<div class="footer-nav-item"><a href="<?= Html::url("inquiry") ?>">お問い合わせ</a></div>
				<div class="footer-nav-item"><a href="<?= Html::url("privacy") ?>">プライバシーポリシー</a></div>
			</div>
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