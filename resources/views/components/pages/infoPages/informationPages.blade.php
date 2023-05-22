@extends('default')
@push('style')
<link rel="stylesheet" href="{{ asset('asset/styles/pages/informasiPemesanan/informasiPemesanan.css') }}">
@endpush
@section('pageContent')
<div class="m-auto pt-28 informationWrapper">
    <div class="flex flex-row gap-10 pt-10 informationContent__container">
        <div class="information__infoItems items__infoSidebar h-96 w-96 bg-gray-primary/10">
            <div class="flex flex-row items-center gap-4 p-8 profile__account">
                <figure class="w-20 h-20 avatar">
                    <img class="rounded-full avatar__profiles"
                        src="{{ !empty(Auth::user()->image) ? !empty(Auth::user()->social_id) ? Auth::user()->image : asset('asset/img/'.Auth::user()->image) : asset('asset/img/avatar.png') }}"
                        alt="">
                </figure>
                <span class="block font-semibold whitespace-nowrap">{{ Auth::user()->full_name }}</span>
            </div>
            <div class="mt-10 text-white infoContent__item active bg-primary-birent">
                <a href="#">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-information-line"></i>
                        <h2>Informasi</h2>
                    </span>
                </a>
            </div>
            <div class="mt-3 text-white infoContent__item active bg-primary-birent">
                <a href="#">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-calendar-2-fill"></i>
                        <h2>Booking</h2>
                    </span>
                </a>
            </div>
        </div>
        <div class="w-full information__infoItems items__infoContent">
            <div class="flex flex-row items-center gap-4 p-4 rounded-md information__header bg-gray-primary/10">
                <i class="text-2xl ri-information-line"></i>
                <h1>Informasi Pembayaran anda akan tampil disini.</h1>
            </div>
            <div class="my-8 n information__itemsBooking">
                <div
                    class="flex flex-row justify-between gap-4 p-3 rounded-md bg-gray-primary/5 information__contentBooking">
                    <div class="flex gap-4 ticket__information ticket__figure">
                        <figure class="w-40 pointer-events-none">
                            <img class="rounded-md" src="{{ asset('asset/img/empty-image-thumb.png') }}" alt="">
                        </figure>
                        <div class="flex flex-col title__objectWisata whitespace-nowrap">
                            <div class="text-xl font-semibold objectwisata__itemsInfo">
                                <span>Wisata Banyu Urip</span>
                            </div>
                            <div class="flex flex-row pt-2 objectwisata__itemsInfo">
                                <div class="items__infoItem">
                                    <span class="text-sm text-gray-primary">Jam : 10:45-18:50</span>
                                </div>
                                <div class="px-3 items__infoItem items__infoDay">
                                    <span class="text-sm text-gray-primary">Hari : Sabtu, 08/13/2023</span>
                                </div>
                            </div>
                            <div class="pt-2 objectwisata__itemsInfo obejctwisata__itemsGuest">
                                <span class="text-sm text-gray-primary">Jumlah Tamu : 6 </span>
                            </div>
                        </div>
                    </div>
                    <div class="items-center ticket__information ticket__priceInfo">
                        <div class="text-white status__informasi">
                            <a href="#">
                                <span
                                    class="block p-1 px-4 text-sm rounded-lg whitespace-nowrap paymet__notSuccess">Belum
                                    Dibayar</span>
                            </a>
                        </div>
                        <div class="text-white status__informasi">
                            <button data-modal-target="staticModal" data-modal-toggle="staticModal"
                                class="block p-1 px-4 text-sm font-medium text-center text-white rounded-lg paymet__Success"
                                type="button">
                                Sudah Dibayar
                            </button>
                            {{-- Main modal --}}
                            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    {{-- Modal content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        {{-- Modal header --> --}}
                                        <div
                                            class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Bukti Pembayaran
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="staticModal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        {{-- Modal body --}}
                                        <div class="p-6 space-y-6">
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                With less than a month to go before the European Union enacts new
                                                consumer privacy laws for its citizens, companies around the world are
                                                updating their terms of service agreements to comply.
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes
                                                into effect on May 25 and is meant to ensure a common set of data rights
                                                in the European Union. It requires organizations to notify users as soon
                                                as possible of high-risk data breaches that could personally affect
                                                them.
                                            </p>
                                        </div>
                                        {{-- Modal footer --}}
                                        <div
                                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="staticModal" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                                accept</button>
                                            <button data-modal-hide="staticModal" type="button"
                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#">
                                {{-- <span
                                    class="block p-1 px-4 text-sm rounded-lg whitespace-nowrap paymet__Success">Sudah
                                    Dibayar</span> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
@endpush