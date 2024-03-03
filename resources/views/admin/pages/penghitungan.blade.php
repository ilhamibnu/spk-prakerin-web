@extends('admin.layout.layout')

@section('title', 'Penghitungan')

@section('title-bar', 'Penghitungan')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Alternatif </h4>
                </div>
                <div class="table-responsive">
                    <table id="test2" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Ftth</th>
                                <th>Cpe</th>
                                <th>Absensi</th>
                                <th>Kjt</th>
                                <th>Nilai Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitra as $data )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->ftth->bobot }}</td>
                                <td>{{ $data->cpe->bobot }}</td>
                                <td>{{ $data->absensi->bobot }}</td>
                                <td>{{ $data->kjt->bobot }}</td>
                                <td>{{ $data->nilaiSemester->bobot }}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kriteria</h4>
                </div>
                <div class="table-responsive">
                    <table id="test" class="display min-w850">
                        <thead>
                            <tr>
                                <th>Detail</th>
                                @foreach ($kriteria as $data )
                                <th>{{ $data->name }}</th>
                                @endforeach

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bobot</td>
                                @foreach ($kriteria as $data )
                                <td>{{ $data->bobot }}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                @foreach ($kriteria as $data )
                                <td>{{ $data->jenis }}</td>
                                @endforeach
                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Normalisasi Matrix R</h4>
                </div>
                <div class="table-responsive">
                    <table id="test3" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                @foreach ($kriteria as $data )
                                <th>{{ $data->name }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitra as $data )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>

                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Ftth')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->ftth->bobot / $nilaiftthtertinggi}}
                                    @else
                                    {{ $nilaiftthterendah / $data->ftth->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Cpe')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->cpe->bobot / $nilaicpetertinggi}}
                                    @else
                                    {{ $nilaicpeterendah / $data->cpe->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Absensi')->first();
                                    @endphp

                                    @if($data2->jenis == 'Benefit')
                                    {{ $data->absensi->bobot / $nilaiabsensitertinggi}}
                                    @else
                                    {{ $nilaiabsensiterendah / $data->absensi->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Kjt')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->kjt->bobot / $nilaikjttertinggi}}
                                    @else
                                    {{ $nilaikjterendah / $data->kjt->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Nilai Semester')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->nilaisemester->bobot / $nilaisemestertertinggi}}
                                    @else
                                    {{ $nilaisemesterterendah / $data->nilaisemester->bobot}}
                                    @endif
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nilai V</h4>
                </div>
                <div class="table-responsive">
                    <table id="test4" class="display min-w850">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                @foreach ($kriteria as $data )
                                <th>{{ $data->name }}</th>
                                @endforeach
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitra as $data )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>

                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Ftth')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->ftth->bobot / $nilaiftthtertinggi * $data2->bobot}}
                                    @else
                                    {{ $nilaiftthterendah / $data->ftth->bobot * $data2->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Cpe')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->cpe->bobot / $nilaicpetertinggi * $data2->bobot}}
                                    @else
                                    {{ $nilaicpeterendah / $data->cpe->bobot * $data2->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Absensi')->first();
                                    @endphp

                                    @if($data2->jenis == 'Benefit')
                                    {{ $data->absensi->bobot / $nilaiabsensitertinggi * $data2->bobot}}
                                    @else
                                    {{ $nilaiabsensiterendah / $data->absensi->bobot * $data2->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Kjt')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->kjt->bobot / $nilaikjttertinggi * $data2->bobot}}
                                    @else
                                    {{ $nilaikjterendah / $data->kjt->bobot * $data2->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Nilai Semester')->first();
                                    @endphp

                                    @if($data2->jenis == "Benefit")
                                    {{ $data->nilaisemester->bobot / $nilaisemestertertinggi * $data2->bobot}}
                                    @else
                                    {{ $nilaisemesterterendah / $data->nilaisemester->bobot * $data2->bobot}}
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $data2 = $kriteria->where('name', 'Nilai Semester')->first();
                                    @endphp
                                    @php
                                    $data3 = $kriteria->where('name', 'Ftth')->first();
                                    @endphp
                                    @php
                                    $data4 = $kriteria->where('name', 'Cpe')->first();
                                    @endphp
                                    @php
                                    $data5 = $kriteria->where('name', 'Absensi')->first();
                                    @endphp
                                    @php
                                    $data6 = $kriteria->where('name', 'Kjt')->first();
                                    @endphp




                                    @if($data2->jenis == "Benefit")
                                    @php
                                    $nilai_data2 = $data->nilaisemester->bobot / $nilaisemestertertinggi * $data2->bobot
                                    @endphp
                                    @else
                                    @php
                                    $nilai_data2 = $nilaisemesterterendah / $data->nilaisemester->bobot * $data2->bobot
                                    @endphp
                                    @endif

                                    @if($data3->jenis == "Benefit")
                                    @php
                                    $nilai_data3 = $data->ftth->bobot / $nilaiftthtertinggi * $data3->bobot
                                    @endphp
                                    @else
                                    @php
                                    $nilai_data3 = $nilaiftthterendah / $data->ftth->bobot * $data3->bobot
                                    @endphp
                                    @endif

                                    @if($data4->jenis == "Benefit")
                                    @php
                                    $nilai_data4 = $data->cpe->bobot / $nilaicpetertinggi * $data4->bobot
                                    @endphp
                                    @else
                                    @php
                                    $nilai_data4 = $nilaicpeterendah / $data->cpe->bobot * $data4->bobot
                                    @endphp
                                    @endif

                                    @if($data5->jenis == "Benefit")
                                    @php
                                    $nilai_data5 = $data->absensi->bobot / $nilaiabsensitertinggi * $data5->bobot
                                    @endphp
                                    @else
                                    @php
                                    $nilai_data5 = $nilaiabsensiterendah / $data->absensi->bobot * $data5->bobot
                                    @endphp
                                    @endif

                                    @if($data6->jenis == "Benefit")
                                    @php
                                    $nilai_data6 = $data->kjt->bobot / $nilaikjttertinggi * $data6->bobot
                                    @endphp
                                    @else
                                    @php
                                    $nilai_data6 = $nilaikjterendah / $data->kjt->bobot * $data6->bobot
                                    @endphp
                                    @endif

                                    {{ $nilai_data2 + $nilai_data3 + $nilai_data4 + $nilai_data5 + $nilai_data6}}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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
<script>
    $('#test2').DataTable({
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
<script>
    $('#test3').DataTable({
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
<script>
    $('#test4').DataTable({
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
