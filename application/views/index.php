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
  </head>
  <body>
    <div class="ps-rainbow"></div>

    <section class="ps-hero">
      <div class="ps-hot-band" aria-hidden="true"></div>
      <div class="ps-hero__inner">
        <span class="ps-wordmark ps-wordmark--lg">PHONE<span class="ps-wordmark__outline">STAR</span></span>
        <p class="ps-lead" style="margin-top:12px">
          Pilih kriteria, biarkan mesin fuzzy Tahani menghitung &mdash; dapatkan smartphone paling cocok untukmu.
        </p>
      </div>
    </section>

    <div class="ps-container" style="max-width:560px;padding-bottom:56px">
      <span class="ps-eyebrow">System</span>

      <a class="ps-menu-tile ps-menu-tile--hot" href="<?php echo site_url('pages/rekomendasi_ponsel'); ?>">
        <span class="ps-menu-tile__label">Cek Rekomendasi</span>
      </a>

      <a class="ps-menu-tile ps-menu-tile--ink" href="<?php echo site_url('pages/daftar_ponsel'); ?>">
        <span class="ps-menu-tile__label">Daftar Smartphone</span>
      </a>
    </div>
  </body>
</html>
