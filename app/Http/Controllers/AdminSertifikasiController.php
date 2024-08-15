<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSertifikasiController extends Controller
{
    public function index(){
        $sertifikasi = Sertifikasi::latest()->paginate(5);

        return view('sertifikasi.index', compact('sertifikasi'));
    }

    public function create(){
        return view('sertifikasi.create');
    }

    public function store(Request $request){
        $request->validate([
            'gambar' => 'required|image',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/sertifikasi', $gambar->hashName());

        Sertifikasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar->hashName(),
        ]);

        return redirect()->route('admin.sertifikasi.index')->with('success', "Berhasil menambah sertifikasi");
    }

    public function edit($id){
        $sertifikasi = Sertifikasi::find($id);
        
        return view('sertifikasi.edit', compact('sertifikasi'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $sertifikasi = Sertifikasi::find($id);

        if($request->file('gambar')){
            Storage::delete("public/sertifikasi/". $sertifikasi->gambar);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/sertifikasi', $gambar->hashName());

            $sertifikasi->update([
                'judul'=> $request->judul,
                'deskripsi'=> $request->deskripsi,
                'gambar' => $gambar->hashName()
            ]);
        }else{
            $sertifikasi->update([
                'judul'=> $request->judul,
                'deskripsi'=> $request->deskripsi
            ]);
        }


        return redirect()->route('admin.sertifikasi.index')->with('success', "Berhasil mengedit sertifikasi");
    }

    public function delete($id){

        $sertifikasi = Sertifikasi::find($id);
        
        Storage::delete("public/sertifikasi/". $sertifikasi->gambar);

        $sertifikasi->delete();

        return redirect()->route('admin.sertifikasi.index')->with('success', "Berhasil menghapus sertifikasi");
    }

}
