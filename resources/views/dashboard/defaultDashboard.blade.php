<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    {{-- Sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="https://cdn.tiny.cloud/1/smrd3od8fwoqal7lpb5mxs1y0saxrmn6xj1jimybixsr8amf/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    {{-- Auto Numeric --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.8.1"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autonumeric/4.8.1/autoNumeric.js"></script>

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
    <form action="" method="post" id="deleteForm">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>

    <script>
        $('#btnLogout').on('click', function(){
            // alert('tes');
            $('#formLogout').submit();
        });

        $(document).ready(function(){
            let table = new DataTable('.dataTable');

            $('input[type="text"].inputNumber').on('keypress', function(){
                let currValue = $(this).val();
                let currName = $(this).data('name');
                $('input[type="number"].dataSend[name="' + currName + '"]').val(currValue);
            });

            $('input[type="text"].inputNumber.currency').attr('onkeypress', 'return isNumber(event)');
            // $('input[type="text"].inputNumber.currency').autoNumeric('init', {
            //     aSep: '.',
            //     aDec: ',',
            //     aForm: true,
            //     vMax: '999999999',
            //     vMin: '-999999999'
            // });
            // $('input[type="text"].inputNumber.currency').attr('onkeypress', 'return thousandSeparator(event)');
        });

        function thousandSeparator(evt){
            return evt.target.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
</body>


</html>