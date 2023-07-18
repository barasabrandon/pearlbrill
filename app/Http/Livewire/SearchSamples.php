<?php

namespace App\Http\Livewire;

use App\Models\Samples;
use Livewire\Component;

class SearchSamples extends Component
{
    public $searchTerm;
    public $samples;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $this->samples = Samples::where('title', 'like', $searchTerm)->get();
        return view('livewire.search-samples');
    }
}
