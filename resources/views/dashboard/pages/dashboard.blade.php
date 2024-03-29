@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')
<div class="relative mt-10 contentContainer">
    <div class="relative w-full pt-20 contentWrapper__dashboard">
        <div class="relative headerDB__items">
            <span class="block py-6 headerTitle">
                <h1 class="font-medium">Dashboard</h1>
            </span>
            <div class="flex flex-row gap-3 topDB__information">
                <div class="informationContent__items jumlahWisata">
                    <span class="flex items-center gap-3 align-middle headingInformation whitespace-nowrap">
                        <i class="text-xl ri-map-pin-2-fill infoDB__icons iconsTour__title"></i>
                        <h2 class="font-semibold">Jumlah Wisata</h2>
                    </span>
                    <div class="wisataNumber__count">
                        <div class="flex flex-col count__wisataItems whitespace-nowrap">
                            <span class="pt-4 numberOf__wisata">
                                {{ $tableWisata->count('id') }} Wisata
                            </span>
                            <span class="z-10 smallInfo">
                                Seluruh Wahana Di Wilayah Malang
                        </div>
                    </div>
                </div>
                <div class="informationContent__items jumlahKota__wisata">
                    <span class="flex items-center gap-3 align-middle headingInformation whitespace-nowrap">
                        <i class="text-xl ri-map-fill infoDB__icons iconsCity__title"></i>
                        <h2 class="z-10 font-semibold">Jumlah Kota atau Kabupaten</h2>
                    </span>
                    <div class="kotaNumber__count">
                        <div class="flex flex-col count__kotaItems whitespace-nowrap">
                            <span class="pt-4 numberOf__kota">
                                {{ $tableKota->count('id') }} Kota
                            </span>
                            <span class="z-10 smallInfo">
                                diseluruh Jawa Timur
                            </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="informationContent__items kecamatansWisata">
                    <span class="flex items-center gap-3 align-middle headingInformation whitespace-nowrap">
                        <i class="text-xl ri-road-map-fill infoDB__icons iconsSubdistrict__title"></i>
                        <h2 class="z-10 font-semibold">Jumlah Kecamatan</h2>
                    </span>
                    <div class="kecamatansNumber__count">
                        <div class="flex flex-col count__kecamatansItems whitespace-nowrap">
                            <span class="pt-4 numberOf__kecamatans">
                                {{ $tableKota->sum('kecamatan_count') }} Kecamatan
                            </span>
                            <span class="z-10 smallInfo">
                                diseluruh Jawa Timur
                            </span>
                        </div>
                    </div>
                </div>
                <div class="informationContent__items usersCount">
                    <span class="flex items-center gap-3 align-middle headingInformation whitespace-nowrap">
                        <i class="text-xl ri-user-fill infoDB__icons iconsUser__title"></i>
                        <h2 class="z-10 font-semibold">Jumlah Pengelolah</h2>
                    </span>
                    <div class="usersNumber__count">
                        <div class="flex flex-col count__usersItems whitespace-nowrap">
                            <span class="pt-4 numberOf__users">
                                {{ $tablePengelolah->count('id_user') }} Pengelolah
                            </span>
                            <span class="z-10 smallInfo">
                                Jumlah total pengelolah aktif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="itemsDB__datawrapper">
                <div class="grid grid-cols-2 gap-3 dbData__items">
                    <div class="dbData__list">empty data</div>
                    <div class="dbData__list">empty data</div>
                </div>
                <div class="py-6 testClass">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum ullam fugit similique deserunt omnis
                    velit in amet? Voluptatum, consequatur atque vero doloremque quod ipsum totam error rerum dolor aut
                    explicabo.
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush