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
    <link rel="stylesheet" href="{{ asset('asset/styles/homepages/homepages-styles.css') }}">
    <title>Birentcar Travel Agency | Homepages</title>

    @include('components.dateRangePicker')
    @stack('style')
</head>

<body>
    @include('navigation-bar.navbar')

    @yield('pageContent')

    <form id="formLogout" action="" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    @include('components.footer.footer')

</body>
@include('components.universalJavascript')
@stack('scripts')

</html>