<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon @if(request()->is('dashboard')) mm-active @endif" href="/dashboard" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-internet"></i>
                    <span class="nav-text">Data Kriteria</span>
                </a>
                <ul aria-expanded="false">
                    <li @if(request()->is('data-kriteria')) mm-active @endif><a href="/data-kriteria">Kriteria</a></li>
                    <li @if(request()->is('data-nilai-kepentingan')) mm-active @endif><a href="/data-nilai-kepentingan">Nilai Kepentingan</a></li>
                    <li @if(request()->is('data-ftth')) mm-active @endif><a href="/data-ftth">Ftth</a></li>
                    <li @if(request()->is('data-cpe')) mm-active @endif><a href="/data-cpe">Cpe</a></li>
                    <li @if(request()->is('data-absensi')) mm-active @endif><a href="/data-absensi">Absensi</a></li>
                    <li @if(request()->is('data-kjt')) mm-active @endif><a href="/data-kjt">Kjt</a></li>
                    <li @if(request()->is('data-nilai-semester')) mm-active @endif><a href="/data-nilai-semester">Nilai Semester</a></li>
                </ul>
            </li>
            <li><a href="/data-siswa" class="ai-icon @if(request()->is('data-siswa')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Data Siswa</span>
                </a>
            </li>
            <li><a href="/data-mitra" class="ai-icon @if(request()->is('data-mitra')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Data Mitra</span>
                </a>
            </li>

            @if(Auth::user()->id_role == '1')
            <li><a href="/data-user" class="ai-icon @if(request()->is('data-user')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Data User</span>
                </a>
            </li>
            @else
            @endif

        </ul>


    </div>
</div>
