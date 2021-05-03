<div id="accordion-{{$id}}" {!! $attributes->merge(['class' => "accordion flex flex-col text-base overflow-hidden"]) !!}>
    <div class="accordion__title p-2 cursor-pointer flex justify-start">
        <p class="font-bold">{{$title}}</p>
        <i style="display:flex" class="fas fa-chevron-down arrow ml-4 justify-center items-center duration-300"></i>
    </div>
    <div class="accordion__content flex flex-column h-0 ease duration-300">
        <div class="flex flex-col p-2">
            {{$slot}}
        </div>
    </div>
</div>