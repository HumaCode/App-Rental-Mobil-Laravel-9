<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Layanan",
            "setting" => Setting::find(1),

        ];
        return view("user.layanan", $data);
    }   //
}
