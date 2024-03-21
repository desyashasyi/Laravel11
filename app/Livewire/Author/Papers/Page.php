<?php

namespace App\Livewire\Author\Papers;

use Livewire\Component;

class Page extends Component
{
    public $addPaperEnable = null;
    public function render()
    {
        return view('livewire.author.papers.page');
    }

    public function paperAdd_Enable(){
        if(is_null($this->addPaperEnable)){
            $this->addPaperEnable = 1;
        }else{
            $this->addPaperEnable = null;
        }
            
    }
}
