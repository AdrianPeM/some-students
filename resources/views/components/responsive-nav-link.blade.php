@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-primary-hover text-white block pl-3 pr-4 py-5 text-center border-l-4 border-indigo-400 text-base font-medium bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition transform duration-150 ease-in-out'
            : 'text-gray-lightest hover:bg-primary-hover hover:text-white block pl-3 pr-4 py-5 text-center border-l-4 border-transparent text-base font-medium hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:bg-gray-50 focus:border-gray-300 transition transform duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
