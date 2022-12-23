<x-layouts.container title="Aplikasi Tes Psikologi Terbaik">

    {{-- Transaction --}}
    <section class="">
        <div class="space-y-8" x-data="{ 'exitTransaction': false }" @keydown.escape="exitTransaction = false">
            <div class="space-y-5">
                <div class="flex flex-wrap gap-3">
                    <x-atoms.button tag="a" status="transparent" href="#" class="text-base-400 font-normal after:content-['>'] after:pl-3">Layanan
                    </x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#" class="text-base-400 font-normal after:content-['>'] after:pl-3 after:text-base-800">Paket
                        Penjurusan IPA/IPS</x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#" class="font-normal text-base-800">Transaksi
                    </x-atoms.button>
                </div>
                <div class="flex items-center gap-4">
                    
                    <x-atoms.button tag="a" status="transparent" class="cursor-pointer text-base-800" @click="exitTransaction = true">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </x-atoms.button>
                    <!-- Modal -->
                    <div class="fixed inset-0 z-30 flex items-center justify-center bg-dark-100 bg-opacity-50 p-8" x-show="exitTransaction" x-cloak>
                        <!-- Modal inner -->
                        <div class="max-w-md px-7 py-4 mx-auto text-left bg-light-100 rounded-3xl shadow-lg" @click.away="exitTransaction = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                            <div>
                                <h2 class="text-2xl font-bold">Apakah kamu yakin?</h2>
                                <p class="text-base-500 my-6">Apakah kamu yakin untuk keluar dari halaman transaksi dan kembali ke halaman sebelumnya?</p>
                                <div class="flex flex-row text-center mx-auto justify-center gap-x-3">
                                    <x-atoms.button status="outline" @click="exitTransaction = false" class="border-0">Belum Yakin</x-atoms.button>
                                    <x-atoms.button @click="exitTransaction = true">Yakin</x-atoms.button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h1 class="text-4xl font-bold">Transaksi</h1>
                </div>
            </div>
            
            {{-- transaction row --}}
            <div class="flex flex-col gap-8 lg:flex-row">

                <div class="w-full p-8 space-y-4 rounded-3xl bg-light-100 h-fit">
                    <div class="">
                        <h2 class="text-xl font-bold">Apa yang bisa kamu dapatkan?</h2>
                    </div>
                    <div class="text-base-600">
                        <p class="">Dengan membeli paket layanan Kuliah Karier, kamu bisa dapat banyak hal menarik
                            loh!</p>
                        <ul class="my-4 space-y-2">
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Workshop</li>
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Psikotest</li>
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Tes Minat dan Bakat</li>
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-500 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Tes IPA/IPS</li>
                        </ul>
                    </div>
                    <div class="pt-3 space-y-3">
                        <h3 class="font-medium text-base-800">Keterangan</h3>
                        <p class="text-base-700 text-sm">Pemesananmu yang dibayarkan melalui metode Manual akan diproses Maksimal dalam 1 hari kerja.</p>
                    </div>
                </div>

                <style>
                    input:checked+label {
                        border-color: #f06623;
                        border-width: 2px;
                    }
                </style>

                <div class="px-8 py-5 lg:w-[640px] rounded-xl bg-light-100">
                    <h2 class="text-xl font-bold py-2">Metode Pembayaran</h2>
                    
                    <div class="my-3" x-data="{ manual: true }">
                        <div class="text-center border-b border-light-400 border-solid">
                            <ul class="flex flex-wrap">
                                <li class="mr-2 last:mr-0">
                                    <button :class="manual ? 'text-primary-500 border-primary-500 inline-block pb-2 px-3 border-b-2 active text-sm font-medium transition-all ease-in-out duration-150' : 'inline-block active transition-all ease-in-out duration-150 text-base-500 border-light-400 pb-2 px-3 text-sm'" @click.prevent="manual = true">Manual</button>
                                </li>
                                <li class="mr-2 last:mr-0">
                                    <button :class="manual ? 'text-base-500 border-light-400 inline-block active pb-2 px-3 text-sm transition-all ease-in-out duration-150' : 'inline-block active transition-all ease-in-out border-b-2 duration-150 text-primary-500 border-primary-500 pb-2 px-3 text-sm font-medium'" @click.prevent="manual = false">Otomatis</button>
                                </li>
                            </ul>
                        </div>

                        <!-- Manual form -->
                        <div x-show="manual" class="pt-3">
                            <div class="space-y-4">
                                <!-- Payment Option -->
                                <input class="hidden" type="radio" id="bri" name="radio">
                                <label class="flex p-3 w-full border border-light-400 cursor-pointer rounded-2xl" for="bri">
                                    <div class="flex">
                                        <img src="{{ asset('img/logo/bri.svg') }}" alt="bri" class="w-8 h-8">
                                        <span class="pl-3 my-auto">BRI (Transfer)</span>
                                    </div>
                                </label>
                            </div>
                            <div class="space-y-4">
                                <!-- Payment Option -->
                                <input class="hidden" type="radio" id="ovo" name="radio">
                                <label class="flex p-3 w-full border border-light-400 cursor-pointer rounded-2xl" for="ovo">
                                    <div class="flex">
                                        <img src="{{ asset('img/logo/ovo.svg') }}" alt="ovo" class="w-8 h-8">
                                        <span class="pl-3 my-auto">OVO</span>
                                    </div>
                                </label>
                            </div>
                            <div class="space-y-4">
                                <!-- Payment Option -->
                                <input class="hidden" type="radio" id="gopay" name="radio">
                                <label class="flex p-3 w-full border border-light-400 cursor-pointer rounded-2xl" for="gopay">
                                    <div class="flex">
                                        <img src="{{ asset('img/logo/gopay.svg') }}" alt="gopay" class="w-8 h-8">
                                        <span class="pl-3 my-auto">Gopay</span>
                                    </div>
                                </label>
                            </div>
                            <div class="space-y-4 pt-4">
                                <x-atoms.button tag="a" href="transaction2" class="w-full text-center">Selanjutnya</x-atoms.button>
                            </div>
                        </div>

                        <!-- Otomatis form -->
                        <div x-show="!manual" x-cloak class="pt-4">
                            <div>
                                <input type="text" class="flex justify-center text-center bg-light-200 mx-auto h-[7.25rem] w-full rounded-3xl" placeholder="{{ __('Fitur saat ini belum tersedia') }}" disabled readonly>
                            </div>
                        </div>

        {{-- <table class="w-full transction-tables">
            <tbody class="">
                <tr>
                    <td>ID Transaksi</td>
                    <td>IDPILJUR0123</td>
                </tr>
                <tr>
                    <td>Metode</td>
                    <td>BRI (Transfer)</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>Rp 150.000</td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>-Rp 90.000</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td class="font-bold">Rp 60.000</td>
                </tr>
            </tbody>
        </table>
        <div class="space-y-4">
            <x-atoms.button tag="a" href="/receipt" class="w-full text-center">Selanjutnya
            </x-atoms.button>
            <x-atoms.button status="outline" class="w-full">Ubah Metode</x-atoms.button>
        </div> --}}
        </div>

        </div>
        </div>


        </div>
    </section>
</x-layouts.container>

