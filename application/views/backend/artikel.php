<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Buat Artikel</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Artikel</a></li>
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
            <h3 class="mb-0">Artikel</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-12 mt-4">
                        <form action="tambahArtikel" method="POST">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Menu</label>
                                <select name="menu" id="menu" class="form-control">
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
                                <label>Sub Menu</label>
                                <select name="submenu" id="submenu" class="form-control">
                                    <option value="">None - Direct Link</option>
                                    <?php
                                    foreach ($submenu as $sbm) {
                                    ?>
                                        <option value="<?= $sbm->submenu ?>"><?= $sbm->submenu ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Gambar Utama</label>
                                <input type="file" class="form-control" id="customFileLang" lang="en">
                                <!-- <table class="table table-bordered mt-2">
                                    <tr>
                                        <td>Gambar yang digunakan saat ini</td>
                                        <td>
                                            ​<picture>

                                                <img src="<?= base_url('assets/') ?>images/cdc_unikama.jpg" class="img-fluid img-thumbnail" alt="Logo" width="50%" height="50%">
                                            </picture>
                                        </td>
                                        <td class="table-actions">
                                            <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus Gambar">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table> -->
                            </div>
                            <div class="form-group">
                                <label class="mt-4">Isi Artikel</label>
                                <textarea name="konten" id="ckeditor">
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>