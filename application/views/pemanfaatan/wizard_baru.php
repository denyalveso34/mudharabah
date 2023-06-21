<?php
	if ($title == "Rekomendasi Pemanfaatan"){$url = "pemanfaatan/input_rekomendasi_pemanfaatan"; $page_title = "Input Form Rekomendasi Persetujuan Kesesuaian KPR Untuk Kegiatan Berusaha";}
	elseif ($title == "Edit Rekomendasi Pemanfaatan") { $url = "perencanaan/edit_rekomendasi_pemanfaatan"; $page_title = "Edit Input Form Rekomendasi Persetujuan Kesesuaian KPR Untuk Kegiatan Berusaha";}
?>

<div class="card-body">
	<div class="card-header d-flex justify-content-between align-items-center">
		<h5 class="mb-0"><?=$page_title?></h5>
	</div>

	<!-- Form Label Alignment -->
	<div class="col-xxl">
		<div class="card mb-4">
			<h5 class="card-header"></h5>
			<form class="card-body">
				<h6 class="mb-b fw-semibold">1. Data Permohonan</h6>
				<div class="row mb-3">
					<input type="hidden" name="id_permohonan"
						value="<?=isset($edit["id_permohonan"]) ? set_value("id_permohonan", $edit["id_permohonan"]): set_value("id_permohonan"); ?>">


					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nama Pemohon</label>
						<div class="col-sm-9">
							<input name="nama_pemohon" type="text" class="form-control mb-1" placeholder="Nama Pemohon"
								value="<?=isset($edit["nama_pemohon"]) ? set_value("nama_pemohon", $edit["nama_pemohon"]): set_value("nama_pemohon"); ?>"
								required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">NPWP</label>
						<div class="col-sm-9">
							<input name="npwp" type="text" class="form-control" placeholder="NPWP"
								value="<?=isset($edit["npwp"]) ? set_value("npwp", $edit["npwp"]): set_value("npwp"); ?>"
								required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Alamat
							Kantor</label>
						<div class="col-sm-9">
							<input name="alamat_kantor" type="text" class="form-control" placeholder="Alamat Kantor"
								value="<?=isset($edit["alamat_kantor"]) ? set_value("alamat_kantor", $edit["alamat_kantor"]): set_value("alamat_kantor"); ?>"
								required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Nomor
							Telepon</label>
						<div class="col-sm-9">
							<input name="telepon" type="text" class="form-control" placeholder="Nomor Telepon"
								value="<?=isset($edit["telepon"]) ? set_value("telepon", $edit["telepon"]): set_value("telepon"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Email</label>
						<div class="col-sm-9">
							<input name="email" type="text" class="form-control" placeholder="Email"
								value="<?=isset($edit["email"]) ? set_value("email", $edit["email"]): set_value("email"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Status Penanaman
							Modal</label>
						<div class="col-sm-9">
							<input name="status_modal" type="text" class="form-control"
								placeholder="Status Penanaman Modal"
								value="<?=isset($edit["status_modal"]) ? set_value("status_modal", $edit["status_modal"]): set_value("status_modal"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Kode KBLI</label>
						<div class="col-sm-9">
							<input name="kode_kbli" type="text" class="form-control" placeholder="Kode KBLI"
								value="<?=isset($edit["kode_kbli"]) ? set_value("kode_kbli", $edit["kode_kbli"]): set_value("kode_kbli"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Judul KBLI</label>
						<div class="col-sm-9">
							<input name="judul_kbli" type="text" class="form-control" placeholder="Judul KBLI"
								value="<?=isset($edit["judul_kbli"]) ? set_value("judul_kbli", $edit["judul_kbli"]): set_value("judul_kbli"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Skala Usaha</label>
						<div class="col-sm-9">
							<input name="skala_usaha" type="text" class="form-control" placeholder="Skala Usaha"
								value="<?=isset($edit["skala_usaha"]) ? set_value("skala_usaha", $edit["skala_usaha"]): set_value("skala_usaha"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Lokasi Usaha</label>
						<div class="col-sm-9">
							<input name="lokasi_usaha" type="text" class="form-control" placeholder="Lokasi Usaha"
								value="<?=isset($edit["lokasi_usaha"]) ? set_value("lokasi_usaha", $edit["lokasi_usaha"]): set_value("lokasi_usaha"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Koordinat
							Geografis</label>
						<div class="col-sm-9">
							<input name="koordinat_geografis" type="text" class="form-control"
								placeholder="Koordinat Geografis"
								value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Luas Tanah</label>
						<div class="col-sm-9">
							<input name="luas_tanah" type="text" class="form-control" placeholder="Luas Tanah"
								value="<?=isset($edit["luas_tanah"]) ? set_value("luas_tanah", $edit["luas_tanah"]): set_value("luas_tanah"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Penggunaan
							Tanah</label>
						<div class="col-sm-9">
							<input name="penggunaan_tanah" type="text" class="form-control"
								placeholder="Penggunaan Tanah"
								value="<?=isset($edit["penggunaan_tanah"]) ? set_value("penggunaan_tanah", $edit["penggunaan_tanah"]): set_value("penggunaan_tanah"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Rencana Teknis
							Bangunan</label>
						<div class="col-sm-9">
							<input name="rencana_teknis" type="text" class="form-control"
								placeholder="Rencana Teknis Bangunan"
								value="<?=isset($edit["rencana_teknis"]) ? set_value("rencana_teknis", $edit["rencana_teknis"]): set_value("rencana_teknis"); ?>">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-username">Status Tanah</label>
						<div class="col-sm-9">
							<input name="status_tanah" type="text" class="form-control" placeholder="Status Tanah"
								value="<?=isset($edit["status_tanah"]) ? set_value("status_tanah", $edit["status_tanah"]): set_value("status_tanah"); ?>">
						</div>
					</div>
					<!--<div class="row mb-3 form-password-toggle">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-password">Password</label>
          <div class="col-sm-9">
            <div class="input-group input-group-merge">
              <input type="password" id="alignment-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="alignment-password2" />
              <span class="input-group-text cursor-pointer" id="alignment-password2"><i class="bx bx-hide"></i></span>
            </div>
          </div>
        </div>-->
					<hr class="my-4 mx-n4" />
					<h6 class="mb-3 fw-semibold">2. Dasar PKKPR</h6>
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/input_pkkpr_pemanfaatan')?>">
												<button type="button" class="btn btn-primary">Isi Data Dasar
													PKKPR</button>
											</a>
										</div>
									</div>
								</td>

								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/tabel_arsip_dasar_pkkpr')?>">
												<button type="button" class="btn btn-success">Lihat Arsip Dasar
													PKKPR</button>
											</a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
          
					<!--<div class="row mb-3">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Dasar PKKPR</label>
          <div class="col-sm-9">
            <input type="text" id="alignment-full-name" class="form-control" placeholder="Dasar PKKPR" />
          </div>
        </div>-->

					<hr class="my-4 mx-n4" />
					<h6 class="mb-3 fw-semibold">3. Kesimpulan</h6>
					<!--<div class="row mb-3">
					<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Dinyatakan</label>
					<div class="col-sm-9">
						<input name="dinyatakan" type="text" class="form-control" placeholder="Dinyatakan"
							value="<?=isset($edit["dinyatakan"]) ? set_value("dinyatakan", $edit["dinyatakan"]): set_value("dinyatakan"); ?>">
					</div>
				</div>-->
					<div class="col-sm-6">
						<label class="form-label" for="country">Dinyatakan</label>
						<select class="select" name="dinyatakan" id="country">
							<option label=""></option>
							<option value="Disetujui Seluruhnya"
								<?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "0" ? "selected" : "" ?>>
								Disetujui Seluruhnya</option>
							<option value="Disetujui Sebagian"
								<?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "1" ? "selected" : "" ?>>
								Disetujui Sebagian</option>
							<option value="Ditolak Seluruhnya"
								<?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "2" ? "selected" : "" ?>>Ditolak
								Seluruhnya</option>
						</select>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Koordinat
							Geografis</label>
						<div class="col-sm-9">
							<input name="koordinat_geografis2" type="text" class="form-control"
								placeholder="Koordinat Geografis"
								value="<?=isset($edit["koordinat_geografis2"]) ? set_value("koordinat_geografis2", $edit["koordinat_geografis2"]): set_value("koordinat_geografis2"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Luas Tanah
							Disetujui</label>
						<div class="col-sm-9">
							<input name="luas_tanah_disetujui" type="text" class="form-control"
								placeholder="Luas Tanah Disetujui"
								value="<?=isset($edit["luas_tanah_disetujui"]) ? set_value("luas_tanah_disetujui", $edit["luas_tanah_disetujui"]): set_value("luas_tanah_disetujui"); ?>">
						</div>
					</div>
					<!--<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Jenis Peruntukan
							Pemanfaatan</label>
						<div class="col-sm-9">
							<input name="jenis_peruntukan" type="text" class="form-control"
								placeholder="Jenis Peruntukan Pemanfaatan"
								value="<?=isset($edit["jenis_peruntukan"]) ? set_value("jenis_peruntukan", $edit["jenis_peruntukan"]): set_value("jenis_peruntukan"); ?>">
						</div>
					</div>-->

					<div class="col-sm-6">
						<label class="form-label" for="country1">Jenis Peruntukan Pemanfaatan</label>
						<select class="select2" name="jenis_peruntukan" id="country1">
							<option label=" "></option>
							<option value="Disetujui Seluruhnya"
								<?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "0" ? "selected" : "" ?>>
								Disetujui Seluruhnya</option>
							<option value="Disetujui Sebagian"
								<?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "1" ? "selected" : "" ?>>
								Disetujui Sebagian</option>
							<option value="Ditolak Seluruhnya"
								<?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "2" ? "selected" : "" ?>>
								Ditolak Seluruhnya</option>
						</select>

					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Kode KBLI</label>
						<div class="col-sm-9">
							<input name="kode_kbli2" type="text" class="form-control" placeholder="Kode KBLI"
								value="<?=isset($edit["kode_kbli2"]) ? set_value("kode_kbli2", $edit["kode_kbli2"]): set_value("kode_kbli2"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Judul KBLI</label>
						<div class="col-sm-9">
							<input name="dinyatakan" type="text" class="form-control" placeholder="Judul KBLI"
								value="<?=isset($edit["judul_kbli2"]) ? set_value("judul_kbli2", $edit["judul_kbli2"]): set_value("judul_kbli2"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Arahan Kegiatan
							RDTR</label>
						<div class="col-sm-9">
							<input name="rdtr" type="text" class="form-control" placeholder="Arahan Kegiatan RDTR"
								value="<?=isset($edit["rdtr"]) ? set_value("rdtr", $edit["rdtr"]): set_value("rdtr"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">KDB</label>
						<div class="col-sm-9">
							<input name="kdb" type="text" class="form-control" placeholder="KDB"
								value="<?=isset($edit["kdb"]) ? set_value("kdb", $edit["kdb"]): set_value("kdb"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Ketinggian Bangunan
							maksimum</label>
						<div class="col-sm-9">
							<input name="ketinggian_bangunan" type="text" class="form-control"
								placeholder="Ketinggian Bangunan maksimum"
								value="<?=isset($edit["ketinggian_bangunan"]) ? set_value("ketinggian_bangunan", $edit["ketinggian_bangunan"]): set_value("ketinggian_bangunan"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Indikasi Program
							Pemanfaatan</label>
						<div class="col-sm-9">
							<input name="indikasi_program" type="text" class="form-control"
								placeholder="Indikasi Program Pemanfaatan"
								value="<?=isset($edit["indikasi_program"]) ? set_value("indikasi_program", $edit["indikasi_program"]): set_value("indikasi_program"); ?>">
						</div>
					</div>
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/input_persyaratan_pemanfaatan')?>">
												<button type="button" class="btn btn-primary">Isi Data Persyaratan
													PKPR</button>
											</a>
										</div>
									</div>
								</td>

								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/tabel_arsip_persyaratan')?>">
												<button type="button" class="btn btn-success">Lihat Arsip Persyaratan
													PKPR</button>
											</a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<h5> </h5>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Garis Sempadan
							Bangunan</label>
						<div class="col-sm-9">
							<input name="garis_sempadan" type="text" class="form-control"
								placeholder="Garis Sempadan Bangunan"
								value="<?=isset($edit["garis_sempadan"]) ? set_value("garis_sempadan", $edit["garis_sempadan"]): set_value("garis_sempadan"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Jarak Bebas
							Bangunan
							minimum</label>
						<div class="col-sm-9">
							<input name="jarak_bebas" type="text" class="form-control"
								placeholder="Jarak Bebas Bangunan minimum"
								value="<?=isset($edit["jarak_bebas"]) ? set_value("jarak_bebas", $edit["jarak_bebas"]): set_value("jarak_bebas"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">KDH</label>
						<div class="col-sm-9">
							<input name="KDH" type="text" class="form-control" placeholder="KDH"
								value="<?=isset($edit["KDH"]) ? set_value("KDH", $edit["KDH"]): set_value("KDH"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Koefisien Tapak
							Basement</label>
						<div class="col-sm-9">
							<input name="koefisien_tapak" type="text" class="form-control"
								placeholder="Koefisien Tapak Basement"
								value="<?=isset($edit["koefisien_tapak"]) ? set_value("koefisien_tapak", $edit["koefisien_tapak"]): set_value("koefisien_tapak"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Jaringan Utilitas
							Kota</label>
						<div class="col-sm-9">
							<input name="jaringan_utilitas" type="text" class="form-control"
								placeholder="Jaringan Utilitas Kota"
								value="<?=isset($edit["jaringan_utilitas"]) ? set_value("jaringan_utilitas", $edit["jaringan_utilitas"]): set_value("jaringan_utilitas"); ?>">
						</div>
					</div>
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/input_ketentuan_tambahan_pemanfaatan')?>">
												<button type="button" class="btn btn-primary">Isi Data Ketentuan
													Tambahan</button>
											</a>
										</div>
									</div>
								</td>

								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/tabel_arsip_ketentuan_tambahan')?>">
												<button type="button" class="btn btn-success">Lihat Arsip Ketentuan
													Tambahan</button>
											</a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

					<hr class="my-4 mx-n4" />
					<h6 class="mb-3 fw-semibold">4. Ketentuan Lain</h6>
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/input_ketentuan_lain_pemanfaatan')?>">
												<button type="button" class="btn btn-primary">Isi Data Ketentuan
													Lain</button>
											</a>
										</div>
									</div>
								</td>

								<td>
									<div class="container">
										<div class="col-md-12 text-center">
											<a href="<?=base_url('pemanfaatan/tabel_arsip_ketentuan_lain')?>">
												<button type="button" class="btn btn-success">Lihat Arsip Ketentuan
													Lain</button>
											</a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<h5> </h5>
					<!--<div class="row mb-3">
          <label class="col-sm-3 col-form-label text-sm-end" for="alignment-full-name">Ketentuan Lain</label>
          <div class="col-sm-9">
            <input type="text" id="alignment-full-name" class="form-control" placeholder="Ketentuan Lain" />
          </div>
        </div>-->

					<div class="pt-4">
						<div class="row justify-content-end">
							<div class="col-sm-9">
								<input id="submit" name="submit" type="submit" class="btn btn-primary" value="Simpan">
								<button type="reset" class="btn btn-label-secondary">Batal</button>
								<a href="<?=base_url('pemanfaatan/tabel_arsip_rekomendasi')?>">
									<button type="button" class="btn btn-success">Lihat Arsip</button>
								</a>
							</div>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
