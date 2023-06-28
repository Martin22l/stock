<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="box">
        @csrf
        
        <!-- cuit -->
        <div class=>
            <x-input-label for="cuit" :value="__('CUIT/CUIL')" />
            <x-text-input id="cuit" class="" type="text" name="cuit" :value="old('cuit')" required autofocus autocomplete="cuit" />
            <x-input-error :messages="$errors->get('cuit')" />
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="" type="text" name="name" :value="old('name')" required  autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div >
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- direccion  -->
        <div >
            <x-input-label for="direccion" :value="__('Dirección')" />
            <x-text-input id="direccion" class="" type="text" name="direccion" :value="old('direccion')"  autocomplete="direccion" />
            <x-input-error :messages="$errors->get('direccion')"  />
        </div>
        <!-- telefono -->
        <div >
            <x-input-label for="telefono" :value="__('Telefono')" />
            <x-text-input id="telefono" class="" type="text" name="telefono" :value="old('telefono')"  autocomplete="telefono" />
            <x-input-error :messages="$errors->get('telefono')"  />
        </div>
        <!-- tipo de factura -->
        <div >
            <x-input-label for="tipo_factura" :value="__('Tipo de factura')" />
            {{-- <x-text-input id="tipo_factura" class="block mt-1 w-full" type="text" name="tipo_factura" :value="old('telefono')"  autocomplete="telefono" /> --}}
            <div class="select is-fullwidth">
                <select name="tipo_factura" id="tipo_factura">
                    @foreach ($tipos_facturas as $item)
                        <option value="{{$item}}">{{$item}}</option>
                        
                    @endforeach
                </select>
            </div>
            <x-input-error :messages="$errors->get('tipo_factura')"  />
        </div>
        
        <!-- Password -->
        <div >
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class=""
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" 
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')"  />
        </div>

        <div >
            <a  href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button >
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
