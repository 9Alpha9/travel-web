<div class="fixed w-80 navbarSide__container">
    <div class="p-4 m-4 sideNavbar__navbar">
        <div class="relative flex flex-col flex-wrap sideNav__sidelogo">
            <a href={{ route('admin.dashboard') }}>
                <h1>BirentCar</h1>
            </a>
            <span>database systems</span>
        </div>
        <div class="flex flex-col mt-16 sideNavbar__items">
            @if(Auth::user()->user_type != 'User')
            <div class="navItems__db">
                <a href={{ route('admin.dashboard') }}>
                    <span class="block navLinks @isset($dashboard) {{ $dashboard }} @endif">
                        <i class="ri-home-fill iconsDB"></i>
                        Dashboard
                    </span>
                </a>
            </div>
            <div class="navItems__db">
                <a href={{ route('wisata.index') }}>
                    <span class="block navLinks @isset($wisata) {{ $wisata }} @endif">
                        <i class="ri-book-3-fill iconsDB"></i>
                        List Wisata
                    </span>
                </a>
            </div>
            {{-- <div class="navItems__db">
                <a href="#">
                    <span class="block navLinks">
                        <i class="ri-database-2-line iconsDB"></i>
                        Data
                    </span>
                </a>
            </div> --}}
            <div class="navItems__db">
                <a href={{ route('wisata.requestView') }}>
                    <span class="block navLinks @isset($pengajuan) {{ $pengajuan }} @endif">
                        <i class="ri-survey-fill iconsDB"></i>
                        List Pengajuan
                    </span>
                </a>
            </div>
            <div class="navItems__db">
                <a href={{ route('kategori.index') }}>
                    <span class="block navLinks @isset($kategori) {{ $kategori }} @endif">
                        <i class="ri-archive-drawer-fill iconsDB"></i>
                        Add Tipe Wahana
                    </span>
                </a>
            </div>
            <div class="navItems__db">
                <a href={{ route('fasilitas.index') }}>
                    <span class="block navLinks @isset($fasilitas) {{ $fasilitas }} @endif">
                        <i class="ri-archive-drawer-fill iconsDB"></i>
                        Add Fasilitas Wisata
                    </span>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
