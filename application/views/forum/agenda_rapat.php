<!-- Users List Table -->
<!-- <div class="card">
	<div class="card-header border-bottom">
		<h5 class="card-title">Agenda Rapat FPR</h5>
		<div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
			<div class="col-md-4 user_role"></div>
			<div class="col-md-4 user_plan"></div>
			<div class="col-md-4 user_status"></div>
		</div>
	</div>
	<div class="card-datatable table-responsive">
		<table class="datatables-users table border-top">
			<thead>
				<tr>
					<th>Seksi / SUB KOORDINATOR SUB-SUBSTANSI</th>
					<th>Agenda Rapat</th>
					<th>Tanggal Rapat</th>
					<th>Materi Rapat</th>
					<th>Undangan Rapat</th>
					<th>Link Rapat</th>
				</tr>
			</thead>
			<tbody>
					<?php foreach ($pr_agenda->result() as $pragenda) { ?>
					<tr>
						<td><?=$pragenda->bidang;?></td>
						<td><?=$pragenda->judul_kegiatan;?></td>
						<td><?=$pragenda->tanggal_kegiatan;?></td>
						                      
					</tr>
					<?php } ?>
					
					<?php foreach ($pm_agenda->result() as $pmagenda) { ?>
					<tr>
						<td><?=$pmagenda->bidang;?></td>
						<td><?=$pmagenda->nama_kegiatan;?></td>
						<td><?=$pmagenda->tanggal_kegiatan;?></td>
						                      
					</tr>
					<?php } ?>

					<?php foreach ($pg_agenda->result() as $pgagenda) { ?>
					<tr>
						<td><?=$pgagenda->bidang;?></td>
						<td><?=$pgagenda->nama_kegiatan;?></td>
						<td><?=$pgagenda->tanggal_kegiatan;?></td>
                           
					</tr>

					<?php } ?>
				</tbody>
		</table>
	</div>
	
</div> -->