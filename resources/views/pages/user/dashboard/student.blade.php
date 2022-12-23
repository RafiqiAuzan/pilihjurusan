<x-layouts.container title="Dashboard">

    <section class="bg-light-200 pb-1">
        <div class="container mx-auto">
            <form class="bg-light-100 p-6 rounded-3xl mb-10">
                <h1 class="text-center text-[25px]">coming soon</h1>
            </form>
            <form class="bg-light-100 p-20 rounded-3xl mb-10">
                <h1 class="text-center text-[25px]">coming soon</h1>
            </form>

            <form class="bg-light-100 p-8 rounded-3xl mb-10">
                <h1 class="text-center lg:text-left font-display font-bold text-[36px] mb-7 lg:ml-4">Dapat Dibeli</h1>
                <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 gap-6">
                    <div class="flex flex-row mx-auto">
                        <div class="flex flex-col border border-solid p-3 gap-3 rounded-3xl bg-light-100 border-light-400">
                            <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                            <h1 class=" font-display text-base font-bold">
                                Paket IPA/IPS
                            </h1>
                            <div class="sm:flex gap-2">
                                <p class="text-base font-normal text-danger line-through">
                                    Rp.150.000
                                </p>
                                <p class="text-base text-base-800 font-semibold">
                                    Rp.60.000,-
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row mx-auto">
                        <div class="flex flex-col border border-solid p-3 gap-3 rounded-3xl bg-light-100 border-light-400">
                            <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                            <h1 class=" font-display text-base font-bold">
                                Paket kuliah Karier
                            </h1>
                            <div class="sm:flex gap-2">
                                <p class="text-base font-normal text-danger line-through">
                                    Rp.150.000
                                </p>
                                <p class="text-base text-base-800 font-semibold">
                                    Rp.60.000,-
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="bg-light-100 p-8 rounded-3xl">
                <h1 class="text-center lg:text-left font-display font-bold text-[36px] lg:ml-4">Layanan Tersedia</h1>
                {{-- multi tab --}}
                <div class="my-3" x-data="{ tab: 'psikotes'}">
                    <div class="text-center border-b border-light-400 border-solid mb-4 mx-4">
                        <ul class="flex flex-wrap gap-2">
                            <li class="mr-2 last:mr-0">
                                <button class="hover:text-primary-500 p-2" :class="{'text-primary-500 border-primary-500 inline-block border-b-2 active font-semibold': tab == 'psikotes'}" @click="tab = 'psikotes'">Psikotes</button>
                            </li>
                            <li class="mr-2 last:mr-0">
                                <button class="hover:text-primary-500 p-2" :class="{'text-primary-500 border-primary-500 inline-block border-b-2 active font-semibold': tab === 'coaching'}" @click="tab = 'coaching'">Coaching</button>
                            </li>
                            <li class="mr-2 last:mr-0">
                                <button class="hover:text-primary-500 p-2" :class="{'text-primary-500 border-primary-500 inline-block border-b-2 active font-semibold': tab == 'workshop'}" @click="tab = 'workshop'">Workshop</button>
                            </li>
                        </ul>
                    </div>
                    {{-- Tab Psikotes --}}
                    <div x-show="tab === 'psikotes'" x-cloak>   
                        <div class="grid grid-cols-2 lg:grid-cols-4 md:grid-cols-3 gap-6">
                            <div class="flex flex-row mx-auto">
                                <div class="flex flex-col border border-solid p-3 rounded-3xl bg-light-100 border-light-400">
                                    <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                                    <h1 class=" font-display text-base font-bold mt-3">
                                        Tes MBTI
                                    </h1>
                                    <p class="font-body text-xs text-dark-500">
                                        Layanan Gratis
                                    </p>
                                    <div class="flex gap-2 mt-3">
                                        <svg class=" bg-[#C6F69E] rounded-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                        <p class="text-xs font-normal text-dark-100">
                                            Akses selamanya
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row mx-auto">
                                <div class="flex flex-col border border-solid p-3 rounded-3xl bg-light-100 border-light-400">
                                    <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                                    <h1 class=" font-display text-base font-bold mt-3">
                                        Tes Kepribadian
                                    </h1>
                                    <p class="font-body text-xs text-dark-500">
                                        Kuliah Karier
                                    </p>
                                    <div class="flex gap-2 mt-3">
                                        <svg class=" bg-[#C6F69E] rounded-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                        <p class="text-xs font-normal text-dark-100">
                                            Akses selamanya
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row mx-auto">
                                <div class="flex flex-col border border-solid p-3 rounded-3xl bg-light-100 border-light-400">
                                    <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                                    <h1 class=" font-display text-base font-bold mt-3">
                                        Tes Minat
                                    </h1>
                                    <div class="flex gap-6">
                                        <p class="font-body text-xs text-dark-500">
                                            IPA/IPS
                                        </p>
                                        <p class="font-body text-xs text-dark-500">
                                            Kuliah Karier
                                        </p>
                                    </div>
                                    <div class="flex gap-2 mt-3">
                                        <svg class=" bg-[#C6F69E] rounded-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                        <p class="text-xs font-normal text-dark-100">
                                            Berakhir 365 hari lagi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row mx-auto">
                                <div class="flex flex-col border border-solid p-3 rounded-3xl bg-light-100 border-light-400">
                                    <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                                    <h1 class=" font-display text-base font-bold mt-3">
                                        Tes IQ
                                    </h1>
                                    <div class="flex gap-6">
                                        <p class="font-body text-xs text-dark-500">
                                            IPA/IPS
                                        </p>
                                        <p class="font-body text-xs text-dark-500">
                                            Kuliah Karier
                                        </p>
                                    </div>
                                    <div class="flex gap-2 mt-3">
                                        <svg class=" bg-[#C6F69E] rounded-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                        <p class="text-xs font-normal text-dark-100">
                                            Berakhir 364 hari lagi
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row mx-auto">
                                <div class="flex flex-col border border-solid p-3 rounded-3xl bg-light-100 border-light-400">
                                    <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                                    <h1 class=" font-display text-base font-bold mt-3">
                                        Tes Kemampuan Kerja
                                    </h1>
                                    <p class="font-body text-xs text-dark-500">
                                        Kuliah Karier
                                    </p>
                                    <div class="flex gap-2 mt-3">
                                        <svg class=" bg-[#C6F69E] rounded-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                        <p class="text-xs font-normal text-dark-100">
                                            Akses selamanya
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row mx-auto">
                                <div class="flex flex-col border border-solid p-3 rounded-3xl bg-light-100 border-light-400">
                                    <a href="#"><img class=" w-[198px] h-[190px] rounded-3xl" src="{{ URL::to('img/global/stonipe.png') }}"></a>
                                    <h1 class=" font-display text-base font-bold mt-3">
                                        Tes Penjurusan IPA/IPS
                                    </h1>
                                    <p class="font-body text-xs text-dark-500">
                                        IPA/IPS
                                    </p>
                                    <div class="flex gap-2 mt-3">
                                        <svg class=" bg-[#C6F69E] rounded-full" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                        <p class="text-xs font-normal text-dark-100">
                                            Berakhir 364 hari lagi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tab Coaching --}}
                    <div x-show="tab === 'coaching'" x-cloak>
                        
                    </div>
                    {{-- Tab Workshop --}}
                    <div x-show="tab === 'workshop'" x-cloak>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.container>