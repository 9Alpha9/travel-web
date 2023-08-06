@extends('dashboard.defaultDashboard')
@push('style')
@endpush

@section('pageContent')
<div class="fasilitasForm__container relative mt-12 w-[1201px] pl-12">
    <div class="fasilitasForm__wrapper pt-20 top-3 pb-20 relative">
        <span class="block">
            <h2 class="text-3xl text-text-primary font-medium">Fasilitas Wisata</h2>
            <p class="py-3 text-sm">Silahkan tambahkan kategori fasilitas wisata dengan cara menekan tombol yang ada
                dibawah!
            </p>
        </span>
        <section class="inputFasilitas__Wrapper py-6">
            <button data-modal-target="inputFasilitas__modal" data-modal-toggle="inputFasilitas__modal"
                class="block text-white inputFasilitas__modClass font-medium rounded-md text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button"><i class="ri-file-add-fill"></i>
                Tambah Kategori Fasilitas Wisata
            </button>
            <div id="inputFasilitas__modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-4xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-medium text-text-primary">Tambah Kategori Fasilitas Wisata</h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="inputFasilitas__modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6 relative py-3">
                            <label for="formFasilitas" class="block">Fasilitas
                                Wisata</label>
                            <span class="formFasilitas__wrap block w-full py-3">
                                <input type="text" id="addFasilitas"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    placeholder="Taman Bermain Anak ..." required>
                            </span>
                            <div class="relative pb-3 my-3">
                                <label for="addKeterangan" class="py-2 flex flex-row gap-3">Keterangan
                                    Fasilitas
                                    Wisata
                                    <span class="block text-xs">(Opsional)</span>
                                </label>
                                <textarea id="addKeterangan" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Isi keterangan fasilitas ..."></textarea>
                            </div>
                        </div>
                        <div
                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="inputFasilitas__modal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2.5 text-center btnStore">Tambahkan
                                Data</button>
                            <button data-modal-hide="inputFasilitas__modal" type="button"
                                class="text-gray-500 bg-button-red hover:bg-gray-100  rounded-md border border-gray-200 text-sm font-medium px-5 py-2.5">Batalkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fasilitasForm__items fasilitas__Tables relative top-2 py-2">
            <div class="relative overflow-x-auto sm:rounded-lg">
                <table class="w-full text-md text-left dataTable tablesData__list">
                    <thead class="text-md text-gray-700 uppercase text-white  bg-tables-primary">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-r w-1">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3 border-r w-[15rem]">
                                Fasilitas Wisata
                            </th>
                            <th scope="col" class="px-6 py-3 border-r w-[25rem]">
                                Keterangan Fasilitas
                            </th>
                            <th scope="col" class="px-6 py-3 w-[10rem]">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tableFasilitas as $row)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 align-middle">
                            <td scope="row" class="px-6 border-b py-3 border-l border-r font-medium text-gray-900 ">
                                {{ $loop->iteration }}.
                            </td>
                            <td class="px-6 py-3 border-r border-b font-medium text-gray-900 dark:text-white ">
                                {{ $row->kategori_fasilitas }}
                            </td>
                            <td class="border-r px-6 border-b py-3">
                                <p>{{ $row->keterangan_fasilitas }}</p>
                            </td>
                            <td class="border-r px-6 border-b py-3">
                                <div class="flex flex-row gap-2 modalFasilitas__container w-full">
                                    {{-- Modal toggle --}}
                                    <div class="flex align-middle m-auto gap-3">
                                        <button data-modal-target="modalAcceptor-fasilitas"
                                            data-modal-toggle="modalAcceptor-fasilitas"
                                            class="block text-white bg-blue-700 hover:bg-blue-800  focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center"
                                            type="button">
                                            <span class="flex flex-row gap-2 align-middle items-center">
                                                <i class="ri-pencil-fill font-medium"></i>
                                                <h2>Ubah Data</h2>
                                            </span>
                                        </button>
                                        <button data-no="{{ $loop->iteration }}"
                                            href="{{ route('fasilitas.destroy', $row->id_kategori_fasilitas) }}"
                                            class="btnDelete block bg-button-delete-primary text-white p-2.5 text-sm px-4 rounded-md">
                                            <i class="ri-delete-bin-7-fill"></i>
                                        </button>
                                    </div>
                                    {{-- Main modal --}}
                                    <div id="modalAcceptor-fasilitas" data-modal-backdrop="static" tabindex="-1"
                                        aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-4xl max-h-full">
                                            {{-- Modal content --}}
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                {{-- Modal header --}}
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="modalAcceptor-fasilitas">
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
                                                {{-- Modal body --}}
                                                <div class="p-6 space-y-6">

                                                    <div class="formFasilitas__wrapper flex flex-col">
                                                        <label for="formFasilitas" class="py-2 block">Fasilitas
                                                            Wisata</label>
                                                        <span class="formFasilitas__wrap block w-full">
                                                            <input type="text" id="updateFasilitas"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                                required>
                                                        </span>
                                                        <div class="relative pb-3 my-3">
                                                            <label for="updateKeterangan"
                                                                class="py-2 flex flex-row gap-3">Keterangan
                                                                Fasilitas
                                                                Wisata
                                                                <span class="block text-xs">(Opsional)</span>
                                                            </label>
                                                            <textarea id="updateKeterangan" rows="4"
                                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                placeholder="Isi keterangan fasilitas ..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Modal footer --}}
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="modalAcceptor-fasilitas" type="button"
                                                        data-id="{{ $row->id_kategori_fasilitas }}"
                                                        class="btnUpdate text-white bg-blue-700 hover:bg-blue-800 focus:outline-none font-medium rounded-md text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah
                                                        Data</button>
                                                    <button data-modal-hide="modalAcceptor-fasilitas" type="button"
                                                        class="text-gray-500 bg-white hover:bg-gray-100  focus:outline-none rounded-md border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
<form action="" method="post" id="formCRUD">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="">
    <input type="hidden" name="inputNama">
    <input type="hidden" name="inputKeterangan">
</form>
@endsection

@push('scripts')
<script>
    $('.btnStore').on('click', function(){
        $('input[name="inputNama"]').val($('#addFasilitas').val());
        $('input[name="inputKeterangan"]').val($('#addKeterangan').val());
        $('form#formCRUD').attr('action', '{{ route("fasilitas.store") }}');
        $('[name="_method"]').val('POST');
        $('form#formCRUD').submit();
    });

    $('.btnUpdate').on('click', function(){
        let href = '{{ route("fasilitas.update", "id") }}';
        href = href.replace('id', $(this).data('id'));
        $('input[name="inputNama"]').val($('#updateFasilitas').val());
        $('input[name="inputKeterangan"]').val($('#updateKeterangan').val());
        $('form#formCRUD').attr('action', href);
        $('[name="_method"]').val('PUT');
        $('form#formCRUD').submit();
    });
</script>
@endpush