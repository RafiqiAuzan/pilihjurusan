@props(['class' => ''])

<x-layout.base class=" {{ $class }}">
    <h1 class="text-2xl">Landing</h1>
    {{ $slot }}
</x-layout.base>
