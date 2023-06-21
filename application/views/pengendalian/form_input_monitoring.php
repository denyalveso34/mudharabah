<?php 
	$tindak_lanjut_opt = array(
		"null"					=> "Null",
		"survei"				=> "Survei", 
		"undangan_klarifikasi"	=> "Undangan Klarifikasi", 
		"berita_acara"			=> "Berita Acara", 
		"telaah_staff"			=> "Telaah Staff",
		"nota_dinas"			=> "Nota Dinas", 
		"kajian_teknis"			=> "Kajian Teknis", 
		"lainnya"				=> "Lainnya" 
	);
?>
<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php 
			if ($title == "Input Data Pengendalian"){$url = "pengendalian/input_monitoring"; $page_title = "Input Data Pengendalian"; }
			elseif ($title == "Edit Data Pengendalian") { $url = "pengendalian/edit-monitoring"; $page_title = "Edit Data Pengendalian";}
			// echo form_open($url, "id='data-form' ");
		?>

		<div class="card-body">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0"><?=$page_title?></h5>
				<small class="text-muted float-end"></small>
			</div>
			<div class="card-body">

				<form action="<?=base_url($url);?>" method='post' enctype="multipart/form-data">
					<!-- <?php echo form_open_multipart(base_url($url));?> -->

					<!-- input bidang type hidden -->
					<input type="hidden" name="bidang" value="Pengendalian">

					<!-- id pengendalian auto increment -->
					<input type="hidden" name="id_pengendalian"
						value="<?=isset($edit["id_pengendalian"]) ? set_value("id_pengendalian", $edit["id_pengendalian"]): set_value("id_pengendalian"); ?>">

					<!-- tema -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Tema *</label>
						<div class="col-sm-9">
							<select name="tema" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
								<option value="Umum" <?=isset($edit["tema"]) && $edit["tema"] == "0" ? "selected" : "" ?>>
									Umum</option>
								<option value="Penilaian Pelaksanaan KKPR dan Pernyataan Mandiri Pelaku UMK"
									<?=isset($edit["tema"]) && $edit["tema"] == "1" ? "selected" : "" ?>>Penilaian
									Pelaksanaan KKPR dan Pernyataan Mandiri Pelaku UMK</option>
								<option value="Penilaian Perwujudan RTR"
									<?=isset($edit["tema"]) && $edit["tema"] == "2" ? "selected" : "" ?>>Penilaian
									Perwujudan RTR</option>
								<option value="Pemberian Insentif dan Disinsentif"
									<?=isset($edit["tema"]) && $edit["tema"] == "3" ? "selected" : "" ?>>Pemberian
									Insentif dan Disinsentif</option>
								<option value="Pengenaan Sanksi Administratif"
									<?=isset($edit["tema"]) && $edit["tema"] == "4" ? "selected" : "" ?>>Pengenaan
									Sanksi Administratif</option>
								<option value="Penyelesaian Sengketa Penataan Ruang"
									<?=isset($edit["tema"]) && $edit["tema"] == "5" ? "selected" : "" ?>>Penyelesaian
									Sengketa Penataan Ruang</option>
								<option value="Pengawasan Penataan Ruang"
									<?=isset($edit["tema"]) && $edit["tema"] == "6" ? "selected" : "" ?>>Pengawasan
									Penataan Ruang</option>
							</select>
						</div>
					</div>

					<!-- Nama Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-name">Nama Kegiatan</label>
						<div class="col-sm-9">
							<input name="nama_kegiatan" type="text" class="form-control mb-1"
								placeholder="Diisi dengan informasi yang akan diberikan / nama kegiatan pengaduan"
								value="<?=isset($edit["nama_kegiatan"]) ? set_value("nama_kegiatan", $edit["nama_kegiatan"]): set_value("nama_kegiatan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Agenda Rapat -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-name">Agenda Rapat</label>
						<div class="col-sm-9">
							<input name="agenda_rapat" type="text" class="form-control mb-1"
								placeholder="Diisi dengan agenda rapat"
								value="<?=isset($edit["agenda_rapat"]) ? set_value("agenda_rapat", $edit["agenda_rapat"]): set_value("agenda_rapat"); ?>"
								required="required">
						</div>
					</div>

					<!-- Tanggal -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-name">Tanggal *</label>
						<div class="col-sm-9">
							<input name="tanggal_kegiatan" type="date" class="form-control mb-1"
								placeholder="Masukan tanggal rapat yang diinginkan"
								value="<?=isset($edit["tanggal_kegiatan"]) ? set_value("tanggal_kegiatan", $edit["tanggal_kegiatan"]): set_value("tanggal_kegiatan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Jam Pengajuan Rapat -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-name">Jam</label>
						<div class="col-sm-9">
							<input name="jam" type="text" class="form-control mb-1"
								placeholder="Masukan Jam rapat yang diinginkan dengan format hh:mm "
								value="<?=isset($edit["jam"]) ? set_value("jam", $edit["jam"]): set_value("jam"); ?>"
								required="required">
						</div>
					</div>

					<!-- Kode -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Kode</label>
						<div class="col-sm-9">
							<input name="kode" type="text" class="form-control mb-1"
								placeholder="Diisi dengan kode yang digunakan untuk menentukan kronologis pengaduan "
								value="<?=isset($edit["kode"]) ? set_value("kode", $edit["kode"]): set_value("kode"); ?>"
								required="required">
						</div>
					</div>

					<!-- Lokasi -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Lokasi</label>
						<div class="col-sm-9">
							<input name="lokasi_persil" type="text" class="form-control mb-1"
								placeholder="Alamat lokasi (termasuk kelurahan dan kecamatan)"
								value="<?=isset($edit["lokasi_persil"]) ? set_value("lokasi_persil", $edit["lokasi_persil"]): set_value("lokasi_persil"); ?>"
								required="required">
						</div>
					</div>

					<!-- Tindak Lanjut -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Tindak Lanjut</label>
						<div class="col-sm-9">
							<?php
								foreach($tindak_lanjut_opt as $key => $value) {
							?>	

							<div class="form-check form-check-primary mt-3">
								<input name="tindak_lanjut[]" class="form-check-input" type="checkbox" value="<?=$key;?>" id="customCheckPrimary"/>
								<label class="form-check-label" for="customCheckPrimary"><?=$value;?></label>
							</div>

							<?php
								}
							?>	

						</div>
					</div>
					<br>

					<!-- Tindak Lanjut -->
					<!-- <div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Tindak Lanjut</label>
						<div class="col-sm-9">
							<select name="tindak_lanjut" id="selectpickerBasic" class="selectpicker w-100"
								data-style="btn-default">
								<option value="Null"
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "1" ? "selected" : "" ?>>
									Null
								</option>
								<option value="Survei"
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "0" ? "selected" : "" ?>>
									Survei
								</option>
								<option value="Undangan Klarifikasi"
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "2" ? "selected" : "" ?>>
									Undangan Klarifikasi
								</option>
								<option value="Berita Acara"
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "3" ? "selected" : "" ?>>
									Berita Acara
								</option>
								<option value="Telaah Staff"
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "4" ? "selected" : "" ?>>
									Telaah Staff
								</option>
								<option value="Nota Dinas"
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "5" ? "selected" : "" ?>>
									Nota Dinas
								</option>
								<option value="Kajian Teknis"
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "6" ? "selected" : "" ?>>
									Kajian Teknis
								</option>
								<option value="Lainnya . . ."
									<?=isset($edit["tindak_lanjut"]) && $edit["tindak_lanjut"] == "7" ? "selected" : "" ?>>
									Lainnya . . .
								</option>
							</select>
						</div>
					</div> -->

					<!-- Keterangan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Keterangan</label>
						<div class="col-sm-9">
							<input name="keterangan" type="text" class="form-control mb-1" placeholder="Keterangan"
								value="<?=isset($edit["keterangan"]) ? set_value("keterangan", $edit["keterangan"]): set_value("keterangan"); ?>"
								required="required" placeholder="Keterangan">
						</div>
					</div>

					<!-- File Materi -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">File Materi</label>
						<div class="col-sm-9">
							<input name="file_materi" type="file" class="form-control mb-1" placeholder="File Materi"
								value="<?=isset($edit["file_materi"]) ? set_value("file_materi", $edit["file_materi"]): set_value("file_materi"); ?>"
								required="required" placeholder="Materi">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/pengendalian') . $edit['file_undangan'] ?>" alt="file_undangan" height="200" width="200">
						</div>
					</div>

					<!-- UPLOAD File Undangan Rapat -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">File Undangan Rapat</label>
						<div class="col-sm-9">
							<input name="file_undangan" type="file" class="form-control mb-1"
								placeholder="File Undangan Rapat"
								value="<?=isset($edit["file_undangan"]) ? set_value("file_undangan", $edit["file_undangan"]): set_value("file_undangan"); ?>"
								required="required" placeholder="Undangan">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/pengendalian') . $edit['file_undangan'] ?>" alt="file_undangan" height="200" width="200">
						</div>
					</div>

					<!-- Komentar -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Komentar</label>
						<div class="col-sm-9">
							<input name="komentar" type="text" class="form-control mb-1" placeholder="komentar"
								value="<?=isset($edit["komentar"]) ? set_value("komentar", $edit["komentar"]): set_value("komentar"); ?>"
								required="required" placeholder="komentar">
						</div>
					</div>

					<!-- status kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Status Kegiatan</label>
						<div class="col-sm-9">
							<select name="status" id="selectpickerBasic" class="selectpicker w-100"
								data-style="btn-default">
								<option value="tersimpan"
									<?=isset($edit["status"]) && $edit["status"] == "0" ? "selected" : "" ?>>Tersimpan
								</option>
								<option value="diajukan"
									<?=isset($edit["status"]) && $edit["status"] == "1" ? "selected" : "" ?>>Diajukan
								</option>
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

				<input name="submit" type="submit" class="btn btn-primary" value="Simpan">

			</form>
			<a href="<?php echo base_url(). 'pengendalian/tabel_arsip_pengendalian/';?>"><button
					class="btn btn-warning">Batal</button></a>
		</div>
	</div>
</div>
</div>
