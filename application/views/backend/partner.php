<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Mitra Perusahaan</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Mitra Perusahaan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Area</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
            <h3 class="mb-0">Mitra Perusahaan</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dark" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Mitra Perusahaan : </strong> Upload gambar mitra perusahaa untuk ditampilkan dihalaman website utama.
                    </div>
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="mb-0">Gambar</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class="btn btn-sm btn-danger btn-round btn-icon" data-toggle="modal" data-target="#modal-partner" data-original-title="Tambah Gambar">
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
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($partner as $pr) {
                                ?>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="table-check-all" type="checkbox">
                                                <label class="custom-control-label" for="table-check-all"></label>
                                            </div>
                                        </th>
                                        <td>
                                            <a href="#!" class="font-weight-bold"><?= $pr->nama ?></a>
                                        </td>
                                        <td>
                                            <img src="<?= base_url('assets/') ?>images/partner/<?= $pr->gambar ?>" alt="galeri" width="50%" height="50%">
                                        </td>
                                        <td class="table-actions">
                                            <a href="deletePartner/<?= $pr->id ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Menu">
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

    <!-- Modal tambah partner-->
    <div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="modal-partner" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Partner</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('backend/upload/partner_logo'); ?>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Upload Logo atau Gambar Mitra Perusahaan</label>
                        <input type="file" class="form-control" id="customFileLang" lang="en" name="partner">
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