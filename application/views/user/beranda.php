<?php include "Header.php" ?>
<div class="container-fluid">
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
                                        <input onchange="return changeAgendaByWaktu(this)" class="form-control" type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" tabindex="1">
                                        <span class="help-block" style="color: red;"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Agenda</label>
                                        <select onchange="return changeAgendaByAgenda(this)" name="agenda" id="agenda" class="form-control" tabindex="3">
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
    <div class="row" id="contentdata"></div>
</div>
</div>

<?php include "Footer.php" ?>

<script type="text/javascript">
    let temporarydata = {

    }

    let changeAgendaByWaktu = function(elm) {
        temporarydata.waktu = $(elm).val()
        docuemtnready()
    }
    let changeAgendaByAgenda = function(elm) {
        temporarydata.agenda = $(elm).val()
        docuemtnready()
    }

    let docuemtnready = function() {
        let getStatusName = function(status) {
            let list_status = [
                '<small class="label label-secondary"> Selesai </small>',
                '<small class="label label-danger"> Ditunda </small>',
                '<small class="label label-warning"> Belum berjalan </small>',
                '<small class="label label-success"> Sedang berlangsung </small>'
            ]
            return list_status[parseFloat(status) - 1];
        }
        $.ajax({
            url: "<?= base_url("user/beranda/getDataAgenda") ?>",
            dataType: "JSON",
            data: temporarydata,
            method: "POST",
            success: function(res) {
                let response = []
                if (res.length) {
                    res.map(function(v, i) {
                        response.push(`<div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="m-0 font-weight-bold text-primary">` + get_date(v.tanggal + ' ' + v.pukul, 'indonesia_with_day_time_formatFullTerbalik') + "  WIB" + `</h6>
                        </div>
                        <div class="col-md-6 keterangan">
                            <small class="label"> ` + getStatusName(v.status_agenda) + ` </small> 
                        </div>
                    </div>
                </div>
                <div class="card-body" style="text-align:justify">
                    <p><strong>Agenda</strong> : ` + v.agenda + `</p>
                    <p><strong>Nama Kegiatan</strong> : ` + v.nama_kegiatan + `</p>
                    <p><strong>Penyelenggara</strong> : ` + v.penyelenggara + `</p>
                    <p><strong>Tempat</strong> : ` + v.tempat + `</p>
                    <p><strong>Disposisi</strong> : ` + v.pihak_terkait + `</p>
                </div>
                <a href="<?= base_url("user/beranda/detail/"); ?>` + v.id_agenda + `" class="btn btn-light btn-sm" style="border-radius: 0;">Lihat Detail</a>
            </div>
        </div>`)
                    })
                } else {
                    response.push(`<div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <p class="text-center"><strong>Belum ada data yang dapat ditampilkan.</strong>
                </div>
            </div>
        </div>`)
                }
                $('#contentdata').html(response.join(""))
            },
        })
    }

    docuemtnready()
</script>

</body>

</html>