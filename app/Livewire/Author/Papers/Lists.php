<?php

namespace App\Livewire\Author\Papers;

use Livewire\Component;
use App\Models\Paper;
use Auth;
class Lists extends Component
{
    public function render()
    {
        $papers = Paper::where('user_id', Auth::user()->id)->get();
        return view('livewire.author.papers.lists', ['papers' =>  $papers]);
    }

}
