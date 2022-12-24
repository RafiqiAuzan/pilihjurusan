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
                    {{-- <x-atoms.button tag="a" href="transaksi2" status="transparent" class="cursor-pointer text-base-800">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </x-atoms.button> --}}
                    <h1 class="text-4xl font-bold">Konfirmasi Pembayaran</h1>
                </div>
            </div>
            <form action="" method="post" class="w-full p-8 space-y-8 rounded-3xl bg-light-100 h-fit">
                <div class="space-y-5">
                    <h1 class=" text-2xl font-bold">Detail Pembayaran</h1>
                    <p class=" font-normal text-base text-base-600 max-w-[60rem]">Transaksimu hampir selesai! Yuk selesaikan dengan cara transfer ke rekening/nomor dengan jumlah yang telah tertera di bawah ini.</p>
                    <div class="flex items-center gap-4">
                        <span class="px-6 py-1.5 rounded-full bg-[#005fff] text-lg text-light-100 font-semibold">BRI</span>
                        <h2 class="text-2xl font-bold">02141241212</h2>
                    </div>
                    <div class="lg:flex items-center gap-4">
                        <p class="font-display lg:text-xl text-base font-normal text-base-700">Total yang harus kamu transfer:</p>
                        <p class="font-display text-2xl font-bold">Rp60.000</p>
                    </div>
                    <div class="lg:flex items-center gap-4">
                        <p class="font-display lg:text-xl text-base font-normal text-base-700">Tenggat waktu Transfer:</p>
                        <p class="font-display text-2xl font-bold text-danger">00.28.12</p>
                    </div>
                </div>
            </form>
            <div class="flex">
                <x-atoms.button href="rincian2" status="solid" class="w-full sm:ml-auto sm:w-auto text-center">Saya sudah membayar</x-atoms.button>
            </div>
        </div>
    </section>
</x-layouts.container>