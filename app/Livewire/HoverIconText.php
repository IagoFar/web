<?php

namespace App\Livewire;

use Livewire\Component;

class HoverIconText extends Component
{
    public $icon;
    public $text;
    public $url;
    public $textWidth;

    public function mount($icon, $text, $url, $textWidth = '20')
    {
        $this->icon = $icon;
        $this->text = $text;
        $this->url = $url;
        $this->textWidth = $textWidth;
    }

    public function render()
    {
        return view('livewire.hover-icon-text');
    }
}
