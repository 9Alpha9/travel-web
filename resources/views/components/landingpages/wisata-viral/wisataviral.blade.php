{{-- Wisata Viral --}}
<div class="mt-16 wisata__viral wisata__landing__wrapper">
    <div class="wisata__heading">
        <div class="relative p-3 rounded-md filters__wisata">
            <span class="block p-2 mb-8 border-b header__text">
                <h2 class="text-lg font-extrabold">Filter Rekomendasi</h2>
            </span>
            <div class="flex flex-col p-2 filters__control">
                <div class="w-full filters__category flex relative pt-4">
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
                            class="z-10 hidden bg-white relative divide-gray-100 rounded-md shadow-md max-w-2xl align-content-center mr-5 itemHeader">
                            <div class="filterItem__wahana rounded-md border">
                                <ul class="text-sm text-black p-4" aria-labelledby="dropdownHelperButton">
                                    <li>
                                        <div class="flex gap-3 p-2 rounded-md">
                                            <div class="grid grid-cols-2 gap-2 items-center gap-x-8">
                                                @foreach($tableTipeWahana as $key => $value)
                                                <span
                                                    class="inline-block flex gap-2 items-center itemChecks__input itemSpacing">
                                                    <input type="checkbox" name="tipe_wahana[]"
                                                        value="{{ $value->id_tipe_wahana }}" class="hidden getInput">
                                                    <input type="checkbox" name="wahanaList"
                                                        id="tipe_wahana_{{ $value->id_tipe_wahana }}"
                                                        data-id="{{ $value->id_tipe_wahana }}"
                                                        data-name="{{ $value->nama_tipe_wahana }}"
                                                        class="text-blue-600 bg-gray-100 border-gray-300 rounded gap-2 getInput">
                                                    <div class="ms-2 text-sm">
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
                <div class="dataGet__wahanfilter mt-6">
                    <ul class="filterGet__list flex flex-wrap gap-3 text-sm items-center listWahana">
                    </ul>
                </div>
                {{-- <select id="kategori"
                    class="bg-gray-50 border border-gray-300  text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value='' selected>Tampilkan Semua Kategori</option>
                    @foreach($tableKategori as $key => $value)
                    <option value="{{ $value->id_kategori_wisata }}">{{ $value->nama_kategori_wisata }}
                    </option>
                    @endforeach
                </select> --}}

            </div>
            {{-- <div class="w-full filters__tipe__wisata">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">
                    <h3>Filter Kota/Kabupaten</h3>
                </label>
                <select id="kota"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value='' selected>Pilih Kota/Kabupaten</option>
                    @foreach($tableKota as $key => $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div> --}}
        </div>
        </span>
    </div>
    {{-- Content Switch To Line Point --}}
    <div class="mt-16 filterShow__container">
        <div class="flex gap-4 filterBody__wrapper">
            <div class="flex flex-col ml-12 filterSide__wrapper">
                <form action="" id="formFilter">
                    <div class="rounded-lg content__side__filter filter__promo">
                        <div class="filter__list__item">
                            {{-- <div class="mb-3 border-b filter__items filter__popular">
                                <span class="item__header">
                                    <h3 class="font-semibold">Berdasarkan rating</h3>
                                </span>
                                <ul class="py-4 rate__by__stars filter__stars">
                                    <li class="py-1 filter__stars__item">
                                        <span class="flex items-center filter__stars__inbox ">
                                            <input type="checkbox" name="stars-filter" id="" onclick="Starsfilters">
                                            <span class="flex px-2">
                                                @include('components.pages.viewPages.svgStars5Filter')
                                            </span>
                                            <span class="inline-block text-gray-400">
                                                <h3>(300)</h3>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="py-1 filter__stars__item">
                                        <span class="flex items-center filter__stars__inbox ">
                                            <input type="checkbox" name="stars-filter" id="" onclick="Starsfilters">
                                            <span class="flex px-2">
                                                @include('components.pages.viewPages.svgStars4Filter')
                                            </span>
                                            <span class="inline-block text-gray-400">
                                                <h3>(210)</h3>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="py-1 filter__stars__item">
                                        <span class="flex items-center filter__stars__inbox ">
                                            <input type="checkbox" name="stars-filter" id="" onclick="Starsfilters">
                                            <span class="flex px-2">
                                                @include('components.pages.viewPages.svgStars3Filter')
                                            </span>
                                            <span class="inline-block text-gray-400">
                                                <h3>(110)</h3>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="py-1 filter__stars__item">
                                        <span class="flex items-center filter__stars__inbox ">
                                            <input type="checkbox" name="stars-filter" id="" onclick="Starsfilters">
                                            <span class="flex px-2">
                                                @include('components.pages.viewPages.svgStars2Filter')
                                            </span>
                                            <span class="inline-block text-gray-400">
                                                <h3>(90)</h3>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="py-1 filter__stars__item">
                                        <span class="flex items-center filter__stars__inbox ">
                                            <input type="checkbox" name="stars-filter" id="" onclick="Starsfilters">
                                            <span class="flex px-2">
                                                @include('components.pages.viewPages.svgStars1Filter')
                                            </span>
                                            <span class="inline-block text-gray-400">
                                                <h3>(40)</h3>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="py-1 filter__stars__item">
                                        <span class="flex items-center filter__stars__inbox ">
                                            <input type="checkbox" name="stars-filter" id="" onclick="Starsfilters">
                                            <span class="flex px-2 text-sm">
                                                Tidak ada penilaian
                                            </span>
                                            <span class="inline-block text-gray-400">
                                                <h3>(20)</h3>
                                            </span>
                                        </span>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="filterRange__prices filter__items"></div>
                            <span class="item__header">
                                <h3 class="font-semibold">Berdasarkan Harga</h3>
                            </span>
                            <div class="mt-4 mb-4 range_container">
                                <div class="sliders_control">
                                    <input id="fromSlider" type="range" value="0" min="0" max="100"
                                        style="outline: none;" />
                                    <input id="toSlider" type="range" value="50" min="0" max="100"
                                        style="outline: none;" />
                                </div>
                                <div class="form_control">
                                    <div class="relative form_control_container">
                                        <span class="absolute bottom-0 mb-1 text-sm left-1 filter__price">Rp</span>
                                        <label for="price__box__0" class="text-sm">Min</label>
                                        <input class="text-sm form_control_container__time__input" type="number"
                                            id="fromInput" value="0" min="0" max="2000000" />
                                        {{-- hidden --}}
                                        <input class="hidden text-sm form_control_container__time__input" type="number"
                                            id="fromInput" name="minHarga" value="0" min="0" max="2000000" />
                                        {{-- hidden --}}
                                    </div>
                                    <span class="separator__dot"></span>
                                    <div class="relative form_control_container">
                                        <span
                                            class="absolute bottom-0 mb-1 ml-1 text-sm right-1 filter__price">Rp</span>
                                        <label for="price__box__0" class="text-sm">Max</label>
                                        <input class="text-sm form_control_container__time__input" type="number"
                                            id="toInput" value="0" min="0" max="2000000" />
                                        {{-- hidden --}}
                                        <input class="hidden text-sm form_control_container__time__input" type="number"
                                            id="toInput" name="maxHarga" value="0" min="0" max="2000000" />
                                        {{-- hidden --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-t filterAksesbiliti filter__special">
                            <div class="mt-4 filter__item">
                                <span class="item__header">
                                    <h3 class="font-semibold">Berdasarkan Aksesbilitas</h3>
                                </span>
                                <div class="mt-3 aksesbiliti__item">
                                    <div class="inline-block">
                                        <ul class="mb-3 text-sm aksesbiliti__itemcheck">
                                            @foreach($tableAksesbilitas as $key => $value)
                                            <span class="checkSelected__item in">
                                                <li class="flex items-center gap-2 pb-2 m-0 itemChecks__input active">
                                                    <input type="checkbox" name="aksesbilitas[]" class="hidden"
                                                        value="{{ $value->id_aksesbilitas }}" />
                                                    <input type="checkbox" id="aksesbilitas_{{ $key }}"
                                                        class="checkboxHover focus:ring-0 focus:ring-transparent"
                                                        style="margin: 0px 4px; outline: none;">
                                                    <span class="flex inline-block itemSelect"
                                                        for="aksesbilitas_{{ $key }}">
                                                        <h3>{{ $value->nama_aksesbilitas }}</h3>
                                                    </span>
                                                    <span class="inline-block text-gray-primary value__indicators">({{
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
                                                <input type="checkbox" name="faslitas[]" class="hidden"
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
                    <div class="filter__show link__filter__show">
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
                                        {{-- Rating --}}
                                        <div class="flex items-center float-left gap-1 my-3 wisata__stars">
                                            @include('components.pages.viewPages.svgIcon')
                                            {{-- Ratting Indicator --}}
                                            <span
                                                class="flex items-center inline-block pl-2 text-sm font-light rattings__numb align-content-center">
                                                <span class="gap-2 location__pin">
                                                    <svg width="15" height="15" viewBox="0 0 10 13" fill="none"
                                                        class="block align-middle" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M4.72531 0.840637C3.49946 0.842028 2.32423 1.32961 1.45743 2.19641C0.590624 3.06321 0.103045 4.23845 0.101654 5.46429C0.101654 9.42066 4.30497 12.4103 4.48361 12.5364C4.55521 12.584 4.6393 12.6095 4.72531 12.6095C4.81132 12.6095 4.8954 12.584 4.967 12.5364C5.14564 12.4103 9.34896 9.42066 9.34896 5.46429C9.34757 4.23845 8.85999 3.06321 7.99319 2.19641C7.12638 1.32961 5.95115 0.842028 4.72531 0.840637ZM4.72531 3.78296C5.05784 3.78296 5.38291 3.88157 5.6594 4.06632C5.93589 4.25106 6.15139 4.51365 6.27865 4.82087C6.40591 5.12809 6.4392 5.46615 6.37433 5.7923C6.30945 6.11844 6.14932 6.41803 5.91418 6.65317C5.67905 6.88831 5.37946 7.04844 5.05332 7.11331C4.72717 7.17818 4.38911 7.14489 4.08189 7.01763C3.77467 6.89038 3.51208 6.67488 3.32733 6.39838C3.14259 6.12189 3.04398 5.79682 3.04398 5.46429C3.04398 5.01837 3.22112 4.59072 3.53643 4.27541C3.85174 3.9601 4.27939 3.78296 4.72531 3.78296Z"
                                                            fill="#3237d2"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </div>
                                        {{-- End Rating --}}
                                        <div class="flex items-center gap-1 my-2 facility__iteminfoHeader">
                                            <i class="text-sm ri-fire-fill itemsIcon"></i>
                                            <h3 class="text-sm font-semibold">
                                                Fasilitas tempat wisata:
                                            </h3>
                                        </div>
                                        <span class="pillsHeader__wrap inline-block mt-2 mb-2">
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
                                                        <i class="ri-flag-fill itemsIcon"></i>
                                                        <span class="headerKategori__item">
                                                            Kategori Wisata:
                                                        </span>
                                                        <span class="kategori__info">Bahari</span>
                                                    </div>
                                                    <span class="border-r"></span>
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
                                        <span class="">
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
                    </div>
                </div>
                <div class="spinBall spinLoaded loadedContent">
                    <div class="flex m-auto lds-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Content Switch To Line Point --}}

    {{-- <div class="grid grid-cols-2 gap-4 mt-10 mb-10 wisata__content md:grid-cols-4 xl:grid-cols-4">
        @foreach($wisata as $key => $value)
        <div class="flex flex-row wisata__card">
            <div class="block max-w-md dark:bg-neutral-700 wisata__viral__card__item">
                <a href="{{ route('viewpages', $value->id_wisata) }}">
                    @php($url_nama_wisata = str_replace(' ', '_', $value->nama_wisata))
                    <figure class="wisata__banner">
                        <img src="
                            @if (count($value->gambarwisata) > 0)
                                {{ !is_null($value->gambarwisata->first()->nama_gambar) ? url("gallery-wisata/$url_nama_wisata/{$value->gambarwisata->first()->nama_gambar}") :
                        'https://ulasku.com/wp-content/uploads/2022/01/kebun-bunga-santerra-de-laponte-746x560.jpg'
                        }}
                        @else
                        https://ulasku.com/wp-content/uploads/2022/01/kebun-bunga-santerra-de-laponte-746x560.jpg
                        @endif
                        " class="max-h-60 md:max-h-60 xl:max-h-96" alt="" />
                    </figure>
                </a>
                <div class="my-8 card__title__info">
                    <div class="flex flex-row justify-between gap-2 wisata__info__header">
                        <div class="wisata__info__title">
                            <a href="#!">
                                <h5 class="font-semibold">{{ $value->nama_wisata }}</h5>
                            </a>
                        </div>
                        <div class="flex items-center float-left gap-1 wisata__stars">
                            <svg width="14" height="14" viewBox="0 0 33 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.3883 12.2397C30.2632 11.8459 30.0219 11.4992 29.6963 11.2449C29.3706 10.9906 28.9757 10.8406 28.5633 10.8147L21.1383 10.3022L18.3883 3.3647C18.2382 2.9827 17.9768 2.65458 17.638 2.4228C17.2993 2.19103 16.8988 2.06628 16.4883 2.0647C16.0779 2.06628 15.6774 2.19103 15.3386 2.4228C14.9999 2.65458 14.7385 2.9827 14.5883 3.3647L11.7883 10.3397L4.41333 10.8147C4.00146 10.8423 3.60735 10.9929 3.28199 11.2469C2.95663 11.501 2.71499 11.8468 2.58833 12.2397C2.45825 12.6386 2.45065 13.0673 2.56651 13.4706C2.68236 13.8738 2.91636 14.2332 3.23833 14.5022L8.91333 19.3022L7.22583 25.9397C7.10907 26.3887 7.13008 26.8625 7.28613 27.2994C7.44217 27.7363 7.72604 28.1162 8.10083 28.3897C8.46462 28.6508 8.89804 28.7974 9.34563 28.8108C9.79321 28.8241 10.2346 28.7036 10.6133 28.4647L16.4758 24.7522H16.5008L22.8133 28.7397C23.1371 28.9501 23.5147 29.0629 23.9008 29.0647C24.2161 29.0622 24.5267 28.9875 24.8086 28.8462C25.0905 28.705 25.3363 28.5009 25.527 28.2498C25.7177 27.9988 25.8484 27.7073 25.9088 27.3978C25.9693 27.0883 25.958 26.7691 25.8758 26.4647L24.0883 19.2022L29.7383 14.5022C30.0603 14.2332 30.2943 13.8738 30.4101 13.4706C30.526 13.0673 30.5184 12.6386 30.3883 12.2397Z"
                                    fill="#3237d2" />
                            </svg>
                            <span class="inline-block text-sm font-light rattings__numb">
                                4,7
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row items-center gap-2 py-3 m-auto card__location__graph">
                        <svg width="20" height="20" viewBox="0 0 10 13" fill="none" class="block align-middle"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.72531 0.840637C3.49946 0.842028 2.32423 1.32961 1.45743 2.19641C0.590624 3.06321 0.103045 4.23845 0.101654 5.46429C0.101654 9.42066 4.30497 12.4103 4.48361 12.5364C4.55521 12.584 4.6393 12.6095 4.72531 12.6095C4.81132 12.6095 4.8954 12.584 4.967 12.5364C5.14564 12.4103 9.34896 9.42066 9.34896 5.46429C9.34757 4.23845 8.85999 3.06321 7.99319 2.19641C7.12638 1.32961 5.95115 0.842028 4.72531 0.840637ZM4.72531 3.78296C5.05784 3.78296 5.38291 3.88157 5.6594 4.06632C5.93589 4.25106 6.15139 4.51365 6.27865 4.82087C6.40591 5.12809 6.4392 5.46615 6.37433 5.7923C6.30945 6.11844 6.14932 6.41803 5.91418 6.65317C5.67905 6.88831 5.37946 7.04844 5.05332 7.11331C4.72717 7.17818 4.38911 7.14489 4.08189 7.01763C3.77467 6.89038 3.51208 6.67488 3.32733 6.39838C3.14259 6.12189 3.04398 5.79682 3.04398 5.46429C3.04398 5.01837 3.22112 4.59072 3.53643 4.27541C3.85174 3.9601 4.27939 3.78296 4.72531 3.78296Z"
                                fill="#3237d2" />
                        </svg>
                        <p class="text-xs text-neutral-600 dark:text-neutral-200 text__location">
                            {{$value->kecamatan->name }}, {{$value->kecamatan->kota->name }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}

    {{-- <div class="relative mt-12 pagination__rows">
        <div class="flex justify-between w-full pagination__rows__number">
            <div class="flex flex-row items-center">
                <span class="text-sm text-gray-400 dark:text-gray-100">
                    Halaman <span class="font-semibold text-gray-900 dark:text-white">1</span> ke <span
                        class="font-semibold text-gray-400 dark:text-white">10</span> dari <span
                        class="font-semibold text-gray-400 dark:text-white">100</span> Wisata
                </span>
            </div>
            <nav aria-label="Page navigation pagination-wisata">
                <ul class="flex items-center h-8 -space-x-px text-lg">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 ms-0 border-e-0 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 rounded-pagination-prev">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center h-8 px-3 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 rounded-pagination-next">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> --}}
</div>
</div>
{{-- End Wisata Viral --}}