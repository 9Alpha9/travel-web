@extends('dashboard.defaultDashboard')
@push('style')

@endpush

@section('pageContent')
<div class="relative verificationRules__Container">
    @if(Auth::user()->user_type == 'User')
    <div class="relative pt-12 mt-12 verification__Content">
        <span class="block pt-12 verification__Title">
            <h1>Request Verifikasi</h1>
        </span>
        <div class="pt-8 verification__Items">
            <p class="flex items-center gap-5 p-3 px-8 shadow-lg rounded-xl infoVerif">
                <i class="ri-information-fill"></i>
                <span class="block">Verifikasi dilakukan hanya digunakan untuk menunjukkan bahwa anda adalah pemilik,
                    pengelolah, atau pengurus dari tempat wisata!</span>
            </p>
            <div class="grid grid-flow-col grid-cols-2 gap-8 pt-12 verification__Card">
                @if(Auth::user()->pengajuan == false)
                <div class="px-6 shadow-2xl rounded-xl verification__Items-card useR">
                    <div class="flex flex-col flex-wrap justify-between useR__type">
                        <span class="z-10 block pt-6 leading-7 text-justify">
                            <p>Ajukan atau request verifikasi untuk dapat melakukan pengelolaan tempat wisata anda</p>
                        </span>
                        <div class="relative z-10 w-full pt-8 verification__Btnreq">
                            <button type="submit" class="w-full p-3 px-8 req__Cta rounded-xl">Ajukan Sekarang</button>
                        </div>
                    </div>
                </div>
                @else
                <div class="px-6 shadow-2xl rounded-xl verification__Items-card useR">
                    <div class="flex flex-col flex-wrap justify-between useR__type">
                        <span class="z-10 block pt-6 leading-7 text-justify">
                            <p>Mohon tunggu sebentar, pengajuan anda saat ini sedang diproses.</p>
                        </span>
                        <div class="relative z-10 w-full pt-8 verification__Wait">
                            <div class="w-full p-3 px-8 rounded-xl pleaseWait__cta">Sedang
                                diproses</div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="py-24 accordionWrapper">
        <div id="accordion-flush" data-accordion="collapse"
            class="p-4 text-white border border-b border-gray-200 rounded-md dark:border-gray-700 dark:text-gray-400 accordionContent"
            data-active-classes="dark:bg-gray-900 active__accordion p-4 ease-in-ou duration-300 mt-3 text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400 ease-in-out duration-75 delay-300 transition-transform accordion__inActive">
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tr">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tr" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Apa itu request verifikasi?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="accordionContent__items accordionClass__par">
                        <div id="accordion-flush-body-tr" class="hidden" aria-labelledby="accordion-flush-items-tr">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                                <p class="px-5 mb-2 leading-7 text-gray-500 dark:text-gray-400">
                                    <u>Request verifikasi</u> ini digunakan untuk mengubah status anda dari User
                                    menjadi status <b>Pengelola Tempat Wisata</b>. Dengan status ini, anda dapat
                                    menambahkan
                                    Tempat
                                    wisata yang anda kelola yang masih belum ada pada website.
                                </p>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tc">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tc" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Apa keuntungan setelah berhasil terverifikasi?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="accordion-flush-body-tc" class="hidden" aria-labelledby="accordion-flush-items-tc">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <span class="leading-7 text-gray-500 dark:text-gray-400">
                                <ul class="pl-10 mb-2 leading-7">
                                    <li class="text-gray-500 list-decimal">
                                        <p>Anda dapat mengunggah dan mengelolah tempat wisata yang anda punya ke dalam
                                            website.</p>
                                    </li>
                                    <li class="text-gray-500 list-decimal">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit.
                                        Neque, architecto
                                        veritatis aperiam sequi culpa ipsam alias dicta unde animi aliquam.</li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tb">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tb" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Apa yang diperlukan untuk melakukan request
                                verifikasi?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="accordion-flush-body-tb" class="hidden" aria-labelledby="accordion-flush-items-tb">
                        <div class="border-b border-gray-200 dark:border-gray-700">
                            <span class="px-5 text-gray-500 dark:text-gray-400">
                                <ul class="pl-10 mb-2 leading-7">
                                    <li class="text-gray-500 list-decimal">
                                        <p>Anda dapat mengunggah dan mengelolah tempat wisata yang anda punya ke dalam
                                            website.</p>
                                    </li>
                                    <li class="text-gray-500 list-decimal">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit.
                                        Neque, architecto
                                        veritatis aperiam sequi culpa ipsam alias dicta unde animi aliquam.</li>
                                </ul>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tn">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tn" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Berapa lama proses verifikasi dilakukan?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="accordion-flush-body-tn" class="hidden" aria-labelledby="accordion-flush-items-tn">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="px-5 mb-2 leading-7 text-gray-500 dark:text-gray-400">Lorem ipsum
                                dolor sit amet
                                consectetur adipisicing elit. Porro ipsum maxime explicabo officia, magnam aperiam id ex
                                repudiandae. Sed earum nemo quibusdam necessitatibus perspiciatis vel nobis a
                                reprehenderit,
                                libero aperiam consequatur repellat sit hic autem deleniti minus porro dolorem maiores!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif (Auth::user()->user_type == 'Admin')
    <div class="adminContainer">
        ini Admin Rules
    </div>
    @elseif(Auth::user()->user_type == 'superAdmin')
    <div class="mt-10 superAdmin__container">
        <div class="mt-32 superAdmin__wrapper">
            <span class="block headingText">List Pengajuan</span>
            <p class="inf">Silahkan tekan tombol <strong>"Proses pengajuan"</strong> untuk menyetujui atau menolak
                persetujuan
                request
                verifikasi.</p>
            <div class="relative overflow-x-auto sm:rounded-lg mt-9">
                <table class="w-full text-sm text-left dataTable">
                    <thead class="text-white uppercase tableHead">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-r dark:bg-gray-800 dark:border-gray-700">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:bg-gray-800 dark:border-gray-700">
                                Nama Lengkap
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex items-center">
                                    Nomor Telephone
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex items-center">
                                    Alamat Email
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 border-r dark:bg-gray-800 dark:border-gray-700">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $row)
                        <tr class="my-3 border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border-r dark:bg-gray-800 dark:border-gray-700">
                                {{ $loop->iteration }}.
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 border-r whitespace-nowrap dark:text-white dark:bg-gray-800 dark:border-gray-700">
                                {{ $row->full_name }}
                            </th>
                            <td class="px-6 py-4 border-r dark:bg-gray-800 dark:border-gray-700">
                                {{ $row->mobile_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $row->email }}
                            </td>
                            <td class="px-6 py-4 border-l dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex gap-2 actionCta">
                                    <a href="" id='btnProses' class="font-medium dark:text-blue-500 editCta">
                                        <span>
                                            <i class="ri-settings-fill"></i>
                                        </span>
                                        Proses pengajuan
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@else
@endif
</div>

@endsection

@push('scripts')
<script>
    $('#btnProses').on('click', function(e){
        e.preventDefault();
        Swal.fire({
            text: 'Yakin ingin memproses persetujuan ini?',
            icon: 'question',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Setujui',
            denyButtonText: 'Tolak',
            customClass: {
                confirmButton: 'swalConfirm__cta'
            }
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire('Perubahan data berhasil disimpan!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Yakin ingin menolak perubahan data?', '', 'info')
            }
        });
    });
</script>
@endpush