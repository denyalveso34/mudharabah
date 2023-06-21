<!-- Bordered Table -->

<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php
    		if ($title == "Input Data Pemanfaatan"){$url = "pemanfaatan/tabel_input_pemanfaatan"; $page_title = "Input Data KKPR";}
    		elseif ($title == "Edit Data Pemanfaatan") { $url = "pemanfaatan/edit_pemanfaatan"; $page_title = "Edit Data KKPR";}
    	?>

		<div class="card-body">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0"><?=$page_title?></h5>
			</div>
			<div class="card-body">

					<form action="<?=base_url($url);?>" method='post' enctype="multipart/form-data">
					<!-- input bidang type hidden -->
					<input type="hidden" name="bidang" value="Pemanfaatan">

					<!-- id perencanaan auto increment -->
					<input type="hidden" name="id_pemanfaatan"
						value="<?=isset($edit["id_pemanfaatan"]) ? set_value("id_pemanfaatan", $edit["id_pemanfaatan"]): set_value("id_pemanfaatan"); ?>">

					<!-- Nama Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3" for="basic-default-company">Judul Kegiatan</label>
						<div class="col-sm-9">
							<input name="nama_kegiatan" type="text" class="form-control mb-1"
								placeholder="Judul Kegiatan"
								value="<?=isset($edit["nama_kegiatan"]) ? set_value("nama_kegiatan", $edit["nama_kegiatan"]): set_value("nama_kegiatan"); ?>">
						</div>
					</div>

					<!-- Tanggal Kegiatan Permohonan -->
					<div class="row mb-3">
						<label class="col-sm-3" for="basic-default-company">Tanggal Permohonan</label>
						<div class="col-sm-9">
							<input name="tanggal_kegiatan" type="date" class="form-control mb-1"
								placeholder="Tanggal Kegiatan"
								value="<?=isset($edit["tanggal_kegiatan"]) ? set_value("tanggal_kegiatan", $edit["tanggal_kegiatan"]): set_value("tanggal_kegiatan"); ?>">
						</div>
					</div>

					<!-- 1. Koordinat Lokasi Geojson -->
					<div class="row mb-3">
						<h6 class="mb-b fw-semibold">1. Koordinat Lokasi Geojson</h6>
						<label class="col-sm-3" for="basic-default-company">Upload Koordinat Lokasi Geojson</label>
						<div class="col-sm-9">
							<input name="koordinat_geojson" class="form-control" type="file" id="formFile"
								placeholder="koordinat_geojson"
								value="<?=isset($edit["koordinat_geojson"]) ? set_value("koordinat_geojson", $edit["koordinat_geojson"]): set_value("koordinat_geojson"); ?>"
								onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/') . $edit['koordinat_geojson'] ?>" alt=".jpg dan .png" height="200" width="200">
						</div>
					</div>

					<!-- 2. Koordinat Lokasi SHP -->
					<div class="row mb-3">
						<h6 class="mb-b fw-semibold">2. Koordinat Lokasi SHP</h6>
						<label class="col-sm-3" for="basic-default-company">Upload Koordinat Lokasi SHP</label>
						<div class="col-sm-9">
							<input name="koordinat_shp" class="form-control" type="file" id="formFile"
								placeholder="koordinat_shp"
								value="<?=isset($edit["koordinat_shp"]) ? set_value("koordinat_shp", $edit["koordinat_shp"]): set_value("koordinat_shp"); ?>"
								onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/') . $edit['koordinat_shp'] ?>" alt=".jpg dan .png" height="200" width="200">
						</div>
					</div>
					<!-- 3. File Bukti Penguasaan Tanah -->
					<div class="row mb-3">
						<h6 class="mb-b fw-semibold">3. File Bukti Penguasaan Tanah</h6>
						<label class="col-sm-3" for="basic-default-company">Upload File Bukti Penguasaan Tanah</label>
						<div class="col-sm-9">
							<input name="penguasaan_tanah" class="form-control" type="file" id="formFile"
								placeholder="penguasaan_tanah"
								value="<?=isset($edit["penguasaan_tanah"]) ? set_value("penguasaan_tanah", $edit["penguasaan_tanah"]): set_value("penguasaan_tanah"); ?>"
								onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/') . $edit['penguasaan_tanah'] ?>" alt=".jpg dan .png" height="200" width="200">
						</div>
					</div>

					<!-- 4. Rencana Teknis Bangunan dan / Atau Rencana Induk Kawasan -->
					<div class="row mb-3">
						<h6 class="mb-b fw-semibold">4. Rencana Teknis Bangunan dan / Atau Rencana Induk Kawasan</h6>
						<label class="col-sm-3" for="basic-default-company">Upload Rencana Teknis dan Induk
							Kawasan</label>
						<div class="col-sm-9">
							<input name="teknis_bangunan" class="form-control" type="file" id="formFile"
								placeholder="teknis_bangunan"
								value="<?=isset($edit["teknis_bangunan"]) ? set_value("teknis_bangunan", $edit["teknis_bangunan"]): set_value("teknis_bangunan"); ?>"
								onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/') . $edit['teknis_bangunan'] ?>" alt=".jpg dan .png" height="200" width="200">
						</div>
					</div>

					<!-- 5. Data BPN -->
					<div class="row mb-3">
						<h6 class="mb-b fw-semibold">5. Data BPN</h6>
						<!-- Tanggal Pertex Diterbit -->
						<label class="col-sm-3 " for="basic-default-company">Tanggal Pertek Terbit</label>
						<div class="col-sm-9">
							<input name="pertex_terbit" class="form-control" type="date" id="formFile"
								placeholder="Tanggal Pertek Terbit "
								value="<?=isset($edit["pertex_terbit"]) ? set_value("pertex_terbit", $edit["pertex_terbit"]): set_value("pertex_terbit"); ?>">
						</div>
						<!-- Tanggal Pertex Diterima -->
						<label class="col-sm-3 " for="basic-default-company">Tanggal Pertek Diterima</label>
						<div class="col-sm-9">
							<input name="pertex_diterima" class="form-control" type="date" id="formFile"
								placeholder="Tanggal Pertek Diterima"
								value="<?=isset($edit["pertex_diterima"]) ? set_value("pertex_diterima", $edit["pertex_diterima"]): set_value("pertex_diterima"); ?>">
						</div>

						<!-- Nomor Pertex -->
						<label class="col-sm-3 " for="basic-default-company">Nomor Pertek</label>
						<div class="col-sm-9">
							<input name="nomor_pertex" class="form-control" type="text" id="formFile"
								placeholder="Nomor Pertek"
								value="<?=isset($edit["nomor_pertex"]) ? set_value("nomor_pertex", $edit["nomor_pertex"]): set_value("nomor_pertex"); ?>">
						</div>

						<!-- input file Data BPN -->
						<label class="col-sm-3 " for="basic-default-company">Upload Data BPN</label>
						<div class="col-sm-9">
							<input name="data_bpn" class="form-control" type="file" id="formFile" placeholder="data_bpn"
								value="<?=isset($edit["data_bpn"]) ? set_value("data_bpn", $edit["data_bpn"]): set_value("data_bpn"); ?>"
								onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/') . $edit['data_bpn'] ?>" alt=".jpg dan .png" height="200" width="200">
						</div>
					</div>

					<!-- 6. Form Rekomendasi Persetujuan Kesesuaian -->
					<div>
						<h6 class="mb-b fw-semibold">6. Form Rekomendasi Persetujuan Kesesuaian</h6>
						<div class="row mb-3">
							<div class="col-sm-9">
								<a href="<?=base_url('pemanfaatan/input_rekomendasi_pemanfaatan')?>">
									<button type="button" class="btn btn-label-primary">Isi Form Rekomendasi
										Persetujuan</button>
								</a>
							</div>
						</div>
					</div>

					<!-- 7. Form Peta Persetujuan Kesesuaian -->
					<div>
						<h6 class="mb-b fw-semibold">7. Form Peta Persetujuan Kesesuaian</h6>
						<div class="row mb-3">
							<div class="col-sm-9">
								<a href="<?=base_url('pemanfaatan/input_peta_pemanfaatan')?>">
									<button type="button" class="btn btn-label-primary">Isi Form Peta Persetujuan
										Kesesuaian</button>
								</a>
							</div>
						</div>
					</div>
					<!-- Cetak Berita Acara -->
					<div>
						<h6 class="mb-b fw-semibold">Cetak Berita Acara</h6>
						<div class="row mb-3">
							<div class="col-sm-9">
								<a href="<?=base_url('pemanfaatan/print')?>">
									<button type="button" class="btn btn-label-primary">Cetak Berita Acara</button>
								</a>
							</div>
						</div>
					</div>

					<!-- Upload Berita Acara -->
					<div>
						<h6 class="mb-b fw-semibold">9. Berita Acara</h6>
						<div class="row mb-3">
							<div class="col-sm-9">
								<a
									href="https://drive.google.com/drive/folders/1U7CqzbtVsVFQyMCtQPyO-KU7JFHX4WvD?usp=share_link'>">
									<button type="button" class="btn btn-label-primary">Template Berita Acara</button>
								</a>
							</div>
						</div>

						<div class="row mb-3">
							<label class="col-sm-3 " for="basic-default-company">Nomor Berita Acara</label>
							<div class="col-sm-9">
								<input name="nomor_ba" class="form-control" type="text" id="formFile"
									placeholder="Nomor Berita Acara"
									value="<?=isset($edit["nomor_ba"]) ? set_value("nomor_ba", $edit["nomor_ba"]): set_value("nomor_ba"); ?>">
							</div>

							<label class="col-sm-3 " for="basic-default-company">Tanggal Berita Acara</label>
							<div class="col-sm-9">
								<input name="tanggal_ba" class="form-control" type="date" id="formFile"
									placeholder="Tanggal Berita Acara"
									value="<?=isset($edit["tanggal_ba"]) ? set_value("tanggal_ba", $edit["tanggal_ba"]): set_value("tanggal_ba"); ?>">
							</div>

							<label class="col-sm-3 " for="basic-default-company">Komentar</label>
							<div class="col-sm-9">
								<input name="komentar" class="form-control" type="text" id="formFile"
									placeholder="Komentar"
									value="<?=isset($edit["komentar"]) ? set_value("komentar", $edit["komentar"]): set_value("komentar"); ?>">
							</div>

							<!--<label class="col-sm-3 " for="basic-default-company">Upload Berita Acara</label>
							<div class="col-sm-9">
								<input name="upload_ba" class="form-control" type="file" id="formFile" placeholder="upload_ba"
									value="<?=isset($edit["upload_ba"]) ? set_value("upload_ba", $edit["upload_ba"]): set_value("upload_ba"); ?>"
									onchange = "preview()">
							</div>
							<h1> </h1>
							<div class="row mb-3">
								<label class="col-sm-3 col-form-label" for="basic-default-company">Berita Acara</label>
								<div class="col-sm-9">
							<img id="frame" src="<?= base_url('uploads/') . $edit['upload_ba'] ?>" alt="upload_ba" height="200" width="200">
								</div>
							</div>-->

							<label class="col-sm-3" for="basic-default-company">Status Kegiatan</label>
							<div class="col-sm-9">
								<select name="status" id="selectpickerBasic" class="selectpicker w-100"
									data-style="btn-default">
									<option value="tersimpan"
										<?=isset($edit["status"]) && $edit["status"] == "0" ? "selected" : "" ?>>
										Tersimpan</option>
									<option value="diajukan"
										<?=isset($edit["status"]) && $edit["status"] == "1" ? "selected" : "" ?>>
										Diajukan</option>
									<option value="dirapatkan"
										<?=isset($edit["status"]) && $edit["status"] == "2" ? "selected" : "" ?>>
										Dirapatkan</option>
									<option value="diinformasikan"
										<?=isset($edit["status"]) && $edit["status"] == "3" ? "selected" : "" ?>>
										Diinformasikan</option>
								</select>
							</div>
						</div>
					</div>
</div>

					<input name="submit" type="submit" class="btn btn-primary" value="Simpan">
				</form>
				<a href="<?php echo base_url(). 'pemanfaatan/tabel_arsip_pemanfaatan/';?>"><button
						class="btn btn-warning">Batal</button></a>
			</div>
		</div>
	</div>
</div>

<!--/ Bordered Table -->
