<div class="skeletonLoad__loading">
    <div class="flex flex-row gap-4 border rounded-lg">
        <div class="content__banner__recommendation">
            <span class="block rounded-tl-lg rounded-bl-lg skeletonImage__banner animate-pulse"></span>
        </div>
        <div class="relative flex head__recommendation">
            <div class="flex flex-col pt-2 border-r title__head">
                <span class="inline-block text__recommendation w-25">
                    <span class="block h-8 bg-gray-200 rounded-sm w-25 animate-pulse titleSkeleton"></span>
                </span>
                {{-- Rating --}}
                <div class="flex items-center float-left gap-1 my-3 wisata__stars">
                    <span class="block rounded-sm animate-pulse starSkeleton"></span>
                </div>
                {{-- End Rating --}}
                <div class="flex items-center gap-1 my-2 facility__iteminfoHeader">
                    <span class="block rounded-sm animate-pulse facilitySkeleton"></span>
                </div>
                <span class="inline-block mt-2 mb-2 pillsHeader__wrap">
                    <ol class="flex flex-row flex-wrap gap-1 pills__bodyHome list-group-item list-inline-item">
                        <li class="rounded-sm pills__eachItem">
                            <span class="block rounded-sm animate-pulse facilitySkeleton__items"></span>
                        </li>
                        <li class="pills__eachItem">
                            <span class="block rounded-sm animate-pulse facilitySkeleton__items"></span>
                        </li>
                        <li class="pills__eachItem">
                            <span class="block rounded-sm animate-pulse facilitySkeleton__items"></span>
                        </li>
                    </ol>
                </span>
                <div class="moreInfo__wrapper my-7">
                    <div class="moreinfo__content">
                        <div class="flex gap-3 mt-3 moreinfo__items">
                            <div class="text-sm kategori__item">
                                <span class="block rounded-sm animate-pulse kategoriSkeleton__items"></span>
                            </div>
                            <span class="border-r"></span>
                            <div class="text-sm kategori__item">
                                <div class="text-sm rank__item">
                                    <div class="text-sm kategori__item">
                                        <span class="block rounded-sm animate-pulse kategoriSkeleton__items"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info__recommendationHome">
                <div class="infoRecommendation__skeleton">
                    <span class="inline-block rounded-sm animate-pulse infoSkeleton__items"></span>
                    <span class="rounded-sm no__discountSkeleton"></span>
                </div>
            </div>
        </div>
    </div>
</div>