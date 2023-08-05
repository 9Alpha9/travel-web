@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')
<div class="py-10 containerTambah__wisata">
    <div class="mt-20 wisata__wrapper wisata__tableCount">
        <span class="block titleTable">
            <h2 class="titleList">
                List Tempat Wisata
            </h2>
            <p class="text-sm text-gray-primary">Berikut adalah list dari tempat wisata yang ada di Jawa Timur. </p>
            {{-- <section class="mt-4 text-white notedSuperAdm">
                <span class="flex flex-row items-center gap-4 p-2 px-3">
                    <i class="text-2xl text-white ri-eye-fill"></i>
                    <p class="text-sm notesList">Super
                        Admin hanya dapat melihat list wisata yang dimasukkan oleh masing-masing Admin dari
                        pengelolah
                        tempat
                        wisata dan tidak dapat mengubah data tersebut!</p>
                </span>
            </section> --}}
            <section class="mt-8 createContainer">
                <span class="block addWisata__supadm">
                    <button type="button" id="btnTambah" onclick="location.href = '{{ route('wisata.create') }}'"
                        class="addWisata__cta px-5 py-2.5 text-sm">Tambah Wisata</button>
                </span>
            </section>
        </span>
        <div class="relative w-full overflow-x-auto">
            <section class="tableWrapper">
                <table class="relative w-full text-sm text-left dark:text-gray-400 dataTable" style="width: 100%;">
                    <thead class="text-gray-700 uppercase text-md dataTable__wrapper whitespace-nowrap">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-l dark:border-gray-700">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Nama Pengelolah
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Kota
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Nama Wisata
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Fasilitas
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Kecamatan
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Diskon
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Informasi Lainnya
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-top bg-white border-b border-l dark:border-gray-700 ">
                            <th scope="row" class="px-6 py-4 font-medium border-l border-r dark:border-gray-700">
                                1.
                            </th>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Surabaya
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Air Terjun Madakaripura
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700 whitespace-nowrap">
                                Alam
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Toilet umum, Area parkir mobil, Area parkir bus, Umkm
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsam, doloremque alias
                                fuga magni veniam corporis.
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700 whitespace-nowrap">
                                Rp. 450.000
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                15%
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                <button data-modal-target="tableModal__view" data-modal-toggle="tableModal__view"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    <i class="ri-folder-info-fill"></i>
                                    Lihat Informasi
                                </button>
                                <div id="tableModal__view" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-7xl max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <div class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer"
                                                    data-modal-hide="tableModal__view">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </div>
                                            </div>
                                            <div class="p-6 infoNext__wisata grid grid-cols-2 gap-6">
                                                <section class="wisata__listWrapper">
                                                    <div
                                                        class="headingInformasi__list mb-5 font-medium text-xl relative overflow-hidden flex gap-3">
                                                        <span class="headIcon p-2 px-3">
                                                            <i class="ri-list-check"></i>
                                                        </span>
                                                        <h2 class="p-2">
                                                            List Informasi Wisata
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="infoWisata__add flex flex-col gap-2 text-black font-light relative overflow-hidden overflow-y-auto h-64 pr-4">
                                                        <span
                                                            class="listInfo__item relative border-b border-gray-600 pl-4 pb-2">Toilet
                                                            Umum</span>
                                                        <span
                                                            class="listInfo__item relative border-b border-gray-600 pl-4 pb-2">Fasilitas
                                                            Disabilitas</span>
                                                        <span
                                                            class="listInfo__item relative border-b border-gray-600 pl-4 pb-2">Taman
                                                            Bermain Untuk
                                                            Anak-Anak</span>
                                                        <span
                                                            class="listInfo__item relative border-b border-gray-600 pl-4 pb-2">Cafetaria</span>
                                                        <span
                                                            class="listInfo__item relative border-b border-gray-600 pl-4 pb-2">Lorem
                                                            ipsum dolor sit amet consectetur adipisicing elit. Cum,
                                                            cumque beatae! Ab, provident sunt! A nostrum, doloribus
                                                            totam in porro laboriosam adipisci error, omnis aut delectus
                                                            commodi accusamus fuga veniam.</span>
                                                    </div>
                                                </section>
                                                <section class="wisata__listSlider">
                                                    <div
                                                        class="headingInformasi__list mb-5 font-medium text-xl relative overflow-hidden flex gap-3">
                                                        <span class="headIcon p-2 px-3">
                                                            <i class="ri-image-fill"></i>
                                                        </span>
                                                        <h2 class="p-2">
                                                            Thumbnail Wisata
                                                        </h2>
                                                    </div>
                                                    <div class="wisata__listWrapper">
                                                        <div class="slideInner__tables swiper slideThumbnails">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <figure class="slideTable__items">
                                                                        <img src="https://images.unsplash.com/photo-1682685794761-c8e7b2347702?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                                                            alt="" srcset="">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="slideTable__items">
                                                                        <img src="https://images.unsplash.com/photo-1597935022300-b6162cb647ca?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=760&q=80"
                                                                            alt="" srcset="">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="slideTable__items">
                                                                        <img src="https://images.unsplash.com/photo-1568516475772-498b4379829c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                                                                            alt="" srcset="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    var swiper = new Swiper(".slideThumbnails", {
        {{--  slidesPerView: 2,  --}}
        spaceBetween: 7,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush