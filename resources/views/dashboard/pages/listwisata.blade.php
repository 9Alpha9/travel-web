@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')
<div class="py-10 pb-20 containerTambah__wisata">
    <div class="mt-20 wisata__wrapper wisata__tableCount"></div>
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
                    class="addWisata__cta px-5 py-2.5 text-sm">Tambah Tempat Wisata</button>
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
                        {{-- <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                            Kategori
                        </th> --}}
                        <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                            Fasilitas Wisata
                        </th>
                        <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                            Kecamatan
                        </th>
                        <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                            Aksesbilitas
                        </th>
                        <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                            Diskon
                        </th>
                        <th scope="col" class="px-6 py-3 border-r w-60 dark:border-gray-700">
                            Informasi Lainnya
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tableWisata as $row)
                    <tr class="align-middle bg-white border-b border-l dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium border-b border-l border-r dark:border-gray-700">
                            {{ $loop->iteration }}.
                        </th>
                        <td class="px-6 py-4 border-b border-r dark:border-gray-700">
                            {{ !empty($row->user) ? $row->user->full_name : '' }}
                        </td>
                        <td class="px-6 py-4 border-b border-r dark:border-gray-700 whitespace-nowrap">
                            {{ $row->kecamatan->kota->name }}
                        </td>
                        <td
                            class="px-6 py-4 font-bold uppercase border-b border-r dark:border-gray-700 whitespace-nowrap">
                            {{ $row->nama_wisata }}
                        </td>
                        {{-- <td
                            class="px-6 py-4 font-bold uppercase border-b border-r dark:border-gray-700 whitespace-nowrap">
                            {{ $row->kategoriwisata->nama_kategori_wisata }}
                        </td> --}}
                        <td
                            class="flex flex-wrap w-[15rem] max-w-[15rem] px-6 border-b border-r dark:border-gray-700 h-14 overflow-auto ">
                            <span class="overflow-hidden leading-7">
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
                        <td class="px-6 py-4 font-bold uppercase border-b border-r dark:border-gray-700">
                            {{ $row->kecamatan->name }}
                        </td>
                        <td class="px-6 py-4 font-bold uppercase border-b border-r dark:border-gray-700">
                            {{ $row->aksesbilitas->nama_aksesbilitas }}
                        </td>
                        <td class="px-6 py-4 border-b border-r dark:border-gray-700 whitespace-nowrap">
                            Rp
                            {{ number_format($row->harga, 2, ',', '.') }}
                        </td>
                        <td class="px-6 py-4 text-center border-b border-r dark:border-gray-700">
                            {{ $row->diskon }}%
                        </td>
                        <td class="px-6 py-4 border-b border-r dark:border-gray-700">
                            <div class="flex flex-row gap-2 modalInfo__more">
                                <button data-modal-target="tableModal__view#{{ $row->id_wisata }}"
                                    data-modal-toggle="tableModal__view#{{ $row->id_wisata }}"
                                    class="whitespace-nowrap block text-white bg-green-700 hover:bg-green-800 focus:ring-3 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center "
                                    type="button">
                                    <i class="ri-eye-fill"></i> Lainnya
                                </button>
                                {{-- MODAL --}}
                                <div id="tableModal__view#{{ $row->id_wisata }}" data-modal-backdrop="static"
                                    tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-h-full max-w-7xl">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <div class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg cursor-pointer hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="tableModal__view#{{ $row->id_wisata }}">
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
                                            <div class="grid grid-cols-2 gap-6 p-6 infoNext__wisata">
                                                <section class="wisata__listWrapper">
                                                    <div
                                                        class="relative flex gap-3 mb-5 overflow-hidden text-xl font-medium headingInformasi__list">
                                                        <span class="p-2 px-3 headIcon">
                                                            <i class="ri-list-check"></i>
                                                        </span>
                                                        <h2 class="p-2">
                                                            List Informasi Wisata
                                                        </h2>
                                                    </div>
                                                    <div
                                                        class="relative flex flex-col h-64 gap-2 pr-4 overflow-hidden overflow-y-auto font-light text-black infoWisata__add">
                                                        @php($informasi =
                                                        App\Models\Informasi::where('id_wisata',
                                                        $row->id_wisata)->get())
                                                        @foreach($informasi as $row3)
                                                        <span
                                                            class="relative pb-2 pl-4 border-b border-gray-600 listInfo__item">{{
                                                            $row3->informasi }}.</span>
                                                        @endforeach
                                                    </div>
                                                </section>
                                                <section class="wisata__listSlider">
                                                    <div
                                                        class="relative flex gap-3 mb-5 overflow-hidden text-xl font-medium headingInformasi__list">
                                                        <span class="p-2 px-3 headIcon">
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
                                                            {{-- <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <figure class="slideTable__items">
                                                                        <img src="https://images.unsplash.com/photo-1682685796852-aa311b46f50d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                                                            alt="" srcset="">
                                                                    </figure>
                                                                </div>
                                                            </div> --}}
                                                            <div class="swiper-button-next"></div>
                                                            <div class="swiper-button-prev"></div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-2 action__button">
                                    <span class="actionEdit__cta">
                                        <button data-modal-target="staticModal" data-modal-toggle="editList"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 flex w-24 h-full text-center align-middle justify-center items-center relative gap-2"
                                            type="button">
                                            <a href="{{ route('wisata.edit', $row->id_wisata) }}"><i
                                                    class="ri-pencil-fill"></i> Edit</a>
                                        </button>
                                    </span>
                                    <div class="rounded-md bg-button-red hover:bg-button-red-hover">
                                        <button type="button" id="listDelete"
                                            class="px-5 py-2.5 text-white btnDelete flex w-24 h-full text-center align-middle justify-center items-center relative gap-2"
                                            data-no="{{ $loop->iteration }}"
                                            href="{{ route('wisata.destroy', $row->id_wisata) }}">
                                            <i class="ri-delete-bin-7-fill"></i> Hapus
                                        </button>
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
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });
</script>
@endpush