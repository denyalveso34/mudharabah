<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header text-center">List Pengajuan Rapat Bidang Perencanaan</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered ">
				<thead>
					<tr>
						<th>Bidang</th>
						<th>Judul Kegiatan</th>
						<th>Tanggal Kegiatan</th>
						<th>Status</th>
						<th>Input Link Rapat</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach ($pr_agenda->result() as $pragenda) { 
							$url_tersimpan = 'forum/updatestatus?status=tersimpan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
							$url_diajukan = 'forum/updatestatus?status=diajukan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
							$url_dirapatkan = 'forum/updatestatus?status=dirapatkan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
							$url_diinformasikan = 'forum/updatestatus?status=diinformasikan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
							$url_print = 'forum/print?status=cetak&agenda=perencanaan&id=' .$pragenda->id_perencanaan;
					?>
				
					<tr>
						<td><?=$pragenda->bidang;?></td>
						<td><?=$pragenda->judul_kegiatan;?></td>
						<td><?=$pragenda->tanggal_kegiatan;?></td>
						<td>
							<div class="btn-group">
								<button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
									<?= $pragenda->status; ?>
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?=base_url($url_tersimpan) ?>">tersimpan</a></li>
									<li><a class="dropdown-item" href="<?=base_url($url_diajukan) ?>">diajukan</a></li>
									<li><a class="dropdown-item" href="<?=base_url($url_dirapatkan) ?>">dirapatkan</a></li>
									<li><a class="dropdown-item" href="<?=base_url($url_diinformasikan) ?>">diinformasikan</a></li>
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
