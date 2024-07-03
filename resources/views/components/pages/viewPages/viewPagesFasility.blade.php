<div class="p-3 rounded-md wisata__information fasility" style="border: solid 1px #C5CBD3">
    <h1 class="py-4 text-lg font-semibold" style="border-bottom: solid 1px #C5CBD3">Fasilitas</h1>
    <div class="grid grid-cols-3 fasility__items">
        @foreach($tableWisata->fasilitaswisata as $key => $value)
        <section class="flex py-2 mr-4 description__wisata fasility">
            <span class="block facilityItems">
                <ul class="pl-6">
                    <li class="list-disc whitespace-nowrap">
                        <h2>{{ $value->kategorifasilitas->kategori_fasilitas }}</h2>
                    </li>
                </ul>

            </span>
        </section>
        @endforeach
    </div>
</div>
<div class="p-3 mt-6 rounded-md wisata__information fasility" style="border: solid 1px #C5CBD3">
    <h1 class="py-4 text-lg font-semibold" style="border-bottom: solid 1px #C5CBD3">Wahana Wisata</h1>
    <div class="grid grid-cols-3 fasility__items">
        @foreach($tableWisata->wahanawisata as $key => $value)
        <section class="flex py-2 mr-4 description__wisata fasility">
            <span class="grid block grid-cols-2 facilityItems">
                <ul class="pl-6">
                    <li class="list-disc whitespace-nowrap">
                        <h2>{{ $value->nama_wahana }}</h2>
                    </li>
                </ul>
            </span>
        </section>
        @endforeach
    </div>
</div>
<div class="p-3 mt-6 rounded-md wisata__information jenisWahana" style="border: solid 1px #C5CBD3">
    <h1 class="py-4 text-lg font-semibold" style="border-bottom: solid 1px #C5CBD3">Jenis Wahana</h1>
    <div class="grid grid-cols-3 fasility__items">
        @foreach($tableWisata->JenisWahana() as $key => $value)
        <section class="flex items-center py-2 mr-4 description__wisata fasility">
            <span class="grid block grid-cols-2 facilityItems">
                <ul class="pl-6">
                    <li class="list-disc">
                        <h2>{{ $value->tipewahana->nama_tipe_wahana }}</h2>
                    </li>
                </ul>
            </span>
        </section>
        @endforeach
    </div>
</div>