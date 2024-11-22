<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@slot('title') - {{ config('app.name', 'NH HIGH SCHOOL') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Barre de navigation -->
    @include('partials.header')

    <!-- Section principale -->
    <main class="flex justify-center items-center min-h-screen bg-gray-100">
        @slot('content')
    </main>

    <!-- Pied de page -->
    @include('partials.footer')
</body>
</html>
