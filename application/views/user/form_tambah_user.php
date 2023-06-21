<!-- Basic Layout -->
<!-- form tambah user dan form edit user -->
<div class="row">
<div class="col-md-8 col-12 mx-auto">
<?php echo validation_errors(); ?>
<?php
// if ($title == "tambah_user"){$url = "user/tambah-user"; $page_title = "Tambah User"; }
if ($title == "edit_user") { $url = "user/edit-user"; $page_title = "Edit User";}
// echo form_open($url, "id='data-form' ");
?>
<div class="card mb-4">
<div class="card-header d-flex justify-content-between align-items-center">
<h5 class="mb-0"><?=$page_title?></h5>
<small class="text-muted float-end">input</small>
</div>
<div class="card-body">
<form action="<?=base_url($url);?>" method='post'>
<input type="hidden" name="id" value="<?=isset($edit["id"]) ? set_value("id", $edit["id"]): set_value("id"); ?>">

<!-- name -->
<!-- <div class="mb-3">
<label class="form-label">name</label>
<div class="col-md-12 col-12">
<input name="name" type="text" class="form-control mb-1" placeholder="name"
value="<?=isset($edit["name"]) ? set_value("name", $edit["name"]): set_value("name"); ?>">
</div>
</div> -->

<!-- nama lengkap -->
<!-- <div class="mb-3">
<label class="form-label">Nama Lengkap</label>
<div class="input-group input-group-merge">
<span id="basic-icon-default-fullname2" class="input-group-text"><i
class="bx bx-user"></i></span>
<input name="nama_lengkap" type="text" class="form-control" id="basic-icon-default-fullname"
placeholder="Isikan Nama" aria-label="Isikan Nama"
aria-describedby="basic-icon-default-fullname2"
value="<?=isset($edit["nama_lengkap"]) ? set_value("nama_lengkap", $edit["nama_lengkap"]): set_value("nama_lengkap"); ?>"
/>
</div>
</div> -->

<!-- Jenis Kelamin
<div class="mb-3">
<div class="d-block">
<label class="form-label">Jenis Kelamin</label>
</div>

<div class="form-check form-check-inline mt-3">
<input class="form-check-input" type="radio" name="jenis_kelamin"
id="lakilaki"
value="laki_laki" <?=isset($edit["jenis_kelamin"]) && $edit["jenis_kelamin"] == "laki_laki" ? "checked" : "checked" ?> />
<label class="form-check-label" for="lakilaki">Laki-Laki</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="jenis_kelamin"
id="perempuan"
value="perempuan" <?=isset($edit["jenis_kelamin"]) && $edit["jenis_kelamin"] == "perempuan" ? "checked" : "" ?> />
<label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="jenis_kelamin"
id="lainnya"
value="lainnya"
<?=isset($edit["jenis_kelamin"]) && $edit["jenis_kelamin"] == "lainnya" ? "checked" : "" ?> />
<label class="form-check-label" for="lainnya">Lainnya</label>
</div>
</div> -->

<!-- Email
<div class="mb-3">
<label class="form-label">Email</label>
<div class="col-md-12 col-12">
<input name="email" type="text" class="form-control mb-1" placeholder="Email" />
value="<?= set_value("email", set_value("email")) ?>"/>

</div>
</div> -->

<!-- Telefon -->
<div class="mb-3">
<label class="form-label">Telepon</label>
<div class="col-md-12 col-12">
<input name="telepon" type="tel" class="form-control mb-1" placeholder="Telefon" value="<?=isset($edit["telepon"]) ? set_value("telepon", $edit["telepon"]): set_value("telepon"); ?>"/>
</div>
</div>

<!-- tanggal Lahir
<div class="mb-3">
<label class="form-label">Tanggal Lahir</label>
<div class="col-md-12 col-12">
<input name="tanggal_lahir" type="text" class="form-control mb-1" placeholder="YYYY-MM-DD" id="flatpickr-inline" value="<?=isset($edit["tanggal_lahir"]) ? set_value("tanggal_lahir", $edit["tanggal_lahir"]): set_value("tanggal_lahir"); ?>"/>
</div>
</div> -->

<!-- Password
<div class="mb-3">
<label class="form-label">Password</label>
<div class="col-md-12 col-12">
<input type="password" name="password" class="form-control mb-1" placeholder="Password"/>
</div>
</div> -->

<!-- Alamat
<div class="mb-3">
<label class="form-label">Alamat</label>
<div class="col-md-12 col-12">
<textarea class="form-control mb-1" rows="3" name="alamat" placeholder="Alamat"><?=isset($edit["alamat"]) ? $edit["alamat"] : "" ?></textarea>
</div>
</div> -->

<!-- Role n -->
<!-- <div class="mb-3">
<label for="selectpickerBasic" class="form-label">Role</label>
<select name="role" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
<option value="superadmin" <?=isset($edit["role"]) && $edit["role"] == "0" ? "selected" : "" ?> >Superadmin</option>
<option value="perencanaan" <?=isset($edit["role"]) && $edit["role"] == "1" ? "selected" : "" ?> >Perencanaan</option>
<option value="pemanfaatan" <?=isset($edit["role"]) && $edit["role"] == "3" ? "selected" : "" ?> >Pemanfaatan</option>
<option value="pengendalian" <?=isset($edit["role"]) && $edit["role"] == "4" ? "selected" : "" ?> >Pengendalian</option>
<option value="anggota" <?=isset($edit["role"]) && $edit["role"] == "5" ? "selected" : "" ?>>Anggota</option>
</select>
</div> -->
<div class="mb-3">
<div class="d-block">
<label class="form-label">Role</label>
</div>

<div class="form-check form-check-inline mt-3">
<input class="form-check-input" type="radio" name="role"
id="anggota"
value="anggota" <?=isset($edit["role"]) && $edit["role"] == "role" ? "checked" : "checked" ?> />
<label class="form-check-label" for="anggota">Anggota</label>
</div>
<div class="form-check form-check-inline mt-3">
<input class="form-check-input" type="radio" name="role"
id="superadmin"
value="superadmin" <?=isset($edit["role"]) && $edit["role"] == "role" ? "checked" : "checked" ?> />
<label class="form-check-label" for="superadmin">Superadmin</label>
</div>
<div class="form-check form-check-inline mt-3">
<input class="form-check-input" type="radio" name="role"
id="pemanfaatan"
value="pemanfaatan" <?=isset($edit["role"]) && $edit["role"] == "role" ? "checked" : "checked" ?> />
<label class="form-check-label" for="pemanfaatan">Pemanfaatan</label>
</div>
<div class="form-check form-check-inline mt-3">
<input class="form-check-input" type="radio" name="role"
id="pengendalian"
value="pengendalian" <?=isset($edit["role"]) && $edit["role"] == "role" ? "checked" : "checked" ?> />
<label class="form-check-label" for="pengendalian">Pengendalian</label>
</div>
<div class="form-check form-check-inline mt-3">
<input class="form-check-input" type="radio" name="role"
id="perencanaan"
value="perencanaan" <?=isset($edit["role"]) && $edit["role"] == "role" ? "checked" : "checked" ?> />
<label class="form-check-label" for="perencanaan">Perencanaan</label>
</div>
</div>

<input name="submit" type="submit" class="btn btn-primary" value="Simpan">
</form>

</div>
</div>
</div>
</div>

<!-- input, select, textarea -->