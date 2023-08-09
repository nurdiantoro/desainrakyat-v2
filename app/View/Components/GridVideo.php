<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GridVideo extends Component
{
    public $img;
    public $text;
    public $link;
    public function __construct($img, $text, $link)
    {
        //
        $this->img = $img;
        $this->text = $text;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid-video');
    }
}
