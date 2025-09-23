<!--
	🛴 Designed with Jorge Fco.™
	© 2025
-->
<!DOCTYPE html>
<html class="js-html" itemscope itemtype="https://schema.org/Article">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">

	<!--/// LOCAL – HOST ///-->
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">

	<!--TITLE-->
	<title><?= $site->title(); ?> // <?= $page->meta_titulo(); ?></title>

	<!--CSS-->
	<?= css('assets/dist/main.min.css?v='.rand(1000, 2000)); ?>
</head>
<body class="js-body">
