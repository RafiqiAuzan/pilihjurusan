@props(['class' => ''])

<x-layouts.base class=" {{ $class }}">

    {{-- <x-atoms.navs.navbar /> --}}
    <div class="min-h-screen bg-light-200">
        {{-- There is sidebar here --}}
        <div class="flex max-w-screen-xl p-8 mx-auto">
            {{-- <aside class="flex-none w-80">
                <div class="">test</div>
            </aside> --}}
            <div class="w-full">
                <div class="">

                    {{ $slot }}
                </div>
            </div>
        </div>
        {{-- widget --}}
        <x-atoms.cornerwidget />
    </div>

    {{-- <x-atoms.navs.homefooter/> --}}
</x-layouts.base>
