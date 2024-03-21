<?php

namespace App\Livewire\Author\Papers;

use Livewire\Component;

class Register extends Component
{
    public $titleData = null;
    public $abstract = null;
    public function render()
    {
       
        return view('livewire.author.papers.register');
    }

    public function save(){
        dd($this->titleData);
    }
}
