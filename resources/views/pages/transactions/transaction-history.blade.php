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
        <div class="border border-light-400 p-4 rounded-2xl">
            <div class="flex flex-row items-center gap-3 border-b border-light-400 pb-4">
                <img class="w-28 rounded-3xl aspect-square" src="{{ asset('img/global/stonipe.png') }}" alt="Frame">
                <h1 class="text-xl text-base-800 font-bold ">Paket Penjurusan IPA/IPS</h1>
            </div>
            <table class="w-full mb-4">
                <tbody class="">
                    <tr>
                        <td class="text-sm font-bold py-4">29 November 2022 , 14:16</td>
                        <td class="text-right">PJ01202211290001</td>
                    </tr>
                    <tr>
                        <td class="text-xl">Rp60.000</td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <x-atoms.button class="text-right" href="#" status="transparent">Lihat Detail</x-atoms.button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.full-row>
