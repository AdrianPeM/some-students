<x-guest-layout>
    <x-auth-card>

        <h1 class="font-black text-3xl pt-10 pb-10">Restaurar contraseña</h1>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace para restablecer la contraseña que le permitirá elegir una nueva.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" class="mt-10">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Correo electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-10">
                <a class="text-sm text-blue hover:text-blue-dark" href="{{ route('login') }}">
                    {{ __('Regresar') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Restablecer contraseña') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
