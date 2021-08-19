<?php include "Header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Agenda</h1>
    </div>
    <!-- Content Row -->

    <div class="card shadow mb-4">

        <div class="card-body" id="form-data">
            <form action="#" id="form" class="form-horizontal">
                <input type="hidden" value="" name="id_agenda" />
                <!-- <div class="modal-body"> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input class="form-control" type="text" name="nama_kegiatan" id="nama_kegiatan" tabindex="1" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input class="form-control" type="text" name="kategori" id="kategori" tabindex="2" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Penyelenggara</label>
                            <input class="form-control" type="text" name="penyelenggara" id="penyelenggara" tabindex="3" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Agenda</label>
                            <input class="form-control" type="text" name="agenda" id="agenda" tabindex="4" readonly>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pembagian Tugas OPD</label>
                            <input class="form-control" type="text" name="sub_agenda" id="sub_agenda" tabindex="5" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" id="tanggal" tabindex="6" readonly>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pukul (WIB) </label>
                            <input class="form-control" type="time" name="pukul" id="pukul" tabindex="7" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tempat</label>
                            <input class="form-control" type="text" name="tempat" id="tempat" tabindex="8" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pakaian</label>
                            <input class="form-control" type="text" name="pakaian" id="pakaian" tabindex="9" readonly>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Undangan</label>
                            <input class="form-control" type="text" name="undangan" id="undangan" tabindex="10" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Peran Pimpinan</label>
                            <input class="form-control" type="text" name="peran_pimpinan" id="peran_pimpinan" tabindex="11" readonly>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Urutan Acara</label>
                            <input class="form-control" type="text" name="urutan_acara" id="urutan_acara" tabindex="12" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="label-filetr">Tata Ruangan</label>
                            <input class="form-control" type="text" name="tata_ruangan" id="tata_ruangan" tabindex="13" readonly>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pihak Terkait</label>
                            <input class="form-control" type="text" name="pihak_terkait" id="pihak_terkait" tabindex="14" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Petugas Protokol</label>
                            <input class="form-control" type="text" name="petugas_protokol" id="petugas_protokol" tabindex="15" readonly>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Catatan</label>
                            <input class="form-control" type="text" name="catatan" id="catatan" tabindex="16" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Verifikasi</label>
                            <input class="form-control" type="text" name="status_verifikasi" id="status_verifikasi" tabindex="18" readonly>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input class="form-control" type="text" name="status_agenda" id="status_agenda" tabindex="19" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4" id="file-previewsa">
                        <div class="form-group">
                            <label>Lihat File Sambutan</label>
                            <div id="lihatsa"></div>
                        </div>
                    </div>
                    <div class="col-md-4" id="file-previewsu">
                        <div class="form-group">
                            <label>Lihat File Surat</label>
                            <div id="lihatsu"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pembuat Agenda</label>
                            <div id="lihatpe"></div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="modal-footer">
                    <a class="btn btn-success shadow-sm" href="#" data-toggle="modal" data-target="#modal_form_verif">Verifikasi</a>
                    <a href="<?php echo base_url(); ?>superadmin/beranda" class="btn btn-secondary">Kembali</a>
                </div>

            </form>
        </div>

    </div>


    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "Footer.php" ?>

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