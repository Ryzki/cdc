<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Testimoni</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Testimoni</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Klien</li>
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
            <h3 class="mb-0">Testimoni</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                <strong>Testimoni klien : </strong> Upload gambar utama klien /alumni, kemudian tambahkan beberapa testimoni dari mereka.
            </div>
            <!-- Card body -->
            <div class="card-body">
                <div class="mt-3">
                    <table class="table table-bordered">
                        <tr>
                            <td>Gambar yang digunakan saat ini</td>
                            <td>
                                <?php
                                foreach ($gambar as $ts) {
                                ?>
                                    ​<picture>
                                        <img src="<?= base_url('assets/') ?>images/testimoni/<?= $ts->gb_utama ?>" class="img-fluid img-thumbnail" alt="Logo">
                                    </picture>
                                <?php
                                }
                                ?>
                            </td>
                            <td style="width: 30%;">
                                <?php echo form_open_multipart('backend/upload/tambah_testimoni');
                                ?>
                                <div class="form-group">
                                    <label>Upload Gambar Utama</label>
                                    <input type="file" class="form-control" id="customFileLang" lang="en" name="testimoni">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm mt-3">Upload</button>
                                </form>
                            </td>
                        </tr>
                    </table>
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
                        <h3 class="mb-0">Kata mereka</h3>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                            <strong>Testimoni klien : </strong> Tambahkan testimoni dari alumni maupun mitra perusahaan.
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="card-header border-0">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="mb-0">Says</h3>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="btn btn-sm btn-danger btn-round btn-icon" data-toggle="modal" data-target="#modal-testimoni" data-original-title="Tambah Gambar">
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
                                            <th>Nama</th>
                                            <th>Profesi</th>
                                            <th>Testimoni</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($list as $ls) {
                                        ?>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" id="table-check-all" type="checkbox">
                                                        <label class="custom-control-label" for="table-check-all"></label>
                                                    </div>
                                                </th>
                                                <td>
                                                    <span class="text-muted"><?= $ls->nama ?></span>
                                                </td>
                                                <td>
                                                    <a href="#!" class="font-weight-bold"><?= $ls->profesi ?></a>
                                                </td>
                                                <td>
                                                    <span class="text-muted"><?= $ls->testimoni ?></span>
                                                </td>
                                                <td>
                                                    <img src="<?= base_url('assets/') ?>images/<?= $ls->gambar ?>" alt="galeri">
                                                </td>
                                                <td class="table-actions">
                                                    <a href="deleteTestimoni/<?= $ls->id ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
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
    </div>

    <!-- Modal tambah menu-->
    <div class="modal fade" id="modal-testimoni" tabindex="-1" role="dialog" aria-labelledby="modal-testimoni" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Testimoni</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('backend/upload/testimoni_gambar'); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Profesi</label>
                        <input type="text" name="profesi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Testimoni</label>
                        <input type="text" name="testimoni" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Upload Photo</label>
                        <input type="file" class="form-control" id="customFileLang" lang="en" name="photo">
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