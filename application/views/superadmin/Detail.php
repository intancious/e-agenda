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
                            <label>Agenda</label>
                            <select name="agenda" id="agenda" class="form-control" tabindex="3">
                                <option value="" disabled selected>--- Pilih ---</option>
                                <option value="Bupati">Bupati</option>
                                <option value="Wakil Bupati">Wakil Bupati</option>
                            </select>
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sub Agenda</label>
                            <input class="form-control" type="text" name="sub_agenda" id="sub_agenda" tabindex="4">
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" id="tanggal" tabindex="5">
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Pukul (WIB) </label>
                            <input class="form-control" type="time" name="pukul" id="pukul" tabindex="6">
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tempat</label>
                            <input class="form-control" type="text" name="tempat" id="tempat" tabindex="7">
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
                            <input class="form-control" type="text" name="pakaian" id="pakaian" tabindex="8">
                            <span class="help-block" style="color: red;"></span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Undangan</label>
                            <input class="form-control" type="text" name="undangan" id="undangan" tabindex="9">
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Peran Pimpinan</label>
                            <input class="form-control" type="text" name="peran_pimpinan" id="peran_pimpinan" tabindex="10">
                            <span class="help-block" style="color: red;"></span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Urutan Acara</label>
                            <input class="form-control" type="text" name="urutan_acara" id="urutan_acara" tabindex="11">
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="label-filetr">Upload Tata Ruangan</label>
                            <input class="form-control" type="file" name="tata_ruangan" id="tata_ruangan" tabindex="12">
                            <span class="help-block" style="color: red;"></span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pihak Terkait</label>
                            <input class="form-control" type="text" name="pihak_terkait" id="pihak_terkait" tabindex="13">
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Petugas Protokol</label>
                            <input class="form-control" type="text" name="petugas_protokol" id="petugas_protokol" tabindex="14">
                            <span class="help-block" style="color: red;"></span>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Catatan</label>
                            <input class="form-control" type="text" name="catatan" id="catatan" tabindex="15">
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="label-filesa">Upload File Sambutan</label>
                            <input class="form-control" type="file" name="sambutan" id="sambutan" tabindex="16">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="label-filesu">Upload File Surat</label>
                            <input class="form-control" type="file" name="surat" id="surat" tabindex="17">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" id="file-previewtr">
                        <div class="form-group">
                            <label>Lihat Tata Ruangan</label>
                            <div id="lihattr"></div>
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="col-md-4" id="file-previewsa">
                        <div class="form-group">
                            <label>Lihat Sambutan</label>
                            <div id="lihatsa"></div>
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                    <div class="col-md-4" id="file-previewsu">
                        <div class="form-group">
                            <label>Lihat Surat</label>
                            <div id="lihatsu"></div>
                            <span class="help-block" style="color: red;"></span>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <button type="button" class="btn btn-secondary">Kembali</button>

            </form>
        </div>

    </div>


    <!-- Content Row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "Footer.php" ?>

</body>

</html>