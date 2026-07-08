<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="id-ID">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title; ?></title>
	<link rel="icon" href="<?php echo get_theme_uri('images/logo.png', 'made'); ?>">
	<link href="<?php echo get_theme_uri('css/phonestar.css', 'made'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_theme_uri('js/plugins/@fortawesome/fontawesome-free/css/all.min.css', 'main'); ?>" type="text/css">
	<script src="<?php echo get_theme_uri('vendor/jquery/dist/jquery.min.js', 'made'); ?>"></script>
</head>
<body>
	<div class="ps-rainbow"></div>
	<header class="ps-header">
		<div class="ps-header__inner">
			<a href="<?php echo site_url('/'); ?>" style="text-decoration:none">
				<span class="ps-wordmark">PHONE<span class="ps-wordmark__outline">STAR</span></span>
			</a>
			<div class="ps-header__title-tab">
				<span><?php echo strtoupper($title); ?></span>
			</div>
		</div>
	</header>
