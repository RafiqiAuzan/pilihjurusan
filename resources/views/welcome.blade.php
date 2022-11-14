<html>

<head>
    @livewireStyles(['nonce' => csp_nonce()])
</head>

<body>
    <h1 class="text-8xl">Hello World!</h1>
    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
        href="/login">Login</a>
    @livewireScripts(['nonce' => csp_nonce()])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>

</html>
