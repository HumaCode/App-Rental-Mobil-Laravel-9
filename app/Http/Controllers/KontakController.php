<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Kontak Kami",
            "setting" => Setting::find(1),
        ];
        return view("user.kontak", $data);
    }   //
}
