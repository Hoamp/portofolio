<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    public function index(){
        $project = Project::latest()->paginate(6);

        return view('project.index', compact('project'));
    }
    
    public function create(){
        return view('project.create');
    }
    public function store(Request $request){
        $request->validate([
            'gambar' => 'required|image',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/project', $gambar->hashName());

        Project::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar->hashName(),
        ]);

        return redirect()->route('admin.project.index')->with('success', "Berhasil menambah project");
    }

    public function edit($id){
        $project = Project::find($id);
        
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $project = Project::find($id);

        if($request->file('gambar')){
            Storage::delete("public/project/". $project->gambar);

            $gambar = $request->file('gambar');
            $gambar->storeAs('public/project', $gambar->hashName());

            $project->update([
                'judul'=> $request->judul,
                'deskripsi'=> $request->deskripsi,
                'gambar' => $gambar->hashName()
            ]);
        }else{
            $project->update([
                'judul'=> $request->judul,
                'deskripsi'=> $request->deskripsi
            ]);
        }


        return redirect()->route('admin.project.index')->with('success', "Berhasil mengedit project");
    }

    public function delete($id){

        $project = Project::find($id);
        
        Storage::delete("public/project/". $project->gambar);

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', "Berhasil menghapus project");
    }

}
