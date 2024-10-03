<?php

namespace App\Livewire;

use Livewire\Component;

class HoverText extends Component
{
    public $initialText;
    public $hoverText;

    public function mount($initialText, $hoverText)
    {
        $this->initialText = $initialText;
        $this->hoverText = $hoverText;
    }

    public function render()
    {
        return view('livewire.hover-text');
    }
}
