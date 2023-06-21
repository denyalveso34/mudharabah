<?php
	if ($title == "Rekomendasi Pemanfaatan"){$url = "pemanfaatan/input_rekomendasi_pemanfaatan"; $page_title = "Input Form Rekomendasi Persetujuan Kesesuaian KPR Untuk Kegiatan Berusaha";}
	elseif ($title == "Edit Sosialisasi") { $url = "perencanaan/edit-sosialisasi"; $page_title = "Edit Kegiatan Sosialisasi";}
?>

<div class="card-body">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h5 class="mb-0"><?=$page_title?></h5>
	</div>


	<div class="col-12 mb-4">
		<small class="text-light fw-semibold"></small>
		<div class="bs-stepper wizard-numbered mt-2">
			<div class="bs-stepper-header">
				<div class="step" data-target="#account-details">
					<button type="button" class="step-trigger">
						<span class="bs-stepper-circle">1</span>
						<span class="bs-stepper-label mt-1">
							<span class="bs-stepper-title">Data Permohonan</span>
							<span class="bs-stepper-subtitle"></span>
						</span>
					</button>
				</div>
				<div class="line">
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="step" data-target="#personal-info">
					<button type="button" class="step-trigger">
						<span class="bs-stepper-circle">2</span>
						<span class="bs-stepper-label mt-1">
							<span class="bs-stepper-title">Dasar PKKPR</span>
							<span class="bs-stepper-subtitle"></span>
						</span>

					</button>
				</div>
				<div class="line">
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="step" data-target="#personal-info2">
					<button type="button" class="step-trigger">
						<span class="bs-stepper-circle">3</span>
						<span class="bs-stepper-label mt-1">
							<span class="bs-stepper-title">Kesimpulan</span>
							<span class="bs-stepper-subtitle"></span>
						</span>
					</button>
				</div>
				<div class="line">
					<i class="bx bx-chevron-right"></i>
				</div>
				<div class="step" data-target="#personal-info3">
					<button type="button" class="step-trigger">
						<span class="bs-stepper-circle">4</span>
						<span class="bs-stepper-label mt-1">
							<span class="bs-stepper-title">Ketentuan Lain</span>
							<span class="bs-stepper-subtitle"></span>
						</span>
					</button>
				</div>
			</div>
			<div class="bs-stepper-content">
				<form onSubmit="return false">

					<!-- Data Pemohon -->
					<div id="account-details" class="content">

						<div class="row g-3">
							<!-- 1 -->
							<div class="col-sm-6">
								<!-- id perencanaan auto increment -->
								<input type="hidden" name="id_permohonan"
									value="<?=isset($edit["id_permohonan"]) ? set_value("id_permohonan", $edit["id_permohonan"]): set_value("id_permohonan"); ?>">
								
								<label class="form-label" for="nama_pemohon">Nama Pemohon</label>
								<input name="nama_pemohon" type="text" class="form-control mb-1"
									placeholder="Nama Pemohon"
									value="<?=isset($edit["nama_pemohon"]) ? set_value("nama_pemohon", $edit["nama_pemohon"]): set_value("nama_pemohon"); ?>">
							</div>

							<!-- 2 -->
							<div class="col-sm-6">
								<label class="form-label" for="npwp">NPWP</label>
								<input name="npwp" type="text" class="form-control mb-1" placeholder="NPWP"
									value="<?=isset($edit["npwp"]) ? set_value("npwp", $edit["npwp"]): set_value("npwp"); ?>">
							</div>

							<!-- 3 -->
							<div class="col-sm-6">
								<label class="form-label" for="alamat_kantor">Alamat Kantor</label>
								<input name="alamat_kantor" type="text" class="form-control mb-1"
									placeholder="Alamat Kantor"
									value="<?=isset($edit["alamat_kantor"]) ? set_value("alamat_kantor", $edit["alamat_kantor"]): set_value("alamat_kantor"); ?>">
							</div>

							<!-- 4 -->
							<div class="col-sm-6">
								<label class="form-label" for="telepon">Nomor Telepon</label>
								<input name="telepon" type="text" class="form-control mb-1" placeholder="Nomor Telepon"
									value="<?=isset($edit["telepon"]) ? set_value("telepon", $edit["telepon"]): set_value("telepon"); ?>">
							</div>

							<!-- 5 -->
							<div class="col-sm-6">
								<label class="form-label" for="email">Email</label>
								<input name="email" type="text" class="form-control mb-1" placeholder="Email"
									value="<?=isset($edit["email"]) ? set_value("email", $edit["email"]): set_value("email"); ?>">
							</div>

							<!-- 6 -->
							<div class="col-sm-6">
								<label class="form-label" for="status_modal">Status Penanaman Modal</label>
								<input name="status_modal" type="text" class="form-control mb-1"
									placeholder="Status Penanaman Modal"
									value="<?=isset($edit["status_modal"]) ? set_value("status_modal", $edit["status_modal"]): set_value("status_modal"); ?>">
							</div>

							<!-- 7 -->
							<div class="col-sm-6">
								<label class="form-label" for="kode_kbli">Kode KBLI</label>
								<input name="kode_kbli" type="text" class="form-control mb-1"
									placeholder="Kode KBLI"
									value="<?=isset($edit["kode_kbli"]) ? set_value("kode_kbli", $edit["kode_kbli"]): set_value("kode_kbli"); ?>">
							</div>

							<!-- 8 -->
							<div class="col-sm-6">
								<label class="form-label" for="judul_kbli">Judul KBLI</label>
								<input name="judul_kbli" type="text" class="form-control mb-1"
									placeholder="Judul KBLI"
									value="<?=isset($edit["judul_kbli"]) ? set_value("judul_kbli", $edit["judul_kbli"]): set_value("judul_kbli"); ?>">
							</div>

							<!-- 9 -->
							<div class="col-sm-6">
								<label class="form-label" for="skala_usaha">Skala Usaha</label>
								<input name="skala_usaha" type="text" class="form-control mb-1"
									placeholder="Skala Usaha"
									value="<?=isset($edit["skala_usaha"]) ? set_value("skala_usaha", $edit["skala_usaha"]): set_value("skala_usaha"); ?>">
							</div>

							<!-- 10 -->
							<div class="col-sm-6">
								<label class="form-label" for="username"></label>
							</div>
							<h5></h5>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-message">Lokasi Usaha</label>
								<div class="col-sm-10">
									<textarea id="basic-default-message" class="form-control" placeholder="Isikan Alamat, Kelurahan dan Kecamatan"
									value="<?=isset($edit["lokasi_usaha"]) ? set_value("lokasi_usaha", $edit["lokasi_usaha"]): set_value("lokasi_usaha"); ?>"></textarea>
								</div>
							</div>
							<!--<div class="col-sm-6">
								<label class="form-label" for="alamat">Alamat</label>
								<input name="alamat" type="text" class="form-control mb-1" placeholder="Alamat"
									value="<?=isset($edit["alamat"]) ? set_value("alamat", $edit["alamat"]): set_value("alamat"); ?>">
							</div>

							 
							<div class="col-sm-6">
								<label class="form-label" for="kelurahan">Kelurahan</label>
								<input name="kelurahan" type="text" class="form-control mb-1" placeholder="Kelurahan"
									value="<?=isset($edit["kelurahan"]) ? set_value("kelurahan", $edit["kelurahan"]): set_value("kelurahan"); ?>">
							</div>

							
							<div class="col-sm-6">
								<label class="form-label" for="kecamatan">Kecamatan</label>
								<input name="kecamatan" type="text" class="form-control mb-1" placeholder="Kecamatan"
									value="<?=isset($edit["kecamatan"]) ? set_value("kecamatan", $edit["kecamatan"]): set_value("kecamatan"); ?>">
							</div> -->

							<!-- 
							<div class="col-sm-6">
								<label class="form-label" for="kota">Kota</label>
								<input name="kota" type="text" class="form-control mb-1" placeholder="Kota"
									value="<?=isset($edit["kota"]) ? set_value("kota", $edit["kota"]): set_value("kota"); ?>">
							</div>

							
							<div class="col-sm-6">
								<label class="form-label" for="provinsi">Provinsi</label>
								<input name="provinsi" type="text" class="form-control mb-1" placeholder="Provinsi"
									value="<?=isset($edit["provinsi"]) ? set_value("provinsi", $edit["provinsi"]): set_value("provinsi"); ?>">
							</div> -->

							<!-- 15 -->
							<div class="col-sm-6">
								<label class="form-label" for="koordinat_geografis">Koordinat Geografis</label>
								<input name="koordinat_geografis" type="text" class="form-control mb-1"
									placeholder="Koordinat Geografis"
									value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>">
							</div>

							<!-- 16 -->
							<div class="col-sm-6">
								<label class="form-label" for="luas_tanah">Luas Tanah</label>
								<input name="luas_tanah" type="text" class="form-control mb-1" placeholder="Luas Tanah"
									value="<?=isset($edit["luas_tanah"]) ? set_value("luas_tanah", $edit["luas_tanah"]): set_value("luas_tanah"); ?>">
							</div>

							<!-- 17 -->
							<div class="col-sm-6">
								<label class="form-label" for="penggunaan_tanah">Penggunaan Tanah</label>
								<input name="penggunaan_tanah" type="text" class="form-control mb-1"
									placeholder="Penggunaan Tanah"
									value="<?=isset($edit["penggunaan_tanah"]) ? set_value("penggunaan_tanah", $edit["penggunaan_tanah"]): set_value("penggunaan_tanah"); ?>">
							</div>

							<!-- 18 -->
							<div class="col-sm-6">
								<label class="form-label" for="rencana_teknis">Rencana Teknis Bangunan</label>
								<input name="rencana_teknis" type="text" class="form-control mb-1"
									placeholder="Rencana Teknis Bangunan"
									value="<?=isset($edit["rencana_teknis"]) ? set_value("rencana_teknis", $edit["rencana_teknis"]): set_value("rencana_teknis"); ?>">
							</div>

							<!-- 19 -->
							<div class="col-sm-6">
								<label class="form-label" for="status_tanah">Status Tanah</label>
								<input name="status_tanah" type="text" class="form-control mb-1"
									placeholder="Status Tanah"
									value="<?=isset($edit["status_tanah"]) ? set_value("status_tanah", $edit["status_tanah"]): set_value("status_tanah"); ?>">
							</div>
							<div class="col-12 d-flex justify-content-between">
								<button class="btn btn-label-secondary btn-prev" disabled>
									<i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
									<span class="align-middle d-sm-inline-block d-none">Previous</span>
								</button>
								<button class="btn btn-primary btn-next">
									<span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
									<i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
								</button>
							</div>
						</div>
					</div>

					<!-- Dasar PKKPR -->
					<div id="personal-info" class="content">
						<div class="row g-3">
							<div class="card-body">
								<div class="row gy-3">
									<div class="col-md">

									<table class="table table-bordered">
									<tbody>
										<tr>
											<td>	
            									<div class="container">
												<div class="col-md-12 text-center">
													<a href="<?=base_url('pemanfaatan/input_pkkpr_pemanfaatan')?>">
														<button type="button" class="btn btn-primary">Isi Data Dasar PKKPR</button>
													</a>
												</div>
												</div>
											</td>
						
											<td>
            									<div class="container">
												<div class="col-md-12 text-center">
													<a href="<?=base_url('pemanfaatan/tabel_arsip_dasar_pkkpr')?>">
														<button type="button" class="btn btn-success">Lihat Arsip Dasar PKKPR</button>
													</a>
												</div>
												</div>
											</td>
										</tr>
									</tbody>
									</table>


										<!--<div class="form-check mt-3">
											<input class="form-check-input" name="dasar_pkkpr[]" type="checkbox" value="<?=isset($edit["1"]) ? set_value("1", $edit["1"]): set_value("1"); ?>"
												id="defaultCheck1" />
											<label class="form-check-label" for="defaultCheck1">
												1. Peraturan Pemerintah No. 21 Tahun 2021 tentang Penyelenggaraan
												Penataan
												Ruang
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" name="dasar_pkkpr[]" type="checkbox" value="<?=isset($edit["2"]) ? set_value("2", $edit["2"]): set_value("2"); ?>" id="defaultCheck2"
												checked />
											<label class="form-check-label" for="defaultCheck2">
												2. Peraturan Menteri Agraria dan Tata Ruang / Kepala Badan Pertanahan
												Nasional Republik Indonesia No. 13 Tahun 2021 tentang Pelaksanaan
												Kesesuaian
												Kegiatan Pemanfaatan Ruang dan Sinkronisasi Program Pemanfaatan Ruang
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" name="dasar_pkkpr[]" type="checkbox" value="<?=isset($edit["3"]) ? set_value("3", $edit["3"]): set_value("3"); ?>" id="defaultCheck3"
												checked />
											<label class="form-check-label" for="defaultCheck3">
												3. Peraturan Daerah Kota Malang No. 2 Tahun 2016 tentang Rencana Detail
												Tata
												Ruang dan Peraturan Zonasi Bagian Wilayah Perkotaan Malang Tengah Tahun
												2016-2036
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" name="dasar_pkkpr[]" type="checkbox" value="<?=isset($edit["4"]) ? set_value("4", $edit["4"]): set_value("4"); ?>" id="disabledCheck4"
												checked />
											<label class="form-check-label" for="disabledCheck4">
												4. Pertimbangan Teknis Pertanahan untuk Kegiatan Penerbitan Kesesuaian
												Kegiatan Pemanfaatan Ruang Nomor 134/2022 Tanggal 15 Juli 2022
											</label>
										</div>
										<div class="col-sm-12">
											<label class="form-label" for="koordinat_geografis"></label>
											<input name="koordinat_geografis" type="text" class="form-control mb-1"
													placeholder="Tambahan CheckBox"
											value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>">
										</div>-->
									</div>
								</div>
							</div>
							<div class="col-12 d-flex justify-content-between">
								<button class="btn btn-primary btn-prev">
									<i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
									<span class="align-middle d-sm-inline-block d-none">Previous</span>
								</button>
								<button class="btn btn-primary btn-next">
									<span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
									<i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
								</button>
							</div>
						</div>
					</div>

					<!-- Kesimpulan -->
					<div id="personal-info2" class="content">

						<div class="row g-3">
							<div class="col-sm-6">
								<label class="form-label" for="username">Dinyatakan</label>
								<input type="text" id="username" class="form-control"
									placeholder="Dinyatakan" value="<?=isset($edit["dinyatakan"]) ? set_value("dinyatakan", $edit["dinyatakan"]): set_value("dinyatakan"); ?>"/>
							</div>
							<!--<div class="col-sm-6">
								<label class="form-label" for="country">Dinyatakan</label>
								<select class="select2" name="dinyatakan" id="country">
									<option label=" "></option>
									<option value="Disetujui Seluruhnya" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "0" ? "selected" : "" ?> >Disetujui Seluruhnya</option>
									<option value="Disetujui Sebagian" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "1" ? "selected" : "" ?> >Disetujui Sebagian</option>
									<option value="Ditolak Seluruhnya" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "2" ? "selected" : "" ?> >Ditolak Seluruhnya</option>
								</select>
							</div>-->

							<div class="col-sm-6">
								<label class="form-label" for="username">Koordinat Geografis</label>
								<input type="text" id="username" class="form-control"
									placeholder="Koordinat Geografis" value="<?=isset($edit["koordinat_geografis2"]) ? set_value("koordinat_geografis2", $edit["koordinat_geografis2"]): set_value("koordinat_geografis2"); ?>"/>
							</div>

							<div class="col-sm-6">
								<label class="form-label" for="luas_tanah_disetujui">Luas Tanah Disetujui</label>
								<input name="luas_tanah_disetujui" type="text" class="form-control mb-1"
									placeholder="Luas Tanah Disetujui"
									value="<?=isset($edit["luas_tanah_disetujui"]) ? set_value("luas_tanah_disetujui", $edit["luas_tanah_disetujui"]): set_value("luas_tanah_disetujui"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="username">Jenis Peruntukan Pemanfaatan</label>
								<input type="text" id="username" class="form-control"
									placeholder="Jenis Peruntukan Pemanfaatan" value="<?=isset($edit["jenis_peruntukan"]) ? set_value("jenis_peruntukan", $edit["jenis_peruntukan"]): set_value("jenis_peruntukan"); ?>"/>
							</div>

							<!--<div class="col-sm-6">
								<label class="form-label" for="country1">Jenis Peruntukan Pemanfaatan</label>
								<select class="select2" name="jenis_peruntukan" id="country1">
									<option label=" "></option>
									<option value="Disetujui Seluruhnya" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "0" ? "selected" : "" ?> >Disetujui Seluruhnya</option>
									<option value="Disetujui Sebagian" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "1" ? "selected" : "" ?> >Disetujui Sebagian</option>
									<option value="Ditolak Seluruhnya" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "2" ? "selected" : "" ?> >Ditolak Seluruhnya</option>
								</select>

							</div>-->
							<div class="col-sm-6">
								<label class="form-label" for="linkedin">Kode KBLI</label>
								<input type="text" id="linkedin" class="form-control" placeholder="Kode KBLI" 
								value="<?=isset($edit["kode_kbli2"]) ? set_value("kode_kbli2", $edit["kode_kbli2"]): set_value("kode_kbli2"); ?>">
							</div>
							
							<div class="col-sm-6">
								<label class="form-label" for="linkedin">Judul KBLI</label>
								<input type="text" id="linkedin" class="form-control" placeholder="Judul KBLI" 
								value="<?=isset($edit["judul_kbli2"]) ? set_value("judul_kbli2", $edit["judul_kbli2"]): set_value("judul_kbli2"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="rdtr">Arahan Kegiatan RDTR</label>
								<input name="rdtr" type="text" class="form-control mb-1"
									placeholder="Arahan Kegiatan RDTR"
									value="<?=isset($edit["rdtr"]) ? set_value("rdtr", $edit["rdtr"]): set_value("rdtr"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="kdb">KDB</label>
								<input name="kdb" type="text" class="form-control mb-1" placeholder="KDB"
									value="<?=isset($edit["kdb"]) ? set_value("kdb", $edit["kdb"]): set_value("kdb"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="ketinggian_bangunan">Ketinggian Bangunan maksimum</label>
								<input name="ketinggian_bangunan" type="text" class="form-control mb-1"
									placeholder="Ketinggian Bangunan maksimum"
									value="<?=isset($edit["ketinggian_bangunan"]) ? set_value("ketinggian_bangunan", $edit["ketinggian_bangunan"]): set_value("ketinggian_bangunan"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="indikasi_program">Indikasi Program Pemanfaatan</label>
								<input name="indikasi_program" type="text" class="form-control mb-1"
									placeholder="Indikasi Program Pemanfaatan"
									value="<?=isset($edit["indikasi_program"]) ? set_value("indikasi_program", $edit["indikasi_program"]): set_value("indikasi_program"); ?>">
							</div>

							<table class="table table-bordered">
							<tbody>
								<tr>
									<td>	
            							<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/input_persyaratan_pemanfaatan')?>">
												<button type="button" class="btn btn-primary">Isi Data Persyaratan PKPR</button>
											</a>
										</div>
										</div>
									</td>
						
									<td>
            							<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/tabel_arsip_persyaratan')?>">
												<button type="button" class="btn btn-success">Lihat Arsip Persyaratan PKPR</button>
											</a>
										</div>
										</div>
									</td>
								</tr>
							</tbody>
							</table>
			
							<!--<div class="col-sm-6">
								<label class="form-label" for="country2">Persyaratan PKPR</label>
								<div class="form-check mt-3">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck5" />
									<label class="form-check-label" for="defaultCheck5">
										1. Pengembangan kegiatan yang tidak sesuai dengan peraturan zonasi ini namun
										sudah
										memiliki ijin yang diperoleh sebelum disahkannya Peraturan Zonasi ini dan belum
										dilaksanakan, maka pembangunannya dapat terus dilakukan, namun akan dikenakan
										disinsentif.
									</label>

								</div>
								<div class="form-check mt-3">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck6" />
									<label class="form-check-label" for="defaultCheck6">
										2. Pengembangan kegiatan yang saat ini tidak sesuai sebelum peraturan ini
										ditetapkan
										maka diperbolehkan selama memiliki izin yang sah dan akan dibatasi
										perkembangannya
										untuk kegiatan yang diizinkan terbatas sedangkan untuk kegiatan yang tidak
										diizinkan
										akan dikenakan disinsentif.
									</label>

								</div>
								<div class="form-check mt-3">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck7" />
									<label class="form-check-label" for="defaultCheck7">
										3. Pengembagan kegiatan yang saat ini tidak sesuai sebelum peraturan ini
										ditetapkan
										dan tidak memiliki izin yang sah harus segera disesuaikan dalam waktu paling
										lama 6
										bulan setelah berlakunya Peraturan Daerah ini.
									</label>

								</div>
								<div class="col-sm-12">
											<label class="form-label" for="koordinat_geografis"></label>
											<input name="koordinat_geografis" type="text" class="form-control mb-1"
													placeholder="Tambahan CheckBox"
											value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>">
										</div>
							</div>-->
							<h5>Informasi Tambahan</h5>
							<div class="col-sm-6">
								<label class="form-label" for="garis_sempadan">Garis Sempadan Bangunan</label>
								<input name="garis_sempadan" type="text" class="form-control mb-1"
									placeholder="Garis Sempadan Bangunan"
									value="<?=isset($edit["garis_sempadan"]) ? set_value("garis_sempadan", $edit["garis_sempadan"]): set_value("garis_sempadan"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="jarak_bebas">Jarak Bebas Bangunan minimum</label>
								<input name="jarak_bebas" type="text" class="form-control mb-1"
									placeholder="Jarak Bebas Bangunan minimum"
									value="<?=isset($edit["jarak_bebas"]) ? set_value("jarak_bebas", $edit["jarak_bebas"]): set_value("jarak_bebas"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="KDH">KDH</label>
								<input name="KDH" type="text" class="form-control mb-1" placeholder="KDH"
									value="<?=isset($edit["KDH"]) ? set_value("KDH", $edit["KDH"]): set_value("KDH"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="koefisien_tapak">Koefisien Tapak Basement</label>
								<input name="koefisien_tapak" type="text" class="form-control mb-1"
									placeholder="Koefisien Tapak Basement"
									value="<?=isset($edit["koefisien_tapak"]) ? set_value("koefisien_tapak", $edit["koefisien_tapak"]): set_value("koefisien_tapak"); ?>">
							</div>
							<div class="col-sm-6">
								<label class="form-label" for="jaringan _utilitas">Jaringan Utilitas Kota</label>
								<input name="jaringan _utilitas" type="text" class="form-control mb-1"
									placeholder="Jaringan Utilitas Kota"
									value="<?=isset($edit["jaringan _utilitas"]) ? set_value("jaringan _utilitas", $edit["jaringan _utilitas"]): set_value("jaringan _utilitas"); ?>">
							</div>

							<table class="table table-bordered">
							<tbody>
								<tr>
								<td>	
            						<div class="container">
									<div class="col-md-12 text-center">
										<a href="<?=base_url('pemanfaatan/input_ketentuan_tambahan_pemanfaatan')?>">
											<button type="button" class="btn btn-primary">Isi Data Ketentuan Tambahan</button>
										</a>
									</div>
									</div>
								</td>
						
								<td>
            						<div class="container">
									<div class="col-md-12 text-center">
										<a href="<?=base_url('pemanfaatan/tabel_arsip_ketentuan_tambahan')?>">
											<button type="button" class="btn btn-success">Lihat Arsip Ketentuan Tambahan</button>
										</a>
									</div>
									</div>
								</td>
								</tr>
							</tbody>
							</table>
							<!--<div class="col-sm-6">
								<label class="form-label" for="linkedin">Ketentuan Tambahan</label>
								<div class="form-check mt-3">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck8" />
									<label class="form-check-label" for="defaultCheck8">
										1. Dalam hal pemanfaatan ruang, dilakukan pengukuran di lapangan untuk
										mengetahui
										situasi obyek di lapangan dengan ukuran lebih kecil dari pada 2,5 meter.
									</label>

								</div>
								<div class="form-check mt-3">
									<input class="form-check-input" type="checkbox" value="" id="defaultCheck9" />
									<label class="form-check-label" for="defaultCheck9">
										2. Hasil pengukuran obyek di lapangan dituangkan dalam keterangan rencana kota
										dan/atau rencana tapak.
									</label>
								</div>
								<div class="col-sm-12">
											<label class="form-label" for="koordinat_geografis"></label>
											<input name="koordinat_geografis" type="text" class="form-control mb-1"
													placeholder="Tambahan CheckBox"
											value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>">
										</div>
							</div>-->
							<div class="col-12 d-flex justify-content-between">
								<button class="btn btn-primary btn-prev">
									<i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
									<span class="align-middle d-sm-inline-block d-none">Previous</span>
								</button>
								<button class="btn btn-primary btn-next">
									<span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
									<i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
								</button>
							</div>
						</div>
					</div>

					<!-- Personal Info -->
					<div id="personal-info3" class="content">
						<div class="row g-3">
							<div class="card-body">
								<div class="row gy-3">
									<div class="col-md">
									
									<table class="table table-bordered">
									<tbody>
										<tr>
											<td>	
            									<div class="container">
												<div class="col-md-12 text-center">
													<a href="<?=base_url('pemanfaatan/input_ketentuan_lain_pemanfaatan')?>">
														<button type="button" class="btn btn-primary">Isi Data Ketentuan Lain</button>
													</a>
												</div>
												</div>
											</td>
						
											<td>
            									<div class="container">
												<div class="col-md-12 text-center">
													<a href="<?=base_url('pemanfaatan/tabel_arsip_ketentuan_lain')?>">
														<button type="button" class="btn btn-success">Lihat Arsip Ketentuan Lain</button>
													</a>
												</div>
												</div>
											</td>
										</tr>
									</tbody>
									</table>

										<!--<div class="form-check">
											<input class="form-check-input" type="checkbox" value=""
												id="defaultCheck1" />
											<label class="form-check-label" for="defaultCheck1">
												1. Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang diberikan dengan
												pertimbangan sebagaimana tercantum dalam lampiran.
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="defaultCheck2"
												checked />
											<label class="form-check-label" for="defaultCheck2">
												2. Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang ini sebagai dokumen
												yang menyatakan kesesuaian antara rencana kegiatan Pemanfaatan Ruang
												dengan
												RTR selain RDTR, sesuai ketentuan peraturan perundang-undangan.
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="defaultCheck3"
												checked />
											<label class="form-check-label" for="defaultCheck3">
												3. Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang ini berlaku selama
												3
												(tiga) tahun terhitung sejak penerbitan dan dapat diperpanjang sesuai
												peraturan perundang-undangan yang berlaku
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="disabledCheck4"
												checked />
											<label class="form-check-label" for="disabledCheck4">
												4. Dalam hal telah dilakukan pemutakhiran, masa berlaku Persetujuan
												Kesesuaian Kegiatan Pemanfaatan Ruang mengikuti jagka waktu penguasaan
												atas
												tanah yang telah diperoleh.
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="disabledCheck4"
												checked />
											<label class="form-check-label" for="disabledCheck4">
												5. Dalam hal pemohon Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang
												untuk
												kegiatan berusaha / non berusaha telah memperoleh tanah untuk
												kegiatannya,
												masa berlaku Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang mengikuti
												jangka waktu penguasaan atas tanah yang telah diperoleh dan disetujui
												dalam
												Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang.
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="disabledCheck5"
												checked />
											<label class="form-check-label" for="disabledCheck5">
												6. Pemegangan Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruanghanya
												dapat
												melakukan kegiatan sesuai dengan lokasi yang disetujui.
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="disabledCheck6"
												checked />
											<label class="form-check-label" for="disabledCheck6">
												7. Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang merupakan dasar
												perolehan tanah yang diperlukan untuk kegiatan, dan berlaku pula sebagai
												izin pemindahan hak atas tanah, serta untuk mengurus perizinan
												selanjutnya
												pada instansi yang berwenang.
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="disabledCheck7"
												checked />
											<label class="form-check-label" for="disabledCheck7">
												8. Pemegang Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang wajib
												mematuhi
												peraturan perundang-undangan yang berlaku.
											</label>

										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="disabledCheck8"
												checked />
											<label class="form-check-label" for="disabledCheck8">
												9. Peta Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang sebagaimana
												terlampir merupakan bagian yang tidak terpisahkan dari Persetujuan
												Kesesuaian Kegiatan Pemanfaatan Ruang ini.
											</label>
										<div class="col-sm-12">
											<label class="form-label" for="koordinat_geografis"></label>
											<input name="koordinat_geografis" type="text" class="form-control mb-1"
													placeholder="Tambahan CheckBox"
											value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>">
										</div>


										</div>
									</div>
								</div>
							</div>
							
						</div>-->

						<div class="col-12 d-flex justify-content-between">
							<button class="btn btn-primary btn-prev">
								<i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
								<span class="align-middle d-sm-inline-block d-none">Previous</span>
							</button>
							<button class="btn btn-success btn-submit">Simpan</button>
							<!--<input id="submit" name="submit" type="submit" class="btn btn-primary" value="Simpan">-->
						</div>
						<h5> </h5>
						<div class="col-12 d-flex justify-content-between">
   						 <a href="../pemanfaatan/print" class="btn btn-primary">Cetak Berita Acara</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>