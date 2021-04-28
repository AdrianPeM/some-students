@props(['color' => 'primary', 'variant'=>'filled'])

@php
    switch ($color) {
        case 'primary':
            $color = 'gray';
            $colorVariant = 800;
            break;
        case 'secondary':
            $color = 'purple';
            $colorVariant = 800;
            break;
        
        default:
            $color = 'gray';
            $colorVariant = 800;
            break;
    }

    switch ($variant) {
        case 'filled':
            $normal = 'bg-'.$color.'-'.$colorVariant;
            $hover = 'hover:bg-'.$color.'-'.($colorVariant-200);
            $textColor = 'text-gray-50';
            break;
        case 'outlined':
            $normal = 'border-2 border-'.$color.'-'.$colorVariant;
            $hover = 'hover:bg-'.$color.'-'.($colorVariant-200).' hover:text-white';
            $textColor = 'text-'.$color.'-'.$colorVariant;
            break;
        
        default:
            $normal = 'bg-'.$color.'-'.$colorVariant;
            $hover = 'hover:bg-'.$color.($colorVariant-200);
            break;
    }
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex items-center px-4 py-2 $normal $hover rounded-md font-semibold text-xs $textColor uppercase tracking-widest focus:outline-none focus:border-2 focus:border-$color-$colorVariant focus:ring ring-$color-300 disabled:opacity-25 transition ease-in-out duration-150"]) }}>
    {{ $slot }}
</button>