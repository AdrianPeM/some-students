<x-guest-layout>
    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a href="{{ route('login') }}" class="text-md text-white">Log in</a>
    </div> --}}
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Correo electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Career -->
            <div class="mt-4">
                <x-label for="career_id" class="block mt-1 w-full" name="career_id" :value="__('Carrera')" required />

                <x-select name="career_id">
                    <x-slot name="content">
                        @foreach ($careers as $career)
                            <option value="{{$career->id}}" name="career_id" {{old('career_id') == $career->id ? 'selected':''}} >{{$career->display_name}}</option>
                        @endforeach
                    </x-slot>
                </x-select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
