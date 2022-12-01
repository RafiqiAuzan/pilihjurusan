@props([
    'size' => 'default',
    'status' => 'solid',
    'tag' => empty($href) ? 'button' : 'a',
    'class' => '',
])


<{{ $tag }} {{ $attributes }} @class([
    ' rounded-full font-bold transition',

    'flex flex-row justify-center items-center' => $tag == 'button',
    'inline-block' => $tag == 'a',

    'text-base leading-6 py-4 px-16 gap-4' => $size == 'lg',
    'text-sm leading-5 py-[14px] px-14 gap-[14px]' => $size == 'default',
    'text-xs leading-4 py-[9px] px-9 gap-[9px]' => $size == 'sm',
    'text-xs leading-4 py-[6px] px-6 gap-[6px]' => $size == 'xs',

    'text-base leading-6 p-4 gap-4' => $size == 'icon-lg',
    'text-sm leading-5 p-[14px] gap-[14px]' => $size == 'icon-default',
    'text-xs leading-4 p-[9px] gap-[9px]' => $size == 'icon-sm',
    'text-xs leading-4 p-[6px] gap-[6px]' => $size == 'icon-xs',

    'border border-solid bg-primary-500 border-primary-500 text-base-100 hover:bg-primary-700' =>
        $status == 'solid',
    'border border-solid bg-light-100 border-primary-500 text-primary-500 hover:bg-primary-500 hover:bg-opacity-10' =>
        $status == 'outline',
    'text-primary-500 !p-0 !gap-0' => $status == 'transparent',
    'border border-solid bg-light-300 border-light-200 text-base-500' =>
        $status == 'disabled',

    $class,
]) @disabled($status == 'disabled')>
    {{ $slot }}
    </{{ $tag }}>
