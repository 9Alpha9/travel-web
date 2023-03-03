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
            <div class="login__item login__banner">
                <section class="login__intro__title text-center pt-40">
                    Jelajahi wisata di Jawa Timur dan tentukan Tempat Wisata Tervarofit anda
                </section>
                <p class="text-center py-8">buat akun sekarang biar bisa pilih wisata terfavorit di Jawa Timur</p>
                <img src="{{ asset('asset/img/DRIP_20.png') }}" alt="">
            </div>
            <div class="login__set-up">
                <div class="login__item__sec__right">
                    <div class="login__master__head flex">
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
                            <button type="submit"
                                class="cta__login bg-cta-login-birent w-full py-2 rounded-lg my-12 hover:bg-primary-birent-hover ease-in-out duration-300">Login</button>
                        </form>
                        <section class="login__sert text-center my-12">
                            Dengan membuat akun kamu menyetujui

                            <a href="#" class="text-primary-birent font-semibold hover:text-primary-birent-hover">
                                Syarat & Ketentuan
                            </a>
                            dan
                            <a href="#" class="text-primary-birent font-semibold hover:text-primary-birent-hover">
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
