<x-layouts.full-row title="Detail Pembelian">

    <div class="w-full p-8 rounded-3xl bg-light-100">
        <h1 class="text-4xl font-bold font-display lg:block">Detail Pembelian</h1>
        <div class="flex flex-col gap-8 mt-5 lg:flex-row">
            <div class="w-full lg:w-[28rem]">
                <div class="flex flex-row items-center gap-5 p-4 border rounded-lg lg:flex-col">
                    <div class="">
                        <img class="w-28 lg:w-full rounded-xl aspect-square" src="{{ asset('img/global/stonipe.png') }}"
                            alt="Frame">
                    </div>
                    <div class="flex flex-col gap-2 lg:mt-5">
                        <div class="">
                            <h2 class="font-bold">Paket IPA/IPS</h2>
                            <p class="text-xs">1 (Paket)</p>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs text-primary-500 ">Rp. 55.000</span>
                            <span class="text-2xs text-decoration-line">Rp.
                                110.000
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full gap-8">
                <div class="w-full ">
                    <h2 class="hidden text-2xl font-bold text-base-800 font-display lg:block">Detail Pembelian</h2>
                    <h2 class="block text-2xl font-bold text-base-800 font-display lg:hidden">Detail Pesanan</h2>
                    <div class="grid grid-cols-2 mt-5">
                        <div class="text-left font-body">
                            <p class="text-base-600">ID Pesanan</p>
                            <p class="pt-4 text-base-600">Tanggal Pembelian</p>
                            <p class="pt-4 text-base-600">Status Pemesanan</p>
                        </div>
                        <div class="pr-10 text-right font-body">
                            <p class="text-base-800">IDPILJUR0123</p>
                            <p class="pt-4 text-base-800">31-08-2022, 15.01 WIB</p>
                            <p class="pt-4 font-bold text-base-800">Menunggu Konfirmasi</p>
                        </div>
                    </div>
                    <p class="pt-4 mx-auto text-xs text-danger">Mohon ditunggu yaa, pembayaran kamu sedang Minju periksa
                        nih!</p>
                </div>
                <div class="w-full">
                    <div class="pb-5 mx-auto border-b border-light-300">
                        <h2 class="pt-5 text-2xl font-bold text-base-800 font-display lg:pt-6">Rincian Pembayaran</h2>
                        <p class="pt-6 text-xl text-base-600 font-body">Metode Pembayaran</p>
                        <div class="flex justify-between pt-4 w-[140px]">
                            <img class="ml-2" src="{{ asset('img/global/bri.png') }}" alt="Frame">
                            <p class="mr-3 font-body text-base-600">BANK BRI</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 pt-5 pb-4 mx-auto border-b border-light-300">
                        <div class="text-left font-body text-base-600">
                            <p class="">Harga</p>
                            <p class="pt-4">Diskon 50%</p>
                        </div>
                        <div class="text-right font-body text-base-800">
                            <p class="">Rp110.000</p>
                            <p class="pt-4">-Rp55.000</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 pt-5 ">
                        <div class="text-left font-body">
                            <p class=" text-base-800">Total Harga</p>
                            <p class="text-base-600 pt-7">Bukti Pembayaran</p>
                        </div>
                        <div class="text-right font-body text-base-800">
                            <p class="font-bold">Rp55.000</p>
                            <p class="text-success pt-7">Sudah Tersedia</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 ">
                        <x-atoms.button size="lg" status="outline" class="w-full mx-auto my-8">
                            Lihat Bukti Pembayaran
                        </x-atoms.button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/swiper.js')
</x-layouts.full-row>
