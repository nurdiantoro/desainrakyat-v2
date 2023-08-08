<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GridGrafis extends Component
{

    public $src;
    public $judul;
    public $kategori;

    public function __construct($src, $judul, $kategori)
    {
        //
        $this->src = $src;
        $this->judul = $judul;
        $this->kategori = $kategori;
    }


    public function render(): View|Closure|string
    {
        return view('components.grid-grafis');
    }
}
