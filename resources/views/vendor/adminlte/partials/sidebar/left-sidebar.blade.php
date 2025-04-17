<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
<<<<<<< HEAD
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
=======
    @include('adminlte::partials.common.brand-logo-xl')
    @else
    @include('adminlte::partials.common.brand-logo-xs')
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
<<<<<<< HEAD
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>


                {{-- Configured sidebar links --}}
                @if(request()->is('dokter*'))
                    <li class="nav-item">
                        <a href="/dokter/periksa" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dokter/obat" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>obat</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/dokter/periksa" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dokter/obat" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>obat</p>
                        </a>
                    </li>
                @endif
=======
                @if(config('adminlte.sidebar_nav_animation_speed') !=300)
                data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                data-accordion="false"
                @endif>

                {{-- Hak Akses berdasarkan Role --}}
                @if(Auth::check() && Auth::user()->role === 'dokter')
                <li class="nav-item">
                    <a href="{{ url('/dokter/periksa') }}" class="nav-link">
                        <i class="fas fa-stethoscope nav-icon"></i>
                        <p>Periksa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/dokter/obat') }}" class="nav-link">
                        <i class="fas fa-pills nav-icon"></i>
                        <p>Obat</p>
                    </a>
                </li>
                @elseif(Auth::check() && Auth::user()->role === 'pasien')
                <li class="nav-item">
                    <a href="{{ url('/pasien/periksa') }}" class="nav-link">
                        <i class="fas fa-notes-medical nav-icon"></i>
                        <p>Periksa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/pasien/riwayat') }}" class="nav-link">
                        <i class="fas fa-history nav-icon"></i>
                        <p>Riwayat Periksa</p>
                    </a>
                </li>
                @endif

                {{-- Menu dari konfigurasi AdminLTE --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
            </ul>
        </nav>
    </div>

</aside>