@extends('admin.layout.layout')

@section('title', 'Data Siswa')

@section('title-bar', 'Data Siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Siswa</h4>
                </div>
                <div class="text-end m-2">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Add" class="btn btn-success shadow btn-xs sharp me-1"><i class="fa fa-add"></i></a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mt-2">



                        <?php

                $nomer = 1;

                ?>

                        @foreach($errors->all() as $error)
                        <li>{{ $nomer++ }}. {{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="test" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nisn</th>
                                    <th>Name</th>
                                    <th>Ftth</th>
                                    <th>Cpe</th>
                                    <th>Absensi</th>
                                    <th>Kjt</th>
                                    <th>Nilai Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nisn }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->ftth->name }}</td>
                                    <td>{{ $data->cpe->name }}</td>
                                    <td>{{ $data->absensi->name }}</td>
                                    <td>{{ $data->kjt->name }}</td>
                                    <td>{{ $data->nilaiSemester->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#Edit{{ $data->id }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#Delete{{ $data->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- edit -->
                                <div class="modal fade" id="Edit{{ $data->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="/data-siswa/{{ $data->id }}" method="post">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Nisn</label>
                                                            <input type="text" value="{{ $data->nisn }}" name="nisn" class="form-control" placeholder="1234567890">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="John">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Ftth</label>
                                                            <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                                                <select name="id_ftth" class="form-control default-select form-control-sm">
                                                                    <option selected value="{{ $data->id_ftth }}">{{ $data->ftth->name }}</option>
                                                                    @foreach ($ftth as $ftth)
                                                                    <option value="{{ $ftth->id }}">{{ $ftth->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Cpe</label>
                                                            <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                                                <select name="id_cpe" class="form-control default-select form-control-sm">
                                                                    <option selected value="{{ $data->id_cpe }}">{{ $data->cpe->name }}</option>
                                                                    @foreach ($cpe as $cpe)
                                                                    <option value="{{ $cpe->id }}">{{ $cpe->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Absensi</label>
                                                            <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                                                <select name="id_absensi" class="form-control default-select form-control-sm">
                                                                    <option selected value="{{ $data->id_absensi }}">{{ $data->absensi->name }}</option>
                                                                    @foreach ($absensi as $absensi)
                                                                    <option value="{{ $absensi->id }}">{{ $absensi->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Kjt</label>
                                                            <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                                                <select name="id_kjt" class="form-control default-select form-control-sm">
                                                                    <option selected value="{{ $data->id_kjt }}">{{ $data->kjt->name }}</option>
                                                                    @foreach ($kjt as $kjt)
                                                                    <option value="{{ $kjt->id }}">{{ $kjt->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label>Nilai Semester</label>
                                                            <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                                                <select name="id_nilai_semester" class="form-control default-select form-control-sm">
                                                                    <option selected value="{{ $data->id_nilai_semester }}">{{ $data->nilaiSemester->name }}</option>
                                                                    @foreach ($nilaisemester as $nilaisemester)
                                                                    <option value="{{ $nilaisemester->id }}">{{ $nilaisemester->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit -->
                                <!-- delete -->
                                <div class="modal fade" id="Delete{{ $data->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">Anda Yakin Akan Menghapus {{ $data->name }} ?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                <form action="/data-siswa/{{ $data->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add -->
    <div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form action="/data-siswa" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="form-group">
                                <label>Nisn</label>
                                <input type="text" name="nisn" class="form-control" placeholder="1234567890">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="John">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Ftth</label>
                                <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                    <select name="id_ftth" class="form-control default-select form-control-sm">
                                        <option selected disabled>Pilih Ftth</option>
                                        @foreach ($ftth as $ftth)
                                        <option value="{{ $ftth->id }}">{{ $ftth->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Cpe</label>
                                <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                    <select name="id_cpe" class="form-control default-select form-control-sm">
                                        <option selected disabled>Pilih Cpe</option>
                                        @foreach ($cpe as $cpe)
                                        <option value="{{ $cpe->id }}">{{ $cpe->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Absensi</label>
                                <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                    <select name="id_absensi" class="form-control default-select form-control-sm">
                                        <option selected disabled>Pilih Absensi</option>
                                        @foreach ($absensi as $absensi)
                                        <option value="{{ $absensi->id }}">{{ $absensi->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Kjt</label>
                                <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                    <select name="id_kjt" class="form-control default-select form-control-sm">
                                        <option selected disabled>Pilih Kjt</option>
                                        @foreach ($kjt as $kjt)
                                        <option value="{{ $kjt->id }}">{{ $kjt->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>Nilai Semester</label>
                                <div class="dropdown bootstrap-select form-control default-select form-control-sm">
                                    <select name="id_nilai_semester" class="form-control default-select form-control-sm">
                                        <option selected disabled>Pilih Nilai Semester</option>
                                        @foreach ($nilaisemester as $nilaisemester)
                                        <option value="{{ $nilaisemester->id }}">{{ $nilaisemester->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- add -->
</div>
@endsection

@section('script')

@if(Session::get('store'))
<script>
    toastr.success("Data Berhasil Ditambahkan", "Info", {
        timeOut: 5000
        , closeButton: !0
        , debug: !1
        , newestOnTop: !0
        , progressBar: !0
        , positionClass: "toast-top-right"
        , preventDuplicates: !0
        , onclick: null
        , showDuration: "300"
        , hideDuration: "1000"
        , extendedTimeOut: "1000"
        , showEasing: "swing"
        , hideEasing: "linear"
        , showMethod: "fadeIn"
        , hideMethod: "fadeOut"
        , tapToDismiss: !1
    })

</script>
@endif

@if(Session::get('update'))
<script>
    toastr.success("Data Berhasil Diubah", "Info", {
        timeOut: 5000
        , closeButton: !0
        , debug: !1
        , newestOnTop: !0
        , progressBar: !0
        , positionClass: "toast-top-right"
        , preventDuplicates: !0
        , onclick: null
        , showDuration: "300"
        , hideDuration: "1000"
        , extendedTimeOut: "1000"
        , showEasing: "swing"
        , hideEasing: "linear"
        , showMethod: "fadeIn"
        , hideMethod: "fadeOut"
        , tapToDismiss: !1
    })

</script>
@endif

@if(Session::get('destroy'))
<script>
    toastr.success("Data Berhasil Dihapus", "Info", {
        timeOut: 5000
        , closeButton: !0
        , debug: !1
        , newestOnTop: !0
        , progressBar: !0
        , positionClass: "toast-top-right"
        , preventDuplicates: !0
        , onclick: null
        , showDuration: "300"
        , hideDuration: "1000"
        , extendedTimeOut: "1000"
        , showEasing: "swing"
        , hideEasing: "linear"
        , showMethod: "fadeIn"
        , hideMethod: "fadeOut"
        , tapToDismiss: !1
    })

</script>
@endif

<script>
    $('#test').DataTable({
        autoWidth: true,
        // "lengthMenu": [
        //     [16, 32, 64, -1],
        //     [16, 32, 64, "All"]
        // ]
        dom: 'Bfrtip',


        lengthMenu: [
            [10, 25, 50, -1]
            , ['10 rows', '25 rows', '50 rows', 'Show all']
        ],

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary btn-sm'
                , text: 'Column Visibility',
                // columns: ':gt(0)'


            },

            {

                extend: 'pageLength'
                , className: 'btn btn-primary btn-sm'
                , text: 'Page Length',
                // columns: ':gt(0)'
            },


            // 'colvis', 'pageLength',

            {
                extend: 'excel'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // {
            //     extend: 'csv',
            //     className: 'btn btn-primary btn-sm',
            //     exportOptions: {
            //         columns: [0, ':visible']
            //     }
            // },
            {
                extend: 'pdf'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            {
                extend: 'print'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // 'pageLength', 'colvis',
            // 'copy', 'csv', 'excel', 'print'

        ]
    , });

</script>

@endsection