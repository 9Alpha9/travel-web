{{-- Button trigger modal --}}
<button class="p-3 px-10 rounded-md text-gray-birent btn__cta__booking" onclick="openmodaldate('dateModal')">
    <span class="">Pilih Tanggal</span>
</button>
{{-- Modal Content --}}
<div class="fixed top-0 left-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="dateModal" tabindex="-1" aria-hidden="true">
    <div
        class="pointer-events-none relative w-auto translate-x-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-20 min-[576px]:max-w-[1200px]">
        <div
            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white">
            <div
                class="flex items-center justify-between flex-shrink-0 p-4 border-b-2 border-opacity-100 rounded-t-md border-neutral-100 dark:border-opacity-50">
                <h5 class="font-bold text-md">
                    Tanggal Kunjungan
                </h5>
                <button onclick="closeModalDate('dateModal')"
                    class="box-content border-none rounded-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
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