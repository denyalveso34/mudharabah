<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Dasar PKKPR</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered">
			<a href="<?php echo base_url(). 'pemanfaatan/input_pkkpr_pemanfaatan/';?>"><button class="btn btn-warning">Tambah Dasar PKKPR</button></a>
			<a href="<?=base_url('pemanfaatan/input_rekomendasi_pemanfaatan/')?>">
						<button type="button" class="btn btn-warning">Batal</button>
						</a>
			<hr>
				<thead>
					<tr>
						<th>No Dasar PKKPR</th>
						<th>Nama Dasar PKKPR</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pkkpr_list->result() as $pkkpr) { ?>
					<tr>
						<td><?=$pkkpr->no_pkkpr;?></td>
						<td><?=$pkkpr->nama_pkkpr;?></td>
                    	<td data-label="Opsi">

							<a href="<?=base_url('pemanfaatan/edit_pkkpr_pemanfaatan?id_pkkpr='.$pkkpr->id_pkkpr);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit">
							<i class="fas fa-edit"></i>
							</a>			
						
							<a href="<?=base_url('pemanfaatan/hapus_pkkpr?id_pkkpr='.$pkkpr->id_pkkpr);?>" class="btn btn-xs btn-icon delete" 
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
