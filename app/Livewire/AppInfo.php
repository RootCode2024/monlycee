<?php

namespace App\Livewire;

use App\Models\InfosSchool;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class AppInfo extends Component
{
    use WithFileUploads;

    public $name, $email_infos, $email_contact, $phone1, $phone2, $address;
    public $city, $state, $country, $zip, $website;
    public $facebook, $twitter, $instagram, $favicon, $copyright;
    public $description, $about;

    #[Validate('image|max:2048')] // 1MB Max
    public $logo;

    public function submit()
    {
        // Validation
        $this->validate([
            'name' => 'required|string|max:255',
            'email_infos' => 'required|email',
            'email_contact' => 'required|email',
            'phone1' => 'required|string',
            'logo' => 'nullable', // exemple pour limiter la taille de l'image
            'favicon' => 'nullable|image|max:512',
            'about' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // Enregistrement des données
        $data = [
            'name' => $this->name,
            'email_infos' => $this->email_infos,
            'email_contact' => $this->email_contact,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'zip' => $this->zip,
            'website' => $this->website,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'logo' => $this->logo, // Télécharge et stocke l'image
            'favicon' => $this->favicon ? $this->favicon->store('favicons', 'public') : null,
            'copyright' => $this->copyright,
            'description' => $this->description,
            'about' => $this->about,
        ];

        // Vous pouvez enregistrer ces informations dans la base de données ici
        InfosSchool::create([
            'name' => $this->name,
            'email_infos' => $this->email_infos,
            'email_contact' => $this->email_contact,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'zip' => $this->zip,
            'website' => $this->website,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'logo' => $this->logo ? $this->logo->store(path: 'logo') : null, // Télécharge et stocke l'image
            'favicon' => $this->favicon ? $this->favicon->store('favicons', 'public') : null,
            'copyright' => $this->copyright,
            'description' => $this->description,
            'about' => $this->about,
        ]);
        session()->flash('message', 'Informations enregistrées avec succès.');
    }

    public function render()
    {
        return view('livewire.app-info');
    }
}
