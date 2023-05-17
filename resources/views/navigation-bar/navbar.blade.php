{{-- Navbar --}}
<div class="fixed z-10 navigation__header">
    <nav class="navbar">
        <a class="brand" href="{{ route('landingpage') }}">
            <figure class="brand__logo">
                {{-- <img src="/component/assets/bagian-logo.png" alt=""> --}}
            </figure>
            <div class="brand__header--text">
                Birentcar Travel
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
                <li class="menu-item active"><a href="/">Home</a></li>
                <li class="menu-item">
                    <a href="#">Tempat Wisata</a>
                </li>
                {{-- <li class="menu-item">
                    <a href="#">Jawa Timur</a>
                </li> --}}
                <li class="menu-item">
                    <a href="#">Tentukan Wisata</a>
                </li>
                <div class="login__content ">
                    <div class="login-setup">
                        {{-- <button id="daftar" class="signup-btn">Daftar</button> --}}
                        <a href="{{ route('login') }}">Log In</a>
                    </div>
                    <div class="signup">
                        <a href="{{ route('register.form') }}" class="signup-btn">Daftar</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
</div>
{{-- End Navbar --}}