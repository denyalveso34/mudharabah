<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Data Pengaduan</h5>
	<div class="card-body">
		<div class="card-datatable text-nowrap">
			<table class="table datatables-basic table-bordered">
			<a href="<?php echo base_url(). 'perencanaan/pengaduan_perencanaan/';?>"><button class="btn btn-warning">Tambah Data Pengaduan</button></a>
			<thead>
					<tr>
						<th>Nomor BA</th>
						<th>Judul Pengaduan</th>
						<th>Uraian Pengaduan</th>
						<th>Tanggal Pengaduan</th>
						<th>Nama Pelapor</th>
						<th>Telepon</th>
						<th>Email</th>
						<th>Data / File</th>
						<th>Foto / Bukti</th>
						<th>Cetak Berita Acara</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
                	<?php foreach ($perencanaan_list->result() as $pengaduan) { ?>
                	<tr>
						<td><?=$pengaduan->id_pengaduan;?></td>
                    	<td><?=$pengaduan->judul_pengaduan;?></td>
						<td><?=$pengaduan->uraian_pengaduan;?></td>
						<td><?=$pengaduan->tanggal_pengaduan;?></td>
						<td><?=$pengaduan->nama_pelapor;?></td>
						<td><?=$pengaduan->telepon;?></td>
						<td><?=$pengaduan->email;?></td>
						<td><img id ="frame" src="<?= base_url('uploads/perencanaan/') . $pengaduan->foto ?>" width="100px" class="img-thumbnail" onchange="preview()"></td>
                    	<td>
							<a href="<?=base_url('uploads/perencanaan/'.$pengaduan->file)?>" download class="text-primary mt-3">
								<?=$pengaduan->file?>
							</a>
						</td>

						<td><a href="<?php echo base_url(). 'perencanaan/print_pengaduan/'.$pengaduan->id_pengaduan;?>"><button class="btn btn-warning">Cetak</button></a></td>

                    	<td data-label="Opsi">

							<a href="<?=base_url('perencanaan/edit_pengaduan?id_pengaduan='.$pengaduan->id_pengaduan);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit pengaduan">
							<i class="fas fa-edit"></i>
							</a>			
						
							<a href="<?=base_url('perencanaan/hapus_pengaduan?id_pengaduan='.$pengaduan->id_pengaduan);?>" class="btn btn-xs btn-icon delete" 
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