<x-layouts.landing title="Aplikasi Tes Psikologi Terbaik">

    <h1>Hello, World!</h1>
    <p>My new page</p>
    <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae tempora ullam voluptatem voluptate reiciendis cumque mollitia praesentium adipisci similique consectetur. Harum praesentium quod sunt deserunt qui est explicabo, illum nihil!
    </p>
    <div class="my-5">
        <a class="border-primary-500 border-2 hover:bg-light-100 bg-secondary-500 rounded-md p-2"
            href="{{ url('blog') }}">Ke
            Blog</a>
    </div>

    <x-atoms.button size="lg" status="outline" class="mx-auto my-2">
        <i class="bi bi-arrow-right-circle-fill"></i> Submit
    </x-atoms.button>
    <livewire:sample />
</x-layouts.landing>
