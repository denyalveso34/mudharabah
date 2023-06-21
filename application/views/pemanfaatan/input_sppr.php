<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php 
			if ($title == "Data SPPR"){$url = "pemanfaatan/input_sppr_pemanfaatan"; $page_title = "Input Data SPPR"; }
			elseif ($title == "Edit Data SPPR") { $url = "pemanfaatan/edit_sppr_pemanfaatan"; $page_title = "Edit Data SPPR";}
			// echo form_open($url, "id='data-form' ");
		?>

		<div class="card-body">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0"><?=$page_title?></h5>
				<small class="text-muted float-end"></small>
			</div>
			<div class="card-body">

					<form action="<?=base_url($url);?>" method='post' enctype="multipart/form-data">
					<!-- input bidang type hidden -->
					<input type="hidden" name="bidang" value="Pemanfaatan">

					<!-- id SPPR auto increment -->
					<input type="hidden" name="id_sppr"
						value="<?=isset($edit["id_sppr"]) ? set_value("id_sppr", $edit["id_sppr"]): set_value("id_sppr"); ?>">

					<!-- Nama Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-name">Nama Kegiatan</label>
						<div class="col-sm-9">
							<input name="nama_kegiatan" type="text" class="form-control mb-1"
								placeholder="Nama Kegiatan"
								value="<?=isset($edit["nama_kegiatan"]) ? set_value("nama_kegiatan", $edit["nama_kegiatan"]): set_value("nama_kegiatan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Tanggal Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-name">Tanggal Kegiatan</label>
						<div class="col-sm-9">
							<input name="tanggal_kegiatan" type="date" class="form-control mb-1"
								placeholder="Tanggal Kegiatan"
								value="<?=isset($edit["tanggal_kegiatan"]) ? set_value("tanggal_kegiatan", $edit["tanggal_kegiatan"]): set_value("tanggal_kegiatan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Pelapor -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nama Pelapor</label>
						<div class="col-sm-9">
							<input name="nama_pelapor" type="text" class="form-control mb-1" placeholder="Nama Pelapor"
								value="<?=isset($edit["nama_pelapor"]) ? set_value("nama_pelapor", $edit["nama_pelapor"]): set_value("nama_pelapor"); ?>"
								required="required">
						</div>
					</div>

					<!-- Berita Acara -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Berita Acara</label>
						<div class="col-sm-9">
							<input name="berita_acara" type="text" class="form-control mb-1" placeholder="Berita Acara"
								value="<?=isset($edit["berita_acara"]) ? set_value("berita_acara", $edit["berita_acara"]): set_value("berita_acara"); ?>"
								placeholder="Ya / Tidak" required="required">
						</div>
					</div>

					<!-- Catatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Catatan</label>
						<div class="col-sm-9">
							<input name="catatan" type="text" class="form-control mb-1" placeholder="Catatan"
								value="<?=isset($edit["catatan"]) ? set_value("catatan", $edit["catatan"]): set_value("catatan"); ?>"
								placeholder="Catatan" required="required">
						</div>
					</div>

					<!-- Upload Foto -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Upload Foto / Bukti</label>
						<div class="col-sm-9">
							<input name="foto" class="form-control" type="file" id="formFile" placeholder="foto"
								value="<?=isset($edit["foto"]) ? set_value("foto", $edit["foto"]): set_value("foto"); ?>"
								onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/') . $edit['foto'] ?>" alt=".jpg dan .png" height="200" width="200">
						</div>
					</div>

					<!-- Materi -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Upload Materi (pdf / doc)</label>
						<div class="col-sm-9">
							<input name="materi" class="form-control" type="file" id="formFile" placeholder="materi"
								value="<?=isset($edit["materi"]) ? set_value("materi", $edit["materi"]): set_value("materi"); ?>"
								required="required">
							<?php if(isset($edit["materi"])): ?>
								<a href="<?=base_url('uploads/'.$edit["materi"])?>" download class="text-primary mt-3">
									<?=$edit["materi"]?>
								</a>
							<?php endif; ?> 
						</div>
					</div>

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
									<?=isset($edit["status"]) && $edit["status"] == "2" ? "selected" : "" ?>>Dirapatkan
								</option>
								<option value="dirapatkan"
									<?=isset($edit["status"]) && $edit["status"] == "3" ? "selected" : "" ?>>
									Diinformasikan</option>
							</select>
						</div>
					</div>
			</div>

			<input name="submit" type="submit" class="btn btn-primary" value="Simpan">

			</form>
			<a href="<?php echo base_url(). 'pemanfaatan/tabel_arsip_sppr/';?>"><button
					class="btn btn-warning">Batal</button></a>
		</div>
	</div>
</div>
</div>
