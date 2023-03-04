<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    {{-- Defive Font From Fontshare --}}
    <link
        href="https://api.fontshare.com/v2/css?f[]=erode@400&f[]=satoshi@700&f[]=quicksand@500&f[]=general-sans@500&display=swap"
        rel="stylesheet">

    {{-- Import Tailwind Css Components --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/styles/login/login-styles.css') }}">
    <title>Login</title>
</head>

<body>
    <div class="login__header">
        <div class="login__wrapper">
            <div class="login__item login__banner hidden xl:block lg:block md:hidden">
                <section class="login__intro__title text-center pt-40">
                    Jelajahi Wisata Di Jawa Timur dan Tentukan Tempat Wisata Tervarofit Anda
                </section>
                <p class="text-center py-8">buat akun sekarang biar bisa pilih wisata terfavorit di Jawa Timur</p>
                <img src="{{ asset('asset/img/DRIP_20.png') }}" alt="">
            </div>
            <div class="login__set-up p-10 border-">
                <div class="login__item__sec__right">
                    <div class="login__master__head flex relative">
                        <span
                            class="inline-block absolute -top-32 xl:-top-32 lg:-top-32 md:-top-32 lg:right-0 ease-in-out duration-300">
                            <a href="/">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13.5 13.5" stroke="#162F89" stroke-width="1.5"
                                        stroke-linecap="round" />
                                    <path d="M1 13.5L13.5 1" stroke="#162F89" stroke-width="1.5"
                                        stroke-linecap="round" />
                                </svg>
                            </a>
                        </span>
                        <h1 class="login__title my-6">Login</h1>
                    </div>
                    <div class="login__forms">
                        <form action="" autocomplete="off">
                            <div class="mb-6 ">
                                <input type="text" id="username-success"
                                    class="bg-green-50  border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-4 dark:bg-green-100 dark:border-green-400"
                                    placeholder="Nomor Handphone atau Email">
                                <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span
                                        class="font-medium">Alright!</span> Username available!</p>
                            </div>
                            <div class="">
                                <input type="password" id="username-error"
                                    class="bg-red-50 border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-4 dark:bg-red-100 dark:border-red-400"
                                    placeholder="Kata Sandi">
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Oops!</span> Username already taken!</p>
                            </div>
                            <div class="login__cta__procs">
                                <a href="#!">
                                    <span
                                        class="cta__login inline-block text-center items-center bg-cta-login-birent w-full py-2 rounded-lg my-4 hover:bg-primary-birent-hover ease-in-out duration-300">Masuk</span>
                                    <h3 class="text-center py-3">atau masuk menggunakan</h3>
                                </a>
                                <a href="#!">
                                    <span
                                        class="w-full bg-google-primary cta__to__google justify-center gap-2 items-center text-center p-2 rounded-lg my-1 font-medium flex hover:bg-google-hover-secondary ease-in-out duration-300"><img
                                            src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg"
                                            style="width:25px">Google</span>
                                </a>
                            </div>
                        </form>
                        <section class="login__sert text-center my-12 text-sm">
                            Dengan membuat akun kamu menyetujui
                            <a href="#"
                                class="text-primary-birent font-semibold hover:text-primary-birent-hover hover:underline">
                                Syarat & Ketentuan
                            </a>
                            dan
                            <a href="#"
                                class="text-primary-birent font-semibold hover:text-primary-birent-hover hover:underline">
                                Kebijakan Privasi kami.
                            </a>
                        </section>
                        <section class="login__create__account text-center">
                            Belum punya akun?
                            <a href="#" class="create__account text-cta-login-birent font-semibold hover:underline">
                                Buat Akun yuk!
                            </a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
