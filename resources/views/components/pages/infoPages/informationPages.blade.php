@extends('default')
@push('style')
<link rel="stylesheet" href="{{ asset('asset/styles/pages/informasiPemesanan/informasiPemesanan.css') }}">
@endpush
@section('pageContent')
<div class="m-auto pt-28 informationWrapper">
    <div class="flex flex-row gap-10 pt-10 informationContent__container">
        <div class="border shadow-lg information__infoItems items__infoSidebar h-[30rem] bg-gray-primary/10">
            <div class="flex flex-row items-center gap-4 p-8 overflow-hidden border-b profile__account">
                <figure class="relative avatar">
                    <img class="object-cover border rounded-full shadow-lg avatar__profiles"
                        src="{{ !empty(Auth::user()->image) ? !empty(Auth::user()->social_id) ? Auth::user()->image : asset('asset/img/avatar/'.Auth::user()->image) : asset('asset/img/avatar.png') }}"
                        alt="Profile picture">
                </figure>
                <div class="flex flex-col profile__sideInfo">
                    <span class="flex-wrap block font-semibold profile__sideName">
                        <h2>
                            {{ Auth::user()->full_name
                            }}
                        </h2>
                    </span>
                    <span class="block text-sm font-thin text-gray-primary">Akun anda</span>
                </div>
            </div>
            <div class="mt-10 bookingContent__item text-gray-primary hover:bg-primary-birent/5">
                <a href="{{ route('profile.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-account-circle-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">Profile Saya</h2>
                    </span>
                </a>
            </div>
            <div class="mt-2 infoContent__item active bg-gray-primary/20">
                <a href="{{ route('informasi.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-shopping-bag-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">List Pembelian</h2>
                    </span>
                </a>
            </div>
            <div class="mt-2 border-b text-gray-primary infoContent__item hover:bg-primary-birent/5">
                <a href="{{ route('booking.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-calendar-2-fill text-cta-login-birent"></i>
                        <h2>My Booking</h2>
                    </span>
                </a>
            </div>
            <div class="mt-8 text-gray-primary infoContent__item hover:bg-primary-birent/5">
                <button class="flex items-center p-8 py-2" id="btnLogout">
                    <i class="text-2xl ri-logout-circle-r-line text-cta-login-birent"></i>
                    <span class="px-3 font-medium">
                        Log Out
                    </span>
                </button>
            </div>
        </div>
        <div class="w-full information__infoItems items__infoContent">
            <div
                class="flex flex-row items-center gap-4 p-4 border rounded-md shadow-md information__header bg-gray-primary/10">
                <i class="text-2xl ri-information-line"></i>
                <h1>Informasi Pembayaran anda akan tampil disini.</h1>
            </div>
            <div class="information__emptyTransaction">
                <span class="block py-5 info__emptyTransItems">
                    <h2>Anda masih belum memeliki pembelian apa apun!</h2>
                </span>
            </div>
            <div class="my-8 n information__itemsBooking">
                <div
                    class="relative flex flex-row justify-between gap-4 p-3 overflow-hidden border rounded-md shadow-md bg-gray-primary/5 information__contentBooking">
                    <div class="flex gap-4 ticket__information ticket__figure">
                        <div class="figure__wrapperContent">
                            <figure class="pointer-events-none ">
                                {{-- <img class="object-cover max-w-3xl bg-no-repeat rounded-md max-h-40"
                                    src="https://images.pexels.com/photos/16619351/pexels-photo-16619351/free-photo-of-sea-landscape-sunset-beach.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                                --}}
                                <img class="object-cover w-40 h-40 bg-no-repeat rounded-md"
                                    src="{{ asset('asset/img/empty-image-thumb.png') }}">
                            </figure>
                        </div>
                        <div class="flex flex-col title__objectWisata">
                            <div class="text-xl font-semibold objectwisata__itemsInfo">
                                <span class="relative block text-lg info__span">
                                    <h2>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quam.
                                    </h2>
                                </span>
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
                    <div class="relative flex flex-col justify-end h-full ticket__information ticket__priceInfo">
                        <div class="flex flex-col">
                            <div class="relative text-white status__informasi">
                                <a href="#">
                                    <span
                                        class="block p-1 px-4 text-sm rounded-lg whitespace-nowrap paymet__notSuccess">Belum
                                        Dibayar</span>
                                </a>
                            </div>
                            <div class="justify-between text-white status__informasi">
                                <div data-modal-target="staticModal" data-modal-toggle="staticModal"
                                    class="block p-1 px-4 text-sm font-medium text-center text-white rounded-lg cursor-pointer whitespace-nowrap paymet__Success">
                                    Sudah Dibayar
                                </div>
                                {{-- Main modal --}}
                                <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(50%-1rem)] max-h-full">
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
                                                    consumer privacy laws for its citizens, companies around the world
                                                    are
                                                    updating their terms of service agreements to comply.
                                                </p>
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    The European Union’s General Data Protection Regulation (G.D.P.R.)
                                                    goes
                                                    into effect on May 25 and is meant to ensure a common set of data
                                                    rights
                                                    in the European Union. It requires organizations to notify users as
                                                    soon
                                                    as possible of high-risk data breaches that could personally affect
                                                    them.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-[7.4rem] -right-[1rem] information__deleteItems text-black-birent text-end">
                            <button class="p-2 px-4 text-white rounded-t-md deleteContent__info" id="deleteContent">
                                <i class="ri-delete-bin-7-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="formLogout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

@endsection
@push('scripts')
<script>
    $('#btnLogout').on('click', function(){
        $('#formLogout').submit();
    });
</script>
@endpush