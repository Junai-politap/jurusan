<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Pegawai;
use App\Models\Slide;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();
        $data['list_visimisi_ti'] = VisiMisi::where('unit_kerja', 'Program Studi D3 Teknologi Informasi')->get();
        $data['list_visimisi_te'] = VisiMisi::where('unit_kerja', 'Program Studi D3 Teknologi Listrik')->get();
        $data['list_berita'] = Berita::orderBy('id', 'DESC')->take(6)->get();
        return view('base.index', $data);
    }

    
    public function dosenTI()
    {
        $data['list_pegawai'] = Pegawai::where('unit_kerja', 'Prodi DIII Teknologi Informasi')->get();

        return view('base.pegawai-ti', $data);
    }

    public function dosenTE()
    {
        $data['list_pegawai'] = Pegawai::where('unit_kerja', 'Prodi DIII Teknologi Listrik')->get();

        return view('base.pegawai-te', $data);
    }

    public function teknisiTI() {

        $data['list_pegawai'] = Pegawai::where('unit_kerja', 'Prodi DIII Teknologi Informasi')->get();

        return view('base.teknisi-ti', $data);
        
    }

     public function teknisiTE() {

        $data['list_pegawai'] = Pegawai::where('unit_kerja', 'Prodi DIII Teknologi Listrik')->get();

        return view('base.teknisi-te', $data);
        
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

    public function strukturOrganisasi() {
        
        return view('base.struktur-organisasi');
    }
}
