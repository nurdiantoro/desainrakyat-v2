<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GraphicDesigns;
use App\Models\VideoEditings;
use App\Models\Webs;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class Backend extends Controller
{
    // READ =============================================
    public function index()
    {
        return view('backend.index', [
            'title' => 'Admin | Dashboard',
        ]);
    }

    public function desaingrafis()
    {
        return view('backend.desaingrafis', [
            'title' => 'Admin | Desain Grafis',
            'desains' => GraphicDesigns::all(),
        ]);
    }

    public function editvideo()
    {
        return view('backend.editvideo', [
            'title' => 'Admin | Edit Video',
            'videos' => VideoEditings::all(),
        ]);
    }

    public function web()
    {
        return view('backend.web', [
            'title' => 'Admin | Web',
            'webs' => Webs::all(),
        ]);
    }

    // ============================================= CREATE =============================================
    public function tambahdesaingrafis(Request $request)
    {
        $file = $request->file('file');
        $tujuan_upload = 'portfolio-files';
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move($tujuan_upload, $nama_file);

        GraphicDesigns::create([
            'judul' => $request->judul,
            'file' => $nama_file,
            'kategori' => $request->kategori,
        ]);

        return Redirect::back();
    }

    // ============================================= Update =============================================
    public function ubahdesaingrafis(Request $request)
    {
        $id = $request->id;

        if ($request->file('file') != Null) {
            $file = $request->file('file');
            $tujuan_upload = 'portfolio-files';
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);
        }else{
            $nama_file = $request->file('file_lama');
        }

        // echo $id;
        DB::table('graphic_designs')->where('id', $id)->dd();
        // DB::table('graphic_designs')
        //       ->where('id', $id)
        //       ->update([
        //         'judul' => $request->judul,
        //         'file' => $nama_file,
        //         'kategori' => $request->kategori,
        //       ]);

        // GraphicDesigns::where('id', $id)
        //     ->update([
        //         'judul' => $request->judul,
        //         'file' => $nama_file,
        //         'kategori' => $request->kategori,
        //     ]);

        // return Redirect::back();
    }

    // ============================================= DELETE =============================================
    public function hapusdesaingrafis($id)
    {
        $grafis = GraphicDesigns::find($id);
        $grafis->delete();
        return Redirect::back();
    }
}
