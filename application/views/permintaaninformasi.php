<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Main Body -->
<div class="container">
	<div class="row align-items-center justify-content-center">
		<div class="col-md-12 col-lg-12">
			<div class="placeholdericon" >
				<div class="row">
					<div class="col-md-5 col-lg-5" >
						<form role="form" action="#" method="POST" id="addRekomendasiForm" enctype="multipart/form-data">
							<div class="syarat-permintaan-info" style="max-height:330px; overflow-y:scroll">

								<div class="form-group mb-3">
									<label for="role">Kecepatan Prosesor</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="kec_prosesor" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Kecepatan Prosesor</option>
											<option value="pelan">Pelan</option>
											<option value="sedang">Sedang</option>
											<option value="cepat">Cepat</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Core Processor</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="core_prosesor" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Core Prosesor</option>
											<option value="biasa">Biasa</option>
											<option value="sedang">Sedang</option>
											<option value="bagus">Bagus</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">RAM</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="ram" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih RAM</option>
											<option value="kecil">Kecil</option>
											<option value="sedang">Sedang</option>
											<option value="besar">Besar</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Memori Internal</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="mem_internal" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Memori Internal</option>
											<option value="kecil">Kecil</option>
											<option value="sedang">Sedang</option>
											<option value="besar">Besar</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Kamera Utama</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="kam_utama" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Kamera Utama</option>
											<option value="rendah">Rendah</option>
											<option value="sedang">Sedang</option>
											<option value="besar">Besar</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Kamera Sekunder</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="kam_sekunder" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Kamera Utama</option>
											<option value="rendah">Rendah</option>
											<option value="sedang">Sedang</option>
											<option value="besar">Besar</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Baterai</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="baterai" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Kapasitas Baterai</option>
											<option value="kecil">Kecil</option>
											<option value="sedang">Sedang</option>
											<option value="besar">Besar</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Sistem Operasi</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="so" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Sistem Operasi</option>
											<option value="Android">Android</option>
											<option value="iOS">iOS</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Ukuran Layar</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="uk_layar" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Ukuran Layar</option>
											<option value="kecil">Kecil</option>
											<option value="sedang">Sedang</option>
											<option value="besar">Besar</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Harga</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="harga" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Harga</option>
											<option value="murah">murah</option>
											<option value="sedang">Sedang</option>
											<option value="mahal">mahal</option>
										</select>
									</div>
								</div>

								<div class="form-group mb-3">
									<label for="role">Performa</label>
									<div class="input-group input-group-merge input-group-alternative add-idkat-div">
										<select name="performa" class='form-control' required oninvalid="this.setCustomValidity('Ini harus dipilih')" oninput="this.setCustomValidity('')">
											<option value="" disabled selected>Pilih Performa</option>
											<option value="rendah">rendah</option>
											<option value="menengah">menengah</option>
											<option value="tinggi">tinggi</option>
										</select>
									</div>
								</div>
							</div>
							<div class="isi-formulir text-center">
								<div class="tombol-isi-formulir"><button type="submit" name="submit" class="btn btn-danger my-2 addRekomendasiBtn ">Buat Rekomendasi</button></div>
							</div>
					</div>
					
					<div class="table-responsive col-md-7 col-lg-7 ">
						<!-- <div class="logoicon"><img src="<?php //echo get_theme_uri('images/icon.png', 'made'); 
																?>"></div> -->
						<table class="table text-white table-rilis align-items-center table-flush" id='tbl_rilis' style="width: 100%">
							<thead>
								<tr>
									<th scope="col">Id</th>
									<th scope="col">Nama</th>
									<th scope="col">Harga</th>
									<th scope="col">Nilai Rekomendasi</th>
								</tr>
							</thead>

						</table>
					</div>

				</div>
				<div style="overflow:hidden; object-fit: cover;"></div>
			</div>
		</div>


	</div>
	<!-- <div class="logoicon stick-left-bottom"><img src="icon.png"></div> -->
	<?php include 'tombolkembali.php'; ?>
	</body>

	</html>

	<script>
		function format_rp(x) {
			return "Rp" + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
		}

		$(document).ready(function() {
			//MENAMPILKAN DATA BARANG PADA TABEL
			var table = $('#tbl_rilis').DataTable({
				"dom": 'Brt',
				"select": true,
				// scrollabel
				"scrollY": "330px", //"305.5px"
				"scrollCollapse": true,
				"paging": false,
				//end scrollable
				// "ajax": "<?php echo site_url('pages/release_api?action=list'); ?>",
				"columns": [{
						"data": "id"
					},
					{
						"data": "nama"
					},
					{
						"mRender": function(data, type, row) {
							return format_rp(row.harga);
						}
					},
					{
						"data": "performa"
					},
				],
				"language": {
					"infoEmpty": "Tidak ada data yang ditampilkan",
					"zeroRecords": "Data belum tersedia",
				},
				'order': [
					[3, 'desc']
				]
			});

			//MENAMBAH PO BARU
			$('#addRekomendasiForm').submit(function(e) {
				e.preventDefault();

				//data diidapat dari penggunaan atribut "name" pada html. nanti bisa dipanggil di modal
				var data = $(this).serialize();

				table.ajax.url("<?php echo site_url('pages/release_api?action=rekomendasi&'); ?>" + data).load();

			})
		});
	</script>
