<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Persyaratan PKKPR</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered">
			<a href="<?php echo base_url(). 'pemanfaatan/input_persyaratan_pemanfaatan/';?>"><button class="btn btn-warning">Tambah Persyaratan PKKPR</button></a>
			<a href="<?=base_url('pemanfaatan/input_rekomendasi_pemanfaatan/')?>">
						<button type="button" class="btn btn-warning">Batal</button>
						</a>
			<hr>
				<thead>
					<tr>
						<th>No Persyaratan PKKPR</th>
						<th>Nama Persyaratan PKKPR</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($persyaratan_list->result() as $persyaratan) { ?>
					<tr>
						<td><?=$persyaratan->no_persyaratan;?></td>
						<td><?=$persyaratan->nama_persyaratan;?></td>
                    	<td data-label="Opsi">

							<a href="<?=base_url('pemanfaatan/edit_persyaratan_pemanfaatan?id_persyaratan='.$persyaratan->id_persyaratan);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit">
							<i class="fas fa-edit"></i>
							</a>			
						
							<a href="<?=base_url('pemanfaatan/hapus_persyaratan?id_persyaratan='.$persyaratan->id_persyaratan);?>" class="btn btn-xs btn-icon delete" 
							data-toggle="hapus" data-original-title="hapus">
							<i class="fas fa-trash "></i>
							</a>

						</td>
					</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!--/ Bordered Table -->
