<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/styles/dashboard/dashboardStyles.css') }}">

    {{-- Import Tailwind Css Components --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Import Remix Css Components --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Import Google Fonts Components --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&family=Poppins:wght@100;200;300;500;800&display=swap"
        rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <div class="relative flex dashboardContainer__inner">
        <div class="fixed w-80 navbarSide__container">
            <div class="p-4 m-4 sideNavbar__navbar">
                <div class="sideNav__sidelogo">
                    <h1>BirentCar</h1>
                    <span>database systems</span>
                </div>
                <div class="flex flex-col mt-32 sideNavbar__items">
                    <div class="navItems__db">
                        <a href="#">
                            <span class="block navLinks active">
                                <i class="ri-home-fill iconsDB"></i>
                                Dashboard
                            </span>
                        </a>
                    </div>
                    <div class="navItems__db">
                        <a href="#">
                            <span class="block navLinks">
                                <i class="ri-book-3-fill iconsDB"></i>
                                Products
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
        <div class="relative sideDB__content">
            <div class=" sideDB__navtopContainer">
                <div class="fixed z-50 flex justify-between px-12 navTop__fixed">
                    <div class="relative flex align-middle searchTop__nav whitespace-nowrap">
                        <button type="submit" class="searchButton">
                            <i class="ri-search-line"></i>
                        </button>
                        <input type="search" name="" placeholder="Masukkan kata kunci" id="cariDashboard"
                            class="searchBar__input">
                    </div>
                    <div class="flex items-center gap-4 p-3 align-middle px-60 topNav__items">
                        <span class="block topNav__links whitespace-nowrap">
                            <a href="#">nav link</a>
                        </span>
                        <div class="navProfiles profilesDB">
                            <div class="flex items-center gap-3 topNav__linkspicture">
                                <img src="{{ asset('asset/img/avatar.png') }}" alt="Dashboard profile pictures"
                                    class="object-cover rounded-full h-14 w-14">
                                <div class="flex flex-col profilePictures__DB">
                                    <h2 class="font-semibold whitespace-nowrap">Super Admin</h2>
                                    <button class="text-left">
                                        <span class="py-1 text-xs">
                                            <i class="ri-logout-circle-r-line"></i> Keluar
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative mt-10 contentContainer">
                <div class="relative w-full pt-20 contentWrapper__dashboard">
                    Content
                </div>
            </div>
        </div>
    </div>

</body>

</html>