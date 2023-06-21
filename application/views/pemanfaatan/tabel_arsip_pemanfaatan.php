<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Bidang Pemanfaatan</h5>
	<div class="card-body">
		<div class="card-datatable text-nowrap">
			<table class="table datatables-basic table-bordered">
				<a href="<?php echo base_url(). 'pemanfaatan/tabel_input_pemanfaatan/';?>"><button
						class="btn btn-warning">Tambah Data KKPR</button></a>
				<a href="<?=base_url('pemanfaatan')?>">
						<button class="btn btn-warning">Batal</button></a>
				<thead>
					<tr>
						<th>Nomor Berita Acara</th>
						<th>Judul Kegiatan</th>
						<th>Tanggal Permohonan</th>
						<th>Koordinat Lokasi Geojson</th>
						<th>Koordinat Lokasi SHP</th>
						<th>File Bukti Penguasaan Tanah</th>
						<th>Rencana Teknis Bangunan</th>
						<th>Tanggal Pertek Terbit</th>
						<th>Tanggal Pertek Diterima</th>
						<th>Nomor Pertek</th>
						<th>Upload Data BPN</th>
						<th>Rekomendasi Persetujuan</th>
						<th>Peta Persetujuan Kesesuaian</th>
						<th>Form Persetujuan Anggota FPR</th>
						<th>Nomor Berita Acara</th>
						<th>Tanggal Berita Acara</th>
						<th>Komentar</th>
						<th>Upload Berita Acara</th>
						<th>Status Kegiatan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pemanfaatan_list->result() as $pemanfaatan) { ?>
					<tr>
						<td><?=$pemanfaatan->nomor_berita;?></td>
						<td><?=$pemanfaatan->nama_kegiatan;?></td>
						<td><?=$pemanfaatan->tanggal_kegiatan;?></td>
						<td><img id="frame" src="<?= base_url('uploads/') . $pemanfaatan->koordinat_geojson ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						<td><img id="frame" src="<?= base_url('uploads/') . $pemanfaatan->koordinat_shp ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						<td><img id="frame" src="<?= base_url('uploads/') . $pemanfaatan->penguasaan_tanah ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						<td><img id="frame" src="<?= base_url('uploads/') . $pemanfaatan->teknis_bangunan ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						<td><?=$pemanfaatan->pertex_terbit;?></td>
						<td><?=$pemanfaatan->pertex_diterima;?></td>
						<td><?=$pemanfaatan->nomor_pertex;?></td>
						<td><img id="frame" src="<?= base_url('uploads/') . $pemanfaatan->data_bpn ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						<td data-label="rekomendasi_persetujuan">
							<!-- Form with Image horizontal Modal -->
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
						</td>
						<td data-label="peta_persetujuan">
							<!-- Form with Image horizontal Modal -->
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
						</td>
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
						</td>
						<td><?=$pemanfaatan->nomor_ba;?></td>
						<td><?=$pemanfaatan->tanggal_ba;?></td>
						<td><?=$pemanfaatan->komentar;?></td>
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
						</td>
						<td><?=$pemanfaatan->status;?></td>
						<td data-label="Opsi">
							<a href="<?=base_url('pemanfaatan/edit_pemanfaatan?id_pemanfaatan='.$pemanfaatan->id_pemanfaatan);?>"
								class="btn btn-xs btn-icon edit" data-toggle="tooltip"
								data-original-title="edit pemanfaatan">
								<i class="fas fa-edit"></i>
							</a>
							<a href="<?=base_url('pemanfaatan/hapus?id_pemanfaatan='.$pemanfaatan->id_pemanfaatan);?>"
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
