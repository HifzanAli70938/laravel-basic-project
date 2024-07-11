<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Box extends Component
{
    public $title;
    public $buttonText;

    public function __construct($title, $buttonText = null)
    {
        $this->title = $title;
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.box');
    }
}
