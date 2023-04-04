<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite([
        // default style&script
        'resources/css/app.css',
        'resources/js/app.js',
    ])
    <livewire:styles />
</head>

<body class="antialiased">
    {{ $slot }}

    <livewire:scripts />
</body>

</html>
