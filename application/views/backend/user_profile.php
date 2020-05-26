<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Profile</h6>
                </div>
                <!-- <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">&nbsp;</a>
                    <a href="#" class="btn btn-sm btn-neutral">&nbsp;</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card mb-4">
        <?php
        foreach ($detail as $dt) {
        ?>
            <!-- Card header -->
            <div class="card-header">
                <!-- <h3 class="mb-0"><span>Company Profile Of <?= strtoupper($dt->nama_pt) ?></span> <span class="float-right">Tanggal Daftar : <?= substr($dt->date_input, 0, 10) ?></span></h3> -->
            </div>
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <?= $this->session->flashdata('message_image') ?>
                        <?php echo form_open_multipart('backend/dashboard/upload_image_user'); ?>
                        <img src="<?= base_url('assets') ?>/images/user/<?= $dt->image ?>" alt="" class="rounded img-fluid">
                        <div class="custom-file mt-1">
                            <input type="file" class="custom-file-input float-left" name="upload_image" id="customFileLang" lang="en">
                            <label class="custom-file-label" for="customFileLang"></label>
                        </div>
                        <small>Max 1MB | Max width & Height : 500px | Extension: .png, .jpg, .jpeg |</small>
                        <button class="btn btn-sm btn-primary btn-block mt-1" type="submit"><i class="fa fa-upload"></i> Upload</button>
                        </form>
                    </div>
                    <div class="col-sm-9">
                        <?= $this->session->flashdata('message') ?>
                        <form action="<?= base_url('backend/dashboard/editProfile') ?>" method="POST">
                            <div class="row py-3 align-items-center">
                                <div class="col-sm-2 pl-5">
                                    <small class="text-uppercase text-muted font-weight-bold">Nama</small>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" value="<?= $dt->nama ?>">
                                    <input type="hidden" class="form-control" name="id" value="<?= $dt->id ?>">
                                    <!-- <h4 class="mb-0"><?= $dt->nama ?></h4> -->
                                </div>
                            </div>
                            <div class="row py-3 align-items-center">
                                <div class="col-sm-2 pl-5">
                                    <small class="text-uppercase text-muted font-weight-bold">Username</small>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username" value="<?= $dt->username ?>">
                                    <!-- <h4 class="mb-0">Jenis Company</h4> -->
                                </div>
                            </div>
                            <div class="row py-3 align-items-center">
                                <div class="col-sm-2 pl-5">
                                    <small class="text-uppercase text-muted font-weight-bold">Email</small>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="<?= $dt->email ?>">
                                    <!-- <h4 class="mb-0">Company@company.com</h4> -->
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-sm-2 pl-5">
                                    <small class="text-uppercase text-muted font-weight-bold">Deskripsi</small>
                                </div>
                                <div class="col-sm-10 align-items-center">
                                    <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"><?= $dt->deskripsi ?></textarea>
                                    <!-- <h4 class="mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</h4> -->
                                </div>
                            </div>
                            <button class="btn btn-sm btn-primary float-right" type="submit"><i class="fa fa-check"></i> Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>