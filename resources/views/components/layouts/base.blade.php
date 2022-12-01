@props(['class' => ''])

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @meta_tags
    @vite('resources/css/app.css')
    @livewireStyles(['nonce' => csp_nonce()])
</head>

<body class="{{ $class }}">
    {{ $slot }}
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/c0ab72f2bc.js" crossorigin="anonymous"></script>
    @livewireScripts(['nonce' => csp_nonce()])
</body>

</html>
