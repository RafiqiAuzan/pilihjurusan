@props(['class' => ''])

<x-layouts.base class=" {{ $class }}">
    {{-- <h1 class="text-2xl">Landing</h1> --}}
    {{ $slot }}
</x-layouts.base>
