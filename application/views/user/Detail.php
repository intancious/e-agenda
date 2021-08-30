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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <textarea name="nama_kegiatan" id="nama_kegiatan" class="form-control" rows="2" tabindex="1" readonly><?= $agenda->nama_kegiatan; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Penyelenggara</label>
                            <input class="form-control" value="<?= $agenda->penyelenggara; ?>" type="text" name="penyelenggara" id="penyelenggara" tabindex="2" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input class="form-control" value="<?= $agenda->kategori; ?>" type="text" name="kategori" id="kategori" tabindex="3" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Agenda</label>
                            <input class="form-control" value="<?= $agenda->agenda; ?>" type="text" name="agenda" id="agenda" tabindex="4" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Disposisi</label>
                            <input class="form-control" type="text" name="disposisi" id="disposisi" tabindex="5" value="<?= $agenda->pihak_terkait; ?>" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pembagian Tugas OPD</label>
                            <textarea class="form-control" name="sub_agenda" id="sub_agenda" rows="5" tabindex="6" readonly><?= $agenda->sub_agenda; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input class="form-control" value="<?= $agenda->tanggal; ?>" type="date" name="tanggal" id="tanggal" tabindex="7" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pukul (WIB) </label>
                            <input class="form-control" value="<?= $agenda->pukul; ?>" type="time" name="pukul" id="pukul" tabindex="8" readonly>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tempat</label>
                            <textarea name="tempat" id="tempat" class="form-control" rows="3" tabindex="9" readonly><?= $agenda->tempat; ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pakaian</label>
                            <textarea name="pakaian" id="pakaian" class="form-control" rows="3" tabindex="10" readonly><?= $agenda->pakaian; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Undangan</label>
                            <textarea name="undangan" id="undangan" class="form-control" rows="8" tabindex="11" readonly><?= $agenda->undangan; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Peran Pimpinan</label>
                            <input class="form-control" value="<?= $agenda->peran_pimpinan; ?>" type="text" name="peran_pimpinan" id="peran_pimpinan" tabindex="12" readonly>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Susunan Acara</label>
                            <textarea name="urutan_acara" id="urutan_acara" class="form-control" rows="8" tabindex="13" readonly><?= $agenda->urutan_acara; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label id="label-filetr">Layout Acara</label>
                            <textarea name="tata_ruangan" id="tata_ruangan" class="form-control" rows="8" tabindex="14" readonly><?= $agenda->tata_ruangan; ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Petugas Protokol</label>
                            <textarea name="petugas_protokol" id="petugas_protokol" class="form-control" rows="8" tabindex="15" readonly><?= $agenda->petugas_protokol; ?></textarea>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Catatan</label>
                            <input class="form-control" value="<?= $agenda->catatan; ?>" type="text" name="catatan" id="catatan" tabindex="16" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status Verifikasi</label>
                            <?php if ($agenda->status_verifikasi == 1) {
                                $verif = "Disetujui";
                            } else if ($agenda->status_verifikasi == 2) {
                                $verif = "Tidak disetujui";
                            } else {
                                $verif = "Belum diverifikasi";
                            }
                            ?>
                            <input class="form-control" value="<?= $verif; ?>" type="text" name="status_verifikasi" id="status_verifikasi" tabindex="17" readonly>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keterangan</label>
                            <?php if ($agenda->status_agenda == 1) {
                                $ket = "Selesai";
                            } else if ($agenda->status_agenda == 2) {
                                $ket = "Ditunda";
                            } else if ($agenda->status_agenda == 3) {
                                $ket = "Belum Berjalan";
                            } else {
                                $ket = "Sedang Berlangsung";
                            }
                            ?>
                            <input class="form-control" value="<?= $ket; ?>" type="text" name="status_agenda" id="status_agenda" tabindex="18" readonly>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6" id="file-previewsa">
                        <div class="form-group">
                            <label>Lihat File Sambutan</label>
                            <div id="lihatsa"><?= $agenda->sambutan ?></div>
                        </div>
                    </div>
                    <div class="col-md-6" id="file-previewsu">
                        <div class="form-group">
                            <label>Lihat File Surat</label>
                            <div id="lihatsu"><?= $agenda->surat ?></div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <div class="modal-footer">
                    <a href="<?= base_url("user/beranda"); ?>" class="btn btn-secondary">Kembali</a>
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

</body>

</html>