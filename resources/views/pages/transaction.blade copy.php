<x-layouts.full-row title="Aplikasi Tes Psikologi Terbaik">

    <!-- component -->
    <section id="transaction" class="mx-auto">
        <div class=" w-full mx-auto px-7 lg:px-[128px]">
            <nav class=" rounded-md w-full mt-[100px] items-center">
                <ol class="flex text-xs list-reset text-base-400">
                    <li><a href="#" class="">Layanan</a></li>
                    <i class="mx-2 fas fa-chevron-right "></i>
                    <li><a href="#" class="">Paket Penjurusan IPA/IPS</a></li>
                    <i class="mx-2 fas fa-chevron-right text-base-800"></i>
                    <li class="text-base-800">Transaksi</li>
                </ol>
            </nav>

            <div class="flex flex-row items-center mt-6 mb-8">
                <a href=""><i class="pr-6 text-lg fas fa-arrow-left"></i></a>
                <h3 class="text-base-800 text-[36px] font-bold">Transaksi</h3>
            </div>
            <div class="flex flex-col justify-center mx-auto lg:flex-row">
                <div class="w-[30rem] h-[250px] p-8 mr-7 lg:mr-8 rounded-2xl bg-green-500 shadow-lg">
                    <h3 class="pb-5 text-xl font-bold">Apa yang bisa kamu dapatkan?</h3>
                    <p class="text-base text-base-800">Dengan membeli paket layanan Kuliah Karier, kamu bisa dapat
                        banyak hal menarik loh!</p>
                </div>
                <div class="max-w-sm p-8 mt-5 shadow-lg rounded-2xl lg:mt-0">
                    <h3 class="text-xl">Paket Penjurusan IPA/IPS</h3>
                    <table class="w-full mt-3 auto border-spacing-2 transaction">
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
                                <td class="py-2 font-bold text-right">Rp55.000</td>
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

{{-- <div class="flex flex-col w-full p-8 mt-10 bg-gray-100 rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">

</div> --}}
