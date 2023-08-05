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
                        @foreach($tableWisata as $row)
                        <tr class="align-top bg-white border-b border-l dark:border-gray-700 ">
                            <th scope="row" class="px-6 py-4 font-medium border-l border-r dark:border-gray-700">
                                {{ $loop->iteration }}.
                            </th>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                {{ $row->user->full_name }}
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700 whitespace-nowrap">
                                {{ $row->kecamatan->kota->name }}
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                {{ $row->nama_wisata }}
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700 whitespace-nowrap">
                                {{ $row->kategoriwisata->nama_kategori_wisata }}
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700 flex flex-wrap w-40">
                                <span class="block">
                                    @php($fasilitas = App\Models\FasilitasWisata::where('id_wisata',
                                    $row->id_wisata)->get())
                                    @foreach($fasilitas as $row2)
                                    {{ $row2->kategorifasilitas->kategori_fasilitas }}
                                    @if($row->last != true)
                                    ,
                                    @endif
                                    @endforeach
                                </span>
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                {{ $row->kecamatan->name }}
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700 whitespace-nowrap">
                                Rp
                                {{ number_format($row->harga, 2, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                {{ $row->diskon }}%
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                <button data-modal-target="tableModal__view" data-modal-toggle="tableModal__view"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    <i class="ri-folder-info-fill"></i>
                                    Lihat Informasi
                                </button>
                                {{-- MODAL --}}
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
                                                        @php($informasi =
                                                        App\Models\Informasi::where('id_wisata',
                                                        $row->id_wisata)->get())
                                                        @foreach($informasi as $row3)
                                                        <span
                                                            class="listInfo__item relative border-b border-gray-600 pl-4 pb-2">{{
                                                            $row3->informasi }}</span>
                                                        @endforeach
                                                    </div>
                                                </section>
                                                <section class="wisata__listSlider">
                                                    <div
                                                        class="headingInformasi__list mb-5 font-medium text-xl relative overflow-hidden flex gap-3">
                                                        <span class="headIcon p-2 px-3">
                                                            <i class="ri-image-fill"></i>
                                                        </span>
                                                        <h2 class="p-2">
                                                            Gallery Wisata
                                                        </h2>
                                                    </div>
                                                    <div class="wisata__listWrapper">
                                                        <div class="slideInner__tables swiper slideThumbnails">
                                                            <div class="swiper-wrapper">
                                                                @php($gambar =
                                                                App\Models\GambarWisata::where('id_wisata',
                                                                $row->id_wisata)->get())
                                                                @foreach($gambar as $row4)
                                                                <div class="swiper-slide">
                                                                    <figure class="slideTable__items">
                                                                        <img src="{{ asset('gallery-wisata/'. str_replace(' ', '_', $row->nama_wisata) . '/' . $row4->nama_gambar) }}"
                                                                            alt="{{ $row4->nama_gambar }}" srcset="">
                                                                    </figure>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                        </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
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
            {
                {
                    --slidesPerView % 3 A % 202 % 2 C--
                }
            }
            spaceBetween: 7,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
</script>
@endpush