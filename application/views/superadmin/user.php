<?php include "Header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar User</h1>


    <!-- DataTales Example -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" id="judulBtn">
            <a href="<?= base_url(); ?>superadmin/user/create" class="btn btn-light shadow-sm"><i class="fas fa-plus"></i> Tambah Data User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>OPD</th>
                            <th>Hak Akses</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th width="5%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>OPD</th>
                            <th>Hak Akses</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($join as $row) {
                        ?>
                            <tr>
                                <td widtd="5%"><?= $no++; ?></td>
                                <td><?= $row->fullname ?></td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->jabatan ?></td>
                                <td><?= $row->opd ?></td>
                                <td><?= $row->user_level ?></td>
                                <td><?= $row->created_at ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>superadmin/user/edit/<?= $row->id; ?>" title="Edit Data" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="hapus(<?= $row->id; ?>);" title="Hapus Data" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>



                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
<?php include "Footer.php" ?>
<script type="text/javascript">
    var url = "<?= base_url(); ?>";

    function hapus(id) {
        var r = confirm("Apakah Anda yakin menghapus data ini?")
        if (r == true)
            window.location = url + "superadmin/user/delete/" + id;
        else
            return false;
    }
</script>

</body>

</html>