<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PanelNavbar extends Component
{
    public function render()
    {
        return view('livewire.panel-navbar', [
            'user' => Auth::user()
        ]);
    }
}
