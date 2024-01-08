<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{  csrf_token() }}">

    {{-- Defive Font From Fontshare --}}
    <link
        href="https://api.fontshare.com/v2/css?f[]=erode@400&f[]=satoshi@700&f[]=quicksand@500&f[]=general-sans@500&display=swap"
        rel="stylesheet">

    {{-- Import Tailwind Css Components --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('asset/styles/signup-styles/signup-styles.css') }}">
    @include('components.dateRangePicker')
    @include('components.universalJavascript')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <title>Daftar Akun Baru</title>
</head>

<body>
    <div class="signup__header">
        <div class="signup__wrapper">
            <div class="hidden signup__item signup__banner xl:block lg:block md:hidden text-text-primary-white">
                <section class="pt-20 text-center signup__intro__title xl:pt-20 3xl:pt-40 ">
                    Jelajahi Wisata Di Jawa Timur dan Tentukan Tempat Wisata Tervarofit Anda
                </section>
                <p class="py-8 text-center">buat akun sekarang biar bisa pilih wisata terfavorit di Jawa Timur</p>
                <img src="{{ asset('asset/img/3DMan.png') }}" alt="">
            </div>
            <div class="p-10 signup__set-up border-">
                <div class="signup__item__sec__right">
                    <div class="relative flex signup__master__head">
                        <span class="absolute inline-block duration-300 ease-in-out svgBlock">
                            <a href="/">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13.5 13.5" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M1 13.5L13.5 1" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </span>
                        <h1 class="w-full my-1 signup__title">Buat Akun</h1>
                    </div>
                    <div class="signup__forms">
                        <form action="{{ route('register') }}" method="post" autocomplete="off">
                            {{ csrf_field() }}
                            <div class="relative mb-2 emailNumber__input">
                                <label for="emailNumber"
                                    class="block my-2 text-md text-gray-primary labelInput__type">Email
                                    atau
                                    Telephone</label>
                                <input type="text" id="email" name="email"
                                    class="block w-full p-4 text-sm rounded-lg inputType__include"
                                    placeholder="john-doe@yourmail.com" autocomplete="off">
                                <p id="notifP" class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <span id="notifSpan" class="font-medium availabel__notification">
                                    </span>
                                </p>
                            </div>
                            <div class="mb-2">
                                <label for="fullName" class="block my-2 text-md text-gray-primary labelInput__type">Nama
                                    Lengkap
                                    Anda</label>
                                <input type="text" id="fullname" name="fullname"
                                    class="block w-full p-4 text-sm rounded-lg inputType__include"
                                    placeholder="John Doe">
                                <p id="notifP" class="mt-2 text-sm text-green-600 dark:text-green-500">
                                    <span id="notifSpan" class="font-medium availabel__notification">
                                    </span>
                                </p>
                            </div>
                            <div class="regencyInput">
                                <div class="grid grid-cols-1 gap-2 regencyShow__input xl:grid-cols-2 md:grid-cols-2">
                                    <div class="ctaKota">
                                        <label for="kota" class="block my-2 text-md text-gray-primary labelInput__type">
                                            Asal Kota</label>
                                        <select name="kota" id="inputKota"
                                            class="block w-full p-4 text-sm rounded-lg inputType__include bg-gray-primary">
                                            <option value="" selected hidden>Pilih Kota</option>
                                            </option>
                                        </select>
                                    </div>
                                    <div class="ctaKecamatan">
                                        <label for="kecamatan"
                                            class="block my-2 text-md text-gray-primary labelInput__type">Asal
                                            Kecamatan</label>
                                        <select name="kota" id="inputKota"
                                            class="block w-full p-4 text-sm rounded-lg inputType__include">
                                            <option value="" selected hidden>Pilih Kecamatan</option>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="my-2 addressInput">
                                    <div class="relative block ctaAddress">
                                        <span class="flex flex-col addressUsers">
                                            <label for="address"
                                                class="text-md text-gray-primary labelInput__type">Alamat Anda</label>
                                            <textarea name="address" id="" rows="10"
                                                class="w-full h-20 px-2 my-2 text-sm rounded-md resize-none w-96"></textarea>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ctaPassword">
                                <label for="password" class="block my-2 text-md text-gray-primary labelInput__type">Kata
                                    sandi</label>
                                <input type="password" id="password" name="password" autocomplete="off"
                                    class="block w-full p-4 text-sm rounded-lg inputType__include">
                            </div>
                            <div class="signup__cta__procs">
                                <button type="submit" id="btnSubmit" class="w-full">
                                    <span
                                        class="items-center inline-block w-full py-2 my-4 text-center duration-300 ease-in-out rounded-lg cta__login bg-cta-login-birent hover:bg-primary-birent-hover">Buat
                                        Akun</span>
                                </button>
                            </div>
                        </form>
                        <section class="my-3 text-sm text-center signup__sert">
                            Dengan membuat akun kamu menyetujui
                            <a href="#"
                                class="font-semibold text-primary-birent hover:text-primary-birent-hover hover:underline">
                                Syarat & Ketentuan
                            </a>
                            dan
                            <a href="#"
                                class="font-semibold text-primary-birent hover:text-primary-birent-hover hover:underline">
                                Kebijakan Privasi kami.
                            </a>
                        </section>
                        <section class="text-center signup__create__account">
                            Sudah punya akun?
                            <a href="{{ route('login') }}"
                                class="font-semibold create__account text-cta-login-birent hover:underline">
                                Log In aja
                            </a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#email').on('change', function(){
            $('#btnSubmit').prop('disabled', true);
        });
        $('#email').blur(function(){
            let email = $(this).val();
            $.ajax({
                type:"POST",
                url:"{{ route('register.check') }}",
                data:{
                    email:email
                },
                success: function(response){
                    if(response['userStatus'] == "empty"){
                        $('#notifP').attr('class', 'mt-2 text-sm text-green-600 dark:text-green-500');
                        $('#notifSpan').attr('class', 'font-medium availabel__notification');
                        $('#btnSubmit').prop('disabled', false);
                    }
                    else if(response['userStatus'] == "exist"){
                        $('#notifP').attr('class', 'mt-2 text-sm dark:text-red-500');
                        $('#notifSpan').attr('class', 'font-medium error__notification__text');
                    }
                    $('#notifSpan').html(response['message']);
                }
            });
        });
    </script>
</body>

</html>