<?php
	if ($title == "Peta Persetujuan PKKPR"){$url = "pemanfaatan/input_peta_pemanfaatan"; $page_title = "Input Peta Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang";}
	elseif ($title == "Edit Peta Persetujuan PKKPR") {$url = "pemanfaatan/edit_peta_pemanfaatan"; $page_title = "Edit Input Peta Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang";}
?>

<div class="card-body">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h5 class="mb-0"><?=$page_title?></h5>
	</div>
	
	<form action="<?=base_url($url);?>" method='post' enctype="multipart/form-data">
					<!-- input bidang type hidden -->
					<input type="hidden" name="bidang" value="Pemanfaatan">

	<form>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
			<div class="col-sm-10">
				<input name="nama" type="text" class="form-control" id="basic-default-name" placeholder="Nama"
					value="<?=isset($edit["nama"]) ? set_value("nama", $edit["nama"]): set_value("nama"); ?>" required="required">
			</div>
		</div>

		<!-- id persetujuan auto increment -->
		<input type="hidden" name="id_persetujuan"
			value="<?=isset($edit["id_persetujuan"]) ? set_value("id_persetujuan", $edit["id_persetujuan"]): set_value("id_persetujuan"); ?>">
		
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-company">Alamat</label>
			<div class="col-sm-10">
				<input name="alamat" type="text" class="form-control" id="basic-default-company"
					placeholder="Alamat"
					value="<?=isset($edit["alamat"]) ? set_value("alamat", $edit["alamat"]): set_value("alamat"); ?>" required="required">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-company">Peruntukan Dimohon</label>
			<div class="col-sm-10">
				<input name="peruntukan" type="text" id="basic-default-company" class="form-control"
					placeholder="Peruntukan Dimohon"
					value="<?=isset($edit["peruntukan"]) ? set_value("peruntukan", $edit["peruntukan"]): set_value("peruntukan"); ?>" required="required">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label" for="basic-default-message">Lokasi Dimohon</label>
			<div class="col-sm-10">
			<input name="lokasi" type="text" id="basic-default-company" class="form-control"
					placeholder="Lokasi Dimohon"
					value="<?=isset($edit["lokasi"]) ? set_value("lokasi", $edit["lokasi"]): set_value("lokasi"); ?>" required="required">
			</div>
		</div>
		<!--<div class="mb-3">
			<label for="exampleFormControlSelect1" class="form-label">Keputusan PKKPR</label>
			<select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
				<option selected>*Tentukan Hasil Keputusan</option>
				<option value="1">Disetujui</option>
				<option value="2">Disetujui Sebagian</option>
				<option value="3">Ditolak Seluruhnya</option>
			</select>
		</div>-->
		<div class="row mb-3">
					<label class="col-sm-2 col-form-label" for="basic-default-company">Keputusan PKKPR</label>
					<div class="col-sm-10">
					<select name="keputusan_pkkpr" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
						<option value="Disetujui" <?=isset($edit["keputusan_pkkpr"]) && $edit["keputusan_pkkpr"] == "0" ? "selected" : "" ?> >Disetujui</option>
						<option value="Disetujui Sebagian" <?=isset($edit["keputusan_pkkpr"]) && $edit["keputusan_pkkpr"] == "1" ? "selected" : "" ?> >Disetujui Sebagian</option>
						<option value="Ditolak Seluruhnya" <?=isset($edit["keputusan_pkkpr"]) && $edit["keputusan_pkkpr"] == "2" ? "selected" : "" ?> >Ditolak Seluruhnya</option>
				</select>
				</div>
				</div>		

		<!--CheckBox-->
		<!--<div class="card-body">
			<div class="row gy-3">
				<div class="col-md">
					<small class="text fw-bold">Pasal Yang Digunakan Sebagai Pertimbangan :</small>
					<div class="form-check mt-3">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
						<label class="form-check-label" for="defaultCheck1">
							a. Peraturan Pemerintah No. 21 Tahun 2021 tentang Penyelenggaraan Penataan Ruang
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked />
						<label class="form-check-label" for="defaultCheck2">
							b. Peraturan Menteri Agraria dan Tata Ruang / Kepala Badan Pertanahan Nasional Republik Indonesia No. 13
							Tahun 2021 tentang Pelaksanaan Kesesuaian Kegiatan Pemanfaatan Ruang dan Sinkronisasi Program Pemanfaatan
							Ruang
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
						<label class="form-check-label" for="defaultCheck3">
							c. Peraturan Daerah Kota Malang No. 2 Tahun 2016 tentang Rencana Detail Tata Ruang dan Peraturan
							Zonasi Bagian Wilayah Perkotaan Malang Tengah Tahun 2016 - 2036
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="disabledCheck1" checked />
						<label class="form-check-label" for="disabledCheck1">
							d. Pertimbangan Teknis Pertanahan untuk Kegitan Penerbitan Kesesuaian Kegiatan Pemanfaatan Ruang Nomor
							134/2022 Tanggal 15 Juli 2022
						</label>
					</div>
								<div class="col-sm-12">
											<label class="form-label" for="koordinat_geografis"></label>
											<input name="koordinat_geografis" type="text" class="form-control mb-1"
													placeholder="Tambahan CheckBox"
											value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>">
										</div>
				</div>
			</div>
		</div>
</div>-->
		<div class="col-12">
			<div class="card mb-4">
				<!--<h5 class="card-header">Upload File SHP</h5>-->
				<!--<div class="card-body">-->
				<!--<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Upload Data / File</label>
						<div class="col-sm-9">
							<input name="file" class="form-control" type="file" id="formFile" placeholder="file"
								value="<?=isset($edit["file"]) ? set_value("file", $edit["file"]): set_value("file"); ?>" required="required">
						</div>
					</div>-->
					<!--<form action="/upload" class="dropzone needsclick" id="dropzone-basic">
						<div class="fallback">
							<input name="file" type="file" />
						</div>
					</form>
				</div>-->
				<!--<div class="col-12">
					<div class="card">
						<h5 class="card-header">Legenda</h5>
						<div class="card-body">
							<p class="card-text">Keterangan Umum</p>

							<p class="demo-inline-spacing">
								<a class="btn btn-primary me-1" data-bs-toggle="collapse" href="#multiCollapseExample1"
									role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Kota
									Pemerintahan</a>
								<button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
									data-bs-target="#multiCollapseExample2" aria-expanded="false"
									aria-controls="multiCollapseExample2"> Batas
									Administrasi
								</button>
								<button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
									data-bs-target="#multiCollapseExample3" aria-expanded="false"
									aria-controls="multiCollapseExample3">
									Perairan
								</button>
							</p>
							<div class="row">
								<div class="col-12 col-md-6 mb-2 mb-md-0">
									<div class="collapse multi-collapse" id="multiCollapseExample1">
										<div class="d-grid d-sm-flex p-3 border">
											<img src="../../assets/img/elements/2.jpg" alt="collapse-image" height="125"
												class="me-4 mb-sm-0 mb-2">
											<span>
												All the Lorem Ipsum generators on the Internet tend to repeat predefined
												chunks as necessary, making
												this the first true generator on the Internet. It uses a dictionary of
												over 200 Latin words,
												combined with a handful of model sentence structures, to generate Lorem
												Ipsum which looks
												reasonable.
											</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="collapse multi-collapse" id="multiCollapseExample2">
										<div class="d-grid d-sm-flex p-3 border">
											<img src="../../assets/img/elements/3.jpg" alt="collapse-image" height="125"
												class="me-4 mb-sm-0 mb-2">
											<span>
												There are many variations of passages of Lorem Ipsum available, but the
												majority have suffered
												alteration in some form, by injected humour, or randomised words which
												don't look even slightly
												believable. If you are going to use a passage of Lorem Ipsum.
											</span>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="collapse multi-collapse" id="multiCollapseExample3">
										<div class="d-grid d-sm-flex p-3 border">
											<img src="../../assets/img/elements/3.jpg" alt="collapse-image" height="125"
												class="me-4 mb-sm-0 mb-2">
											<span>
												There are many variations of passages of Lorem Ipsum available, but the
												majority have suffered
												alteration in some form, by injected humour, or randomised words which
												don't look even slightly
												believable. If you are going to use a passage of Lorem Ipsum.
											</span>
										</div>
									</div>
								</div>
								<div class="card-body">
									<p class="card-text">Rencana Pola Ruang</p>
									<p class="demo-inline-spacing">
										<a class="btn btn-primary me-1" data-bs-toggle="collapse"
											href="#multiCollapseExample4" role="button" aria-expanded="false"
											aria-controls="multiCollapseExample4">Kota Pemerintahan</a>
										<button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
											data-bs-target="#multiCollapseExample5" aria-expanded="false"
											aria-controls="multiCollapseExample5">
											Batas Administrasi
										</button>
										<button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
											data-bs-target="#multiCollapseExample6" aria-expanded="false"
											aria-controls="multiCollapseExample6">
											Perairan
										</button>
									</p>
									<div class="row">
										<div class="col-12 col-md-6 mb-2 mb-md-0">
											<div class="collapse multi-collapse" id="multiCollapseExample4">
												<div class="d-grid d-sm-flex p-3 border">
													<img src="../../assets/img/elements/2.jpg" alt="collapse-image"
														height="125" class="me-4 mb-sm-0 mb-2">
													<span>
														All the Lorem Ipsum generators on the Internet tend to repeat
														predefined chunks as necessary,
														making this the first true generator on the Internet. It uses a
														dictionary of over 200 Latin
														words, combined with a handful of model sentence structures, to
														generate Lorem Ipsum which looks
														reasonable.
													</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="collapse multi-collapse" id="multiCollapseExample5">
												<div class="d-grid d-sm-flex p-3 border">
													<img src="../../assets/img/elements/3.jpg" alt="collapse-image"
														height="125" class="me-4 mb-sm-0 mb-2">
													<span>
														There are many variations of passages of Lorem Ipsum available,
														but the majority have suffered
														alteration in some form, by injected humour, or randomised words
														which don't look even slightly
														believable. If you are going to use a passage of Lorem Ipsum.
													</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<div class="collapse multi-collapse" id="multiCollapseExample6">
												<div class="d-grid d-sm-flex p-3 border">
													<img src="../../assets/img/elements/3.jpg" alt="collapse-image"
														height="125" class="me-4 mb-sm-0 mb-2">
													<span>
														There are many variations of passages of Lorem Ipsum available,
														but the majority have suffered
														alteration in some form, by injected humour, or randomised words
														which don't look even slightly
														believable. If you are going to use a passage of Lorem Ipsum.
													</span>
												</div>
											</div>
										</div>-->
										<br>
										<div class="card-body">
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label"
													for="basic-default-name">Upload File SHP</label>
												<div class="col-sm-10">
													<input name="upload_shp" class="form-control" type="file" id="formFile" placeholder="upload_shp"
														value="<?=isset($edit["upload_shp"]) ? set_value("upload_shp", $edit["upload_shp"]): set_value("upload_shp"); ?>"
														onchange = "preview()">
												</div>
											</div>
											<div class="row mb-3">
												<label class="col-sm-3 col-form-label" for="basic-default-company">Foto</label>
												<div class="col-sm-9">
												<img id="frame" src="<?= base_url('uploads/') . $edit['upload_shp'] ?>" alt="upload_shp" height="200" width="200">
												</div>
											</div>
											<div class="row mb-3">
												<label class="col-sm-2 col-form-label"
													for="basic-default-name">Ketentuan Umum Zonasi</label>
												<div class="col-sm-10">
													<input name="ketentuan_kegiatan" type="text" class="form-control" id="basic-default-name"
														placeholder="Ketentuan Kegiatan Umum Zonasi"
														value="<?=isset($edit["ketentuan_kegiatan"]) ? set_value("ketentuan_kegiatan", $edit["ketentuan_kegiatan"]): set_value("ketentuan_kegiatan"); ?>" required="required">
												</div>
											</div>
											<div class="row mb-3">
											<label for="exampleFormControlSelect1" class="form-label">Ketentuan Intensitas Pemanfaatan Ruang</label>
											<h5> </h5>
												<label class="col-sm-2 col-form-label"
													for="basic-default-name">Koefisien Dasar Bangunan maksimum</label>
												<div class="col-sm-10">
													<input name="kdb" type="text" class="form-control" id="basic-default-name"
														placeholder="Koefisien Dasar Bangunan maksimum"
														value="<?=isset($edit["kdb"]) ? set_value("kdb", $edit["kdb"]): set_value("kdb"); ?>" required="required">
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-sm-2 col-form-label"
													for="basic-default-name">Koefisien Lantai Bangunan maksimum</label>
												<div class="col-sm-10">
													<input name="klb" type="text" class="form-control" id="basic-default-name"
														placeholder="Koefisien Lantai Bangunan maksimum"
														value="<?=isset($edit["klb"]) ? set_value("klb", $edit["klb"]): set_value("klb"); ?>" required="required">
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-sm-2 col-form-label"
													for="basic-default-name">Ketinggian Bangunan maksimum</label>
												<div class="col-sm-10">
													<input name="kbm" type="text" class="form-control" id="basic-default-name"
														placeholder="Ketinggian Bangunan maksimum"
														value="<?=isset($edit["kbm"]) ? set_value("kbm", $edit["kbm"]): set_value("kbm"); ?>" required="required">
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-sm-2 col-form-label"
													for="basic-default-name">Koefisien Dasar Hijau maksimum</label>
												<div class="col-sm-10">
													<input name="kdh" type="text" class="form-control" id="basic-default-name"
														placeholder="Koefisien Dasar Hijau maksimum"
														value="<?=isset($edit["kdh"]) ? set_value("kdh", $edit["kdh"]): set_value("kdh"); ?>" required="required">
												</div>
											</div>

											<div class="row mb-3">
												<label class="col-sm-2 col-form-label"
													for="basic-default-name">Persyaratan Khusus</label>
												<div class="col-sm-10">
													<input name="persyaratan_khusus" type="text" class="form-control" id="basic-default-name"
														placeholder="Persyaratan Khusus"
														value="<?=isset($edit["persyaratan_khusus"]) ? set_value("persyaratan_khusus", $edit["persyaratan_khusus"]): set_value("persyaratan_khusus"); ?>" required="required">
												</div>
											</div>
											<!--<div class="row mb-3">
												<label class="col-sm-2 col-form-label"
													for="basic-default-message">Arahan Peraturan Zonasi /
													Ketentuan Umum Peraturan Zonasi(APZ/KUPZ)</label>
												<div class="col-sm-10">
													<textarea id="basic-default-message" class="form-control"
														placeholder="Isikan Ketentuan Kegiatan dan Penggunaan Lahan"></textarea>
													<textarea id="basic-default-message" class="form-control"
														placeholder="Isikan Ketentuan Intensitas Pemanfaatan Ruang"></textarea>
													<textarea id="basic-default-message" class="form-control"
														placeholder="Isikan Persyaratan Khusus"></textarea>
												</div>
											</div>
										</div>-->
										<hr class="m-0" />
										<div class="col-sm-9">
											<h5> </h5>
											<input name="submit" type="submit" class="btn btn-primary" value="Simpan">
											
											
											<a href="<?=base_url('pemanfaatan/tabel_input_pemanfaatan')?>">
											<button type="button" class="btn btn-warning">Batal</button>
											</a>
											<a href="<?=base_url('pemanfaatan/tabel_arsip_pkkpr')?>">
											<button type="button" class="btn btn-success">Lihat Arsip</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr class="m-0" />
	</form>
</div>
</div>
</div>
