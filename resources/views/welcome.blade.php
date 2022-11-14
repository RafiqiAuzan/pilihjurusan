<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @livewireStyles(['nonce' => csp_nonce()])
</head>

<body class="bg-light-100">
    @vite('resources/js/app.js')
    @livewireScripts(['nonce' => csp_nonce()])
</body>

</html>
