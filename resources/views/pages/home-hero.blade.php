

<x-layouts.full-rows title="Aplikasi Tes Psikologi Terbaik" >

{{-- Hero --}}

<section class="bg-base-100 pt-[72px]">
    <div class="container mx-auto">
        <div>
            <div class="flex items-center min-h-[37rem]">
                <div class="content-center grow">
                    <h1 class="font-display font-extrabold py-4 text-xl md:text-7xl"><strong>#PilihYangCocok</strong></h1>
                    <p class="font-body font-normal text-base-600 max-w-[35rem]">Bersama Pilih Jurusan yang siap membantu kamu memilih jurusan dan karier sesuai minat dan bakatmu.</p>
                    <x-atoms.button class="bi bi-arrow-right-circle-fill mt-7"> Coba Gratis</x-atoms.button>
                </div>
                <div class="">
                    <img class="" src="{{ URL::to('/img/landing/hero.svg') }}">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Promo Card --}}

<section class="bg-base-100">
    <div class="container py-10 px-20 mx-auto ">
        <div class=" container mx-auto flex justify-between text-center bg-gradient-to-r from-base-100 via-warning/25 to-base-100 rounded-[1.5rem] p-10 py-14">
            <strong class="text-xl mx-auto">Ayo dapatkan tawaran menarik dari kami!</strong>
            <button class="font-body font-bold text-xl  mx-auto text-primary-500">50% Discount</button>
        </div>
    </div>
</section>

</x-layouts.full-rows>