<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Vacancy</h6>
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
                    <h3 class="mb-0">List Vacancy</h3>
                </div>
                <div class="col-md-6">
                    <!-- <a href="<?= base_url('backend/company/add_vacancy') ?>" class="btn btn-sm btn-outline-primary float-right">Add Vacancy</a> -->
                    <button type="button" data-toggle="modal" data-target="#modalAddVacancy" class="btn btn-sm btn-outline-primary float-right">Add Vacancy</button>
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
                                <th>Job Title</th>
                                <th>Duedate</th>
                                <th>Position</th>
                                <th>Location</th>
                                <th>Salary</th>
                                <th width='1%'></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($data_vacancy as $data) { ?>
                                <tr class="text-center row<?= $data->id ?>">
                                    <td><?= $i ?></td>
                                    <td><?= $data->job_title ?></td>
                                    <td><?= $data->due_date ?></td>
                                    <td><?= $data->position ?></td>
                                    <td><?= $data->location ?></td>
                                    <td><?= $data->salary ?></td>
                                    <td><button type="button" id="" class="btn btn-sm btn-danger" onclick="delete_vacancy('<?= $data->id ?>')"><i class="fa fa-trash"></i></button> <button data-target="#modalInfoVacancy" data-toggle="modal" type="button" id="" class="btn btn-sm btn-primary" onclick="view_vacancy('<?= $data->id ?>')"><i class="fa fa-info"></i></button></td>
                                </tr>
                            <?php $i++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modalAddVacancy" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Vacancy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url('backend/company/add_vacancy') ?>">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Job Title</label>
                            <input type="text" name="job_title" class="form-control" id="job_title" placeholder="Job Title" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Position</label>
                            <input type="text" name="position" class="form-control" id="position" placeholder="Position" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Location</label>
                            <input type="text" name="location" class="form-control" id="location" placeholder="Position" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Salary</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">IDR</span>
                                </div>
                                <input type="text" name="salary" class="form-control" id="salary" placeholder="Salary" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Due Date</label>
                            <input type="text" name="due_date" class="form-control datepicker" id="" placeholder="Due-Date" value="<?= date("m/d/Y") ?>" required>
                        </div>
                        <label class="form-control-label" for="exampleFormControlInput1">Requirement</label>
                        <textarea name="requirement" id="ckeditor"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submitVacancy" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalInfoVacancy" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vacancy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Job Title</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_job_title"></h4>
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
                            <small class="text-uppercase text-muted font-weight-bold">Location</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_location"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Salary</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_salary"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Due Date</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_due_date"></h4>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Requirement</small>
                        </div>
                        <div class="col-sm-9 align-items-center">
                            <h4 class="mb-0" id="view_requirement"></h4>
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

        function delete_vacancy(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-danger',
                cancelButtonClass: 'btn btn-secondary',
                confirmButtonText: 'Yes, delete it!',
                buttonsStyling: false
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('backend/company/delete_vacancy') ?>",
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        success: function(data) {
                            if (data.statusCode == '200') {
                                Swal.fire(
                                    'Deleted!',
                                    'Vacancy has been deleted.',
                                    'success'
                                )
                                $(".row" + id).hide();
                            } else {
                                alert("Failed Delete Data!!");
                            }
                        }
                    });
                }
            })
        }

        function view_vacancy(id) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/view_vacancy') ?>",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $("#view_job_title").html(data.job_title);
                    $("#view_position").html(data.position);
                    $("#view_location").html(data.location);
                    $("#view_salary").html("IDR " + data.salary);
                    $("#view_due_date").html(data.due_date);
                    $("#view_requirement").html(data.requirement);
                }
            });
        }
    </script>