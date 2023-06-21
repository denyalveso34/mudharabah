<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php
    		if ($title == "Data Pengaduan"){$url = "perencanaan/pengaduan-perencanaan"; $page_title = "Input Data Pengaduan";}
    		elseif ($title == "Edit Pengaduan") { $url = "perencanaan/edit-pengaduan"; $page_title = "Edit Data Pengaduan";}
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

					<!-- id pengaduan auto increment -->
					<input type="hidden" name="id_pengaduan"
						value="<?=isset($edit["id_pengaduan"]) ? set_value("id_pengaduan", $edit["id_pengaduan"]): set_value("id_pengaduan"); ?>">

					<!-- Nama Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Judul Pengaduan</label>
						<div class="col-sm-9">
							<input name="judul_pengaduan" type="text" class="form-control mb-1"
								placeholder="Judul Pengaduan"
								value="<?=isset($edit["judul_pengaduan"]) ? set_value("judul_pengaduan", $edit["judul_pengaduan"]): set_value("judul_pengaduan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Uraian -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Uraian Pengaduan</label>
						<div class="col-sm-9">
							<input name="uraian_pengaduan" type="text" class="form-control mb-1"
								placeholder="Uraian Pengaduan"
								value="<?=isset($edit["uraian_pengaduan"]) ? set_value("uraian_pengaduan", $edit["uraian_pengaduan"]): set_value("uraian_pengaduan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Tanggal Kegiatan -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Tanggal Pengaduan</label>
						<div class="col-sm-9">
							<input name="tanggal_pengaduan" type="date" class="form-control mb-1"
								placeholder="Tanggal Pengaduan"
								value="<?=isset($edit["tanggal_pengaduan"]) ? set_value("tanggal_pengaduan", $edit["tanggal_pengaduan"]): set_value("tanggal_pengaduan"); ?>"
								required="required">
						</div>
					</div>

					<!-- Nama Pelapor -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nama Pelapor</label>
						<div class="col-sm-9">
							<input name="nama_pelapor" type="text" class="form-control mb-1" placeholder="Nama Pelapor"
								value="<?=isset($edit["nama_pelapor"]) ? set_value("nama_pelapor", $edit["nama_pelapor"]): set_value("nama_pelapor"); ?>"
								required="required">
						</div>
					</div>

					<!-- No. Telepon -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">No. Telepon</label>
						<div class="col-sm-9">
							<input name="telepon" type="tel" class="form-control mb-1" placeholder="xxxx-xxxx-xxxx"
								value="<?=isset($edit["telepon"]) ? set_value("telepon", $edit["telepon"]): set_value("telepon"); ?>"
								required="required">
						</div>
					</div>

					<!-- Email -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Email</label>
						<div class="col-sm-9">
							<input name="email" type="email" class="form-control mb-1" placeholder="Email"
								value="<?=isset($edit["email"]) ? set_value("email", $edit["email"]): set_value("email"); ?>"
								required="required">
						</div>
					</div>

					<!-- Upload File -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Upload File (doc/pdf)</label>
						<div class="col-sm-9">
							<input name="file" class="form-control" type="file" id="formFile" placeholder="file"
								value="<?=isset($edit["file"]) ? set_value("file", $edit["file"]): set_value("file"); ?>"
								required="required">
							<?php if(isset($edit["file"])): ?>
								<a href="<?=base_url('uploads/perencanaan/'.$edit["file"])?>" download class="text-primary mt-3">
									<?=$edit["file"]?>
								</a>
							<?php endif; ?>
						</div>
					</div>

					<!-- Upload Bukti / Foto -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Upload Foto (jpg/jpeg)</label>
						<div class="col-sm-9">
							<input name="foto" class="form-control" type="file" id="formFile" placeholder="foto"
								value="<?=isset($edit["foto"]) ? set_value("foto", $edit["foto"]): set_value("foto"); ?>"
								required="required" onchange = "preview()">
						</div>
					</div>
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Foto</label>
						<div class="col-sm-9">
						<img id="frame" src="<?= base_url('uploads/perencanaan/') . $edit['foto'] ?>" alt="Foto" height="200" width="200">
						</div>
					</div>
			</div>
			<input id="submit" name="submit" type="submit" class="btn btn-primary" value="Simpan">
			</form>
			<a href="<?php echo base_url(). 'perencanaan/tabel_arsip_pengaduan/';?>"><button class="btn btn-warning">Batal</button></a>
		</div>
	</div>
</div>
</div>
