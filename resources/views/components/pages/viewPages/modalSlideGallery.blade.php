{{-- Modal --}}
<div
    class="pointer-events-auto relative flex w-full h-[100vh] flex-col border-none bg-clip-padding text-current shadow-lg outline-none modal__gallery__item">
    <div class="flex flex-shrink-0 items-center  p-20 justify-end">
        <button type="button" class="box-content border-none  flex flex-row px-6  rounded-lg  ease-in-out duration-300"
            data-te-modal-dismiss aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <div class="relative modal__banner justify-center">
        @include('components.pages.viewPages.slidesDataGallery')
    </div>
</div>
{{-- End Modal --}}