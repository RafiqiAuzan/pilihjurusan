<x-layouts.full-row title="Transction History">
    <div class="flex flex-col w-full p-8 lg:rounded-3xl bg-light-100 gap-4">
        <div class="flex flex-col w-full gap-6 border-light-400">
            <div class="flex flex-row gap-4 items-center">
                <i class="lg:hidden fa-solid fa-arrow-left"></i>
                <p class="font-bold text-4xl text-base-800">Riwayat Transaksi</p>
            </div>
            {{-- multi tab --}}
            <div class="my-3" x-data="{ tab: 'menungguKonfirmasi'}">
                <div class="text-center border-b border-light-400 border-solid">
                    <ul class="flex flex-wrap gap-3">
                        <li class="mr-2 last:mr-0">
                            <button class="hover:text-primary-500 py-2 text-sm" :class="{' text-primary-500 border-primary-500 inline-flex border-b-2 active font-medium': tab == 'menungguKonfirmasi'}" @click="tab = 'menungguKonfirmasi'">Menunggu Konfirmasi</button>
                        </li>
                        <li class="mr-2 last:mr-0">
                            <button class="hover:text-primary-500 py-2 text-sm" :class="{' text-primary-500 border-primary-500 inline-flex border-b-2 active font-medium': tab === 'berhasil'}" @click="tab = 'berhasil'">Berhasil</button>
                        </li>
                        <li class="mr-2 last:mr-0">
                            <button class="hover:text-primary-500 py-2 text-sm" :class="{' text-primary-500 border-primary-500 inline-flex border-b-2 active font-medium': tab == 'gagal'}" @click="tab = 'gagal'">Gagal</button>
                        </li>
                    </ul>
                </div>
                {{-- Tab Menunggu Konfirmasi --}}
                <div x-show="tab === 'menungguKonfirmasi'" x-cloak>
                    <div class="border border-light-400 p-4 rounded-2xl mt-8">
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
                                    <td></td>
                                    <td class="text-right">
                                        <x-atoms.button class="text-right" href="#" status="transparent">Lihat Detail</x-atoms.button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="border border-light-400 p-4 rounded-2xl mt-8">
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
                                    <td></td>
                                    <td class="text-right">
                                        <x-atoms.button class="text-right" href="#" status="transparent">Lihat Detail</x-atoms.button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="border border-light-400 p-4 rounded-2xl mt-8">
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
                                    <td class="text-base-900 font-semibold text-right">Menunggu Konfirmasi</td>
                                </tr>
                                <tr>
                                    <td class=""></td>
                                    <td class="text-right pt-4">
                                        <x-atoms.button class="" href="#" status="transparent">Lihat Detail</x-atoms.button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Pagination --}}
                     <div class="flex justify-center lg:justify-end py-4">
                        <a href="#" class="flex items-center justify-center px-4 py-2 mx-1 text-gray-500 capitalize bg-base-200 rounded-md cursor-not-allowed rtl:-scale-x-100 dark:bg-gray-800 dark:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            1
                        </a>

                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            2
                        </a>

                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            3
                        </a>

                        <a href="#" class=" hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            4
                        </a>

                        <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            5
                        </a>
                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            ...
                        </a>
                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            50
                        </a>

                        <a href="#" class="flex items-center justify-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md rtl:-scale-x-100 dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- Tab Berhasil --}}
                <div x-show="tab === 'berhasil'" x-cloak>
                    <div class="flex flex-col items-center justify-center gap-5 mt-8">
                        <p class="font-normal lg:text-2xl sm:text-base text-base-800">Sepertinya kamu belum beli paket apapun nih</p>
                        <img src="{{ asset('img/global/School.svg')}}" alt="School logo">
                        <p class="font-bold lg:text-base sm:text-xs text-center text-base-600">Mari kita bantu kamu dengan layanan yang telah kami sediakan!</p>
                        <x-atoms.button size="default" class="lg:w-auto w-full">
                            {{ __('Beli Sekarang') }}
                        </x-atoms.button>
                    </div>
                </div>

                {{-- Tab Gagal --}}
                <div x-show="tab === 'gagal'" x-cloak>
                    <div class="border border-light-400 p-4 rounded-2xl mt-8">
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
                                    <td class=""></td>
                                    <td class="text-base text-base-400 font-normal text-right pt-4">Kadaluwarsa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="border border-light-400 p-4 rounded-2xl mt-8">
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
                                    <td class=""></td>
                                    <td class="text-base text-base-400 font-normal text-right pt-4">Bukti Pembayaran Tidak Sah</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="border border-light-400 p-4 rounded-2xl mt-8">
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
                                    <td class=""></td>
                                    <td class="text-base text-base-400 font-normal text-right pt-4">Kadaluwarsa</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    {{-- Pagination --}}
                    <div class="flex justify-center lg:justify-end py-4">
                        <a href="#" class="flex items-center justify-center px-4 py-2 mx-1 text-gray-500 capitalize bg-base-200 rounded-md cursor-not-allowed rtl:-scale-x-100 dark:bg-gray-800 dark:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            1
                        </a>

                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            2
                        </a>

                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            3
                        </a>

                        <a href="#" class=" hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            4
                        </a>

                        <a href="#" class="hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            5
                        </a>
                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            ...
                        </a>
                        <a href="#" class=" px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md sm:inline dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            50
                        </a>

                        <a href="#" class="flex items-center justify-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-base-200 rounded-md rtl:-scale-x-100 dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-500 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.full-row>

