
<div data-type="modal" data-id="modal-{{$id}}" {{ $attributes->merge(['class' => "flex"]) }}>
    {{$slot}}
</div>

<div class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 hidden" id="overlay-modal-{{$id}}">
    <div style="max-height: 80vh;" 
        class="modal-header flex flex-col p-2 m-auto rounded max-w-4xl max-h-xl bg-white">
        <div class="flex justify-between border-b p-2 border-gray-300">
            <h1 class="text-secondary text-lg font-bold">{{$title}}</h1>
            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full close-modal" data-type="close-modal" data-close="overlay-modal-{{$id}}" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="modal-content flex-col p-2 overflow-y-auto h-full">
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