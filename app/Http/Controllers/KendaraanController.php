<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Kendaraan",
            "daftarmobil" => Mobil::orderBy('id', 'desc')->take(3)->get()
        ];
        return view("user.kendaraan", $data);
    }   //
}
