<x-layouts.full-row title="Blank History">
    <div class="flex flex-col w-full p-8 lg:rounded-3xl bg-light-100 gap-4">
        <div class="flex flex-col w-full gap-6 border-b border-light-400">
            <div class="flex flex-row gap-4 items-center">
                <i class="lg:hidden fa-solid fa-arrow-left"></i>
                <p class="font-bold text-4xl text-base-800">Riwayat Transaksi</p>
            </div>
            {{-- multi tab --}}
            <div class="flex flex-row items-center">
                <ul class="flex flex-wrap -mb-px">
                    <li class="mr-2">
                        <a href="#" class="text-primary-500 font-medium text-sm inline-block p-4 border-b-2" aria-current="page">Menunggu Konfirmasi</a>
                    </li>
                    <li class="mr-2">
                        <a href="#" class="text-base-500 font-normal text-sm inline-block p-4 border-b-2 border-transparent">Berhasil</a>
                    </li>
                    <li class="mr-2">
                        <a href="#" class="text-base-500 font-normal text-sm inline-block p-4 border-b-2 border-transparent">Gagal</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center gap-5">
            <p class="font-normal lg:text-2xl sm:text-base text-base-800">Sepertinya kamu belum beli paket apapun nih</p>
            <img src="{{ asset('img/global/School.svg')}}" alt="School logo">
            <p class="font-bold lg:text-base sm:text-xs text-center text-base-600">Mari kita bantu kamu dengan layanan yang telah kami sediakan!</p>
            <x-atoms.button size="default" class="lg:w-auto w-full">
                {{ __('Beli Sekarang') }}
            </x-atoms.button>
        </div>
    </div>
    @vite('resources/js/swiper.js')
</x-layouts.full-row>