<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Pegawai;
use App\Models\Slide;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(6)->get();
        return view('base.index', $data);
    }

    
    public function pegawai()
    {
        $data['list_pegawai'] = Pegawai::all();

        return view('base.pegawai', $data);
    }

    public function berita() {
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->get();
         return view('base.berita', $data);
    }

    public function show($berita) {
        $data['berita']=Berita::find($berita);
        $data['data_berita'] = Berita::orderBy('id', 'DESC')->take(6)->get();
        return view('base.show', $data);
    }
}
