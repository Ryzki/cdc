<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Laporan Tracer</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Grafik - Analisa</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div> -->
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Alumni</h5>
                                    <span class="h2 font-weight-bold mb-0">350,897</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-active-40"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">New Tracer</h5>
                                    <span class="h2 font-weight-bold mb-0">2,356</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-chart-pie-35"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Prodi</h5>
                                    <span class="h2 font-weight-bold mb-0">924</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-money-coins"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Progress</h5>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-6">
            <!--* Card header *-->
            <!--* Card body *-->
            <!--* Card init *-->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Surtitle -->
                    <h6 class="surtitle">Grafik</h6>
                    <!-- Title -->
                    <h5 class="h3 mb-0">Perkembangan Tracer Study</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-pie" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <!--* Card header *-->
            <!--* Card body *-->
            <!--* Card init *-->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Surtitle -->
                    <h6 class="surtitle">Analisa</h6>
                    <!-- Title -->
                    <h5 class="h3 mb-0">Perkembangan Tracer Study</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>Jumlah Peserta</th>
                                    <th>Belum Survey</th>
                                    <th>Prosentase</th>
                                    <th>Complete</th>
                                    <th>Prosentase</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Jumlah Peserta</th>
                                    <th>Belum Survey</th>
                                    <th>Prosentase</th>
                                    <th>Complete</th>
                                    <th>Prosentase</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>2500</td>
                                    <td>1250</td>
                                    <td>50%</td>
                                    <td>1250</td>
                                    <td>50%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <!--* Card header *-->
            <!--* Card body *-->
            <!--* Card init *-->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Surtitle -->
                    <h6 class="surtitle">Grafik</h6>
                    <!-- Title -->
                    <h5 class="h3 mb-0">Perkembangan Tracer Study Per Prodi</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-bars" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <!--* Card header *-->
            <!--* Card body *-->
            <!--* Card init *-->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Surtitle -->
                    <h6 class="surtitle">Analisa</h6>
                    <!-- Title -->
                    <h5 class="h3 mb-0">Perkembangan Tracer Study Per Prodi</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>Kode</th>
                                    <th>Program Studi</th>
                                    <th>Peserta</th>
                                    <th>Belum Survey</th>
                                    <th>Prosentase</th>
                                    <th>Complete</th>
                                    <th>Prosentase</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Kode</th>
                                    <th>Program Studi</th>
                                    <th>Peserta</th>
                                    <th>Belum Survey</th>
                                    <th>Prosentase</th>
                                    <th>Complete</th>
                                    <th>Prosentase</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>87120</td>
                                    <td>Pendidikan IPS</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>50%</td>
                                    <td>50</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>62201</td>
                                    <td>Akuntansi</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>50%</td>
                                    <td>50</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>86201</td>
                                    <td>Bimbingan dan Konseling</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>50%</td>
                                    <td>50</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>74201</td>
                                    <td>Ilmu Hukum</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>50%</td>
                                    <td>50</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>61201</td>
                                    <td>Manajemen</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>50%</td>
                                    <td>50</td>
                                    <td>50%</td>
                                </tr>
                                <tr>
                                    <td>88201</td>
                                    <td>Pendidikan Bahasa dan Sastra Indonesia</td>
                                    <td>100</td>
                                    <td>50</td>
                                    <td>50%</td>
                                    <td>50</td>
                                    <td>50%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <!--* Card header *-->
            <!--* Card body *-->
            <!--* Card init *-->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Surtitle -->
                    <h6 class="surtitle">Analisa</h6>
                    <!-- Title -->
                    <h5 class="h3 mb-0">Laporan Tracer</h5>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Laporan Tracer : </strong> Ini merupakan tabel atau data yang di dapat dari hasil tracer kepada alumni, yang selanjutnya data ini diexport ke dalam microsoft excel dan kemudian diupload ke portal RistekDikti.
                    </div>
                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>kdptimsmh</th>
                                    <th>kdpstmsmh</th>
                                    <th>nimhsmsmh</th>
                                    <th>nmmhsmsmh</th>
                                    <th>telpomsmh</th>
                                    <th>emailmsmh</th>
                                    <th>tahun_lulus</th>
                                    <th>f21</th>
                                    <th>f22</th>
                                    <th>f23</th>
                                    <th>f24</th>
                                    <th>f25</th>
                                    <th>f26</th>
                                    <th>f27</th>
                                    <th>f301</th>
                                    <th>f302</th>
                                    <th>f303</th>
                                    <th>f401</th>
                                    <th>f402</th>
                                    <th>f403</th>
                                    <th>f404</th>
                                    <th>f405</th>
                                    <th>f406</th>
                                    <th>f407</th>
                                    <th>f408</th>
                                    <th>f409</th>
                                    <th>f410</th>
                                    <th>f411</th>
                                    <th>f412</th>
                                    <th>f413</th>
                                    <th>f414</th>
                                    <th>f415</th>
                                    <th>f416</th>
                                    <th>f6</th>
                                    <th>f501</th>
                                    <th>f502</th>
                                    <th>f503</th>
                                    <th>f7</th>
                                    <th>f7a</th>
                                    <th>f8</th>
                                    <th>f901</th>
                                    <th>f902</th>
                                    <th>f903</th>
                                    <th>f904</th>
                                    <th>f905</th>
                                    <th>f906</th>
                                    <th>f1001</th>
                                    <th>f1002</th>
                                    <th>f1101</th>
                                    <th>f1102</th>
                                    <th>f1201</th>
                                    <th>f1202</th>
                                    <th>f1301</th>
                                    <th>f1302</th>
                                    <th>f1303</th>
                                    <th>f14</th>
                                    <th>f15</th>
                                    <th>f1601</th>
                                    <th>f1602</th>
                                    <th>f1603</th>
                                    <th>f1604</th>
                                    <th>f1605</th>
                                    <th>f1606</th>
                                    <th>f1607</th>
                                    <th>f1608</th>
                                    <th>f1609</th>
                                    <th>f1610</th>
                                    <th>f1611</th>
                                    <th>f1612</th>
                                    <th>f1613</th>
                                    <th>f1614</th>
                                    <th>f1701</th>
                                    <th>f1702b</th>
                                    <th>f1703</th>
                                    <th>f1704b</th>
                                    <th>f1705</th>
                                    <th>f1705a</th>
                                    <th>f1706</th>
                                    <th>f1706ba</th>
                                    <th>f1707</th>
                                    <th>f1708b</th>
                                    <th>f1709</th>
                                    <th>f1710b</th>
                                    <th>f1711</th>
                                    <th>f1711a</th>
                                    <th>f1712b</th>
                                    <th>f1712a</th>
                                    <th>f1713</th>
                                    <th>f1714b</th>
                                    <th>f1715</th>
                                    <th>f1716b</th>
                                    <th>f1717</th>
                                    <th>f1718b</th>
                                    <th>f1719</th>
                                    <th>f1720b</th>
                                    <th>f1721</th>
                                    <th>f1722b</th>
                                    <th>f1723</th>
                                    <th>f1724b</th>
                                    <th>f1725</th>
                                    <th>f1726b</th>
                                    <th>f1727</th>
                                    <th>f1728b</th>
                                    <th>f1729</th>
                                    <th>f1730b</th>
                                    <th>f1731</th>
                                    <th>f1732b</th>
                                    <th>f1733</th>
                                    <th>f1734b</th>
                                    <th>f1735</th>
                                    <th>f1736b</th>
                                    <th>f1737</th>
                                    <th>f1737a</th>
                                    <th>f1738</th>
                                    <th>f1738ba</th>
                                    <th>f1739</th>
                                    <th>f1740b</th>
                                    <th>f1741</th>
                                    <th>f1742b</th>
                                    <th>f1743</th>
                                    <th>f1744b</th>
                                    <th>f1745</th>
                                    <th>f1746b</th>
                                    <th>f1747</th>
                                    <th>f1748b</th>
                                    <th>f1749</th>
                                    <th>f1750b</th>
                                    <th>f1751</th>
                                    <th>f1752b</th>
                                    <th>f1753</th>
                                    <th>f1754b</th>
                                    <th>f1754b</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>kdptimsmh</th>
                                    <th>kdpstmsmh</th>
                                    <th>nimhsmsmh</th>
                                    <th>nmmhsmsmh</th>
                                    <th>telpomsmh</th>
                                    <th>emailmsmh</th>
                                    <th>tahun_lulus</th>
                                    <th>f21</th>
                                    <th>f22</th>
                                    <th>f23</th>
                                    <th>f24</th>
                                    <th>f25</th>
                                    <th>f26</th>
                                    <th>f27</th>
                                    <th>f301</th>
                                    <th>f302</th>
                                    <th>f303</th>
                                    <th>f401</th>
                                    <th>f402</th>
                                    <th>f403</th>
                                    <th>f404</th>
                                    <th>f405</th>
                                    <th>f406</th>
                                    <th>f407</th>
                                    <th>f408</th>
                                    <th>f409</th>
                                    <th>f410</th>
                                    <th>f411</th>
                                    <th>f412</th>
                                    <th>f413</th>
                                    <th>f414</th>
                                    <th>f415</th>
                                    <th>f416</th>
                                    <th>f6</th>
                                    <th>f501</th>
                                    <th>f502</th>
                                    <th>f503</th>
                                    <th>f7</th>
                                    <th>f7a</th>
                                    <th>f8</th>
                                    <th>f901</th>
                                    <th>f902</th>
                                    <th>f903</th>
                                    <th>f904</th>
                                    <th>f905</th>
                                    <th>f906</th>
                                    <th>f1001</th>
                                    <th>f1002</th>
                                    <th>f1101</th>
                                    <th>f1102</th>
                                    <th>f1201</th>
                                    <th>f1202</th>
                                    <th>f1301</th>
                                    <th>f1302</th>
                                    <th>f1303</th>
                                    <th>f14</th>
                                    <th>f15</th>
                                    <th>f1601</th>
                                    <th>f1602</th>
                                    <th>f1603</th>
                                    <th>f1604</th>
                                    <th>f1605</th>
                                    <th>f1606</th>
                                    <th>f1607</th>
                                    <th>f1608</th>
                                    <th>f1609</th>
                                    <th>f1610</th>
                                    <th>f1611</th>
                                    <th>f1612</th>
                                    <th>f1613</th>
                                    <th>f1614</th>
                                    <th>f1701</th>
                                    <th>f1702b</th>
                                    <th>f1703</th>
                                    <th>f1704b</th>
                                    <th>f1705</th>
                                    <th>f1705a</th>
                                    <th>f1706</th>
                                    <th>f1706ba</th>
                                    <th>f1707</th>
                                    <th>f1708b</th>
                                    <th>f1709</th>
                                    <th>f1710b</th>
                                    <th>f1711</th>
                                    <th>f1711a</th>
                                    <th>f1712b</th>
                                    <th>f1712a</th>
                                    <th>f1713</th>
                                    <th>f1714b</th>
                                    <th>f1715</th>
                                    <th>f1716b</th>
                                    <th>f1717</th>
                                    <th>f1718b</th>
                                    <th>f1719</th>
                                    <th>f1720b</th>
                                    <th>f1721</th>
                                    <th>f1722b</th>
                                    <th>f1723</th>
                                    <th>f1724b</th>
                                    <th>f1725</th>
                                    <th>f1726b</th>
                                    <th>f1727</th>
                                    <th>f1728b</th>
                                    <th>f1729</th>
                                    <th>f1730b</th>
                                    <th>f1731</th>
                                    <th>f1732b</th>
                                    <th>f1733</th>
                                    <th>f1734b</th>
                                    <th>f1735</th>
                                    <th>f1736b</th>
                                    <th>f1737</th>
                                    <th>f1737a</th>
                                    <th>f1738</th>
                                    <th>f1738ba</th>
                                    <th>f1739</th>
                                    <th>f1740b</th>
                                    <th>f1741</th>
                                    <th>f1742b</th>
                                    <th>f1743</th>
                                    <th>f1744b</th>
                                    <th>f1745</th>
                                    <th>f1746b</th>
                                    <th>f1747</th>
                                    <th>f1748b</th>
                                    <th>f1749</th>
                                    <th>f1750b</th>
                                    <th>f1751</th>
                                    <th>f1752b</th>
                                    <th>f1753</th>
                                    <th>f1754b</th>
                                    <th>f1754b</th>
                                </tr>
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>