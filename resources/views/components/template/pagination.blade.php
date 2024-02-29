<div class="flex flex-col justify-between mt-10 lg:flex-row paginationContainer">
    <div class="flex flex-col items-center space-x-2 text-xs lg:flex-row">
        <p class="mt-4 text-gray-500 lg:mt-0">Menampilkan {{ $start }} dari {{ $end }} dari {{ $dataTotal
            }} data</p>
    </div>
    <div class="flex items-center justify-center mt-8 text-gray-600 lg:mt-0">
        <div class="previousPagination__items">
            <button class="p-2 mr-4 rounded hover:bg-gray-100 paginationPrev paginationPage">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        </div>
        <span class="paginationNumber__rows">
            @php($classNonActive = "px-4 py-2 rounded hover:bg-gray-200")
            @php($classActive = "px-4 py-2 font-medium text-gray-900 bg-gray-100 rounded hover:bg-gray-200
            activePagination")
            @foreach ($visibleList as $key => $value)
            @if($value['active'])
            @php($class = $classActive)
            @else
            @php($class = $classNonActive)
            @endif

            @if($value['number'] !== 0 && $value['number'] !== -1)
            <button class="paginationPage {{ $class }}" data-page="{{ $value['number'] }}">
                <span class="pageNumbers">{{ $value['number'] }}</span>
            </button>
            @else
            <div class="inline-block">
                <span style="display:block;" class="px-4 py-2 rounded cursor-pointer input-pagination">
                    ...
                </span>
                <input type="number" class="inputPagination" hidden>
            </div>
            @endif
            @endforeach
        </span>
        <div class="nextPagination___items">
            <button class="p-2 ml-4 rounded hover:bg-gray-100 paginationNext paginationPage">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</div>