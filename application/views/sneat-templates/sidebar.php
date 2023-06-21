<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


	<div class="app-brand demo ">
		<img height="40" src="<?=$this->config->item('img').'/illustrations/e-mudharabah.png';?>" alt="not load">
		<a href="<?=base_url('dashboard')?>" class="app-brand-link">		
			
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>



	<ul class="menu-inner py-1">
		<!-- Forum -->
		<?php if($users['role'] == 'superadmin' || $users['role'] == 'perencanaan' || $users['role'] == 'pemanfaatan' || $users['role'] == 'pengendalian' || $users['role'] == 'anggota'): ?>
		<li class="menu-item <?php if($title == 'agenda' || $title == 'pengajuan' || $title == 'informasi' ) echo 'active open';?>" >
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-support"></i>
				<div data-i18n="PEMODAL">PEMODAL</div>
			</a>
			<ul class="menu-sub">
			<?php if($users['role'] == 'superadmin' || $users['role'] == 'perencanaan' || $users['role'] == 'pemanfaatan' || $users['role'] == 'pengendalian' || $users['role'] == 'anggota'): ?>
				<li class="menu-item <?php if($title == 'agenda') echo 'active';?>">
					<a href="<?=base_url('forum/agenda_rapat')?>" class="menu-link">
						<div data-i18n="Ajukan Pemodalan">Ajukan Pemodalan</div>
					</a>
				</li>
				<?php endif; ?>
			</ul>

			<ul class="menu-sub">
			<?php if($users['role'] == 'superadmin'): ?>
				<li class="menu-item <?php if($title == 'pengajuan') echo 'active';?>">
					<a href="<?=base_url('forum/pengajuan_rapat')?>" class="menu-link">
						<div data-i18n="Status Pemodalan">Status Pemodalan</div>
					</a>
				</li>
				<?php endif; ?>
			</ul>
			
			<ul class="menu-sub">
			<?php if($users['role'] == 'superadmin' || $users['role'] == 'perencanaan' || $users['role'] == 'pemanfaatan' || $users['role'] == 'pengendalian' || $users['role'] == 'anggota'): ?>				<li class="menu-item <?php if($title == 'informasi') echo 'active';?>">
				<a href="<?=base_url('forum/informasi')?>" class="menu-link">
						<div data-i18n="Riwayat Mutasi Pencairan">Riwayat Mutasi Pencairan</div>
					</a>
				</li>
				<?php endif; ?>
			</ul>
			<ul class="menu-sub">
			<?php if($users['role'] == 'superadmin' || $users['role'] == 'perencanaan' || $users['role'] == 'pemanfaatan' || $users['role'] == 'pengendalian' || $users['role'] == 'anggota'): ?>				<li class="menu-item <?php if($title == 'informasi') echo 'active';?>">
				<a href="<?=base_url('forum/informasi')?>" class="menu-link">
						<div data-i18n="Mitra UMKM">Mitra UMKM</div>
					</a>
				</li>
				<?php endif; ?>
			</ul>
		</li>
		<?php endif; ?>

		<?php if($users['role'] == 'superadmin' || $users['role'] == 'perencanaan' || $users['role'] == 'pemanfaatan' || $users['role'] == 'pengendalian'|| $users['role'] == 'drivemain'): ?>
		<!-- Bidang -->
		<li class="menu-item <?php if($title == 'perencanaan' || $title == 'pemanfaatan' || $title == 'pengendalian' || $title == 'drivemain') echo 'active open';?>">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="UMKM">UMKM</div>
			</a>
			<ul class="menu-sub">
				<?php if($users['role'] == 'superadmin' || $users['role'] == 'perencanaan'): ?>
				<li class="menu-item <?php if($title == 'perencanaan') echo 'active';?>">
					<a href="<?=base_url('perencanaan')?>" class="menu-link">
						<div data-i18n="Ajukan Bisnis UMKM">Ajukan Bisnis UMKM</div>
					</a>
				</li>
				<?php endif; ?>
				<?php if($users['role'] == 'superadmin' || $users['role'] == 'pemanfaatan'): ?>
				<li class="menu-item <?php if($title == 'pemanfaatan') echo 'active';?>">
					<a href="<?=base_url('pemanfaatan')?>" class="menu-link">
						<div data-i18n="Status Pemodalan">Status Pemodalan</div>
					</a>
				</li>
				<?php endif; ?>
				<?php if($users['role'] == 'superadmin' || $users['role'] == 'pengendalian'): ?>
				<li class="menu-item <?php if($title == 'pengendalian') echo 'active';?>">
					<a href="<?=base_url('pengendalian')?>" class="menu-link">
						<div data-i18n="Riwayat Mutasi Penerimaan Dana">Riwayat Mutasi Penerimaan Dana</div>
					</a>
				</li>
				<?php endif; ?>
				<?php if($users['role'] == 'superadmin' || $users['role'] == 'drivemain'): ?>
				<li class="menu-item <?php if($title == 'drivemain') echo 'active';?>">
					<a href="<?=base_url('drivemain')?>" class="menu-link">
						<div data-i18n="Kemajuan Usaha UMKM">Kemajuan Usaha UMKM</div>
					</a>
				</li>
				<?php endif; ?>
			</ul>
		</li>

		<?php endif; ?>
		<?php if($users['role'] == 'superadmin'): ?>
		<li class="menu-item <?php if($title == 'user' || $title == 'tambah_user') echo 'active open';?>">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-user"></i>
				<div data-i18n="KONSULTAN">User</div>
			</a>
			<ul class="menu-sub">
			<?php if($users['role'] == 'superadmin'): ?>
				<li class="menu-item <?php if($title == 'user') echo 'active';?>">
					<a href="<?=base_url('user')?>" class="menu-link">
						<div data-i18n="Analisis Pengajuan UMKM">Analisis Pengajuan UMKM</div>
					</a>
				</li>
				<?php endif; ?>
				<?php if($users['role'] == 'superadmin'): ?>
				<li class="menu-item <?php if($title == 'user') echo 'active';?>">
					<a href="<?=base_url('user')?>" class="menu-link">
						<div data-i18n="Analisis Pengajuan Pemodalan">Analisis Pengajuan Pemodalan</div>
					</a>
				</li>
				<?php endif; ?>
				<?php if($users['role'] == 'superadmin'): ?>
				<li class="menu-item <?php if($title == 'user') echo 'active';?>">
					<a href="<?=base_url('user')?>" class="menu-link">
						<div data-i18n="Hasil Analisis">Hasil Analisis</div>
					</a>
				</li>
				<?php endif; ?>
				<!-- <li class="menu-item <?php if($title == 'tambah_user') echo 'active';?>">
					<a href="<?=base_url('user/tambah_user')?>" class="menu-link">
						<div data-i18n="Tambah User">Tambah User</div>
					</a>
				</li> -->
			</ul>
		</li>
		<?php endif; ?>


		<!-- Apps & Pages -->
		<!-- <li class="menu-header small text-uppercase">
			<span class="menu-header-text">Apps &amp; Pagess</span>
		</li>
		<li class="menu-item">
			<a href="app-calendar.html" class="menu-link">
				<i class="menu-icon tf-icons bx bx-calendar"></i>
				<div data-i18n="Calendar">Calendar</div>
			</a>
		</li> -->

		<!-- Roles and Permission -->
		<!-- <li class="menu-item">
			<a href="javascript:void(0);" class="menu-link menu-toggle">
				<i class='menu-icon tf-icons bx bx-check-shield'></i>
				<div data-i18n="Roles & Permissions">Roles & Permissions</div>
			</a>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="app-access-roles.html" class="menu-link">
						<div data-i18n="Super Admin">Super Admin</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="" class="menu-link">
						<div data-i18n="Perencanaan">Perencanaan</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="" class="menu-link">
						<div data-i18n="Pemanfaatan">Pemanfaatan</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="" class="menu-link">
						<div data-i18n="Pengendalian">Pengendalian</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="" class="menu-link">
						<div data-i18n="Angota Forum">Angota Forum</div>
					</a>
				</li>
			</ul>
		</li> -->

		<!-- Charts & Maps -->
		
		<li class="menu-item">
			<a href="https://data.diskopukm.jatimprov.go.id/satu_data/" class="menu-link">
				<i class="menu-icon tf-icons bx bx-map-alt"></i>
				<div data-i18n="UMKM JAWA TIMUR">UMKM JAWA TIMUR</div>
			</a>
		</li>
	</ul>



</aside>
<!-- / Menu -->