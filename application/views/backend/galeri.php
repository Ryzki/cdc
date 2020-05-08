<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Galeri Area</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Galeri</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Area</li>
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
            <h3 class="mb-0">Galeri Area</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Galeri : </strong> Upload gambar untuk ditampilkan dihalaman website utama.
                    </div>
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Gambar</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-sm btn-danger btn-round btn-icon" data-toggle="tooltip" data-original-title="Tambah Gambar">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                    <span class="btn-inner--text">Tambah</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="table-check-all" type="checkbox">
                                            <label class="custom-control-label" for="table-check-all"></label>
                                        </div>
                                    </th>
                                    <th>Url</th>
                                    <th>Album</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="table-check-all" type="checkbox">
                                            <label class="custom-control-label" for="table-check-all"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="text-muted"><?= base_url('assets/') ?>images/gallery/1.jpg</span>
                                    </td>
                                    <td>
                                        <a href="#!" class="font-weight-bold">Psikotes</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/') ?>images/gallery/1.jpg" alt="galeri" width="50%" height="50%">
                                    </td>
                                    <td class="table-actions">
                                        <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="table-check-all" type="checkbox">
                                            <label class="custom-control-label" for="table-check-all"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="text-muted"><?= base_url('assets/') ?>images/gallery/1.jpg</span>
                                    </td>
                                    <td>
                                        <a href="#!" class="font-weight-bold">Psikotes</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/') ?>images/gallery/1.jpg" alt="galeri" width="50%" height="50%">
                                    </td>
                                    <td class="table-actions">
                                        <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="table-check-all" type="checkbox">
                                            <label class="custom-control-label" for="table-check-all"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="text-muted"><?= base_url('assets/') ?>images/gallery/4.jpg</span>
                                    </td>
                                    <td>
                                        <a href="#!" class="font-weight-bold">Psikotes</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/') ?>images/gallery/1.jpg" alt="galeri" width="50%" height="50%">
                                    </td>
                                    <td class="table-actions">
                                        <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="table-check-all" type="checkbox">
                                            <label class="custom-control-label" for="table-check-all"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="text-muted"><?= base_url('assets/') ?>images/gallery/1.jpg</span>
                                    </td>
                                    <td>
                                        <a href="#!" class="font-weight-bold">Psikotes</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/') ?>images/gallery/1.jpg" alt="galeri" width="50%" height="50%">
                                    </td>
                                    <td class="table-actions">
                                        <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="table-check-all" type="checkbox">
                                            <label class="custom-control-label" for="table-check-all"></label>
                                        </div>
                                    </th>
                                    <td>
                                        <span class="text-muted"><?= base_url('assets/') ?>images/gallery/1.jpg</span>
                                    </td>
                                    <td>
                                        <a href="#!" class="font-weight-bold">Psikotes</a>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/') ?>images/gallery/1.jpg" alt="galeri" width="50%" height="50%">
                                    </td>
                                    <td class="table-actions">
                                        <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>