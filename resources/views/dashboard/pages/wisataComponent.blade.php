@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')
@foreach($errors->all() as $error)
{{ $error }}
@endforeach
<div class="relative mt-10 contentContainer">
    <div class="relative w-full pt-20 pb-20 contentWrapper__dashboard">
        <div class="relative headerDB__items">
            <span class="block py-6 headerTitle">
                <h1>Wisata</h1>
                <p>Silahkan isi form berikut untuk ditampilkan pada halaman website.</p>
            </span>
            <form action="{{ route('wisata.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="itemsDB__dataWisatawrapper">
                    <div class="grid grid-cols-3 gap-4 dbData__Wisataitems">
                        <div class="dbWisata__header">
                            <span class="block py-4 dbText__header">
                                <h1>Nama Wisata</h1>
                            </span>
                            <div class="dbData__listWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Nama Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <input type="text" id="inputNama" name="nama_wisata"
                                        class="rounded-lg inputSelection" placeholder="Wisata..." autocomplete="off"
                                        value="{{ !empty($tableWisata) ? $tableWisata->first()->nama_wisata : '' }}">
                                    @if($errors->has('nama_wisata'))
                                    @foreach($errors->get('nama_wisata') as $message)
                                    <div class="errorsPop__messages">
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">Oops!</span> {{ $message }}
                                        </p>
                                    </div>
                                    @endforeach
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="dbWisata__header">
                            <span class="block py-4 dbText__header">
                                <h1>Kota / Kabupaten</h1>
                            </span>
                            <div class="dbData__listWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Kota / Kabupaten
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <select name="kota" id="inputKota">
                                        <option value="" selected hidden>Pilih Kota</option>
                                        @foreach($tableKota as $row)
                                        <option value="{{ $row->id }}" @empty($tableWisata) @else @if($tableWisata->
                                            first()->id_kota
                                            == $row->id)
                                            selected
                                            @endif
                                            @endempty
                                            >{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('kota'))
                                    @foreach($errors->get('kota') as $message)
                                    <div class="errorsPop__messages">
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">Oops!</span> {{ $message }}
                                        </p>
                                    </div>
                                    @endforeach
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="dbWisata__header">
                            <span class="block py-4 dbText__header">
                                <h1>Kecamatan</h1>
                            </span>
                            <div class="dbData__listWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Kecamatan
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <select name="kecamatan" id="inputKecamatan">
                                        <option value="" selected hidden>Pilih Kecamatan</option>
                                    </select>
                                    @if($errors->has('kecamatan'))
                                    @foreach($errors->get('kecamatan') as $message)
                                    <div class="errorsPop__messages">
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">Oops!</span> {{ $message }}
                                        </p>
                                    </div>
                                    @endforeach
                                    @endif
                                    {{-- <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <span class="font-medium">Oops!</span> Kecamatan tidak boleh kosong!
                                    </p> --}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 mt-12 tagPrice__Container">
                        <div class="priceWrapper">
                            <span class="block py-4 dbText__header">
                                <h1>Harga Tempat Wisata</h1>
                            </span>
                            <div class="dbData__priceWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Harga Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <div class="relative overflow-hidden priceTag__item">
                                        <div class="relative overflow-hidden inputPrice__list">
                                            <input type="text" id="inputHarga" name="harga"
                                                class="w-full font-thin h-[2.8rem] rounded-lg inputSelection focus:ring-0 currency"
                                                placeholder="500.000"
                                                value="{{ !empty($tableWisata) ? $tableWisata->first()->harga : '' }}">
                                            @if($errors->has('harga'))
                                            @foreach($errors->get('harga') as $message)
                                            <div class="errorsPop__messages">
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                                    <span class="font-medium">Oops!</span> {{ $message }}
                                                </p>
                                            </div>
                                            @endforeach
                                            @endif
                                            {{-- <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                                <span class="font-medium">Oops!</span> Harga tidak boleh kosong!
                                            </p> --}}
                                        </div>
                                        <div
                                            class="absolute top-0 left-0 p-2.5 px-4 font-semibold text-white rounded-l-lg diskonTag bg-primary-birent ">
                                            Rp
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="aksesbilitas">
                            <span class="block py-4 dbText__header">
                                <h1>Aksesbilitas</h1>
                            </span>
                            <div class="dbData__aksesbilitas">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Aksesbilitas
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <select name="aksesbilitas" id="aksesbilitas">
                                        <option value="" selected hidden>Pilih Aksesbilitas</option>
                                        @foreach($tableAksesbilitas as $row)
                                        <option value="{{ $row->id_aksesbilitas }}" @empty($tableAksesbilitas) @else
                                            @if($tableAksesbilitas->
                                            first()->id_aksesbilitas
                                            == $row->id_aksesbilitas)
                                            selected
                                            @endif
                                            @endempty
                                            >{{ $row->nama_aksesbilitas }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('aksesbilitas'))
                                    @foreach($errors->get('aksesbilitas') as $message)
                                    <div class="errorsPop__messages">
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">Oops!</span> {{ $message }}
                                        </p>
                                    </div>
                                    @endforeach
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="priceWrapper">
                            <span class="block py-4 dbText__header">
                                <h1>Harga Diskon Tiket</h1>
                            </span>
                            <div class="dbData__priceWisata">
                                <span class="relative flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex flex-col py-2 ">
                                        <div class="flex flex-row gap-1">
                                            <h3>
                                                Harga Diskon
                                            </h3>
                                            <span class="labelRequire__infowisata">*</span>
                                        </div>
                                    </label>
                                    <div class="relative w-full overflow-hidden diskonInput__list">
                                        <input type="number" id="inputDiskon" name="diskon"
                                            class="w-full h-[2.8rem] font-thin rounded-lg inputSelection focus:ring-0"
                                            placeholder="Harga Diskon..." min="0" maxlength="100"
                                            onKeyUp="if(this.value>100){this.value='100';}else if(this.value<0){this.value='0';}"
                                            value="{{ !empty($tableWisata) ? $tableWisata->first()->diskon : '' }}">
                                        @if($errors->has('diskon'))
                                        @foreach($errors->get('diskon') as $message)
                                        <div class="errorsPop__messages">
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                                <span class="font-medium">Oops!</span> {{ $message }}
                                            </p>
                                        </div>
                                        @endforeach
                                        @endif
                                        {{-- <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">Oops!</span> Harga diskon tidak boleh kosong!
                                        </p> --}}
                                        <div
                                            class="diskonTag absolute left-0 top-0 font-semibold bg-primary-birent p-2.5 text-white px-5 rounded-l-lg">
                                            %
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <span class="block col-span-3 text-gray-600 diskonInfo w-full">
                            <i class="ri-information-fill text-cta-login-birent"></i>&nbsp;Silahkan masukkan diskon
                            harga jika ada,
                            jika tidak
                            ada tawaran
                            diskon maka masukkan angka 0 (nol). Maksimal harga diskon yang diberikan adalah 100%.</span>
                    </div>
                    <div class="relative mt-12 facilityContainer">
                        <span class="block py-4 dbText__header">
                            <h1>Fasilitas Tempat Wisata</h1>
                        </span>
                        <div class="facilityWrapper dbData__Wisataitems">
                            <div class="dbData__listWisata">
                                <span class="flex flex-col inputWisata__name">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Fasilitas Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <div data-modal-target="modalFacility__list" data-modal-toggle="modalFacility__list"
                                        class="block w-full md:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">
                                        Pilih Fasilitas Wisata
                                    </div>
                                    <span class="py-2 text-xs font-normal listingFacility__new">
                                        <i> Fasilitas Tempat Wisata Yang Dipilih :</i>
                                    </span>
                                    @if($errors->has('listFasilitas'))
                                    @foreach($errors->get('listFasilitas') as $message)
                                    <div class="errorsPop__messages">
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">Oops!</span> {{ $message }}
                                        </p>
                                    </div>
                                    @endforeach
                                    @endif
                                    {{-- <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <span class="font-medium">Oops!</span> Fasilitas wisata
                                        tidak boleh kosong!
                                    </p> --}}
                                    <div id="modalFacility__list" tabindex="-1"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-[70rem] max-h-full ">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div
                                                    class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3>Pilih Fasilitas Wisata</h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="modalFacility__list">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <div class="p-6 space-y-6">
                                                    <div class="listCheck__facilityContainer">
                                                        <div
                                                            class="grid grid-cols-2 items-center w-full gap-4 align-middle facilityList__content  max-h-[13rem] whitespace-nowrap overflow-x-auto p-4">
                                                            @foreach($tableFasilitas as $row)
                                                            <span class="relative block facilityCheck__items">
                                                                <label class="flex flex-row w-full gap-2">
                                                                    <input type="checkbox" name="checkFasilitas"
                                                                        value="{{ $row->id_kategori_fasilitas }}"
                                                                        data-nama="{{ $row->kategori_fasilitas }}">
                                                                    <h2
                                                                        class="block -mt-1 font-normal text-md textFacility">
                                                                        {{ $row->kategori_fasilitas }}
                                                                    </h2>
                                                                </label>
                                                            </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listHistory__container ">
                                        <div class="flex flex-row flex-wrap w-full gap-2 py-4 whitespace-normal listHistory__content"
                                            id="fasilitasHistory">
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="grid w-full grid-cols-2 gap-4 continer__selectionDiv">
                        <div class="relative mt-12 activityContainer">
                            <span class="block py-4 dbText__header">
                                <h1>Kategori Tempat Wisata</h1>
                            </span>
                            <div class="activityWrapper">
                                <div class="dbData__listWisata">
                                    <span class="flex flex-col inputWisata__name">
                                        <label for="wisata__name" class="flex items-center py-2 ">
                                            <h3>
                                                Kategori Tempat Wisata
                                                <span class="labelRequire__infowisata">*</span>
                                            </h3>
                                        </label>
                                        <select name="wisataList__activity" id="activity">
                                            <option value hidden disabled selected>Silahkan Pilih List Kategori Wisata
                                            </option>
                                            @foreach($tableKategori as $row)
                                            <option value="{{ $row->id_kategori_wisata }}">{{ $row->nama_kategori_wisata
                                                }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('wisataList__activity'))
                                        @foreach($errors->get('wisataList__activity') as $message)
                                        <div class="errorsPop__messages">
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                                <span class="font-medium">Oops!</span> {{ $message }}
                                            </p>
                                        </div>
                                        @endforeach
                                        @endif
                                        {{-- <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                            <span class="font-medium">Oops!</span> Kategori wisata
                                            tidak boleh kosong!
                                        </p> --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- List Info Wisata --}}
                        <div class="mt-12 listInfo__container">
                            <span class="block py-4 dbText__header">
                                <h1>Informasi Tempat Wisata</h1>
                            </span>
                            <div class="relative listInfo__content ">
                                <div class="dbData__listWisata">
                                    <label for="wisata__name" class="flex items-center py-2 ">
                                        <h3>
                                            Informasi Tempat Wisata
                                            <span class="labelRequire__infowisata">*</span>
                                        </h3>
                                    </label>
                                    <button data-modal-target="infoModal" data-modal-toggle="infoModal"
                                        class="block modalToogle text-white rounded-lg text-sm w-full px-5 py-2.5 text-center hover:bg-blue-800"
                                        type="button">
                                        Tambah / Edit Informasi Wisata
                                    </button>
                                    {{-- <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                        <span class="font-medium">Oops!</span> Informasi wisata
                                        tidak boleh kosong!
                                    </p> --}}
                                    <div id="infoModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-4xl max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Tambah Informasi Wisata
                                                    </h3>
                                                    <button type="button"
                                                        class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="infoModal">
                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <div class="p-6 kategoriInput__container">
                                                    <span class="block headWrapper">
                                                        <p
                                                            class="p-2 font-thin text-white text-md bg-primary-birent headText">
                                                            <i class="ri-information-fill"></i>
                                                            Data informasi
                                                            yang
                                                            dimasukkan
                                                            akan otomatis bertambah, silakan tambah informasi wisata
                                                            dengan
                                                            mengisi
                                                            form.
                                                        </p>
                                                    </span>
                                                    <section class="pt-6 infoWisata__Wrapper">
                                                        <label for="inputInformasi"
                                                            class="block mb-3 text-sm text-gray-900 labelInput dark:text-white">Tambahkan
                                                            List Informasi Wisata</label>
                                                        <span class="flex flex-row items-center gap-4 pb-4">
                                                            <div class="flex flex-col w-full flexInput">
                                                                <input type="text"
                                                                    class="bg-gray-50 border border-gray-300 text-md font-normal rounded-lg w-full p-2.5 inputFields"
                                                                    autocomplete="off" placeholder="Informasi Wisata..."
                                                                    name="inputInformasi[]">
                                                            </div>
                                                            <span class="relative">
                                                                <button type="button" onclick="deleteInput(this)"
                                                                    disabled
                                                                    class="p-2 px-4 py-10 mt-0 rounded-lg cursor-pointer deleteCta__btn"><i
                                                                        class="ri-delete-bin-7-fill"></i></button>
                                                            </span>
                                                        </span>
                                                    </section>
                                                    <section class="relative block space-y-5 moreSpace">
                                                        <button type="button"
                                                            class="p-2 py-10 mt-3 rounded-lg inputCta__btn"><i
                                                                class="ri-add-line"></i> Tambah Input Informasi
                                                            Wisata</button>
                                                    </section>
                                                </div>
                                                <div
                                                    class="flex items-center  p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="infoModal" type="button" id="saveInfo"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center ">
                                                        Simpan Informasi Wisata
                                                    </button>
                                                    <button data-modal-hide="infoModal" type="button" id=""
                                                        class="text-gray-500 btnCancel text-white rounded-lg text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tinyMce__container mt-[4rem] relative">
                        <span
                            class="tinyMce__infoheading inline-block py-3 px-3 rounded-md text-white whitespace-wrap w-[75rem]"><i
                                class="text-lg ri-information-fill"></i>
                            Silahkan masukkan deskripsi tempat wisata yang akan anda upload kedalam website !
                        </span>
                        <section class="w-full py-3 tinyText__controlarea">
                            <textarea name="artikel"></textarea>
                        </section>
                    </div>
                    {{-- Thumbnail Wisata --}}
                    <div class="thumbnailContainer">
                        <div class="relative mt-12 thumbnail__wrapperContent">
                            <span class="block py-4 dbText__header">
                                <h1>Gallery List Wisata</h1>
                                <p class="py-3 text-xs text-gray-500">Thumbnail wisata digunakan untuk memberikan
                                    informasi
                                    halaman
                                    awal
                                    foto gallery dari
                                    tempat wisata. Silahkan upload foto dengan menggunakan format
                                    <i>.Png, .Jpg, .Jpeg, </i>atau<i> Webp</i>, maksimal ukuran foto adalah 1920x1080.
                                </p>
                            </span>
                            <div class="inputSection__thumbnail">
                                <div class="relative flex justify-between py-6 w-[75rem]">
                                    <input type="file" name="Thumbnail-images" id="wisataImages"
                                        accept="image/png, image/jpg, image/jpeg, image/webp" class="thumbnail__Btncta"
                                        multiple>
                                    <input type="text" name="images" hidden>
                                </div>
                            </div>
                            <div class="bannerContent__thumbnail">
                                <div class="flex flex-row gap-2 overflow-hidden tumbnail__content">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Thumbnail Wisata --}}
                    <div class="mt-16 mb-16 buttonCta__container">
                        <span class="relative block button__Additems">
                            <button id="" type="submit" class="block p-3 px-4 rounded-lg addSection__cta">Simpan
                                Data Wisata</button>
                        </span>
                    </div>
                </div>
                <input type="text" name="listFasilitas" hidden>
                <input type="text" name="listExtFasilitas" hidden>
            </form>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    $('.deleteCta__btn').on('click', function(){
        deleteInput(this);
    });

    $('.editBtn').on('click', function(){
        href = "{{ route('kategori.update', 'idKategori') }}";
        href = href.replace('idKategori', $(this).data('id'));
        $('#inputedNama').val($(this).data('nama'));
        $('#kategoriFieldUpdate').prop('action', href);
    });

    function deleteInput(e){
        $(e).closest('span').parent().closest('span').remove();
        statusInformasi();
    }

    $('input[name="inputInformasi[]"]').on('change', function(){
        disableButton(this);
    });

    function statusInformasi(){
        let informasi = $('input[name="inputInformasi[]"]').length;
        let status;
        if (informasi > 1) {
            status = false;
        } else {
            status = true;
        }
        $.each(informasi, function(key, value) {
            disableButton(value, status);
        });
    }

    function disableButton(e, status){
        $(e).closest('span').find('button').prop('disabled', status);
    };

    $('.inputCta__btn').on('click', function(){
        let html = "";
        html +=
        '<span class="flex flex-row items-center gap-4 pb-4">'
        + '<div class="flex flex-col w-full flexInput">'
        + '<input type="text" id="informaisInput" '
        + 'autocomplete="off"'
        + 'class="bg-gray-50 border border-gray-300 text-gray-900 font-thin text-sm rounded-lg w-full p-2.5"'
        + 'placeholder="Informasi Wisata" name="inputInformasi[]" onchange="disableButton(this)">'
        + '</div>'
        + '<span class="relative">'
        + '<button type="button" onclick="deleteInput(this)" class="p-2 px-4 py-10 mt-0 rounded-lg deleteCta__btn"><i '
        + 'class="ri-delete-bin-7-fill"></i></button>'
        + '</span>'
        + '</span>';
        $('section.infoWisata__Wrapper').append(html);
        statusInformasi();
    });

</script>
<script>
    tinymce.init({
        forced_root_block : "",
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks | bold italic underline strikethrough | align lineheight | numlist bullist indent outdent | removeformat',
      width: 1201
    });
</script>
<script>
    const paragraph = document.querySelector('.textFacility');
    paragraph.addEventListener('dblclick', event => {
    console.log('double-click event triggered');

    if (document.selection && document.selection.empty) {
        document.selection.empty();
    } else if (window.getSelection) {
        const selection = window.getSelection();
        selection.removeAllRanges();
    }
    });
</script>
<script>
    let arrFasilitas = [];
    let extFasilitas = [];
    let idkecamatan;
    $('input[name="checkFasilitas"]').on('change', function(){
        setFasilitas($(this).val(), $(this).data('nama'));
    });

    @empty($tableWisata)
    @else
    idkecamatan = '{{ $tableWisata->first()->id_kecamatan }}';
    $(document).ready(function() {
        $('#inputKota').trigger('change');
    });
    console.log(idkecamatan);
    @endempty

    $('#inputKota').on('change', function(){
        $.post("{{ route('data.kecamatan') }}", {
            kota:$(this).val()
        }, function(result){
            console.log(result);
            let data = "";
            result.kecamatan.forEach(element => {
                data += "<option value='" + element.id + "'";
                if (idkecamatan === element.id) {
                    data += 'selected';
                }
                data += '>' + element.name + '</option>';
            });
            $('#inputKecamatan').html(data);
        });
    });

    function setFasilitas(id, name){
        if(arrFasilitas.indexOf(id) != -1){
            removeHistory(id);
        }
        else {
            arrFasilitas.push(id);
            let html = '<span class="block listHistory">' +
                    '<button type="button" onclick="removeHistory(\'' + id + '\')" name="btnHistory" id="btnHistory_' + id + '" class="p-1 px-3 font-normal text-left rounded-lg listHistory__cta">' +
                    name +
                    '</button>' +
                    '</span>';
            $('#fasilitasHistory').append(html);
            setInputFasilitas();
        }
    }

    function removeHistory(id){
        arrFasilitas.remove(id);
        $('#btnHistory_' + id).closest('span').remove();
        $('input[value="' + id + '"]').prop('checked', false);
        setInputFasilitas();
    }

    $('#tambahFasilitas').on('click', function(){
        let nameExt = $('#inputExtFasilitas').val();
        extFasilitas.push(nameExt);
        let html = '<span class="block listHistoryExt__content">' +
                    '<button type="button" onclick="removeExt(\'' + nameExt + '\')" name="btnExt" id="btnExt_' + nameExt + '" class="p-1 px-3 font-normal text-left rounded-lg listHistory__cta">' +
                    nameExt +
                    '</button>' +
                    '</span>';
        $('#fasilitasExt').append(html);
        $('#inputExtFasilitas').val('');
        setInputFasilitas();
    });

    function removeExt(nameExt){
        extFasilitas.remove(nameExt);
        $('#btnExt_' + nameExt).closest('span').remove();
        setInputFasilitas();
    }

    function setInputFasilitas(){
        $('input[name="listFasilitas"]').val(JSON.stringify(arrFasilitas));
        $('input[name="listExtFasilitas"]').val(JSON.stringify(extFasilitas));
    }
</script>

{{-- PREVIEW & DELETE UPLOADED IMAGE--}}
<script>
    // GLOBAL ARRAY DELETE BY VALUE
    // Array.prototype.remove = function() {
    //     var what, a = arguments, L = a.length, ax;
    //     while (L && this.length) {
    //         what = a[--L];
    //         while ((ax = this.indexOf(what)) !== -1) {
    //             this.splice(ax, 1);
    //         }
    //     }
    //     return this;
    // };

    var imgFile = new Array();
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#wisataImages").on("change", function(e) {
                var fileLoaded = 0;
                var allFiles = e.target.files;
                for (var i = 0; i < allFiles.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var obj = {};
                        obj['name'] = allFiles[fileLoaded].name;
                        obj['img'] = e.target.result;
                        imgFile.push(obj);
                        fileLoaded++;
                        if(fileLoaded === allFiles.length){
                            previewThumb();
                        }
                    };
                    reader.readAsDataURL(allFiles[i]);
                };
            });

        } else {
            alert("Your browser doesn't support to File API")
        }
    });

    function previewThumb(){
        var html = "";
        for(var i = 0; i < imgFile.length; i++){
            html += '<div class="thumbnail__items">';
            html += '<div class="thumbnailView__img">';
            html += '<figure class="relative block figureInner">';
            html += '<img src="' + imgFile[i].img + '" class="relative rounded-2xl imgThumb" alt="' + imgFile[i].name + '" title="' + imgFile[i].name + '">';
            html += '<div class="thumbnailSettings">';
            html += '<span class="block thumbnailNumber">';
            html += '<h2 class="rounded-full">' + (i+1) + '</h2>';
            html += '</span>';
            html += '<span class="block thumbnailDelete">';
            html += '<button class="rounded-full btnThumb__delete" type="button" onclick="thumbDelete(this)">';
            html += '<i class="ri-delete-bin-7-fill"></i>';
            html += '</button>';
            html += '</span>';
            html += '</div>';
            html += '</figure>';
            html += '</div>';
            html += '</div>';
        }

        $('[name="images"]').val(JSON.stringify(imgFile));
        $('.tumbnail__content').html(html);
    }

    function thumbDelete(e){
        var tns = $('.thumbnail__items').toArray();
        var selectedTns = $(e).closest('.thumbnail__items');
        var selectedImg = $(e).closest('.thumbnailSettings').parent().find('img').attr('src');

        // imgFile.remove(selectedImg);
        imgFile = imgFile.filter(image => image.img != selectedImg);

        previewThumb();
    }
</script>
@endpush