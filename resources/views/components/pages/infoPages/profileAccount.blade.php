@extends('default')
@push('style')
<link rel="stylesheet" href="{{ asset('asset/styles/pages/myProfile/myProfiles.css') }}">
@endpush

@section('pageContent')
@error('serverError')
@php(dd($message))
@enderror
<div class="m-auto pt-28 myProfileWrapper">
    <div class="flex flex-row gap-10 pt-10 informationContent__container">
        <div class="border shadow-lg information__profilesItems items__profilesSidebar h-[30rem] bg-gray-primary/10">
            <div class="flex flex-row items-center gap-4 p-8 overflow-hidden border-b profile__account">
                <figure class="relative avatar">
                    <img class="block object-cover border rounded-full shadow-lg pointer-events-none avatar__profiles"
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
            <div class="mt-10 text-black profilesContent__item active bg-gray-primary/20">
                <a href="{{ route('profile.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-account-circle-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">Profile Saya</h2>
                    </span>
                </a>
            </div>
            <div class="mt-2 profilesContent__item text-gray-primary hover:bg-primary-birent/5">
                @if(Auth::user()->user_type != 'superAdmin')
                <a href="{{ route('informasi.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-shopping-bag-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">List Pembelian</h2>
                    </span>
                </a>
                @endif
            </div>
            <div class="mt-2 border-b text-gray-primary infoProfileContent__item hover:bg-primary-birent/5">
                @if(Auth::user()->user_type != 'superAdmin')
                <a href="{{ route('booking.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-calendar-2-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">My Booking</h2>
                    </span>
                </a>
                @endif
            </div>
            <div class="mt-8 text-gray-primary infoProfileContent__item hover:bg-primary-birent/5">
                <button class="flex items-center p-8 py-2" id="btnLogout">
                    <i class="text-2xl ri-logout-circle-r-line text-cta-login-birent"></i>
                    <span class="px-3 font-medium">
                        Log Out
                    </span>
                </button>
            </div>
        </div>
        <div class="w-full information__infoBookingItems items__infoBookingContent">
            <div id="notifSaveAccount"
                style="display: @if(session('saveAccount')) show @else none @enderror; margin-bottom: 20px;"
                class="relative flex flex-row items-center gap-4 p-4 border rounded-md shadow-md information__profileheader">
                <h1>Perubahan profile berhasil disimpan</h1>
                <div class="absolute iconClose right-6">
                    <i class="p-2 rounded-full cursor-pointer ri-close-fill iconToogle"
                        onclick="$('#notifSaveAccount').attr('style', 'display: none')"></i>
                </div>
            </div>
            <div id="notifSaveError"
                class="relative flex flex-row items-center gap-4 p-4 border rounded-md shadow-md information__profileError"
                style="display: @if($errors->any()) show @else none @endif; margin-bottom: 20px;">
                <h1 class="text-white">Oops! Perubahan akun tidak tersimpan.</h1>
                <div class="absolute iconClose right-6">
                    <i class="p-2 rounded-full cursor-pointer ri-close-fill iconToogle"
                        onclick="$('#notifSaveError').attr('style', 'display: none')"></i>
                </div>
            </div>
            <div id="notifFileSize"
                class="relative flex flex-row items-center gap-4 p-4 pb-4 border rounded-md shadow-md information__pictureError"
                style="display: none ; margin-bottom: 20px;">
                <h1 class="text-white">Oops! Silahkan periksa ukuran gambar anda.</h1>
                <div class="absolute iconClose right-6">
                    <i class="p-2 rounded-full cursor-pointer ri-close-fill iconToogle"
                        onclick="$('#notifFileSize').attr('style', 'display: none; ');"></i>
                </div>
            </div>
            <div class="border rounded-lg information__profiles">
                <div class="p-4 py-6 rounded-lg shadow-lg profilesContainer__inner bg-gray-primary/10">
                    <span class=""></span>
                    <div class="profilesContent__inner">
                        <div class="flex flex-col gap-5 viewProfile__images">
                            <figure class="items-center p-3 m-auto border-2 rounded-full images__itemsBanner">
                                <img src="{{ !empty(Auth::user()->image) ? !empty(Auth::user()->social_id) ? Auth::user()->image : asset('asset/img/avatar/'.Auth::user()->image) : asset('asset/img/avatar.png') }}"
                                    class="object-cover rounded-full shadow-md pointer-events-none h-60 w-60"
                                    alt="Profile">
                            </figure>
                            <div class="relative profile__inputUpload profile__settingContainer">
                                <form action="{{ route('profile.save') }}" method="post" enctype="multipart/form-data"
                                    autocomplete="off
                                ">
                                    {{ csrf_field() }}
                                    <div class="p-3 profileChange__pictures profile__settingWrapper">
                                        <div class="sectionInput__profile"
                                            style="display: {{ !empty(Auth::user()->social_id) ? 'none' : 'show' }}">
                                            <input type="file" name="avatarProfile" id="avatarProfile"
                                                autocomplete="off" accept="image/jpg, image/png, image/jpeg"
                                                class="avatarImages__profile bg-cta-login-birent" {{
                                                !empty(Auth::user()->social_id) ? 'disabled' : '' }}>
                                            <span
                                                class="block py-4 font-sans text-sm font-thin profile__pictureRules text-gray-primary">
                                                <h2>format png, jpg, jpeg, maksimal ukuran gambar 2mb.</h2>
                                            </span>
                                            <div class="block mt-4 border-b "></div>
                                        </div>
                                        <div class="sectionInput__name name__profileSettings ">
                                            <div class="mt-4 sectionInput__nameContent whitespace-nowrap">
                                                <div class="sectionInput__nameItems">
                                                    <span class="block">
                                                        <label for="FullnameProfile"
                                                            class="inline-block py-3 whitespace-nowrap">Nama
                                                            Lengkap</label>
                                                    </span>
                                                    <input type="text" name="profileUsername"
                                                        placeholder="{{ Auth::user()->full_name }}" id="profileUsername"
                                                        class="w-full rounded-full text-gray-primary"
                                                        @if(!empty(Auth::user()->social_id)) disabled @endif>
                                                </div>
                                                <div class="sectionInput__nameItems">
                                                    <span class="block"></span>
                                                    <label for="FullnameProfile"
                                                        class="inline-block py-3 whitespace-nowrap">Nomor
                                                        Telephone</label>
                                                    </span>
                                                    <div class="relative flex items-center phoneNumber__class">
                                                        <span
                                                            class="absolute block p-[10px] text-white rounded-tl-full rounded-bl-full numbers__phoneLabel bg-cta-login-birent text-sm">
                                                            +62
                                                        </span>
                                                        <input type="number" name="phoneNumber"
                                                            placeholder="{{ !empty(Auth::user()->mobile_number) ? Auth::user()->mobile_number : '' }}"
                                                            maxlength="12" id="phoneNumber" autocomplete="off"
                                                            class="w-full rounded-full text-gray-primary input__numberProfile">
                                                    </div>
                                                </div>
                                                <div class="sectionInput__nameItems">
                                                    <span class="block">
                                                        <label for="EmailProfile"
                                                            class="inline-block py-3 whitespace-nowrap">Email</label>
                                                    </span>
                                                    <input type="text" name="emailProfile" value="" id="emailProfile"
                                                        autocomplete="off"
                                                        placeholder="{{ !empty(Auth::user()->email) ? Auth::user()->email : '' }}"
                                                        class="w-full rounded-full text-gray-primary input__numberProfile"
                                                        @if(!empty(Auth::user()->social_id)) disabled @endif>
                                                    @error('emailProfile')
                                                    <p class="mt-2 text-sm dark:text-red-500">
                                                        <span class="font-medium error__notificationValue">
                                                            {{ $message }}
                                                        </span>
                                                    </p>
                                                    @enderror
                                                </div>
                                                <div class="sectionInput__nameItems">
                                                    <span class="block">
                                                        <label for="PasswordProfile"
                                                            class="inline-block py-3 whitespace-nowrap">Password</label>
                                                    </span>
                                                    <div class="relative flex items-center input__password">
                                                        <div class="w-full password__inputValue">
                                                            <input type="password" name="password" value=""
                                                                autocomplete="off" id="password" placeholder="password"
                                                                class="w-full rounded-full text-gray-primary input__numberProfile"
                                                                @if(!empty(Auth::user()->social_id)) disabled @endif>
                                                        </div>
                                                        <div class="absolute iconsProfile right-3" id="showPassword">
                                                            {{-- <i
                                                                class="cursor-pointer ri-eye-fill text-primary-birent"></i>
                                                            --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-4 border-b"></div>
                                        <span class="block mt-8 profile__saveButton">
                                            <button
                                                class="inline-block w-full px-16 py-2 text-white profile__saveCall rounded-2xl"
                                                type="submit" id="saveProfile">Simpan</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('#btnLogout').on('click', function(){
        // alert('tes');
        $('#formLogout').submit();
    });
</script>
<script>
    $('#showPassword').on('click', function(){
        const type = $('#password').attr('type') === "password" ? "text" : "password";
        $('#password').attr('type', type);
    });
</script>

<script>
    $(document).ready(function() {
    $(".input__numberProfile").keypress(function() {
        if ($(this).val().length == $(this).attr("maxlength")) {
            return false;
        }
    });
});
</script>
@endpush
