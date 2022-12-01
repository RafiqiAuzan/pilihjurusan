@props([
'class' => '',
])
<form @class(['flex w-full flex-col', $class]) action="{{ route('login') }}" method="post">
    @csrf
    <x-molecules.input.base class="my-2" field='phone_email' icon='far fa-user' label='Email/Whatsapp' type='text'
        wire:model.lazy='phone_email' />
    <x-molecules.input.base class="my-2" field='password' icon='fas fa-key' :label="__('Kata Sandi')" type='password'
        wire:model.lazy='password' />
    <x-atoms.link size='lg' :href="route('forgot-password')">{{ __('Lupa Kata Sandi') }}</x-atoms.link>
    <x-atoms.button class="mt-4" size='lg' type="submit">{{ __('Masuk Sekarang') }}</x-atoms.button>
</form>