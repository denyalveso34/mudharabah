<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php
    		if ($title == "Persyaratan PKKPR"){$url = "pemanfaatan/input_persyaratan_pemanfaatan"; $page_title = "Input Data Persyaratan PKKPR";}
    		elseif ($title == "Edit Persyaratan PKKPR") { $url = "pemanfaatan/edit_persyaratan_pemanfaatan"; $page_title = "Edit Data Persyaratan PKKPR";}
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
					<input type="hidden" name="id_persyaratan"
						value="<?=isset($edit["id_persyaratan"]) ? set_value("id_persyaratan", $edit["id_persyaratan"]): set_value("id_persyaratan"); ?>">

					<!-- No Persyaratan PKPR -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">No Persyaratan PKPR</label>
						<div class="col-sm-9">
							<input name="no_persyaratan" type="text" class="form-control mb-1" placeholder="No Persyaratan PKPR"
								value="<?=isset($edit["no_persyaratan"]) ? set_value("no_persyaratan", $edit["no_persyaratan"]): set_value("no_persyaratan"); ?>">
						</div>
					</div>

					<!-- Nama Dasar PKKPR -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nama Persyaratan PKPR</label>
						<div class="col-sm-9">
							<input name="nama_persyaratan" type="text" class="form-control mb-1" placeholder="Nama Persyaratan PKPR"
								value="<?=isset($edit["nama_persyaratan"]) ? set_value("nama_persyaratan", $edit["nama_persyaratan"]): set_value("nama_persyaratan"); ?>">
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
