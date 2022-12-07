<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>

	<!-- Icon -->
	<link rel="icon" href="<?php echo get_theme_uri('images/logo.png', 'made'); ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_theme_uri('css/bootstrap.min.css', 'made'); ?>" rel="stylesheet">        
    <script src="<?php echo get_theme_uri('js/bootstrap.bundle.min.js', 'made'); ?>"></script>
	   

    <!-- Custom styles for this page -->
    <link href="<?php echo get_theme_uri('css/home.css', 'made'); ?>" rel="stylesheet">   

  </head>
  <body>
    <div class="separatorheader"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="placeholdericon">
                    <!-- <a href="tentang-benar-dan-salah-pada-ui-design.html"> -->
                    <div class="row">
                        <div class="col-md-7 col-lg-7">
                            <div class="logoicon">
								<!-- <img src="<?php //echo get_theme_uri('images/icon.png', 'made'); ?>"> -->
							</div>
                        </div>
                        <div class="col-md-5 col-lg-5">
                            <a href="<?php echo site_url('pages/permintaan_informasi'); ?>">
                                <div class="contentplaceholdericon">
                                    <div class="judulmenu">CEK REKOMENDASI</div>
                                </div>
                            </a>
                            <a href="<?php echo site_url('pages/press_release'); ?>">
                                <div class="contentplaceholdericon">
                                    <div class="judulmenu">DAFTAR SMARTPHONE</div>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</body>
</html>
