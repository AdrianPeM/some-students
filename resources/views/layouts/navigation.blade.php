<nav x-data="{ open: false }" class="bg-primary py-1 shadow-2xl sticky top-0">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('reticula') }}">
                        <x-application-logo/>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="ml-14 flex items-center space-x-4">
                    <x-nav-link :href="route('reticula')" :active="request()->routeIs('reticula')">
                        {{ __('Reticula') }}
                    </x-nav-link>
                    <x-nav-link :href="route('extraescolares')" :active="request()->routeIs('extraescolares')">
                        {{ __('Extraescolares') }}
                    </x-nav-link>
                    <x-nav-link :href="route('actividades_complementarias')" :active="request()->routeIs('actividades_complementarias')">
                        {{ __('Actividades Complementarias') }}
                    </x-nav-link>
                    <x-nav-link :href="route('servicio_social')" :active="request()->routeIs('servicio_social')">
                        {{ __('Servicio Social') }}
                    </x-nav-link>
                    <x-nav-link :href="route('residencias')" :active="request()->routeIs('residencias')">
                        {{ __('Residencias') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="flex">
                    <!-- Notifications -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <div class="relative" x-data="{ open: false }">
                        <form novalidate="">
                            <button type="button" x-on:click="open = true" style="font-size: 1rem" class="bell-icon bg-primary p-1 rounded-full text-gray-lightest hover:text-white focus:outline-none group transform transition hover:scale-120" aria-expanded="false">
                                <i class="far fa-bell fa-lg transition-all"></i>
                                <?php
                                    $notViewedNotifications = 0;
                                    function notViewedNotificationsCount($notifications, $notViewedNotifications) {
                                        foreach ($notifications as $notification) {
                                            if($notification->pivot->is_viewed == 0) {
                                                $notViewedNotifications++;
                                            }
                                        }
                                        return $notViewedNotifications;
                                    }
                                ?>
                                @if(notViewedNotificationsCount($notifications,$notViewedNotifications) > 0)
                                    <x-controls.notification-count-bubble :notification-count="notViewedNotificationsCount($notifications,$notViewedNotifications)"></x-controls.notification-count-bubble>
                                @endif
                            </button>
                        </form>
                        <div x-show.transition="open" x-on:click.away="open = false" class="notifications absolute rounded-lg shadow-lg z-10 -ml-4 mt-5 px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:-left-80">
                            <div class="rounded-t-lg shadow-lg ring-1 ring-black ring-opacity-5 max-h-100 overflow-y-auto">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    @if(count($notifications) > 0)
                                        @foreach($notifications as $notification)
                                            <x-controls.notification :notification="$notification" margin="-m-3"></x-controls.notification>
                                        @endforeach
                                    @else
                                        <div class="flex justify-center">
                                            <p class="text-gray-light">No tienes notificaciones por el momento</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="rounded-b-lg sticky bottom-0 px-5 py-5 bg-gray-50 justify-center space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                <div class="flow-root">
                                    <a href="{{ route('notificaciones') }}" class="-m-3 p-3 flex items-center rounded-md text-base font-medium hover:bg-gray-lightest text-gray-light hover:text-gray-dark transition transform hover:scale-105">
                                        <span class="ml-3 text-sm">Ver todas las notificaciones</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-lightest hover:text-white hover:border-gray-lightest focus:outline-none focus:text-white focus:border-gray-lightest transition transform hover:scale-105">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-light hover:text-gray-light hover:bg-gray-lightest focus:outline-none focus:bg-gray-lightest focus:text-gray-light transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('reticula')" :active="request()->routeIs('reticula')">
                {{ __('Reticula') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('extraescolares')" :active="request()->routeIs('extraescolares')">
                {{ __('Extraescolares') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('actividades_complementarias')" :active="request()->routeIs('actividades_complementarias')">
                {{ __('Actividades complementarias') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('servicio_social')" :active="request()->routeIs('servicio_social')">
                {{ __('Servicio Social') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('residencias')" :active="request()->routeIs('residencias')">
                {{ __('Residencias') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-lightest">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-light" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-dark">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-light">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>