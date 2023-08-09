<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GraphicDesigns;
use App\Models\ImageInterior;
use App\Models\InteriorDesign;
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

    public function interior()
    {
        return view('backend.interior', [
            'title' => 'Admin | interior',
            'interiors' => InteriorDesign::all(),
        ]);
    }

    public function interiordetail($id)
    {
        return view('backend.interior-detail', [
            'title' => 'Admin | interior',
            'interior' => InteriorDesign::where('id', $id)->first(),
            'images' => ImageInterior::where('id_interior', $id)->get(),
        ]);
    }

    // ============================================= CREATE =============================================
    public function tambahdesaingrafis(Request $request)
    {
        $file = $request->file('file');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'portfolio-files/grafis';
        $file->move($tujuan_upload, $nama_file);

        GraphicDesigns::create([
            'judul' => $request->judul,
            'file' => $nama_file,
            'kategori' => $request->kategori,
        ]);

        return Redirect::back();
    }

    public function tambaheditvideo(Request $request)
    {
        $tujuan_upload = 'portfolio-files/video';

        $thumbnail = $request->file('thumbnail');
        $nama_thumbnail = time() . "_" . $thumbnail->getClientOriginalName();
        $thumbnail->move($tujuan_upload, $nama_thumbnail);

        VideoEditings::create([
            'judul' => $request->judul,
            'file' => $request->file,
            'thumbnail' => $nama_thumbnail,
        ]);

        return Redirect::back();
    }

    public function tambahweb(Request $request)
    {
        $tujuan_upload = 'portfolio-files/web';

        $thumbnail = $request->file('thumbnail');
        $nama_thumbnail = time() . "_" . $thumbnail->getClientOriginalName();
        $thumbnail->move($tujuan_upload, $nama_thumbnail);

        Webs::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link,
            'thumbnail' => $nama_thumbnail,
        ]);

        return Redirect::back();
    }

    public function tambahinterior(Request $request)
    {
        $tujuan_upload = 'portfolio-files/interior';

        $thumbnail = $request->file('thumbnail');
        $nama_thumbnail = time() . "_" . $thumbnail->getClientOriginalName();
        $thumbnail->move($tujuan_upload, $nama_thumbnail);

        InteriorDesign::create([
            'judul' => $request->judul,
            'link' => $request->link,
            'thumbnail' => $nama_thumbnail,
            'deskripsi' => $request->deskripsi,
        ]);

        return Redirect::back();
    }

    public function tambahinteriordetail(Request $request)
    {
        $tujuan_upload = 'portfolio-files/interior';

        $image = $request->file('image');
        $nama_image = time() . "_" . $image->getClientOriginalName();
        $image->move($tujuan_upload, $nama_image);

        ImageInterior::create([
            'id_interior' => $request->id_interior,
            'image' => $nama_image,
        ]);

        return Redirect::back();
    }

    // ============================================= Update =============================================
    public function ubahdesaingrafis(Request $request)
    {
        $id = $request->id;
        $judul = $request->judul;
        $kategori = $request->kategori;

        if ($request->file('file') != Null) {
            $file = $request->file('file');
            $tujuan_upload = 'portfolio-files/grafis'; // Folder public/portofolio-files
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = $request->file_lama;
        }

        DB::table('graphic_designs')->where('id', $id)
            ->update([
                'judul' => $judul,
                'file' => $nama_file,
                'kategori' => $kategori,
            ]);

        return Redirect::back();
    }

    public function ubahvideo(Request $request)
    {
        $id = $request->id;
        $judul = $request->judul;
        $tujuan_upload = 'portfolio-files/video'; // Folder public/portofolio-files/video

        if ($request->file('thumbnail') != Null) {
            $thumbnail = $request->file('thumbnail');
            $nama_thumbnail = time() . "_" . $thumbnail->getClientOriginalName();
            $thumbnail->move($tujuan_upload, $nama_thumbnail);
        } else {
            $nama_thumbnail = $request->thumbnail_lama;
        }

        VideoEditings::where('id', $id)
            ->update([
                'judul' => $judul,
                'file' => $request->file,
                'thumbnail' => $nama_thumbnail,
            ]);

        return Redirect::back();
    }

    public function ubahweb(Request $request)
    {
        $id = $request->id;
        $tujuan_upload = 'portfolio-files/web'; // Folder public/portofolio-files/web

        if ($request->file('thumbnail') != Null) {
            $thumbnail = $request->file('thumbnail');
            $nama_thumbnail = time() . "_" . $thumbnail->getClientOriginalName();
            $thumbnail->move($tujuan_upload, $nama_thumbnail);
        } else {
            $nama_thumbnail = $request->thumbnail_lama;
        }

        Webs::where('id', $id)
            ->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'link' => $request->link,
                'thumbnail' => $nama_thumbnail,
            ]);

        return Redirect::back();
    }

    public function ubahinterior(Request $request)
    {
        $id = $request->id;
        $tujuan_upload = 'portfolio-files/interior'; // Folder public/portofolio-files/interior

        if ($request->file('image') != Null) {
            $thumbnail = $request->file('thumbnail');
            $nama_thumbnail = time() . "_" . $thumbnail->getClientOriginalName();
            $thumbnail->move($tujuan_upload, $nama_thumbnail);
        } else {
            $nama_thumbnail = $request->thumbnail_lama;
        }

        InteriorDesign::where('id', $id)
            ->update([
                'judul' => $request->judul,
                'link' => $request->link,
                'thumbnail' => $nama_thumbnail,
                'deskripsi' => $request->deskripsi,
            ]);

        return Redirect::back();
    }

    // ============================================= DELETE =============================================
    public function hapusdesaingrafis($id)
    {
        GraphicDesigns::find($id)->delete();
        return Redirect::back();
    }
    public function hapuseditvideo($id)
    {
        VideoEditings::find($id)->delete();
        return Redirect::back();
    }
    public function hapusweb($id)
    {
        Webs::find($id)->delete();
        return Redirect::back();
    }
    public function hapusinterior($id)
    {
        InteriorDesign::find($id)->delete();
        return Redirect::back();
    }
    public function hapusinteriordetail($id)
    {
        ImageInterior::find($id)->delete();
        return Redirect::back();
    }
}
