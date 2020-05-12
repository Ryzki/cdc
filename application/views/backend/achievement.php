<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Achievement</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Achievement</a></li>
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
            <h3 class="mb-0">Informasi Pencapaian</h3>
        </div>
        <!-- Card body -->
        <div class="card-body">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i>
                        <strong>Achievement : </strong> Halaman achievement merupakan informasi pencapaian yang sudah didapat.
                    </div>
                    <div class="col-md-12 mt-4">
                        <?php
                        foreach ($achievement as $ac) {
                        ?>
                            <?php echo form_open_multipart('backend/upload/achievement'); ?>
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" value="<?= $ac->judul ?>">
                                <input type="hidden" name="id" class="form-control" value="<?= $ac->id ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi teks</label>
                                <input type="text" name="deskripsi" class="form-control" value="<?= $ac->deskripsi ?>">
                            </div>
                            <div class=" form-group">
                                <label>Pelatihan</label>
                                <input type="text" name="kursus" class="form-control" value="<?= $ac->kursus ?>">
                            </div>
                            <div class=" form-group">
                                <label>Member</label>
                                <input type="text" name="jobseeker" class="form-control" value="<?= $ac->jobseeker ?>">
                            </div>
                            <div class=" form-group">
                                <label>Mitra Perusahaan</label>
                                <input type="text" name="company" class="form-control" value="<?= $ac->company ?>">
                            </div>
                            <div class=" form-group">
                                <label>Lowongan</label>
                                <input type="text" name="lowongan" class="form-control" value="<?= $ac->lowongan ?>">
                            </div>
                            <div class=" form-group">
                                <label>Gambar Background</label>
                                <input type="file" class="form-control" id="customFileLang" lang="en" name="latar">
                                <table class="table table-bordered mt-2">
                                    <tr>
                                        <td>Gambar latar yang digunakan saat ini</td>
                                        <td>
                                            ​<picture>

                                                <img src="<?= base_url('assets/') ?>images/achievement/<?= $ac->gambar ?>" class="img-fluid img-thumbnail" alt="Logo">
                                            </picture>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        <?php
                        }
                        ?>
                    </div>

                </div>
            </div>

        </div>
    </div>