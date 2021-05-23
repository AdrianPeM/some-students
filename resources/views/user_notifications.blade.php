<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-primary">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden flex flex-col">
                @if(count($allNotifications) > 0)
                    @foreach($allNotifications as $notification)
                        <x-controls.notification :notification="$notification" margin="m-1"></x-controls.notification>
                    @endforeach
                @else
                    <div class="flex justify-center">
                        <p class="text-gray-light">No tienes notificaciones por el momento</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
