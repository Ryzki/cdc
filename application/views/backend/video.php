<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Video Area</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Video</a></li>
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
            <h3 class="mb-0">Video Area</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dark" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Video : </strong> Masukan judul dan link video promosi anda, link video harus berasal dari youtube channel, jika belum ada buatlah sebuah video terlebih dahulu, upload ke youtube, kemudian taruh link dihalaman ini.
                    </div>
                    <div class="col-md-12 mt-4">
                        <?php echo form_open_multipart('backend/upload/tambah_video');
                        foreach ($video as $vd) {
                        ?>
                            <div class="form-group">
                                <label>Judul Video Promosi anda</label>
                                <input type="text" class="form-control" value="<?= $vd->judul ?>" name="judul">
                                <input type="hidden" class="form-control" name="id" value="1">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi teks</label>
                                <input type="text" class="form-control" value="<?= $vd->deskripsi ?>" name="deskripsi">
                            </div>
                            <div class="form-group">
                                <label>Link Youtube</label>
                                <input type="text" class="form-control" value="<?= $vd->link_youtube ?>" name="youtube">
                            </div>
                            <div class="form-group">
                                <label>Gambar Background</label>
                                <input type="file" class="form-control" id="customFileLang" lang="en" name="video">
                                <table class="table table-bordered mt-2">
                                    <tr>
                                        <td>Gambar yang digunakan saat ini</td>
                                        <td>
                                            ​<picture>

                                                <img src="<?= base_url('assets/') ?>images/video/<?= $vd->gambar ?>" class="img-fluid img-thumbnail" alt="Logo" width="50%" height="50%">
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