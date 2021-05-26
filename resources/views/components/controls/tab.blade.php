<div class="flex justify-start bg-gray-lightest border-t-2 border-gray-lightest mb-2">
    @foreach ($sections as $section => $active)
        <div class="flex p-1 sm:p-3 text-center cursor-pointer rounded-t-md hover:bg-primary-hover hover:text-white transition
            duration-200 tab-option {{$active ? 'active':''}}"
            data-tab-option="{{$section}}">
            <p>
                {{$section}}
            </p>
        </div>
    @endforeach
</div>

{{$slot}}
