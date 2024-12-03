<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? 'Learning Laravel 11' }} - Laravel 11</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description' }}" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navigation />
    @session ('status')
        <div>
            {{ $value }}
        </div>
    @endsession
    {{ $slot }}
    @isset($sidebar)
        <div id="sidebar">
            <h3>Sidebar</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endisset
</body>
</html>
