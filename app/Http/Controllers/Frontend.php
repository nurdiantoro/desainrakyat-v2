<?php

namespace App\Http\Controllers;

use App\Models\GraphicDesigns;
use App\Models\InteriorDesign;
use App\Models\VideoEditings;
use App\Models\Webs;
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
            'title' => 'Desain Rakyat | Desain Grafis',
            'desaingrafis' => GraphicDesigns::all(),
        ]);
    }
    public function editvideo()
    {
        return view('frontend.editvideo', [
            'route' => 'editvideo',
            'title' => 'Desain Rakyat | Edit Video',
            'videos' => VideoEditings::all()
        ]);
    }
    public function web()
    {
        return view('frontend.web', [
            'route' => 'web',
            'title' => 'Desain Rakyat | Web & UI/UX',
            'webs' => Webs::all()
        ]);
    }
    public function interior()
    {
        return view('frontend.interior', [
            'route' => 'interior',
            'title' => 'Desain Rakyat | Desain Interior',
            'interiors' => InteriorDesign::all()
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
