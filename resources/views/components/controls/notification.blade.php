<a class="{{$margin}} {{$border}} {{$padding}} bg-white flex items-center rounded-lg">
    <!-- Heroicon name: outline/chart-bar -->
    <i class="fas {{$notificationIcon}} fa-2x text-indigo mx-2"></i>
    <div class="ml-4">
        <p class="text-base font-bold text-gray-900">
            {{$notificationTitle}}
        </p>
        <p class="mt-1 text-sm text-gray-900">
            {!! $notificationContent !!}
        </p>
        <small class="text-xs font-normal text-gray-500">
            {{$notificationDate}}
        </small>
    </div>
</a>
