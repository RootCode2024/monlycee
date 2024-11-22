<div>
    <div class="bg-transparent p-8 rounded-lg shadow-md w-full max-w-2xl mx-auto">
        <form wire:submit.prevent="submit" type="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-white">Nom de l'entreprise</label>
                <input type="text" wire:model="name" class="w-full p-2 rounded" />
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-white">Email Infos</label>
                <input type="email" wire:model="email_infos" class="w-full p-2 rounded" />
                @error('email_infos') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block text-white">Email Contact</label>
                <input type="email" wire:model="email_contact" class="w-full p-2 rounded" />
                @error('email_contact') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block text-white">Téléphone 1</label>
                <input type="text" wire:model="phone1" class="w-full p-2 rounded" />
                @error('phone1') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block text-white">Téléphone 2</label>
                <input type="text" wire:model="phone2" class="w-full p-2 rounded" />
                @error('phone2') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block text-white">Adresse</label>
                <input type="text" wire:model="address" class="w-full p-2 rounded" />
                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-white">Ville</label>
                <input type="text" wire:model="city" class="w-full p-2 rounded" />
                @error('city') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-white">Etat</label>
                <input type="text" wire:model="state" class="w-full p-2 rounded" />
                @error('state') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-white">Pays</label>
                <input type="text" wire:model="country" class="w-full p-2 rounded" />
                @error('country') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-white">Zip</label>
                <input type="text" wire:model="zip" class="w-full p-2 rounded" />
                @error('zip') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-white">Website</label>
                <input type="text" wire:model="website" class="w-full p-2 rounded" />
                @error('website') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-white">Facebook</label>
                <input type="text" wire:model="facebook" class="w-full p-2 rounded" />
                @error('facebook') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-white">Instagram</label>
                <input type="text" wire:model="instagram" class="w-full p-2 rounded" />
                @error('instagram') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-white">Twitter</label>
                <input type="text" wire:model="twitter" class="w-full p-2 rounded" />
                @error('twitter') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-white">Copyright</label>
                <input type="text" wire:model="copyright" class="w-full p-2 rounded" />
                @error('copyright') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <!-- Ajoutez les autres champs de la même manière -->
            @if ($logo)
                <img src="{{ $logo->temporaryUrl() }}" class="w-32 h-32 object-cover" loading="lazy">
            @else
                <div class="loader">Chargement...</div>
            @endif
        
            <div class="mb-4">
                <label class="block text-white">Logo</label>
                <input type="file" wire:model.defer="logo" class="w-full p-2 rounded text-white" />
                @error('logo') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label class="block text-white">Favicon</label>
                <input type="file" wire:model="favicon" class="w-full p-2 rounded text-white" />
                @error('favicon') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block text-white">Description</label>
                <textarea wire:model="description" class="w-full p-2 rounded"></textarea>
                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <div class="mb-4">
                <label class="block text-white">À propos</label>
                <textarea wire:model="about" class="w-full p-2 rounded"></textarea>
                @error('about') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
    
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                Enregistrer
            </button>
        </form>
    
        @if (session()->has('message'))
            <div class="text-green-500 mt-4">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
