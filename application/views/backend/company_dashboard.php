<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                </div>
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">&nbsp;</a>
                    <a href="#" class="btn btn-sm btn-neutral">&nbsp;</a>
                </div> -->
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Vacancy</h5>
                                    <span class="h2 font-weight-bold mb-0" id="total_vacancy">-</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-air-baloon"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm" id="summary_total_vacancy">
                                <span class="text-success mr-2"><i class="fa fa-info"></i> </span>
                                <span class="text-nowrap" id="latest_vacancy">-</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Apply For Job</h5>
                                    <span class="h2 font-weight-bold mb-0" id="total_apply">-</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-circle-08"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Agenda</h5>
                                    <span class="h2 font-weight-bold mb-0" id="total_agenda">-</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-books"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> </span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                                    <span class="h2 font-weight-bold mb-0">49,65%</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i class="ni ni-chart-bar-32"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0"><span>Company Profile Of <?= strtoupper($nama_company) ?></span> <span class="float-right">Tanggal Daftar : <?= substr($data_company['date_input'], 0, 10) ?></span></h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3 text-center">
                    <img src="<?= base_url('assets') ?>/images/<?= $image['image'] ?>" alt="">
                </div>
                <div class="col-sm-9">
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Nama</small>
                        </div>
                        <div class="col-sm-10">
                            <h4 class="mb-0"><?= strtoupper($nama_company) ?></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Jenis</small>
                        </div>
                        <div class="col-sm-10">
                            <h4 class="mb-0"><?= $data_company['jenis'] ?></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-2 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Email</small>
                        </div>
                        <div class="col-sm-10">
                            <h4 class="mb-0"><?= $data_company['email'] ?></h4>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-sm-2 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Deskripsi</small>
                        </div>
                        <div class="col-sm-10 align-items-center">
                            <h4 class="mb-0"><?= $data_company['deskripsi'] ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            get_total_vacancy()
            get_latest_vacancy()
            get_total_agenda()
            get_total_apply()
        })

        function get_total_vacancy() {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/total_vacancy_company') ?>",
                data: {
                    kode: "<?= $data_company['kode'] ?>"
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $("#total_vacancy").html(data);
                }
            });
        }

        function get_latest_vacancy() {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/latest_vacancy') ?>",
                data: {
                    kode: "<?= $data_company['kode'] ?>"
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data.job_title)
                    $("#latest_vacancy").html("Latest vacancy : " + data.job_title);
                }
            });
        }

        function get_total_apply() {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/total_apply') ?>",
                data: {
                    kode: "<?= $data_company['kode'] ?>"
                },
                dataType: 'json',
                success: function(data) {
                    console.log('total_apply' + data)
                    $("#total_apply").html(data);
                }
            });
        }

        function get_apply_this_month() {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/appy_this_month') ?>",
                data: {
                    kode: "<?= $data_company['kode'] ?>"
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $("#total_apply").html(data);
                }
            });
        }

        function get_total_agenda() {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/total_agenda') ?>",
                data: {
                    kode: "<?= $data_company['kode'] ?>"
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $("#total_agenda").html(data);
                }
            });
        }
    </script>