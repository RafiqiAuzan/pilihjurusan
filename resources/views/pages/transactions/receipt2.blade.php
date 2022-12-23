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
                        class="text-base-400 font-normal after:content-['>'] after:pl-3">Paket
                        Penjurusan IPA/IPS</x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#"
                        class="text-base-400 font-normal after:content-['>'] after:pl-3 after:text-base-800">Transaksi
                    </x-atoms.button>
                    <x-atoms.button tag="a" status="transparent" href="#"
                        class="font-normal text-base-800">Upload Bukti Pembayaran
                    </x-atoms.button>
                </div>
                <div class="flex items-center gap-8">
                    <x-atoms.button tag="a" href="receipt" status="transparent" class="cursor-pointer text-base-800">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </x-atoms.button>
                    <h1 class="text-4xl font-bold">Konfirmasi Pembayaran</h1>
                </div>
            </div>
            <form action="" class="w-full p-8 space-y-8 rounded-3xl bg-light-100 h-fit">
                <div class="space-y-5">
                    <h1 class=" text-2xl font-bold">Upload Bukti Pembayaran</h1>
                    <p class=" font-normal text-base text-base-600 max-w-[60rem]">Upload struk pembayaran atau screenshot bukti pembayaran dari transaksi yang telah kamu lakukan.</p>
                    {{-- <div class="flex items-center gap-4">
                        <span class="px-6 py-1.5 rounded-full bg-[#005fff] text-lg text-light-100 font-semibold">BRI</span>
                        <h2 class="text-2xl font-bold">02141241212</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-display text-xl font-normal text-base-700">Total yang harus kamu transfer:</p>
                        <p class="font-display text-2xl font-bold">Rp60.000</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="font-display text-xl font-normal text-base-700">Tenggat waktu Transfer:</p>
                        <p class="font-display text-2xl font-bold text-danger">00.28.12</p>
                    </div> --}}
                </div>
                {{-- <div class="space-y-4">
                    <h2 class="text-xl font-bold">Upload Bukti Pembayaran Kamu</h2>
                    <p class="">Upload struk pembayaran atau screenshot bukti pembayaran dari transaksi yang
                        telah kamu lakukan</p>
                    <input type="file">
                </div> --}}
                <div class="flex justify-end gap-4">
                    <x-atoms.button status="outline" class="">
                        <input type='file' class="hidden" />Upload
                    </x-atoms.button>
                </div>
            </form>
            <div class="flex justify-end gap-4">
                <x-atoms.button href="receipt2" status="solid" class="">Konfirmasi</x-atoms.button>
            </div>
        </div>


        {{-- <div class="flex w-full h-screen items-center justify-center bg-grey-lighter">
            <label class="flex w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                
                <input type='file' class="opacity-0 inline-block" />
                <x-atoms.button class="mt-2 text-base leading-normal ">Upload</x-atoms.button>
                
            </label>
        </div> --}}

        
    </section>
</x-layouts.container>