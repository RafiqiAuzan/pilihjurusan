@props([
    'size' => 'default',
    'status' => 'solid',
    'tag' => empty($href) ? 'button' : 'href',
    'class' => '',
])
<{{ $tag }} @class([
    'flex flex-row justify-center items-center border border-solid rounded-full font-bold transition',

    'text-sm leading-6 py-4 px-16 gap-4' => $size == 'lg',
    'text-sm leading-5 py-3 px-14 gap-3' => $size == 'default',
    'text-xs leading-4 py-2 px-10 gap-2' => $size == 'sm',
    'text-xs leading-4 py-2 px-9 gap-2' => $size == 'xs',

    'bg-primary-500 border-primary-500 text-base-100 hover:bg-primary-700' =>
        $status == 'solid',
    'bg-light-100 border-primary-500 text-primary-500 hover:bg-primary-500 hover:bg-opacity-10' =>
        $status == 'outline',
    'bg-light-300 border-light-200 text-base-500' => $status == 'disabled',

    $class,
]) @disabled($status == 'disabled') {{ $attributes }}>
    {{ $slot }}
</{{ $tag }}>
