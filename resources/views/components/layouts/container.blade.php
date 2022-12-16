@props(['class' => ''])

<x-layouts.base class=" {{ $class }}">

    <x-atoms.navs.dashboardnav />

    <div class="min-h-screen pt-20 bg-light-200">
        <div class="max-w-screen-xl p-8 mx-auto">
            {{ $slot }}
        </div>
    </div>

    {{-- widget --}}
    <x-atoms.cornerwidget />


    {{-- <x-atoms.navs.homefooter/> --}}
</x-layouts.base>
