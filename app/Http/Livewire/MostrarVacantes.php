<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{
    /*
        // Funcion en el controlador llamada desde la vista

        protected $listeners = ['prueba'];

        public function prueba($vacante_id)
        {
            dd($vacante_id);
        }
     */

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
