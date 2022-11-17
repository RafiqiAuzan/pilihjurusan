<x-layout.base>
    <div
        class="relative flex items-top justify-center min-h-screen bg-dark-100 dark:bg-dark-500 sm:items-center sm:pt-0">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="flex mb-2 items-center justify-center pt-8 sm:pt-0">
                <div class="px-4 text-2xl text-light-100 border-r border-light-100 tracking-wider">
                    {{ $code }}
                </div>

                <div class="ml-4 text-2xl text-light-100 uppercase tracking-wider">
                    {{ $title }}
                </div>
            </div>
            <p class="text-center font-light text-light-100 py-2 text-lg">{{ $message }}
                <br>ke <a class="text-primary-400" href="{{ url('/') }}">Halaman
                    Utama</a>
            </p>
        </div>
    </div>
</x-layout.base>
