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
            <div class="hidden login__item login__banner xl:block lg:block md:hidden text-text-primary-white">
                <section class="pt-20 text-center login__intro__title xl:pt-20 3xl:pt-40 ">
                    Login untuk bisa nikmatin tempat wisata
                    di Jawa Timur
                </section>
                <p class="py-8 text-center">Kamu cukup masukin Email atau Nomor Ponsel aja kok</p>
                <img src="{{ asset('asset/img/DRIP_20.png') }}" alt="">
            </div>
            <div class="p-10 login__set-up border-">
                <div class="login__item__sec__right">
                    <div class="relative flex login__master__head">
                        <span class="absolute inline-block svgBlock__login duration-300 ease-in-out">
                            <a href="/">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L13.5 13.5" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M1 13.5L13.5 1" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </a>
                        </span>
                        <h1 class="my-6 login__title">Login</h1>
                    </div>
                    <div class="login__forms">
                        <form method="post" action="{{ route('login') }} " autocomplete="off">
                            {{ csrf_field() }}
                            <div class="mb-6 mailsHolders">
                                <span class="labelsLogin my-2 text-md text-gray-primary">
                                    <label for="mail">Email atau Telephone</label>
                                </span>
                                <input type="text" id="email" name="email" autocomplete="off"
                                    class="block w-full my-2 p-4 text-sm text-red-900 placeholder-red-700 border-red-500 rounded-lg bg-red-50 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400"
                                    placeholder="Nomor Handphone atau Email">
                                @error('userNotFound')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    <span class="font-medium availabel__notification">
                                        {{ $message }}
                                    </span>
                                </p>
                                @enderror
                            </div>
                            <div class="passwordHolder">
                                <span class="labelsLogin my-2 text-md text-gray-primary">
                                    <label for="password">Kata Sandi</label>
                                </span>
                                <input type="password" id="password" name="password"
                                    class="block w-full my-2 p-4 text-sm text-red-900 placeholder-red-700 border-red-500 rounded-lg bg-red-50 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400"
                                    placeholder="Kata Sandi">
                                @error('wrongPassword')
                                <p class="mt-2 text-sm dark:text-red-500">
                                    <span class="font-medium error__notification__text">
                                        {{ $message }}
                                    </span>
                                </p>
                                @enderror
                            </div>
                            <div class="login__cta__procs">
                                <button type="submit" id="btnLogin" class="w-full button__ctaLogin">
                                    <span
                                        class="items-center block w-full py-2 my-4 text-center duration-300 ease-in-out rounded-lg cta__login bg-cta-login-birent hover:bg-primary-birent-hover">Masuk</span>
                                </button>
                                <h3 class="py-3 text-center">atau masuk menggunakan</h3>
                                <a href="{{ route('loginGoogle') }}">
                                    <span
                                        class="flex items-center justify-center w-full gap-2 p-2 my-1 font-medium text-center duration-300 ease-in-out rounded-lg bg-google-primary cta__to__google hover:bg-google-hover-secondary">
                                        <svg id="Capa_1" width="30" version="1.1" viewBox="0 0 150 150"
                                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 150 150">
                                            <path
                                                d="M120 76.1c0-3.1-.3-6.3-.8-9.3H75.9v17.7h24.8c-1 5.7-4.3 10.7-9.2 13.9l14.8 11.5C115 101.8 120 90 120 76.1z"
                                                fill="#ffffff"> </path>
                                            <path
                                                d="M75.9 120.9c12.4 0 22.8-4.1 30.4-11.1L91.5 98.4c-4.1 2.8-9.4 4.4-15.6 4.4-12 0-22.1-8.1-25.8-18.9L34.9 95.6c7.8 15.5 23.6 25.3 41 25.3z"
                                                fill="#ffffff"> </path>
                                            <path
                                                d="M50.1 83.8c-1.9-5.7-1.9-11.9 0-17.6L34.9 54.4c-6.5 13-6.5 28.3 0 41.2l15.2-11.8z"
                                                fill="#ffffff"> </path>
                                            <path
                                                d="M75.9 47.3c6.5-.1 12.9 2.4 17.6 6.9L106.6 41c-8.3-7.8-19.3-12-30.7-11.9-17.4 0-33.2 9.8-41 25.3l15.2 11.8c3.7-10.9 13.8-18.9 25.8-18.9z"
                                                fill="#ffffff"> </path>
                                        </svg>
                                        Google
                                    </span>
                                </a>
                            </div>
                        </form>
                        <section class="my-12 text-sm text-center login__sert">
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
                        <section class="text-center login__create__account">
                            Belum punya akun?
                            <a href="{{ route('register.form') }}"
                                class="font-semibold create__account text-cta-login-birent hover:underline">
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
