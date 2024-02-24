<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon @if(request()->is('dashboard')) mm-active @endif" href="/dashboard" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>

            </li>
            <li><a href="/data-kriteria" class="ai-icon @if(request()->is('data-kriteria')) mm-active @endif" aria-expanded="false">
                    <i class="flaticon-381-bookmark-1"></i>
                    <span class="nav-text">Data Kriteria</span>
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
