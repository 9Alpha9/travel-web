@extends('default')
@section('pageContent')
<div class="filter__wrapper">
    <div class="filter__boddy">
        <div class="flex flex-row gap-3 filter__content">
            <div class="p-4 rounded-lg content__side__filter filter__promo">
                <div class="filter__list__item">
                    <div class="mb-3 border-b filter__items filter__popular">
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
                    </div>
                    <div class="filter__items filter__special">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Dolorum, saepe quidem dicta animi architecto placeat sequi id enim ut harum commodi labore
                        repudiandae laudantium magnam fuga exercitationem velit, cumque ea.</div>
                </div>
            </div>
            <div class="content__side__filter filter__recommendation ">
                @if(count($tableWisata) > 0)
                @foreach($tableWisata as $key => $value)
                <div class="filter__show link__filter__show">
                    <a href="{{ route('viewpages', $value->id_wisata) }}" class="filter__on__click">
                        <div class="flex flex-row gap-4 mb-3 border rounded-lg content__recommendation">
                            <div class="content__banner__recommendation">
                                @php($url_nama_wisata = str_replace(' ', '_', $value->nama_wisata))
                                <img src="
                            @if (count($value->gambarwisata) > 0)
                                {{ !is_null($value->gambarwisata->first()->nama_gambar) ? url("gallery-wisata/$url_nama_wisata/{$value->gambarwisata->first()->nama_gambar}") :
                                'https://ulasku.com/wp-content/uploads/2022/01/kebun-bunga-santerra-de-laponte-746x560.jpg'
                                }}
                                @else
                                https://ulasku.com/wp-content/uploads/2022/01/kebun-bunga-santerra-de-laponte-746x560.jpg
                                @endif
                                "
                                alt="Deskripsi rekomendasi wisata">
                            </div>
                            <div class="relative flex head__recommendation">
                                <div class="flex flex-col border-r title__head">
                                    <span class="block text__recommendation">
                                        <h3 class="font-semibold">{{ $value->nama_wisata }} </h3>
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
                                            {{ $value->kota->name }}
                                        </span>
                                    </div>
                                    {{-- End Rating --}}
                                    <div class="facility">
                                        <h3 class="text-sm">Fasilitas tempat wisata:</h3>
                                        @foreach($value->fasilitaswisata as $key2 => $value2)
                                        <span class="inline-block mb-1">{{
                                            $value2->kategorifasilitas->kategori_fasilitas
                                            }}</span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="info__recommendation">
                                    @php($harga = $value->harga)
                                    @if($value->diskon != 0)
                                    @php ($harga -= $harga * ($value->diskon / 100))
                                    @endif
                                    <span class="discount @if($value->diskon == 0) hide @endif">
                                        <h2>Harga Spesial</h2>
                                        <h3 class="my-3 font-semibold">{{ $value->diskon }}% OFF</h3>
                                    </span>
                                    <span class="no__discount">
                                        <h3>Rp {{ number_format($harga, 0, ',', '.') }}</h3>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <div class="not__found">
                    <span class="block not__banner">
                        <img src="{{ asset('asset/img/not-found.png') }}" alt="">
                        <span class="block text-center text__not__found">
                            <h2>Oops!</h2>
                            <h3>Tempat wisata tidak ada atau tersedia.</h3>
                        </span>
                    </span>
                </div>
                @endif
            </div>
        </div>
    </div>
    {{-- Pagination --}}
    <div class="relative mt-20 pagination__rows">
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
    </div>
    {{-- Pagination --}}
</div>
@endsection

@push('scripts')
<script>
    function Starsfilter(checkbox) {
        var checkboxes = document.getElementsByName('stars-filter')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
</script>
@endpush