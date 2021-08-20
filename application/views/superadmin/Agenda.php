<?php include "Header.php" ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Agenda</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" id="judulBtn">
            <button class="btn btn-light shadow-sm" onclick="add_agenda()"><i class="fas fa-plus"></i> Tambah Agenda</button>
        </div>
        <div class="card-body" id="form-data" style="display:none;">
            <form action="#" id="form" class="form-horizontal">
                <input type="hidden" value="" name="id_agenda" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Kegiatan</label>
                                <input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan" tabindex="1">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kategori</label>
                                <input class="form-control" type="text" name="kategori" id="kategori" tabindex="2">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penyelenggara</label>
                                <input class="form-control" type="text" name="penyelenggara" id="penyelenggara" tabindex="3">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Agenda</label>
                                <select name="agenda" id="agenda" class="form-control" tabindex="4">
                                    <option value="" disabled selected>--- Pilih ---</option>
                                    <option value="Bupati">Bupati</option>
                                    <option value="Wakil Bupati">Wakil Bupati</option>
                                </select>
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Pembagian Tugas OPD</label>
                                <textarea name="sub_agenda" id="sub_agenda" class="form-control" rows="5" tabindex="5"></textarea>
                                <!-- <input class="form-control" type="text" name="sub_agenda" id="sub_agenda" tabindex="5"> -->
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input class="form-control" type="date" name="tanggal" id="tanggal" tabindex="6">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Pukul (WIB) </label>
                                <input class="form-control" type="time" name="pukul" id="pukul" tabindex="7">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tempat</label>
                                <input class="form-control" type="text" name="tempat" id="tempat" tabindex="8">
                                <!-- <select name="tempat" id="tempat" class="form-control" tabindex="7">
                                    <option value="" disabled selected>--- Pilih ---</option>
                                    <option value="Aula P.B. Sudirman">Aula P.B. Sudirman</option>
                                    <option value="Aula Bawah Timur">Aula Bawah Timur</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select> -->
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pakaian</label>
                                <input class="form-control" type="text" name="pakaian" id="pakaian" tabindex="9">
                                <span class="help-block" style="color: red;"></span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Undangan</label>
                                <input class="form-control" type="text" name="undangan" id="undangan" tabindex="10">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Peran Pimpinan</label>
                                <input class="form-control" type="text" name="peran_pimpinan" id="peran_pimpinan" tabindex="11">
                                <span class="help-block" style="color: red;"></span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Urutan Acara</label>
                                <input class="form-control" type="text" name="urutan_acara" id="urutan_acara" tabindex="12">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="label-filetr">Tata Ruangan</label>
                                <input class="form-control" type="text" name="tata_ruangan" id="tata_ruangan" tabindex="13">
                                <span class="help-block" style="color: red;"></span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pihak Terkait</label>
                                <input class="form-control" type="text" name="pihak_terkait" id="pihak_terkait" tabindex="14">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Petugas Protokol</label>
                                <input class="form-control" type="text" name="petugas_protokol" id="petugas_protokol" tabindex="15">
                                <span class="help-block" style="color: red;"></span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Catatan</label>
                                <input class="form-control" type="text" name="catatan" id="catatan" tabindex="16">
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="label-filesa">Upload File Sambutan</label>
                                <input class="form-control" type="file" name="sambutan" id="sambutan" tabindex="17">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="label-filesu">Upload File Surat</label>
                                <input class="form-control" type="file" name="surat" id="surat" tabindex="18">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- <div class="col-md-4" id="file-previewtr">
                            <div class="form-group">
                                <label>Lihat Tata Ruangan</label>
                                <div id="lihattr"></div>
                                <span class="help-block" style="color: red;"></span>
                            </div>
                        </div> -->
                        <div class="col-md-4" id="file-previewsa">
                            <div class="form-group">
                                <label>Lihat Sambutan</label>
                                <div id="lihatsa"></div>
                            </div>
                        </div>
                        <div class="col-md-4" id="file-previewsu">
                            <div class="form-group">
                                <label>Lihat Surat</label>
                                <div id="lihatsu"></div>
                            </div>
                        </div>
                        <div class="col-md-4" id="file-previewpe">
                            <div class="form-group">
                                <label>Pembuat Agenda</label>
                                <div id="lihatpe"></div>
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
                            <th>Nama Kegiatan</th>
                            <th>Agenda</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Pembuat Agenda</th>
                            <th>Status</th>
                            <th>Verifikasi</th>
                            <th>Aksi</th>
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
                            <th>Aksi</th>
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
        CKEDITOR.instances['sub_agenda'].setData("");
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

                if (data.user_level == 'Superadmins' || data.user_level == 'Admins') {

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

                    if (data.fullname) {
                        $('#file-previewpe').show();
                        $('#lihatpe').html('<p> ' + data.fullname + '</p>');

                    } else {
                        $('#lihatpe').text('(Tidak ditemukan)');
                    }

                } else {
                    $('#file-previewsa').hide();
                    $('#file-previewsu').hide();
                    if (data.fullname) {
                        $('#file-previewpe').show();
                        $('#lihatpe').html('<p> ' + data.fullname + '</p>');

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