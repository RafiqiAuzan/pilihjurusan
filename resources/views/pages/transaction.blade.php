<x-layouts.full-row title="Aplikasi Tes Psikologi Terbaik">

    <!-- component -->
    <section id="transaction" class="mx-auto">
        <div class="container w-[1280px] mx-auto px-7 lg:px-[128px]">
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
                <div class="w-[600px] h-[250px] p-8 mr-7 lg:mr-8 rounded-2xl bg-green-500 shadow-lg">
                    <h3 class="text-xl font-bold pb-5">Apa yang bisa kamu dapatkan?</h3>
                    <p class="text-base text-base-800">Dengan membeli paket layanan Kuliah Karier, kamu bisa dapat banyak hal menarik loh!</p>
                </div>
                <div class="h-full mt-7 lg:my-0 lg:w-[392px] max-w-md p-8 rounded-2xl bg-warning shadow-lg">
                    <h3 class="font-body text-xl ">Paket Jurusan IPA/IPS</h3>
                    <div class="grid grid-cols-2 pt-6 gap-3">
                        <p>ID Pesanan</p>
                        <p>IDPILJUR0123</p>
                        <p>Metode</p>
                        <p class="border-b-2">BRI (Transfer)</p>
                        {{-- <span class="border w-[328px] border-base-200"></span> --}}
                    </div>
                    <div class="grid grid-cols-2 pt-6 gap-3">
                        <p>Harga</p>
                        <p>Rp110.000</p>
                        <p>Diskon 50%</p>
                        <p>-Rp55.000</p>
                        <span class="border w-[328px] border-base-200"></span>
                    </div>
                    <div class="grid grid-cols-2 pt-6 gap-3">
                        <p>Total Harga</p>
                        <p>Rp55.000</p>
                    </div>
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

<div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">

</div>