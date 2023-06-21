<!-- Bordered Table -->
<div class="card">
	<h5 class="card-header">Arsip Rekomendasi</h5>
	<div class="card-body">
		<div class="table-responsive text-nowrap">
			<table class="table table-bordered">
			<a href="<?php echo base_url(). 'pemanfaatan/input_peta_pemanfaatan/';?>"><button class="btn btn-warning">Isi Form Peta Persetujuan Kesesuaian</button></a>
			<a href="<?=base_url('pemanfaatan/input_rekomendasi_pemanfaatan/')?>">
						<button class="btn btn-warning">Batal</button></a>
			<hr>
				<thead>
					<tr>
						<th>Bidang</th>
						<th>Judul Kegiatan</th>
						<th>Nama Pemohon</th>
						<th>NPWP</th>
						<th>Alamat Kantor</th>
						<th>No Telepon</th>
						<th>Email</th>
						<th>Status Penanaman Modal</th>
						<th>Kode KBLI</th>
						<th>Judul KBLI</th>
						<th>Skala Usaha</th>
						<th>Lokasi Usaha</th>
						<th>Koordinat Geografis</th>
						<th>luas Tanah</th>
						<th>Penggunaan Tanah</th>
						<th>Rencana Teknis</th>
						<th>Status Tanah</th>
						<th>Dinyatakan</th>
						<th>Koordinat Geografis</th>
						<th>Luas Tanah Disetujui</th>
						<th>Jenis Peruntukan</th>
						<th>Kode KBLI</th>
						<th>Judul KBLI</th>
						<th>KDB</th>
						<th>Ketinggian Bangunan maksimum</th>
						<th>Indikasi Program Pemanfaatan</th>
						<th>Garis Sempadan Bangunan</th>
						<th>Jarak Bebas Bangunan minimum</th>
						<th>KDH</th>
						<th>Koefisien Tapak Basement</th>
						<th>Jaringan Utilitas Kota</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($rekomendasi_list->result() as $rekomendasi) { ?>
					<tr>
						<td><?=$rekomendasi->bidang;?></td>
						<td><?=$rekomendasi->judul_kegiatan;?></td>
						<td><?=$rekomendasi->nama_pemohon;?></td>
						<td><?=$rekomendasi->npwp;?></td>
						<td><?=$rekomendasi->alamat_kantor;?></td>
						<td><?=$rekomendasi->telepon;?></td>
						<td><?=$rekomendasi->email;?></td>
						<td><?=$rekomendasi->status_modal;?></td>
						<td><?=$rekomendasi->kode_kbli;?></td>
						<td><?=$rekomendasi->judul_kbli;?></td>
						<td><?=$rekomendasi->skala_usaha;?></td>
						<td><?=$rekomendasi->lokasi_usaha;?></td>
						<td><?=$rekomendasi->koordinat_geografis;?></td>
						<td><?=$rekomendasi->luas_tanah;?></td>
						<td><?=$rekomendasi->penggunaan_tanah;?></td>
						<td><?=$rekomendasi->rencana_teknis;?></td>
						<td><?=$rekomendasi->status_tanah;?></td>
						<td><?=$rekomendasi->dinyatakan;?></td>
						<td><?=$rekomendasi->koordinat_geografis2;?></td>
						<td><?=$rekomendasi->luas_tanah_disetujui;?></td>
						<td><?=$rekomendasi->jenis_peruntukan;?></td>
						<td><?=$rekomendasi->kode_kbli2;?></td>
						<td><?=$rekomendasi->judul_kbli2;?></td>
						<td><?=$rekomendasi->kdb;?></td>
						<td><?=$rekomendasi->ketinggian_bangunan;?></td>
						<td><?=$rekomendasi->indikasi_program;?></td>
						<td><?=$rekomendasi->garis_sempadan;?></td>
						<td><?=$rekomendasi->jarak_bebas;?></td>
						<td><?=$rekomendasi->KDH;?></td>
						<td><?=$rekomendasi->koefisien_tapak;?></td>
						<td><?=$rekomendasi->jaringan_utilitas;?></td>
						
                    	<td data-label="Opsi">
							<a href="<?=base_url('pemanfaatan/edit_rekomendasi_pemanfaatan?id_permohonan='.$rekomendasi->id_permohonan);?>" class="btn btn-xs btn-icon edit" 
							data-toggle="tooltip" data-original-title="edit">
							<i class="fas fa-edit"></i>
							</a>			
						
							<a href="<?=base_url('pemanfaatan/hapus_rekomendasi_pemanfaatan?id_permohonan='.$rekomendasi->id_permohonan);?>" class="btn btn-xs btn-icon delete" 
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
