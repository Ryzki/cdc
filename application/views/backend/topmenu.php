<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Header</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Header</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Menu</li>
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
            <h3 class="mb-0">Top Menu</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Daftar Menu : </strong> Anda dapat membuat dan mengatur daftar menu yang anda inginkan.
                    </div>
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Daftar Menu Utama</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-sm btn-danger btn-round btn-icon" data-original-title="Tambah Menu" data-toggle="modal" data-target="#modal-menu">
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
                                    <th>Menu</th>
                                    <th>Link Artikel</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($menu as $mn) {
                                ?>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="table-check-all" type="checkbox">
                                                <label class="custom-control-label" for="table-check-all"></label>
                                            </div>
                                        </th>
                                        <td class="table-user">
                                            <b><?= $mn->menu; ?></b>
                                        </td>
                                        <td>
                                            <span class="text-muted"><?= $mn->link; ?></span>
                                        </td>
                                        <td>
                                            <label class="custom-toggle">
                                                <input type="checkbox" checked>
                                                <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                                            </label>
                                        </td>
                                        <td class="table-actions">
                                            <a href="delete/<?= $mn->id; ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-wrapper">
                <!-- Form controls -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Sub Menu</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert"><i class="fas fa-info-circle"></i>
                            <strong>Daftar Sub Menu : </strong> Anda dapat membuat dan mengatur daftar Sub menu yang anda inginkan.
                        </div>
                        <div class="card-header border-0">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="mb-0">Daftar Sub Menu</h3>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#" class="btn btn-sm btn-danger btn-round btn-icon" data-toggle="modal" data-target="#modal-submenu">
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
                                        <th>Sub Menu</th>
                                        <th>Parent</th>
                                        <th>Link Artikel</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($submenu as $sbm) {
                                    ?>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                                    <label class="custom-control-label" for="table-check-all"></label>
                                                </div>
                                            </th>
                                            <td class="table-user">
                                                <b><?= $sbm->submenu ?></b>
                                            </td>
                                            <td>
                                                <span class="text-muted"><?= $sbm->menu ?></span>
                                            </td>
                                            <td>
                                                <a href="#!" class="font-weight-bold"><?= $sbm->link ?></a>
                                            </td>
                                            <td>
                                                <label class="custom-toggle">
                                                    <input type="checkbox" checked>
                                                    <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>
                                                </label>
                                            </td>
                                            <td class="table-actions">
                                                <a href="deleteSbm\<?= $sbm->id ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Sub Menu">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-wrapper">
                <!-- Form controls -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Artikel</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert"><i class="fas fa-info-circle"></i>
                            <strong>Daftar Artikel : </strong> Anda dapat menambahkan dan menghapus artikel disini.
                        </div>
                        <div class="card-header border-0">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="mb-0">Daftar Artikel</h3>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?= base_url('backend/dashboard/artikel') ?>" class="btn btn-sm btn-danger btn-round btn-icon" data-toggle="tooltip" data-original-title="Tambah Artikel">
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
                                        <th>Judul</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($artikel as $ar) {
                                    ?>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="table-check-all" type="checkbox">
                                                    <label class="custom-control-label" for="table-check-all"></label>
                                                </div>
                                            </th>
                                            <td class="table-user">
                                                <b><?= $ar->judul ?></b>
                                            </td>
                                            <td class="table-actions">
                                                <a href="editArtikel?seq=<?= $ar->id ?>" class="table-action" data-toggle="tooltip" data-original-title="Edit Artikel">
                                                    <i class="fas fa-user-edit"></i>
                                                </a>
                                                <a href="deleteArtikel/<?= $ar->id ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Artikel">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-wrapper">
                <!-- Form controls -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Logo Utama</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                            <strong>Logo : </strong> Silahkan upload gambar untuk digunakan sebagai Logo pada halaman Website.
                        </div>
                        <!-- Card body -->
                        <div class="card-body">

                            <div class="mt-3">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Logo yang digunakan saat ini</td>
                                        <td>
                                            <?php
                                            foreach ($logo as $lg) {
                                            ?>
                                                ​<picture>
                                                    <img src="<?= base_url('assets') ?>/images/logo/<?= $lg->logo ?>" class="img-fluid img-thumbnail" alt="Logo">
                                                </picture>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo form_open_multipart('backend/upload/aksi_upload'); ?>
                                            <div class="form-group">
                                                <label>Upload Logo</label>
                                                <input type="file" class="form-control" id="customFileLang" lang="en" name="berkas">
                                                <button type="submit" class="btn btn-primary btn-sm mt-3">Upload</button>
                                            </div>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-wrapper">
                <!-- Form controls -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Gambar Slider</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert"><i class="fas fa-info-circle"></i>
                            <strong>Slide Show : </strong> Silahkan upload gambar untuk digunakan untuk slide show di halaman Website.
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="mt-3">
                                <?php echo form_open_multipart('backend/upload/slide1'); ?>
                                <div class="form-group">
                                    <label>Upload Gambar</label>
                                    <input type="file" class="form-control" id="customFileLang" lang="en" name="slide">
                                    <!-- <label class="custom-file-label" for="customFileLang"></label> -->
                                    <button type="submit" class="btn btn-sm btn-primary mt-3">Upload</button>
                                </div>
                                </form>
                                <table class="table table-bordered">
                                    <?php
                                    foreach ($slide as $sl) {
                                    ?>
                                        <tr>
                                            <td><?= $sl->gambar ?></td>
                                            <td style="width: 50%;">
                                                ​<picture>
                                                    <img src="<?= base_url('assets') ?>/images/slide/<?= $sl->gambar ?>" class="img-fluid img-thumbnail" alt="<?= $sl->gambar ?>">
                                                </picture>
                                            </td>
                                            <td class="table-actions">
                                                <a href="deleteSlide/<?= $sl->id; ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Gambar">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah menu-->
    <div class="modal fade" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="modal-menu" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Menu</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambah_data" method="POST">
                        <div class="form-group">
                            <label>Nama Menu</label>
                            <input type="text" name="menu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" name="link" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal tambah Sub menu-->
    <div class="modal fade" id="modal-submenu" tabindex="-1" role="dialog" aria-labelledby="modal-submenu" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Sub Menu</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambahSbm" method="POST">
                        <div class="form-group">
                            <label>Nama Sub Menu</label>
                            <input type="text" name="submenu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Parent</label>
                            <select name="parent" id="parent" class="form-control">
                                <?php
                                foreach ($menu as $mn) {
                                ?>
                                    <option value="<?= $mn->menu ?>"><?= $mn->menu ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <select name="link" id="link" class="form-control">
                                <?php
                                foreach ($artikel as $ar) {
                                ?>
                                    <option value="landing/pages/<?= $ar->id ?>"><?= $ar->judul ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal tambah menu kaki-->
    <div class="modal fade" id="modal-kaki" tabindex="-1" role="dialog" aria-labelledby="modal-kaki" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Link Kaki</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambahMenuKaki" method="POST">
                        <div class="form-group">
                            <label>Nama Menu Kaki</label>
                            <input type="text" name="menu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Link Url</label>
                            <input type="text" name="link" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>