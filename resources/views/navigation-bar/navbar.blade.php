{{-- Navbar --}}
<div class="fixed z-10 navigation__header">
    <nav class="navbar">
        <a class="brand" href="{{ route('landingpage') }}">
            <figure class="brand__logo">
                {{-- <img src="/component/assets/bagian-logo.png" alt=""> --}}
            </figure>
            <div class="brand__header--text">
                Birentcar Travel
            </div>
        </a>
        <input type="checkbox" id="nav" class="hidden">
        <label for="nav" class="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <div class="wrapper">
            <ul class="items-center gap-1 menu">
                <li class="menu-item active">
                    <a href="/">Home</a>
                </li>
                <li class="menu-item">
                    <a href="#">Tempat Wisata</a>
                </li>
                {{-- <li class="menu-item">
                    <a href="{{ route('profile.index') }}">Metode SMART</a>
                </li> --}}
                <div class="items-center px-2 m-auto login__content">
                    @auth
                    <div class="flex items-center gap-3 login_setup whitespace-nowrap">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="inline-flex items-center gap-4 px-4 py-2 text-sm font-medium text-center text-white rounded-lg"
                            type="button">
                            <div class="gap-4 avatar__user">
                                <figure class="w-8">
                                    <img class="object-cover w-8 h-8 rounded-full"
                                        src="{{ !empty(Auth::user()->image) ? !empty(Auth::user()->social_id) ? Auth::user()->image : asset('asset/img/avatar/'.Auth::user()->image) : asset('asset/img/avatar.png') }}"
                                        alt="">
                                </figure>
                            </div>
                            {{ Auth::user()->full_name }}
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="dropdown"
                            class="z-10 hidden w-56 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <a href="{{ route('profile.index') }}">
                                    <li
                                        class="block w-full px-4 py-2 info__payStatus hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-start">
                                        <i class="text-lg ri-account-circle-fill"></i>
                                        <span class="px-2">
                                            Profile Saya
                                        </span>
                                    </li>
                                </a>
                                @if(Auth::user()->user_type != 'superAdmin')
                                <a href="{{ route('informasi.index') }}">
                                    <li
                                        class="block w-full px-4 py-2 info__payStatus hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-start">
                                        <i class="text-lg ri-shopping-bag-line"></i>
                                        <span class="px-2">
                                            List Pembelian
                                        </span>
                                    </li>
                                </a>
                                <a href="{{ route('booking.index') }}">
                                    <li
                                        class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-start">
                                        <i class="text-lg ri-calendar-2-fill"></i>
                                        <span class="px-2">
                                            My Booking
                                        </span>
                                    </li>
                                </a>
                                @endif
                                @if(Auth::user()->user_type != 'User')
                                <a href="{{ route('admin.dashboard') }}">
                                    <li
                                        class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-start">
                                        <i class="ri-dashboard-fill"></i>
                                        <span class="px-3 font-medium">
                                            Dashboard
                                        </span>
                                    </li>
                                </a>
                                @else
                                @if(Auth::user()->user_type != 'superAdmin')
                                <a href="{{ route('wisata.requestView') }}">
                                    <li
                                        class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-start">
                                        <i class="ri-dashboard-fill"></i>
                                        <span class="px-3 font-medium">
                                            Request Verifikasi
                                        </span>
                                    </li>
                                </a>
                                @endif
                                @endif
                                <li class="border-t sign__outAccount">
                                    <button
                                        class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-start"
                                        id="btnLogout">
                                        <i class="text-lg ri-logout-circle-r-line"></i>
                                        <span class="px-2 font-medium">
                                            Log Out
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @else
                    <div class="login-setup">
                        <a href="{{ route('login.form') }}">Log In</a>
                    </div>
                    <div class="signup">
                        <a href="{{ route('register.form') }}" class="signup-btn">Daftar</a>
                    </div>
                    @endauth
                </div>
            </ul>
        </div>
    </nav>
</div>
{{-- End Navbar --}}