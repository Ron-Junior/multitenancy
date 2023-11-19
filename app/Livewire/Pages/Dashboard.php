<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Dashboard extends Component
{
    public function mount()
    {
        dd('test');
    }
    public function render()
    {
        return view('livewire.pages.dashboard');
    }
}
