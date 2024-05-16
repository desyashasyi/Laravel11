<?php

namespace App\Livewire;

use Livewire\Component;
use Auth;
class Idx extends Component
{
    public function render()
    {
        return view('livewire.idx');
    }

    public function mount(){
        
        if(is_null(Auth::user())){
            return view('welcome');
        }
    }
}
