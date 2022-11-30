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
            class="left-[13px] absolute peer-placeholder-shown:top-[13px] peer-focus:absolute peer-focus:-top-3 -top-3 ">
            {{ $label }}</x-atoms.label>
    </div>
    @error($field)
        <div class="text-danger text-xs mt-1 mx-4">{{ $message }}</div>
    @enderror
</div>
