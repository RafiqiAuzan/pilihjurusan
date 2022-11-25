<x-layouts.full-rows title="Aplikasi Tes Psikologi Terbaik">
    {{-- Hero Landing --}}
    <section class="bg-base-100 pt-[72px]">
        <div class="container mx-auto">
            <div>
                <div class="flex items-center min-h-[37rem]">
                    <div class="content-center grow">
                        <h1 class="py-4 text-xl md:text-6xl"><strong>#PilihYangCocok</strong></h1>
                        <p class="text-base-600 max-w-[35rem]">Bersama Pilih Jurusan yang siap membantu kamu memilih jurusan dan karier sesuai minat dan bakatmu.</p>
                        <x-atoms.button class="mt-7"> Coba Gratis</x-atoms.button>
                    </div>
                    <div class="">
                        <img src="{{ asset('img/landing/hero.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Promo Card --}}
    <section class="bg-base-100">
        <div class="container py-10 mx-auto">
            <div class="bg-light-100 rounded-[1.5rem] text-center p-10 py-24"><strong class="text-xl">Promo Card</strong></div>
        </div>
    </section>


    <section class="bg-base-500">
        <div class="container mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa nostrum consectetur ipsa dolores perspiciatis repellendus, tempora magnam facilis accusantium ut sint minima, maxime voluptatem unde hic dolore! Soluta, pariatur sit!
        </div>
    </section>
    <section class="bg-primary-100">
        <div class="container mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa nostrum consectetur ipsa dolores perspiciatis repellendus, tempora magnam facilis accusantium ut sint minima, maxime voluptatem unde hic dolore! Soluta, pariatur sit!
        </div>
    </section>
    <section class="bg-primary-600">
        <div class="container mx-auto">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa nostrum consectetur ipsa dolores perspiciatis repellendus, tempora magnam facilis accusantium ut sint minima, maxime voluptatem unde hic dolore! Soluta, pariatur sit!
        </div>
    </section>
        <h1>Hello, World!</h1>
        <p>My new page</p>
        <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae tempora ullam voluptatem voluptate reiciendis cumque mollitia praesentium adipisci similique consectetur. Harum praesentium quod sunt deserunt qui est explicabo, illum nihil!
        </p>
        <div class="my-5">
            <a class="p-2 border-2 rounded-md border-primary-500 hover:bg-light-100 bg-secondary-500"
                href="{{ url('blog') }}">Ke
                Blog</a>
        </div>

        <x-atoms.button size="lg" status="outline" class="mx-auto my-2">
            <i class="bi bi-arrow-right-circle-fill"></i> Submit
        </x-atoms.button>
        <livewire:sample />
    </x-layouts.full-rows>
