{{-- Wisata Viral --}}
<div class="wisata__viral wisata__landing__wrapper mt-16 ">
    <div class="wisata__heading">
        <span class="title__wisata__viral">
            <h1 class="mb-4">Wisata Viral</h1>
        </span>
        <div class="wisata__content mt-10 mb-10 grid grid-cols-2 md:grid-cols-4 xl:grid-cols-4 gap-4">
            {{-- Content --}}
            <div class="flex flex-row wisata__card">
                <div class="block max-w-md dark:bg-neutral-700 wisata__viral__card__item">
                    <a href="{{ route('viewpages') }}">
                        <figure class="wisata__banner">
                            <img src="https://ulasku.com/wp-content/uploads/2022/01/kebun-bunga-santerra-de-laponte-746x560.jpg"
                                class="max-h-60 md:max-h-60 xl:max-h-96" alt="" />
                        </figure>
                    </a>
                    {{-- Card Wisata Information --}}
                    <div class="my-8 card__title__info ">
                        <div class="wisata__info__header flex flex-row justify-between gap-2">
                            <div class="wisata__info__title">
                                {{-- Wisata Name --}}
                                <a href="#!">
                                    <h5>Wisata Viral</h5>
                                </a>
                            </div>
                            {{-- Rating --}}
                            <div class="wisata__stars float-left flex items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 33 33" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.3883 12.2397C30.2632 11.8459 30.0219 11.4992 29.6963 11.2449C29.3706 10.9906 28.9757 10.8406 28.5633 10.8147L21.1383 10.3022L18.3883 3.3647C18.2382 2.9827 17.9768 2.65458 17.638 2.4228C17.2993 2.19103 16.8988 2.06628 16.4883 2.0647C16.0779 2.06628 15.6774 2.19103 15.3386 2.4228C14.9999 2.65458 14.7385 2.9827 14.5883 3.3647L11.7883 10.3397L4.41333 10.8147C4.00146 10.8423 3.60735 10.9929 3.28199 11.2469C2.95663 11.501 2.71499 11.8468 2.58833 12.2397C2.45825 12.6386 2.45065 13.0673 2.56651 13.4706C2.68236 13.8738 2.91636 14.2332 3.23833 14.5022L8.91333 19.3022L7.22583 25.9397C7.10907 26.3887 7.13008 26.8625 7.28613 27.2994C7.44217 27.7363 7.72604 28.1162 8.10083 28.3897C8.46462 28.6508 8.89804 28.7974 9.34563 28.8108C9.79321 28.8241 10.2346 28.7036 10.6133 28.4647L16.4758 24.7522H16.5008L22.8133 28.7397C23.1371 28.9501 23.5147 29.0629 23.9008 29.0647C24.2161 29.0622 24.5267 28.9875 24.8086 28.8462C25.0905 28.705 25.3363 28.5009 25.527 28.2498C25.7177 27.9988 25.8484 27.7073 25.9088 27.3978C25.9693 27.0883 25.958 26.7691 25.8758 26.4647L24.0883 19.2022L29.7383 14.5022C30.0603 14.2332 30.2943 13.8738 30.4101 13.4706C30.526 13.0673 30.5184 12.6386 30.3883 12.2397Z"
                                        fill="#3237d2" />
                                </svg>
                                {{-- Ratting Indicator --}}
                                <span class="rattings__numb font-light text-sm inline-block">
                                    4,7
                                </span>
                            </div>
                            {{-- End Rating --}}
                        </div>
                        <div class="card__location__graph flex flex-row gap-3 items-center m-auto py-3">
                            <svg width="20" height="20" viewBox="0 0 10 13" fill="none" class="block align-middle"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.72531 0.840637C3.49946 0.842028 2.32423 1.32961 1.45743 2.19641C0.590624 3.06321 0.103045 4.23845 0.101654 5.46429C0.101654 9.42066 4.30497 12.4103 4.48361 12.5364C4.55521 12.584 4.6393 12.6095 4.72531 12.6095C4.81132 12.6095 4.8954 12.584 4.967 12.5364C5.14564 12.4103 9.34896 9.42066 9.34896 5.46429C9.34757 4.23845 8.85999 3.06321 7.99319 2.19641C7.12638 1.32961 5.95115 0.842028 4.72531 0.840637ZM4.72531 3.78296C5.05784 3.78296 5.38291 3.88157 5.6594 4.06632C5.93589 4.25106 6.15139 4.51365 6.27865 4.82087C6.40591 5.12809 6.4392 5.46615 6.37433 5.7923C6.30945 6.11844 6.14932 6.41803 5.91418 6.65317C5.67905 6.88831 5.37946 7.04844 5.05332 7.11331C4.72717 7.17818 4.38911 7.14489 4.08189 7.01763C3.77467 6.89038 3.51208 6.67488 3.32733 6.39838C3.14259 6.12189 3.04398 5.79682 3.04398 5.46429C3.04398 5.01837 3.22112 4.59072 3.53643 4.27541C3.85174 3.9601 4.27939 3.78296 4.72531 3.78296Z"
                                    fill="#3237d2" />
                            </svg>
                            {{-- Wisata Location Information --}}
                            <p class="text-neutral-600 dark:text-neutral-200 text-xs text__location">
                                Kecamatan Gadung Asri Joyobonto, Surabaya.
                            </p>
                            {{-- End Wisata Location Information --}}
                        </div>
                    </div>
                    {{-- End Card Wisata Information --}}
                </div>
            </div>
            {{-- End Content --}}

            {{-- Content --}}
            <div class="flex flex-row wisata__card">
                <div class="block max-w-md dark:bg-neutral-700 wisata__viral__card__item">
                    <a href="#!">
                        <figure class="wisata__banner">
                            <img src="https://images.unsplash.com/photo-1568516475772-498b4379829c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                class="max-h-60 md:max-h-60 xl:max-h-96" alt="" />
                        </figure>
                    </a>
                    {{-- Card Wisata Information --}}
                    <div class="my-8 card__title__info ">
                        <div class="wisata__info__header flex flex-row justify-between gap-2">
                            <div class="wisata__info__title">
                                {{-- Wisata Name --}}
                                <a href="#!">
                                    <h5>Wisata Viral</h5>
                                </a>
                            </div>
                            {{-- Rating --}}
                            <div class="wisata__stars float-left flex items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 33 33" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.3883 12.2397C30.2632 11.8459 30.0219 11.4992 29.6963 11.2449C29.3706 10.9906 28.9757 10.8406 28.5633 10.8147L21.1383 10.3022L18.3883 3.3647C18.2382 2.9827 17.9768 2.65458 17.638 2.4228C17.2993 2.19103 16.8988 2.06628 16.4883 2.0647C16.0779 2.06628 15.6774 2.19103 15.3386 2.4228C14.9999 2.65458 14.7385 2.9827 14.5883 3.3647L11.7883 10.3397L4.41333 10.8147C4.00146 10.8423 3.60735 10.9929 3.28199 11.2469C2.95663 11.501 2.71499 11.8468 2.58833 12.2397C2.45825 12.6386 2.45065 13.0673 2.56651 13.4706C2.68236 13.8738 2.91636 14.2332 3.23833 14.5022L8.91333 19.3022L7.22583 25.9397C7.10907 26.3887 7.13008 26.8625 7.28613 27.2994C7.44217 27.7363 7.72604 28.1162 8.10083 28.3897C8.46462 28.6508 8.89804 28.7974 9.34563 28.8108C9.79321 28.8241 10.2346 28.7036 10.6133 28.4647L16.4758 24.7522H16.5008L22.8133 28.7397C23.1371 28.9501 23.5147 29.0629 23.9008 29.0647C24.2161 29.0622 24.5267 28.9875 24.8086 28.8462C25.0905 28.705 25.3363 28.5009 25.527 28.2498C25.7177 27.9988 25.8484 27.7073 25.9088 27.3978C25.9693 27.0883 25.958 26.7691 25.8758 26.4647L24.0883 19.2022L29.7383 14.5022C30.0603 14.2332 30.2943 13.8738 30.4101 13.4706C30.526 13.0673 30.5184 12.6386 30.3883 12.2397Z"
                                        fill="#3237d2" />
                                </svg>
                                {{-- Ratting Indicator --}}
                                <span class="rattings__numb font-light text-sm inline-block">
                                    4,7
                                </span>
                            </div>
                            {{-- End Rating --}}
                        </div>
                        <div class="card__location__graph flex flex-row gap-3 items-center m-auto py-3">
                            <svg width="20" height="20" viewBox="0 0 10 13" fill="none" class="block align-middle"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.72531 0.840637C3.49946 0.842028 2.32423 1.32961 1.45743 2.19641C0.590624 3.06321 0.103045 4.23845 0.101654 5.46429C0.101654 9.42066 4.30497 12.4103 4.48361 12.5364C4.55521 12.584 4.6393 12.6095 4.72531 12.6095C4.81132 12.6095 4.8954 12.584 4.967 12.5364C5.14564 12.4103 9.34896 9.42066 9.34896 5.46429C9.34757 4.23845 8.85999 3.06321 7.99319 2.19641C7.12638 1.32961 5.95115 0.842028 4.72531 0.840637ZM4.72531 3.78296C5.05784 3.78296 5.38291 3.88157 5.6594 4.06632C5.93589 4.25106 6.15139 4.51365 6.27865 4.82087C6.40591 5.12809 6.4392 5.46615 6.37433 5.7923C6.30945 6.11844 6.14932 6.41803 5.91418 6.65317C5.67905 6.88831 5.37946 7.04844 5.05332 7.11331C4.72717 7.17818 4.38911 7.14489 4.08189 7.01763C3.77467 6.89038 3.51208 6.67488 3.32733 6.39838C3.14259 6.12189 3.04398 5.79682 3.04398 5.46429C3.04398 5.01837 3.22112 4.59072 3.53643 4.27541C3.85174 3.9601 4.27939 3.78296 4.72531 3.78296Z"
                                    fill="#3237d2" />
                            </svg>
                            {{-- Wisata Location Information --}}
                            <p class="text-neutral-600 dark:text-neutral-200 text-xs text__location">
                                Kecamatan Gadung Asri Joyobonto, Surabaya.
                            </p>
                            {{-- End Wisata Location Information --}}
                        </div>
                    </div>
                    {{-- End Card Wisata Information --}}
                </div>
            </div>
            {{-- End Content --}}

            {{-- Content --}}
            <div class="flex flex-row wisata__card">
                <div class="block max-w-md dark:bg-neutral-700 wisata__viral__card__item">
                    <a href="#!">
                        <figure class="wisata__banner">
                            <img src="https://images.unsplash.com/photo-1568516474323-526b0d5d5331?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                class="max-h-60 md:max-h-60 xl:max-h-96" alt="" />
                        </figure>
                    </a>
                    {{-- Card Wisata Information --}}
                    <div class="my-8 card__title__info ">
                        <div class="wisata__info__header flex flex-row justify-between gap-2">
                            <div class="wisata__info__title">
                                {{-- Wisata Name --}}
                                <a href="#!">
                                    <h5>Wisata Viral</h5>
                                </a>
                            </div>
                            {{-- Rating --}}
                            <div class="wisata__stars float-left flex items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 33 33" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.3883 12.2397C30.2632 11.8459 30.0219 11.4992 29.6963 11.2449C29.3706 10.9906 28.9757 10.8406 28.5633 10.8147L21.1383 10.3022L18.3883 3.3647C18.2382 2.9827 17.9768 2.65458 17.638 2.4228C17.2993 2.19103 16.8988 2.06628 16.4883 2.0647C16.0779 2.06628 15.6774 2.19103 15.3386 2.4228C14.9999 2.65458 14.7385 2.9827 14.5883 3.3647L11.7883 10.3397L4.41333 10.8147C4.00146 10.8423 3.60735 10.9929 3.28199 11.2469C2.95663 11.501 2.71499 11.8468 2.58833 12.2397C2.45825 12.6386 2.45065 13.0673 2.56651 13.4706C2.68236 13.8738 2.91636 14.2332 3.23833 14.5022L8.91333 19.3022L7.22583 25.9397C7.10907 26.3887 7.13008 26.8625 7.28613 27.2994C7.44217 27.7363 7.72604 28.1162 8.10083 28.3897C8.46462 28.6508 8.89804 28.7974 9.34563 28.8108C9.79321 28.8241 10.2346 28.7036 10.6133 28.4647L16.4758 24.7522H16.5008L22.8133 28.7397C23.1371 28.9501 23.5147 29.0629 23.9008 29.0647C24.2161 29.0622 24.5267 28.9875 24.8086 28.8462C25.0905 28.705 25.3363 28.5009 25.527 28.2498C25.7177 27.9988 25.8484 27.7073 25.9088 27.3978C25.9693 27.0883 25.958 26.7691 25.8758 26.4647L24.0883 19.2022L29.7383 14.5022C30.0603 14.2332 30.2943 13.8738 30.4101 13.4706C30.526 13.0673 30.5184 12.6386 30.3883 12.2397Z"
                                        fill="#3237d2" />
                                </svg>
                                {{-- Ratting Indicator --}}
                                <span class="rattings__numb font-light text-sm inline-block">
                                    4,7
                                </span>
                            </div>
                            {{-- End Rating --}}
                        </div>
                        <div class="card__location__graph flex flex-row gap-3 items-center m-auto py-3">
                            <svg width="20" height="20" viewBox="0 0 10 13" fill="none" class="block align-middle"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.72531 0.840637C3.49946 0.842028 2.32423 1.32961 1.45743 2.19641C0.590624 3.06321 0.103045 4.23845 0.101654 5.46429C0.101654 9.42066 4.30497 12.4103 4.48361 12.5364C4.55521 12.584 4.6393 12.6095 4.72531 12.6095C4.81132 12.6095 4.8954 12.584 4.967 12.5364C5.14564 12.4103 9.34896 9.42066 9.34896 5.46429C9.34757 4.23845 8.85999 3.06321 7.99319 2.19641C7.12638 1.32961 5.95115 0.842028 4.72531 0.840637ZM4.72531 3.78296C5.05784 3.78296 5.38291 3.88157 5.6594 4.06632C5.93589 4.25106 6.15139 4.51365 6.27865 4.82087C6.40591 5.12809 6.4392 5.46615 6.37433 5.7923C6.30945 6.11844 6.14932 6.41803 5.91418 6.65317C5.67905 6.88831 5.37946 7.04844 5.05332 7.11331C4.72717 7.17818 4.38911 7.14489 4.08189 7.01763C3.77467 6.89038 3.51208 6.67488 3.32733 6.39838C3.14259 6.12189 3.04398 5.79682 3.04398 5.46429C3.04398 5.01837 3.22112 4.59072 3.53643 4.27541C3.85174 3.9601 4.27939 3.78296 4.72531 3.78296Z"
                                    fill="#3237d2" />
                            </svg>
                            {{-- Wisata Location Information --}}
                            <p class="text-neutral-600 dark:text-neutral-200 text-xs text__location">
                                Kecamatan Gadung Asri Joyobonto, Surabaya.
                            </p>
                            {{-- End Wisata Location Information --}}
                        </div>
                    </div>
                    {{-- End Card Wisata Information --}}
                </div>
            </div>
            {{-- End Content --}}

            {{-- Content --}}
            <div class="flex flex-row wisata__card">
                <div class="block max-w-md dark:bg-neutral-700 wisata__viral__card__item">
                    <a href="#!">
                        <figure class="wisata__banner">
                            <img src="https://images.unsplash.com/photo-1559628233-2b946e0f0e4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80"
                                class="max-h-60 md:max-h-60 xl:max-h-96" alt="" />
                        </figure>
                    </a>
                    {{-- Card Wisata Information --}}
                    <div class="my-8 card__title__info ">
                        <div class="wisata__info__header flex flex-row justify-between gap-2">
                            <div class="wisata__info__title">
                                {{-- Wisata Name --}}
                                <a href="#!">
                                    <h5>Wisata Viral</h5>
                                </a>
                            </div>
                            {{-- Rating --}}
                            <div class="wisata__stars float-left flex items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 33 33" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.3883 12.2397C30.2632 11.8459 30.0219 11.4992 29.6963 11.2449C29.3706 10.9906 28.9757 10.8406 28.5633 10.8147L21.1383 10.3022L18.3883 3.3647C18.2382 2.9827 17.9768 2.65458 17.638 2.4228C17.2993 2.19103 16.8988 2.06628 16.4883 2.0647C16.0779 2.06628 15.6774 2.19103 15.3386 2.4228C14.9999 2.65458 14.7385 2.9827 14.5883 3.3647L11.7883 10.3397L4.41333 10.8147C4.00146 10.8423 3.60735 10.9929 3.28199 11.2469C2.95663 11.501 2.71499 11.8468 2.58833 12.2397C2.45825 12.6386 2.45065 13.0673 2.56651 13.4706C2.68236 13.8738 2.91636 14.2332 3.23833 14.5022L8.91333 19.3022L7.22583 25.9397C7.10907 26.3887 7.13008 26.8625 7.28613 27.2994C7.44217 27.7363 7.72604 28.1162 8.10083 28.3897C8.46462 28.6508 8.89804 28.7974 9.34563 28.8108C9.79321 28.8241 10.2346 28.7036 10.6133 28.4647L16.4758 24.7522H16.5008L22.8133 28.7397C23.1371 28.9501 23.5147 29.0629 23.9008 29.0647C24.2161 29.0622 24.5267 28.9875 24.8086 28.8462C25.0905 28.705 25.3363 28.5009 25.527 28.2498C25.7177 27.9988 25.8484 27.7073 25.9088 27.3978C25.9693 27.0883 25.958 26.7691 25.8758 26.4647L24.0883 19.2022L29.7383 14.5022C30.0603 14.2332 30.2943 13.8738 30.4101 13.4706C30.526 13.0673 30.5184 12.6386 30.3883 12.2397Z"
                                        fill="#3237d2" />
                                </svg>
                                {{-- Ratting Indicator --}}
                                <span class="rattings__numb font-light text-sm inline-block">
                                    4,7
                                </span>
                            </div>
                            {{-- End Rating --}}
                        </div>
                        <div class="card__location__graph flex flex-row gap-3 items-center m-auto py-3">
                            <svg width="20" height="20" viewBox="0 0 10 13" fill="none" class="block align-middle"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.72531 0.840637C3.49946 0.842028 2.32423 1.32961 1.45743 2.19641C0.590624 3.06321 0.103045 4.23845 0.101654 5.46429C0.101654 9.42066 4.30497 12.4103 4.48361 12.5364C4.55521 12.584 4.6393 12.6095 4.72531 12.6095C4.81132 12.6095 4.8954 12.584 4.967 12.5364C5.14564 12.4103 9.34896 9.42066 9.34896 5.46429C9.34757 4.23845 8.85999 3.06321 7.99319 2.19641C7.12638 1.32961 5.95115 0.842028 4.72531 0.840637ZM4.72531 3.78296C5.05784 3.78296 5.38291 3.88157 5.6594 4.06632C5.93589 4.25106 6.15139 4.51365 6.27865 4.82087C6.40591 5.12809 6.4392 5.46615 6.37433 5.7923C6.30945 6.11844 6.14932 6.41803 5.91418 6.65317C5.67905 6.88831 5.37946 7.04844 5.05332 7.11331C4.72717 7.17818 4.38911 7.14489 4.08189 7.01763C3.77467 6.89038 3.51208 6.67488 3.32733 6.39838C3.14259 6.12189 3.04398 5.79682 3.04398 5.46429C3.04398 5.01837 3.22112 4.59072 3.53643 4.27541C3.85174 3.9601 4.27939 3.78296 4.72531 3.78296Z"
                                    fill="#3237d2" />
                            </svg>
                            {{-- Wisata Location Information --}}
                            <p class="text-neutral-600 dark:text-neutral-200 text-xs text__location">
                                Kecamatan Gadung Asri Joyobonto, Surabaya.
                            </p>
                            {{-- End Wisata Location Information --}}
                        </div>
                    </div>
                    {{-- End Card Wisata Information --}}
                </div>
            </div>
            {{-- End Content --}}
        </div>
    </div>
</div>
{{-- End Wisata Viral --}}