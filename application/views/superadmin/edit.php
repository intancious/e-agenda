<?php include "Header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="card">
		<div class="card-header">Edit User</div>
		<div class="card-body">
			<?php //die(var_export($users));
			if (validation_errors() != false) {
			?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
				</div>
			<?php
			}
			?>
			<form method="post" action="<?= base_url(); ?>superadmin/user/update">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="fullname" name="fullname" value="<?= $users->fullname; ?>" tabindex="1" autofocus>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" value="<?= $users->email; ?>" tabindex="2">
				</div>
				<div class="form-group">
					<label for="jabatan">Jabatan</label>
					<input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $users->jabatan; ?>" tabindex="3">
				</div>
				<div class="form-group">
					<label for="opd">OPD</label>
					<input type="text" class="form-control" id="opd" name="opd" value="<?= $users->opd; ?>" tabindex="4">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="passwordbaru" name="passwordbaru" tabindex="5">
					<input type="text" class="form-control" id="passwordlama" name="passwordlama" value="<?= $users->password; ?>">
				</div>

				<div class="form-group">
					<label for="user_level">Hak Akses</label>
					<select name="user_level" id="user_level" class="form-control" tabindex="6">
						<option <?= ($users->user_level_id === "1") ? "selected" : ""; ?> value="1" selected>Superadmin</option>
						<option <?= ($users->user_level_id === "2") ? "selected" : ""; ?> value="2">Admin</option>
						<option <?= ($users->user_level_id === "3") ? "selected" : ""; ?> value="3">User</option>
					</select>
				</div>
				<input type="hidden" name="id" value="<?= $users->id; ?>">
				<button type="submit" class="btn btn-primary" tabindex="7">Update</button>
				<a href="<?= base_url("superadmin/user"); ?>" class="btn btn-secondary" tabindex="8">Kembali</a>
			</form>
		</div>
	</div>
</div>
<?php include "Footer.php" ?>
