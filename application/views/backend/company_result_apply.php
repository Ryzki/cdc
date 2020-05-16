<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Apply For A Job</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="#" class="btn btn-sm btn-neutral">&nbsp;</a>
                    <a href="#" class="btn btn-sm btn-neutral">&nbsp;</a>
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
                <div class="col-md-6">
                    <h3 class="mb-0"><?= $sub_title ?></h3>
                </div>
                <div class="col-md-6">
                    <a href="<?= base_url('backend/company/result_applier/approved') ?>" class="btn btn-sm btn-outline-success float-right mx-1">Approved</a>
                    <a href="<?= base_url('backend/company/result_applier/rejected') ?>" class="btn btn-sm btn-outline-warning float-right mx-1">Rejected</a>
                    <a href="<?= base_url('backend/company/result_applier/outstanding') ?>" class="btn btn-sm btn-outline-info float-right mx-1">Outstanding</a>
                    <a href="<?= base_url('backend/company/result_applier/all') ?>" class="btn btn-sm btn-outline-primary float-right mx-1">All</a>
                    <!-- <button type="button" data-toggle="modal" data-target="#modalAdd" class="btn btn-sm btn-outline-primary float-right">Add Agenda</button> -->
                </div>
            </div>
        </div>
        <!-- Card body -->
        <div class="card-body table-responsive">
            <!-- Form groups used in grid -->
            <div class="row">
                <div class="col-md-12">
                    <table id="tableVacancy" class="table table-flush table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Date Apply</th>
                                <th>CV</th>
                                <th width='1%'></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($datas as $data) {
                                if ($data->status == '1') {
                                    $status = '<span class="badge badge-dot">
                                            <i class="bg-success"></i>
                                            <span class="status">Approved</span>
                                          </span>';
                                } elseif ($data->status == '2') {
                                    $status = '<span class="badge badge-dot">
                                            <i class="bg-danger"></i>
                                            <span class="status">Rejected</span>
                                          </span>';
                                } else {
                                    $status = '<span class="badge badge-dot">
                                            <i class="bg-info"></i>
                                            <span class="status">Outstanding</span>
                                          </span>';
                                } ?>
                                <tr class="text-center row<?= $data->id ?>">
                                    <td><?= $i ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->email ?></td>
                                    <td><?= $data->jenis_kelamin ?></td>
                                    <td><?= $data->posisi ?></td>
                                    <td><?= $status ?></td>
                                    <td><?= substr($data->date_apply, 0, 10) ?></td>
                                    <td><a href="<?= base_url('backend/company/download_csv/' . $data->cv) ?>" data-toggle="tooltip" title="Download CV" type="button" id="" class="btn btn-sm btn-info"><i class="fa fa-file"></i> Download CV</a></td>

                                    <td><button data-toggle="tooltip" title="Approve" type="button" id="" class="btn btn-sm btn-success" onclick="result('<?= $data->id ?>', 'Approved', '<?= $data->nama ?>')" <?= ($result !== "outstanding") ? "hidden" : "" ?>><i class="fa fa-check"></i></button> <button data-toggle="tooltip" title="Reject" type="button" id="" class="btn btn-sm btn-danger" onclick="result('<?= $data->id ?>', 'Rejected', '<?= $data->nama ?>')" <?= ($result !== "outstanding") ? "hidden" : "" ?>><i class="fa fa-times"></i></button> <button data-toggle="tooltip" title="Return" type="button" id="" class="btn btn-sm btn-secondary" onclick="result('<?= $data->id ?>', 'Return', '<?= $data->nama ?>')" <?= ($result !== "outstanding") ? "" : "hidden" ?>><i class="fa fa-redo"></i></button> <span data-toggle="modal" data-target="#modalInfo"><button data-toggle="tooltip" title="Detail Applier" type="button" id="" class="btn btn-sm btn-primary" onclick="view_agenda('<?= $data->id ?>')"><i class="fa fa-info"></i></button></span></td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Applier</h5>
                </div>
                <div class="modal-body">
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Job Title</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_title"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Name</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_name"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Email</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_email"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Gender</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_gender"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Position</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_position"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Date Apply</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_date_apply"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">CV</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_cv"></h4>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Message</small>
                        </div>
                        <div class="col-sm-9 align-items-center">
                            <h4 class="mb-0" id="view_message"></h4>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table = $("#tableVacancy").dataTable({
                'paging': true,
                // 'pagingType': "simple",
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': false,
                'autoWidth': false,
                "language": {
                    "paginate": {
                        "previous": "<i class='ni ni-bold-left'></i>",
                        "next": "<i class='ni ni-bold-right'></i>",
                    }
                },
            })

        })

        function result(id, decision, nama) {
            if (decision == "Rejected") {
                status = '2';
                button = 'btn-danger';
            } else if (decision == "Approved") {
                status = '1';
                button = 'btn-success';
            } else if (decision == "Return") {
                status = '0';
                button = 'btn-default';
            }
            Swal.fire({
                title: decision + ' ' + nama + ' ?',
                // text: "You won't be able to revert this!",
                type: 'question',
                showCancelButton: true,
                confirmButtonClass: 'btn ' + button,
                cancelButtonClass: 'btn btn-secondary',
                confirmButtonText: 'Yes, ' + decision + ' it!',
                buttonsStyling: false
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('backend/company/decision') ?>",
                        data: {
                            id: id,
                            status: status
                        },
                        dataType: 'json',
                        success: function(data) {
                            if (data == '200') {
                                Swal.fire({
                                    type: 'success',
                                    title: decision + '!',
                                    text: nama + " has been " + decision,
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                $(".row" + id).hide();
                            } else {
                                alert("Error Update Data!!");
                            }
                        }
                    });
                }
            })
        }

        function view_agenda(id) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/view_apply') ?>",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $("#view_title").html(data.job_title);
                    $("#view_name").html(data.nama);
                    $("#view_email").html(data.email);
                    $("#view_gender").html(data.jenis_kelamin);
                    $("#view_position").html(data.posisi.toUpperCase());
                    $("#view_cv").html('<a href="<?= base_url('backend/company/download_csv/') ?>' + data.cv + '" data-toggle="tooltip" title="Download CV" type="button" id="" class="btn btn-sm btn-info"><i class="fa fa-file"></i> Download CV</a>');
                    $("#view_date_apply").html(data.date_apply.substr(0, 10));
                    $("#view_message").html(data.pesan);
                }
            });
        }
    </script>