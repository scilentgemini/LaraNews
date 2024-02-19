<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;

class PostList extends Component
{
    public function render()
    {
        return view('livewire.post-list');
    }


    use WithPagination;
    #[Computed()]
    public function posts(){
        return Post::published()->orderBy('published_at', 'desc')->paginate(3);
    }
}
