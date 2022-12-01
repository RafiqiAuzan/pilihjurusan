<x-layouts.full-row class="flex min-h-screen items-center justify-center bg-base-100">
    <div
        class="flex h-screen max-w-lg flex-col justify-between bg-light-100 py-8 px-10 shadow-lg md:h-fit md:rounded-[32px]">

        <span>
            <x-atoms.button :href="route('home')" class="mr-4" size='icon-default' status='transparent'>
                <i class='fas fa-arrow-left fa-2x'></i>
            </x-atoms.button>
            <h1 class="mb-3 inline-block text-3xl font-bold">
                {{ __('Masuk') }}
            </h1>
        </span>
        <p class="my-5 text-sm text-base-800">
            {{ __('Masukkan alamat email / nomor telepon dan kata sandi yang telah anda daftarkan.') }}</p>
        <livewire:forms.login-form />
    </div>
</x-layouts.full-row>
