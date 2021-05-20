@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-primary-hover text-white px-3 py-2 rounded-md text-sm font-medium transition transform hover:scale-105'
            : 'text-gray-lightest hover:bg-primary-hover hover:text-white px-3 py-2 rounded-md text-sm font-medium transition transform hover:scale-105';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
