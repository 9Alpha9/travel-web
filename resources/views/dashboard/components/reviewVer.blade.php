@extends('dashboard.defaultDashboard')
@push('style')

@endpush

@section('pageContent')
<div class="relative verificationRules__Container">
    <div class="relative pt-12 mt-12 verification__Content">
        <span class="block pt-12 verification__Title">
            <h1>Request Verifikasi</h1>
        </span>
        <div class="pt-8 verification__Items">
            <p class="flex items-center gap-5 p-3 px-8 shadow-lg rounded-xl infoVerif">
                <i class="ri-information-fill"></i>
                <span class="block">Verifikasi dilakukan hanya digunakan untuk menunjukkan bahwa anda adalah pemilik,
                    pengelolah, atau pengurus dari tempat wisata!</span>
            </p>
            <div class="grid grid-flow-col grid-cols-2 gap-8 pt-12 verification__Card">
                <div class="px-6 shadow-2xl rounded-xl verification__Items-card useR">
                    <div class="flex flex-col flex-wrap justify-between useR__type">
                        <span class="z-10 block pt-6 leading-7 text-justify">
                            <p>Ajukan atau request verifikasi untuk dapat melakukan pengelola tempat wisata anda</p>
                        </span>
                        <div class="relative z-10 w-full pt-8 verification__Btnreq">
                            <button type="submit" class="w-full p-3 px-8 req__Cta rounded-xl">Ajukan Sekarang</button>
                        </div>
                    </div>
                </div>
                total wisata yang anda punya
            </div>
        </div>
    </div>
    <div class="py-24 accordionWrapper">
        <div id="accordion-flush" data-accordion="collapse"
            class="p-4 text-white border border-b border-gray-200 rounded-md dark:border-gray-700 dark:text-gray-400 accordionContent"
            data-active-classes="dark:bg-gray-900 active__accordion p-4 ease-in-ou duration-300 mt-3 text-white"
            data-inactive-classes="text-gray-500 dark:text-gray-400 ease-in-out duration-75 delay-300 transition-transform accordion__inActive">
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tr">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tr" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Apa itu request verifikasi?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="accordionContent__items accordionClass__par">
                        <div id="accordion-flush-body-tr" class="hidden" aria-labelledby="accordion-flush-items-tr">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                                <p class="px-5 mb-2 leading-7 text-gray-500 dark:text-gray-400">
                                    <u>Request verifikasi</u> ini digunakan untuk mengubah status anda dari User
                                    menjadi status <b>Pengelola Tempat Wisata</b>. Dengan status ini, anda dapat
                                    menambahkan
                                    Tempat
                                    wisata yang anda kelola yang masih belum ada pada website.
                                </p>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tc">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tc" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Apa keuntungan setelah berhasil terverifikasi?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="accordion-flush-body-tc" class="hidden" aria-labelledby="accordion-flush-items-tc">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                            <p class="px-5 mb-2 leading-7 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Magnam esse aspernatur nam, facere quaerat culpa saepe,
                                vero
                                assumenda repellat enim eius possimus minima repudiandae laudantium at tempore velit
                                quasi,
                                totam soluta maxime. Magnam maiores veniam, laboriosam ab eius laudantium dicta iure
                                nulla
                                nihil
                                non laborum exercitationem dolores ducimus reiciendis saepe, inventore sunt. Temporibus
                                et
                                libero magnam repudiandae atque ut vitae incidunt quas suscipit quos. Cupiditate
                                molestias
                                velit
                                fugiat itaque omnis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tb">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tb" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Apa yang diperlukan untuk melakukan request
                                verifikasi?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="accordion-flush-body-tb" class="hidden" aria-labelledby="accordion-flush-items-tb">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="px-5 mb-2 leading-7 text-gray-500 dark:text-gray-400">Lorem ipsum
                                dolor sit amet
                                consectetur adipisicing elit. Porro ipsum maxime explicabo officia, magnam aperiam id ex
                                repudiandae. Sed earum nemo quibusdam necessitatibus perspiciatis vel nobis a
                                reprehenderit,
                                libero aperiam consequatur repellat sit hic autem deleniti minus porro dolorem maiores!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion__itemsWrapper">
                <div class="accordionList__items">
                    <div class="accordionItems" id="accordion-flush-items-tn">
                        <div class="flex items-center justify-between w-full p-5 py-5 font-medium text-left text-gray-500 border-b border-gray-200 cursor-pointer"
                            data-accordion-target="#accordion-flush-body-tn" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span class="block accordionTitle">Berapa lama proses verifikasi dilakukan?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="accordion-flush-body-tn" class="hidden" aria-labelledby="accordion-flush-items-tn">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                            <p class="px-5 mb-2 leading-7 text-gray-500 dark:text-gray-400">Lorem ipsum
                                dolor sit amet
                                consectetur adipisicing elit. Porro ipsum maxime explicabo officia, magnam aperiam id ex
                                repudiandae. Sed earum nemo quibusdam necessitatibus perspiciatis vel nobis a
                                reprehenderit,
                                libero aperiam consequatur repellat sit hic autem deleniti minus porro dolorem maiores!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')

@endpush