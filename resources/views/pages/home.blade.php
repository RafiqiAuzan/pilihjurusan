<x-layouts.full-row title="Aplikasi Tes Psikologi Terbaik" class="text-center">

    <h1>Hello, World!</h1>
    <p>My new page</p>


    <div class="my-5">
        <a class="border-primary-500 border-2 hover:bg-light-100 bg-secondary-500 rounded-md p-2"
            href="{{ url('blog') }}">Ke
            Blog</a>
    </div>

    <x-atoms.button size="lg" status="outline" class="mx-auto my-2">
        <i class="bi bi-arrow-right-circle-fill"></i> Submit
    </x-atoms.button>
    <livewire:sample />

    @auth
        <p>Logged In</p>
    @else
        <p>Belum Login</p>
    @endauth

</x-layouts.full-row>
