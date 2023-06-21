<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php
    		if ($title == "Rekomendasi Pemanfaatan"){$url = "pemanfaatan/input_rekomendasi_pemanfaatan"; $page_title = "Input Form Rekomendasi Persetujuan Kesesuaian KPR Untuk Kegiatan Berusaha";}
    		elseif ($title == "Edit Rekomendasi Pemanfaatan") { $url = "pemanfaatan/edit_rekomendasi_pemanfaatan"; $page_title = "Edit Form Rekomendasi Persetujuan Kesesuaian KPR Untuk Kegiatan Berusaha";}
    			// echo form_open($url, "id='data-form' ");
    	?>

		<div class="card-body">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0"><?=$page_title?></h5>
			</div>
			<div class="card-body">
                <h5> </h5>
                <h6 class="mb-b fw-semibold">1. Data Permohonan</h6>
				<form action="<?=base_url($url);?>" method='post'>
					<!-- input bidang type hidden -->
					<input type="hidden" name="bidang" value="Pemanfaatan">


					<!-- id perencanaan auto increment -->
					<input type="hidden" name="id_permohonan"
						value="<?=isset($edit["id_permohonan"]) ? set_value("id_permohonan", $edit["id_permohonan"]): set_value("id_permohonan"); ?>">

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Judul Kegiatan</label>
						<div class="col-sm-9">
							<input name="judul_kegiatan" type="text" class="form-control mb-1" placeholder="Judul Kegiatan"
								value="<?=isset($edit["judul_kegiatan"]) ? set_value("judul_kegiatan", $edit["judul_kegiatan"]): set_value("judul_kegiatan"); ?>">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nama Pemohon</label>
						<div class="col-sm-9">
							<input name="nama_pemohon" type="text" class="form-control mb-1" placeholder="Nama Pemohon"
								value="<?=isset($edit["nama_pemohon"]) ? set_value("nama_pemohon", $edit["nama_pemohon"]): set_value("nama_pemohon"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">NPWP`</label>
						<div class="col-sm-9">
							<input name="npwp" type="text" class="form-control mb-1" placeholder="NPWP"
								value="<?=isset($edit["npwp"]) ? set_value("npwp", $edit["npwp"]): set_value("npwp"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Alamat Kantor</label>
						<div class="col-sm-9">
							<input name="alamat_kantor" type="text" class="form-control mb-1" placeholder="Alamat Kantor"
								value="<?=isset($edit["alamat_kantor"]) ? set_value("alamat_kantor", $edit["alamat_kantor"]): set_value("alamat_kantor"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nomor Telepon</label>
						<div class="col-sm-9">
							<input name="telepon" type="text" class="form-control mb-1" placeholder="Nomor Telepon"
								value="<?=isset($edit["telepon"]) ? set_value("telepon", $edit["telepon"]): set_value("telepon"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Email</label>
						<div class="col-sm-9">
							<input name="email" type="text" class="form-control mb-1" placeholder="Email"
								value="<?=isset($edit["email"]) ? set_value("email", $edit["email"]): set_value("email"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Status Penanaman Modal</label>
						<div class="col-sm-9">
							<input name="status_modal" type="text" class="form-control mb-1" placeholder="Status Penanaman Modal"
								value="<?=isset($edit["status_modal"]) ? set_value("status_modal", $edit["status_modal"]): set_value("status_modal"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Kode KBLI</label>
						<div class="col-sm-9">
							<input name="kode_kbli" type="text" class="form-control mb-1" placeholder="Kode KBLI"
								value="<?=isset($edit["kode_kbli"]) ? set_value("kode_kbli", $edit["kode_kbli"]): set_value("kode_kbli"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Judul KBLI</label>
						<div class="col-sm-9">
							<input name="judul_kbli" type="text" class="form-control mb-1" placeholder="Judul KBLI"
								value="<?=isset($edit["judul_kbli"]) ? set_value("judul_kbli", $edit["judul_kbli"]): set_value("judul_kbli"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Skala Usaha</label>
						<div class="col-sm-9">
							<input name="skala_usaha" type="text" class="form-control mb-1" placeholder="Skala Usaha"
								value="<?=isset($edit["skala_usaha"]) ? set_value("skala_usaha", $edit["skala_usaha"]): set_value("skala_usaha"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Lokasi Usaha</label>
						<div class="col-sm-9">
							<input name="lokasi_usaha" type="text" class="form-control mb-1" placeholder="Lokasi Usaha"
								value="<?=isset($edit["lokasi_usaha"]) ? set_value("lokasi_usaha", $edit["lokasi_usaha"]): set_value("lokasi_usaha"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Koordinat Geografis</label>
						<div class="col-sm-9">
							<input name="koordinat_geografis" type="text" class="form-control mb-1" placeholder="Koordinat Geografis"
								value="<?=isset($edit["koordinat_geografis"]) ? set_value("koordinat_geografis", $edit["koordinat_geografis"]): set_value("koordinat_geografis"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Luas Tanah</label>
						<div class="col-sm-9">
							<input name="luas_tanah" type="text" class="form-control mb-1" placeholder="Luas Tanah"
								value="<?=isset($edit["luas_tanah"]) ? set_value("luas_tanah", $edit["luas_tanah"]): set_value("luas_tanah"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Penggunaan Tanah</label>
						<div class="col-sm-9">
							<input name="penggunaan_tanah" type="text" class="form-control mb-1" placeholder="Penggunaan Tanah"
								value="<?=isset($edit["penggunaan_tanah"]) ? set_value("penggunaan_tanah", $edit["penggunaan_tanah"]): set_value("penggunaan_tanah"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Rencana Teknis Bangunan</label>
						<div class="col-sm-9">
							<input name="rencana_teknis" type="text" class="form-control mb-1" placeholder="Rencana Teknis Bangunan"
								value="<?=isset($edit["rencana_teknis"]) ? set_value("rencana_teknis", $edit["rencana_teknis"]): set_value("rencana_teknis"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Status Tanah</label>
						<div class="col-sm-9">
							<input name="status_tanah" type="text" class="form-control mb-1" placeholder="Status Tanah"
								value="<?=isset($edit["status_tanah"]) ? set_value("status_tanah", $edit["status_tanah"]): set_value("status_tanah"); ?>" required="required">
						</div>
					</div>

					<hr class="my-4 mx-n4" />
					<h5> </h5>
                	<h6 class="mb-b fw-semibold">2. Dasar PKKPR</h6>
					<h5> </h5>
						<tr>
						<td>
            				<div class="container">
								<div class="col-md-12 text-center">
									<a href="<?=base_url('pemanfaatan/tabel_arsip_dasar_pkkpr')?>">
										<button type="button" class="btn btn-success">Data Dasar PKKPR</button>
									</a>
								</div>
							</div>
						</td>
							</tr>
					<hr class="my-4 mx-n4" />
					<h5> </h5>
                	<h6 class="mb-b fw-semibold">3. Kesimpulan</h6>
					<h5> </h5>

					<!--<div class="row mb-3">
								<label class="col-sm-3 col-form-label" for="basic-default-company">Dinyatakan</label>
								<div class="col-sm-9">
								<select class="select2" name="dinyatakan" id="country">
									<option label=""></option>
									<option value="Disetujui" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "0" ? "selected" : "" ?> >Disetujui</option>
									<option value="Disetujui Sebagian" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "1" ? "selected" : "" ?> >Disetujui Sebagian</option>
									<option value="Ditolak Seluruhnya" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "2" ? "selected" : "" ?> >Ditolak Seluruhnya</option>
								</select>
					</div>
					</div>-->
					<div class="row mb-3">
					<label class="col-sm-3 col-form-label" for="basic-default-company">Dinyatakan</label>
					<div class="col-sm-9">
					<select name="dinyatakan" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
						<option value="Disetujui" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "0" ? "selected" : "" ?> >Disetujui</option>
						<option value="Disetujui Sebagian" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "1" ? "selected" : "" ?> >Disetujui Sebagian</option>
						<option value="Ditolak Seluruhnya" <?=isset($edit["dinyatakan"]) && $edit["dinyatakan"] == "2" ? "selected" : "" ?> >Ditolak Seluruhnya</option>
					</select>
					</div>
					</div>		

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Koordinat Geografis</label>
						<div class="col-sm-9">
							<input name="koordinat_geografis2" type="text" class="form-control mb-1" placeholder="Koordinat Geografis"
								value="<?=isset($edit["koordinat_geografis2"]) ? set_value("koordinat_geografis2", $edit["koordinat_geografis2"]): set_value("koordinat_geografis2"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Luas Tanah Disetujui</label>
						<div class="col-sm-9">
							<input name="luas_tanah_disetujui" type="text" class="form-control mb-1" placeholder="Luas Tanah Disetujui"
								value="<?=isset($edit["luas_tanah_disetujui"]) ? set_value("luas_tanah_disetujui", $edit["luas_tanah_disetujui"]): set_value("luas_tanah_disetujui"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Jenis Peruntukan Pemanfaatan</label>
						<div class="col-sm-9">
							<input name="jenis_peruntukan" type="text" class="form-control mb-1" placeholder="Jenis Peruntukan Pemanfaatan"
								value="<?=isset($edit["jenis_peruntukan"]) ? set_value("jenis_peruntukan", $edit["jenis_peruntukan"]): set_value("jenis_peruntukan"); ?>" required="required">
						</div>
					</div> 
					
					<!--<div class="row mb-3">
								<label class="col-sm-3 col-form-label" for="basic-default-company">Jenis Peruntukan Pemanfaatan</label>
								<div class="col-sm-9">
								<select class="select3" name="jenis_peruntukan" id="country1">
									<option label=""></option>
									<option value="Disetujui Seluruhnya" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "0" ? "selected" : "" ?> >Disetujui Seluruhnya</option>
									<option value="Disetujui Sebagian" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "1" ? "selected" : "" ?> >Disetujui Sebagian</option>
									<option value="Ditolak Seluruhnya" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "2" ? "selected" : "" ?> >Ditolak Seluruhnya</option>
								</select>
								</div>
					</div>
					<div class="row mb-3">
					<label class="col-sm-3 col-form-label" for="basic-default-company">Jenis Peruntukan Pemanfaatan</label>
					<div class="col-sm-9">
					<select name="jenis_peruntukan" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
						<option value="Disetujui" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "0" ? "selected" : "" ?> >Disetujui</option>
						<option value="Disetujui Sebagian" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "1" ? "selected" : "" ?> >Disetujui Sebagian</option>
						<option value="Ditolak Seluruhnya" <?=isset($edit["jenis_peruntukan"]) && $edit["jenis_peruntukan"] == "2" ? "selected" : "" ?> >Ditolak Seluruhnya</option>
					</select>
					</div>
					</div>-->	
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Kode KBLI</label>
						<div class="col-sm-9">
							<input name="kode_kbli2" type="text" class="form-control mb-1" placeholder="Kode KBLI"
								value="<?=isset($edit["kode_kbli2"]) ? set_value("kode_kbli2", $edit["kode_kbli2"]): set_value("kode_kbli2"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Judul KBLI</label>
						<div class="col-sm-9">
							<input name="judul_kbli2" type="text" class="form-control mb-1" placeholder="Judul KBLI"
								value="<?=isset($edit["judul_kbli2"]) ? set_value("judul_kbli2", $edit["judul_kbli2"]): set_value("judul_kbli2"); ?>" required="required">
						</div>
					</div>

					<!--<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Koefisien Dasar Bangunan Maksimum</label>
						<div class="col-sm-9">
							<input name="rdtr" type="text" class="form-control mb-1" placeholder="Koefisien Dasar Bangunan Maksimum"
								value="<?=isset($edit["rdtr"]) ? set_value("rdtr", $edit["rdtr"]): set_value("rdtr"); ?>" required="required">
						</div>
					</div>-->

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Koefisien Dasar Bangunan maksimum</label>
						<div class="col-sm-9">
							<input name="kdb" type="text" class="form-control mb-1" placeholder="Koefisien Dasar Bangunan maksimum"
								value="<?=isset($edit["kdb"]) ? set_value("kdb", $edit["kdb"]): set_value("kdb"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Ketinggian Bangunan maksimum</label>
						<div class="col-sm-9">
							<input name="ketinggian_bangunan" type="text" class="form-control mb-1" placeholder="Ketinggian Bangunan maksimum"
								value="<?=isset($edit["ketinggian_bangunan"]) ? set_value("ketinggian_bangunan", $edit["ketinggian_bangunan"]): set_value("ketinggian_bangunan"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Indikasi Program Pemanfaatan Ruang</label>
						<div class="col-sm-9">
							<input name="indikasi_program" type="text" class="form-control mb-1" placeholder="Indikasi Program Pemanfaatan Ruang"
								value="<?=isset($edit["indikasi_program"]) ? set_value("indikasi_program", $edit["indikasi_program"]): set_value("indikasi_program"); ?>" required="required">
						</div>
					</div>

						<tr>
							<td>
            					<div class="container">
								<div class="col-md-12 text-center">
									<a href="<?=base_url('pemanfaatan/tabel_arsip_persyaratan')?>">
										<button type="button" class="btn btn-success">Data Persyaratan PPKPR</button>
									</a>
								</div>
								</div>
							</td>
						</tr>
					<h5> </h5>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Garis Sempadan Bangunan minimum</label>
						<div class="col-sm-9">
							<input name="garis_sempadan" type="text" class="form-control mb-1" placeholder="Garis Sempadan Bangunan minimum"
								value="<?=isset($edit["garis_sempadan"]) ? set_value("garis_sempadan", $edit["garis_sempadan"]): set_value("garis_sempadan"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Jarak Bebas Bangunan minimum</label>
						<div class="col-sm-9">
							<input name="jarak_bebas" type="text" class="form-control mb-1" placeholder="Jarak Bebas Bangunan minimum"
								value="<?=isset($edit["jarak_bebas"]) ? set_value("jarak_bebas", $edit["jarak_bebas"]): set_value("jarak_bebas"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Koefisien Dasar Hijau maksimum</label>
						<div class="col-sm-9">
							<input name="KDH" type="text" class="form-control mb-1" placeholder="Koefisien Dasar Hijau maksimum"
								value="<?=isset($edit["KDH"]) ? set_value("KDH", $edit["KDH"]): set_value("KDH"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Koefisien Tapak Basement maksimum</label>
						<div class="col-sm-9">
							<input name="koefisien_tapak" type="text" class="form-control mb-1" placeholder="Koefisien Tapak Basement maksimum"
								value="<?=isset($edit["koefisien_tapak"]) ? set_value("koefisien_tapak", $edit["koefisien_tapak"]): set_value("koefisien_tapak"); ?>" required="required">
						</div>
					</div>

					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Penyediaan Sarana dan Prasarana Minimal</label>
						<div class="col-sm-9">
							<input name="jaringan_utilitas" type="text" class="form-control mb-1" placeholder="Penyediaan Sarana dan Prasarana Minimal"
								value="<?=isset($edit["jaringan_utilitas"]) ? set_value("jaringan _utilitas", $edit["jaringan_utilitas"]): set_value("jaringan_utilitas"); ?>" required="required">
						</div>
					</div>
							<tr>
								<td>
            						<div class="container">
									<div class="col-md-12 text-center">
										<a href="<?=base_url('pemanfaatan/tabel_arsip_ketentuan_tambahan')?>">
											<button type="button" class="btn btn-success">Data Ketentuan Tambahan</button>
										</a>
									</div>
									</div>
								</td>
							</tr>

					<hr class="my-4 mx-n4" />
					<h5> </h5>
                	<h6 class="mb-b fw-semibold">4. Ketentuan Lain</h6>
					<h5> </h5>

							<tr>
						<td>
            				<div class="container">
								<div class="col-md-12 text-center">
									<a href="<?=base_url('pemanfaatan/tabel_arsip_ketentuan_lain')?>">
										<button type="button" class="btn btn-success">Data Ketentuan Lain</button>
									</a>
								</div>
							</div>
						</td>
						</tr>

					<h5> </h5>

					<input name="submit" type="submit" class="btn btn-primary" value="Simpan">
					<a href="<?=base_url('pemanfaatan/tabel_input_pemanfaatan')?>">
								<button type="button" class="btn btn-warning">Batal</button>
                        <a href="<?=base_url('pemanfaatan/tabel_arsip_rekomendasi')?>">
								<button type="button" class="btn btn-success">Lihat Arsip</button>
						</a>
						<div>
						<h5> </h5>
						<h6 class="mb-b fw-semibold">Cetak Berita Acara</h6>
						<div class="row mb-3">
							<div class="col-sm-9">
								<a href="<?=base_url('pemanfaatan/print')?>">
									<button type="button" class="btn btn-label-primary">Cetak Berita Acara</button>
								</a>
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
