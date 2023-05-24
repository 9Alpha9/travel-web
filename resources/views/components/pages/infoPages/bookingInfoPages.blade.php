@extends('default')
@push('style')
<link rel="stylesheet" href="{{ asset('asset/styles/pages/myBooking/myBooking.css') }}">
@endpush

@section('pageContent')
<div class="m-auto pt-28 mybookingWrapper">
    <div class="flex flex-row gap-10 pt-10 informationContent__container">
        <div class="border shadow-lg information__bookingItems items__bookingSidebar h-[30rem] bg-gray-primary/10">
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
                <a href="{{ route('informasi.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-account-circle-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">Profile Saya</h2>
                    </span>
                </a>
            </div>
            <div class="mt-2 bookingContent__item text-gray-primary hover:bg-primary-birent/5">
                <a href="{{ route('informasi.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-shopping-bag-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">List Pembelian</h2>
                    </span>
                </a>
            </div>
            <div class="mt-2 text-black border-b infoContent__item bg-gray-primary/20 active">
                <a href="{{ route('booking.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-calendar-2-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">My Booking</h2>
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
        <div class="w-full information__infoBookingItems items__infoBookingContent">
            <div
                class="flex flex-row items-center gap-4 p-4 border rounded-md shadow-md information__Bookingheader bg-gray-primary/10">
                <i class="text-2xl ri-information-line"></i>
                <h1>Informasi Booking tiket wisata anda akan tampil disini.</h1>
            </div>
            <div class="information__emptyTransaction">
                <span class="block py-5 info__emptyTransItems">
                    <h2>Anda masih belum memeliki status Booking apa apun!</h2>
                </span>
            </div>
            <div class="my-8 n information__itemsBooking">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, perspiciatis. Adipisci quos ratione
                voluptatem tempora facilis delectus? Ipsa, veniam maxime.
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush