{{-- Wisata Viral --}}
<div class="mt-16 wisata__viral wisata__landing__wrapper">
    <div class="wisata__heading">
        <div class="relative p-3 rounded-md filters__wisata">
            {{-- <span class="block p-2 border-b header__text">
                <h2 class="text-lg font-extrabold">Filter Rekomendasi</h2>
            </span> --}}
            <div class="flex flex-col p-2 filters__control">
                <div class="relative flex w-full filters__category">
                    <button id="dropdownHelperButton" data-dropdown-toggle="dropdownHelper"
                        class="text-white bg-blue-700 w-full hover:bg-blue-800 text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex justify-between"
                        type="button">Pilih Wahana Wisata <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <form action="" id="filterWahana">
                        <div id="dropdownHelper"
                            class="relative z-10 hidden max-w-2xl mr-5 bg-white divide-gray-100 rounded-md shadow-md align-content-center itemHeader">
                            <div class="border rounded-md filterItem__wahana">
                                <ul class="p-4 text-sm text-black" aria-labelledby="dropdownHelperButton">
                                    <li>
                                        <div class="flex gap-3 p-2 rounded-md">
                                            <div class="grid items-center grid-cols-2 gap-2 gap-x-8">
                                                @foreach($tableTipeWahana as $key => $value)
                                                <span class="flex gap-3 tipe-wahana align-content-center"
                                                    class="flex items-center inline-block gap-2 itemChecks__input itemSpacing">
                                                    <input type="checkbox" name="tipe_wahana[]"
                                                        value="{{ $value->id_tipe_wahana }}" class="hidden getInput">
                                                    <input type="checkbox" name="wahanaList"
                                                        id="tipe_wahana_{{ $value->id_tipe_wahana }}"
                                                        data-id="{{ $value->id_tipe_wahana }}"
                                                        data-name="{{ $value->nama_tipe_wahana }}"
                                                        class="gap-2 text-blue-600 bg-gray-100 border-gray-300 rounded getInput">
                                                    <div class="text-sm ms-2">
                                                        <label class="font-medium text-black">
                                                            <div class="cursor-pointer itemSelect">{{
                                                                $value->nama_tipe_wahana }}
                                                            </div>
                                                        </label>
                                                    </div>
                                                </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <div class="items-center ml-3 on__submit">
                        <button type="button"
                            class="py-2.5 px-10 btnFilter__set text-sm font-medium text-gray-900 focus:outline-none border border-gray-200 h focus:z-10 focus:ring-4 text-white btn-filter">
                            <h3 class="flex items-center inline-block gap-2">
                                Filter
                                <i class="text-md ri-search-eye-line"></i>
                            </h3>
                        </button>
                    </div>
                </div>
                <div class="dataGet__wahanfilter">
                    <ul class="flex flex-wrap items-center gap-3 text-sm filterGet__list listWahana">
                    </ul>
                </div>
            </div>
        </div>
        </span>
    </div>
    {{-- Content Switch To Line Point --}}
    <div class="mt-16 filterShow__container">
        <div class="filterBody__wrapper">
            <div class="flex gap-4 filter__items">
                <div class="flex flex-col ml-12 filterSide__wrapper">
                    <form action="" id="formFilter">
                        <div class="rounded-lg content__side__filter filter__promo">
                            <div class="filter__list__item">
                                <div class="filterRange__prices filter__items">
                                    <div class="p-2 rounded-md bannerFilters">
                                        <div class="flex flex-col p-2 bannerTitle__wrap">
                                            <span class="block titleJumbo">Bingung Berkelana?</span>
                                            <span class="titleMedium">Beli Tiket Di Birentcar</span>
                                            <p class="mt-3 text-xs font-thin">Dijamin puas dan aman!</p>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-6 item__header">
                                        <span class="inline-block">
                                            <h3 class="font-semibold">Berdasarkan Harga</h3>
                                            <p class="text-xs font-thin text-gray-400">Price min, price max</p>
                                        </span>
                                        <span class="block mt-2 resetRange">
                                            <button id="resetHarga" type="button"
                                                class="text-sm text-primary-birent">Reset</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-4 mb-4 range_container">
                                    <div class="sliders_control">
                                        <input id="fromSlider" type="range" value="0" min="0" max="2000000" step="1000"
                                            style="outline: none;" />
                                        <input id="toSlider" type="range" value="1000000" min="0" max="2000000"
                                            step="1000" style="outline: none;" />
                                    </div>
                                    <div class="form_control">
                                        <div class="relative form_control_container">
                                            <span
                                                class="absolute bottom-0 mb-2.5 text-sm left-1 filter__price">Rp</span>
                                            <label for="price__box__0" class="text-sm">Min</label>
                                            <input class="text-sm text-right form_control_container__time__input"
                                                style="width: 100px;" type="number" id="fromInput" value="0" min="0"
                                                max="2000000" name="minHarga" />
                                        </div>
                                        <span class="separator__dot"></span>
                                        <div class="relative form_control_container">
                                            <span
                                                class="absolute bottom-0 mb-2.5 ml-1 text-sm right-1 filter__price">Rp</span>
                                            <label for="price__box__0" class="text-sm">Max</label>
                                            <input class="text-sm text-right form_control_container__time__input"
                                                type="number" id="toInput" value="0" min="0" max="2000000"
                                                name="maxHarga" style="width: 100px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t filterAksesbiliti filter__special">
                                <div class="mt-4 filter__item">
                                    <div class="item__header">
                                        <h3 class="font-semibold">Berdasarkan Aksesbilitas</h3>
                                    </div>
                                    <div class="mt-3 aksesbiliti__item">
                                        <div class="inline-block">
                                            <ul class="mb-3 text-sm aksesbiliti__itemcheck">
                                                @foreach($tableAksesbilitas as $key => $value)
                                                <span class="checkSelected__item in">
                                                    <li
                                                        class="flex items-center gap-2 pb-2 m-0 itemChecks__input active">
                                                        <input type="checkbox" name="aksesbilitas[]" class="hidden"
                                                            value="{{ $value->id_aksesbilitas }}" />
                                                        <input type="checkbox" id="aksesbilitas_{{ $key }}"
                                                            class="checkboxHover focus:ring-0 focus:ring-transparent"
                                                            style="margin: 0px 4px; outline: none;">
                                                        <span class="flex inline-block itemSelect"
                                                            for="aksesbilitas_{{ $key }}">
                                                            <h3>{{ $value->nama_aksesbilitas }}</h3>
                                                        </span>
                                                        <span
                                                            class="inline-block text-gray-primary value__indicators">({{
                                                            $value->wisata_count }})</span>
                                                    </li>
                                                </span>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 border-t filterFacility">
                                <div class="mt-3 filterFacility__items">
                                    <span class="item__header">
                                        <h3 class="font-semibold">Berdasarkan Fasilitas</h3>
                                    </span>
                                    <div class="inline-block mt-3">
                                        <ul class="items-center mb-3 text-sm aksesbiliti__itemcheck">
                                            @foreach($tableFasilitas as $key => $value)
                                            <span class="checkSelected__item">
                                                <li class="flex items-center gap-2 pb-2 m-0 itemChecks__input">
                                                    <input type="checkbox" name="fasilitas[]" class="hidden"
                                                        value="{{ $value->id_kategori_fasilitas }}"
                                                        style="margin: 0px 4px; outline: none;">
                                                    <input type="checkbox" id="fasilitas_{{ $key }}"
                                                        class="checkboxHover focus:ring-0 focus:ring-transparent"
                                                        style="margin: 0px 4px; outline: none;">
                                                    <span class="flex inline-block itemSelect">
                                                        <h3>{{ $value->kategori_fasilitas }}</h3>
                                                    </span>
                                                    <span class="inline-block text-gray-primary value__indicators">({{
                                                        $value->fasilitaswisata_count }})</span>
                                                </li>
                                            </span>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="mt-3 border-t filterFacility">
                                <div class="mt-3 filterFacility__items">
                                    <span class="item__header">
                                        <h3 class="font-semibold">Berdasarkan Kategori</h3>
                                    </span>
                                    <div class="inline-block mt-3">
                                        <ul class="items-center mb-3 text-sm kategori__itemcheck">
                                            <span class="checkSelected__item">
                                                <li class="flex items-center gap-2 pb-2 m-0 itemChecks__input">
                                                    <input type="checkbox" name="kota" id="kota" value=""
                                                        class="checkboxHover focus:ring-0 focus:ring-transparent"
                                                        style="margin: 0px 4px; outline: none;">
                                                    <span class="flex inline-block itemSelect" for="kota">
                                                        <h3>Semua Kategori</h3>
                                                    </span>
                                                    <span
                                                        class="inline-block text-gray-primary value__indicators">(54)</span>
                                                </li>
                                            </span>
                                            <span class="checkSelected__item">
                                                <li class="flex items-center gap-2 pb-2 m-0 itemChecks__input">
                                                    <input type="checkbox" name="kota" id="kota" value=""
                                                        class="checkboxHover focus:ring-0 focus:ring-transparent"
                                                        style="margin: 0px 4px; outline: none;">
                                                    <span class="flex inline-block itemSelect" for="kota">
                                                        <h3>Edukasi</h3>
                                                    </span>
                                                    <span
                                                        class="inline-block text-gray-primary value__indicators">(10)</span>
                                                </li>
                                            </span>
                                            <span class="checkSelected__item">
                                                <li class="flex items-center gap-2 pb-2 m-0 itemChecks__input">
                                                    <input type="checkbox" name="kota" id="kota" value=""
                                                        class="checkboxHover focus:ring-0 focus:ring-transparent"
                                                        style="margin: 0px 4px; outline: none;">
                                                    <span class="flex inline-block itemSelect" for="kota">
                                                        <h3>Rekreasi</h3>
                                                    </span>
                                                    <span
                                                        class="inline-block text-gray-primary value__indicators">(23)</span>
                                                </li>
                                            </span>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </form>
                </div>
                <div class="filterContent__item">
                    <div class="content__side__filter filter__recommendation">
                        {{-- <div class="filter__show link__filter__show">
                            <a href="" class="filter__on__click">
                                <div class="flex flex-row gap-4 mb-3 border rounded-lg content__recommendation">
                                    <div class="content__banner__recommendation">
                                        <img src="{{ asset('asset/img/empty-image-thumb.png') }}"
                                            alt="Deskripsi rekomendasi wisata">
                                    </div>
                                    <div class="relative flex head__recommendation">
                                        <div class="flex flex-col border-r title__head">
                                            <span class="block text__recommendation">
                                                <h3 class="font-semibold">fghfgh</h3>
                                            </span>
                                            <div class="flex items-center float-left gap-1 my-3 wisata__stars">
                                                @include('components.pages.viewPages.svgIcon')
                                                <span
                                                    class="flex items-center inline-block pl-2 text-sm font-light rattings__numb align-content-center">
                                                    <span class="gap-2 location__pin">
                                                        <svg width="15" height="15" viewBox="0 0 10 13" fill="none"
                                                            class="block align-middle"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.72531 0.840637C3.49946 0.842028 2.32423 1.32961 1.45743 2.19641C0.590624 3.06321 0.103045 4.23845 0.101654 5.46429C0.101654 9.42066 4.30497 12.4103 4.48361 12.5364C4.55521 12.584 4.6393 12.6095 4.72531 12.6095C4.81132 12.6095 4.8954 12.584 4.967 12.5364C5.14564 12.4103 9.34896 9.42066 9.34896 5.46429C9.34757 4.23845 8.85999 3.06321 7.99319 2.19641C7.12638 1.32961 5.95115 0.842028 4.72531 0.840637ZM4.72531 3.78296C5.05784 3.78296 5.38291 3.88157 5.6594 4.06632C5.93589 4.25106 6.15139 4.51365 6.27865 4.82087C6.40591 5.12809 6.4392 5.46615 6.37433 5.7923C6.30945 6.11844 6.14932 6.41803 5.91418 6.65317C5.67905 6.88831 5.37946 7.04844 5.05332 7.11331C4.72717 7.17818 4.38911 7.14489 4.08189 7.01763C3.77467 6.89038 3.51208 6.67488 3.32733 6.39838C3.14259 6.12189 3.04398 5.79682 3.04398 5.46429C3.04398 5.01837 3.22112 4.59072 3.53643 4.27541C3.85174 3.9601 4.27939 3.78296 4.72531 3.78296Z"
                                                                fill="#3237d2"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="flex items-center gap-1 my-2 facility__iteminfoHeader">
                                                <i class="text-sm ri-fire-fill itemsIcon"></i>
                                                <h3 class="text-sm font-semibold">
                                                    Fasilitas tempat wisata:
                                                </h3>
                                            </div>
                                            <span class="inline-block mt-2 mb-2 pillsHeader__wrap">
                                                <ol
                                                    class="flex flex-wrap col-span-2 gap-1 pills__bodyHome list-group-item list-inline-item">
                                                    <li class="pills__eachItem">
                                                        <span class="inline-block">
                                                            Lorem, ipsum.
                                                        </span>
                                                    </li>
                                                </ol>
                                            </span>
                                            <div class="moreInfo__wrapper my-7">
                                                <div class="moreinfo__content">
                                                    <div class="flex gap-3 mt-3 moreinfo__items">
                                                        <div class="text-sm kategori__item">
                                                            <div class="text-sm rank__item">
                                                                <i class="ri-trophy-fill itemsIcon"></i>
                                                                <span class="headerRank__item">
                                                                    Ranking:
                                                                </span>
                                                                <span class="kategori__info">08</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info__recommendationHome">
                                            <span>
                                                <h2>Harga Spesial</h2>
                                                <h3 class="my-3 font-semibold">OFF</h3>
                                            </span>
                                            <span class="no__discount">
                                                <h3 class="font-bold">Rp. 450,000</h3>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                        {{-- <div class="spinBall spinLoaded loadedContent">
                            <div class="flex m-auto lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div> --}}
                        <div class="skeletonLoad__loading">
                            <div class="flex flex-row gap-4 border rounded-lg">
                                <div class="content__banner__recommendation">
                                    <span
                                        class="block rounded-tl-lg rounded-bl-lg skeletonImage__banner animate-pulse"></span>
                                </div>
                                <div class="relative flex head__recommendation">
                                    <div class="flex flex-col pt-2 border-r title__head">
                                        <span class="inline-block text__recommendation w-25">
                                            <span
                                                class="block h-8 bg-gray-200 rounded-sm w-25 animate-pulse titleSkeleton"></span>
                                        </span>
                                        <div class="flex items-center float-left gap-1 my-3 wisata__stars">
                                            <span class="block rounded-sm animate-pulse starSkeleton"></span>
                                        </div>
                                        <div class="flex items-center gap-1 my-2 facility__iteminfoHeader">
                                            <span class="block rounded-sm animate-pulse facilitySkeleton"></span>
                                        </div>
                                        <span class="inline-block mt-2 mb-2 pillsHeader__wrap">
                                            <ol
                                                class="flex flex-row flex-wrap gap-1 pills__bodyHome list-group-item list-inline-item">
                                                <li class="rounded-sm pills__eachItem">
                                                    <span
                                                        class="block rounded-sm animate-pulse facilitySkeleton__items"></span>
                                                </li>
                                                <li class="pills__eachItem">
                                                    <span
                                                        class="block rounded-sm animate-pulse facilitySkeleton__items"></span>
                                                </li>
                                                <li class="pills__eachItem">
                                                    <span
                                                        class="block rounded-sm animate-pulse facilitySkeleton__items"></span>
                                                </li>
                                            </ol>
                                        </span>
                                        <div class="moreInfo__wrapper my-7">
                                            <div class="moreinfo__content">
                                                <div class="flex gap-3 mt-3 moreinfo__items">
                                                    <div class="text-sm kategori__item">
                                                        <span
                                                            class="block rounded-sm animate-pulse kategoriSkeleton__items"></span>
                                                    </div>
                                                    <span class="border-r"></span>
                                                    <div class="text-sm kategori__item">
                                                        <div class="text-sm rank__item">
                                                            <div class="text-sm kategori__item">
                                                                <span
                                                                    class="block rounded-sm animate-pulse kategoriSkeleton__items"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info__recommendationHome">
                                        <div class="infoRecommendation__skeleton">
                                            <span
                                                class="inline-block rounded-sm animate-pulse infoSkeleton__items"></span>
                                            <span class="rounded-sm no__discountSkeleton"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between mt-10 lg:flex-row paginationContainer">
                <div class="flex flex-col items-center space-x-2 text-xs lg:flex-row">
                    <p class="mt-4 text-gray-500 lg:mt-0">Menampilkan 11 ke 20 dari 95 antrian</p>
                </div>
                <div class="flex items-center justify-center mt-8 text-gray-600 lg:mt-0">
                    <div class="previousPagination__items">
                        <button class="p-2 mr-4 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                    </div>
                    <span class="paginationNumber__rows">
                        <button class="px-4 py-2 rounded hover:bg-gray-200" data-page="1">
                            <span class="pageNumbers">1</span>
                        </button>
                        <button
                            class="px-4 py-2 font-medium text-gray-900 bg-gray-100 rounded hover:bg-gray-200 activePagination"
                            data-page="2">
                            <span class="pageNumbers">2</span>
                        </button>
                        <button class="px-4 py-2 rounded hover:bg-gray-200" data-page="3">
                            <span class="pageNumbers">3</span>
                        </button>
                        <div class="inline-block">
                            <span class="px-4 py-2 rounded cursor-pointer input-pagination">
                                ...
                            </span>
                            {{-- <input type="number" class="inputPagination"> --}}
                        </div>
                        <button class="px-4 py-2 rounded hover:bg-gray-100 last-page" data-page="9">
                            <span class="pageNumbers">9</span>
                        </button>
                    </span>
                    <div class="nextPagination___items">
                        <button class="p-2 ml-4 rounded hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Content Switch To Line Point --}}


</div>
</div>
{{-- End Wisata Viral --}}