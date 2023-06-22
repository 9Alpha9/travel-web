@extends('dashboard.defaultDashboard')
@push('style')

@endpush

@section('pageContent')
<div class="relative verificationRules__Container">
    <div class="relative pt-12 mt-12 verification__Content">
        <span class="block pt-12 verification__Title">
            <h1>Request Verifikasi</h1>
        </span>
        <div class="pt-8 verification__Items">
            <p class="flex items-center gap-5 p-3 px-8 shadow-lg rounded-xl infoVerif">
                <i class="ri-information-fill"></i>
                <span class="block">Verifikasi dilakukan hanya digunakan untuk menunjukkan bahwa anda adalah pemilik,
                    pengelolah, atau pengurus dari tempat wisata!</span>
            </p>
            <div class="grid grid-flow-col grid-cols-2 gap-2 pt-12 verification__Card">
                <div class="p-6 rounded-xl verification__Items-card useR h-[26rem] shadow-2xl">
                    <div class="flex flex-col flex-wrap justify-between useR__type">
                        <span class="z-10 block pt-6 leading-7 text-justify">Request verifikasi ini digunakan untuk
                            mengubah
                            status
                            anda dari User
                            menjadi status pengelola Tempat Wisata. Dengan status ini, anda dapat menambahkan Tempat
                            wisata yang anda kelola yang masih belum ada pada website.
                        </span>
                        <div class="relative z-10 w-full verification__Btnreq top-28">
                            <button type="submit" class="w-full p-3 px-8 req__Cta rounded-xl">Ajukan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush