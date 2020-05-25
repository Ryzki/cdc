<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Hubungi Kami</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
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
            <h3 class="mb-0">Hubungi Kami</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dark" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Hubungi Kami : </strong> Masukan kalimat, gambar dan kontak yang akan ditampilkan pada halaman Hubungi Kami.
                    </div>
                    <div class="col-md-12 mt-4">
                        <?php echo form_open_multipart('backend/upload/update_contact');
                        foreach ($contact as $ct) {
                        ?>
                            <div class="form-group">
                                <label>Teks -1</label>
                                <input type="text" class="form-control" value="<?= $ct->text1 ?>" name="teks1">
                                <input type="hidden" class="form-control" name="id" value="1">
                            </div>
                            <div class="form-group">
                                <label>Teks-2</label>
                                <input type="text" class="form-control" value="<?= $ct->text2 ?>" name="teks2">
                            </div>
                            <div class="form-group">
                                <label>Telp/Hp</label>
                                <input type="text" class="form-control" value="<?= $ct->phone ?>" name="phone">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="<?= $ct->email ?>" name="email">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" value="<?= $ct->alamat ?>" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>Link Google Maps</label>
                                <input type="text" class="form-control" value="<?= $ct->map ?>" name="map">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" class="form-control" id="customFileLang" lang="en" name="contact">
                                <table class="table table-bordered mt-2">
                                    <tr>
                                        <td>Gambar yang digunakan saat ini</td>
                                        <td>
                                            ​<picture>

                                                <img src="<?= base_url('assets/') ?>images/contact/<?= $ct->gambar ?>" class="img-fluid img-thumbnail" alt="gambar" width="50%" height="50%">
                                            </picture>
                                        </td>
                                    </tr>
                                </table>
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