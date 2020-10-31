<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('admin.title') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.13/tailwind.min.css" />
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    @livewireStyles
</head>
<body>
    @livewire('navigation-dropdown')
    @yield('content')
    @stack('modals')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.7.0/alpine.js"></script>
    @livewireScripts
</body>
</html>
