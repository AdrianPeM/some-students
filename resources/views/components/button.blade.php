@props(['color' => 'primary', 'variant' => 'filled', 'type' => 'submit'])

@php
    switch ($variant) {
        case 'filled':
            $normal = "bg-$color border-$color";
            $textColor = 'text-white';
            $hover = "hover:bg-$color-hover hover:bg-$color-dark";
            break;
        case 'outlined':
            $normal = "border-$color";
            $textColor = "text-$color";
            $hover = "hover:bg-$color-hover hover:text-white hover:bg-$color-dark";
            break;

        default:
            $normal = "bg-$color border-$color";
            $textColor = 'text-white';
            $hover = "hover:bg-$color-hover hover:bg-$color-dark";
            break;
    }
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => "inline-flex items-center px-4 py-2 $normal $hover border-2 hover:border-$color-hover rounded-md font-semibold text-xs $textColor uppercase tracking-widest focus:outline-none focus:border-2 focus:border-$color focus:ring ring-$color-light disabled:opacity-25 transition ease-in-out"]) }}>
    {{ $slot }}
</button>
