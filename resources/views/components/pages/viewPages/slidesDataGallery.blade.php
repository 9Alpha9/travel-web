{{-- Swiper Slide --}}
<div class="swiper slideGallery gallery__slides">
    <div class="swiper-wrapper">
        @foreach($tableWisata->gambarwisata as $key => $value)
        @php($url_nama_wisata = str_replace(' ', '_', $tableWisata->nama_wisata))
        @php($gambar = !is_null($value->nama_gambar) ?
        url("gallery-wisata/$url_nama_wisata/{$value->nama_gambar}") :
        asset("asset/img/empty-image-thumb.png"))
        <div class="swiper-slide">
            <figure class="relative view__modal__gallery__banner">
                <img src="{{ $gambar }}" alt="Gambar Wisata" loading="lazy">
            </figure>
        </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="font-extrabold bottom-52 swiper-pagination gallery__pagination"></div>
    {{-- End Swiper Slide --}}
</div>