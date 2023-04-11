<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="shortcut icon" href="{{ asset('storage/web/mii-logo.png') }}" type="image/x-icon">

    @vite([
        // default style&script
        'resources/css/app.css',
        'resources/js/app.js',
    ])
    @livewireStyles
</head>

<body class="antialiased">
    <x-navbar />

    {{ $slot }}

    @livewireScripts
</body>

</html>
