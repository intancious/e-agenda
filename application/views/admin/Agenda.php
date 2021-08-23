<?php include "Header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Agenda</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-light shadow-sm" onclick="reload_table()"><i class="fas fa-sync"></i> Refresh</button>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="mytable" class="table table-bordered nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Agenda</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Pembuat Agenda</th>
                            <th>Status</th>
                            <th>Verifikasi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Agenda</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Pembuat Agenda</th>
                            <th>Status</th>
                            <th>Verifikasi</th>
                        </tr>
                    </tfoot>
                    <tbody>

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
    var save_method; //for save method string
    var table;

    $(document).ready(function() {

        $("#btnBatal").click(function() {
            $('#form-data').slideUp(500);
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
            $('#judulBtn').html('<button class="btn btn-light shadow-sm" onclick="add_agenda()"><i class="fas fa-plus"></i> Tambah Agenda</button>');

        });

        //datatables
        table = $('#mytable').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('admin/agenda/ajax_list') ?>",
                "type": "POST"
            },

            "language": {
                "infoFiltered": ""
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                    "targets": [0], //first column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [2], //second column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [3], //second column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [-2], //scnd last column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [-3], //thrd last column
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [-4], //thrd last column
                    "orderable": false, //set not orderable
                }
            ],

        });

        //set input/textarea/select event when change value, remove class error and remove text help block 
        $("input").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("select").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

    });


    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }
</script>

</body>

</html>