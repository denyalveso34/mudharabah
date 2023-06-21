<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Ketentuan Lain</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered">
			<a href="<?php echo base_url(). 'pemanfaatan/input_ketentuan_lain_pemanfaatan/';?>"><button class="btn btn-warning">Tambah Ketentuan Lain</button></a>

			<a href="<?=base_url('pemanfaatan/input_rekomendasi_pemanfaatan/')?>">
						<button type="button" class="btn btn-warning">Batal</button>
						</a>
			<hr>
				<thead>
					<tr>
						<th>No Ketentuan Lain</th>
						<th>Nama Ketentuan Lain</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($ketentuan_lain_list->result() as $ketentuan_lain) { ?>
					<tr>
						<td><?=$ketentuan_lain->no_ketentuan_lain;?></td>
						<td><?=$ketentuan_lain->nama_ketentuan_lain;?></td>
                    	<td data-label="Opsi">

							<a href="<?=base_url('pemanfaatan/edit_ketentuan_lain_pemanfaatan?id_ketentuan_lain='.$ketentuan_lain->id_ketentuan_lain);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit">
							<i class="fas fa-edit"></i>
							</a>			
						
							<a href="<?=base_url('pemanfaatan/hapus_ketentuan_lain?id_ketentuan_lain='.$ketentuan_lain->id_ketentuan_lain);?>" class="btn btn-xs btn-icon delete" 
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
