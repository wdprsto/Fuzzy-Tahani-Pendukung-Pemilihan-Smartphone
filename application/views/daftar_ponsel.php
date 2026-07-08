<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="ps-container" style="padding:28px 24px 90px;max-width:1200px">
	<span class="ps-eyebrow">Katalog</span>
	<div class="ps-table-wrap">
	<div class="ps-table-scroll">
		<table class="ps-table table" id="tbl_rilis" style="width:100%;min-width:1200px">
			<thead>
				<tr>
					<th class="text-center">Id</th>
					<th>Nama</th>
					<th class="text-center">Kecepatan Prosesor</th>
					<th class="text-center">Core Prosesor</th>
					<th class="text-center">RAM</th>
					<th class="text-center">Memori Internal</th>
					<th class="text-center">Kamera Utama</th>
					<th class="text-center">Kamera Sekunder</th>
					<th class="text-center">Baterai</th>
					<th class="text-center">Sistem Operasi</th>
					<th class="text-center">Ukuran Layar</th>
					<th class="text-right">Harga</th>
					<th class="text-center">Performa</th>
				</tr>
			</thead>
		</table>
	</div>
	</div>
</main>

<?php include 'tombolkembali.php'; ?>
</body>
</html>

<script>
function format_rp(x) {
	return "Rp" + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}
$(document).ready(function() {
	$('#tbl_rilis').DataTable({
		"dom": 'Brtip',
		"select": true,
		"paging": true,
		"pageLength": 5,
		"ajax": "<?php echo site_url('pages/release_api?action=list'); ?>",
		"columns": [
			{ "data": "id" },
			{ "data": "nama" },
			{ "mRender": function(d,t,r){ return r.kec_prosesor+" GHz"; } },
			{ "mRender": function(d,t,r){ return r.core_prosesor+" Core"; } },
			{ "mRender": function(d,t,r){ return r.ram+" MB"; } },
			{ "mRender": function(d,t,r){ return r.mem_internal+" GB"; } },
			{ "mRender": function(d,t,r){ return r.kam_utama+" MP"; } },
			{ "mRender": function(d,t,r){ return r.kam_sekunder+" MP"; } },
			{ "mRender": function(d,t,r){ return r.baterai+" mAh"; } },
			{ "data": "so" },
			{ "mRender": function(d,t,r){ return r.uk_layar+" Inch"; } },
			{ "mRender": function(d,t,r){ return format_rp(r.harga); } },
			{ "data": "performa" },
		],
		"language": {
			"infoEmpty": "Tidak ada data yang ditampilkan",
			"zeroRecords": "Data belum tersedia",
		},
		'order': [[0, 'asc']]
	});
});
</script>
