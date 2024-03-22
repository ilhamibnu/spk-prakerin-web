@extends('admin.layout.layout')

@section('title', 'Data Penghitungan ' . $siswa->name)

@section('title-bar', 'Data Penghitungan ' . $siswa->name)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Alternatif</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="test-1" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Mitra</th>
                                    @foreach ($kriteria as $data_kriteria)
                                    <th>{{ $data_kriteria->name }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mitra as $detail_mitra)
                                <tr>
                                    <td>{{ $detail_mitra->name }}</td>
                                    @foreach ($kriteria as $data_kriteria)
                                    @foreach ($detail_siswa as $data_detail_siswa)
                                    @php
                                    $id_tanpa_spasi = str_replace(' ', '', $data_kriteria->name);
                                    $bobot = \App\Models\DetailMitra::where('id_mitra', $detail_mitra->id)->where('id_kriteria', $data_kriteria->id)->where('id_kriteria', $data_detail_siswa->id_kriteria)->where('id_nilai_kepentingan', $data_detail_siswa->id_nilai_kepentingan)->first();
                                    if ($bobot) {
                                    echo "<td id='$id_tanpa_spasi'>" . $bobot->bobot . "</td>";
                                    } else {

                                    }
                                    @endphp
                                    @endforeach
                                    @endforeach
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
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
                    <table id="test-2" class="display min-w850">
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
                    <h4 class="card-title">Data Normalisasi</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="test-3" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Mitra</th>
                                    @foreach ($kriteria as $data_kriteria)
                                    <th id="{{ $data_kriteria->id }}">{{ $data_kriteria->name }}</th>
                                    @endforeach

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mitra as $detail_mitra)
                                <tr>
                                    <td>{{ $detail_mitra->name }}</td>
                                    @foreach ($kriteria as $data_kriteria)
                                    @foreach ($detail_siswa as $data_detail_siswa)
                                    @php
                                    $bobot = \App\Models\DetailMitra::where('id_mitra', $detail_mitra->id)->where('id_kriteria', $data_kriteria->id)->where('id_kriteria', $data_detail_siswa->id_kriteria)->where('id_nilai_kepentingan', $data_detail_siswa->id_nilai_kepentingan)->first();
                                    if ($bobot) {
                                    if($data_kriteria->jenis == 'Benefit'){
                                    if($data_kriteria->name == 'Ftth'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var max = Math.max.apply(null, $('#test-1 td#Ftth').map(function() {return $(this).text();}).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = nilai / max * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";

                                    }elseif($data_kriteria->name == 'Cpe'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var max = Math.max.apply(null, $('#test-1 td#Cpe').map(function() {return $(this).text();}).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = nilai / max * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }elseif($data_kriteria->name == 'Absensi'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var max = Math.max.apply(null, $('#test-1 td#Absensi').map(function() {
                                            return $(this).text();
                                        }).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = nilai / max * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }elseif($data_kriteria->name == 'Kjt'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var max = Math.max.apply(null, $('#test-1 td#Kjt').map(function() {
                                            return $(this).text();
                                        }).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = nilai / max * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }elseif($data_kriteria->name == 'Nilai Semester'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var max = Math.max.apply(null, $('#test-1 td#NilaiSemester').map(function() {
                                            return $(this).text();
                                        }).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = nilai / max * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }

                                    }else{
                                    if($data_kriteria->name == 'Ftth'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var min = Math.min.apply(null, $('#test-1 td#Ftth').map(function() {return $(this).text();}).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = min / nilai * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }elseif($data_kriteria->name == 'Cpe'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var min = Math.min.apply(null, $('#test-1 td#Cpe').map(function() {
                                            return $(this).text();
                                        }).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = min / nilai * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }elseif($data_kriteria->name == 'Absensi'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var min = Math.min.apply(null, $('#test-1 td#Absensi').map(function() {
                                            return $(this).text();
                                        }).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = min / nilai * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }elseif($data_kriteria->name == 'Kjt'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var min = Math.min.apply(null, $('#test-1 td#Kjt').map(function() {
                                            return $(this).text();
                                        }).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = min / nilai * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }elseif($data_kriteria->name == 'Nilai Semester'){
                                    // hitung normalisasi dengan javascript
                                    echo "<script>
                                        var nilai = $bobot->bobot;
                                        var min = Math.min.apply(null, $('#test-1 td#NilaiSemester').map(function() {
                                            return $(this).text();
                                        }).get());

                                        var nilai_kriteria = $data_kriteria->bobot;

                                        var normalisasi = min / nilai * nilai_kriteria;

                                        document.write('<td>' + normalisasi + '</td>');

                                    </script>";
                                    }
                                    }


                                    } else {

                                    }
                                    @endphp
                                    @endforeach
                                    @endforeach

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
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
                    <h4 class="card-title">Data Mitra & Nilai Bobot</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="test-4" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>Mitra</th>

                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mitra as $detail_mitra)
                                <tr>
                                    <td>{{ $detail_mitra->name }}</td>


                                    <script>

                                    @foreach ($kriteria as $data_kriteria)
                                    @foreach ($detail_siswa as $data_detail_siswa)
                                    @php
                                    $bobot = \App\Models\DetailMitra::where('id_mitra', $detail_mitra->id)->where('id_kriteria', $data_kriteria->id)->where('id_kriteria', $data_detail_siswa->id_kriteria)->where('id_nilai_kepentingan', $data_detail_siswa->id_nilai_kepentingan)->first();
                                    @endphp


                                        @if($bobot)
                                            @if($data_kriteria->jenis == 'Benefit')
                                                    @if($data_kriteria->name == 'Ftth')
                                                    var maxftth = Math.max.apply(null, $('#test-1 td#Ftth').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_ftth = {{ $data_kriteria->bobot }};
                                                    var nilai_ftth = {{ $bobot->bobot }};
                                                    var normalisasi_ftth = nilai_ftth / maxftth * nilai_kriteria_ftth;
                                                    @elseif($data_kriteria->name == 'Cpe')
                                                    var maxcpe = Math.max.apply(null, $('#test-1 td#Cpe').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_cpe = {{ $data_kriteria->bobot }};
                                                    var nilai_cpe = {{ $bobot->bobot }};
                                                    var normalisasi_cpe = nilai_cpe / maxcpe * nilai_kriteria_cpe;
                                                    @elseif($data_kriteria->name == 'Absensi')
                                                    var maxabsensi = Math.max.apply(null, $('#test-1 td#Absensi').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_absensi = {{ $data_kriteria->bobot }};
                                                    var nilai_absensi = {{ $bobot->bobot }};
                                                    var normalisasi_absensi = nilai_absensi / maxabsensi * nilai_kriteria_absensi;
                                                    @elseif($data_kriteria->name == 'Kjt')
                                                    var maxkjt = Math.max.apply(null, $('#test-1 td#Kjt').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_kjt = {{ $data_kriteria->bobot }};
                                                    var nilai_kjt = {{ $bobot->bobot }};
                                                    var normalisasi_kjt = nilai_kjt / maxkjt * nilai_kriteria_kjt;
                                                    @elseif($data_kriteria->name == 'Nilai Semester')
                                                    var maxnilaisemester = Math.max.apply(null, $('#test-1 td#NilaiSemester').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_nilaisemester = {{ $data_kriteria->bobot }};
                                                    var nilai_nilaisemester = {{ $bobot->bobot }};
                                                    var normalisasi_nilaisemester = nilai_nilaisemester / maxnilaisemester * nilai_kriteria_nilaisemester;
                                                    @else
                                                    @endif
                                            @else
                                                    @if($data_kriteria->name == 'Ftth')
                                                    var minftth = Math.min.apply(null, $('#test-1 td#Ftth').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_ftth = {{ $data_kriteria->bobot }};
                                                    var nilai_ftth = {{ $bobot->bobot }};
                                                    var normalisasi_ftth = minftth / nilai_ftth * nilai_kriteria_ftth;
                                                    @elseif($data_kriteria->name == 'Cpe')
                                                    var mincpe = Math.min.apply(null, $('#test-1 td#Cpe').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_cpe = {{ $data_kriteria->bobot }};
                                                    var nilai_cpe = {{ $bobot->bobot }};
                                                    var normalisasi_cpe = mincpe / nilai_cpe * nilai_kriteria_cpe;
                                                    @elseif($data_kriteria->name == 'Absensi')
                                                    var minabsensi = Math.min.apply(null, $('#test-1 td#Absensi').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_absensi = {{ $data_kriteria->bobot }};
                                                    var nilai_absensi = {{ $bobot->bobot }};
                                                    var normalisasi_absensi = minabsensi / nilai_absensi * nilai_kriteria_absensi;
                                                    @elseif($data_kriteria->name == 'Kjt')
                                                    var minkjt = Math.min.apply(null, $('#test-1 td#Kjt').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_kjt = {{ $data_kriteria->bobot }};
                                                    var nilai_kjt = {{ $bobot->bobot }};
                                                    var normalisasi_kjt = minkjt / nilai_kjt * nilai_kriteria_kjt;
                                                    @elseif($data_kriteria->name == 'Nilai Semester')
                                                    var minnilaisemester = Math.min.apply(null, $('#test-1 td#NilaiSemester').map(function() {
                                                        return $(this).text();
                                                    }).get());
                                                    var nilai_kriteria_nilaisemester = {{ $data_kriteria->bobot }};
                                                    var nilai_nilaisemester = {{ $bobot->bobot }};
                                                    var normalisasi_nilaisemester = minnilaisemester / nilai_nilaisemester * nilai_kriteria_nilaisemester;
                                                    @else
                                                    @endif

                                            @endif

                                        @else

                                        @endif




                                    @endforeach
                                    @endforeach

                                    var total = normalisasi_ftth + normalisasi_cpe + normalisasi_absensi + normalisasi_kjt + normalisasi_nilaisemester;
                                        document.write('<td>' + total + '</td>');
                                </script>


                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#test-1').DataTable({
        autoWidth: true
        , dom: 'Bfrtip',
        pageLength: -1,

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary btn-sm'
                , text: 'Column Visibility',


            },

            {
                extend: 'excel'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },


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



        ]
    , });
    $('#test-2').DataTable({
        autoWidth: true
        , dom: 'Bfrtip',
        pageLength: -1,

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary btn-sm'
                , text: 'Column Visibility',

            },

            {
                extend: 'excel'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },


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



        ]
    , });
    $('#test-3').DataTable({
        autoWidth: true
        , dom: 'Bfrtip',
        pageLength: -1,

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary btn-sm'
                , text: 'Column Visibility',


            },

            {
                extend: 'excel'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },


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



        ]
    , });
    $('#test-4').DataTable({
        autoWidth: true
        , dom: 'Bfrtip',
        pageLength: -1,

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary btn-sm'
                , text: 'Column Visibility',


            },

            {
                extend: 'excel'
                , className: 'btn btn-primary btn-sm'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },


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



        ]
    , });

</script>

<script>
     var nama_mitra = $('#test-4 tbody tr').sort(function(a, b) {
        return $('td', b).eq(1).text() - $('td', a).eq(1).text();
    }).eq(0).find('td').eq(0).text();

    var id_siswa = "{{ $siswa->id }}";


    var token = "{{ csrf_token() }}";
    $.ajax({
        url: "/rekomendasi-siswa"
        , type: "POST"
        , data: {
            nama_mitra: nama_mitra
            , id_siswa: id_siswa    
            , _token: token
        }
        , success: function(data) {
            console.log(data);
        }
    });


</script>

@endsection
