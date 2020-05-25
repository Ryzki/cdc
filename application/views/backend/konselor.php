<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Konselor</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Konselor</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Karir</li>
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
            <h3 class="mb-0">Konselor</h3>
        </div>
        <!-- Card body -->

        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dark" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Konselor : </strong> Anda dapat menambahkan konselor yang akan tampil dihalaman depan
                    </div>
                    <div class="mb-3">
                        <a href="#" class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modal-konselor"><i class=" fa fa-plus"></i> Tambah Konselor</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($konselor as $ks) {
                                ?>
                                    <tr>
                                        <td class="table-user">
                                            <img src="<?= base_url('assets/images/konselor/') . $ks->image ?> " class="avatar rounded-circle mr-3">
                                            <b><?= $ks->nama ?></b>
                                        </td>
                                        <td>
                                            <span class="text-muted"><?= $ks->email ?></span>
                                        </td>
                                        <td>
                                            <span class="text-muted"><?= $ks->phone ?></span>
                                        </td>
                                        <td class="table-actions">
                                            <a href="deleteKonselor/<?= $ks->id ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Konselor">
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

    <!-- Modal tambah konselor-->
    <div class="modal fade" id="modal-konselor" tabindex="-1" role="dialog" aria-labelledby="modal-konselor" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class=" modal-title" id="modal-title-default">Tambah Konselor</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('backend/upload/tambah_konselor'); ?>
                    <div class="form-group">
                        <label>Nama Konselor</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar Profile</label>
                        <input type="file" class="form-control" id="customFileLang" lang="en" name="konselor">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>