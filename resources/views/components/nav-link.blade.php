@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-blue-dark text-white px-3 py-2 rounded-md text-sm font-medium transition transform hover:scale-105'
            : 'text-gray-lightest hover:bg-blue hover:text-white px-3 py-2 rounded-md text-sm font-medium transition transform hover:scale-105';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
