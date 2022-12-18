<x-layouts.full-row title="Transction History">
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
        <div class="border p-4 rounded-2xl">
            <div class ="flex flex-row items-center gap-3 ">
                 <img class="w-28 rounded-3xl aspect-square" src="{{ asset('img/global/stonipe.png') }}" alt="Frame">
                 <h1 class="text-lg text-base-800 border-b-2">Paket Penjurusan IPA/IPS</h1>
            </div>
            <div class="flex flex-row justify-between items-center  pt-4">
                <p class="font-bold">29 November 2022 , 14:16</p>
                <p class="font-bold">PJ01202211290001</p>
            </div>
            <p class="text-3lg pt-4">Rp60.000</p>
            <div></div>
        </div>
    </div>

</x-layouts.full-row>