<x-layouts.full-row title="Aplikasi Tes Psikologi Terbaik">

    <!-- component -->
    <section id="transaction" class="mx-auto">
        <div class="container w-full mx-auto px-7 lg:px-[128px]">
            <nav class=" rounded-md w-full mt-[100px] items-center">
                <ol class="list-reset flex text-xs text-base-400">
                    <li><a href="#" class="">Layanan</a></li>
                    <i class="fas fa-chevron-right mx-2 "></i>
                    <li><a href="#" class="">Paket Penjurusan IPA/IPS</a></li>
                    <i class="fas fa-chevron-right mx-2 text-base-800"></i>
                    <li class="text-base-800">Transaksi</li>
                </ol>
            </nav>

            <div class="flex flex-row mt-6 items-center mb-8">
                <a href=""><i class="fas fa-arrow-left pr-6 text-lg"></i></a>
                <h3 class="text-base-800 text-[36px] font-bold">Transaksi</h3>
            </div>
            <div class="flex flex-col lg:flex-row justify-center mx-auto">
                <div class="w-[30rem] h-[250px] p-8 mr-7 lg:mr-8 rounded-2xl bg-green-500 shadow-lg">
                    <h3 class="text-xl font-bold pb-5">Apa yang bisa kamu dapatkan?</h3>
                    <p class="text-base text-base-800">Dengan membeli paket layanan Kuliah Karier, kamu bisa dapat banyak hal menarik loh!</p>
                </div>
                <div class=" p-8 rounded-2xl bg-light-100 shadow-lg max-w-sm mt-5 lg:mt-0">
                    <h3 class="text-xl">Paket Penjurusan IPA/IPS</h3>
                    <table class=" w-full mt-3 auto border-spacing-2 transaction">
                        <tbody class="text-base-600">
                            <tr>
                                <td class="py-2">ID Pesanan</td>
                                <td class="py-2 text-right">IDPILJUR0123</td>
                            </tr>
                            <tr>
                                <td class="py-2">Metode</td>
                                <td class="py-2 text-right">BRI (Transfer)</td>
                            </tr>
                            <tr>
                                <td class="py-2">Harga</td>
                                <td class="py-2 text-right">Rp110.000</td>
                            </tr>
                            <tr>
                                <td class="py-2">Diskon 50%</td>
                                <td class="py-2 text-right">-Rp55.000</td>
                            </tr>
                            <tr>
                                <td class="py-2">Total Harga</td>
                                <td class="py-2 text-right font-bold">Rp55.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mx-auto mt-5 ">
                        <div class="flex flex-col justify-center gap-3 mt-5 !px-0">
                            <x-atoms.button size="lg" status="solid" class="">
                                {{ __('Selanjutnya') }}
                            </x-atoms.button>
                            <x-atoms.button size="lg" status="outline" class="">
                                {{ __('Ubah Metode') }}
                            </x-atoms.button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-layouts.full-row>

{{-- <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">

</div> --}}
