<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'route' => 'index',
            'title' => 'Desain Rakyat | Desain Murah, Harga Merakyat!',
        ]);
    }
    public function desaingrafis()
    {
        return view('frontend.desaingrafis', [
            'route' => 'desaingrafis',
            'title' => 'Desain Rakyat | Desain Grafis'
        ]);
    }
    public function editvideo()
    {
        return view('frontend.editvideo', [
            'route' => 'editvideo',
            'title' => 'Desain Rakyat | Edit Video'
        ]);
    }
    public function web()
    {
        return view('frontend.web', [
            'route' => 'web',
            'title' => 'Desain Rakyat | Web & UI/UX'
        ]);
    }
    public function interior()
    {
        return view('frontend.interior', [
            'route' => 'interior',
            'title' => 'Desain Rakyat | Desain Interior'
        ]);
    }
    public function tentang()
    {
        return view('frontend.tentang', [
            'route' => 'tentang',
            'title' => 'Desain Rakyat | Tentang Kami'
        ]);
    }
}
