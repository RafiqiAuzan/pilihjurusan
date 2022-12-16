<x-layouts.container title="Aplikasi Tes Psikologi Terbaik">

    {{-- Transaction --}}
    <section class="">
        <div class="space-y-8">
            <div class="space-y-5">
                <div class="flex flex-wrap gap-3">
                    <x-atoms.button tag="a" status="transparent" href="#"
                        class="text-base-400 font-normal after:content-['>'] after:pl-3">Layanan
                    </x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#"
                        class="text-base-400 font-normal after:content-['>'] after:pl-3 after:text-base-800">Paket
                        Penjurusan IPA/IPS</x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#"
                        class="font-normal text-base-800">Transaksi
                    </x-atoms.button>
                </div>
                <div class="flex items-center gap-4">
                    <x-atoms.button tag="a" status="transparent" class="cursor-pointer text-base-800" onclick="exitTransactionModal()">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </x-atoms.button>
                    <h1 class="text-xl font-bold">Transaksi</h1>
                </div>
            </div>
            {{-- transaction row --}}
            <div class="flex flex-col gap-8 lg:flex-row">

                <div class="w-full p-8 space-y-4 rounded-3xl bg-light-100 h-fit">
                    <div class="">
                        <h2 class="text-xl font-bold">Apa yang bisa kamu dapatkan</h2>
                    </div>
                    <div class="">
                        <p class="">Dengan membeli paket layanan Kuliah Karier, kamu bisa dapat banyak hal menarik
                            loh!</p>
                        <ul class="mt-2 space-y-2">
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-400 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Workshop</li>
                            <li class="flex items-center gap-3"><i
                                    class="p-1 bg-green-400 rounded-full text-light-100 fa-2xs fas fa-check"></i>
                                Psikotest</li>
                        </ul>
                    </div>
                </div>

                <style>
                    input:checked + label {
                        border-color: #f06623;
                        border-width: 2px;
                    }
                </style>

                <div class="px-8 py-5 lg:w-[640px] rounded-xl bg-light-100">
                    <h2 class="text-xl font-bold py-2">Paket Penjurusan IPA/IPS</h2>
                    <div class="my-3" x-data="{ manual: true }"">
                        <div class="flex justify-center mb-6 ">
                            <div class="relative flex w-full rounded-[36px] bg-base-200 gap-3.5 px-3.5 py-4">
                                <span class="absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
                                    <span class="absolute inset-0 w-1/2 transition duration-150 ease-in-out transform rounded-[100px] shadow-[0px_1px_8px_rgba(0,0,0,0.12)] bg-light-100" :class="manual ? 'translate-x-0' : 'translate-x-full'"></span>
                                </span>
                                <button class="relative flex-1 p-1 text-sm transition duration-150 ease-in-out focus:outline-none focus-visible:ring-2" @click.prevent="manual = true">Manual</button>
                                <button class="relative flex-1 p-1 text-sm transition duration-150 ease-in-out focus:outline-none focus-visible:ring-2" @click.prevent="manual = false">Otomatis</button>
                            </div>
                        </div>

                        <!-- Manual form -->
                        <div x-show="manual">
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
                                <x-atoms.button tag="a" href="receipt" class="w-full text-center">Selanjutnya
                                </x-atoms.button>
                                <x-atoms.button status="outline" class="w-full">Ubah Metode</x-atoms.button>
                            </div>
                        </div>

                        <!-- Otomatis form -->
                        <div x-show="!manual" x-cloak>
                            <div>
                                <input type="text" class="flex justify-center text-center bg-light-200 mx-auto h-[7.25rem] w-full" placeholder="{{ __('Fitur saat ini belum tersedia') }}" disabled readonly>
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
                                    <td>Rp 110.000</td>
                                </tr>
                                <tr>
                                    <td>Diskon (50%)</td>
                                    <td>-Rp 55.000</td>
                                </tr>
                                <tr>
                                    <td>Total Harga</td>
                                    <td class="font-bold">Rp 55.000</td>
                                </tr>
                            </tbody>
                        </table> --}}

                    </div>
                </div>
            </div>


        </div>
    </section>
</x-layouts.container>

{{-- <div class="flex flex-col w-full p-8 mt-10 bg-gray-100 rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">

</div> --}}
