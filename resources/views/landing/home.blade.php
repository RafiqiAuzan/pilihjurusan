<x-layout.landing title="Blog" class="text-center">

    <livewire:another-component />

    <h1>Hello, World!</h1>
    <p>My new page</p>

    <div class="my-5">
        <a class="border-primary-500 border-2 hover:bg-light-100 bg-secondary-500 rounded-md p-2"
            href="{{ url('blog') }}">Ke
            Blog</a>
    </div>

    <x-button size="lg" status="outline" class="mx-auto my-2">
        <i class="bi bi-arrow-right-circle-fill"></i> Submit
    </x-button>

    <livewire:post-likes class="mx-auto my-4" />
</x-layout.landing>
