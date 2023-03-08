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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <title>view wisata</title>
</head>

<body>
    @include('navigation-bar.navbar')
    <div class="view__component__header  m-auto relative">
        {{-- Breadcrumb --}}
        <div class="breadcrumb breadcrum__item pt-32 py-6">
            <ul class="flex flex-row gap-2">
                <li class="font-semibold text-primary-birent ">
                    <a href="{{ route('landingpage') }}">Home</a>
                </li>
                <li>/</li>
                <li class="text-primary-birent font-semibold">
                    <a href="#!" class="hover:underline">Wisata Viral</a>
                </li>
                <li>/</li>
                <li class="text-gray-primary font-semibold">
                    <a href="#!" class="hover:underline">Wisata De Laponte</a>
                </li>
            </ul>
        </div>
        {{-- End Breadcrumb --}}
        <div class="view__content flex flex-row relative gap-1">
            {{-- Gallery View Item --}}
            <div class="flex-grow view__item overflow-hidden flex-shrink rounded-lg">
                {{-- Button trigger modal --}}
                <button type="button" class="inline-block" data-te-toggle="modal" data-te-target="#viewGallery">
                    <figure class="view__gallery__banner relative">
                        <img src="https://ulasku.com/wp-content/uploads/2022/01/kebun-bunga-santerra-de-laponte-746x560.jpg"
                            alt="">
                    </figure>
                </button>
                {{-- Modal --}}
                <div data-te-modal-init
                    class="fixed bottom-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="viewGallery" tabindex="-1" aria-labelledby="ModalCenterTitle" aria-modal="true" role="dialog">
                    <div data-te-modal-dialog-ref class="pointer-events-none relative flex">
                        <div
                            class="pointer-events-auto relative flex w-full h-[100vh] flex-col border-none bg-clip-padding text-current shadow-lg outline-none modal__gallery__item">
                            <div class="flex flex-shrink-0 items-center justify-between p-4">
                                <h5 class="text-md font-medium leading-normal " id="ModalScrollableLabel">
                                    Wisata De Laponte
                                </h5>
                                <button type="button"
                                    class="box-content border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none flex flex-row px-6 py-2 rounded-lg modal__btn__close ease-in-out duration-300"
                                    data-te-modal-dismiss aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    Keluar
                                </button>
                            </div>
                            <div class="relative p-4 modal__banner justify-center m-auto">
                                <figure class="view__modal__gallery__banner relative">
                                    <img src="https://ulasku.com/wp-content/uploads/2022/01/kebun-bunga-santerra-de-laponte-746x560.jpg"
                                        alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="start__side__gal hidden xl:block">
                <div class="view__side__gallery flex flex-col gap-1 relative">
                    <div class="inside__view__gallery flex flex-row gap-1 overflow-hidden rounded-lg">
                        <div class="gallery__view max-w-sm bg-gray-primary rounded-lg overflow-hidden">
                            {{-- Button trigger modal --}}
                            <button type="button" class="inline-block overflow-hidden rounded-lg" data-te-toggle="modal"
                                data-te-target="#viewGalleryStagOne">
                                <figure class="side__gallery__stag">
                                    <img src="https://asset.kompas.com/crops/_E_jZ5BACnxCQ_2WVh_S5fkwZeA=/0x0:1000x667/750x500/data/photo/2020/01/22/5e281e5a7f0aa.jpg"
                                        alt="">
                                </figure>
                            </button>
                            {{-- Modal --}}
                            <div data-te-modal-init
                                class="fixed bottom-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                id="viewGalleryStagOne" tabindex="-1" aria-labelledby="ModalCenterTitle"
                                aria-modal="true" role="dialog">
                                <div data-te-modal-dialog-ref class="pointer-events-none relative flex">
                                    <div
                                        class="pointer-events-auto relative flex w-full h-[100vh] flex-col border-none bg-clip-padding text-current shadow-lg outline-none modal__gallery__item">
                                        <div class="flex flex-shrink-0 items-center justify-between p-4">
                                            <h5 class="text-md font-medium leading-normal " id="ModalScrollableLabel">
                                                Wisata De Laponte
                                            </h5>
                                            <button type="button"
                                                class="box-content border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none flex flex-row px-6 py-2 rounded-lg modal__btn__close ease-in-out duration-300"
                                                data-te-modal-dismiss aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                                Keluar
                                            </button>
                                        </div>
                                        <div class="relative p-4 modal__banner justify-center m-auto">
                                            <figure class="view__modal__gallery__banner relative">
                                                <img src="https://asset.kompas.com/crops/_E_jZ5BACnxCQ_2WVh_S5fkwZeA=/0x0:1000x667/750x500/data/photo/2020/01/22/5e281e5a7f0aa.jpg"
                                                    alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery__view max-w-sm bg-gray-primary rounded-lg overflow-hidden">
                            {{-- Button trigger modal --}}
                            <button type="button" class="inline-block overflow-hidden rounded-lg" data-te-toggle="modal"
                                data-te-target="#viewGalleryStageTwo">
                                <figure class="side__gallery__stag">
                                    <img src="https://lh4.googleusercontent.com/I-MNbc-7907-yTRBcWV2RnjZ_VuYjaDiDoyvASFtv6xkc08Y4gjBiecGJKYtj4RyXiCquHsRo6ryetXeS8GV7TEh-gYlSptlmxWSnheUVvSYH5ZXqg_-066CjOWKyZbXY8T2MO2i"
                                        alt="">
                                </figure>
                            </button>
                            {{-- Modal --}}
                            <div data-te-modal-init
                                class="fixed bottom-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                id="viewGalleryStageTwo" tabindex="-1" aria-labelledby="ModalCenterTitle"
                                aria-modal="true" role="dialog">
                                <div data-te-modal-dialog-ref class="pointer-events-none relative flex">
                                    <div
                                        class="pointer-events-auto relative flex w-full h-[100vh] flex-col border-none bg-clip-padding text-current shadow-lg outline-none modal__gallery__item">
                                        <div class="flex flex-shrink-0 items-center justify-between p-4">
                                            <h5 class="text-md font-medium leading-normal " id="ModalScrollableLabel">
                                                Wisata De Laponte
                                            </h5>
                                            <button type="button"
                                                class="box-content border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none flex flex-row px-6 py-2 rounded-lg modal__btn__close ease-in-out duration-300"
                                                data-te-modal-dismiss aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                                Keluar
                                            </button>
                                        </div>
                                        <div class="relative p-4 modal__banner justify-center m-auto">
                                            <figure class="view__modal__gallery__banner relative">
                                                <img src="https://lh4.googleusercontent.com/I-MNbc-7907-yTRBcWV2RnjZ_VuYjaDiDoyvASFtv6xkc08Y4gjBiecGJKYtj4RyXiCquHsRo6ryetXeS8GV7TEh-gYlSptlmxWSnheUVvSYH5ZXqg_-066CjOWKyZbXY8T2MO2i"
                                                    alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Side Two --}}
                    <div class="inside__view__gallery flex flex-row  gap-1 overflow-hidden">
                        <div class="gallery__view max-w-sm bg-gray-primary rounded-lg overflow-hidden">
                            {{-- Button trigger modal --}}
                            <button type="button" class="inline-block overflow-hidden rounded-lg" data-te-toggle="modal"
                                data-te-target="#viewGalleryStageThree">
                                <figure class="side__gallery__stag">
                                    <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/04/24/3865808036.jpg"
                                        alt="">
                                </figure>
                            </button>
                            {{-- Modal --}}
                            <div data-te-modal-init
                                class="fixed bottom-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                id="viewGalleryStageThree" tabindex="-1" aria-labelledby="ModalCenterTitle"
                                aria-modal="true" role="dialog">
                                <div data-te-modal-dialog-ref class="pointer-events-none relative flex">
                                    <div
                                        class="pointer-events-auto relative flex w-full h-[100vh] flex-col border-none bg-clip-padding text-current shadow-lg outline-none modal__gallery__item">
                                        <div class="flex flex-shrink-0 items-center justify-between p-4">
                                            <h5 class="text-md font-medium leading-normal " id="ModalScrollableLabel">
                                                Wisata De Laponte
                                            </h5>
                                            <button type="button"
                                                class="box-content border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none flex flex-row px-6 py-2 rounded-lg modal__btn__close ease-in-out duration-300"
                                                data-te-modal-dismiss aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                                Keluar
                                            </button>
                                        </div>
                                        <div class="relative p-4 modal__banner justify-center m-auto">
                                            <figure class="view__modal__gallery__banner relative">
                                                <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/04/24/3865808036.jpg"
                                                    alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery__view max-w-sm h-full bg-gray-primary rounded-lg overflow-hidden">
                            {{-- Button trigger modal --}}
                            <button type="button" class="inline-block overflow-hidden rounded-lg" data-te-toggle="modal"
                                data-te-target="#viewGalleryStageFour">
                                <figure class="side__gallery__stag">
                                    <img src="https://public.urbanasia.com/images/post/2020/uploads/3db26cb129de4c77bc65a2bd273997c9.jpeg"
                                        alt="">
                                </figure>
                            </button>
                            {{-- Modal --}}
                            <div data-te-modal-init
                                class="fixed bottom-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                id="viewGalleryStageFour" tabindex="-1" aria-labelledby="ModalCenterTitle"
                                aria-modal="true" role="dialog">
                                <div data-te-modal-dialog-ref class="pointer-events-none relative flex">
                                    <div
                                        class="pointer-events-auto relative flex w-full h-[100vh] flex-col border-none bg-clip-padding text-current shadow-lg outline-none modal__gallery__item">
                                        <div class="flex flex-shrink-0 items-center justify-between p-4">
                                            <h5 class="text-md font-medium leading-normal " id="ModalScrollableLabel">
                                                Wisata De Laponte
                                            </h5>
                                            <button type="button"
                                                class="box-content border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none flex flex-row px-6 py-2 rounded-lg modal__btn__close ease-in-out duration-300"
                                                data-te-modal-dismiss aria-label="Close">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                                Keluar
                                            </button>
                                        </div>
                                        <div class="relative p-4 modal__banner justify-center m-auto">
                                            <figure class="view__modal__gallery__banner relative">
                                                <img src="https://public.urbanasia.com/images/post/2020/uploads/3db26cb129de4c77bc65a2bd273997c9.jpeg"
                                                    alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Gallery View Item --}}
        </div>
        {{-- View Pages Item Component --}}
        @include('components.pages.viewPagesItems')
        {{-- End View Pages Item Component --}}
    </div>

    @include('components.footer.footer')
</body>

</html>