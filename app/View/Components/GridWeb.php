<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GridWeb extends Component
{
    public $judul;
    public $deskripsi;
    public $link;
    public $thumbnail;
    public function __construct($judul, $deskripsi, $link, $thumbnail)
    {
        $this->judul = $judul;
        $this->deskripsi = $deskripsi;
        $this->link = $link;
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid-web');
    }
}
