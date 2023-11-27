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
        <div class="relative block sideProfile__nav">
            <div class="border shadow-lg information__profilesItems items__profilesSidebar h-fit bg-gray-primary/10">
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
                <div class="mt-10 text-black profilesContent__item active">
                    <div class='cursor-pointer btnSetting fontChanges__default'>
                        <span class="flex items-center gap-2 p-8 py-2">
                            <i class="text-2xl ri-account-circle-fill text-cta-login-birent"></i>
                            <h2 class="font-semibold">Profile Saya</h2>
                        </span>
                    </div>
                </div>
                <div class="my-4 text-black profilesContent__item hover:bg-primary-birent/5">
                    <div class='cursor-pointer btnRecommendation fontChanges__default'>
                        <span class="flex items-center gap-2 p-8 py-2">
                            <i class="text-2xl ri-file-search-fill text-cta-login-birent"></i>
                            <h2 class="font-semibold">Pengaturan Rekomendasi</h2>
                        </span>
                    </div>
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
                <div class="p-2 m-6 mt-8 text-gray-primary infoProfileContent__item hover:bg-primary-birent/5">
                    <button class="flex items-center " id="btnLogout">
                        <i class="text-2xl ri-logout-circle-r-line text-cta-login-birent"></i>
                        <span class="px-3 font-medium">
                            Log Out
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="information__infoBookingItems items__infoBookingContent">
            <div class="profileEdit__control">
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
                <div class="rounded-lg information__profiles">
                    <div
                        class="p-4 py-6 rounded-lg shadow-lg profilesContainer__inner bg-gray-primary/10 w-[40rem] border">
                        <span class=""></span>
                        <div class="profilesContent__inner">
                            <div class="flex flex-col gap-5 viewProfile__images">
                                <figure class="items-center p-3 m-auto border-2 rounded-full images__itemsBanner">
                                    <img src="{{ !empty(Auth::user()->image) ? !empty(Auth::user()->social_id) ? Auth::user()->image : asset('asset/img/avatar/'.Auth::user()->image) : asset('asset/img/avatar.png') }}"
                                        class="object-cover rounded-full shadow-md pointer-events-none h-60 w-60"
                                        alt="Profile">
                                </figure>
                                <div class="relative profile__inputUpload profile__settingContainer">
                                    <form action="{{ route('profile.save') }}" method="post"
                                        enctype="multipart/form-data" autocomplete="off
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
                                                            placeholder="{{ Auth::user()->full_name }}"
                                                            id="profileUsername"
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
                                                        <input type="text" name="emailProfile" value=""
                                                            id="emailProfile" autocomplete="off"
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
                                                                    autocomplete="off" id="password"
                                                                    placeholder="password"
                                                                    class="w-full rounded-full text-gray-primary input__numberProfile"
                                                                    @if(!empty(Auth::user()->social_id)) disabled
                                                                @endif>
                                                            </div>
                                                            <div class="absolute iconsProfile right-3"
                                                                id="showPassword">
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
            <div class="profileEdit__recommendation" style="display: none;">
                <div class="recommendationContainer bg-gray-primary/10 lg:w-[53.7rem] p-3 rounded-lg shadow-lg border">
                    <div class="p-3 recommendationInner">
                        <span class="inline-block w-full pb-6 border-b-2">
                            <h1 class="text-2xl font-normal">Silakan Tentukan Rekomendasi Wisata Anda.</h1>
                            <p class="pt-4 mt-3 text-sm border-t-2">Dalam tahapan penerapan metode SMART, hal yang
                                pertama
                                dilakukan
                                pertama
                                kali adalah
                                untuk menentukan kriteria, kemudian dilanjutkan pada tahapan penentuan nilai alternatif,
                                tahapan untuk pemberian nilai bobot terhadap kriteria, tahapan untuk menghitung
                                normalisasi, tahapan untuk menentukan nilai utiliti, dan tahapan yang terakhir adalah
                                untuk menentukan nilai akhir. Teknik pengambilan keputusan multi kriteria ini didasarkan
                                pada teori bahwa setiap alternatif terdiri dari sejumlah kriteria yang memiliki
                                nilai-nilai dan setiap kriteria memiliki bobot yang menggambarkan seberapa penting
                                dibandingkan dengan nilai kriteria yang lainnya (M. Safii, 2018).</p>
                        </span>
                        <section class="mt-3 mb-3 smartMetode">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique nulla facilis expedita
                            a, eligendi, quis voluptates, rem reprehenderit omnis eos tenetur consequuntur eum obcaecati
                            nam earum! Ut ducimus cupiditate inventore?
                        </section>
                        {{--** Data Section Tab **--}}
                        {{-- <section class="pt-4 smartMetode">
                            <div class="dataContainer__field">
                                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                    <ul class="flex -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400"
                                        id="tabList" role="tablist">
                                        <li class="block w-full transition duration-300 delay-100 active rounded-t-md"
                                            role="presentation block">
                                            <button
                                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 dark:hover:text-gray-300"
                                                id="hargaBtn" data-target="hargaTab" type="button" role="tab"
                                                aria-controls="harga-role" aria-selected="false">
                                                Harga
                                            </button>
                                        </li>
                                        <li class="block w-full transition duration-300 delay-100 rounded-t-md"
                                            role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 dark:hover:text-gray-300"
                                                id="fasilitasBtn" data-target="fasilitasTab" type="button" role="tab"
                                                aria-controls="fas-role" aria-selected="false">
                                                Fasilitas
                                            </button>
                                        </li>
                                        <li class="block w-full transition duration-300 delay-100 me-2 rounded-t-md"
                                            role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 dark:hover:text-gray-300"
                                                id="aksesbilitasBtn" data-target="aksesbilitasTab" type="button"
                                                role="tab" aria-controls="akses-role" aria-selected="false">
                                                Aksesbilitas
                                            </button>
                                        </li>
                                        <li class="block w-full transition duration-300 delay-100 me-2 rounded-t-md"
                                            role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 dark:hover:text-gray-300"
                                                id="jarakBtn" data-target="jarakTab" type="button" role="tab"
                                                aria-controls="jarak-role" aria-selected="false">
                                                Jarak
                                            </button>
                                        </li>
                                        <li class="block w-full transition duration-300 delay-100 me-2 rounded-t-md"
                                            role="presentation">
                                            <button
                                                class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:border-gray-300 dark:hover:text-gray-300"
                                                id="prioritasBtn" data-target="prioritasTab" type="button" role="tab"
                                                aria-controls="prio-role" aria-selected="false">
                                                Prioritas
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tabContentItems">
                                    <div class="p-4 rounded-lg dark:bg-gray-800" id="hargaTab" role="tabpanel"
                                        aria-labelledby="harga-tab-role" name="contentTab">
                                        <div class="dataContainer__field">
                                            <div class="dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Murah</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            readonly value='0'>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Murah</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sedang</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Mahal</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Mahal</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kHarga" id="kHarga"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="fasilitasTab"
                                        name="contentTab" role="tabpanel" aria-labelledby="fasilitas-tab-role">
                                        <div class="dataContainer__field">
                                            <div class="dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Baik</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null.
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;">
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null.
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Baik</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null.
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null.
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sedang</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null.
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Kurang</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null.
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Kurang</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null.
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Null
                                                        </p>

                                                        <input type="number" name="kFasilitas" id="kFasilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="aksesbilitasTab"
                                        role="tabpanel" name="contentTab" aria-labelledby="aksesbilitas-tab-role">
                                        <div class="dataContainer__field">
                                            <div class="dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Mudah</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="text" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;">
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="text" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Mudah</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="text" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="text" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sedang</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="text" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="text" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Susah</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="number" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Susah</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Bawah.
                                                        </p>

                                                        <input type="number" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kAksesbilitas" id="kAksesbilitas"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="jarakTab" role="tabpanel"
                                        name="contentTab" aria-labelledby="jarak-tab-role">
                                        <div class="dataContainer__field">
                                            <div class="dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Dekat</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Bawah.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            readonly value='0'>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Atas.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Dekat</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Bawah.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Atas.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sedang</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Bawah.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Atas.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Jauh</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Bawah.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Harga Atas.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 dataWrapper">
                                                <h3 class="text-xl font-semibold">Sangat Jauh</h3>
                                                <div class="grid grid-cols-2 gap-3 dataWrapper__harga">
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Bawah.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>
                                                    </div>
                                                    <div class="dataItem">
                                                        <p
                                                            class="relative flex items-center py-3 font-normal align-middle text-md listName">
                                                            Silahkan Masukkan Rentang Jarak Atas.
                                                        </p>

                                                        <input type="number" name="kJarak" id="kJarak"
                                                            class="w-full rounded-md" style="padding: 8px 1rem;"
                                                            required>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="prioritasTab"
                                        role="tabpanel" name="contentTab" aria-labelledby="prioritas-tab-role">
                                        <p class="text-sm text-gray-500 dark:text-gray-400">
                                            This is some placeholder content the
                                            <strong class="font-medium text-gray-800 dark:text-white">Contacts
                                                tabs AAAAAAAAAAAAAAAA content</strong>. Clicking another
                                            tab will
                                            toggle the visibility of this one for
                                            the next. The tab JavaScript swaps classes to control
                                            the content
                                            visibility and styling.
                                        </p>
                                    </div>
                                </div>
                                <div class="w-full py-6 resultsMetode buttonSimpan">
                                    <span class="block border-t-2">
                                        <button type="button"
                                            class="mt-4 w-full text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-md">Simpan</button>
                                    </span>
                                </div>
                            </div>
                        </section> --}}
                        {{--** Data Section Tab **--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('body').on('click', '#btnLogout', function(){
        $('#formLogout').submit();
    });

    $('body').on('click', '.btnSetting', function() {
        $('.profileEdit__recommendation').css('display', 'none');
        $('.profileEdit__control').css('display', 'block');
        $(this).parent().addClass('active');
        $('.btnRecommendation').parent().removeClass('active');
    });

    $('body').on('click', '.btnRecommendation', function() {
        $('.profileEdit__recommendation').css('display', 'block');
        $('.profileEdit__control').css('display', 'none');
        $(this).parent().addClass('active');
        $('.btnSetting').parent().removeClass('active');
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

<script>
    $('body').on('click', '#tabList button', function() {
        let $this = $(this);
        let target = $this.data('target');
        console.log(target);
        $('div[name="contentTab"]:not(.hidden)').addClass('hidden');
        $('#' + target).removeClass('hidden');

        $('#tabList li.active').removeClass('active');

        $this.parent().addClass('active');
    });
</script>
@endpush