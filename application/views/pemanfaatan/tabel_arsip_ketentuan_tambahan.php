<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Ketentuan Tambahan</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered">
			<a href="<?php echo base_url(). 'pemanfaatan/input_ketentuan_tambahan_pemanfaatan/';?>"><button 
			class="btn btn-warning">Tambah Ketentuan Tambahan</button></a>
	
			<a href="<?=base_url('pemanfaatan/input_rekomendasi_pemanfaatan/')?>">
						<button type="button" class="btn btn-warning">Batal</button>
						</a>
			<hr>
			<thead>
					<tr>
						<th>No Ketentuan Tambahan</th>
						<th>Nama Ketentuan Tambahan</th>
						<th>Opsi</th>
					</tr>
			</thead>
				<tbody>
					<?php foreach ($ketentuan_tambahan_list->result() as $ketentuan_tambahan) { ?>
					<tr>
						<td><?=$ketentuan_tambahan->no_ketentuan_tambahan;?></td>
						<td><?=$ketentuan_tambahan->nama_ketentuan_tambahan;?></td>
                    	<td data-label="Opsi">

							<a href="<?=base_url('pemanfaatan/edit_ketentuan_tambahan_pemanfaatan?id_ketentuan_tambahan='.$ketentuan_tambahan->id_ketentuan_tambahan);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit">
							<i class="fas fa-edit"></i>
							</a>			
						
							<a href="<?=base_url('pemanfaatan/hapus_ketentuan_tambahan?id_ketentuan_tambahan='.$ketentuan_tambahan->id_ketentuan_tambahan);?>" class="btn btn-xs btn-icon delete" 
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
