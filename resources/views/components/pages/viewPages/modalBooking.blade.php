{{-- Button trigger modal --}}
<button type="button" class=" text-white p-3 px-10 rounded-md btn__cta__booking" data-te-toggle="modal"
    data-te-target="#bookingWrap" data-te-ripple-color="light">
    <span class="">Pilih Tanggal</span>
</button>
{{-- Modal Content --}}
<div data-te-modal-init
    class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="bookingWrap" data-te-backdrop="static" data-te-keyboard="false" tabindex="-1" aria-labelledby="bookingWrap"
    aria-hidden="true">
    <div data-te-modal-dialog-ref
        class="pointer-events-none relative w-auto translate-x-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-20 min-[576px]:max-w-[1200px]">
        <div
            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white">
            <div
                class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                <h5 class="text-md font-bold">
                    Tanggal Kunjungan
                </h5>
                <button type="button"
                    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div data-te-modal-body-ref class="relative p-4 booking__content">
                Booking Content
            </div>
        </div>
    </div>
</div>
</div>
</div>