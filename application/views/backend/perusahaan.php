<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Perusahaan</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Mitra</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Perusahaan</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Mitra Perusahaan</h3>
        </div>
        <!-- Card body -->

        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                        <strong><?= $judul ?> : </strong> <?= $deskripsi ?>
                    </div>

                    <div class="table-responsive py-4">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Email</th>
                                    <th>Bergerak dibidang</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($company as $cp) {
                                ?>
                                    <tr>
                                        <td><?= $cp->kode_pt ?></td>
                                        <td><?= $cp->nama_pt ?></td>
                                        <td><?= $cp->email_pt ?></td>
                                        <td><?= $cp->jenis_pt ?></td>
                                        <td><?= $cp->deskripsi ?></td>
                                        <td class="table-actions">
                                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Approve">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Kode</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Email</th>
                                    <th>Bergerak dibidang</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </div>