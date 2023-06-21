<!-- <div class="col-xl-12">

	<div class="nav-align-top mb-4">
		<ul class="nav nav-pills mb-3 nav-fill" role="tablist">

			<!-- Tab Informasi Perencanaan -->
			<!-- <li class="nav-item">
				<button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
					data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home"
					aria-selected="true"><i class="tf-icons bx bx-message-square"></i> Aspek Perencanaan
					<!-- <span
						class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">5
					</span> -->
				</button>
			</li> -->

			<!-- Tab Informasi Pemanfaatan -->
			<!-- <li class="nav-item">
				<button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
					data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile"
					aria-selected="false"><i class="tf-icons bx bx-message-square"></i> Aspek Pemanfaatan
					<!-- <span
						class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">5
					</span> -->
				</button>
			</li> -->

			<!-- Tab Informasi Pengeendalian -->
			<!-- <li class="nav-item">
				<button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
					data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages"
					aria-selected="false"><i class="tf-icons bx bx-message-square"></i> Aspek Pengendalian</button>
			</li>
		</ul> -->


		<!-- <div class="tab-content"> -->
			<!-- Perencanaan content -->
			<!-- <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel"> -->
				<!-- Bordered Table -->
				<!-- <div class="card">
					<div class="card-body">
						<div class="table-responsive text-nowrap">
							<table class="table table-bordered ">
								<thead>
									<tr>
										<th>Bidang</th>
										<th>Judul Kegiatan</th>
										<th>Tanggal Kegiatan</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									foreach ($pr_agenda->result() as $pragenda) { 
										$url_tersimpan = 'forum/updatestatus?status=tersimpan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
										$url_diajukan = 'forum/updatestatus?status=diajukan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
										$url_dirapatkan = 'forum/updatestatus?status=dirapatkan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
										$url_diinformasikan = 'forum/updatestatus?status=diinformasikan&agenda=perencanaan&id='.$pragenda->id_perencanaan;
									?>
									<tr>
										<td><?=$pragenda->bidang;?></td>
										<td><?=$pragenda->judul_kegiatan;?></td>
										<td><?=$pragenda->tanggal_kegiatan;?></td>
										<td>
											<div class="btn-group">
												<button type="button" class="btn btn-success dropdown-toggle"
													data-bs-toggle="dropdown" aria-expanded="false">
													<?= $pragenda->status; ?>
												</button>
												<ul class="dropdown-menu">
													<li><a class="dropdown-item"
															href="<?=base_url($url_tersimpan) ?>">tersimpan</a></li>
													<li><a class="dropdown-item"
															href="<?=base_url($url_diajukan) ?>">diajukan</a></li>
													<li><a class="dropdown-item"
															href="<?=base_url($url_dirapatkan) ?>">dirapatkan</a></li>
													<li><a class="dropdown-item"
															href="<?=base_url($url_diinformasikan) ?>">diinformasikan</a>
													</li>
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

			</div> -->

			<!-- Pemanfaatan content -->
			<!-- <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel"> -->
				<!-- Bordered Table -->
				<!-- <div class="card">
					<div class="card-body">
						<div class="table-responsive text-nowrap">
							<table class="table table-bordered ">
								<thead>
									<tr>
										<th>Bidang</th>
										<th>Judul Kegiatan</th>
										<th>Tanggal Kegiatan</th>
										<th>Status</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div> -->

			<!-- Pengendalian content -->
			<!-- <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel"> -->
				<!-- Bordered Table -->
				<!-- <div class="card">
					<div class="card-body">
						<div class="table-responsive text-nowrap">
							<table class="table table-bordered ">
								<thead>
									<tr>
										<th>No</th>
										<th>Tema</th>
										<th>Nama Kegiatan</th>
										<th>Tanggal</th>
										<th>Lokasi</th>
										<th>Tindak Lanjut</th>
										<th>Keterangan</th>
										<th>File Materi</th>
										<th>Komentar</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div> 
</div> 
