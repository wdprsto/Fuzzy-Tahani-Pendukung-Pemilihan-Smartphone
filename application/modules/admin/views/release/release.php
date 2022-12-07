<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Header -->
    <div class="header bg-secondary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 d-inline-block mb-0">Kelola Data Smartphone</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links ">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Smartphone</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#"  data-toggle="modal" class="btn btn-sm btn-primary btn-addmodal">Tambah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Data Smartphone</h3>
            </div>

            <div class="packageContainer">
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="categoryList" style="width: 100%">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
										<th scope="col">Brand</th>
										<th scope="col">Kec. Processor)</th>
										<th scope="col">Core</th>
                    <th scope="col">RAM</th>
										<th scope="col">Memory Int.</th>
										<th scope="col">Kamera Utama</th>
										<th scope="col">Kamera Sek.</th>
										<th scope="col">Baterai</th>
										<th scope="col">Sistem Operasi</th>
										<th scope="col">Ukuran Layar</th>
										<th scope="col">Harga</th>
										<th scope="col">Performa Antutu</th>
										<th scope="col"></th>
                  </tr>
                </thead>
               
              </table>
            </div>
          </div>
            
          </div>
        </div>
      </div>

<!-- //modal nambah rilis baru -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Tambah Data HP</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      <!-- <form role="form" action="<?php #echo site_url('admin/release/add_release'); ?>" method="POST" id="addReleaseForm"> -->
											<?php echo form_open_multipart('admin/release/add_release'); ?>
													<!-- <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative disabled">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fa fa-book fa-4"></i></span>
                                  </div> -->
                                  <input name="id" class="form-control add-id" placeholder="Id Rilis" type="hidden">
                                <!-- </div>
                                <div class="text-danger err id-error"><small></small></div>
                          </div> -->

                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="nama" class="form-control" placeholder="Nama Produk" type="text" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="kec_prosesor" class="form-control" placeholder="Kecepatan Prosesor" type="number" step=0.1 required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="core_prosesor" class="form-control" placeholder="Jumlah Core Prosesor" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="ram" class="form-control" placeholder="RAM (dalam MB)" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="mem_internal" class="form-control" placeholder="Memori Internal (dalam GB)" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="kam_utama" class="form-control" placeholder="Kamera Utama (dalam MP)" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="kam_sekunder" class="form-control" placeholder="Kamera Sekunder (dalam MP)" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="baterai" class="form-control" placeholder="Baterai (dalam mAh)" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative add-idkat-div">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fas fa-video fa-4"></i> -->
																			</span>
                                  </div>
																	<select name="so" class='form-control' placeholder="Sistem Oerasi" required oninvalid="this.setCustomValidity('Sistem Operasi harus dipilih')" oninput="this.setCustomValidity('')">
																		<option value="" disabled selected>Pilih Sistem Operasi</option>
																		<option value="Android" >Android</option>
																		<option value="iOS" >iOS</option>
																		<option value="Lainnya" >Lainnya</option>
																	</select> 
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="uk_layar" class="form-control" placeholder="Ukuran Layar (dalam Inch)" type="number" step=0.1 required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="harga" class="form-control" placeholder="Harga (dalam Rp)" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
																				<!-- <i class="fa fa-newspaper"></i> -->
																			</span>
                                  </div>
                                  <input name="performa" class="form-control" placeholder="Nilai Performa Antutu" type="number" required oninvalid="this.setCustomValidity('Ini harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                          </div>

													<!-- <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
																	<input type="file" name="filerilis" class="form-control" id="filerilis" accept=".png, .jpeg, .jpg, .pdf, .mp4" required oninvalid="this.setCustomValidity('File rilis harus diunggah')" oninput="this.setCustomValidity('')">
															</div>
															<div class="text-danger"><small>File yang diupload harus berekstensi png, jpeg, jpg, pdf, atau mp4</small></div>
                              <div class="text-danger err filerilis-error"><small></small></div>
                          </div> -->
                          
                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 addCategoryBtn">Tambah</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal-modal-dialog-centered modal-" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Hapus Data HP</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form action="#" id="deleteCategory" method="POST">
        
            <input type="hidden" name="id" value="" class="deleteID">

          <div class="modal-body">
              <p>Yakin ingin menghapus? Tindakan ini tidak dapat dibatalkan.</p>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
          </div>
          </form>
      </div>
  </div>
</div>

<!-- modal edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Edit Release</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      <!-- <form role="form" action="#" method="POST" id="editReleaseForm"> -->
											<?php echo form_open_multipart('admin/release/edit_release'); ?>
                        
                        <input type="hidden" name="edit-id" value="" class="edit-id">
													
													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <input class="form-control edit-tglrilis" name="edit-tglrilis" type="datetime-local" id="edit-tglrilis" >
                                </div>
                                <div class="text-danger err edit-perihal-error"><small></small></div>
                          </div>

                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fa fa-newspaper"></i></span>
                                  </div>
                                  <input name="edit-perihal" class="form-control edit-perihal" placeholder="Perihal" type="text" required oninvalid="this.setCustomValidity('Perihal harus diisi')" oninput="this.setCustomValidity('')">
                                </div>
                                <div class="text-danger err edit-perihal-error"><small></small></div>
                          </div>
                          
													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative add-idkat-div">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-video fa-4"></i></span>
                                  </div>
																	<select name="edit-jenismedia" id="edit-jenismedia" class='form-control edit-jenismedia' placeholder="Jenis Media" required oninvalid="this.setCustomValidity('Jenis media harus dipilih')" oninput="this.setCustomValidity('')">
																		<option value="Surat">Surat</option>
																		<option value="Video">Video</option>
																	</select> 
                                </div>
                                <div class="text-danger err edit-jenismedia-error"></div>
                          </div>

													<div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
																	<input type="file" name="edit-filerilis" class="form-control" id="edit-filerilis" accept=".png, .jpeg, .jpg, .pdf, .mp4"  oninvalid="this.setCustomValidity('File rilis harus diunggah')" oninput="this.setCustomValidity('')">
															</div>
															<div class="text-danger"><small>Upload untuk mengubah file yang ada. File yang diupload harus berekstensi png, jpeg, jpg, pdf, atau mp4</small></div>
                              <div class="text-danger err edit-filerilis-error"><small></small></div>
                          </div>

                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 editReleaseBtn">Simpan</button>
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
	//INISIALISASI NILAI AWAL
	function format_rp(x) {
    return "Rp"+x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	}

  $(document).ready(function() {
    $(document).on('click', '.btnDelete', function() {
      var id  = $(this).data('id');

      $('.deleteID').val(id);
      $('#deleteModal').modal('show');
    });

			//MENAMPILKAN DATA rilis PADA TABEL
		var table = $('#categoryList').DataTable({
      "ajax" : "<?php echo site_url('admin/release/release_api?action=list'); ?>",
      "columns" : [
        {"data": "id"},
				{"data": "nama"},
				{"data": "brand"},
				{"mRender": function (data, type, row) {
          return row.kec_prosesor+" GHz";}
        },
				{"mRender": function (data, type, row) {
          return row.core_prosesor+" Core";}
        },
				{"mRender": function (data, type, row) {
          return row.ram+" MB";}
        },
				{"mRender": function (data, type, row) {
          return row.mem_internal+" GB";}
        },
				{"mRender": function (data, type, row) {
          return row.kam_utama+"  Piksel";}
        },
				{"mRender": function (data, type, row) {
          return row.kam_sekunder+" Piksel";}
        },
				{"mRender": function (data, type, row) {
          return row.baterai+" mAh";}
        },
				{"data": "so"},
				{"mRender": function (data, type, row) {
          return row.uk_layar+" Inch";}
        },
				{"mRender": function (data, type, row) {
          return format_rp(row.harga);}
        },
				{"data": "performa"},
        {"mRender": function (data, type, row) {
          // return '<div class="text-right"><a href="#" data-id="'+row.id+'" class="btn btn-warning btn-sm btnEdit"><i class="fa fa-edit"></i></a><a href="#" data-id="'+row.id+'" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i></a></div>';}
					return '<div class="text-right"><a href="#" data-id="'+row.id+'" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i></a></div>';}
        }
      ],
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
      },
			'order': [[0, 'asc']]
    });

		
		//MENGAHAPUS RILIS
    $('#deleteCategory').submit(function(e) {
      e.preventDefault();

      var id = $('.deleteID').val();
      var btn = $('.btn-delete');

      btn.html('<i class="fa fa-spin fa-spinner"></i> Menghapus...');

      $.ajax({
        method: 'POST',
        url: '<?php echo site_url('admin/release/release_api?action=delete'); ?>',

				data: {
            id: id
        },
        success: function (res) {
          if (res.code == 204) {
            btn.html('<i class="fa fa-check"></i> Terhapus!');
            setTimeout(() => {
              $('#deleteModal').modal('hide');
              table.ajax.reload();
              btn.html('Hapus');
            }, 1500);
          }
        }
      })
    });

		

		//menampilkan id terakhir+1 pada penambahnan rilis baru
		$(document).on('click', '.btn-addmodal', function() {
      //mendapatkan id rilis terakhir
      $.ajax({
        method: 'GET',
				//KITA MENGAMBIL DATA MENGGUNAKAN CATEGORY API UNTUK VIEW DATA. DATA YANG KITA PASS ADALAH "ID" SEBAGAI KUNCI UNTUK MENCARI DATA NANTINYA.
        url: '<?php echo site_url('admin/release/release_api?action=last_id'); ?>',
        success: function(res) {
          if (res.data) {
            var d  = res.data;
						//RES DATA, ITU BERARTI DATA YANG DI AMBIL DARI DATABASE. GUNAKAN RES.NAMA_KOLOM DI DATABASE UNTUK MENGAMBIL DATA
						$('.add-id').val(parseInt(d.rls_id)+1);
						$('#addModal').modal('show');

          }else{
						$('.add-id').val(1);
						$('#addModal').modal('show');
					}
        }
      });
    });

		//MENAMPILKAN DATA DARI RILIS YANG DIPILIH UNTUK DIEDIT
    $(document).on('click', '.btnEdit', function() {
			//data('id') didapat dari deklarasi "data-id" pada pembuatan datatables, tepatnya di bagian "mRender". disana ada atribut data-id=row.kat_id. kita ambil nilai id dari tabel dari database
      var id  = $(this).data('id');

      $.ajax({
        method: 'GET',
				//KITA MENGAMBIL DATA MENGGUNAKAN CATEGORY API UNTUK VIEW DATA. DATA YANG KITA PASS ADALAH "ID" SEBAGAI KUNCI UNTUK MENCARI DATA NANTINYA.
        url: '<?php echo site_url('admin/release/release_api?action=view_data'); ?>',
        data: {id: id},
        success: function(res) {
          if (res.data) {
            var d  = res.data;
						//RES DATA, ITU BERARTI DATA YANG DI AMBIL DARI DATABASE. GUNAKAN RES.NAMA_KOLOM DI DATABASE UNTUK MENGAMBIL DATA
						var tglrilis = new Date(d.rls_tgl);
						tglrilis.setMinutes(tglrilis.getMinutes() - tglrilis.getTimezoneOffset());

						$('.edit-tglrilis').val(tglrilis.toISOString().slice(0,16));

            $('.edit-id').val(d.rls_id);
            $('.edit-perihal').val(d.rls_perihal);
						$('.edit-jenismedia').val(d.rls_jnsmedia);
            $('#editModal').modal('show');
          }
        }
      });
    });

	// 	//EDIT RELEASE
  //   $('#editReleaseForm').submit(function(e) {
  //     e.preventDefault();

  //     var btn = $('.editReleaseBtn');
  //     var id = $('.edit-id').val();
  //     var data = $(this).serialize();
  //     btn.html('<i class="fa fa-spin fa-spinner"></i> Menyimpan...').attr('disabled', true);

  //     $('.err').empty();
  //     $.ajax({
  //       method: 'POST',
  //       url: '<?php #echo site_url('admin/release/edit_release'); ?>',
  //       data: data,
  //       success: function (res) {
  //         if (res.code == 201) {
  //           btn.html('<i class="fa fa-check"></i> Berhasil').removeAttr('disabled');

  //           setTimeout(() => {
  //             $('#editModal').modal('hide');
  //             table.ajax.reload();
  //             btn.html('Simpan');
  //           }, 1500);
  //         }else if(res.code ==409){
  //           btn.html('Simpan').removeAttr('disabled');
  //           if(res.name_error){
	// 							$('.edit-name-error').append(res.name_error);
	// 						}
  //         }
  //       }
  //     })
  //   });

  });

	

</script>
