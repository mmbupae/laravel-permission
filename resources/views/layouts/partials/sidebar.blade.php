<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('web.home.dashboard') }}">Top Cipta Persada</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('web.home.dashboard') }}">TCP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Utama</li>
            <li class="nav-item ">
                <a href="{{ route('web.home.dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Proyek</li>
            <li class="nav-item @if (request()->is('sitac')) {{'active'}} @endif">
                <a href="{{route('web.sitac.index')}}" class="nav-link"><i class="far fa-flag"></i><span>SITAC</span></a></li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-building"></i><span>IMB</span></a>
            </li>

            <li class="menu-header">Tool Pemantau</li>
            <li class="nav-item">
                <a href="{{ route('web.log.activities.index') }}" class="nav-link"><i class="fas fa-file-alt"></i><span>Log Aktivitas</span></a>
            </li>

            <li class="menu-header">Pengaturan</li>
            <li class="nav-item">
                <a href="{{ route('web.users.index') }}" class="nav-link"><i class="fas fa-users"></i><span>Pengguna</span></a>
                {{--<ul class="dropdown-menu">--}}
                    {{--<li class="nav-item"><a href="">Surveyor</a></li>--}}
                    {{--<li class="nav-item"><a href="">Admin</a></li>--}}
                {{--</ul>--}}
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
