@props([
    'icon' => '',
    'class' => '',
    'field',
])

<label @class([
    'pointer-events-none peer-placeholder-shown:text-base peer-placeholder-shown:bg-transparent flex  peer-focus:text-sm peer-focus:bg-light-100
    peer-disabled:text-base-500 max-w-[80%] text-sm bg-light-100 px-1  rounded-md transition-all',
    $errors->first($field)
        ? 'peer-placeholder-shown:text-danger/[0.5] peer-focus:text-danger text-danger'
        : 'peer-placeholder-shown:text-base-300 peer-focus:text-base-600 text-base-600',
    $class,
]) for="{{ $field }}">
    <span class="truncate max-w-full">
        @isset($icon)
            <i class="pr-1 {{ $icon }}"></i>
        @endisset
        {{ $slot }}
    </span>
</label>
