<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Permohonan Informasi</h5>
	<div class="card-body">
		<div class="card-datatable text-nowrap">
			<table class="table datatables-basic table-bordered">
				<a href="<?php echo base_url(). 'pemanfaatan/input_informasi_pemanfaatan/';?>"><button
						class="btn btn-warning">Tambah Data Permohonan Informasi</button></a>
				<a href="<?=base_url('pemanfaatan')?>">
						<button type="button" class="btn btn-warning">Batal</button>
						</a>
				<hr>
				<thead>
					<tr>
						<th>Nomor Berita Acara</th>
						<th>Tanggal Kegiatan</th>
						<!-- <th>No</th> -->
						<th>Nama Kegiatan</th>
						<th>Nama Pemohon</th>
						<th>Berita Acara</th>
						<th>Pembahasan</th>
						<th>Kesimpulan</th>
						<th>Status Kegiatan</th>
						<th>Upload Berita Acara</th>
						<th>Data / File</th>
						<th>Foto / Bukti</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pemanfaatan_list->result() as $pemanfaatan) { ?>
					<tr>
						<td><?=$pemanfaatan->nomor_berita;?></td>
						<td><?=$pemanfaatan->tanggal_kegiatan;?></td>
						<!-- <td><?=$pemanfaatan->id_informasi;?></td> -->
						<td><?=$pemanfaatan->nama_kegiatan;?></td>
						<td><?=$pemanfaatan->nama_pemohon;?></td>
						<td><?=$pemanfaatan->berita_acara;?></td>
						<td><?=$pemanfaatan->pembahasan;?></td>
						<td><?=$pemanfaatan->kesimpulan;?></td>
						<td><?=$pemanfaatan->status;?></td>
						<td data-label="form_persetujuanforum">
							<div class="modal-onboarding modal animate__animated" id="onboardHorizontalImageModal"
								tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
									<div class="modal-content text-center">
										<div class="modal-header">
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close">
											</button>
										</div>
										<div class="modal-body ">
											<div class="onboarding-media">
												<img src="<?=$this->config->item('img').'/illustrations/sitting-girl-with-laptop-light.png';?>"
													alt="boy-verify-email-light" width="273" class="img-fluid"
													data-app-dark-img="illustrations/boy-verify-email-dark.png"
													data-app-light-img="illustrations/boy-verify-email-light.png">
											</div>
											<div class="onboarding-content mb-0">
												<h4 class="onboarding-title text-body">Update Data</h4>
												<form>
													<div class="row">
														<div class="col-md">
															<div class="mb-6">
																<label for="nameEx7" class="form-label">Your File
																	PDF</label>
																<div class="col-md">
																	<input name="teknis_bangunan" class="form-control"
																		type="file" id="formFile"
																		placeholder="teknis_bangunan"
																		value="<?=isset($edit["teknis_bangunan"]) ? set_value("teknis_bangunan", $edit["teknis_bangunan"]): set_value("teknis_bangunan"); ?>">
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
										<div class="modal-footer border-0">
											<button type="button" class="btn btn-label-secondary"
												data-bs-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 text-center">
								<!-- horizontal slider modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal"
									data-bs-target="#onboardHorizontalImageModal">Upload
								</button>
								<button type="button" class="btn btn-info">Detail</button>
							</div>
						<td><img id="frame" src="<?= base_url('uploads/') . $pemanfaatan->foto ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						<td>
							<a href="<?=base_url('uploads/'.$pemanfaatan->file)?>" download class="text-primary mt-3">
								<?=$pemanfaatan->materi?>
							</a>
						</td>

						<td data-label="Opsi">

							<a href="<?=base_url('pemanfaatan/edit_informasi_pemanfaatan?id_informasi='.$pemanfaatan->id_informasi);?>"
								class="btn btn-xs btn-icon edit" data-toggle="tooltip"
								data-original-title="edit informasi">
								<i class="fas fa-edit"></i>
							</a>

							<a href="<?=base_url('pemanfaatan/hapus_informasi?id_informasi='.$pemanfaatan->id_informasi);?>"
								class="btn btn-xs btn-icon delete" data-toggle="hapus" data-original-title="hapus">
								<i class="fas fa-trash "></i>
							</a>

						</td>

					</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!--/ Bordered Table -->
