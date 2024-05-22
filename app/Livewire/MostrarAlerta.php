<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarAlerta extends Component
{
    public $message;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;

    public function render()
    {
        return view('livewire.mostrar-alerta');
    }
}
