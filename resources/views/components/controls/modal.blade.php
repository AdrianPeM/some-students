
<div data-type="modal" data-id="modal-{{$id}}" {{ $attributes->merge(['class' => "flex"]) }}>
    {{$slot}}
</div>

<div class="fixed fade top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden z-50" id="overlay-modal-{{$id}}">
    <div style="max-height: 80vh;"
        class="modal-header flex flex-col p-2 m-auto rounded max-w-4xl max-h-xl bg-white">
        <div class="flex justify-between items-center border-b p-2 border-gray-300">
            <h1 class="text-primary text-xl font-bold">{{$title}}</h1>
            <i class="far fa-times-circle text-2xl cursor-pointer hover:text-gray-light hover:scale-120 rounded-full close-modal transform transition-all ease-in-out"
                data-type="close-modal" data-close="overlay-modal-{{$id}}"></i>
        </div>
        <div class="modal-content flex-col text-base p-2 overflow-y-auto h-full">
            {{$content}}
        </div>
        @if ($footer != '')
            <div class="modal-footer p-2 flex justify-end">
                {{ $footer }}
                {{-- <x-button variant="outlined">Cancel</x-button>
                <x-button class="ml-4">Save</x-button> --}}
            </div>
        @endif
    </div>
</div>
