<?php

namespace App\Livewire;

use Livewire\Component;

class Alert extends Component
{
    // Propriedades para as mensagens
    public $successMessage;
    public $errorMessage;
    public $validationErrors;

    public function mount()
    {
        // Pega as mensagens da sessão, se existirem
        $this->successMessage = session('success');
        $this->errorMessage = session('error');
        $this->validationErrors = session('errors') ? session('errors')->all() : [];
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
