<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sertifikasi = Sertifikasi::latest()->paginate(6);

        return view('index', compact('sertifikasi'));
    }
}
