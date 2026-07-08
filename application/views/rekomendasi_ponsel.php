<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
$total = count($fields);
?>
<main class="ps-container" style="padding:28px 24px 90px;max-width:720px">

	<!-- ============ CRITERIA VIEW ============ -->
	<section id="criteria-view">
		<div class="ps-panel ps-panel--frost">
			<div class="ps-panel__body">
				<div style="font-weight:700;font-size:15px;color:var(--ink-900)">
					Pilih kriteria untuk mendapatkan rekomendasi
				</div>
				<div style="font-size:12px;color:var(--ink-700);margin-top:6px">
					<span id="progress-count">0</span> / <?php echo $total; ?> kriteria dipilih
				</div>
			</div>
		</div>

		<form id="addRekomendasiForm" role="form" action="#" method="POST" enctype="multipart/form-data">
			<div class="ps-panel">
				<div class="ps-panel__header">Kriteria</div>
				<div class="ps-panel__body" style="max-height:420px;overflow-y:auto;display:grid;gap:16px">
					<?php foreach ($fields as $f): ?>
						<label class="ps-field" style="margin:0">
							<span class="ps-field__label"><?php echo $f['label']; ?></span>
							<span class="ps-select-wrap">
								<select name="<?php echo $f['name']; ?>" class="ps-select js-crit" required
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
	</section>

	<!-- ============ RESULTS VIEW ============ -->
	<section id="results-view" style="display:none">
		<div class="ps-panel ps-panel--frost">
			<div class="ps-panel__body">
				<div style="font-weight:700;font-size:13px;color:var(--ink-900);margin-bottom:12px">
					Hasil rekomendasi untuk kriteria
				</div>
				<div id="chips" style="display:flex;flex-wrap:wrap;gap:8px"></div>
			</div>
		</div>

		<div id="result-cards" style="display:flex;flex-direction:column;gap:12px;margin-bottom:24px"></div>

		<span class="ps-eyebrow">Peringkat Lengkap</span>
		<div class="ps-table-wrap">
			<div class="ps-table-scroll">
				<table class="ps-table table" id="tbl_rilis" style="width:100%;min-width:520px">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th>Nama</th>
							<th class="text-right">Harga</th>
							<th class="text-right">Nilai</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>

		<div style="margin-top:24px;display:flex;gap:12px;flex-wrap:wrap">
			<button type="button" id="btn-edit" class="ps-btn ps-btn--brand">Ubah Kriteria</button>
			<a href="<?php echo site_url('pages/daftar_ponsel'); ?>" class="ps-btn ps-btn--ghost">Lihat Semua</a>
		</div>
	</section>
</main>

<?php include 'tombolkembali.php'; ?>
</body>
</html>

<script>
(function() {
	var LABELS = {
		kec_prosesor: 'Prosesor', core_prosesor: 'Core', ram: 'RAM',
		mem_internal: 'Memori', kam_utama: 'Kamera', kam_sekunder: 'Kam. 2',
		baterai: 'Baterai', so: 'OS', uk_layar: 'Layar', harga: 'Harga', performa: 'Performa'
	};

	function format_rp(x) {
		return "Rp" + x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	}

	function updateProgress() {
		var n = 0;
		$('.js-crit').each(function() { if ($(this).val()) n++; });
		$('#progress-count').text(n);
	}

	function renderChips(serialized) {
		var chips = [];
		serialized.split('&').forEach(function(p) {
			var kv = p.split('=');
			if (!kv[1]) return;
			var k = decodeURIComponent(kv[0]);
			var v = decodeURIComponent(kv[1]);
			chips.push(
				'<span class="ps-chip">' +
					'<span class="ps-chip__label">' + (LABELS[k] || k) + '</span>' +
					'<span class="ps-chip__value">' + v + '</span>' +
				'</span>'
			);
		});
		$('#chips').html(chips.join(''));
	}

	function renderResultCards(rows) {
		var top = rows.slice(0, 3);
		if (!top.length) {
			$('#result-cards').html(
				'<div class="ps-panel"><div class="ps-panel__body" style="text-align:center;color:var(--ink-500);font-style:italic">' +
				'Tidak ada rekomendasi yang cocok.</div></div>'
			);
			return;
		}
		var html = top.map(function(r, i) {
			var rank = i + 1;
			var score = parseFloat(r.performa) || 0;
			var pct = Math.max(0, Math.min(100, score * 100)).toFixed(0);
			var winner = rank === 1 ? ' ps-result-card--winner' : '';
			return (
				'<div class="ps-result-card' + winner + '">' +
					'<div class="ps-result-card__rank">#' + rank + '</div>' +
					'<div>' +
						'<div class="ps-result-card__name">' + r.nama + '</div>' +
						'<div class="ps-result-card__meta"><span>' + format_rp(r.harga) + '</span></div>' +
					'</div>' +
					'<div class="ps-result-card__score">' +
						'<div class="ps-result-card__score-value">' + score.toFixed(2) + '</div>' +
						'<div class="ps-result-card__meter"><div class="ps-result-card__meter-fill" style="width:' + pct + '%"></div></div>' +
					'</div>' +
				'</div>'
			);
		}).join('');
		$('#result-cards').html(html);
	}

	function showResults() {
		$('#criteria-view').hide();
		$('#results-view').show();
		window.scrollTo(0, 0);
	}
	function showCriteria() {
		$('#results-view').hide();
		$('#criteria-view').show();
		window.scrollTo(0, 0);
	}

	$(document).ready(function() {
		var table = $('#tbl_rilis').DataTable({
			"dom": 'rt',
			"paging": false,
			"info": false,
			"searching": false,
			"columns": [
				{ "data": "id", "className": "text-center" },
				{ "data": "nama" },
				{ "mRender": function(d,t,r){ return format_rp(r.harga); }, "className": "text-right" },
				{ "mRender": function(d,t,r){ return parseFloat(r.performa).toFixed(2); }, "className": "text-right mono" },
			],
			"language": {
				"infoEmpty": "Tidak ada data yang ditampilkan",
				"zeroRecords": "Data belum tersedia",
			},
		});

		$('.js-crit').on('change', updateProgress);
		updateProgress();

		$('#btn-edit').on('click', showCriteria);

		$('#addRekomendasiForm').submit(function(e) {
			e.preventDefault();
			var data = $(this).serialize();

			renderChips(data);

			$.getJSON("<?php echo site_url('pages/release_api?action=rekomendasi&'); ?>" + data, function(resp) {
				var rows = resp.data || [];
				renderResultCards(rows);
				table.clear().rows.add(rows).draw();
				showResults();
			});
		});
	});
})();
</script>
