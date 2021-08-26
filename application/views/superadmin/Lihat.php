<?php include "Header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lihat Agenda</h1>
    </div>
    <!-- Content Row -->

    <div class="card shadow mb-4">

        <div class="card-body">
            <form action="#" id="form" class="form-horizontal">
                <?php if (!empty($lihat)) { ?>
                    <?php foreach ($lihat as $data) { //ngabsen data
                    ?>
                        <input class="form-control" type="hidden" value="<?php echo $data['id_agenda'] ?>" name="id_agenda" />
                        <!-- <div class="modal-body"> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Kegiatan</label>
                                    <textarea name="nama_kegiatan" id="nama_kegiatan" class="form-control" rows="2" tabindex="1" readonly><?php echo $data['nama_kegiatan'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Penyelenggara</label>
                                    <input class="form-control" type="text" name="penyelenggara" id="penyelenggara" tabindex="2" value="<?php echo $data['penyelenggara'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input class="form-control" type="text" name="kategori" id="kategori" tabindex="3" value="<?php echo $data['kategori'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Agenda</label>
                                    <input class="form-control" type="text" name="agenda" id="agenda" tabindex="4" value="<?php echo $data['agenda'] ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Disposisi</label>
                                    <input class="form-control" type="text" name="disposisi" id="disposisi" tabindex="5" value="<?php echo $data['pihak_terkait'] ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Pembagian Tugas OPD</label>
                                    <textarea name="sub_agenda" id="sub_agenda" class="form-control" rows="8" tabindex="6" readonly><?php echo $data['sub_agenda'] ?></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input class="form-control" type="text" name="tanggal" id="tanggal" tabindex="7" value="<?php echo $data['tanggal'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pukul (WIB) </label>
                                    <input class="form-control" type="text" name="pukul" id="pukul" tabindex="8" value="<?php echo $data['pukul'] ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tempat</label>
                                    <textarea name="tempat" id="tempat" class="form-control" rows="3" tabindex="9" readonly><?php echo $data['tempat'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pakaian</label>
                                    <textarea name="pakaian" id="pakaian" class="form-control" rows="3" tabindex="10" readonly><?php echo $data['pakaian'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Undangan</label>
                                    <textarea name="undangan" id="undangan" class="form-control" rows="8" tabindex="11" readonly><?php echo $data['undangan'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Peran Pimpinan</label>
                                    <input class="form-control" type="text" name="peran_pimpinan" id="peran_pimpinan" tabindex="12" value="<?php echo $data['peran_pimpinan'] ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Susunan Acara</label>
                                    <textarea name="urutan_acara" id="urutan_acara" class="form-control" rows="8" tabindex="13" readonly><?php echo $data['urutan_acara'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label id="label-filetr">Layout Acara</label>
                                    <textarea name="tata_ruangan" id="tata_ruangan" class="form-control" rows="8" tabindex="14" readonly><?php echo $data['tata_ruangan'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Petugas Protokol</label>
                                    <textarea name="petugas_protokol" id="petugas_protokol" class="form-control" rows="8" tabindex="15" readonly><?php echo $data['petugas_protokol'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input class="form-control" type="text" name="catatan" id="catatan" tabindex="16" value="<?php echo $data['catatan'] ?>" readonly>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" id="file-previewsa">
                                <div class="form-group">
                                    <label>Lihat Sambutan</label>
                                    <div id="lihatsa"><a href="<?= base_url('uploads/files/') . $data['sambutan'] ?>" target="_blank"><?php echo $data['sambutan'] ?></a></div>
                                </div>
                            </div>
                            <div class="col-md-6" id="file-previewsu">
                                <div class="form-group">
                                    <label>Lihat Surat</label>
                                    <div id="lihatsu"><a href="<?= base_url('uploads/files/') . $data['surat'] ?>" target="_blank"><?php echo $data['surat'] ?></a></div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                <?php } else { ?>
                    <h4 style="color: red; text-align: center">Data tidak ditemukan</h4>
                <?php } ?>
                <!-- </div> -->
                <div class="modal-footer">
                    <a href="<?php echo base_url(); ?>superadmin/agenda" class="btn btn-secondary" tabindex="17">Kembali</a>
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
                                <select id="verifikasi" name="verifikasi" class="form-control">
                                    <option value="3" disabled selected>
                                        Belum diverifikasi
                                    </option>
                                    <option value="1">Disetujui</option>
                                    <option value="2">Tidak disetujui</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="disposisi" style="display: none;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Disposisi</label>
                                <input class="form-control" type="text" name="pihak_terkait" id="pihak_terkait">
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

<script type="text/javascript">
    $("#verifikasi").change(function() {
        var sel = $("#verifikasi option:selected").val();
        if (sel == 2) {
            document.getElementById("disposisi").style.display = "block";
        } else if (sel == 1) {
            document.getElementById("disposisi").style.display = "none";

        }
    });
</script>
</body>

</html>