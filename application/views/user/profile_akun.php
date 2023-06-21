<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="user-profile-header-banner">
        <!-- <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top"> -->
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n0 mx-sm-0 mx-auto">
          <img src="<?= $users['picture'];?>" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4><?php echo $users['name'];?></h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                <li class="list-inline-item fw-semibold">
                  <i class='bx bx-pen'></i>Terakhir Diubah : <?= $users['Modified']=date("Y-m-d H:i:s")?>
                </li>
                <li class="list-inline-item fw-semibold">
                  <i class='bx bx-calendar-alt'></i>Bergabung pada tanggal : <?= $users['created']=date("d-m-Y")?>
                </li>
              </ul>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
              <i class='bx bx-user-check'></i> <?php echo $users['role'];?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<?php if($users['role'] == 'superadmin' || $users['role'] == 'perencanaan' || $users['role'] == 'pemanfaatan' || $users['role'] == 'pengendalian' || $users['role'] == 'anggota'): ?>
<div class="row">
  <div class="col-md-12">
  <div class="user-profile-info">
              <h4>AGENDA</h4>
            </div>

    <br>
      <div class="card-datatable table-responsive">
		<table class="datatables-users table border-top">
			<thead>
				<tr>
					<th>Bidang</th>
					<th>Judul</th>
					<th>Tanggal Rapat</th>
					<th>LinkRapat</th>
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
    </ul>
  </div>
</div>
<?php endif; ?>