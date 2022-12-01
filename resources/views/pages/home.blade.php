<x-layouts.full-row title="Aplikasi Tes Psikologi Terbaik">
    {{-- Section Navbar --}}
    <x-atoms.navs.homenavbar />

{{-- Promo Card and Hero --}}
<section class="grid">
    <section class="bg-[#FAF9F7] pt-[84px] lg:pt-0 lg:order-last">
        <div class="container mx-auto py-7 lg:py-10 lg:px-20">
            <div class="lg:flex mx-auto justify-between text-center bg-gradient-to-r from-[#FAF9F7] via-warning/50 to-[#FAF9F7] pt-[5px] pb-[25px] lg:py-[40px] lg:mb-[125px]">
                <p class=" mx-auto font-display not-italic font-bold text-[16px] text-[#151718] lg:text-xl md:text-base-900"><strong>Ayo dapatkan tawaran menarik dari kami!</strong></p>
                <button class="mx-auto font-body not-italic font-bold lg:text-xl text-[12px] text-primary-500 lg:mt-0 mt-[14px]">50% Discount</button>
            </div>
        </div>
    </section>

    <section class="bg-base-100 lg:pt-[72px]">
        <div class="container mx-auto">
            <div class="lg:flex items-center min-h-[37rem]">
                <div class="order-2 ">
                    <img class="mx-auto w-[320px] h-[320px] md:w-[360px] md:h-[360px]" src="{{ URL::to('/img/landing/hero.svg') }}">
                </div>
                <div class="content-center lg:grow">
                    <h1 class="font-display not-italic font-extrabold text-4xl text-[#262829] pb-5 lg:text-[64px] lg:leading-[100%]"><strong>#PilihYangCocok</strong></h1>
                    <p class="font-body not-italic font-normal text-base text-base-600 max-w-[372px] sm:max-w-[35rem]">Bersama Pilih Jurusan yang siap membantu kamu memilih jurusan dan karier sesuai minat dan bakatmu.</p>
                    <x-atoms.button class="lg:w-auto w-full mt-[38px] mb-14">
                        <i class="bi bi-arrow-right-circle-fill"></i> Coba Gratis
                        </x-atoms.button>
                </div>
            </div>
        </div>
    </section>
</section>

    {{-- Fun Fact --}}


{{-- Section benefit --}}
    <section id="benefit">
        <div class="flex flex-col text-center bg-[#F9F7EA]" >
            <div class="py-[100px]">
                <div class="grid grid-cols-6">
                    <h1 class="col-span-4 col-start-2 text-4xl font-bold text-base-800">Keuntungan yang bisa kamu dapat</h1>
                    <p class="col-span-4 col-start-2 pt-6 text-base-600">Kami Pilih Jurusan berkomitmen memajukan Pendidikan Indonesia melalui beberapa layanan dan produk yang cukup menarik, demi mewujudkan Indonesia yang maju dan Indonesia yang sejahtera</p>
                </div>

                <div class="container mx-auto">
                    <div class="grid grid-cols-1 pt-5 md:grid-cols-2 xl:grid-cols-3 px-14">

                        <div class="p-3">
                            <div class="h-full border border-solid shadow-[0px_1px_8px_rgba(0,0,0,0.12)] p-9 rounded-[36px] bg-light-100 border-light-300">

                                <i class="fas fa-money-bill-wave fa-xl bg-[#FFDF64] rounded-3xl justify-center p-3 mx-auto w-9 h-9 item-center"></i>

                                <h1 class="p-3 text-2xl font-bold text-center">
                                    Harga Terjangkau
                                </h1>

                                <p class="text-sm text-base-600">
                                    Sebanding dengan harga Kopi Favoritmu, kamu dapat menikmati seluruh layanan Pilih Jurusan
                                </p>

                            </div>
                        </div>

                        <div class="p-3">
                            <div class="h-full border border-solid shadow-[0px_1px_8px_rgba(0,0,0,0.12)] p-9 rounded-[36px] bg-light-100 border-light-300">

                                <i class="far fa-calendar-check fa-xl bg-[#FFDF64] rounded-3xl justify-center p-3 mx-auto w-9 h-9 item-center"></i>

                                <h1 class="p-3 text-2xl font-bold text-center">
                                    Hasil Cepat dan Akurat
                                </h1>

                                <p class="text-sm text-base-600">
                                    Hasil yang cepat dan akurasi hasil yang valid sesuai dengan kode etik psikologi serta uji yang dilakukan ahli
                                </p>

                            </div>
                        </div>

                        <div class="p-3">
                            <div class="h-full border border-solid shadow-[0px_1px_8px_rgba(0,0,0,0.12)] p-9 rounded-[36px] bg-light-100 border-light-300">

                                <i class="far fa-calendar-check fa-xl bg-[#FFDF64] rounded-3xl justify-center p-3 mx-auto w-9 h-9 item-center"></i>

                                <h1 class="p-3 text-2xl font-bold text-center">
                                    Akun Aktif Permanen
                                </h1>

                                <p class="text-sm text-base-600">
                                    Setiap akun memiliki masa aktif yang sangat panjang bahkan dapat dikatakan permanen
                                </p>

                            </div>
                        </div>

                        <div class="p-3">
                            <div class="h-full border border-solid shadow-[0px_1px_8px_rgba(0,0,0,0.12)] p-9 rounded-[36px] bg-light-100 border-light-300">

                                <i class="fas fa-mug-hot fa-xl bg-[#FFDF64] rounded-3xl justify-center p-3 mx-auto w-9 h-9 item-center font-light"></i>

                                <h1 class="p-3 text-2xl font-bold text-center">
                                    Mudah Diakses
                                </h1>

                                <p class="text-sm text-base-600">
                                    Sebanding dengan harga Kopi Favoritmu, kamu dapat menikmati seluruh layanan Pilih Jurusan
                                </p>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="h-full border border-solid shadow-[0px_1px_8px_rgba(0,0,0,0.12)] p-9 rounded-[36px] bg-light-100 border-light-300">

                                <i class="fas fa-user-group fa-xl bg-[#FFDF64] rounded-3xl justify-center p-3 mx-auto w-9 h-9 item-center"></i>

                                <h1 class="p-3 text-2xl font-bold text-center">
                                    SDM Profesional
                                </h1>

                                <p class="text-sm text-base-600">
                                    Hasil yang cepat dan akurasi hasil yang valid sesuai dengan kode etik psikologi serta uji yang dilakukan ahli
                                </p>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="h-full border border-solid shadow-[0px_1px_8px_rgba(0,0,0,0.12)] p-9 rounded-[36px] bg-light-100 border-light-300">

                                <i class="far fa-calendar-check fa-xl bg-[#FFDF64] rounded-3xl justify-center p-3 mx-auto w-9 h-9 item-center"></i>

                                <h1 class="p-3 text-2xl font-bold text-center">
                                    Sample
                                </h1>

                                <p class="text-sm text-base-600">
                                    Sample
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section Message --}}
    <section>
        <div class="flex flex-col items-center justify-center gap-12 py-32" px="100px">
            <div class="flex flex-col items-center justify-center gap-12">
                <div class="items-center gap-6">
                    <p class="w-9/12 pb-5 mx-auto text-4xl font-bold text-center font-display text-base-800 lg:w-full">
                        {{ __('Seperti apa sistem Bimbingannya?') }}
                    </p>
                    <p class="hidden max-w-5xl text-base not-italic font-normal text-center lg:block h-11 font-body text-base-600">
                        {{ __('sistem bimbingan insentif akan sangat membantu') }}
                    </p>
                </div>
                <x-atoms.youtube src="https://www.youtube.com/embed/8Ea4oq8qFtM" />
            </div>
        </div>
    </section>



    {{-- Section activities --}}
    <section id="aktivitas " class="">
        <div class="mx-auto w-full h-full bg-[#F9F7EA] p-10">
            <h3 class="mb-6 text-3xl font-bold text-center text-base-800">Yang terbaru dari kami</h3>
            <p class="text-lg font-normal text-center text-base-600">Cerita baru, kegiatan, dan keseruan lainnya, Baca Blog terbaru kami disini.</p>

            <div class="container mx-auto">
                <div class="flex justify-center gap-3 flex-cols mt-7">
                    <x-atoms.button size="default" status="solid" class="">
                        Terbaru
                    </x-atoms.button>
                    <x-atoms.button size="default" status="outline" class="">
                        Artikel
                    </x-atoms.button>
                    <x-atoms.button size="default" status="outline" class="">
                        kegiatan
                    </x-atoms.button>
                </div>
            </div>

            <div class="container mx-auto">
                <div class="grid grid-cols-1 gap-5 px-10 pt-5 pb-10 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    <div class="mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100">
                        <div class="relative h-[200px]">
                            <img class="absolute w-full h-full grayscale" src="https://source.unsplash.com/360x200?programming" alt="">
                            <div class="absolute bottom-0 w-full overflow-hidden text-center bg-dark-100/[.7] "><strong class="text-light-100">Kuota habis</strong></div>
                        </div>
                        <div class="p-5">
                            <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Kegiatan</span>
                            <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">Keseruan Belajar Di Pilih Jurusan</h5>
                            <p class="mb-3 font-normal text-gray-700">Sharing, curhat, dan bahkan bisa ngobrol prihal masalahmu dengan kakak coach profesional...</p>
                            <div><i class="pr-2 far fa-calendar-check text-primary-500"> </i> 20 Oktober - 31 Oktober 2022</div>
                            <div class="mb-5"><i class="pr-2 fas fa-map-pin text-primary-500"></i> Online</div>

                            <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
                        </div>
                    </div>
                    <div class="hidden mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100 lg:block">
                        <div class="relative h-[200px]">
                            <img class="absolute w-full h-full grayscale" src="https://source.unsplash.com/360x200?programming" alt="">
                            <div class="absolute bottom-0 w-full overflow-hidden text-center bg-dark-100/[.7]"><strong class="text-light-100">Kuota habis</strong></div>
                        </div>
                        <div class="p-5">
                            <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Artikel</span>
                            <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">PJ Fest 2022</h5>
                            <p class="mb-3 font-normal text-gray-700">Festival yang rutin diadakan tiap tahunnya dengan mengundang bebrapa speaker dan Influencer terkemuka yang dapat membantu...</p>

                            <div><i class="pr-2 fas fa-user text-primary-500"></i> Pilih jurusan</div>

                            <div class="mb-5"><i class="pr-2 fas fa-bars text-primary-500"></i> Education</div>

                            <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
                        </div>
                    </div>
                    <div class="hidden mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100 lg:block">
                        <div class="relative h-[200px]">
                            <img class="absolute w-full h-full" src="https://source.unsplash.com/360x200?programming" alt="">
                        </div>
                        <div class="p-5">
                            <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Kegiatan</span>
                            <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">Keseruan Belajar Di Pilih Jurusan</h5>
                            <p class="mb-3 font-normal text-gray-700">Sharing, curhat, dan bahkan bisa ngobrol prihal masalahmu dengan kakak coach profesional...</p>
                            <div><i class="pr-2 far fa-calendar-check text-primary-500"> </i> 20 Oktober - 31 Oktober 2022</div>
                            <div class="mb-5"><i class="pr-2 fas fa-map-pin text-primary-500"></i> Online</div>
                            <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
                        </div>
                    </div>
                    <div class="hidden mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100 lg:block">
                        <div class="relative h-[200px]">
                            <img class="absolute w-full h-full" src="https://source.unsplash.com/360x200?programming" alt="">

                        </div>
                        <div class="p-5">
                            <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Kegiatan</span>
                            <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">Keseruan Belajar Di Pilih Jurusan</h5>
                            <p class="mb-3 font-normal text-gray-700">Sharing, curhat, dan bahkan bisa ngobrol prihal masalahmu dengan kakak coach profesional...</p>
                            <div><i class="pr-2 far fa-calendar-check text-primary-500"> </i> 20 Oktober - 31 Oktober 2022</div>
                            <div class="mb-5"><i class="pr-2 fas fa-map-pin text-primary-500"></i> Online</div>
                            <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
                        </div>
                    </div>
                </div>
            </div>

            <x-atoms.button size="default" status="solid" class="mx-auto">
                Lihat Semua
            </x-atoms.button>
    </section>

    {{-- Section testimoni --}}
    <section>
        <div class="w-full h-full bg-[#FAF9F7] flex items-center justify-between">
            <div class="self-start px-10 py-16 mx-auto text-left lg:text-center">
                <div class="mt-20">
                    <h1 class="pb-5 text-4xl font-bold text-base-800">Pilih Jurusan Disukai Banyak Orang loh!</h1>
                </div>
                <div class="pb-10 mx-auto font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                    <p class="font-normal text-base-500">Kami Pilih Jurusan berkomitmen memajukan Pendidikan Indonesia melalui beberapa layanan dan produk yang cukup menarik, demi mewujudkan Indonesia yang maju dan Indonesia yang sejahtera</p>
                </div>
                <div class="container px-10">
                    <div class="grid grid-cols-1 pt-5 lg:grid-cols-3">
                        <div class="p-5 mx-3 my-5 text-left border-solid shadow-lg rounded-3xl bg-light-100 border-light-300">
                            <div class="p-4">
                                <img src="{{ asset('img/global/junaedi.webp')}}" alt="">
                                <h1 class="py-2 text-2xl font-bold font-display text-base-800">Junaedi</h1>
                                <p class="text-xs font-body text-base-600">Bintang 5 untuk layanan yang telah aku dapatkan, karena aku menjadi tahu jurusan apa yang cocok untukku.</p>
                            </div>
                        </div>
                        <div class="p-5 mx-3 my-5 text-left border-solid shadow-lg rounded-3xl bg-light-100 border-light-300">
                            <div class="p-4">
                                <img src="{{ asset('img/global/tono.webp')}}" alt="">
                                <h1 class="py-2 text-2xl font-bold font-display text-base-800">Tono Dwi Saputro</h1>
                                <p class="text-xs font-body text-base-600">Layanan yang dimilikinya sangat membantuku yang saat ini sedang kesulitan mencari jurusan.</p>
                            </div>
                        </div>
                        <div class="p-5 mx-3 my-5 text-left border-solid shadow-lg rounded-3xl bg-light-100 border-light-300">
                            <div class="p-4">
                                <img src="{{ asset('img/global/eka.webp')}}" alt="">
                                <h1 class="py-2 text-2xl font-bold font-display text-base-800">Eka Nurjaya</h1>
                                <p class="text-xs font-body text-base-600">Luar Biasa, Mentornya sangar luar biasa ketika menjelaskan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Section partner --}}
    <section>
        <div class="w-full h-full bg-[#FAF9F7] flex items-center space-between">
            <div class="self-start px-10 py-8 mx-auto text-left lg:text-center">
                <div class="mt-10 lg:mt-20">
                    <h1 class="pb-5 text-4xl font-bold text-base-800">Mitra Yang Telah Bekerjasama</h1>
                </div>
                <div class="pb-10 mx-auto font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                    <h2 class="font-normal text-base-500">Layanan kami telah digunakan oleh banyak mitra</h2>
                </div>
                <div class="grid grid-cols-2 pt-5 md:grid-cols-1 xl:grid-cols-5 px-14">
                    <img src="{{ asset('img/landing/card-partner1.png')}}" alt="Frame">
                    <img src="{{ asset('img/landing/card-partner2.png')}}" alt="Frame">
                    <img src="{{ asset('img/landing/card-partner1.png')}}" alt="Frame" class="hidden lg:block">
                    <img src="{{ asset('img/landing/card-partner2.png')}}" alt="Frame" class="hidden lg:block">
                    <img src="{{ asset('img/landing/card-partner1.png')}}" alt="Frame" class="hidden lg:block">
                </div>
    </section>

    {{-- Section Persuation --}}
    <section class=" bg-[#FAF9F7]">
        <div class="container flex items-center justify-between mx-auto">
            <div class="self-start px-10 py-16 mx-auto text-left lg:text-center">
                <div class="mt-32">
                    <h1 class="pb-5 text-4xl font-bold text-base-800">Menarik Bukan?</h1>
                </div>
                <div class="pb-10 mx-auto font-bold leading-6 font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                    <p class="font-normal text-base-600">Tunggu apalagi? Yuk daftarkan dirimu untuk segera memulai perjalananmu dengan Pilih Jurusan!</p>
                </div>
                <x-atoms.button size="lg" status="solid" class="w-full lg:w-auto lg:mx-auto">
                    <i class="bi bi-arrow-right-circle-fill"></i> Daftar Sekarang
                </x-atoms.button>
            </div>
            <div class="self-end hidden pr-32 lg:block ">
                <img src="{{ asset('img/global/frame.webp')}}" alt="Frame">
            </div>
        </div>
    </section>

{{-- Footer --}}
<x-atoms.navs.homefooter/>

</x-layouts.full-row>

