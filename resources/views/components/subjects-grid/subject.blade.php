{{-- @php
    $statusClass();
@endphp --}}

<div class="bg-{{$statusBg}} text-{{$statusText}} p-2 rounded cursor-pointer w-min subj-btn" data-id="{{$id}}">
    {{$name}}
</div>

<div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center" id="overlay-{{$id}}">
    <div class="bg-gray-100 max-w-l p-2 rounded text-gray-800">
        <div class="flex justify-between items-center">
            <h4 class="text-lg font-bold">Confirm Delete?</h4>
            <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full close-modal" data-id="{{$id}}" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="mt-2 text-sm">
            <p>{{ $name }}</p>
        </div>
        <div class="mt-3 flex justify-end space-x-3">
            <x-button>Cancel</x-button>
            <x-button>Delete</x-button>
        </div>
    </div>
</div>
