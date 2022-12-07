<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Header -->
    <div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 d-inline-block mb-0">Pengaturan Situs</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links ">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <?php echo form_open_multipart('admin/settings/update'); ?>

      <div class="row">
        <div class="col-md-8">
          <div class="card-wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="mb-0">Identitas Situs</h3>
                <?php if ($flash) : ?>
                <span class="float-right text-success font-weight-bold" style="margin-top: -30px">
                  <?php echo $flash; ?>
                </span>
                <?php endif; ?>
              </div>
        
              <div class="card-body">

                <div class="form-group">
                  <label class="form-control-label" for="name">Nama Situs:</label>
                  <input type="text" name="web_name" value="<?php echo set_value('web_name', get_settings('web_name')); ?>" class="form-control" id="name">
                  <?php echo form_error('web_name'); ?>
                </div>

                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="phone_number">No. Telp:</label>
                      <input type="text" name="web_phone_number" value="<?php echo set_value('web_phone_number', get_settings('web_phone_number')); ?>" class="form-control" id="phone_number">
                      <?php echo form_error('web_phone_number'); ?>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="email">Email:</label>
                      <input type="text" name="web_email" value="<?php echo set_value('web_email', get_settings('web_email')); ?>" class="form-control" id="email">
                      <?php echo form_error('web_email'); ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="address">Alamat:</label>
                  <textarea name="web_address" class="form-control" id="address"><?php echo set_value('web_address', get_settings('web_address')); ?></textarea>
                  <?php echo form_error('web_address'); ?>
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="tagline">Tagline:</label>
                  <input type="text" name="web_tagline" value="<?php echo set_value('web_tagline', get_settings('web_tagline')); ?>" class="form-control" id="tagline">
                  <?php echo form_error('web_tagline'); ?>
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="description">Deskripsi:</label>
                  <textarea name="web_description" class="form-control" id="description"><?php echo set_value('web_description', get_settings('web_description')); ?></textarea>
                  <?php echo form_error('web_description'); ?>
                </div>
              
              </div>
              
            </div>
            
          </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
            </div>

        </div>
      </div>

    </form>
