<div class="filter__wrapper">
    <div class="content__side__filter filter__recommendation ">
        @if(count($tableWisata) > 0)
        @foreach($tableWisata as $key => $value)
        <div class="mb-5 filter__show link__filter__show">
            <a href="{{ route('viewpages', $value->id_wisata) }}" class="filter__on__click">
                <div class="flex flex-row gap-4 mb-5 border rounded-lg content__recommendation">
                    <div class="content__banner__recommendation">
                        @php($url_nama_wisata = str_replace(' ', '_', $value->nama_wisata))
                        @if (count($value->gambarwisata) > 0)
                        @php($gambar = !is_null($value->gambarwisata->first()->nama_gambar) ?
                        url("gallery-wisata/$url_nama_wisata/{$value->gambarwisata->first()->nama_gambar}") :
                        asset("asset/img/empty-image-thumb.png"))
                        @else
                        @php ( $gambar = asset('asset/img/empty-image-thumb.png') )
                        @endif
                        <img src='{{ $gambar }}' alt="Deskripsi rekomendasi wisata">
                    </div>
                    <div class="relative flex head__recommendation">
                        <div class="flex flex-col border-r title__head">
                            <span class="block text__recommendation">
                                <h3 class="font-semibold">{{ $value->nama_wisata }} </h3>
                            </span>
                            {{-- Rating --}}
                            <div class="flex items-center float-left gap-1 my-3 wisata__stars">
                                @include(' components.pages.viewPages.svgIcon') {{-- Ratting Indicator --}} <span
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
                                <div class="facility__item">
                                    <div class="flex items-center gap-1 my-2 facility__iteminfo">
                                        <i class="text-sm ri-fire-fill itemsIcon"></i>
                                        <h3 class="text-sm font-semibold">
                                            Fasilitas tempat wisata:
                                        </h3>
                                    </div>
                                    <ol
                                        class="flex flex-wrap col-span-2 gap-1 pills__body list-group-item list-inline-item">
                                        @foreach($value->fasilitaswisata as $key2 => $value2)
                                        <li class="pills__eachItem">
                                            <span class="inline-block ">
                                                {{
                                                $value2->kategorifasilitas->kategori_fasilitas
                                                }}
                                            </span>
                                        </li>
                                        @endforeach
                                    </ol>
                                    {{-- <span class="inline-block mb-1">{{
                                        $value2->kategorifasilitas->kategori_fasilitas
                                        }}</span> --}}
                                </div>
                            </div>
                            <div class="pt-12 moreInfo__wrapper">
                                <div class="moreinfo__content">
                                    <div class="flex gap-3 mt-3 moreinfo__items">
                                        {{-- <div class="text-sm kategori__item">
                                            <i class="ri-flag-fill itemsIcon"></i>
                                            <span class="headerKategori__item">
                                                Kategori Wisata:
                                            </span>
                                            <span class="kategori__info">Bahari</span>
                                        </div> --}}
                                        {{-- <span class="border-r"></span> --}}
                                        <div class="text-sm kategori__item">
                                            <div class="text-sm rank__item">
                                                <i class="ri-trophy-fill itemsIcon"></i>
                                                <span class="headerRank__item">
                                                    Ranking:
                                                </span>
                                                <span class="kategori__info">{{ $key + 1 }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info__recommendation">
                            @php($harga = $value->harga)
                            @if($value->diskon != 0)
                            @php ($harga -= $harga * ($value->diskon / 100))
                            @endif
                            <span class="discount @if($value->diskon == 0) hide @endif">
                                <h2>Diskon Tiket</h2>
                                <span class="flex inline-flex items-center gap-3">
                                    Extra
                                    <h3 class="my-3 font-semibold">{{ $value->diskon }}%</h3>
                                </span>
                            </span>
                            <span class="no__discount">
                                <h3 class="font-extrabold">Rp {{ number_format($harga, 0, ',', '.') }}</h3>
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
                    <h3>Tempat wisata tidak ada atau belum tersedia.</h3>
                </span>
            </span>
        </div>
        @endif
    </div>
</div>