<div class="booking__infoWrapper">
    <div class="booking__content booking__contentItem">
        <div class="flex flex-col booking__heading">
            <div class="flex justify-between w-full align-middle bookingItems">
                <span class="flex flex-col inline-blocks">
                    <h1 style="font-size:1.5em;">Booking / Pesan tiket.</h1>
                    <p class="mt-2">Pemesanan tiket untuk tempat {{ $tableWisata->nama_wisata }}, {{
                        ucwords(strtolower($tableWisata->kota->name)) }}, {{
                        ucwords(strtolower($tableWisata->kota->wilayah->name)) }}.</p>
                </span>
                <div class="align-middle booking__priceWisata">
                    @php($harga = $tableWisata->harga)
                    @if ($tableWisata->diskon != 0)
                    <div class="flex flex-col discount__price @if($tableWisata->diskon == 0) hide @endif">
                        <span class="inline-block p-1 text-center rounded-sm priceTiekcet"
                            style="background-color:#223781; font-size: 0.7em; color:#f0efef;">Harga
                            tiket</span>
                        <span class="inline-block mt-3 text-xs">Diskon Harga {{ $tableWisata->diskon }}%</span>
                        <span class="inline-block text-xs line-through">Rp {{
                            number_format($tableWisata->harga, 0, ',',
                            '.') }}</span>
                        @php ($harga -= $harga * ($tableWisata->diskon / 100))
                    </div>
                    @endif
                    <div class="flex flex-col ticketWrapp__price">
                        <span class="inline-block font-semibold" style="font-size: 1.4em;">Rp {{ number_format($harga,
                            0,
                            ',',
                            '.') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="infoTiket__wisata">
            <h1 class="p-2 text-center" style="background-color:#1e1e1f; color:#f0efef; width: 10em;">
                Informasi Wisata!
            </h1>
            <ul class="informasiTiket__wrapper">
                @foreach($tableWisata->informasi as $key => $value)
                <li class="informasi__pembelianTiket">
                    <span class="inline-block py-1">
                        {{ $value->informasi }}
                    </span>
                </li>
                @endforeach
            </ul>
            <div class="moreInfo">
                <p>informasi lebih lanjut hubungi pengelola tempat wisata terkait.</p>
            </div>
        </div>
        <div class="align-middle booking__ctaWrapper">
            <div class="flex flex-row items-end justify-between my-6 booking__content">
                <div class="flex booking__cta">
                    <span class="flex flex-col sectionSelects__dateBooking">
                        <label for="tanggal_tiket" class="my-4 text-sm">Tanggal Pesanan</label>
                        <input type="text" name="datefilterBooking" id="tanggal_tiket" name="tanggal_tiket" value=""
                            class="border-0 dateBooking w-80" autocomplete="off" />
                    </span>
                    <span class="relative bottom-0 flex flex-col sectionSelects__peopleBooking px-9">
                        <label for="Guest Booking Wisata" class="my-4 text-sm">Jumlah Tamu / Pengunjung</label>
                        <div class="peopleBooking">
                            <button class="align-middle" name="buttonVisitor" id="visitorMinus">
                                <span>-</span>
                            </button>
                            <input type="text" id="jumlahVisitor" class="border-0 dataInput__people numberOnly"
                                value='1' autocomplete="off">
                            <button class="align-middle" name="buttonVisitor" id="visitorPlus">
                                <span>+</span>
                            </button>
                        </div>
                    </span>
                </div>
                <div class="align-end buttonCta__booking">
                    <button class="align-middle booking__button" id="paymentTicket">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</div>