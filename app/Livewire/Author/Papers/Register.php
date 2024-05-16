<?php

namespace App\Livewire\Author\Papers;

use Livewire\Component;
use App\Models\Paper;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class Register extends Component
{
    public $title = null;
    public $abstract = null;
    use LivewireAlert;
    public function render()
    {
        return view('livewire.author.papers.register');
    }

    public function save(){
        $this->validate([
            'title' => 'required',
            'abstract' => 'required',
        ]);

        Paper::create([
            'title' => $this->title,
            'abstract' => $this->abstract,
        ]);

        //$this->alert('success', 'Draft paper anda berhasil disimpan');
    }
}
