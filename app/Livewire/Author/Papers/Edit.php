<?php

namespace App\Livewire\Author\Papers;

use Livewire\Component;
use Livewire\Attributes\On; 

class Edit extends Component
{
    
    public $paperId;
    public function render()
    {
        return view('livewire.author.papers.edit');
    }

    #[On('editPaper_Author')] 
    public function editPaper_Author($paperId){
        dd('komponent edit; ', $paperId);
        $this->paperId = $paperId;
    }
}
