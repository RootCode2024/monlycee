<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\InfosSchool;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Setup extends Component
{
    use WithFileUploads;

    public $step = 1;

    // Champs utilisateur
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    // Champs InfosSchool
    public $school_name, $email_infos, $email_contact, $phone1, $phone2;
    public $address, $city, $state, $country, $zip, $website;
    public $facebook, $twitter, $instagram, $favicon, $copyright;
    public $description, $about, $logo;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ];

    protected $messages = [
        'name.required' => 'Veuillez entrer votre nom.',
        'name.min' => 'Le nom doit contenir au moins 3 caractères.',
        'email.required' => 'Veuillez entrer une adresse mail.',
        'email.email' => 'Veuillez entrer une adresse mail valide.',
        'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
        'password.required' => 'Veuillez entrer un mot de passe.',
        'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        if (User::count() > 0  && InfosSchool::count() > 0)
        {
            $this->step = 4;
        }
    }

    public function nextStep()
    {
        if ($this->step === 2) {
            $this->validate();

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

            $this->reset(['name', 'email', 'password', 'password_confirmation']);
            session()->flash('success', 'Inscription réussie.');
            $this->step = 3;
        } elseif ($this->step === 3) {
            $this->validateInfosSchool();
            $logoPath = $this->logo ? $this->logo->store('logos', 'public') : null;
            $faviconPath = $this->favicon ? $this->favicon->store('favicons', 'public') : null;

            // Obtenez l'URL complète des images
            $logoUrl = $logoPath ? Storage::url($logoPath) : null;
            $faviconUrl = $faviconPath ? Storage::url($faviconPath) : null;

            // dd($logoUrl, $faviconUrl);

            InfosSchool::create([
                'name' => $this->school_name,
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
                'about' => $this->about,
                'description' => $this->description,
                'logo' => $logoUrl,
                'favicon' => $faviconUrl,
                'copyright' => $this->copyright,
            ]);

            $this->reset(['school_name', 'email_infos', 'email_contact', 'phone1', 'phone2', 'address', 'city', 'state', 'country', 'zip', 'website', 'facebook', 'twitter', 'instagram', 'about', 'description', 'logo', 'favicon', 'copyright']);
            session()->flash('success', 'Informations d\'école ajoutées.');
            return redirect()->route('filament.admin.auth.login');
        }
    }

    private function validateInfosSchool()
    {
        $this->validate([
            'email_infos' => 'required|email',
            'email_contact' => 'required|email',
            'phone1' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'nullable',
            'website' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'logo' => 'nullable|image|max:1024',
            'favicon' => 'nullable|image|max:512',
            'copyright' => 'nullable|string',
            'description' => 'nullable|string',
            'about' => 'nullable|string',
        ]);
    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function render()
    {
        return view('livewire.setup');
    }
}
