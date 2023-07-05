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
            <p class="text-sm text-gray-primary">Berikut adalah list dari tempat wisata yang ada di Jawa Timur.</p>
        </span>
        <div class="relative w-full overflow-x-auto">
            <section class="tableWrapper table-responsive">
                <table class="relative w-full text-sm text-left dark:text-gray-400 dataTable" style="width: 100%;">
                    <thead class="text-gray-700 uppercase text-md dataTable__wrapper whitespace-nowrap">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
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
                                Kategori Wisata
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                                Fasilitas Wisata
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-top bg-white border-b border-l dark:border-gray-700 ">
                            <th scope="row" class="px-6 py-4 font-medium border-l dark:border-gray-700">
                                1
                            </th>
                            <td class="px-6 py-4 border-l border-r dark:border-gray-700">

                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Surabaya
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Air Terjun Madakaripura
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Alam
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">
                                Toilet umum, Area parkir mobil, Area parkir bus, Umkm
                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">

                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">

                            </td>
                            <td class="px-6 py-4 border-r dark:border-gray-700">

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

@endpush