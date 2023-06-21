<!-- Basic Layout -->
<div class="col-xxl">
	<div class="card mb-4">
		<?php echo validation_errors(); ?>

		<?php
    		if ($title == "Dasar PKKPR"){$url = "pemanfaatan/input_pkkpr_pemanfaatan"; $page_title = "Input Data Dasar PKKPR";}
    		elseif ($title == "Edit Dasar PKKPR") { $url = "pemanfaatan/edit_pkkpr_pemanfaatan"; $page_title = "Edit Data Dasar PKKPR";}
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
					<input type="hidden" name="id_pkkpr"
						value="<?=isset($edit["id_pkkpr"]) ? set_value("id_pkkpr", $edit["id_pkkpr"]): set_value("id_pkkpr"); ?>">

					<!-- No Dasar PKKPR -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">No Dasar PKKPR</label>
						<div class="col-sm-9">
							<input name="no_pkkpr" type="text" class="form-control mb-1" placeholder="No Dasar PKKPR"
								value="<?=isset($edit["no_pkkpr"]) ? set_value("no_pkkpr", $edit["no_pkkpr"]): set_value("no_pkkpr"); ?>">
						</div>
					</div>

					<!-- Nama Dasar PKKPR -->
					<div class="row mb-3">
						<label class="col-sm-3 col-form-label" for="basic-default-company">Nama Dasar PKKPR</label>
						<div class="col-sm-9">
							<input name="nama_pkkpr" type="text" class="form-control mb-1" placeholder="Nama Dasar PKKPR"
								value="<?=isset($edit["nama_pkkpr"]) ? set_value("nama_pkkpr", $edit["nama_pkkpr"]): set_value("nama_pkkpr"); ?>">
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
