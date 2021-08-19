<?php include "Header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar User</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" id="judulBtn">
            <button class="btn btn-light shadow-sm" onclick="add_user()"><i class="fas fa-plus"></i> Tambah User</button>
        </div>
        <div class="card-body" id="form-data" style="display:none;">
            <form action="#" id="form" class="form-horizontal">
                <input type="hidden" value="" name="id_user" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input class="form-control" type="text" name="fullname" id="fullname" tabindex="1">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email" id="email" tabindex="2">
                                    <span class="help-block" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hak Akses</label>
                                    <input class="form-control" type="text" name="user_level" id="user_level" tabindex="3">
                                    <span class="help-block" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Created At</label>
                                    <input class="form-control" type="text" name="created_at" id="created_at" tabindex="3">
                                    <span class="help-block" style="color: red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Updated At</label>
                                    <input class="form-control" type="text" name="updated_at" id="updated_at" tabindex="3">
                                    <span class="help-block" style="color: red;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btnSave" onclick="save()">Simpan</button>
                        <button type="button" name="btnBatal" id="btnBatal" class="btn btn-secondary">Tutup</button>
                    </div>
            </form>
        </div>

    </div>
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
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Hak Akses</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
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
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
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
                "url": "<?php echo site_url('superadmin/agenda/ajax_list') ?>",
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
                    "targets": [4], //fifth column
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



    function add_agenda() {
        save_method = 'add';
        $('#form-data').slideToggle(500);
        $('#form')[0].reset(); // reset form on modals
        document.getElementById("nama_kegiatan").focus();
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#file-previewsa').hide();
        $('#file-previewsu').hide();
        $('#file-previewpe').hide();
    }

    function edit_agenda(id) {
        save_method = 'update';
        $('#form-data').slideToggle(500);
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#judulBtn').html('<button class="btn btn-light shadow-sm"><i class="fas fa-edit"></i> Edit Agenda</button>');

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('superadmin/agenda/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id_agenda"]').val(data.id_agenda);
                $('[name="nama_kegiatan"]').val(data.nama_kegiatan);
                $('[name="kategori"]').val(data.kategori);
                $('[name="penyelenggara"]').val(data.penyelenggara);
                $('[name="agenda"]').val(data.agenda);
                $('[name="sub_agenda"]').val(data.sub_agenda);
                $('[name="tanggal"]').val(data.tanggal);
                $('[name="pukul"]').val(data.pukul);
                $('[name="tempat"]').val(data.tempat);
                $('[name="pakaian"]').val(data.pakaian);
                $('[name="undangan"]').val(data.undangan);
                $('[name="peran_pimpinan"]').val(data.peran_pimpinan);
                $('[name="urutan_acara"]').val(data.urutan_acara);
                $('[name="tata_ruangan"]').val(data.tata_ruangan);
                $('[name="pihak_terkait"]').val(data.pihak_terkait);
                $('[name="petugas_protokol"]').val(data.petugas_protokol);
                $('[name="catatan"]').val(data.catatan);

                if (data.status_verifikasi == 1) {

                    if (data.sambutan) {
                        $('#file-previewsa').show();
                        $('#label-filesa').text('Perbarui File Sambutan');
                        $('#lihatsa').html('<a href="<?= base_url(); ?>uploads/files/' + data.sambutan + '" target="_blank"> ' + data.sambutan + '</a>');

                    } else {

                        $('#label-filesa').text('Upload File Sambutan');
                        $('#lihatsa').text('(Tidak ada sambutan)');
                    }

                    if (data.surat) {
                        $('#file-previewsu').show();
                        $('#label-filesu').text('Perbarui File Surat');
                        $('#lihatsu').html('<a href="<?= base_url(); ?>uploads/files/' + data.surat + '" target="_blank"> ' + data.surat + '</a>');

                    } else {

                        $('#label-filesu').text('Upload File Surat');
                        $('#lihatsu').text('(Tidak ada surat)');
                    }

                    if (data.user_id) {
                        $('#file-previewpe').show();
                        $('#lihatpe').html('<p> ' + data.user_id + '</p>');

                    } else {
                        $('#lihatpe').text('(Tidak ditemukan)');
                    }

                } else {
                    $('#file-previewsa').hide();
                    $('#file-previewsu').hide();
                    if (data.user_id) {
                        $('#file-previewpe').show();
                        $('#lihatpe').html('<p> ' + data.user_id + '</p>');

                    } else {
                        $('#lihatpe').text('(Tidak ditemukan)');
                    }
                }



            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }

    function save() {
        $('#btnSave').text('Proses...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('superadmin/agenda/ajax_add') ?>";
        } else if (save_method == 'update') {
            url = "<?php echo site_url('superadmin/agenda/ajax_update') ?>";
        }

        // ajax adding data to database
        var formData = new FormData($('#form')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            // beforeSend: () => {
            //     Swal.fire({
            //         html: 'Proses',
            //         onBeforeOpen: () => {
            //             Swal.showLoading()
            //         },
            //         allowOutsideClick: () => !Swal.isLoading()
            //     });
            // },
            success: function(data) {

                if (data.status) //if success close modal and reload ajax table
                {
                    // $('#modal_form').modal('hide');
                    $('#form-data').slideUp(500);
                    $('html, body').animate({
                        scrollTop: 0
                    }, 'slow');
                    $('#judulBtn').html('<button class="btn btn-light shadow-sm" onclick="add_agenda()"><i class="fas fa-plus"></i> Tambah Agenda</button>');
                    reload_table();
                    Toast.fire({
                        type: 'success',
                        title: 'Data berhasil disimpan'
                    });
                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 

            }
        });
    }

    function edit_status(id) {
        save_method = 'upstatus';
        $('#form_up')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('superadmin/agenda/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id_agenda"]').val(data.id_agenda);
                $('[name="status_agenda"]').val(data.status_agenda);
                $('#modal_form_up').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Status Agenda'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function verif_agenda(id) {
        save_method = 'verif';
        $('#form_verif')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('superadmin/agenda/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id_agenda"]').val(data.id_agenda);
                $('[name="status_verifikasi"]').val(data.status_verifikasi);
                $('#modal_form_verif').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Verifikasi Agenda'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function up_status() {
        $('#btnUp').text('Proses...'); //change button text
        $('#btnUp').attr('disabled', true); //set button disable 
        var url;

        if (save_method == 'upstatus') {
            url = "<?php echo site_url('superadmin/agenda/ajax_upstatus') ?>";
        }

        // ajax adding data to database
        var formData = new FormData($('#form_up')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            // beforeSend: () => {
            //     Swal.fire({
            //         html: 'Proses',
            //         onBeforeOpen: () => {
            //             Swal.showLoading()
            //         },
            //         allowOutsideClick: () => !Swal.isLoading()
            //     });
            // },
            success: function(data) {

                if (data.status) //if success close modal and reload ajax table
                {

                    $('#modal_form_up').modal('hide');
                    reload_table();
                    Toast.fire({
                        type: 'success',
                        title: 'Status agenda berhasil diubah'
                    });

                    // $.toast({
                    //     heading: 'Sukses',
                    //     text: "Status agenda berhasil diubah",
                    //     showHideTransition: 'fade',
                    //     icon: 'success',
                    //     hideAfter: 3000,
                    //     position: 'top-right',
                    //     bgColor: '#1cc88a',
                    //     loader: true, // Change it to false to disable loader
                    //     loaderBg: '#3CB371'
                    // });

                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnUp').text('Simpan'); //change button text
                $('#btnUp').attr('disabled', false); //set button enable 


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnUp').text('Simpan'); //change button text
                $('#btnUp').attr('disabled', false); //set button enable 

            }
        });
    }

    function verifikasi() {
        $('#btnVerif').text('Proses...'); //change button text
        $('#btnVerif').attr('disabled', true); //set button disable 
        var url;

        if (save_method == 'verif') {
            url = "<?php echo site_url('superadmin/agenda/ajax_verif') ?>";
        }

        // ajax adding data to database
        var formData = new FormData($('#form_verif')[0]);
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            // beforeSend: () => {
            //     Swal.fire({
            //         html: 'Proses',
            //         onBeforeOpen: () => {
            //             Swal.showLoading()
            //         },
            //         allowOutsideClick: () => !Swal.isLoading()
            //     });
            // },
            success: function(data) {

                if (data.status) //if success close modal and reload ajax table
                {
                    $('#modal_form_verif').modal('hide');
                    reload_table();
                    Toast.fire({
                        type: 'success',
                        title: 'Status verifikasi berhasil diubah'
                    });

                } else {
                    for (var i = 0; i < data.inputerror.length; i++) {
                        $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnVerif').text('Simpan'); //change button text
                $('#btnVerif').attr('disabled', false); //set button enable 


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnVerif').text('Simpan'); //change button text
                $('#btnVerif').attr('disabled', false); //set button enable 

            }
        });
    }

    function hapus_agenda(id) {
        if (confirm('Apakah Anda yakin menghapus data ini?')) {
            // ajax delete data to database
            $.ajax({
                url: "<?php echo site_url('superadmin/agenda/ajax_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    //if success reload ajax table
                    $('#modal_form').modal('hide');
                    reload_table();
                    Toast.fire({
                        type: 'success',
                        title: 'Data berhasil dihapus'
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });

        }
    }
</script>


<div class="modal fade" id="modal_form_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Status Agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="form_up" class="form-horizontal">
                <input type="hidden" value="" name="id_agenda" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="status_agenda" id="status_agenda" class="form-control">
                                    <option value="1">Selesai</option>
                                    <option value="2">Ditunda</option>
                                    <option value="3">Belum Berjalan</option>
                                    <option value="4">Sedang Berlangsung</option>
                                </select>
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnUp" onclick="up_status()">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_form_verif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Verifikasi Agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" id="form_verif" class="form-horizontal">
                <input type="hidden" value="" name="id_agenda" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="status_verifikasi" id="status_verifikasi" class="form-control">
                                    <option value="3" disabled selected>Belum diverifikasi</option>
                                    <option value="1">Disetujui</option>
                                    <option value="2">Tidak disetujui</option>
                                </select>
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnVerif" onclick="verifikasi()">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>