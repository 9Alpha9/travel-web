<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <div class="banner__item">
                <figure>
                    <img src="https://anekatempatwisata.com/wp-content/uploads/2015/07/Gunung-Bromo-Jawa-Timur.jpg"
                        alt="">
                </figure>
            </div>
            <div class="box__reserve">
                Travel Agency Homepages
            </div>
        </div>
    </div>
    {{-- End Content Wrapper --}}
</body>

</html>