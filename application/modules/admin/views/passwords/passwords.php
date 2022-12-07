<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Header -->
<div class="header bg-secondary pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 d-inline-block mb-0">Kelola Password</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links ">
							<li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Password</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-sm btn-primary btn-tambah">Tambah Akun</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
	<div class="row">

		<div class="col-lg-12">
          <div class="card"> 
		<!-- Card header -->
		<div class="card-header">
              <h3 class="mb-0">Admin Lainnya</h3>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="adminList" style="width: 100%">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
								<th scope="col">Nama</th>
								<th scope="col">No. HP</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            
          </div>
        </div>

		
	</div>

	<!-- EDIT ADMIN -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Edit Password Admin</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      <form role="form" action="#" method="POST" id="editAdminPasswordForm">
                        
                        <input type="hidden" name="id" value="" class="edit-id">
													
                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-key fa-4"></i></span>
                                  </div>
                                  <input name="password" class="form-control edit-password" placeholder="Password Baru" type="password" minlength="6" maxlength="100" required>
                                </div>
                                <div class="text-danger err password-error"></div>
                          </div>
                          
                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 editPasswordBtn">Simpan</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

	<!-- DELETE ADMIN -->
	<div class="modal fade" id="deleteAdminModal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal-modal-dialog-centered modal-" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Hapus Akun Admin?</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form action="#" id="deleteAdmin" method="POST">
        
            <input type="hidden" name="id" value="" class="deleteAdminID">
			
					<div class="modal-body">
              <p>Yakin ingin menghapus data admin ini? Semua data yang telah dihapus tidak dapat dipulihkan.</p>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
          </div>
          </form>
      </div>
  </div>
</div>

	<!-- MODAL TAMBAH ADMIN -->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
		<div class="modal-dialog modal- modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-body p-0">
					<div class="card bg-secondary border-0 mb-0">
						<div class="card-header bg-transparent">
							<h3 class="card-heading text-center mt-2">Tambah Admin</h3>
						</div>
						<div class="card-body px-lg-5 py-lg-5">
							<form role="form" action="#" method="POST" id="addKasirForm">

								<div class="form-group mb-3">
									<div class="input-group input-group-merge input-group-alternative add-id-div">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-id-card fa-4"></i></span>
										</div>
										<input name="id" class="form-control add-id" placeholder="Id Admin" type="text" >
									</div>
									<div class="text-danger err id-error"></div>
								</div>
								<div class="form-group mb-3">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-male fa-4"></i></span>
										</div>
										<input name="nama" class="form-control" placeholder="Nama Admin" type="text" >
									</div>
									<div class="text-danger err nama-error"></div>
								</div>
								<div class="form-group mb-3">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-phone fa-4"></i></span>
										</div>
										<input name="nohp" class="form-control" placeholder="No. HP Admin" type="text">
									</div>
									<div class="text-danger err nohp-error"></div>
								</div>
								<div class="form-group mb-3">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-key fa-4"></i></span>
										</div>
										<input name="password" class="form-control password" placeholder="Password" type="password">
									</div>
									<div class="text-danger err password-error"></div>
								</div>

								<div class="text-left">
									<button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
								</div>
								<div class="float-right" style="margin-top: -90px">
									<button type="submit" class="btn btn-primary my-4 addKasirBtn">Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<link href="<?php echo get_theme_uri('vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'argon'); ?>" rel="stylesheet">

	<script src="<?php echo get_theme_uri('vendor/datatables.net/js/jquery.dataTables.min.js', 'argon'); ?>"></script>
	<script src="<?php echo get_theme_uri('vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'argon'); ?>"></script>
	<script src="<?php echo base_url('assets/plugins/datatables.lang.js'); ?>"></script>

	<script>
		$(document).ready(function() {

			var table = $('#adminList').DataTable({
				"ajax" : "<?php echo site_url('admin/passwords/api/admin_passwords?action=admin_passwords');?>",
				"columns" : [
					{"data": "adm_id"},
					{"data": "adm_nama"},
					{"data": "adm_nohp"},
					{"mRender": function (data, type, row) {
							var url = window.location.href.split('?')[0].replace('#', '');
							url = url + '/edit/'+ row.adm_id;

							return '<div class="text-right"><a href="#" data-id="'+row.adm_id+'" class="btn btn-warning btn-sm btnEdit"><i class="fa fa-edit"></i></a><a href="#" data-id="'+row.adm_id+'" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i></a></div>';}
					}
				],
				//limitasi tampilan
				"lengthMenu": [5, 10, 25, 50, 100],
				"pageLength": 5,
				"language" : {
					"search" : "Cari:",
					"lengthMenu" : "Menampilkan _MENU_ data",
					"info" : "Menampilkan _START_ sampai _END_ data dari _TOTAL_ data",
					"infoEmpty" : "Tidak ada data yang ditampilkan",
					"infoFiltered" : "(dari total _MAX_ data)",
					"zeroRecords" : "Tidak ada hasil pencarian ditemukan",
					"paginate": {
						"first":"&laquo;",
						"last":"&raquo;",
						"next":       "&rsaquo;",
						"previous":   "&lsaquo;"
					},
				}
			});

			//EDIT ADMIN
			$(document).on('click', '.btnEdit', function() {
			//data('id') didapat dari deklarasi "data-id" pada pembuatan datatables, tepatnya di bagian "mRender". disana ada atribut data-id=row.kat_id. kita ambil nilai id dari tabel dari database
			  var id  = $(this).data('id');
			 
			  $.ajax({
			    method: 'GET',
			    url: '<?php echo site_url('admin/passwords/api?action=get_password');?>',
			    data: {id: id},
			    success: function(res) {
			      if (res.data) {
			        var d  = res.data;
					$('.edit-id').val(id);
					$('#editModal').modal('show');
			      }
			    }
			  });
			});

			//EDIT PASSWORD ADMIN
			$('#editAdminPasswordForm').submit(function(e) {
			  e.preventDefault();

			  var btn = $('.editPasswordBtn');
			  var id = $('.edit-id').val();
			  var data = $(this).serialize();
			  btn.html('<i class="fa fa-spin fa-spinner"></i> Menyimpan...').attr('disabled', true);

			  $.ajax({
			    method: 'POST',
			    url: '<?php echo site_url('admin/passwords/edit?action=admin_password');?>',
			    data: data,
			    success: function (res) {
			      if (res.code == 201) {
			        btn.html('<i class="fa fa-check"></i> Berhasil').removeAttr('disabled');
			        setTimeout(() => {
			          $('#editModal').modal('hide');
			          table.ajax.reload();
			          btn.html('Simpan');
			        }, 1500);
							$('.edit-password').val('');
			      }
						btn.attr('class', 'btn btn-primary my-4');
			    }
			  })
			});

			// //DELETE ADMIN
			$(document).on('click', '.btnDelete', function() {
				//data-id = adm_id
			  var id  = $(this).data('id');

			  $('.deleteAdminID').val(id);
			  $('#deleteAdminModal').modal('show');
			});

			$('#deleteAdmin').submit(function(e) {
			  e.preventDefault();

			  var id = $('.deleteAdminID').val();
			  var btn = $('.btn-delete');

			  btn.html('<i class="fa fa-spin fa-spinner"></i> Menghapus...');

			  $.ajax({
			    method: 'POST',
			    url: '<?php echo site_url('admin/passwords/api/delete_admin');?>',
			    data: {
			        id: id
			    },
			    success: function (res) {
			      if (res.code == 204) {
			        btn.html('<i class="fa fa-check"></i> Terhapus!');

			        setTimeout(() => {
			          $('#deleteAdminModal').modal('hide');
			          table.ajax.reload();
			          btn.html('Hapus');
			        }, 1500); 
			      }
			    }
			  })
			});




		});
	</script>
