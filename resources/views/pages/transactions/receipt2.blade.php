<x-layouts.container title="Aplikasi Tes Psikologi Terbaik">

    {{-- Transaction --}}
    <section class="pt-8">
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
                    <x-atoms.button tag="a" href="rincian" status="transparent" class="cursor-pointer text-base-800">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </x-atoms.button>
                    <h1 class="text-4xl font-bold">Konfirmasi Pembayaran</h1>
                </div>
            </div>
            <form class="w-full p-8 space-y-8 rounded-3xl bg-light-100 h-fit">
                <div class="space-y-5">
                    <h1 class=" text-lg lg:text-2xl font-bold">Upload Bukti Pembayaran</h1>
                    <p class=" font-normal text-base text-base-600 max-w-[60rem]">Upload struk pembayaran atau screenshot bukti pembayaran dari transaksi yang telah kamu lakukan.</p>
                </div>
                <div class="flex">
                    <x-atoms.button href="rincian3" status="outline" class="w-full sm:ml-auto sm:w-auto text-center">
                        Upload
                    </x-atoms.button>
                </div>
            </form>
            <div class="flex" x-data="{ 'Confirmation': false }" @keydown.escape="Confirmation = false">
                <x-atoms.button status="solid" class="w-full sm:ml-auto sm:w-auto text-center" @click="Confirmation = true">Konfirmasi</x-atoms.button>
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
    </section>
</x-layouts.container>