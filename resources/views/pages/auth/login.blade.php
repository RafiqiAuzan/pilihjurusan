<x-layouts.full-row class="prose">
    <h1>Halaman login</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label>
            <span>Email/Whatsapp</span>
            <input class="border" value="{{ old('phone_email') }}" type="text" name="phone_email" id="phone_email">
            <br>
            @error('phone_email')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </label>
        <br>
        <label>
            <span>Password</span>
            <input class="border" type="password" name="password" id="password">
            <br>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </label>
        <br>
        <button class="bg-primary-500 text-light-100 p-2" type="submit">Login</button>

    </form>
</x-layouts.full-row>
