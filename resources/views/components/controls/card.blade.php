<div class="px-10 py-3">
    <div class="flex items-center justify-between">
        <h6 class="font-bold text-lg">{{ $title }}</h6>
        <div class="flex items-center justify-end">
            <x-controls.edit-button url="{{ $editUrl }}"></x-controls.edit-button>
            <x-controls.delete-button url="{{ $deleteUrl }}"></x-controls.delete-button>
        </div>
    </div>
    <div class="p-5 my-3 rounded-lg shadow border border-gray-lightest">
        <div class="">
            {{ $content }}
        </div>
    </div>
</div>
