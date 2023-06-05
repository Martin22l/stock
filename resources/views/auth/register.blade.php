<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- direccion  -->
        <div class="mt-4">
            <x-input-label for="direccion" :value="__('Dirección')" />
            <x-text-input id="direccion" class="block mt-1 w-full" type="direccion" name="direccion" :value="old('direccion')"  autocomplete="direccion" />
            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
        </div>
        <!-- telefono -->
        <div class="mt-4">
            <x-input-label for="telefono" :value="__('Telefono')" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="telefono" name="telefono" :value="old('telefono')"  autocomplete="telefono" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>
        <!-- cuit -->
        <div class="mt-4">
            <x-input-label for="cuit" :value="__('CUIT/CUIL')" />
            <x-text-input id="cuit" class="block mt-1 w-full" type="cuit" name="cuit" :value="old('cuit')"  autocomplete="cuit" />
            <x-input-error :messages="$errors->get('cuit')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
