<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Commentaires;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
class Commentaire extends Component

{
    // public $commentaires;
    public $post;
    public $post_id;
    public $content;
    public $commentsCount;
    

    protected $listeners = ['refreshComments' => '$refresh'];
    
        public function mount($post_id){
            $this->post_id = $post_id;
            $this->post = Post::withCount('commentaires')->findOrFail($this->post_id);
            $this->commentsCount = $this->post->commentaires_count;
         
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
        $this->post = Post::withCount('commentaires')->findOrFail($this->post_id);
        $this->commentsCount = $this->post->commentaires_count;


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
        $comments = Commentaires::where('post_id', $this->post_id)->latest()->get();
        return view('livewire.commentaire', [
            'comments' => $comments,
            'commentsCount' => $this->commentsCount,
        
    
    ]);
    }



    
}
