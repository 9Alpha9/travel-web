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

    {{-- Import Dependency Homepages Styles --}}
    <link rel="stylesheet" href="{{ asset('asset/styles/homepages/homepages-styles.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <title>Birentcar Travel Agency</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    @include('components.dateRangePicker')
    @stack('style')
</head>

<body>
    @include('navigation-bar.navbar')

    @yield('pageContent')

    @include('components.footer.footer')

    <form action="" method="" id="blankForm">
        {{ csrf_field() }}
    </form>
</body>
@include('components.universalJavascript')
@stack('scripts')
<form id="formLogout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<script>
    $('#btnLogout').on('click', function(){
        // alert('tes');
        $('#formLogout').submit();
    });

    $(document).ready(function(){
        $('input[type="number"]').attr('onkeypress', 'return isNumber(event)');
    });

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>

<script>
    $("input[type='file']").on("change", function (e) {
        if($(this)[0].files[0].size > 2097152){
            $('#notifFileSize').attr('style', 'display: show; margin-bottom: 20px;');
            this.value = "";
        };
    });
</script>

</html>
