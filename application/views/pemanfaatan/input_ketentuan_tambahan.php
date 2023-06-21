<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php
    		if ($title == "Data Ketentuan Tambahan"){$url = "pemanfaatan/input_ketentuan_tambahan_pemanfaatan"; $page_title = "Input Data Ketentuan Tambahan";}
    		elseif ($title == "Edit Ketentuan Tambahan") { $url = "pemanfaatan/edit_ketentuan_tambahan_pemanfaatan"; $page_title = "Edit Data Ketentuan Tambahan";}
    			// echo form_open($url, "id='data-form' ");
    	?>

		<div class="card-body">
			<div class="card-header d-flex justify-content-between align-items-center">
				<h5 class="mb-0"><?=$page_title?></h5>
			</div>
			<div class="card-body">

				<form action="<?=base_url($url);?>" method='post'>
					<!-- input bidang type hidden -->
					<input type="hidden" name="bidang" value="Pemanfaatan">


					<!-- id perencanaan auto increment -->
					<input type="hidden" name="id_ketentuan_tambahan"
						value="<?=isset($edit["id_ketentuan_tambahan"]) ? set_value("id_ketentuan_tambahan", $edit["id_ketentuan_tambahan"]): set_value("id_ketentuan_tambahan"); ?>">

					<!-- No Persyaratan PKPR -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">No Ketentuan Tambahan</label>
						<div class="col-sm-9">
							<input name="no_ketentuan_tambahan" type="text" class="form-control mb-1" placeholder="No Ketentuan Tambahan"
								value="<?=isset($edit["no_ketentuan_tambahan"]) ? set_value("no_ketentuan_tambahan", $edit["no_ketentuan_tambahan"]): set_value("no_ketentuan_tambahan"); ?>">
						</div>
					</div>

					<!-- Nama Dasar PKKPR -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nama Ketentuan Tambahan</label>
						<div class="col-sm-9">
							<input name="nama_ketentuan_tambahan" type="text" class="form-control mb-1" placeholder="Nama Ketentuan Tambahan"
								value="<?=isset($edit["nama_ketentuan_tambahan"]) ? set_value("nama_ketentuan_tambahan", $edit["nama_ketentuan_tambahan"]): set_value("nama_ketentuan_tambahan"); ?>">
						</div>
					</div>
					</div>

					<input name="submit" type="submit" class="btn btn-primary" value="Simpan">

				</form>
				<a href="<?php echo base_url(). 'pemanfaatan/input_rekomendasi_pemanfaatan/';?>"><button class="btn btn-warning">Batal</button></a>
			</div>
		</div>
	</div>
</div>
