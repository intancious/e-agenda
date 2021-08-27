<?php include "Header.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Filter Berdasarkan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <form>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal Kegiatan</label>
                                        <input class="form-control" type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" tabindex="1">
                                        <span class="help-block" style="color: red;"></span>
                                    </div>
                                </div>
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
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-lg-6">

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="m-0 font-weight-bold text-primary">Rabu, 18 Agustus 2021</h6>
                            <h6 class="m-0 font-weight-bold text-primary">08.00 WIB</h6>
                        </div>
                        <div class="col-md-6 keterangan">
                            <small class="label label-success"> Sedang Berlangsung </small>
                        </div>

                    </div>
                </div>


                <div class="card-body">
                    <p><strong>Nama Kegiatan</strong> : Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    <p><strong>Penyelenggara</strong> : Lorem Ipsum</p>
                    <p><strong>Tempat</strong> : Lorem Ipsum</p>
                    <p><strong>Disposisi</strong> : Lorem Ipsum</p>
                </div>


                <a href="<?php echo base_url(); ?>user/beranda/detail" class="btn btn-light btn-sm" style="border-radius: 0;">Lihat Detail</a>


            </div>

        </div>
        <div class="col-lg-6">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="m-0 font-weight-bold text-primary">Rabu, 18 Agustus 2021</h6>
                            <h6 class="m-0 font-weight-bold text-primary">08.00 WIB</h6>
                        </div>
                        <div class="col-md-6 keterangan">
                            <small class="label label-warning"> Belum Berjalan </small>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <p><strong>Nama Kegiatan</strong> : Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    <p><strong>Penyelenggara</strong> : Lorem Ipsum</p>
                    <p><strong>Tempat</strong> : Lorem Ipsum</p>
                    <p><strong>Disposisi</strong> : Lorem Ipsum</p>
                </div>
                <a href="<?php echo base_url(); ?>user/beranda/detail" class="btn btn-light btn-sm" style="border-radius: 0;">Lihat Detail</a>
            </div>
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