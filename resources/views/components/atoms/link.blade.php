@props([
'size' => 'default',
'class' => '',
])

<i class="text-xs leading-[18px]"></i>
<a {{ $attributes }} @class([ 'peer font-bold text-primary-500 contents' , 'text-base leading-6'=> $size == 'lg',
    'leading-[19.5px] text-[13px]'=> $size == 'default',
    'text-xs leading-[18px]'=> $size == 'sm',
    'leading-[10px] text-[15px]'=> $size == 'xs',
    $class
    ])>
    {{ $slot }}
    <div class="bg-primary-500 max-w-40% w-full h-1 rounded-full"></div>
</a>