<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php
    		if ($title == "Data Perencanaan"){$url = "perencanaan/sosialisasi-perencanaan"; $page_title = "Input Data Perencanaan";}
    		elseif ($title == "Edit Perencanaan") { $url = "perencanaan/edit-sosialisasi"; $page_title = "Edit Data Perencanaan";}
    			// echo form_open($url, "id='data-form' ");
    	?>

		<div class="card-body">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0"><?=$page_title?></h5>
			</div>
			<div class="card-body">

				<!-- <form action="<?=base_url($url);?>" method='post'> -->

				<form action="<?=base_url($url);?>" method='post' enctype="multipart/form-data">
					<!-- input bidang type hidden -->
					<input type="hidden" name="bidang" value="Perencanaan">


					<!-- id perencanaan auto increment -->
					<input type="hidden" name="id_perencanaan"
						value="<?=isset($edit["id_perencanaan"]) ? set_value("id_perencanaan", $edit["id_perencanaan"]): set_value("id_perencanaan"); ?>">


					<!-- Judul Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Judul Kegiatan</label>
						<div class="col-sm-9">
							<input name="judul_kegiatan" type="text" class="form-control mb-1"
								placeholder="Judul Kegiatan"
								value="<?=isset($edit["judul_kegiatan"]) ? set_value("judul_kegiatan", $edit["judul_kegiatan"]): set_value("judul_kegiatan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Uraian Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Uraian Kegiatan</label>
						<div class="col-sm-9">
							<input name="uraian_kegiatan" type="text" class="form-control mb-1"
								placeholder="Uraian Kegiatan"
								value="<?=isset($edit["uraian_kegiatan"]) ? set_value("uraian_kegiatan", $edit["uraian_kegiatan"]): set_value("uraian_kegiatan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Tanggal Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Tanggal Kegiatan</label>
						<div class="col-sm-9">
							<input name="tanggal_kegiatan" type="date" class="form-control mb-1"
								placeholder="Tanggal Kegiatan"
								value="<?=isset($edit["tanggal_kegiatan"]) ? set_value("tanggal_kegiatan", $edit["tanggal_kegiatan"]): set_value("tanggal_kegiatan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Upload Foto -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Upload File (doc/pdf)</label>
						<div class="col-sm-9">
							<input name="file" class="form-control" type="file" id="formFile" placeholder="file"
								value="<?=isset($edit["file"]) ? set_value("file", $edit["file"]): set_value("file"); ?>">
							<?php if(isset($edit["file"])): ?>
								<a href="<?=base_url('uploads/'.$edit["file"])?>" download class="text-primary mt-3">
									<?=$edit["file"]?>
								</a>
							<?php endif; ?>
						</div>
					</div>


					<!-- Upload Foto --> 
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Upload Foto (jpg/jpeg)</label>
						<div class="col-sm-9">
							<input name="foto" class="form-control" type="file" id="formFile" placeholder="foto"
								value="<?=isset($edit["foto"]) ? set_value("foto", $edit["foto"]): set_value("foto"); ?>" 
							 onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company"></label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/perencanaan/') . $edit['foto'] ?>" alt="Foto" height="200" width="200">
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
								<option value="diinformasikan"
									<?=isset($edit["status"]) && $edit["status"] == "2" ? "selected" : "" ?>>
									Diinformasikan</option>
							</select>
						</div>
					</div>
					</div>

					<input id="submit" name="submit" type="submit" class="btn btn-primary" value="Simpan">
					
				</form>
				<a href="<?php echo base_url(). 'perencanaan/tabel_arsip_perencanaan/';?>"><button
						class="btn btn-warning">Batal</button></a>

			</div>
		</div>
	</div>
</div>
