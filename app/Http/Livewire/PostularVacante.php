<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{

    public $cv;

    use WithFileUploads;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        $datos = $this->validate();

        // Almacenar CV en el disco duro
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        // Crear la vacante

        
        // Crear notificación y enviar el email


        // Mostrar a el usuario un mensaje de ok
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
