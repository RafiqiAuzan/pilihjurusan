<form action="{{ route('login') }}" class="flex w-full flex-col" method="post">
    @csrf
    <x-molecules.input.base class="my-4" field='phone_email' icon='bi-person' label='Email/Whatsapp' type='text'
        wire:model.lazy='phone_email' />
    <x-molecules.input.base class="my-4" field='password' icon='bi-key' label='Kata Sandi' type='password'
        wire:model.lazy='password' />

    <x-atoms.button type="submit">{{ __('Masuk Sekarang') }}</x-atoms.button>
</form>
