@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')

<div class="pt-20 pb-20 kategoriContainer">
    <section class="relative headingTitle__wrapper">
        <span class="headingTitle__kategori">
            <h1>Tipe Wahana</h1>
        </span>
        <span>
            <p>Silahkan tambahkan tipe wahana dengan cara menekan tombol yang ada dibawah!</p>
        </span>
    </section>
    <section class="relative py-8 modalContainer">
        <button data-modal-target="kategoriModal" data-modal-toggle="kategoriModal" id="tambahForm"
            class="block modalToogle font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button"><i class="ri-file-add-fill"></i>
            Tambah Tipe Wahana
        </button>
        {{-- TAMBAH MODAL --}}
        <form action="{{ route('kategori.store') }}" id="kategoriField" method="post">
            {{ csrf_field() }}
            <div id="kategoriModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative max-w-5xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Tambah Tipe Wahana
                            </h3>
                            <button type="button"
                                class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="kategoriModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6 kategoriInput__container">
                            <span class="block headWrapper">
                                <p class="headText">Silahkan tambah tipe wahana dengan mengisi form dibawah!</p>
                            </span>
                            <section class="pt-6 kategoriWrapper">

                            </section>
                            <section class="relative block space-y-5 moreSpace">
                                <button type="button" class="w-full p-2 py-10 mt-3 rounded-lg inputCta__btn"><i
                                        class="ri-add-line"></i> Tambah
                                    Tipe Wahana</button>
                            </section>

                        </div>
                        <div
                            class="flex items-center justify-between p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="kategoriModal" type="submit" id=""
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center "><i
                                    class="ri-save-fill"></i>
                                Simpan Data
                            </button>
                            <button data-modal-hide="kategoriModal" type="button" id=""
                                class="text-gray-500 btnCancel__kategori text-white rounded-lg text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- EDIT MODAL --}}
        <form action="" id="kategoriFieldUpdate" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div id="kategoriedModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl overflow-x-auto overflow-y-hidden h-75">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Edit Tipe Wahana
                            </h3>
                            <button type="button"
                                class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="kategoriedModal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6 kategoriInput__container">
                            <span class="block headWrapper">
                                <p class="p-2 text-white headText bg-primary-birent "><i
                                        class="ri-information-fill"></i>&nbsp;Silahkan edit tipe wahana
                                    pada
                                    form dibawah!
                                </p>
                            </span>
                            <section class="pt-6 kategoriWrapper">
                                <div class="itemsEdit__wrapper">
                                    <div class="itemsEdit">
                                        <label for="inputedNama" class="block mb-3 text-sm font-medium">Nama
                                            Tipe
                                            Wahana</label>
                                        <span class="flex flex-row items-center gap-4 pb-4">
                                            <div class="flex flex-col w-full flexInput">
                                                <input type="text" id="inputedNama" required
                                                    class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg w-full p-2.5"
                                                    autocomplete="off" placeholder="Kategori Wisata" name="inputedNama">
                                            </div>
                                        </span>
                                    </div>
                                    <div class="itemsEdit">
                                        <label for="inputedKeterangan" class="block mb-3 text-sm font-medium">Keterangan
                                            Wahana</label>
                                        <span class="flex flex-row items-center gap-4 pb-4">
                                            <div class="flex flex-col w-full flexInput">
                                                <input type="text" id="inputedKeterangan" required
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg w-full p-2.5"
                                                    name="inputedKeterangan">
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div
                            class="flex items-center justify-between p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="kategoriedModal" type="submit" id=""
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center "><i
                                    class="ri-save-fill"></i>
                                Simpan Perubahan
                            </button>
                            <button data-modal-hide="kategoriedModal" type="button" id=""
                                class="text-gray-500 btnCancel__kategori text-white rounded-lg text-sm font-medium px-5 py-2.5 hover:text-white focus:z-10">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <div class="relative overflow-x-auto kategoriWrapper__content">
        <table class="w-full text-left text-md dark:text-gray-400 dataTable">
            <thead class="text-gray-700 uppercase text-md dataTable__wrapper whitespace-nowrap">
                <tr>
                    <th scope="col" class="px-6 py-3 border-l border-r dark:border-gray-700">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                        Nama Tipe Wahana
                    </th>
                    <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3 border-r dark:border-gray-700">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($tableTipe as $row)
                <tr class="align-middle bg-white border-b border-l dark:border-gray-700">
                    <th scope="row"
                        class="w-10 px-6 py-4 font-medium text-center border-b border-l dark:border-gray-700">
                        {{ $loop->iteration }}.
                    </th>
                    <th scope="row" class="w-10 px-6 py-4 font-medium border-b border-l dark:border-gray-700">
                        {{ $row->nama_tipe_wahana }}
                    </th>
                    <td class="px-6 py-4 border-b border-l border-r dark:border-gray-700">
                        {{ $row->keterangan }}
                    </td>
                    <td class="max-w-2xl px-6 py-4 border-b border-r dark:border-gray-700 w-60">
                        <section class="flex flex-row gap-6 actionTo__action">
                            <div class="relative actionItems">
                                {{-- Edit Modal Table --}}
                                <button class="block p-1 px-6 text-white rounded-md actionEdit__cta editBtn"
                                    data-id="{{ $row->id_tipe_wahana }}" data-modal-toggle="kategoriedModal"
                                    data-nama="{{ $row->nama_tipe_wahana }}" data-keterangan="{{ $row->keterangan }}"
                                    type="button">
                                    <span class="block gap-3">
                                        <i class="ri-pencil-fill"></i>
                                        Edit
                                    </span>
                                </button>
                            </div>
                            <div class="relative text-white actionItems">
                                <button type="button" id="" class="p-1 px-6 rounded-md actionDelete__cta btnDelete"
                                    data-no="{{ $loop->iteration }}"
                                    href="{{ route('kategori.destroy', $row->id_tipe_wahana) }}">
                                    <i class="ri-delete-bin-7-fill"></i> Hapus
                                </button>
                            </div>
                        </section>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div id="templateInput" style="display:none;">
    <div class="flex flex-row items-center gap-4 align-content-center itemsItems__wrapper">
        <div class="flex flex-col items">
            <label for="kategoriInput" class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Tipe
                Wahana</label>
            <span class="flex flex-row items-center gap-2 pb-4">
                <div class="flex flex-col w-96 flexInput">
                    <input type="text" id="kategoriInput" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5"
                        autocomplete="off" placeholder="Tipe Wahana ..." name="inputNama[]">
                </div>
            </span>
        </div>
        <div class="flex flex-col items">
            <label for="keteranganWahana"
                class="block mb-3 text-sm font-medium text-gray-900 dark:text-white">Keterangan
                Wahana</label>
            <span class="flex flex-row items-center gap-2 pb-4">
                <div class="flex flex-col w-96 flexInput">
                    <input type="text" id="keteranganWahana" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5"
                        placeholder="Keterangan Wahana ..." name="inputKeterangan[]">
                </div>
            </span>
        </div>
        <span class="relative items-center justify-center inline-block pt-4 align-content-center">
            <button type="button" onclick="deleteInput(this)"
                class="p-2 px-4 py-10 mt-0 rounded-lg cursor-pointer deleteCta__btn"><i
                    class="ri-delete-bin-7-fill"></i></button>
        </span>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('body').on('click', '.editBtn', function(){
        href = "{{ route('kategori.update', 'idKategori') }}";
        href = href.replace('idKategori', $(this).data('id'));
        $('#inputedNama').val($(this).data('nama'));
        $('#inputedKeterangan').val($(this).data('keterangan'));
        $('#kategoriFieldUpdate').prop('action', href);
    });

    function deleteInput(e){
        $(e).parents('div.itemsItems__wrapper').remove();
    }

    $('input[name="inputNama[]"]').on('change', function(){
        disableButton(this);
    });

    function disableButton(e){
        if($(e).val() != ""){
            $(e).closest('span').find('button').prop('disabled', false);
        }
        else{
            $(e).closest('span').find('button').prop('disabled', true);
        }
    };

    $('#tambahForm').on('click', function() {
        addTipe();
    });

    $('.inputCta__btn').on('click', function(){
        addTipe();
    });

    function addTipe() {
        let html = $('#templateInput').html();
        $('section.kategoriWrapper').append(html);
    }
</script>
@endpush