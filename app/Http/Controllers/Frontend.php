<?php

namespace App\Http\Controllers;

use App\Models\GraphicDesigns;
use App\Models\Highlight;
use App\Models\InteriorDesign;
use App\Models\Review;
use App\Models\VideoEditings;
use App\Models\Webs;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function index()
    {
        return view('frontend.homepage', [
            'title' => 'Desain Rakyat | Desain Murah, Harga Merakyat!',
            'highlights' => Highlight::all()
        ]);
    }
    public function desaingrafis()
    {
        return view('frontend.desaingrafis', [
            'title' => 'Desain Rakyat | Desain Grafis',
            'desaingrafis' => GraphicDesigns::all(),
        ]);
    }
    public function editvideo()
    {
        return view('frontend.editvideo', [
            'title' => 'Desain Rakyat | Edit Video',
            'videos' => VideoEditings::all()
        ]);
    }
    public function web()
    {
        return view('frontend.web', [
            'title' => 'Desain Rakyat | Web & UI/UX',
            'webs' => Webs::all()
        ]);
    }
    public function interior()
    {
        return view('frontend.interior', [
            'title' => 'Desain Rakyat | Desain Interior',
            'interiors' => InteriorDesign::all()
        ]);
    }
    public function tentang()
    {
        return view('frontend.tentang', [
            'title' => 'Desain Rakyat | Tentang Kami',
            'reviews' => Review::all()
        ]);
    }
}
