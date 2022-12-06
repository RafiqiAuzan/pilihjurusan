@props(['class' => ''])

<x-layouts.base class=" {{ $class }}">

    {{-- <x-atoms.navs.homenavbar/> --}}

    <div class="">
        <div class="min-h-screen">
            {{ $slot }}
        </div>
    </div>

    {{-- widget --}}
    <x-atoms.cornerwidget />


    {{-- <x-atoms.navs.homefooter/> --}}
</x-layouts.base>
