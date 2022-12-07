<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Main Body -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="placeholdericon">
                    <!-- <a href="tentang-benar-dan-salah-pada-ui-design.html"> -->
                    <div class="row">
                        <div class="col-md-3 col-lg-3 ">
							<!-- <div class="logoicon "><img src="<?php #echo get_theme_uri('images/icon.png', 'made'); ?>"></div> -->
                        </div>
                        <div class="table-responsive col-md-9 col-lg-9 mb-4">
                            <table class="table text-white table-rilis align-items-center table-flush" id='tbl_rilis' style="width: 100%">
                                <thead >
                                    <tr>
										<th scope="col">Id</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kecepatan Prosesor</th>
                                        <th scope="col">Core Prosesor</th>
										<th scope="col">RAM</th>
										<th scope="col">Memori Internal</th>
										<th scope="col">Kamera Utama</th>
										<th scope="col">Kamera Sekunder</th>
										<th scope="col">Baterai</th>
										<th scope="col">Sistem Operasi</th>
										<th scope="col">Ukuran Layar</th>
										<th scope="col">Harga</th>
										<th scope="col">Performa</th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
        <!-- <div class="logoicon stick-left-bottom"><img src="icon.png"></div> -->
		<?php include 'tombolkembali.php';?>
  </body>
</html>

<script>
function format_rp(x) {
    return "Rp"+x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
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
			"ajax": "<?php echo site_url('pages/release_api?action=list'); ?>",
			"columns": [
				{"data": "id"},
				{"data": "nama"},
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
			],
			"language" : {
				"infoEmpty" : "Tidak ada data yang ditampilkan",
				"zeroRecords" : "Data belum tersedia",
			},
			'order':[[0, 'asc']]
		});

});
</script>
