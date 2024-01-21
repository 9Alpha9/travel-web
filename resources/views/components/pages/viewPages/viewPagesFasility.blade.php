<div class="wisata__information fasility py-7">
    <h1 class="border-b-[1px] py-4 font-semibold text-lg">Fasilitas</h1>
    <div class="grid grid-cols-2 fasility__items">
        @foreach($tableWisata->fasilitaswisata as $key => $value)
        <section class="flex py-3 mr-4 description__wisata fasility">
            <span class="block facilityItems">
                <h2>Fasilitas {{ $value->kategorifasilitas->kategori_fasilitas }}</h2>
            </span>
        </section>
        @endforeach
    </div>
</div>