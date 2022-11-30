@php
    $inputTypes = ['text', 'date', 'datetime-local', 'email', 'month', 'number', 'password', 'search', 'time', 'url', 'week', 'file'];
@endphp

@props([
    'type' => $inputTypes[array_search($type, $inputTypes)],
    'status' => 'default',
    'class' => '',
    'field',
    'label',
])


<input @class([
    'peer placeholder-transparent  py-3 px-4 border border-solid rounded-full text-base-700 caret-base-700 outline-base-300  transition-all disabled:bg-base-200 file:hidden disabled:text-base-500',
    $errors->first($field)
        ? 'border-danger focus:outline-danger'
        : 'border-base-300 focus:outline-base-500',
    $class,
]) @if ($status == 'disabled')
disabled
@endif type="{{ $type }}" name="{{ $field }}"
id="{{ $field }}" placeholder="{{ $label }}" {{ $attributes }}>
