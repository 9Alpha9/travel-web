<div class="fixed w-80 navbarSide__container">
    <div class="p-4 m-4 sideNavbar__navbar">
        <div class="sideNav__sidelogo">
            <h1>BirentCar</h1>
            <span>database systems</span>
        </div>
        <div class="flex flex-col mt-32 sideNavbar__items">
            <div class="navItems__db">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="block navLinks active">
                        <i class="ri-home-fill iconsDB"></i>
                        Dashboard
                    </span>
                </a>
            </div>
            <div class="navItems__db">
                <a href="{{ route('admin.wisata') }}">
                    <span class="block navLinks ">
                        <i class="ri-book-3-fill iconsDB"></i>
                        Wisata Jawa Timur
                    </span>
                </a>
            </div>
            <div class="navItems__db">
                <a href="#">
                    <span class="block navLinks">
                        <i class="ri-database-2-line iconsDB"></i>
                        Data
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>