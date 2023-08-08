<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GraphicDesigns;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    public function index()
    {
        return view('test.test');
    }

    public function tambahPage()
    {
        return view('test.tambah');
    }
    public function tambah(Request $request)
    {
        // dd($request);
        $graphic = new GraphicDesigns;
        // $graphic->judul = $request->input('judul');
        // $graphic->file = $request->input('file');
        // $graphic->kategori = $request->input('kategori');
        $graphic->judul = $request->judul;
        $graphic->file = $request->file;
        $graphic->kategori = $request->kategori;
        $graphic->save();

        return Redirect::back();
    }

    public function ubah($id){
        $db = DB::table('graphic_designs')->where('id', $id)->first();
        dd($db);
    }
}
