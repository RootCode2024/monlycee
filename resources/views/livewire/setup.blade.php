<div class="w-full max-w-5xl bg-transparent p-8 rounded-lg">

    <!-- Étapes -->
    @if ($step === 1)
        @livewire('setup.first-step')
    @elseif ($step === 2)
    <div>
        <h2 class="text-4xl font-semibold text-white mb-8 text-center">Informations Personnelles</h2>
        <p class="text-md text-white max-w-2xl mx-auto mb-10 text-center italic">
            Complétez chaque section pour avancer dans le processus d’inscription. Une fois l’inscription validée, configurez les détails de votre application, comme son nom, son slogan et sa description.
        </p>
        <form wire:submit.prevent="submitForm" class="flex flex-col items-center w-full max-w-4xl p-8 space-y-6 bg-transparent rounded-lg shadow-md">
            <!-- Champ Nom d'utilisateur -->
            <div class="w-full">
                <input wire:model.defer="name" id="name" name="name" type="text" placeholder="Nom d'utilisateur" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        
            <!-- Champ Adresse mail -->
            <div class="w-full">
                <input wire:model.defer="email" type="email" placeholder="Adresse mail" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
                @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        
            <!-- Champ Mot de passe -->
            <div class="w-full">
                <input autocomplete="autocomplete" wire:model.defer="password" type="password" placeholder="Mot de passe" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
                @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        
            <!-- Champ Confirmer le mot de passe -->
            <div class="w-full">
                <input autocomplete="autocomplete" wire:model.defer="password_confirmation" type="password" placeholder="Confirmer le mot de passe" class="w-full p-2.5 rounded-lg bg-transparent text-gray-100 border border-gray-600 focus:ring-2 focus:ring-blue-500">
            </div>
        </form>
    </div>
    @elseif ($step === 3)
    <div class="bg-transparent p-8 rounded-lg shadow-lg w-full max-w-5xl mx-auto">
        <h2 class="text-4xl font-semibold text-white mb-8 text-center">Informations De L'Etablissement</h2>
        <p class="text-md text-white max-w-5xl mx-auto mb-10 text-center italic">
            Complétez chaque section pour avancer dans le processus d’inscription. Une fois l’inscription validée, configurez les détails de votre application, comme son nom, son slogan et sa description.
        </p>
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
            @csrf
    
            <!-- Section Informations de base -->
            <div class="mb-8">
                <h2 class="text-white text-lg font-semibold mb-4">Informations de base</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nom de l'école -->
                    <div>
                        <label class="block text-white">Nom de l'école</label>
                        <input type="text" wire:model="school_name" class="w-full p-2 rounded" />
                        @error('school_name') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <!-- Adresse -->
                    <div>
                        <label class="block text-white">Adresse</label>
                        <input type="text" wire:model="address" class="w-full p-2 rounded" />
                        @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><hr/>
    
            <!-- Section Contacts -->
            <div class="mb-8">
                <h2 class="text-white text-lg font-semibold mb-4">Contacts</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-white">Pays</label>
                        <input type="text" wire:model="country" class="w-full p-2 rounded" />
                        @error('country') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-white">Etat</label>
                        <input type="text" wire:model="state" class="w-full p-2 rounded" />
                        @error('state') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Ville</label>
                        <input type="text" wire:model="city" class="w-full p-2 rounded" />
                        @error('city') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-white">Email Infos</label>
                        <input type="email" wire:model="email_infos" class="w-full p-2 rounded" />
                        @error('email_infos') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Email Contact</label>
                        <input type="email" wire:model="email_contact" class="w-full p-2 rounded" />
                        @error('email_contact') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Téléphone 1</label>
                        <input type="text" wire:model="phone1" class="w-full p-2 rounded" />
                        @error('phone1') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Téléphone 2</label>
                        <input type="text" wire:model="phone2" class="w-full p-2 rounded" />
                        @error('phone2') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><hr/>
    
            <!-- Section Textes -->
            <div class="mb-8">
                <h2 class="text-white text-lg font-semibold mb-4">Description</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-white">Breve Description</label>
                        <textarea type="text" wire:model="description" class="w-full p-2 rounded"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Longue Description</label>
                        <textarea type="text" wire:model="about" class="w-full p-2 rounded"></textarea>
                        @error('about') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-white">Zip</label>
                        <input type="text" wire:model="zip" class="w-full p-2 rounded" />
                        @error('zip') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Copyright</label>
                        <input type="text" wire:model="copyright" class="w-full p-2 rounded" />
                        @error('copyright') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Site Web</label>
                        <input type="text" name="website" wire:model="website" class="w-full p-2 rounded" />
                        @error('website') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                </div>
            </div><hr/>
    
            <!-- Section Réseaux sociaux -->
            <div class="mb-8">
                <h2 class="text-white text-lg font-semibold mb-4">Réseaux sociaux</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-white">Facebook</label>
                        <input type="text" name="facebook" wire:model="facebook" class="w-full p-2 rounded" />
                        @error('facebook') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
    
                    <div>
                        <label class="block text-white">Instagram</label>
                        <input type="text" name="instagram" wire:model="instagram" class="w-full p-2 rounded" />
                        @error('instagram') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                    <div>
                        <label class="block text-white">Twitter</label>
                        <input type="text" name="twitter" wire:model="twitter" class="w-full p-2 rounded" />
                        @error('twitter') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div><hr>
    
            <!-- Section Logo et Favicon -->
            <div class="mb-8">
                <h2 class="text-white text-lg font-semibold mb-4">Logo et Favicon</h2>
                <div class="grid grid-cols-1 gap-4">
                    <!-- Logo -->
                    <div>
                        <label class="block text-white">Logo</label>
                        <input type="file" wire:model.defer="logo" class="w-full p-2 rounded text-white" />
                        @error('logo') <span class="text-red-500">{{ $message }}</span> @enderror
                        @if ($logo)
                            <img src="{{ $logo->temporaryUrl() }}" class="w-32 h-32 object-cover mt-2" loading="lazy">
                        @endif
                    </div>
    
                    <!-- Favicon -->
                    <div>
                        <label class="block text-white">Favicon</label>
                        <input type="file" wire:model="favicon" class="w-full p-2 rounded text-white" />
                        @error('favicon') <span class="text-red-500">{{ $message }}</span> @enderror
                        @if ($favicon)
                            <img src="{{ $favicon->temporaryUrl() }}" class="w-32 h-32 object-cover mt-2" loading="lazy">
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    @elseif ($step === 4)
        @livewire('setup.fourth-step')
    @else
        Chargement...
    @endif

    <!-- Boutons de navigation -->
    @if ($step > 1)
        <div class="mt-8 flex justify-between">
            <button wire:click="previousStep" class="px-4 py-2 bg-gray-500 text-white rounded" @if ($step === 1) disabled @endif>Étape précédente</button>
            <button wire:click="nextStep" class="px-4 py-2 bg-blue-500 text-white rounded">
                @if ($step === 4) Admin Dashboard @else Étape suivante @endif
            </button>
        </div>
    @else
        <div class="mt-8 flex justify-center">
            <button wire:click="nextStep" wire:loading.attr="disabled" class="px-8 py-4 bg-white text-black rounded-lg font-semibold shadow-md hover:bg-gray-500 hover:text-white">
                Commencer
            </button>
        </div>
    @endif
</div>
