<?php

namespace App\Http\Livewire;

use App\Models\Blogs;
use Livewire\Component;

class SearchBlogs extends Component
{
    public $blogs;
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $this->blogs = Blogs::where('title', 'like', $searchTerm)->get();

        return view('livewire.search-blogs');
    }
}
