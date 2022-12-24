<x-layouts.container title="Aplikasi Tes Psikologi Terbaik">

    {{-- Transaction --}}
    <section class="pt-8">
        <div class="space-y-8" x-data="{ 'exitConfirmation': false }" @keydown.escape="exitConfirmation = false">
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
                    <x-atoms.button tag="a" status="transparent" class="cursor-pointer text-base-800" @click="exitConfirmation = true">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </x-atoms.button>
                    <!-- Modal -->
                    <div class="fixed inset-0 z-30 flex items-center justify-center bg-dark-100 bg-opacity-50 p-8" x-show="exitConfirmation" x-cloak>
                        <!-- Modal inner -->
                        <div class="max-w-md px-7 py-4 mx-auto text-left bg-light-100 rounded-3xl shadow-lg" @click.away="exitConfirmation = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                            <div>
                                <h2 class="text-2xl font-bold">Apakah kamu yakin?</h2>
                                <p class="text-base-500 my-4">Apakah kamu yakin untuk keluar dari halaman pembayaran dan kembali ke halaman sebelumnya? Kamu dapat upload bukti pembayaran kembali lewat halaman Riwayat Transaksi lalu buka detail transaksi.</p>
                                <div class="flex flex-row text-center mx-auto justify-center gap-x-3">
                                    <x-atoms.button status="outline" @click="exitConfirmation = false" class="border-0">Belum Yakin</x-atoms.button>
                                    <x-atoms.button href="/" @click="exitConfirmation = true">Yakin</x-atoms.button>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <div class="flex justify-end gap-4" x-data="{ 'Confirmation': false }" @keydown.escape="Confirmation = false">
                <x-atoms.button status="solid" class="" @click="Confirmation = true">Konfirmasi</x-atoms.button>
                <!-- Modal -->
                <div class="fixed inset-0 z-30 flex items-center justify-center bg-dark-100 bg-opacity-50 p-8" x-show="Confirmation" x-cloak>
                    <!-- Modal inner -->
                    <div class="max-w-md px-7 py-4 mx-auto text-left bg-light-100 rounded-3xl shadow-lg" @click.away="Confirmation = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <div>
                            <h2 class="text-2xl font-bold">Apakah kamu yakin?</h2>
                            <p class="text-base-500 my-4">Kamu hanya bisa mengupload ulang satu kali setelah ini lewat halaman Riwayat Transaksi lalu akses detail transaksi, dan jika file yang telah diunggah sudah Minju approve, maka kamu nggak bisa mengubahnya lagi ya!</p>
                            <div class="flex flex-row text-center mx-auto justify-center gap-x-3">
                                <x-atoms.button status="outline" @click="Confirmation = false" class="border-0">Belum Yakin</x-atoms.button>
                                <x-atoms.button href="riwayat-transaksi" @click="Confirmation = true">Yakin</x-atoms.button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="flex w-full h-screen items-center justify-center bg-grey-lighter">
            <label class="flex w-64 flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                
                <input type='file' class="opacity-0 inline-block" />
                <x-atoms.button class="mt-2 text-base leading-normal ">Upload</x-atoms.button>
                
            </label>
        </div> --}}

        
    </section>
</x-layouts.container>