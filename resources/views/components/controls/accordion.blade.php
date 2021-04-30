<!-- Accordion -->
<div id="accordion-{{$id}}" class="accordion flex flex-col overflow-hidden">
    <div class="accordion__title text- p-2 cursor-pointer flex justify-between">
        <h2>{{$title}}</h2>
        <i style="display:flex" class="fas fa-chevron-down arrow justify-center items-center duration-300"></i>
        <!-- <div class="arrow h-6 w-6 rounded-full flex justify-center items-center bg-gray-300 hover:bg-gray-100">V</div> -->
    </div>
    <div class="accordion__content h-0 ease duration-300">
        {{$slot}}
    </div>
</div>
<!-- Accordion -->