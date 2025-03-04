<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commentaires;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Commentaire extends Component
{
    // public $commentaires;
    public $post_id;
    public $content;
    

    protected $listeners = ['refreshComments' => '$refresh'];
    
        public function mount($post_id){
            $this->post_id = $post_id;
        }
    

    
    public function submit()
    {
       
        $this->validate([
            'content' => 'required|string|max:500',
        ]);

        Commentaires::create([
            'user_id' => Auth::id(),
            'post_id' => $this->post_id,
            'content' => $this->content,
        ]);

        $this->dispatch('refreshComments');
        $this->content = ''; 
        // session()->flash('message', 'Commentaire ajouté avec succès!');
        // return redirect()->back();
    }

    
    public $showForm = false;
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    
    public function render()
    {
        return view('livewire.commentaire', ['comments' => Commentaires::where('post_id', $this->post_id)->latest()->get()
    
    ]);
    }



    
}
