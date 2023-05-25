<div class="booking__infoWrapper">
    <div class="booking__content booking__contentItem">
        <div class="flex items-center justify-between align-middle booking__heading">
            <h1>Booking / Pesan tiket.</h1>
            <div class="align-middle booking__priceWisata">
                <div class="flex flex-col discount__price">
                    <span class="inline-block text-xs">Diskon Harga 5%</span>
                    <span class="inline-block text-xs line-through">Rp 380.000</span>
                </div>
                <span class="inline-block font-semibold">Rp. 340.000</span>
            </div>
        </div>
        <p class="py-3">Pemesanan tiket untuk tempat wisata De Laponte, Malang, Jawa Timur.</p>
        <div class="infoTiket__wisata">
            <h1>Informasi !</h1>
            <ul class="informasiTiket__wrapper">
                <li class="informasi__pembelianTiket">
                    <span>
                        <p>
                            Tiket hanya berlaku pada saat tanggal pembelian tiket.
                        </p>
                    </span>
                </li>
                <li class="informasi__pembelianTiket">
                    <span>
                        <p>
                            Tiket hanya satu(1) kali penggunaan.
                        </p>
                    </span>
                </li>
                <li class="informasi__pembelianTiket">
                    <span>
                        <p>
                            Tiket tidak dapat di tukar.
                        </p>
                    </span>
                </li>
                <li class="informasi__pembelianTiket">
                    <span>
                        <p>
                            Tiket tidak dapat di wakilkan oleh orang lain.
                        </p>
                    </span>
                </li>
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