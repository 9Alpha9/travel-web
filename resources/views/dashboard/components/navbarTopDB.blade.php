<div class="flex items-center justify-between px-12 fixedNav__items">
    <div class="relative flex align-middle searchTop__nav whitespace-nowrap">
        <button type="submit" class="searchButton">
            <i class="ri-search-line"></i>
        </button>
        <input type="search" name="" placeholder="Masukkan kata kunci" id="cariDashboard" class="searchBar__input">
    </div>
    <div class="flex items-center gap-4 p-3 align-middle px-60 topNav__items">
        <span class="block topNav__links whitespace-nowrap">
            <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                type="button">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                    </path>
                </svg>
                <div class="relative flex">
                    <div class="notificationRing__items">
                        <div class="relative notificationNotif__ring ">
                            <i
                                class="relative inline-flex ri-checkbox-blank-circle-fill text-text-error-notification -top-2 right-3 notificationRing__icons"></i>
                        </div>
                    </div>
                </div>
            </button>
            {{-- Dropdown menu --}}
            <div class="dropdownNotification__container">
                <div id="dropdownNotification"
                    class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700 dropDown__notification"
                    aria-labelledby="dropdownNotificationButton">
                    <div
                        class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                        Log Notifikasi
                    </div>
                    <div
                        class="overflow-y-auto divide-y divide-gray-100 h-52 dark:divide-gray-700 notificationItems__interaction">
                        <div class="flex px-4 py-3">
                            <div class="flex-shrink-0 adminProfile__pictures">
                                <img class="rounded-full w-11 h-11" src="{{ asset('asset/img/avatar.png') }}"
                                    alt="Dashboard admin profile pictures">
                            </div>
                            <div class="w-full pl-3 overflow-hidden ">
                                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">
                                    <span class="font-semibold text-gray-900 dark:text-white">
                                        Super Admin BirentCar
                                    </span>
                                    <p class="py-1 text-xs whitespace-normal">
                                        Menambahkan lokasi tempat wisata baru Kuliner pada
                                        kota Surabaya, Jawa Timur.
                                    </p>
                                </div>
                                <div class="text-xs text-blue-600 dark:text-blue-500">a few moments
                                    ago
                                </div>
                            </div>
                            <div class="notificationDelete__cta">
                                <button class="clearNotification__information">
                                    <i class="ri-close-line clearNotification__icons"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <a href="#"
                        class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                        <div class="inline-flex items-center ">
                            <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Lihat Semua
                        </div>
                    </a>
                </div>
            </div>
        </span>
        <div class="navProfiles profilesDB">
            <div class="flex items-center gap-3 topNav__linkspicture">
                <img src="{{ asset('asset/img/avatar.png') }}" alt="Dashboard profile pictures"
                    class="object-cover rounded-full h-14 w-14">
                <div class="flex flex-col profilePictures__DB">
                    <div id="dropdownTop__navprofile" data-dropdown-toggle="dropdownsDB__profiles"
                        class="flex items-center align-middle cursor-pointer">
                        <h2 class="font-semibold whitespace-nowrap">
                            <span class="font-semibold">Hi,</span>
                            Super Admin BirentCar
                        </h2>
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div id="dropdownsDB__profiles"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownTop__navprofile">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <div class="text-left">
                                        <span class="py-1">
                                            <i class="ri-logout-circle-r-line"></i>
                                            Keluar
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>