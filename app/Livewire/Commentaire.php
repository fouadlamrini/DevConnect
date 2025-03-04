<?php

namespace App\Livewire;

use Livewire\Component;

class Commentaire extends Component
{

    public $showForm = false; 
    public function toggleForm()
    {
        $this->showForm = !$this->showForm; 
    }
    public function render()
    {
       
    
        return view('livewire.commentaire');
    }
}
