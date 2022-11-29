<x-layouts.full-row class="bg-base-100">
    <div class="bg-light-100 shadow-lg">
        <h1 class="text-3xl font-bold">{{ __('Masuk') }}</h1>
        <form action="{{ route('login') }}" method="post" class="my-4 mx-4">
            @csrf
            <x-molecules.input.base icon='bi-person' field='phone_email' :value="old('phone_email')" label='Email/Whatsapp'
                type='text' class="my-4" />

            <x-molecules.input.base icon='bi-key' field='password' :value="old('password')" label='Kata Sandi' type='password'
                class="my-4" />

            <button class="bg-primary-500 text-light-100 p-2" type="submit">Login</button>

        </form>
    </div>
</x-layouts.full-row>
