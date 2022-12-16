@props(['class' => ''])

<x-layouts.base class=" {{ $class }}">
    <x-atoms.navs.dashboardnav />

    {{-- <x-atoms.navs.navbar /> --}}
    <div class="min-h-screen lg:py-8 bg-light-200">
        {{-- There is sidebar here --}}
        <div class="flex max-w-screen-xl mx-auto lg:p-8">
            <aside class="flex-none hidden w-80">
                <div class="">test</div>
            </aside>
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