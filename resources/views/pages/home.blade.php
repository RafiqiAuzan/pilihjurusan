<x-layouts.landing title="Blog" class="text-center">

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
    @dateTime($date)
    <br>
    @day($date)
    <br>
    @month($date)
    <br>
    @year($date)
    <br>
    @shortDate($date)
    <br>
    @fullDate($date)
    <br>
    @shortTime($date)
    <br>
    @fullTime($date)
    <br>
    @dateDiff($date)
    <br>
</x-layouts.landing>
