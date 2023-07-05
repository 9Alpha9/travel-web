<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('asset/styles/dashboard/dashboardStyles.css') }}">

    {{-- Import Tailwind Css Components --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Import Remix Css Components --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Import Flowbite Components --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    {{-- Data Table Component --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    {{-- Sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    {{-- Import Google Fonts Components --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,600;0,800;1,400&family=Nunito:wght@200;300;400;500&family=Poppins:wght@100;200;300;500;800&display=swap"
        rel="stylesheet">

    <title>{{ $pageTitle }}</title>
    @include('components.universalJavascript')
    @stack('style')
</head>

<body>
    <div class="relative flex dashboardContainer__inner">
        @include('dashboard.components.navbarSideDB')
        <div class="relative sideDB__content">
            <div class=" sideDB__navtopContainer">
                <div class="fixed z-10 flex justify-between navTop__fixed">
                    {{-- Top Navbar --}}
                    @include('dashboard.components.navbarTopDB')

                    {{-- End Top Navbar --}}
                </div>
            </div>
            @yield('pageContent')
            @include('dashboard.components.footerDB')
        </div>
    </div>
    <form id="formLogout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <script>
        $('#btnLogout').on('click', function(){
            // alert('tes');
            $('#formLogout').submit();
        });

        $(document).ready(function(){
            let table = new DataTable('.dataTable');

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
    @include('dashboard.components.sweetalert')
    @stack('scripts')
</body>


</html>