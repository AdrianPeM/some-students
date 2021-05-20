@php
$classes = 'p-2 rounded-md font-medium border text-center';

    switch($type) {
        case "primary":
            $classes .= ' bg-indigo-lightest text-indigo-dark';
            break;
        case "secondary":
            $classes .= ' bg-gray-lightest text-gray-dark';
            break;
        case "success":
            $classes .= ' bg-green-lightest text-green-dark';
            break;
        case "warning":
            $classes .= ' bg-yellow-lightest text-yellow-dark';
            break;
        case "danger":
            $classes .= ' bg-red-lightest text-red-dark';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <p>{{ $slot }}</p>
</div>
