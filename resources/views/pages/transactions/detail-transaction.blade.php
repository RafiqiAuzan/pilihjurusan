<x-layouts.container title="Detail Pembelian">
    <nav class="my-8">
        <div class="flex flex-wrap gap-3">
            <x-atoms.button tag="a" status="transparent" href="#"
                class="text-base-400 font-normal after:content-['>'] after:pl-3">Riwayat Transaksi
            </x-atoms.button>
            <x-atoms.button tag="a" status="transparent" href="#"
                class="text-base-400 font-normal after:content-['>'] after:pl-3 after:text-base-800">Paket
                Penjurusan IPA/IPS</x-atoms.button>
            <x-atoms.button tag="a" status="transparent" href="#"
                class="font-normal text-base-800">Detail Transaksi
            </x-atoms.button>
        </div>
    </nav>
    <div class="w-full lg:p-10 lg:rounded-3xl lg:bg-light-100">
        <h1 class="text-4xl font-bold font-display hidden lg:block">Detail Transaksi</h1>
        <h1 class="text-2xl font-bold font-display lg:hidden">Rincian Transaksi</h1>
        <div class="flex flex-col gap-8 mt-5 lg:flex-row">
            <div class="w-full lg:w-[32rem]">
                <div class="flex flex-row items-center gap-4 p-3 lg:border rounded-3xl border-light-400 lg:flex-col bg-light-100">
                    <div class="">
                        <img class="w-28 lg:w-full rounded-3xl aspect-square" src="{{ asset('img/global/stonipe.png') }}"
                            alt="Frame">
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <div class="text-base-800">
                            <h2 class="font-bold text-xl">Paket IPA/IPS</h2>
                            <p class="hidden text-base">1 (Paket)</p>
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
            <div class="flex flex-col w-full gap-5 lg:pr-12">
                <div class="w-full lg:px-10">
                    <h2 class="text-2xl font-bold text-base-800 font-display hidden lg:block">Rincian Transaksi</h2>
                    <div class="flex flex-row items-center lg:mt-6 gap-5 p-5 rounded-3xl lg:flex-col bg-light-100">
                        <table class="w-full auto border-spacing-2 transaction">
                            <tbody class="text-base-600">
                                <tr>
                                    <td class="py-2">ID Transaksi</td>
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
                    </div>
                    <div class="grid grid-cols-1  items-left mt-6 gap-[12px] p-[20px] rounded-3xl lg:flex-col bg-light-100">
                        <p class="text-xl font-medium text-base-800">Keterangan</p>
                        <p class="text-sm text-base-600">Mohon ditunggu, Pembayaran yang kamu lakukan sedang kami validasi</p>
                    </div>
                </div>
                <div class="w-full lg:px-10">
                    <div class="grid grid-cols-1  items-center gap-[15px] p-[20px] rounded-3xl lg:flex-col bg-light-100">
                        <table class="w-full auto border-spacing-2 transaction border-b border-light-300">
                            <tbody class="text-base-600">
                                <tr>
                                    <td class="py-2">Metode Pembayaran</td>
                                    <td class="py-2 text-right">BANK BRI</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="w-full auto border-spacing-2 transaction border-b border-light-300">
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
                        <table class="w-full auto border-spacing-2 transaction">
                            <tbody class="">
                                <tr>
                                    <td class="py-2 text-base-600">Total Harga</td>
                                    <td class="py-y text-right font-bold text-base-800">Rp55.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-row items-left mt-6 mb-2 gap-[20px] p-[20px] rounded-3xl lg:flex-col bg-light-100">
                        <table class="w-full auto border-spacing-4 transaction">
                            <tbody class="">
                                <tr>
                                    <td class="py-2 text-base-600">Bukti Transaksi</td>
                                    <td class="py-2 text-primary-500 font-bold text-right"><a href="">Lihat</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="grid grid-cols-1">
                        <x-atoms.button size="default" status="solid" class="w-full mx-auto mt-4">
                            Upload Bukti Pembayaran
                        </x-atoms.button>
                        <x-atoms.button size="default" status="outline" class="w-full mx-auto my-5">
                            Bantuan
                        </x-atoms.button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/swiper.js')
</x-layouts.container>