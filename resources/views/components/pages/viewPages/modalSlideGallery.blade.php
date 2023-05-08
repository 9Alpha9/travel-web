{{-- Modal --}}
<div
    class="pointer-events-auto relative flex w-full h-[100vh] flex-col border-none bg-clip-padding text-current shadow-lg outline-none modal__gallery__item">
    <div class="flex items-center justify-end flex-shrink-0 p-20">
        <button class="box-content flex flex-row pr-32 duration-300 ease-in-out border-none rounded-lg"
            onclick="closeModal('modal')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="relative justify-center modal__banner">
        @include('components.pages.viewPages.slidesDataGallery')
    </div>
</div>
{{-- End Modal --}}