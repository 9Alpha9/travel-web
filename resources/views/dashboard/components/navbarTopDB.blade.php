<div class="flex items-center justify-between px-12 fixedNav__items">
    {{-- <div class="relative flex align-middle searchTop__nav whitespace-nowrap">
        <button type="submit" class="searchButton">
            <i class="ri-search-line"></i>
        </button>
        <input type="search" name="" placeholder="Masukkan kata kunci" id="cariDashboard" class="searchBar__input">
    </div> --}}
    <span class="Day__helloUsers whitespace-nowrap">
        @php(date_default_timezone_set('Asia/Jakarta'))
        @php($hour = date('H'))
        @if($hour >= 4 && $hour <= 10) <h2 class="text-xl font-semibold">Good Morning</h2>
            @elseif($hour >= 11 && $hour <= 14) <h2 class="text-xl font-semibold">Good Evening</h2>
                @elseif($hour >= 15 && $hour <= 18) <h2 class="text-xl font-semibold">Good Afternoon</h2>
                    @else
                    <h2 class="text-xl font-semibold">Good Night</h2>
                    @endif
    </span>
    <div class="flex items-center gap-4 p-3 align-middle px-60 topNav__items">

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
