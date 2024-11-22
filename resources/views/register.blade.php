<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    {{-- <link rel="stylesheet" href="{{ asset('public/fonts/fonts.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<style>
    body {
        background-image: repeating-linear-gradient(0deg, rgb(17, 17, 17) 0px, rgb(17, 17, 17) 1px,
        transparent 1px, transparent 91px),
        repeating-linear-gradient(90deg, rgb(17, 17, 17) 0px, rgb(17, 17, 17) 1px,
        transparent 1px, transparent 91px),
        linear-gradient(90deg, hsl(49,0%,3%),hsl(49,0%,3%));
    }
    h1 {
        /* font-family: 'HelloDenverDisplayBold', sans-serif; */
        letter-spacing: .4rem;
    }
</style>
<body class="min-h-screen w-full flex items-center justify-center">
    <div class="w-full max-w-4xl bg-transparent p-8 rounded-lg">
        <h2 class="text-4xl font-semibold text-white mb-8 text-center">Informations Personnelles</h2>
        <p class="text-md text-white max-w-2xl mx-auto mb-10 text-center italic">
            Complétez chaque section pour avancer dans le processus d’inscription. Une fois l’inscription validée, configurez les détails de votre application, comme son nom, son slogan et sa description.
        </p>
        
        <!-- Inclusion du composant Livewire -->
        @livewire('registration-form')

    </div>

    @livewireScripts
</body>
</html>
