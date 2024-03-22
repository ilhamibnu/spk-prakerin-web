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
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Import" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-box"></i></a>
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
                                    <th>Nilai Bobot</th>
                                    <th>Rekomendasi</th>
                                    <th>Mitra</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $data )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nisn }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <a href="/detail-siswa/{{ $data->id }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td>
                                        @if($data->rekomendasi != null)
                                        {{ $data->rekomendasi }}
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/data-penghitungan/{{ $data->id }}" class="btn btn-info shadow btn-xs sharp me-1"><i class="fa fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#Edit{{ $data->id }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#Delete{{ $data->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Detail mitra -->
                                <div class="modal fade" id="Detail{{ $data->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                @php


                                                @endphp

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- detail mitra -->
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
    <!-- import -->
    <div class="modal fade" id="Import">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <form action="/data-siswa-import" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Pilih FIle Excel</label>
                                <input class="form-control form-control-sm" name="file" id="formFileSm" type="file">
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
    <!-- import -->
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
