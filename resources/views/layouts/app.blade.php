<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">   <!-- Lee la variable de entorno de .env APP_LOCALE -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">   <!-- Es el token para poder utilizarlo después a lo largo del proyecto para tener seguridad -->

    <title>{{ config('app.name', 'Laravel') }}</title>  <!-- Lee con el help config la variable de entorno de .env APP_NAME -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: 'figtree', sans-serif;">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>