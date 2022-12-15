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
            <form action="" method="post" class="w-full p-8 space-y-8 rounded-3xl bg-light-100 h-fit">
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <span class="px-6 py-1.5 rounded-full bg-[#005fff] text-lg text-light-100">BRI</span>
                        <h2 class="text-xl font-bold">02141241212</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-xl font-semibold text-base-500">Total yang harus di transfer</div>
                        <div class="text-xl font-bold">Rp55.000</div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-xl font-semibold text-base-500">Tengat waktu Transfer</div>
                        <div class="text-xl font-bold text-danger">00.28.12</div>
                    </div>
                </div>
                <div class="space-y-4">
                    <h2 class="text-xl font-bold">Upload Bukti Pembayaran Kamu</h2>
                    <p class="">Upload struk pembayaran atau screenshot bukti pembayaran dari transaksi yang
                        telah kamu lakukan</p>
                    <input type="file">
                </div>
                <div class="flex justify-end gap-4">
                    <x-atoms.button status="outline" class="">Kembali</x-atoms.button>
                    <x-atoms.button status="solid" class="">Upload Bukti Pembayaran</x-atoms.button>
                </div>
            </form>
        </div>
    </section>
</x-layouts.container>

{{-- <div class="flex flex-col w-full p-8 mt-10 bg-gray-100 rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">

</div> --}}
