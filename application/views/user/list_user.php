<!-- Users List Table -->
<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title">List 
            User</h5>
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
                    <th>Nama Lengkap</th>
                    <!-- <th>Jenis Kelamin</th> -->
                    <!-- <th>Tanggal Lahir</th> -->
                    <!-- <th>Alamat</th> -->
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Role</th>
                    <!-- <th>Tanggal Masuk</th>
                    <th>Modified Terakhir</th> -->
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
						foreach ($user_list->result() as $users) { 
							$url_anggota = 'user/updatestatus?role=anggota&id='.$users->id;
							$url_superadmin = 'user/updatestatus?role=superadmin&id='.$users->id;
							$url_perencanaan = 'user/updatestatus?role=perencanaan&id='.$users->id;
                            $url_pemanfaatan = 'user/updatestatus?role=pemanfaatan&id='.$users->id;
                            $url_pengendalian = 'user/updatestatus?role=pengendalian&id='.$users->id;
                            $url_guest = 'user/updatestatus?role=guest&id='.$users->id;
					?>
                    <tr>
                        <td><?= $users->name; ?></td>
                        <td><?= $users->email; ?></td>
                        <td><?php echo form_open('user/update_telepon/' . $users->id); ?>
                        <div class="form-group">
                        <input type="text" name="telepon" class="form-control" value="<?php echo $users->telepon; ?>">
                        <?php echo form_error('telepon'); ?>
                        </div>
                        <button type="submit" class="bx bx-check bx-sm"></button>

                        <?php echo form_close(); ?>
                        </td>
                        <td>
                        <?php echo form_open('user/update_user_role/' . $users->id); ?>
                            <?php
                                $options = array(
                                    'superadmin' => 'Superadmin',
                                    'perencanaan' => 'Perencanaan',
                                    'pemanfaatan' => 'Pemanfaatan',
                                    'pengendalian' => 'Pengendalian',
                                    'guest' => 'Guest',
                                    'anggota' => 'Anggota'
                                );
                                echo form_dropdown('role', $options, $users->role, array('class' => 'form-control'));
                            ?>
                            <?php echo form_error('role'); ?>
                        </div>

                        <button type="submit" class="bx bx-check bx-sm"></button>

                        <?php echo form_close(); ?>



                        <!-- <td><?= $users->created; ?></td>
                        <td><?= $users->modified; ?></td> -->
                        <!-- <?= ucwords(str_replace("_", "-", $users->role)); ?> -->
                        <td data-label="Opsi">

                            <a href="<?= base_url('user/hapus?uid=' . $users->uid); ?>" class="btn btn-xs btn-icon delete" data-toggle="hapus" data-original-title="hapus">
                                <i class="fas fa-trash "></i>
                            </a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>