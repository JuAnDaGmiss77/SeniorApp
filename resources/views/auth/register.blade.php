<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            {{-- ingrese modificaciones para el formulario de registro --}}
            <div class="mt-3">
                <x-jet-label for="apellido" value="{{ __('Apellido') }}" />
                <x-jet-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="usuario" value="{{ __('Usuario') }}" />
                <x-jet-input id="usuario" class="block mt-1 w-full" type="text" name="usuario" :value="old('usuario')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="numero_documento" value="{{ __('Numero de documento') }}" />
                <x-jet-input id="numero_documento" class="block mt-1 w-full" type="text" name="numero_documento" :value="old('numero_documento')" required autofocus autocomplete="name" />
            </div>
            
            <div>
                <x-jet-label for="tipo_documento" value="{{ __('Tipo de documento') }}" />
                <x-jet-input id="tipo_documento" class="block mt-1 w-full" type="text" name="tipo_documento" :value="old('tipo_documento')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="fecha_nacimiento" value="{{ __('Fecha de Nacimiento') }}" />
                <x-jet-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="telefono" value="{{ __('Telefono') }}" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="genero" value="{{ __('Genero') }}" />
                <x-jet-input id="genero" class="block mt-1 w-full" type="text" name="genero" :value="old('genero')" required autofocus autocomplete="name" />
            </div>

            {{-- fin --}}

            <div class="mt-3">
                <x-jet-label for="email" value="{{ __('Correo') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-3">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-3">
                <x-jet-label for="password_confirmation" value="{{ __('Confirme Contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-3">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-3">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Estas Registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
