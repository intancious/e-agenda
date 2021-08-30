<?php include "Header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">Tambah Data User</div>
        <div class="card-body">
            <?php
            if (validation_errors() != false) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php
            }
            ?>
            <form method="post" action="<?php echo base_url(); ?>superadmin/user/save">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" <?php set_value('fullname') ?> autofocus tabindex="1">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" tabindex="2">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" tabindex="3">
                </div>

                <div class="form-group">
                    <label for="user_level">Hak Akses</label>
                    <select name="user_level" id="user_level" class="form-control" tabindex="4">
                        <option value="1">Superadmin</option>
                        <option value="2">Admin</option>
                        <option value="3">User</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" tabindex="5">Simpan</button>
                <a href="<?= base_url("superadmin/user"); ?>" class="btn btn-secondary" tabindex="6">Kembali</a>
            </form>
        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
<?php include "Footer.php" ?>
</body>

</html>