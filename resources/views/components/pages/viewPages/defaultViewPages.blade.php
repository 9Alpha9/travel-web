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

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text&family=Quicksand:wght@300;400;500&display=swap"
        rel="stylesheet">

    {{-- Import Dependency Viewpages Styles --}}
    <link rel="stylesheet" href="{{ asset('asset/styles/pages/viewpages/viewpages-styles.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Import Swiper JS Components --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/b87f3ad2d2.js" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    {{-- Jquery & Date Range Picker --}}
    @include('components.dateRangePicker')

    <title>View Tempat Wisata</title>
</head>

<body>
    @include('navigation-bar.navbar')
    <div class="relative m-auto view__component__header">
        {{-- Breadcrumb --}}
        <div class="py-6 pt-32 breadcrumb breadcrum__item">
            <ul class="flex flex-row gap-2">
                <li class="font-semibold text-primary-birent ">
                    <a href="{{ route('landingpage') }}">Home</a>
                </li>
                <li>/</li>
                {{-- <li class="font-semibold text-primary-birent">
                    <a href="#!" class="hover:underline">{{ $tableWisata->kategoriwisata->nama_kategori_wisata
                        }}</a>
                </li> --}}
                {{-- <li>/</li> --}}
                <li class="font-semibold text-gray-primary">
                    <a href="#!" class="hover:underline">{{ $tableWisata->nama_wisata }}</a>
                </li>
            </ul>
        </div>
        {{-- End Breadcrumb --}}
        <div class="relative flex flex-row gap-1 view__content">
            {{-- Gallery View Item --}}
            {{-- Main Gallery Left --}}
            <div class="flex-grow flex-shrink overflow-hidden rounded-lg view__item">
                {{-- Button trigger modal --}}
                <button class="inline-block overflow-hidden rounded-lg" onclick="openModal('modal', 0)">
                    <figure class="view__gallery__banner">
                        @php($url_nama_wisata = str_replace(' ', '_', $tableWisata->nama_wisata))
                        @if (count($tableWisata->gambarwisata) > 0)
                        @php($gambar = !is_null($tableWisata->gambarwisata->first()->nama_gambar) ?
                        url("gallery-wisata/$url_nama_wisata/{$tableWisata->gambarwisata->first()->nama_gambar}") :
                        asset("asset/img/empty-image-thumb.png"))
                        @else
                        @php ( $gambar = asset('asset/img/empty-image-thumb.png') )
                        @endif
                        <img src="{{ $gambar }}" alt="">
                    </figure>
                </button>
                {{-- Modal --}}
                <div data-te-modal-init
                    class="fixed bottom-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="modal" tabindex="-1" aria-labelledby="modal" aria-modal="true" role="dialog">
                    <div data-te-modal-dialog-ref class="relative flex pointer-events-none">
                        {{-- Modal Component --}}
                        @include('components.pages.viewPages.modalSlideGallery')
                    </div>
                </div>
                {{-- End Modal --}}
            </div>
            {{-- End Main Gallery Left --}}
            <div class="hidden start__side__gal xl:block">
                <div class="relative flex flex-col gap-1 view__side__gallery">
                    {{-- <-- ? Duplicate --> --}}
                        <div class="flex flex-row gap-1 overflow-hidden rounded-lg inside__view__gallery">
                            <div class="max-w-sm overflow-hidden rounded-lg gallery__view">
                                <button type="button" class="inline-block overflow-hidden rounded-lg"
                                    onclick="openModal('modal', 1)">
                                    <figure class="side__gallery__stag">
                                        @php($url_nama_wisata = str_replace(' ', '_', $tableWisata->nama_wisata))
                                        @if (count($tableWisata->gambarwisata) > 1)
                                        @php($gambar =
                                        !is_null($tableWisata->gambarwisata->skip(1)->first()->nama_gambar) ?
                                        url("gallery-wisata/$url_nama_wisata/{$tableWisata->gambarwisata->skip(1)->first()->nama_gambar}")
                                        :
                                        asset("asset/img/empty-image-thumb.png"))
                                        @else
                                        @php ( $gambar = asset('asset/img/empty-image-thumb.png') )
                                        @endif

                                        <img src="{{ $gambar }}" alt="">
                                    </figure>
                                </button>
                            </div>
                            <div class="max-w-sm overflow-hidden rounded-lg gallery__view">
                                <button type="button" class="inline-block overflow-hidden rounded-lg"
                                    onclick="openModal('modal', 2)">
                                    <figure class="side__gallery__stag">
                                        @php($url_nama_wisata = str_replace(' ', '_', $tableWisata->nama_wisata))
                                        @if (count($tableWisata->gambarwisata) > 2)
                                        @php($gambar =
                                        !is_null($tableWisata->gambarwisata->skip(2)->first()->nama_gambar) ?
                                        url("gallery-wisata/$url_nama_wisata/{$tableWisata->gambarwisata->skip(2)->first()->nama_gambar}")
                                        :
                                        asset("asset/img/empty-image-thumb.png"))
                                        @else
                                        @php ( $gambar = asset('asset/img/empty-image-thumb.png') )
                                        @endif

                                        <img src="{{ $gambar }}" alt="">
                                    </figure>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-row gap-1 overflow-hidden rounded-lg inside__view__gallery">
                            <div class="max-w-sm overflow-hidden rounded-lg gallery__view">
                                <button type="button" class="inline-block overflow-hidden rounded-lg"
                                    onclick="openModal('modal', 3)">
                                    <figure class="side__gallery__stag">
                                        @php($url_nama_wisata = str_replace(' ', '_', $tableWisata->nama_wisata))
                                        @if (count($tableWisata->gambarwisata) > 3)
                                        @php($gambar =
                                        !is_null($tableWisata->gambarwisata->skip(3)->first()->nama_gambar) ?
                                        url("gallery-wisata/$url_nama_wisata/{$tableWisata->gambarwisata->skip(3)->first()->nama_gambar}")
                                        :
                                        asset("asset/img/empty-image-thumb.png"))
                                        @else
                                        @php ( $gambar = asset('asset/img/empty-image-thumb.png') )
                                        @endif

                                        <img src="{{ $gambar }}" alt="">
                                    </figure>
                                </button>
                            </div>
                            <div class="max-w-sm overflow-hidden rounded-lg gallery__view">
                                <button type="button" class="inline-block overflow-hidden rounded-lg"
                                    onclick="openModal('modal', 4)">
                                    <figure class="side__gallery__stag">
                                        @php($url_nama_wisata = str_replace(' ', '_', $tableWisata->nama_wisata))
                                        @if (count($tableWisata->gambarwisata) > 4)
                                        @php($gambar =
                                        !is_null($tableWisata->gambarwisata->skip(4)->first()->nama_gambar) ?
                                        url("gallery-wisata/$url_nama_wisata/{$tableWisata->gambarwisata->skip(4)->first()->nama_gambar}")
                                        :
                                        asset("asset/img/empty-image-thumb.png"))
                                        @else
                                        @php ( $gambar = asset('asset/img/empty-image-thumb.png') )
                                        @endif

                                        <img src="{{ $gambar }}" alt="">
                                    </figure>
                                </button>
                            </div>
                        </div>
                        {{-- <-- ? End Duplicate --> --}}

                </div>
            </div>
            {{-- Gallery View Item --}}
        </div>
        {{-- View Pages Item Component --}}
        @include('components.pages.viewPages.viewPagesInformation')
        {{-- End View Pages Item Component --}}

        {{-- View Pages Item Component --}}
        @include('components.pages.viewPages.viewPagesFasility')
        {{-- End View Pages Item Component --}}

        {{-- View Pages item Review --}}
        @include('components.pages.viewPages.viewPagesReview')
        {{-- End View Pages item Review --}}
    </div>

    @include('components.footer.footer')
    @include('components.universalJavascript')

    <form id="formLogout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <script>
        $('#btnLogout').on('click', function(){
            // alert('tes');
            $('#formLogout').submit();
        });
    </script>
    {{--
    <!-- Swiper JS --> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    {{--
    <!-- Initialize Swiper --> --}}
    <script>
        var initSwiper = new Swiper(".slideGallery", {
            centeredSlides: true,
            spaceBetween: 100,
        pagination:{
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
      },
    });
    </script>

    <script type="text/javascript">
        window.openModal = function(modalId, index) {
            // let swipe = $('.swiper');
            const swiper = document.querySelector('.slideGallery').swiper;
            swiper.slideTo(index);
          document.getElementById(modalId).style.display = 'block'
          document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
        }

        window.closeModal = function(modalId) {
          document.getElementById(modalId).style.display = 'none'
          document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
        }

        // Close all modals when press ESC
        document.onkeydown = function(event) {
          event = event || window.event;
          if (event.keyCode === 27) {
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
            let modals = document.getElementsByClassName('modal');
            Array.prototype.slice.call(modals).forEach(i => {
              i.style.display = 'none'
            })
          }
        };
    </script>

    <script>
        $(function () {
            $('input[name="datefilterBooking"]').daterangepicker({
                singleDatePicker: true,
                autoApply: true,
                drops: "down",
                showCustomRangeLabel: false,
                locale: {
                    cancelLabel: 'Clear',
                    daysOfWeek: hariSingkat,
                    monthNames: namaBulan,
                    firstday: 1
                }
            }, function(start, end, label) {
                // console.log('input[name="datefilterBooking"]' + start.format('DD-Mon-YYYY') + ' to ' + end.format('DD-Mon-YYYY') + ' (predefined range: ' + label + ')');
            });

            $('input[name="datefilterBooking"]').on('apply.daterangepicker', function (ev, picker) {
                $(this).val(customFormatDate(picker.startDate._d));
            });

            $('input[name="datefilterBooking"]').on('hide.daterangepicker', function (ev, picker) {
                $(this).val(customFormatDate(new Date(this.value)));
            });

        });

        $(document).ready(function(){
            let currentDate = new Date();
            $('input[name="datefilterBooking"]').val(customFormatDate(currentDate));
        })

    </script>

    <script>
        $('button[name="buttonVisitor"]').on('click', function(){
            let visitor =  $('#jumlahVisitor').val();
            if(this.id === "visitorPlus"){
                if(visitor >= 10){
                    visitor = 10;
                }
                else{
                    visitor++;
                }
            }
            else if(this.id === "visitorMinus"){
                if(visitor <= 1){
                    visitor = 1;
                }
                else{
                    visitor--;
                }
            }
            $('#jumlahVisitor').val(visitor);
        });

        $('#jumlahVisitor').on('change', function(){
            if(this.value >= 10){
                this.value = 10;
            }
            else if(this.value <= 0){
                this.value = 1;
            }
        });
    </script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    {{-- <script>
        const payButton = document.querySelector('#paymentTicket');
        payButton.addEventListener('click', function(e) {
            e.preventDefault();

            $.post('{{ route("payment",$id_wisata) }}', {
                jumlahVisitor:$('input#jumlahVisitor').val(),
                tanggalTiket:$('input#tanggal_tiket').val()
            }, function(response){
                console.log(response);
            });
        });
    </script> --}}
</body>

</html>