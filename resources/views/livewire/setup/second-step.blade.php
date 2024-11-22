<div>
    <h2 class="text-4xl font-semibold text-white mb-8 text-center">Informations Personnelles</h2>
    <p class="text-md text-white max-w-2xl mx-auto mb-10 text-center italic">
        Complétez chaque section pour avancer dans le processus d’inscription. Une fois l’inscription validée, configurez les détails de votre application, comme son nom, son slogan et sa description.
    </p>
    <form wire:submit.prevent="submitForm" class="flex flex-col items-center w-full max-w-4xl p-8 space-y-6 bg-transparent rounded-lg shadow-md">
        <!-- Champ Nom d'utilisateur -->
        <div class="w-full">
            <input wire:model="name" id="name" name="name" type="text" placeholder="Nom d'utilisateur" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
    
        <!-- Champ Adresse mail -->
        <div class="w-full">
            <input wire:model="email" type="email" placeholder="Adresse mail" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
    
        <!-- Champ Mot de passe -->
        <div class="w-full">
            <input autocomplete="autocomplete" wire:model="password" type="password" placeholder="Mot de passe" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
    
        <!-- Champ Confirmer le mot de passe -->
        <div class="w-full">
            <input autocomplete="autocomplete" wire:model="password_confirmation" type="password" placeholder="Confirmer le mot de passe" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
        </div>
    </form>
</div>