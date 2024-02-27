@extends('default')
@push('style')
@endpush

@section('pageContent')

{{-- Content Wrapper --}}
<div class="px-4 content__wrapper xl:px-0">
    <div class="wrapper__content">
        {{-- <div class="content__header">
            <section>Wisata Jawa Timur</section>
            <section class="header__small">Paling Direkomendasikan</section>
            <div class="explore__more explore__guide">
                <a href="#" class="">Explore Sekarang</a>
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
        </div> --}}

        {{-- Box Reservasi --}}
        {{-- <form action="" autocomplete="off">
            <div class="relative box__reserve">
                <div class="box__name">
                    <h1>Booking Wisata</h1>
                </div>
                <div class="flex flex-col box__reserve__content md:flex-col xl:flex-col whitespace-nowrap">
                    <div class="flex flex-col input__selection__stag whitespace-nowrap">
                        <label class="input__label__name">Kota Tujuan </label>
                        <div class="relative xl:my-3 md:my-3 lg:my-3">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg width="17" height="22" viewBox="0 0 17 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    {{ }}
                                    <path
                                        d="M8.25 0.5C6.06273 0.502481 3.96575 1.37247 2.41911 2.91911C0.872472 4.46575 0.00248131 6.56273 0 8.75C0 15.8094 7.5 21.1437 7.81875 21.3687C7.94649 21.4538 8.09653 21.4992 8.25 21.4992C8.40347 21.4992 8.55351 21.4538 8.68125 21.3687C9 21.1437 16.5 15.8094 16.5 8.75C16.4975 6.56273 15.6275 4.46575 14.0809 2.91911C12.5343 1.37247 10.4373 0.502481 8.25 0.5ZM8.25 5.75C8.84334 5.75 9.42336 5.92595 9.91671 6.25559C10.4101 6.58524 10.7946 7.05377 11.0216 7.60195C11.2487 8.15013 11.3081 8.75333 11.1924 9.33527C11.0766 9.91721 10.7909 10.4518 10.3713 10.8713C9.95176 11.2909 9.41721 11.5766 8.83527 11.6924C8.25333 11.8081 7.65013 11.7487 7.10195 11.5216C6.55377 11.2946 6.08524 10.9101 5.75559 10.4167C5.42595 9.92336 5.25 9.34334 5.25 8.75C5.25 7.95435 5.56607 7.19129 6.12868 6.62868C6.69129 6.06607 7.45435 5.75 8.25 5.75Z"
                                        fill="#0f032e" />
                                </svg>
                            </div>
                            <input type="text" id="city"
                                class="input__label city block pl-10 p-2.5 w-full rounded-md border-none whitespace-nowrap">
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-2 booking__input md:flex-row xl:flex-row">
                        <div class="flex flex-col input__selection__stag whitespace-nowrap">
                            <label class="input__label__name">Tempat Wisata</label>
                            <div class="relative xl:my-3 md:my-3 lg:my-3">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.687 1.92801C20.5914 1.84625 20.4799 1.78901 20.3611 1.76055C20.2422 1.7321 20.1189 1.73317 20.0005 1.76369L13.8216 3.43975L7.63275 0.0766824H7.62265L7.54188 0.0438186H7.52169L7.45102 0.0219093H7.42073L7.35006 0H7.07746L0.615966 1.75274C0.438109 1.79989 0.280296 1.91122 0.168399 2.06846C0.0565013 2.2257 -0.00283972 2.41952 0.00010451 2.61815V18.3928C-0.00107577 18.5264 0.0266231 18.6584 0.0809775 18.7782C0.135332 18.8981 0.214828 19.0025 0.313083 19.0829C0.453972 19.2037 0.628272 19.2693 0.807791 19.2692L0.999617 19.2473L7.17842 17.5712L13.3673 20.9343H13.3774L13.4481 20.9671H13.4582L13.539 21H13.9226L20.3841 19.2473C20.5603 19.2005 20.7168 19.0908 20.8285 18.9358C20.9402 18.7808 21.0006 18.5896 21 18.3928V2.61815C21.0011 2.48458 20.9734 2.35257 20.9191 2.23271C20.8647 2.11286 20.7852 2.0085 20.687 1.92801ZM12.9231 18.7324L8.07697 16.1033V2.27856L12.9231 4.90767V18.7324Z"
                                            fill="#0f032e" />
                                    </svg>
                                </div>
                                <input type="text" id="location"
                                    class="input__label block pl-10 p-2.5 rounded-md border-none">
                            </div>
                        </div>
                        <div class="flex flex-col input__selection__stag whitespace-nowrap">
                            <label class="input__label__name">Tanggal</label>
                            <div class="relative xl:my-3 md:my-3 lg:my-3">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.4167 1.61538H15.0417V0.807692C15.0417 0.593479 14.9583 0.388039 14.8098 0.236568C14.6613 0.0850959 14.46 0 14.25 0C14.04 0 13.8387 0.0850959 13.6902 0.236568C13.5417 0.388039 13.4583 0.593479 13.4583 0.807692V1.61538H5.54167V0.807692C5.54167 0.593479 5.45826 0.388039 5.30979 0.236568C5.16133 0.0850959 4.95996 0 4.75 0C4.54004 0 4.33867 0.0850959 4.19021 0.236568C4.04174 0.388039 3.95833 0.593479 3.95833 0.807692V1.61538H1.58333C1.16341 1.61538 0.76068 1.78558 0.463748 2.08852C0.166815 2.39146 0 2.80234 0 3.23077V19.3846C0 19.813 0.166815 20.2239 0.463748 20.5269C0.76068 20.8298 1.16341 21 1.58333 21H17.4167C17.8366 21 18.2393 20.8298 18.5363 20.5269C18.8332 20.2239 19 19.813 19 19.3846V3.23077C19 2.80234 18.8332 2.39146 18.5363 2.08852C18.2393 1.78558 17.8366 1.61538 17.4167 1.61538ZM7.125 17.3654C6.49495 17.3648 5.89052 17.1108 5.44271 16.6587C5.29466 16.5072 5.21151 16.3021 5.21151 16.0882C5.21151 15.8743 5.29466 15.6692 5.44271 15.5178C5.51552 15.4418 5.60249 15.3814 5.6985 15.3401C5.79452 15.2989 5.89765 15.2777 6.00182 15.2777C6.106 15.2777 6.20913 15.2989 6.30514 15.3401C6.40116 15.3814 6.48813 15.4418 6.56094 15.5178C6.7129 15.666 6.91478 15.7491 7.125 15.75C7.33496 15.75 7.53633 15.6649 7.68479 15.5134C7.83326 15.362 7.91667 15.1565 7.91667 14.9423C7.91667 14.7281 7.83326 14.5227 7.68479 14.3712C7.53633 14.2197 7.33496 14.1346 7.125 14.1346H6.8776L6.83802 14.1144H6.80833L6.75885 14.0942H6.74896L6.68958 14.0538H6.66979L6.63021 14.0236L6.59062 13.9933L6.57083 13.9731L6.54115 13.9428C6.48928 13.8819 6.44598 13.8139 6.4125 13.7409C6.38406 13.6872 6.36403 13.6292 6.35313 13.5692C6.34323 13.5591 6.34323 13.549 6.34323 13.5288C6.34368 13.5234 6.34304 13.5179 6.34134 13.5127C6.33964 13.5075 6.33691 13.5027 6.33333 13.4986V13.3269V13.2563C6.33333 13.2361 6.34323 13.226 6.34323 13.2159V13.1755C6.3511 13.1636 6.35461 13.1493 6.35313 13.1351C6.36302 13.125 6.36302 13.1149 6.36302 13.0947L6.38281 13.0644C6.38281 13.0442 6.38281 13.0341 6.39271 13.024L6.4125 12.9837V12.9534L6.43229 12.913L6.45208 12.8827L6.48177 12.8423L6.50156 12.8221L7.05573 12.1154H5.9375C5.72754 12.1154 5.52617 12.0303 5.37771 11.8788C5.22924 11.7273 5.14583 11.5219 5.14583 11.3077C5.14583 11.0935 5.22924 10.888 5.37771 10.7366C5.52617 10.5851 5.72754 10.5 5.9375 10.5H8.70833C8.8571 10.5009 9.00263 10.5445 9.12823 10.6258C9.25382 10.7072 9.35441 10.823 9.41845 10.96C9.4825 11.097 9.5074 11.2496 9.49032 11.4004C9.47324 11.5512 9.41486 11.694 9.32187 11.8125L8.45104 12.9332C8.87271 13.2232 9.192 13.6437 9.36192 14.1327C9.53184 14.6217 9.54342 15.1535 9.39495 15.6497C9.24648 16.1459 8.94581 16.5805 8.53718 16.8893C8.12856 17.1982 7.63355 17.365 7.125 17.3654ZM13.4583 16.5577C13.4583 16.7719 13.3749 16.9773 13.2265 17.1288C13.078 17.2803 12.8766 17.3654 12.6667 17.3654C12.4567 17.3654 12.2553 17.2803 12.1069 17.1288C11.9584 16.9773 11.875 16.7719 11.875 16.5577V12.9231L11.5583 13.1654C11.3895 13.2913 11.179 13.3449 10.9719 13.3148C10.7649 13.2846 10.5776 13.173 10.45 13.0038C10.324 12.8325 10.2699 12.6171 10.2996 12.405C10.3293 12.1929 10.4404 12.0016 10.6083 11.8731L12.1917 10.6615C12.3093 10.5715 12.4491 10.5167 12.5956 10.5033C12.742 10.4898 12.8892 10.5182 13.0207 10.5853C13.1522 10.6524 13.2628 10.7555 13.3401 10.8831C13.4174 11.0107 13.4583 11.1577 13.4583 11.3077V16.5577ZM17.4167 6.46154H1.58333V3.23077H3.95833V4.03846C3.95833 4.25267 4.04174 4.45811 4.19021 4.60959C4.33867 4.76106 4.54004 4.84615 4.75 4.84615C4.95996 4.84615 5.16133 4.76106 5.30979 4.60959C5.45826 4.45811 5.54167 4.25267 5.54167 4.03846V3.23077H13.4583V4.03846C13.4583 4.25267 13.5417 4.45811 13.6902 4.60959C13.8387 4.76106 14.04 4.84615 14.25 4.84615C14.46 4.84615 14.6613 4.76106 14.8098 4.60959C14.9583 4.45811 15.0417 4.25267 15.0417 4.03846V3.23077H17.4167V6.46154Z"
                                            fill="#0f032e" />
                                    </svg>
                                </div>
                                <input type="text" id="date" name="datefilter" value=""
                                    class="input__label block pl-14 p-2.5 rounded-md border-none">
                            </div>
                        </div>
                        <div class="flex flex-col input__selection__stag whitespace-nowrap">
                            <label class="input__label__name">Tamu / Pengunjung</label>
                            <div class="relative items-center w-full xl:my-6 md:my-6 lg:my-6">
                                <div class="relative guest__heroInner">
                                    <div class="relative flex items-center gap-3 guets__heroItems">
                                        <button id=""
                                            class="p-2 px-6 font-bold text-white rounded-md bg__button__selectGuest">
                                            <span class="btn__addMinus">-</span>
                                        </button>
                                        <div class="absolute px-20 pointer-events-none icon__guest">
                                            <svg class="flex items-center" width="22" height="21" viewBox="0 0 22 21"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.6117 13.4755C11.6177 12.7964 12.3819 11.8061 12.7911 10.6513C13.2002 9.49648 13.2327 8.23847 12.8837 7.06344C12.5346 5.88842 11.8226 4.8588 10.853 4.12698C9.88343 3.39515 8.70776 3 7.5 3C6.29224 3 5.11657 3.39515 4.14698 4.12698C3.17738 4.8588 2.46538 5.88842 2.11634 7.06344C1.7673 8.23847 1.79977 9.49648 2.20894 10.6513C2.61812 11.8061 3.38225 12.7964 4.38826 13.4755C2.6721 14.1169 1.19037 15.277 0.142431 16.7998C0.0605761 16.9128 0.0118549 17.047 0.00190304 17.1869C-0.00804883 17.3268 0.0211752 17.4667 0.0861948 17.5904C0.150446 17.7133 0.246224 17.8163 0.363377 17.8884C0.48053 17.9605 0.614696 17.9991 0.751656 18H14.2483C14.3853 17.9991 14.5195 17.9605 14.6366 17.8884C14.7538 17.8163 14.8496 17.7133 14.9138 17.5904C14.9788 17.4667 15.008 17.3268 14.9981 17.1869C14.9881 17.047 14.9394 16.9128 14.8576 16.7998C13.8096 15.277 12.3279 14.1169 10.6117 13.4755Z"
                                                    fill="#0f032e" />
                                                <path
                                                    d="M21.8742 16.7992C20.8833 15.2775 19.488 14.1176 17.8733 13.4733C18.8222 12.7964 19.5437 11.8063 19.9304 10.6504C20.3171 9.49443 20.3485 8.23435 20.0197 7.05759C19.691 5.88084 19.0198 4.85027 18.1059 4.1192C17.192 3.38813 16.0843 2.99561 14.9476 3.00004C14.4624 3.00282 13.9796 3.07329 13.5112 3.20969C13.4011 3.24543 13.3006 3.30903 13.2178 3.39522C13.135 3.4814 13.0725 3.58768 13.0353 3.70524C12.9998 3.82184 12.9909 3.94598 13.0093 4.0671C13.0277 4.18821 13.0729 4.30274 13.141 4.40092C13.9381 5.55896 14.3959 6.94868 14.4556 8.39081C14.5153 9.83295 14.1741 11.2613 13.4759 12.4918C13.3864 12.6552 13.3558 12.8487 13.3899 13.0351C13.4241 13.2215 13.5206 13.3877 13.661 13.5019C13.9253 13.7243 14.1809 13.953 14.4277 14.1881L14.4717 14.2357C15.4124 15.177 16.1755 16.3065 16.7189 17.5616C16.7747 17.6928 16.8641 17.8039 16.9766 17.8816C17.0891 17.9593 17.2199 18.0004 17.3534 18H21.2926C21.4214 17.9991 21.5475 17.9605 21.6576 17.8884C21.7678 17.8162 21.8579 17.7132 21.9183 17.5902C21.9787 17.4667 22.0065 17.3275 21.9987 17.1881C21.991 17.0486 21.9479 16.9141 21.8742 16.7992Z"
                                                    fill="#0f032e" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col guestInput__items">
                                            <input type="text" id="guest"
                                                class="block  p-2.5 outline-none focus:outline-0 rounded-md border-none text-center w-[17rem] whitespace-nowrap"
                                                value="1 Tamu">
                                        </div>
                                        <button id=""
                                            class="p-2 px-6 font-bold text-white rounded-md bg__button__selectGuest">
                                            <span class="btn__addPlus">+</span>
                                        </button>
                                    </div>
                                    <div class="relative guestInfo__wrapper">
                                        <div class="absolute whitespace-normal guestInfo__items">
                                            <span class="block py-3 text-xs text-google-hover-secondary"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-8 booking__landingPages">
                        <button type="submit"
                            class="p-3 text-sm text-white duration-300 ease-in-out rounded-lg hover:text-white button__bookingLanding"
                            id="">Booking
                            Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </form> --}}
        {{-- Box Reservasi --}}

        {{-- Wisata Viral --}}
        @include('components.landingpages.wisata-viral.wisataviral')
        {{-- End Wisata Viral --}}

        {{-- Wisata Baru Component --}}
        @include('components.landingpages.wisata-baru.wisatabaru')
        {{-- Wisata Baru Component --}}
    </div>
</div>

{{-- End Content Wrapper --}}
@endsection

@push('scripts')

<script>
    $(function () {

        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker : true,
            opens: "right",
            drops: "down",
            autoApply: true,
            locale: {
                cancelLabel: 'Clear',
                daysOfWeek: hariSingkat,
                monthNames: namaBulan,
                firstday: 1
            }
        });

        // $('input[name="datefilter"]').on('apply.daterangepicker', function (ev, picker) {
            // $(this).val(customFormatDate(picker.startDate._d) + ' - ' + customFormatDate(picker.endDate
                // ._d));
            // Jumat, 15 Feb, 2023 (Indonesia Time)
        // });
        $('input[name="datefilter"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(customFormatDate(picker.startDate._d));
        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });

        // $('.btn-filter').on('click', function() {
        //     let filter_url = "{{ route('filterpage') }}";
        //     $('#blankForm').attr('method', 'post');
        //     $('#blankForm').attr('action', filter_url);
        //     let kategori_value = $('#kategori').val();
        //     let kota_value = $('#kota').val();
        //     let kategori = $('<input>').attr('type', 'hidden').attr('name', 'kategori').attr('value', kategori_value);
        //     let kota = $('<input>').attr('type', 'hidden').attr('name', 'kota').attr('value', kota_value);
        //     $('#blankForm').append(kategori);
        //     $('#blankForm').append(kota);
        //     $('#blankForm').submit();
        // });

    });
</script>

<div id="loadingTemplate" style="display:none;">
    {!! $loadingTemplate !!}
</div>

<script>
    $('body').on('click', '.paginationNumber__rows .input-pagination', function() {
        let $this = $(this);
        let input = '<input type="number" class="inputPagination">';
        $this.html(input);
        $this.find('.inputPagination').focus();
    });

    $('body').on('focusout', '.inputPagination', function() {
        let $this = $(this);
        if ($this.val() == '') {
            $this.parent().html('...');
        } else {
            listWisata('filtered', $this.val());
        }
    });

    $('.btn-filter').on('click', function() {
        listWisata();
    });

    $('#formFilter').on('click', function(e) {
        var target = $(e.target);

        if (target.is('input') || target.is('h3')) {
            listWisata();
        }
    });

    $(document).ready(function() {
        listWisata('');
    })

    function listWisata(status = 'filtered', page = 1, limit = 10) {
        let sendData = $('#formFilter').serialize() + '&' + $('#filterWahana').serialize() + '&page=' + page + '&limit=' + limit + '&status=' + status;
        let loading = $('#loadingTemplate').html();

        var xhr;

        $('.filter__wrapper .filter__show').each(function() {
            $(this).html(loading);
        });

        if(xhr && xhr.readyState != 4){
            xhr.abort();
        }

        xhr = $.ajax({
            url: "{{ route('filterpage') }}",
            method: 'post',
            dataType: 'json',
            data: sendData,
        }).done(function (data) {
            $('.filterContent__item').html(data.view);
        });
    }
</script>

<script>
    function controlFromInput(fromSlider, fromInput, toInput, controlSlider) {
        const [from, to] = getParsed(fromInput, toInput);
        fillSlider(fromInput, toInput, '#C6C6C6', '#b0caf8', controlSlider);
        if (from > to) {
            fromSlider.value = to;
            fromInput.value = to;
        } else {
            fromSlider.value = from;
        }
    }

    function controlToInput(toSlider, fromInput, toInput, controlSlider) {
        const [from, to] = getParsed(fromInput, toInput);
        fillSlider(fromInput, toInput, '#C6C6C6', '#b0caf8', controlSlider);
        setToggleAccessible(toInput);
        if (from <= to) {
            toSlider.value = to;
            toInput.value = to;
        } else {
            toInput.value = from;
        }
    }

    function controlFromSlider(fromSlider, toSlider, fromInput) {
      const [from, to] = getParsed(fromSlider, toSlider);
      fillSlider(fromSlider, toSlider, '#C6C6C6', '#b0caf8', toSlider);
      if (from > to) {
        fromSlider.value = to;
        fromInput.value = to;
      } else {
        fromInput.value = from;
      }
    }

    function controlToSlider(fromSlider, toSlider, toInput) {
      const [from, to] = getParsed(fromSlider, toSlider);
      fillSlider(fromSlider, toSlider, '#C6C6C6', '#b0caf8', toSlider);
      setToggleAccessible(toSlider);
      if (from <= to) {
        toSlider.value = to;
        toInput.value = to;
      } else {
        toInput.value = from;
        toSlider.value = from;
      }
    }

    function getParsed(currentFrom, currentTo) {
      const from = parseInt(currentFrom.value, 10);
      const to = parseInt(currentTo.value, 10);
      return [from, to];
    }

    function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
        const rangeDistance = to.max-to.min;
        const fromPosition = from.value - to.min;
        const toPosition = to.value - to.min;
        controlSlider.style.background = `linear-gradient(
          to right,
          ${sliderColor} 0%,
          ${sliderColor} ${(fromPosition)/(rangeDistance)*100}%,
          ${rangeColor} ${((fromPosition)/(rangeDistance))*100}%,
          ${rangeColor} ${(toPosition)/(rangeDistance)*100}%,
          ${sliderColor} ${(toPosition)/(rangeDistance)*100}%,
          ${sliderColor} 100%)`;
    }

    function setToggleAccessible(currentTarget) {
      const toSlider = document.querySelector('#toSlider');
      if (Number(currentTarget.value) <= 0 ) {
        toSlider.style.zIndex = 2;
      } else {
        toSlider.style.zIndex = 0;
      }
    }

    const fromSlider = document.querySelector('#fromSlider');
    const toSlider = document.querySelector('#toSlider');
    const fromInput = document.querySelector('#fromInput');
    const toInput = document.querySelector('#toInput');
    fillSlider(fromSlider, toSlider, '#C6C6C6', '#b0caf8', toSlider);
    setToggleAccessible(toSlider);

    fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
    toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
    fromInput.oninput = () => controlFromInput(fromSlider, fromInput, toInput, toSlider);
    toInput.oninput = () => controlToInput(toSlider, fromInput, toInput, toSlider);

    $('#resetHarga').on('click', function() {
        $('#fromInput').val(0);
        $('#toInput').val(0);
        $('#fromSlider').val(0);
        $('#toSlider').val(1000000);
        fillSlider(fromSlider, toSlider, '#C6C6C6', '#b0caf8', toSlider);
        fillSlider(fromSlider, toSlider, '#C6C6C6', '#b0caf8', fromSlider);
    });
</script>

<script>
    $(function() {

        var span = $('span');

        //span click event
        span.on('click', function() {
            var checkbox = $(this).find('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
            checkboxShow = $(this).find('input[name="wahanaList"]');
            let id = checkboxShow.data('id');
            let name = checkboxShow.data('name');
            if ($(this).hasClass('tipe-wahana')) {
                setWahana(id, name);
            }
        });

        //checkbox click event
        $('input[type="checkbox"]').on('click', function() {
          $(this).prop('checked', !$(this).prop('checked'))
        });

      });
</script>

<script>
    $(function () {
        $('ol li:gt(2)').remove()
      })
</script>


{{-- <script>
    $(function() {

        $('#multi').multiselect({
          includeSelectAllOption: true
        });

        $('#btnget').click(function() {
          alert($('#multi').val());
        });
      });
</script> --}}

<script>
    var checks = document.querySelectorAll(".getInput");
    var max = 2;
        for (var i = 0; i < checks.length; i++)
        checks[i].onclick = selectiveCheck;
    function selectiveCheck (event) {
    var checkedChecks = document.querySelectorAll(".check:checked");
        if (checkedChecks.length >= max + 1)
    return false;
    }
</script>
<script>
    let arrWahana = [];
    $('input[name="wahanaList"]').on('change', function(){
        let id = $(this).data('id');
        let name = $(this).data('name');
        setWahana(id, name);
    });

    function setWahana(id, name){
        if(arrWahana.indexOf(id) != -1){
            removeList(id);
        }
        else {
            arrWahana.push(id);
            let html = '<li class="p-1 px-3 mt-4 cursor-pointer data__itemList">' +
                            '<span class="inline-block dataFilter__item">' + name + '</span>' +
                            '<button type="button" id="hapusWahana_' + id + '" class="butttonGet__itemwahana" onclick="removeList(\'' + id + '\')"><i class="ri-close-line closeBtn__filtersicon"></i></button>' +
                        '</li>';
            $('.listWahana').append(html);
        }
    }

    function removeList(id){
        arrWahana.remove(id);
        $('#hapusWahana_' + id).closest('li').remove();
        $('input[value="' + id + '"]').prop('checked', false);
        $('#tipe_wahana_' + id).prop('checked', false);
    }
</script>
@endpush