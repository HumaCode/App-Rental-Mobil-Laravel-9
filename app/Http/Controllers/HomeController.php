<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Home",
            "daftarmobil" => Mobil::orderBy('id', 'desc')->take(3)->get()
        ];
        return view("user.home", $data);
    }   //
}
