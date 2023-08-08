<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GridInterior extends Component
{
    public $judul;
    public $link;
    public $deskripsi;
    public function __construct($judul, $link, $deskripsi)
    {
        $this->judul = $judul;
        $this->link = $link;
        $this->deskripsi = $deskripsi;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid-interior');
    }
}
