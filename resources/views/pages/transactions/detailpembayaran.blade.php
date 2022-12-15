<x-layouts.full-row title="Detail Pembelian">
    <div class="w-full p-8 lg:rounded-3xl bg-light-100">
        <h1 class="text-4xl font-bold font-display lg:block">Detail Transaksi</h1>
        <div class="flex flex-col gap-8 mt-5 lg:flex-row">
            <div class="w-full lg:w-[28rem] ">
                <div class="flex flex-row items-center gap-4 p-3 border rounded-3xl border-light-400 lg:flex-col shadow-[0px_1px_8px_rgba(0,0,0,0.08)]">
                    <div class="">
                        <img class="w-28 lg:w-full rounded-3xl aspect-square" src="{{ asset('img/global/stonipe.png') }}"
                            alt="Frame">
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <div class="text-base-800">
                            <h2 class="font-bold text-xl">Paket IPA/IPS</h2>
                            <p class="text-base">1 (Paket)</p>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-base text-primary-500 ">Rp. 55.000</span>
                            <span class="text-2xs text-decoration-line line-through">Rp.
                                110.000
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full gap-8 lg:pr-8">
                <div class="w-full ">
                    <h2 class="text-2xl font-bold text-base-800 font-display ">Detail Transaksi</h2>
                    <table class="w-full mt-3 auto border-spacing-2 transaction">
                        <tbody class="text-base-600">
                            <tr>
                                <td class="py-2">ID Pesanan</td>
                                <td class="py-2 text-right">IDPILJUR0123</td>
                            </tr>
                            <tr>
                                <td class="py-2">Tanggal Transaksi</td>
                                <td class="py-2 text-right">31-08-2022, 15.01 WIB</td>
                            </tr>
                            <tr>
                                <td class="py-2">Status Transaksi</td>
                                <td class="py-2 font-bold text-right text-base-800">Menunggu Konfirmasi</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="pt-4 mx-auto text-xs text-danger">Mohon ditunggu yaa, Transaksi kamu sedang Minju periksa
                        nih!</p>
                </div>
                <div class="w-full">
                    <h2 class="text-2xl font-bold text-base-800 font-display ">Metode Transaksi</h2>
                    <div class="border-b border-light-300 pb-5">
                        <div class="flex justify-between pt-4 w-[140px]">
                            <img class="ml-2" src="{{ asset('img/global/bri.png') }}" alt="Frame">
                            <p class="mr-3 font-body text-base-600">BANK BRI</p>
                        </div>
                    </div>
                    <table class="w-full mt-3 auto border-spacing-2 transaction border-b border-light-300">
                        <tbody class="text-base-600">
                            <tr>
                                <td class="py-2">Harga</td>
                                <td class="py-2 text-right">Rp110.000</td>
                            </tr>
                            <tr>
                                <td class="py-2">Diskon 50%</td>
                                <td class="py-2 text-right">-Rp55.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="w-full mt-3 auto border-spacing-2 transaction">
                        <tbody class="">
                            <tr>
                                <td class="py-2 text-base-600">Total Harga</td>
                                <td class="py-y text-right font-bold text-base-800">Rp55.000</td>
                            </tr>
                            <tr>
                                <td class="py-4 text-base-600">Bukti Transaksi</td>
                                <td class="py-2 text-success text-right">Sudah Tersedia</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="grid grid-cols-1 ">
                        <x-atoms.button size="default" status="outline" class="w-full mx-auto my-5">
                            Lihat Bukti Transaksi
                        </x-atoms.button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/swiper.js')
</x-layouts.full-row>
