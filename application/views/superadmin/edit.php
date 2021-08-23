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
                    <?php echo validation_errors(); ?>
                </div>
            <?php
            }
            ?>
            <form method="post" action="<?php echo base_url(); ?>superadmin/user/update">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $users->fullname; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $users->email; ?>">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $users->password; ?>">
                </div>

                <div class="form-group">
                    <label for="user_level">Hak Akses</label>
                    <select name="user_level" id="user_level" class="form-control">
                        <?php if ($users->user_level == '1') { ?>
                            <option value="1" selected>Superadmin</option>
                            <option value="2">Admin</option>
                            <option value="3">User</option>
                        <?php } elseif ($users->user_level == '2') { ?>
                            <option value="1">Superadmin</option>
                            <option value="2" selected>Admin</option>
                            <option value="3">User</option>
                        <?php } elseif ($users->user_level == '3') { ?>
                            <option value="1">Superadmin</option>
                            <option value="2">Admin</option>
                            <option value="3" selected>User</option>
                        <?php } else { ?>
                            <option value="1">Superadmin</option>
                            <option value="2">Admin</option>
                            <option value="3">User</option>
                        <?php } ?>


                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<?php include "Footer.php" ?>