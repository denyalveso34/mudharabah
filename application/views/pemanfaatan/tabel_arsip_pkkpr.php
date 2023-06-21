<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Peta Persetujuan</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered">
			<a href="<?php echo base_url(). 'pemanfaatan/input_peta_pemanfaatan/';?>"><button class="btn btn-warning">Tambah Peta Persetujuan</button></a>
			<a href="<?=base_url('pemanfaatan/input_peta_pemanfaatan/')?>">
						<button class="btn btn-warning">Batal</button></a>
			<hr>
				<thead>
					<tr>
						<th>Bidang</th>
						<th>Nama Pemohon</th>
						<th>Alamat</th>
						<th>Peruntukan Dimohon</th>
						<th>Lokasi Dimohon</th>
						<th>Keputusan PKKPR</th>
						<th>Ketentuan Kegiatan dan Penggunaan Lahan</th>
						<th>KDB Maksimum</th>
						<th>Koefisien Lantai Bangunan maksimum</th>
						<th>Ketinggian Bangunan maksimum</th>
						<th>Koefisien Dasar Hijau maksimum</th>
                        <th>Persyaratan Khusus</th>
						<th>Upload File SHP</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($peta_list->result() as $peta) { ?>
					<tr>
						<td><?=$peta->bidang;?></td>
						<td><?=$peta->nama;?></td>
						<td><?=$peta->alamat;?></td>
						<td><?=$peta->peruntukan;?></td>
						<td><?=$peta->lokasi;?></td>
						<td><?=$peta->keputusan_pkkpr;?></td>
						<td><?=$peta->ketentuan_kegiatan;?></td>
						<td><?=$peta->kdb;?></td>
						<td><?=$peta->klb;?></td>
						<td><?=$peta->kbm;?></td>
						<td><?=$peta->kdh;?></td>
						<td><?=$peta->persyaratan_khusus;?></td>
                        <td><img id="frame" src="<?= base_url('uploads/') . $peta->upload_shp ?>" width="100px"
								class="img-thumbnail" onchange="preview()"></td>
						</td>

                    	<td data-label="Opsi">
							<a href="<?=base_url('pemanfaatan/edit_peta_pemanfaatan?id_persetujuan='.$peta->id_persetujuan);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit">
							<i class="fas fa-edit"></i>
							</a>			
							<a href="<?=base_url('pemanfaatan/hapus_peta_pemanfaatan?id_persetujuan='.$peta->id_persetujuan);?>" class="btn btn-xs btn-icon delete" 
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
