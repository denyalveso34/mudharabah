<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Pengendalian</h5>
	<div class="card-body">
		<div class="card-datatable text-nowrap">
			<table class="table datatables-basic table-bordered">
			<a href="<?php echo base_url(). 'pengendalian/input_monitoring/';?>"><button class="btn btn-warning">Tambah Data Pengendalian</button></a>
			<hr>
				<thead>
					<tr>
						<th>Tema</th>
                        <th>Nama Kegiatan</th>
                        <th>Agenda Rapat</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Jam</th>
                        <th>Kode</th>
                        <th>Lokasi</th>
                        <th>Tindak Lanjut</th>
                        <th>Keterangan</th>
                        <th>File Materi</th>
                        <th>File Undangan</th>
                        <th>Komentar</th>
                        <th>Status Kegiatan</th>
                        <th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pengendalian_list->result() as $pengendalian) { ?>
					<tr>
						<!-- <td><?=$pengendalian->bidang;?></td> -->
                        <!-- <td><?=$pengendalian->id_pengendalian;?></td> -->
                        <td><?=$pengendalian->tema;?></td>
                        <td><?=$pengendalian->nama_kegiatan;?></td>
                        <td><?=$pengendalian->agenda_rapat;?></td>
                        <td><?=$pengendalian->tanggal_kegiatan;?></td>
                        <td><?=$pengendalian->jam;?></td>
                        <td><?=$pengendalian->kode;?></td>
                        <td><?=$pengendalian->lokasi_persil;?></td>
                        <td><?=$pengendalian->tindak_lanjut;?></td>
                        <td><?=$pengendalian->keterangan;?></td>
						<td>
							<a href="<?=base_url('uploads/pengendalian/'.$pengendalian->file_materi)?>" download class="text-primary mt-3">
								<?=$pengendalian->file_materi?>
							</a>
						</td>
						<td>
							<a href="<?=base_url('uploads/pengendalian/'.$pengendalian->file_undangan)?>" download class="text-primary mt-3">
								<?=$pengendalian->file_undangan?>
							</a>
						</td>
                        <td><?=$pengendalian->komentar;?></td>
                        <td><?=$pengendalian->status;?></td>
						<td data-label="Opsi">

							<a href="<?=base_url('pengendalian/edit_monitoring?kode='.$pengendalian->kode);?>" class="btn btn-xs btn-icon edit"
								data-toggle="tooltip" data-original-title="edit pengendalian">
								<i class="fas fa-edit"></i>
							</a>

							<a href="<?=base_url('pengendalian/hapus?id_pengendalian='.$pengendalian->id_pengendalian);?>" class="btn btn-xs btn-icon delete"
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
