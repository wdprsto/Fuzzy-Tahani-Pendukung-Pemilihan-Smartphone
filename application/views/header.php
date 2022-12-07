<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $title; ?> | Humas PN Langsa</title>

		<!-- Icon -->
		<link rel="icon" href="<?php echo get_theme_uri('images/logo.png', 'made'); ?>">

		<!-- Bootstrap core CSS -->
		<link href="<?php echo get_theme_uri('css/bootstrap.min.css', 'made'); ?>" rel="stylesheet">        
		<link rel="stylesheet" href="<?php echo get_theme_uri('js/plugins/@fortawesome/fontawesome-free/css/all.min.css', 'argon'); ?>" type="text/css">
		

		<script src="<?php echo get_theme_uri('js/bootstrap.bundle.min.js', 'made'); ?>"></script>
		<script src="<?php echo get_theme_uri('vendor/jquery/dist/jquery.min.js', 'argon'); ?>"></script>

		<!-- Custom styles for this page -->
		<link href="<?php echo get_theme_uri('css/home.css', 'made'); ?>" rel="stylesheet">   

	</head>
<body>
    <!-- Header Menu Desktop -->
    <div class="headerarea">
        <div class="col-md-4 col-lg-4">
            <a href="<?php echo $link; ?>">
                <div class="headertitle">
                    <div class="judulmenu"><?php echo strtoupper($title); ?></div>
                </div>
            </a>
        </div>
    </div>
