<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Footer Area</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Footer</a></li>
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
            <h3 class="mb-0">Footer</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dark" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Footer Area : </strong> Atur informasi footer untuk ditampilkan dihalaman administrator dan Website utama.
                    </div>
                    <div class="col-md-12 mt-4">
                        <?php
                        echo form_open_multipart('backend/upload/update_footer');
                        foreach ($footer as $ft) {
                        ?>
                            <div class="form-group">
                                <label>Logo Organisasi</label>
                                <table class="table table-bordered mt-2">
                                    <tr>
                                        <td>Logo Organisasi saat ini</td>
                                        <td>
                                            ​<picture>

                                                <img src="<?= base_url('assets/') ?>images/logo-footer/<?= $ft->logo ?>" class="img-fluid img-thumbnail" alt="Logo">
                                            </picture>
                                        </td>
                                        <td>
                                            <input type="file" class="form-control" id="customFileLang" lang="en" name="footer">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $ft->alamat ?>">
                                <input type="hidden" name="id" class="form-control" value="<?= $ft->id ?>">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" name="telp" class="form-control" value="<?= $ft->telp ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $ft->email ?>">
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" name="website" class="form-control" value="<?= $ft->website ?>">
                            </div>
                            <div class="form-group">
                                <label>Judul Footer (ditampilkan di halaman administrator bagian bawah</label>
                                <input type="text" name="footer" class="form-control" value="<?= $ft->footer ?>">
                            </div>
                            <div class="form-group">
                                <label>Tautan -1</label>
                                <input type="text" name="taut1" class="form-control" value="<?= $ft->taut1 ?>">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link1" class="form-control" value="<?= $ft->link1 ?>">
                            </div>
                            <div class="form-group">
                                <label>Tautan -2</label>
                                <input type="text" name="taut2" class="form-control" value="<?= $ft->taut2 ?>">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link2" class="form-control" value="<?= $ft->link2 ?>">
                            </div>
                            <div class="form-group">
                                <label>Tautan -3</label>
                                <input type="text" name="taut3" class="form-control" value="<?= $ft->taut3 ?>">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link3" class="form-control" value="<?= $ft->link3 ?>">
                            </div>
                            <div class="form-group">
                                <label>Tautan -4</label>
                                <input type="text" name="taut4" class="form-control" value="<?= $ft->taut4 ?>">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link4" class="form-control" value="<?= $ft->link4 ?>">
                            </div>
                            <div class="form-group">
                                <label>Tautan -5</label>
                                <input type="text" name="taut5" class="form-control" value="<?= $ft->taut5 ?>">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link5" class="form-control" value="<?= $ft->link5 ?>">
                            </div>
                            <div class="form-group">
                                <label>ID-Facebook</label>
                                <input type="text" name="facebook" class="form-control" value="<?= $ft->facebook ?>">
                            </div>
                            <div class="form-group">
                                <label>ID-Instagram</label>
                                <input type="text" name="instagram" class="form-control" value="<?= $ft->instagram ?>">
                            </div>
                            <div class="form-group">
                                <label>ID-Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="<?= $ft->twitter ?>">
                            </div>
                            <div class="form-group">
                                <label>ID-Youtube</label>
                                <input type="text" name="youtube" class="form-control" value="<?= $ft->youtube ?>">
                            </div>
                            <div class="form-group">
                                <label>ID-Skype</label>
                                <input type="text" name="skype" class="form-control" value="<?= $ft->skype ?>">
                            </div>
                            <div class="form-group">
                                <label>ID-Pinterest</label>
                                <input type="text" name="pinterest" class="form-control" value="<?= $ft->pinterest ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <?php
                        }
                        ?>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>