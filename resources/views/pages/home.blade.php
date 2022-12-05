<x-layouts.full-row title="Aplikasi Tes Psikologi Terbaik">
{{-- Section Navbar --}}
<x-atoms.navs.homenavbar/>

{{-- Hero Landing --}}
<section class="bg-base-100 pt-[72px]">
    <div class="container mx-auto">
        <div>
            <div class="flex items-center min-h-[37rem]">
                <div class="content-center grow">
                    <h1 class="py-4 text-xl font-extrabold font-display md:text-7xl"><strong>#PilihYangCocok</strong></h1>
                    <p class="font-body font-normal text-base-600 max-w-[35rem]">Bersama Pilih Jurusan yang siap membantu kamu memilih jurusan dan karier sesuai minat dan bakatmu.</p>
                    <x-atoms.button class="bi bi-arrow-right-circle-fill mt-7"> Coba Gratis</x-atoms.button>
                </div>
                <div class="">
                    <img class="" src="{{ URL::to('/img/landing/hero.svg') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-base-100">
    <div class="container px-20 py-10 mx-auto ">
        <div class=" container mx-auto flex justify-between text-center bg-gradient-to-r from-base-100 via-warning/25 to-base-100 rounded-[1.5rem] p-10 py-14">
            <strong class="mx-auto text-xl">Ayo dapatkan tawaran menarik dari kami!</strong>
            <button class="mx-auto text-xl font-bold font-body text-primary-500">50% Discount</button>
        </div>
    </section>
</section>

{{-- Fun Fact --}}

<section class="  bg-secondary-100  mb-4">
    <div class="container flex items-center justify-between mx-auto mb-10">
        <div class="self-start ">
            <img src="{{ asset('img/global/bro.png')}}" alt="Frame">
        </div>
      <div class="self-end w-[554px] px-10 py-16 mx-auto text-left ">
        <h1 class="col-span-4 col-start-2 text-4xl font-bold text-base-800">Tahukah kamu?</h1>
        <p class="col-span-4 col-start-2 pt-6 text-base-600">Berdasarkan data 20** kualitas pendidikan di indonesia cukup rendah loh, hal tersebut dikarenakan 7 dari 10 pelajar di indonesia mengaku salah dalam memilih Jurusan-nya</p>
        <p class="col-span-4 col-start-2 pt-6 text-base-600">Apakah kamu salah satu diantaranya?</p>
      </div>

  </div>
    <div class=" text-center my-6 ">
        <h1 class="col-span-4 col-start-2 text-4xl font-bold text-base-800">Sekolah Menjadi Salah Satu Faktor Penentu</h1>
        <p class="col-span-4 col-start-2 pt-6 text-base-600">Sekolah menjadi salah satu pionir penentu kesuksesan Pelajar di Indonesia loh!</p>
    </div>

    <x-atoms.button size="default" status="solid" class="mx-auto">
        Lihat Semua
    </x-atoms.button>
</section>
{{-- <section id="funFact">
    <div class=" flex flex-col  bg-secondary-100  mb-4" >
        <div class=" container flex items-center justify-between mx-auto">

            <div class="row w-[400px] h-[400px]">
                <img src="{{ asset('img/global/bro.png')}}" alt="Frame">
            </div>
            
            <div class="">
                <h1 class="col-span-4 col-start-2 text-4xl font-bold text-base-800">Tahukah kamu?</h1>
                <p class="col-span-4 col-start-2 pt-6 text-base-600">Berdasarkan data 20** kualitas pendidikan di indonesia cukup rendah loh, hal tersebut dikarenakan 7 dari 10 pelajar di indonesia mengaku salah dalam memilih Jurusan-nya</p>
                <p class="col-span-4 col-start-2 pt-6 text-base-600">Apakah kamu salah satu diantaranya?</p>
            </div>
            
        </div>


    </div>

</section> --}}


{{-- Section benefit --}}
<section id="benefit">
    <div class="flex flex-col text-center bg-secondary-100" >
        <div class="py-[100px]">
            <div class="grid grid-cols-6">
                <h1 class="col-span-4 col-start-2 text-4xl font-bold text-base-800">Keuntungan yang bisa kamu dapat</h1>
                <p class="col-span-4 col-start-2 pt-6 text-base-600">Kami Pilih Jurusan berkomitmen memajukan Pendidikan Indonesia melalui beberapa layanan dan produk yang cukup menarik, demi mewujudkan Indonesia yang maju dan Indonesia yang sejahtera</p>
            </div>

            <div class="container mx-auto">
                <div class="grid grid-cols-1 pt-5 md:grid-cols-2 xl:grid-cols-3 px-14">

                    <div class="p-3">
                        <div class="h-full border border-solid shadow-[0px_1px_8px_rgba(0,0,0,0.12)] p-9 rounded-[36px] bg-light-100 border-light-300">
                            <div class="justify-center p-3 mx-auto w-14 h-14 bg-[#FFDF64] item-center rounded-3xl">
                                <div class="mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                        <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                        <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                        <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                    </svg>
                                </div>
                            </div>
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
                            <div class="justify-center p-3 mx-auto w-14 h-14 bg-[#FFDF64] item-center rounded-3xl">
                                <div class="mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                    </svg>
                                </div>
                            </div>
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
                            <div class="justify-center p-3 mx-auto w-14 h-14 bg-[#FFDF64] item-center rounded-3xl">
                                <div class="mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                    </svg>
                                </div>
                            </div>
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
                            <div class="justify-center p-3 mx-auto w-14 h-14 bg-[#FFDF64] item-center rounded-3xl">
                                <div class="mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cup-hot" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6H.5ZM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5ZM2.64 13.825 1.123 7h11.754l-1.517 6.825A1.5 1.5 0 0 1 9.896 15H4.104a1.5 1.5 0 0 1-1.464-1.175Z"/>
                                        <path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8Zm3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8Zm3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8Z"/>
                                    </svg>
                                </div>
                            </div>
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
                            <div class="justify-center p-3 mx-auto w-14 h-14 bg-[#FFDF64] item-center rounded-3xl">
                                <div class="mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                    </svg>
                                </div>
                            </div>
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
                            <div class="justify-center p-3 mx-auto w-14 h-14 bg-[#FFDF64] item-center rounded-3xl">
                                <div class="mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                        <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                    </svg>
                                </div>
                            </div>
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
        <div class="mx-auto w-full h-full bg-[#F9F7EA] p-16">
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


            <div class="grid grid-cols-1 gap-5 px-16 pt-5 pb-10 mx-aut sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <div class= "mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100 lg:block sm:hidden">
                    <div class="relative h-[200px]">
                        <img class="absolute w-full h-full grayscale" src="https://source.unsplash.com/360x200?programming" alt="">
                        <div class="absolute bottom-0 w-full overflow-hidden text-center bg-dark-100/[.7] "><strong class="text-light-100">Kuota habis</strong></div>
                    </div>
                    <div class="p-5">
                        <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Kegiatan</span>
                        <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">Keseruan Belajar Di Pilih Jurusan</h5>
                        <p class="mb-3 font-normal text-gray-700">Sharing, curhat, dan bahkan bisa ngobrol prihal masalahmu dengan kakak coach profesional...</p>
                        <div><i class="pr-2 bi bi-calendar-week"></i> 20 Oktober - 31 Oktober 2022</div>
                        <div class="mb-5"><i class="pr-2 bi bi-pin-map-fill"></i> Online</div>

                        <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
                    </div>
                </div>
                <div class="mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100">
                    <div class="relative h-[200px]">
                        <img class="absolute w-full h-full grayscale" src="https://source.unsplash.com/360x200?programming" alt="">
                        <div class="absolute bottom-0 w-full overflow-hidden text-center bg-dark-100/[.7]"><strong class="text-light-100">Kuota habis</strong></div>
                    </div>
                    <div class="p-5">
                        <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Artikel</span>
                        <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">PJ Fest 2022</h5>
                        <p class="mb-3 font-normal text-gray-700">Festival yang rutin diadakan tiap tahunnya dengan mengundang bebrapa speaker dan Influencer terkemuka yang dapat membantu...</p>

                        <div><i class="pr-2 bi bi-person-fill"></i> Pilih jurusan</div>
                        <div class="mb-5"><i class="pr-2 bi bi-hdd-stack"></i> Education</div>
                        <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
                    </div>
                </div>
                <div class="mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100">
                    <div class="relative h-[200px]">
                        <img class="absolute w-full h-full" src="https://source.unsplash.com/360x200?programming" alt="">
                    </div>
                    <div class="p-5">
                        <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Kegiatan</span>
                        <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">Keseruan Belajar Di Pilih Jurusan</h5>
                        <p class="mb-3 font-normal text-gray-700">Sharing, curhat, dan bahkan bisa ngobrol prihal masalahmu dengan kakak coach profesional...</p>
                        <div><i class="pr-2 bi bi-calendar-week"></i> 20 Oktober - 31 Oktober 2022</div>
                        <div class="mb-5"><i class="pr-2 bi bi-pin-map-fill"></i> Online</div>
                         <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
                    </div>
                </div>
                <div class="mt-5 overflow-hidden shadow-lg rounded-2xl bg-light-100">
                    <div class="relative h-[200px]">
                        <img class="absolute w-full h-full" src="https://source.unsplash.com/360x200?programming" alt="">

                    </div>
                    <div class="p-5">
                        <span class="px-6 py-1 font-semibold border-2 rounded-full border-primary-500 text-primary-500">Kegiatan</span>
                        <h5 class="mt-4 mb-2 text-2xl font-bold tracking-tight text-base-900">Keseruan Belajar Di Pilih Jurusan</h5>
                        <p class="mb-3 font-normal text-gray-700">Sharing, curhat, dan bahkan bisa ngobrol prihal masalahmu dengan kakak coach profesional...</p>
                       <div><i class="pr-2 bi bi-calendar-week"></i> 20 Oktober - 31 Oktober 2022</div>
                        <div class="mb-5"><i class="pr-2 bi bi-pin-map-fill"></i> Online</div>
                        <a class="text-sm font-semibold text-primary-500 hover:underline" href="#">Lebih lanjut...</a>
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
            <div class="pb-10 mx-auto font-bold leading-6  font-body ml-10w-full lg:w-10/12 xl:w-9/12">
                  <h2 class="font-normal text-base-500">Layanan kami telah digunakan oleh banyak mitra</h2>
            </div>
            <div class="grid grid-cols-2 pt-5 md:grid-cols-1 xl:grid-cols-5 px-14">
                <img src="{{ asset('img/landing/card-partner1.png')}}" alt="Frame">
                <img src="{{ asset('img/landing/card-partner2.png')}}" alt="Frame">
                <img src="{{ asset('img/landing/card-partner1.png')}}" alt="Frame" class="hidden lg:block">
                <img src="{{ asset('img/landing/card-partner2.png')}}" alt="Frame"  class="hidden lg:block">
                <img src="{{ asset('img/landing/card-partner1.png')}}" alt="Frame"  class="hidden lg:block">
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
