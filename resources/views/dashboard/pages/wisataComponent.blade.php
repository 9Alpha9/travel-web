@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')
<div class="relative mt-10 contentContainer">
    <div class="relative w-full pt-20 pb-20 contentWrapper__dashboard">
        <div class="relative headerDB__items">
            <span class="block py-6 headerTitle">
                <h1>Wisata</h1>
            </span>
            <form action="POST" id="">
                <div class="itemsDB__dataWisatawrapper">
                    <span class="block py-4 dbText__header">
                        <h1>Tempat Wisata</h1>
                    </span>
                    <div class="grid grid-cols-3 gap-4 dbData__Wisataitems">
                        <div class="dbData__listWisata">
                            <span class="flex flex-col inputWisata__name">
                                <label for="wisata__name" class="flex items-center py-2 ">
                                    <h3>
                                        Nama Wisata
                                        <span class="labelRequire__infowisata">*</span>
                                    </h3>
                                </label>
                                <input type="text" id="" name="wisataInput__name" class="rounded-lg inputSelection"
                                    placeholder="Gunung Bromo">
                            </span>
                        </div>
                        <div class="dbData__listWisata">
                            <span class="flex flex-col inputWisata__name">
                                <label for="wisata__name" class="flex items-center py-2 ">
                                    <h3>
                                        Kecamatan
                                        <span class="labelRequire__infowisata">*</span>
                                    </h3>
                                </label>
                                <input type="text" id="" name="wisataInput__name" class="rounded-lg"
                                    placeholder="Kecamatan Surabaya">
                            </span>
                        </div>
                        <div class="dbData__listWisata">
                            <span class="flex flex-col inputWisata__name">
                                <label for="wisata__name" class="flex items-center py-2 ">
                                    <h3>
                                        Kota
                                        <span class="labelRequire__infowisata">*</span>
                                    </h3>
                                </label>
                                <input type="text" id="" class="rounded-lg" name="wisataInput__name"
                                    placeholder="Kota Surabaya">
                            </span>
                        </div>
                    </div>
                    <div class="relative mt-12 facilityContainer">
                        <span class="block py-4 dbText__header">
                            <h1>Fasilitas Tempat Wisata</h1>
                        </span>
                        <div class="grid grid-cols-3 gap-4 facilityWrapper dbData__Wisataitems">
                            <div class="col-span-2 dbData__listWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Fasilitas Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <select name="wisataList__facility" id="facility">
                                        <option value="">Area Parkir</option>
                                        <option value="">Toilet</option>
                                        <option value="">Gazebo</option>
                                        <option value="">Pusat Informasi</option>
                                    </select>
                                </span>
                            </div>
                            <div class="dbData__listWisata">
                                <span class="relative flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Tambah Fasilitas Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <div class="relative w-full add__Customdb--cta">
                                        <input type="text" id="" class="w-[19rem]" name="wisataInput__name"
                                            placeholder="Kolam Renang">
                                        <button
                                            class="absolute top-0 bottom-0 right-0 z-20 px-4 add__Customebtn--cta">Tambah</button>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="relative mt-12 activityContainer">
                        <span class="block py-4 dbText__header">
                            <h1>Kategori Tempat Wisata</h1>
                        </span>
                        <div class="grid grid-cols-3 gap-4 activityWrapper dbData__Wisataitems">
                            <div class="col-span-2 dbData__listWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Kategori Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <select name="wisataList__activity" id="activity">
                                        <option value="">Wisata Alam</option>
                                        <option value="">Wisata Sejarah dan Budaya</option>
                                        <option value="">Wisata Petualangan</option>
                                        <option value="">Wisata Kuliner</option>
                                        <option value="">Wisata Religi</option>
                                    </select>
                                </span>
                            </div>
                            <div class="dbData__listWisata">
                                <span class="relative flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Tambah Kategori Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <div class="relative w-full add__Customdb--cta">
                                        <input type="text" id="" class="w-[19rem]" name="wisataInput__name"
                                            placeholder="Wisata Religi">
                                        <button
                                            class="absolute top-0 bottom-0 right-0 z-20 px-4 add__Customebtn--cta">Tambah</button>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 mb-16 buttonCta__container">
                        <span class="relative block button__Additems">
                            <button id="" type="submit" class="block p-4 rounded-lg addSection__cta">Tambah
                                Data</button>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
@push('scripts')
@endpush
