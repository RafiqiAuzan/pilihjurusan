<x-layouts.full-row title="Detail Pembelian">

    {{-- Section Message --}}
    <section class="bg-light-200 order-2 mx-auto lg:py-10">
        <div class="lg:grid lg:grid-rows-3 lg:grid-flow-col lg:gap-14 lg:w-[1216px] lg:h-[815px] w-full h-full rounded-2xl bg-light-100 mx-auto">
            <div class="lg:row-span-3 mx-auto pt-3 lg:px-0 px-6">
                <h1 class="text-4xl font-display mt-5 m-8 font-bold lg:block hidden">Detail Pembelian</h1>
                <div class="lg:w-[352px] lg:h-[440px] lg:ml-8 md:w-full h-[115px] mx-auto m-8 py-3 lg:px-4 pl-3 border border-opacity-50 border-solid border-light-400 rounded-2xl flex lg:flex-col flex-row items-center lg:items-start">
                    <div class="">
                        <img class="rounded-xl lg:w-[326px] lg:h-[284px] w-[91px] h-[91px]" src="{{ asset('img/global/stonipe.png') }}"
                            alt="Frame">
                    </div>
                    <div class="lg:p-0 p-[23px]">
                        <p class="lg:pt-5 font-bold lg:text-2xl font-display">Paket IPA/IPS</p>
                        <p class="pt-2 lg:text-base-800 text-xs font-body">1 (Paket)</p>
                        <p class="pt-2 font-body text-primary-500 text-xs lg:text-base">Rp. 55.000</p>
                        <p class="pt-2 font-body text-base-800 text-2xs text-decoration-line line-through">Rp. 110.000</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 lg:w-[790px] lg:h-[700px] lg:ml-0 ml-5 mx-auto lg:mt-[125px]">
                <h2 class="text-2xl font-bold text-base-800 font-display hidden lg:block">Detail Pembelian</h2>
                <h2 class="text-2xl font-bold text-base-800 font-display block lg:hidden">Detail Pesanan</h2>
                <div class="grid grid-cols-2 mt-5">
                    <div class="text-left font-body">
                        <p class="text-base-600">ID Pesanan</p>
                        <p class="text-base-600 pt-4">Tanggal Pembelian</p>
                        <p class="text-base-600 pt-4">Status Pemesanan</p>
                    </div>
                    <div class="text-right lg:pr-20 pr-10 font-body">
                        <p class="text-base-800">IDPILJUR0123</p>
                        <p class="text-base-800 pt-4">31-08-2022, 15.01 WIB</p>
                        <p class="text-base-800 pt-4 font-bold">Menunggu Konfirmasi</p>
                    </div>
                </div>
                <p class="text-danger text-xs pt-4 mx-auto">Mohon ditunggu yaa, pembayaran kamu sedang Minju periksa nih!</p>
            </div>
            <div class="lg:row-span-2 lg:col-span-2 lg:w-[790px] lg:h-[700px] lg:ml-0 ml-5 mx-auto lg:mt-9">
                <div class="border-b border-light-300 lg:mr-20 mr-10 pb-5 mx-auto">
                    <h2 class="text-2xl font-bold text-base-800 font-display lg:pt-6 pt-5">Rincian Pembayaran</h2>
                    <p class="text-base-600 font-body text-xl pt-6">Metode Pembayaran</p>
                    <div class="flex justify-between pt-4 w-[140px]">
                        <img class="ml-2" src="{{ asset('img/global/bri.png') }}" alt="Frame">
                        <p class="font-body text-base-600 mr-3">BANK BRI</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 pt-5 border-b border-light-300 lg:mr-20 mr-10 pb-4 mx-auto">
                    <div class="text-left font-body text-base-600">
                        <p class="">Harga</p>
                        <p class="pt-4">Diskon 50%</p>
                    </div>
                    <div class="text-right font-body text-base-800">
                        <p class="">Rp110.000</p>
                        <p class="pt-4">-Rp55.000</p>
                    </div>
                </div>
                <div class="grid grid-cols-2 pt-5 lg:mr-20 mr-10">
                    <div class="text-left font-body">
                        <p class=" text-base-800">Total Harga</p>
                        <p class="text-base-600 pt-7">Bukti Pembayaran</p>
                    </div>
                    <div class="text-right font-body text-base-800">
                        <p class="font-bold">Rp55.000</p>
                        <p class="text-success pt-7">Sudah Tersedia</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:mr-20 mr-10">
                    <x-atoms.button size="lg" status="outline" class="w-full mx-auto my-8">
                       Lihat Bukti Pembayaran
                    </x-atoms.button>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Footer --}}
    <x-atoms.navs.homefooter />

    @vite('resources/js/swiper.js')
</x-layouts.full-row>
