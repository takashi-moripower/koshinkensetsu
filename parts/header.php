<!DOCTYPE html>
<?php
$navi_items = [
		['label' => '会社案内', 'icon' => 'building', 'url' => ''],
		['label' => '業務内容', 'icon' => 'gavel', 'url' => ''],
		['label' => '採用情報', 'icon' => 'user', 'url' => ''],
];
?>
<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">

        <title><?= get_title(); ?></title>
		<?= Html::css(['style', Main::$file_name]) ?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
		<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap --> 
		<script src="bootstrap-4.0.0-alpha.5/dist/js/bootstrap.min.js" ></script>
		<script>
			$(function () {
				$('body').on('dblclick', function () {
					$('.sample').toggle();
				});
			});
		</script>
    </head>
    <body class="page-<?= Main::$file_name; ?>">
		<div class="header">
			<div class="container header01">
				<div class="logo col-xs-24 col-sm-12">
					<a href="<?= Html::url() ?>">
						<img src="<?= Html::image('mark.png') ?>" class="logo-mark">
						<img src="<?= Html::image('name.png') ?>" class="logo-name">
					</a>
				</div>
				<?php
				foreach ($navi_items as $item) {
					$url = Html::url( $item['url']);
					$navi = "<a href='{$url}' class='header-nav float-sm-right hidden-xs-down'><i class='fa fa-fw fa-{$item['icon']}'></i><br>{$item['label']}</a>" . $navi;
				}
				echo $navi;
				?>
			</div>
			<div class="container header02 hidden-sm-up">
				<div class="row header-nav2 text-xs-center">
					<?php foreach ($navi_items as $item): ?>
						<a class="col-xs-8 hidden-sm-up nav-item" href="<?= Html::url( $item['url'] ) ?>">
							<i class="fa fa-fw fa-<?= $item['icon'] ?>"></i>
							<?= $item['label'] ?>
						</a>
					<?php endforeach ?>
				</div>
			</div>
			<div class="header03 hidden-xs-down"></div>
		</div>
