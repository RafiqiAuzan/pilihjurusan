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
                    <x-atoms.button tag="a" status="transparent" class="cursor-pointer text-base-800">
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
                <div class="p-8 lg:w-[640px] rounded-xl bg-light-100">
                    <h2 class="text-xl font-bold">Paket penjurusan IPA/IPS</h2>
                    <div class="my-4">
                        <table class="w-full transction-tables">
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
                        </table>
                    </div>
                    <div class="space-y-4">
                        <x-atoms.button tag="a" href="/receipt" class="w-full">Selanjutnya
                        </x-atoms.button>
                        <x-atoms.button status="outline" class="w-full">Ubah Metode</x-atoms.button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.container>

{{-- <div class="flex flex-col w-full p-8 mt-10 bg-gray-100 rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">

</div> --}}
