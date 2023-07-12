<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Kontak Kami"
        ];
        return view("user.kontak", $data);
    }   //
}
