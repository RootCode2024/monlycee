<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'NH HIGH SCHOOL') }}</title>
    {{-- <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<style>
    body {
        background-image: repeating-linear-gradient(0deg, rgb(17, 17, 17) 0px, rgb(17, 17, 17) 1px,
        transparent 1px, transparent 91px),
        repeating-linear-gradient(90deg, rgb(17, 17, 17) 0px, rgb(17, 17, 17) 1px,
        transparent 1px, transparent 91px),
        linear-gradient(90deg, hsl(49, 0%, 3%), hsl(49, 0%, 3%));
    }
    h1 {
        font-family: 'HelloDenverDisplayBold', sans-serif;
        letter-spacing: .4rem;
    }
</style>
<body>
    <!-- Section principale -->
    <main class="flex justify-center items-center min-h-screen">
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>
