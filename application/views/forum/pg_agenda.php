<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header text-center">List Pengajuan Rapat SUB KOORDINATOR SUB-SUBSTANSI PENGENDALIAN TATA RUANG DAN PENGAWASAN BANGUNAN</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered ">
				<thead>
					<tr>
						<th>Seksi / SUB KOORDINATOR SUB-SUBSTANSI</th>
						<th>Agenda Rapat</th>
						<th>Tanggal Rapat</th>
						<th>Status</th>
						<th>Materi Rapat</th>
						<th>Undangan Rapat</th>
						<th>Link Rapat</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
						foreach ($pg_agenda->result() as $pgagenda) { 
							$url_tersimpan = 'forum/updatestatus?status=tersimpan&agenda=pengendalian&id='.$pgagenda->id_pengendalian;
							$url_diajukan = 'forum/updatestatus?status=diajukan&agenda=pengendalian&id='.$pgagenda->id_pengendalian;
							$url_dirapatkan = 'forum/updatestatus?status=dirapatkan&agenda=pengendalian&id='.$pgagenda->id_pengendalian;
							$url_diinformasikan = 'forum/updatestatus?status=diinformasikan&agenda=pengendalian&id='.$pgagenda->id_pengendalian;
							$url_print = 'forum/print?status=cetak&agenda=pengendalian&id=' .$pgagenda->id_pengendalian;
					?>

					<tr>
						<td><?=$pgagenda->bidang;?></td>
						<td><?=$pgagenda->nama_kegiatan;?></td>
						<td><?=$pgagenda->tanggal_kegiatan;?></td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									<?= $pgagenda->status; ?>
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?=base_url($url_tersimpan) ?>">Tersimpan</a></li>
									<li><a class="dropdown-item" href="<?=base_url($url_diajukan) ?>">Diajukan</a></li>
									<li><a class="dropdown-item" href="<?=base_url($url_dirapatkan) ?>">Dirapatkan</a></li>
									<li><a class="dropdown-item" href="<?=base_url($url_dirapatkan) ?>">Diinformasikan</a></li>
									<li><a class="dropdown-item" href="<?=base_url($url_print) ?>">Hanya Cetak</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
								</ul>
							</div>
						</td>
						
								

					</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
