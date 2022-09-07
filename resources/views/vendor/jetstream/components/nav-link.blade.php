@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-2 py-2 text-sm font-medium text-white bg-primary-500 rounded-md group'
            : 'flex items-center px-2 py-2 text-sm font-medium text-white rounded-md hover:bg-primary-600 hover:bg-opacity-75 group';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
