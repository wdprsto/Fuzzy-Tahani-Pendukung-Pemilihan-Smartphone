<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<main class="ps-container" style="padding-top:28px">
	<div class="ps-panel ps-panel--frost">
		<div class="ps-panel__body">
			<div style="font-weight:700;font-size:15px;color:var(--ink-900)" id="label-hasil">
				Pilih kriteria untuk mendapatkan rekomendasi
			</div>
			<div style="font-size:12px;color:var(--ink-700);margin-top:6px" id="text-hasil"></div>
		</div>
	</div>

	<div class="ps-two-col">
		<form id="addRekomendasiForm" role="form" action="#" method="POST" enctype="multipart/form-data">
			<div class="ps-panel">
				<div class="ps-panel__header">Kriteria</div>
				<div class="ps-panel__body" style="max-height:360px;overflow-y:auto">

					<?php
					$fields = [
						['name'=>'kec_prosesor','label'=>'Kecepatan Prosesor','placeholder'=>'Pilih Kecepatan Prosesor','opts'=>['pelan'=>'Pelan','sedang'=>'Sedang','cepat'=>'Cepat']],
						['name'=>'core_prosesor','label'=>'Core Processor','placeholder'=>'Pilih Core Prosesor','opts'=>['biasa'=>'Biasa','sedang'=>'Sedang','bagus'=>'Bagus']],
						['name'=>'ram','label'=>'RAM','placeholder'=>'Pilih RAM','opts'=>['kecil'=>'Kecil','sedang'=>'Sedang','besar'=>'Besar']],
						['name'=>'mem_internal','label'=>'Memori Internal','placeholder'=>'Pilih Memori Internal','opts'=>['kecil'=>'Kecil','sedang'=>'Sedang','besar'=>'Besar']],
						['name'=>'kam_utama','label'=>'Kamera Utama','placeholder'=>'Pilih Kamera Utama','opts'=>['rendah'=>'Rendah','sedang'=>'Sedang','besar'=>'Besar']],
						['name'=>'kam_sekunder','label'=>'Kamera Sekunder','placeholder'=>'Pilih Kamera Sekunder','opts'=>['rendah'=>'Rendah','sedang'=>'Sedang','besar'=>'Besar']],
						['name'=>'baterai','label'=>'Baterai','placeholder'=>'Pilih Kapasitas Baterai','opts'=>['kecil'=>'Kecil','sedang'=>'Sedang','besar'=>'Besar']],
						['name'=>'so','label'=>'Sistem Operasi','placeholder'=>'Pilih Sistem Operasi','opts'=>['Android'=>'Android','iOS'=>'iOS','Lainnya'=>'Lainnya']],
						['name'=>'uk_layar','label'=>'Ukuran Layar','placeholder'=>'Pilih Ukuran Layar','opts'=>['kecil'=>'Kecil','sedang'=>'Sedang','besar'=>'Besar']],
						['name'=>'harga','label'=>'Harga','placeholder'=>'Pilih Harga','opts'=>['murah'=>'Murah','sedang'=>'Sedang','mahal'=>'Mahal']],
						['name'=>'performa','label'=>'Performa','placeholder'=>'Pilih Performa','opts'=>['rendah'=>'Rendah','menengah'=>'Menengah','tinggi'=>'Tinggi']],
					];
					foreach ($fields as $f): ?>
						<label class="ps-field">
							<span class="ps-field__label"><?php echo $f['label']; ?></span>
							<span class="ps-select-wrap">
								<select name="<?php echo $f['name']; ?>" class="ps-select" required
									oninvalid="this.setCustomValidity('Ini harus dipilih')"
									oninput="this.setCustomValidity('')">
									<option value="" disabled selected><?php echo $f['placeholder']; ?></option>
									<?php foreach ($f['opts'] as $v => $l): ?>
										<option value="<?php echo $v; ?>"><?php echo $l; ?></option>
									<?php endforeach; ?>
								</select>
							</span>
						</label>
					<?php endforeach; ?>

				</div>
				<div class="ps-panel__body" style="border-top:var(--line) solid var(--ink-900);display:flex;justify-content:center">
					<button type="submit" name="submit" class="ps-btn ps-btn--primary ps-btn--lg addRekomendasiBtn">
						Buat Rekomendasi
					</button>
				</div>
			</div>
		</form>

		<div>
			<span class="ps-eyebrow">Peringkat</span>
			<div class="ps-table-wrap">
				<table class="ps-table table" id="tbl_rilis" style="width:100%;min-width:520px">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Nama</th>
							<th class="text-right">Harga</th>
							<th class="text-right">Nilai Rekomendasi</th>
						</tr>
					</thead>
				</table>
			</div>
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
		var table = $('#tbl_rilis').DataTable({
			"dom": 'Brt',
			"columns": [
				{ "data": "id" },
				{ "data": "nama" },
				{ "mRender": function(data, type, row) { return format_rp(row.harga); } },
				{ "mRender": function(data, type, row) { return parseFloat(row.performa).toFixed(2); } },
			],
			"language": {
				"infoEmpty": "Tidak ada data yang ditampilkan",
				"zeroRecords": "Data belum tersedia",
			},
		});

		$('#addRekomendasiForm').submit(function(e) {
			e.preventDefault();
			var data = $(this).serialize();
			table.ajax.url("<?php echo site_url('pages/release_api?action=rekomendasi&'); ?>" + data).load();

			var chips = [];
			var labels = {
				kec_prosesor: 'Prosesor', core_prosesor: 'Core', ram: 'RAM',
				mem_internal: 'Memori', kam_utama: 'Kamera', kam_sekunder: 'Kam. 2',
				baterai: 'Baterai', so: 'OS', uk_layar: 'Layar', harga: 'Harga', performa: 'Performa'
			};
			data.split('&').forEach(function(p) {
				var kv = p.split('=');
				if (!kv[1]) return;
				var k = decodeURIComponent(kv[0]);
				var v = decodeURIComponent(kv[1]);
				chips.push('<span class="ps-chip"><span class="ps-chip__label">' + (labels[k] || k) + '</span><span class="ps-chip__value">' + v + '</span></span>');
			});

			$('#label-hasil').html("Hasil Rekomendasi untuk kriteria");
			$('#text-hasil').html('<div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:10px">' + chips.join('') + '</div>');
		})
	});
</script>
