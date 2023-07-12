<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Layanan"
        ];
        return view("user.layanan", $data);
    }   //
}
