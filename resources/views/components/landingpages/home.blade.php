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

    {{-- Import Dependency Homepages Styles --}}
    <link rel="stylesheet" href="{{ asset('asset/homepages/homepages-styles.css') }}">
    <title>Travel Agency</title>
</head>

<body>
    {{-- Navbar --}}
    <div class="fixed z-10 navigation__header">
        <nav class="navbar">
            <a class="brand" href="#">
                <figure class="brand__logo">
                    {{-- <img src="/component/assets/bagian-logo.png" alt=""> --}}
                </figure>
                <div class="brand__header--text">
                    Birent Travel
                </div>
            </a>
            <input type="checkbox" id="nav" class="hidden">
            <label for="nav" class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="wrapper">
                <ul class="menu">
                    <li class="menu-item active"><a href="#">Home</a></li>
                    <li class="menu-item">
                        <a href="#">Tempat Wisata</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">Jawa Timur</a>
                    </li>
                    <li class="menu-item">
                        <a href="#">Tentukan Wisata</a>
                    </li>
                    <div class="login__content ">
                        <div class="login-setup">
                            {{-- <button id="daftar" class="signup-btn">Daftar</button> --}}
                            <a href="#">Log In</a>
                        </div>
                        <div class="signup">
                            <button id="daftar" class="signup-btn">Daftar</button>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    {{-- End Navbar --}}

    {{-- Content Wrapper --}}
    <div class="content__wrapper">
        <div class="wrapper__content">
            <div class="content__header">
                <section>Wisata Jawa Timur</section>
                <section class="header__small">Paling Terfavorit</section>
                <div class="explore__more explore__guide">
                    <a href="#">Explore</a>
                </div>
            </div>
            <div class="banner__item">
                <div class="video__promotion">
                    <video width="100%" loop muted autoplay class="promotion">
                        <source src="{{ asset('asset/video/jawatimur.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="video__documenter promotion__source">
                        <h1>video by : Intravesco</h1>
                    </div>
                </div>
                {{-- <figure>
                    <img src="https://anekatempatwisata.com/wp-content/uploads/2015/07/Gunung-Bromo-Jawa-Timur.jpg"
                        alt="">
                </figure> --}}
                <div class="box__reserve">
                    <div class="box__reserve__content">
                        Reservasi box
                    </div>
                </div>
            </div>
        </div>
        {{-- End Content Wrapper --}}
</body>

</html>