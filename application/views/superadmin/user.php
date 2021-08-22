<?php include "Header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar User</h1>


    <!-- DataTales Example -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" id="judulBtn">
            <a href="<?php echo base_url(); ?>superadmin/user/create" class="btn btn-light shadow-sm"><i class="fas fa-plus"></i>Tambah Data User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Hak Akses</th>
                        <th>Create At</th>
                        <th>Updated At</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($join as $row) {
                    ?>
                        <tr>
                            <td widtd="5%"><?php echo $no++; ?></td>
                            <td><?php echo $row->fullname ?></td>
                            <td><?php echo $row->email ?></td>
                            <td><?php echo $row->user_level ?></td>
                            <td><?php echo $row->created_at ?></td>
                            <td><?php echo $row->updated_at ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>superadmin/user/edit/<?php echo $row->id; ?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url(); ?>superadmin/user/delete/<?php echo $row->id; ?>" class="btn btn-danger">Hapus</a>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
<?php include "Footer.php" ?>
</body>

</html>