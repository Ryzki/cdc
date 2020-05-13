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
            <div class="row">
                <div class="col-7 text-left">
                    <h3 class="mb-0">Galeri Area</h3>
                </div>
                <div class="col-5 text-left">
                    <button class="btn btn-sm btn-success mb-0" data-toggle="modal" data-target="#modal-album"><i class="fas fa-book"></i> Tambah Album</button>
                    <button class="btn btn-sm btn-danger mb-0" data-toggle="modal" data-target="#modal-gambar"><i class="fa fa-file"></i> Tambah Gambar</button>
                    <button class="btn btn-sm btn-warning mb-0" data-toggle="modal" data-target="#modal-delete"><i class="fas fa-trash"></i> Hapus Album</button>
                </div>
            </div>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="text-center">
                <ul class="nav nav-pills mb-5">
                    <?php
                    $r = "";
                    foreach ($galeri as $gr) {
                    ?>
                        <li class=""> <a href="#tab-<?= $gr->id ?>" class="btn btn-primary mx-2" data-toggle="tab"> <?= $gr->menu ?></a> </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- Form groups used in grid -->
            <div class="tab-content p-0">
                <?php
                foreach ($galeri as $gr) {
                    $tab = $gr->id;
                ?>
                    <div class="tab-pane fade active in show" id="tab-<?= $tab ?>">
                        <div class="row">
                            <?php $aaa = $this->db->get_where('tbl_galeri_gb', ['menu' => $tab])->result();
                            foreach ($aaa as $gal) {
                            ?>
                                <div class="col-md-3">
                                    <div class="card">
                                        <!-- Card image -->
                                        <img class="card-img-top" src="<?= base_url('assets') ?>/images/gallery/<?= $gal->gambar ?>">
                                        <div class="card-body text-center py-2">
                                            <a href="deleteGaleri/<?= $gal->id ?>" class="btn btn-icon-only rounded-circle btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


    <!-- Modal tambah album-->
    <div class="modal fade" id="modal-album" tabindex="-1" role="dialog" aria-labelledby="modal-album" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Album</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="tambah_album" method="POST">
                        <div class="form-group">
                            <label>Nama Album</label>
                            <input type="text" name="album" class="form-control">
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
    <!-- Modal tambah gambar-->
    <div class="modal fade" id="modal-gambar" tabindex="-1" role="dialog" aria-labelledby="modal-gambar" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Gambar</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('backend/upload/galeri_gb'); ?>
                    <div class="form-group">
                        <label>Upload Gambar</label>
                        <input type="file" class="form-control" id="customFileLang" lang="en" name="gal">
                    </div>
                    <div class="form-group">
                        <label>Nama Album</label>
                        <select name="album" class="form-control">
                            <?php
                            foreach ($galeri as $gr) {
                            ?>
                                <option value="<?= $gr->id ?>"><?= $gr->menu ?></option>
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
    <!-- Modal tambah gambar-->
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Hapus Album</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert"><i class="fas fa-info-circle"></i>
                        Menghapus album juga menghapus semua gambar terkait dengan album tersebut.
                    </div>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Album</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($galeri as $gal) {
                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $gal->menu; ?></td>
                                    <td class="table-actions">
                                        <a href="deleteAlbum/<?= $gal->id; ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Album">
                                            <i class="fas fa-trash"> Hapus</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
                </>
            </div>
        </div>