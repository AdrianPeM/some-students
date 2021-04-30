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
                        <button x-on:click="open = true" type="button" class="bg-primary p-1 rounded-full text-gray-200 hover:text-white focus:outline-none focus:ring-2 group transform transition hover:scale-120" aria-expanded="false">
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/bell"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0
                                    10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0
                                    11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </button>
                        <div x-show.transition="open" x-on:click.away="open = false" class="absolute rounded-lg shadow-lg z-10 -ml-4 mt-5 px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:-left-80 overflow-y-auto">
                            <div class="rounded-lg max-h-100 shadow-lg ring-1 ring-black ring-opacity-5 overflow-y-scroll">
                                <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                    @if(count($notifications) > 0)
                                        @foreach($notifications as $notification)
                                            <?php  ?>
                                            <x-notification :notification="$notification"></x-notification>
                                        @endforeach
                                    @else
                                        <div class="flex justify-center">
                                            <p class="text-gray-500">No tienes notificaciones por el momento</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="px-5 py-5 bg-gray-50 justify-center space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                    <div class="flow-root">
                                        <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                            <span class="ml-3 text-sm">Ver todas las notificaciones</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-200 hover:text-white hover:border-gray-300 focus:outline-none focus:text-white focus:border-gray-300 transition transform hover:scale-105">
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
                                    {{ __('Log out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
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
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
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
