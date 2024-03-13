<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            @if(Auth::user()->id_role == '1')
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
            <li><a href="/data-user" class="ai-icon @if(request()->is('data-user')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Data User</span>
                </a>
            </li>
            {{-- <li><a href="/data-penghitungan" class="ai-icon @if(request()->is('data-penghitungan')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Data Penghitungan</span>
                </a>
            </li> --}}



            @else
            <li><a class="ai-icon @if(request()->is('dashboard')) mm-active @endif" href="/dashboard" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

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
            @endif


        </ul>


    </div>
</div>
