<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Agenda</h6>
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
                    <h3 class="mb-0">List Agenda</h3>
                </div>
                <div class="col-md-6">
                    <!-- <a href="<?= base_url('backend/company/add_vacancy') ?>" class="btn btn-sm btn-outline-primary float-right">Add Vacancy</a> -->
                    <button type="button" data-toggle="modal" data-target="#modalAdd" class="btn btn-sm btn-outline-primary float-right">Add Agenda</button>
                </div>
            </div>
        </div>
        <!-- Card body -->
        <div class="card-body table-responsive">
            <table id="tableVacancy" class="table table-flush table-hover table-striped">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Title</th>
                        <th>Date Create</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th width='1%'></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($data_agenda as $data) { ?>
                        <tr class="text-center row<?= $data->id ?>">
                            <td><?= $i ?></td>
                            <td><?= $data->title ?></td>
                            <td><?= $data->date_input ?></td>
                            <td><?= $data->time_1 . " - " . $data->time_2 ?></td>
                            <td><?= $data->location ?></td>
                            <td><button type="button" id="" class="btn btn-sm btn-danger" onclick="delete_agenda('<?= $data->id ?>')"><i class="fa fa-trash"></i></button> <button data-target="#modalInfo" data-toggle="modal" type="button" id="" class="btn btn-sm btn-primary" onclick="view_agenda('<?= $data->id ?>')"><i class="fa fa-info"></i></button></td>
                        </tr>
                    <?php $i++;
                    } ?>
                </tbody>
            </table>

        </div>
    </div>

    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Agenda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?= base_url('backend/company/add_agenda') ?>">
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                        </div>
                        <div class="row">
                            <div class='col-sm-6 mt-3'>
                                <div class="form-group">
                                    <label class="form-control-label" for="exampleFormControlInput1">Time 1</label>
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' name="time_1" class="form-control" />
                                        <span class="input-group-addon input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="button-addon2"> <span class="fa fa-calendar"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class='col-sm-6 mt-3'>
                                <div class="form-group">
                                    <label class="form-control-label" for="exampleFormControlInput1">Time 2</label>
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input type='text' name="time_2" class="form-control" />
                                        <span class="input-group-addon input-group-append">
                                            <button class="btn btn-outline-primary" type="button" id="button-addon3"> <span class="fa fa-calendar"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Date</label>
                            <input type="text" name="date" class="form-control datepicker" id="" placeholder="Due-Date" value="<?= date("m/d/Y") ?>" required>
                        </div>
                        <label class="form-control-label" for="exampleFormControlInput1">Time</label>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" name="time_1" class="form-control" id="time_1" placeholder="00.00 AM" required>
                            </div>
                            <div class="col">
                                <input type="text" name="time_2" class="form-control" id="time_2" placeholder="00.00 PM" required>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label class="form-control-label" for="exampleFormControlInput1">Location</label>
                            <input type="text" name="location" class="form-control" id="location" placeholder="Location" required>
                        </div>
                        <label class="form-control-label" for="exampleFormControlInput1">Content</label>
                        <textarea name="content" id="ckeditor"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submitVacancy" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agenda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Title</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_title"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Date</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_date"></h4>
                        </div>
                    </div>
                    <div class="row py-3 align-items-center">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Time</small>
                        </div>
                        <div class="col-sm-9">
                            <h4 class="mb-0" id="view_time"></h4>
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
                    <div class="row py-3">
                        <div class="col-sm-3 pl-5">
                            <small class="text-uppercase text-muted font-weight-bold">Content</small>
                        </div>
                        <div class="col-sm-9 align-items-center">
                            <h4 class="mb-0" id="view_content"></h4>
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

            $('#datetimepicker1').datetimepicker({
                icons: {
                    time: "fa fa-clock",
                    date: "fa fa-calendar-day",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                },
                format: 'YYYY-MM-DD HH:mm'
            });

            $('#datetimepicker2').datetimepicker({
                icons: {
                    time: "fa fa-clock",
                    date: "fa fa-calendar-day",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                },
                format: 'YYYY-MM-DD HH:mm'
            });

        })

        function delete_agenda(id) {
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
                        url: "<?= base_url('backend/company/delete_agenda') ?>",
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        success: function(data) {
                            if (data.statusCode == '200') {
                                Swal.fire({
                                    type: 'success',
                                    title: 'Deleted!',
                                    text: "Agenda has been deleted.",
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                $(".row" + id).hide();
                            } else {
                                alert("Failed Delete Data!!");
                            }
                        }
                    });
                }
            })
        }

        function view_agenda(id) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('backend/company/view_agenda') ?>",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data)
                    $("#view_title").html(data.title);
                    $("#view_date").html(data.date);
                    $("#view_time").html(data.time_1 + " - " + data.time_2);
                    $("#view_location").html(data.location);
                    $("#view_content").html(data.content);
                }
            });
        }
    </script>