<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Data Perencanaan</h5>
	<div class="card-body">
		<div class="card-datatable text-nowrap">
			<table class="table datatables-basic table-bordered">
				<a href="<?php echo base_url(). 'perencanaan/sosialisasi_perencanaan/';?>"><button class="btn btn-warning">Tambah Data Perencanaan</button></a>
				<thead>
					<tr>
						<th>Nomor BA</th>
						<th>Nama Kegiatan</th>
						<th>Uraian Kegiatan</th>
						<th>Tanggal Kegiatan</th>
						<th>Foto / Bukti</th>
						<th>File PDF</th>
						<th>Cetak Berita Acara</th>
						<th>Status Kegiatan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
                	<?php foreach ($perencanaan_list->result() as $perencanaan) { ?>
                	<tr>
						<td><?=$perencanaan->id_perencanaan;?></td>
                    	<td><?=$perencanaan->judul_kegiatan;?></td>
						<td><?=$perencanaan->uraian_kegiatan;?></td>
						<td><?=$perencanaan->tanggal_kegiatan;?></td>
						<td><img id ="frame" src="<?= base_url('uploads/perencanaan/') . $perencanaan->foto ?>" width="100px" class="img-thumbnail" onchange="preview()"></td>
						<td>
							<a href="<?=base_url('uploads/perencanaan/'.$perencanaan->file)?>" download class="text-primary mt-3">
								<?=$perencanaan->file?>
							</a>
						</td>
						<td><a href="<?php echo base_url(). 'perencanaan/print/'.$perencanaan->id_perencanaan;?>"><button class="btn btn-warning">Cetak</button></a></td>
						<td><?=$perencanaan->status;?></td>


                    	<td data-label="Opsi">
							<a href="<?=base_url('perencanaan/edit_sosialisasi?id_perencanaan='.$perencanaan->id_perencanaan);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit perencanaan">
							<i class="fas fa-edit"></i>
							</a>			
							<a href="<?=base_url('perencanaan/hapus?id_perencanaan='.$perencanaan->id_perencanaan);?>" class="btn btn-xs btn-icon delete" 
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