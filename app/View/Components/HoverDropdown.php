<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HoverDropdown extends Component
{
    public $width;
    public $contentClasses;

    public function __construct($width = 'w-48', $contentClasses = '')
    {
        $this->width = $width;
        $this->contentClasses = $contentClasses;
    }

    public function render()
    {
        return view('components.hover-dropdown');
    }
}
