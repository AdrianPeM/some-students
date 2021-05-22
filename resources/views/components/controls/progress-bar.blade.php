@php
    $marginY = $attributes["my"] ?? '8'
@endphp
<div {{ $attributes->merge(['class' => "justify-center px-2 sm:px-20 my-$marginY"]) }}>
    <div class="pt-1">
        <div class="flex mb-2 items-center justify-between">
            <div>
            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-{{$statusColor}}-dark bg-{{$statusColor}}-lightest">
                {{ $status }}
            </span>
            </div>
            <div class="text-right">
            <span class="text-xs font-semibold inline-block text-{{$statusColor}}-dark">
                <span class="perc">{{number_format($perc, 2)}}</span>% - <span class="accum_hours">{{$progress}}</span> horas
            </span>
            </div>
        </div>
        <div class="overflow-hidden h-5 mb-4 text-xs flex rounded bg-{{$statusColor}}-lightest">
            <div id="ProgressBar" style="width:{{$perc}}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-{{$statusColor}}-dark"></div>
        </div>
    </div>
</div>
