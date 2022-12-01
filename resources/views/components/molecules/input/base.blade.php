@props([
    'status' => 'default',
    'class' => '',
    'icon' => '',
    'field',
    'label',
])

<div @class(['inline-block', $class])>
    <div class="relative">
        <x-atoms.input.base :status="$status" :label="$label" :field="$field" {{ $attributes }} class="w-full" />
        <x-atoms.label :field="$field" :icon="$icon"
            class="absolute left-[13px] -top-3 peer-placeholder-shown:top-[13px] peer-focus:absolute peer-focus:-top-3">
            {{ $label }}</x-atoms.label>
    </div>
    <x-atoms.input.error :field="$field" />
</div>
