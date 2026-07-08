<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id-ID">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title><?php echo get_web_name(); ?></title>
    <link rel="icon" href="<?php echo base_url('assets/uploads/sites/Logo.png'); ?>">
    <link href="<?php echo get_theme_uri('css/phonestar.css', 'made'); ?>" rel="stylesheet">
  </head>
  <body>
    <div class="ps-rainbow"></div>
    <div class="ps-auth">
      <div class="ps-hot-band" aria-hidden="true"></div>

      <div class="ps-auth__panel">
        <div style="text-align:center;margin-bottom:20px">
          <span class="ps-wordmark ps-wordmark--lg">PHONE<span class="ps-wordmark__outline">STAR</span></span>
        </div>

        <div style="font-family:var(--font-display);font-size:28px;letter-spacing:1px;text-transform:uppercase;color:var(--ink-900);text-align:center">
          Login SIHape
        </div>
        <p style="text-align:center;font-size:13px;color:var(--ink-500);margin:6px 0 22px">
          Sistem Informasi <strong style="color:var(--ink-900)"><?php echo get_web_name(); ?></strong>
        </p>

        <?php if ($change_uname_notice) : ?>
          <div class="flash-message"><?php echo $change_uname_notice; ?></div>
        <?php elseif ($flash_message) : ?>
          <div class="flash-message"><?php echo $flash_message; ?></div>
        <?php endif; ?>

        <?php if ($redirection) : ?>
          <div class="flash-message">Login untuk melanjutkan</div>
        <?php endif; ?>

        <?php echo form_open('auth/login/do_login'); ?>
          <label class="ps-field">
            <span class="ps-field__label">Username</span>
            <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>"
              class="ps-input" placeholder="Username" minlength="4" maxlength="16" required>
            <?php echo form_error('username'); ?>
          </label>
          <label class="ps-field">
            <span class="ps-field__label">Password</span>
            <input type="password" name="password" class="ps-input" placeholder="Password" required>
            <?php echo form_error('password'); ?>
          </label>

          <button type="submit" class="ps-btn ps-btn--primary ps-btn--lg ps-btn--block" style="margin-top:8px">
            Log In
          </button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </body>
</html>
