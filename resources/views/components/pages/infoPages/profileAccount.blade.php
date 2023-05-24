@extends('default')
@push('style')
<link rel="stylesheet" href="{{ asset('asset/styles/pages/myProfile/myProfiles.css') }}">
@endpush

@section('pageContent')
@error('serverError')
@php(dd($message))
@enderror
<div class=" m-auto pt-28 myProfileWrapper">
    <div class="flex flex-row gap-10 pt-10 informationContent__container">
        <div class="border shadow-lg information__profilesItems items__profilesSidebar h-[30rem] bg-gray-primary/10">
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
            <div class="mt-10 text-black profilesContent__item active bg-gray-primary/20">
                <a href="{{ route('profile.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-account-circle-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">Profile Saya</h2>
                    </span>
                </a>
            </div>
            <div class="mt-2 profilesContent__item text-gray-primary hover:bg-primary-birent/5">
                <a href="{{ route('informasi.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-shopping-bag-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">List Pembelian</h2>
                    </span>
                </a>
            </div>
            <div class="mt-2 border-b text-gray-primary infoProfileContent__item hover:bg-primary-birent/5">
                <a href="{{ route('booking.index') }}">
                    <span class="flex items-center gap-2 p-8 py-2">
                        <i class="text-2xl ri-calendar-2-fill text-cta-login-birent"></i>
                        <h2 class="font-semibold">My Booking</h2>
                    </span>
                </a>
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
                class="flex flex-row items-center gap-4 p-4 border rounded-md shadow-md information__profileheader relative">
                <h1>Perubahan profile berhasil disimpan</h1>
                <div class="iconClose absolute right-6">
                    <i class="ri-close-fill iconToogle p-2 rounded-full cursor-pointer"
                        onclick="$('#notifSaveAccount').attr('style', 'display: none')"></i>
                </div>
            </div>
            <div id="notifSaveError"
                class="flex flex-row items-center gap-4 p-4 border rounded-md shadow-md information__profileError relative"
                style="display: @if($errors->any()) show @else none @endif; margin-bottom: 20px;">
                <h1 class="text-white">Oops! Perubahan akun tidak tersimpan.</h1>
                <div class="iconClose absolute right-6">
                    <i class="ri-close-fill iconToogle p-2 rounded-full cursor-pointer"
                        onclick="$('#notifSaveError').attr('style', 'display: none')"></i>
                </div>
            </div>
            <div id="notifFileSize"
                class="flex flex-row items-center gap-4 p-4 pb-4 border rounded-md shadow-md information__pictureError relative"
                style="display: none ; margin-bottom: 20px;">
                <h1 class="text-white">Oops! Silahkan periksa ukuran gambar anda.</h1>
                <div class="iconClose absolute right-6">
                    <i class="ri-close-fill iconToogle p-2 rounded-full cursor-pointer"
                        onclick="$('#notifFileSize').attr('style', 'display: none; ');"></i>
                </div>
            </div>
            <div class="information__profiles border rounded-lg">
                <div class="profilesContainer__inner bg-gray-primary/10 p-4 rounded-lg py-6 shadow-lg">
                    <span class=""></span>
                    <div class="profilesContent__inner">
                        <div class="viewProfile__images flex  flex-col gap-5">
                            <figure class="images__itemsBanner items-center m-auto border-2 rounded-full p-3">
                                <img src="{{ !empty(Auth::user()->image) ? !empty(Auth::user()->social_id) ? Auth::user()->image : asset('asset/img/avatar/'.Auth::user()->image) : asset('asset/img/avatar.png') }}"
                                    class="rounded-full h-60 object-cover w-60 shadow-md pointer-events-none"
                                    alt="Profile">
                            </figure>
                            <div class="profile__inputUpload profile__settingContainer relative">
                                <form action="{{ route('profile.save') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="profileChange__pictures profile__settingWrapper p-3">
                                        <div class="sectionInput__profile"
                                            style="display: {{ !empty(Auth::user()->social_id) ? 'none' : 'show' }}">
                                            <input type="file" name="avatarProfile" id="avatarProfile"
                                                accept="image/jpg, image/png, image/jpeg"
                                                class="avatarImages__profile bg-cta-login-birent" {{
                                                !empty(Auth::user()->social_id) ? 'disabled' : '' }}>
                                            <span
                                                class="profile__pictureRules font-sans text-sm py-2 block text-gray-primary">
                                                <h2>format png, jpg, jpeg, maksimal 2mb.</h2>
                                            </span>
                                        </div>
                                        <div class="sectionInput__name name__profileSettings">
                                            <div class="sectionInput__nameContent mt-4">
                                                <div class="sectionInput__nameItems">
                                                    <span class="block">
                                                        <label for="FullnameProfile"
                                                            class="py-3 inline-block whitespace-nowrap">Nama
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
                                                        class="py-3 inline-block whitespace-nowrap">Nomor
                                                        Telephone</label>
                                                    </span>
                                                    <input type="number" name="phoneNumber"
                                                        placeholder="{{ !empty(Auth::user()->mobile_number) ? Auth::user()->mobile_number : '' }}"
                                                        maxlength="12" id="phoneNumber" autocomplete="off"
                                                        class="w-full rounded-full text-gray-primary input__numberProfile">
                                                </div>
                                                <div class="sectionInput__nameItems">
                                                    <span class="block">
                                                        <label for="EmailProfile"
                                                            class="py-3 inline-block whitespace-nowrap">Email</label>
                                                    </span>
                                                    <input type="text" name="emailProfile" value="" id="emailProfile"
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
                                                            class="py-3 inline-block whitespace-nowrap">Password</label>
                                                    </span>
                                                    <div class="input__password flex items-center relative">
                                                        <div class="password__inputValue w-full">
                                                            <input type="password" name="password" value=""
                                                                id="password" placeholder="password"
                                                                class="w-full rounded-full text-gray-primary input__numberProfile"
                                                                @if(!empty(Auth::user()->social_id)) disabled @endif>
                                                        </div>
                                                        <div class="iconsProfile absolute right-3" id="showPassword">
                                                            {{-- <i
                                                                class="ri-eye-fill cursor-pointer text-primary-birent"></i>
                                                            --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="block profile__saveButton mt-8">
                                            <button
                                                class="profile__saveCall py-2 px-16 inline-block rounded-2xl text-white w-full"
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