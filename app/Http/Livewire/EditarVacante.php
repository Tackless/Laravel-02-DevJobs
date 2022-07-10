<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use App\Models\Categoria;

class EditarVacante extends Component
{
    public $titulo;

    public function mount(Vacante $vacante )
    {
        $this->titulo = $vacante->titulo;
    }

    public function render()
    {
        // Consultar BD
        $salarios = Salario::all();
        $categorias = Categoria::all();
        
        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias,
        ]);
    }
}
