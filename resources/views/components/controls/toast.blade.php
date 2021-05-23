<div class="toast shadow-2xl rounded-lg flex">
    <!-- Heroicon name: outline/chart-bar -->
    <div class="flex justify-content-between items-center w-full mb-2">
        <p class="text-base font-bold text-gray-900 mr-auto">
        {{$toastTitle}}
        </p>
        <small class="ml-4 text-gray-500">Justo ahora</small>
        <button type="button" class="close-toast mx-3 items-center justify-self-end text-gray-500 hover:text-gray-900 transform transition hover:scale-120 focus:outline-none">
            <span class="font-bold text-xl">&times;</span>
        </button>
    </div>

    <div class="flex justify-content-between items-center w-full">
        <i class="fas {{$toastIcon}} fa-2x text-indigo mx-2"></i>
        <p class="mx-3 text-sm text-gray-900">
            {!! $toastMessage !!}
        </p>
    </div>
</div>
