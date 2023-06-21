<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Bidang SPPR</h5>
	<div class="card-body">
		<div class="card-datatable text-nowrap">
			<table class="table datatables-basic table-bordered">
				<a href="<?php echo base_url(). 'pemanfaatan/input_sppr_pemanfaatan/';?>"><button
						class="btn btn-warning">Tambah Data SPPR</button></a>
				<a href="<?=base_url('pemanfaatan')?>">
						<button type="button" class="btn btn-warning">Batal</button>
						</a>
				<hr>
				<thead>
					<tr>
						<th>Nomor Berita Acara</th>
						<th>Nama Kegiatan</th>
						<th>Tanggal Kegiatan</th>
						<th>Nama Pelapor</th>
						<th>Berita Acara</th>
						<th>Catatan</th>
						<th>Status Kegiatan</th>
						<th>Data / File</th>
						<th>Foto / Bukti</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($sppr_list->result() as $sppr) { ?>
					<tr>
						<td><?=$sppr->nomor_kegiatan;?></td>
						<td><?=$sppr->nama_kegiatan;?></td>
						<td><?=$sppr->tanggal_kegiatan;?></td>
						<td><?=$sppr->nama_pelapor;?></td>
						<td><?=$sppr->berita_acara;?></td>
						<td><?=$sppr->catatan;?></td>
						<td><?=$sppr->status;?></td>
						<td><img id="frame" src="<?= base_url('uploads/') . $sppr->foto ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						<td>
							<a href="<?=base_url('uploads/'.$sppr->materi)?>" download class="text-primary mt-3">
								<?=$sppr->materi?>
							</a>
						</td>
						<td data-label="Opsi">

							<a href="<?=base_url('pemanfaatan/edit_sppr_pemanfaatan?id_sppr='.$sppr->id_sppr);?>"
								class="btn btn-xs btn-icon edit" data-toggle="tooltip" data-original-title="edit">
								<i class="fas fa-edit"></i>
							</a>

							<a href="<?=base_url('pemanfaatan/hapus_sppr?id_sppr='.$sppr->id_sppr);?>"
								class="btn btn-xs btn-icon delete" data-toggle="hapus" data-original-title="hapus">
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
