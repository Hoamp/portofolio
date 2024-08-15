<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use Illuminate\Http\Request;

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
        return $request;
    }
}
